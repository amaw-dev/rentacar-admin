<?php

namespace App\Rentcar\DataRepositories;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class DataRepository {

    /**
     * Model of the repository
     */
    public $model;

    /**
     * Number of records per page
     */
    public $perPage = 15;

    /**
     * Columns of table to fetch
     */
    public $columns = ['*'];

    /**
     * name of the bag which contains page info, default page
     */
    public $pageName = 'page';

    /**
     * Columns to order by (default: id, desc)
     */
    public $orderByCols = ['id','desc'];

    /**
     * Add relations to the query
     */
    public $withRelations = [];

    /**
     * Doctrine query repository variable
     */
    public $query;

    /**
     * Request instance
     */
    public $request;

    /**
     * Default date format
     */
    public $defaultDateFormat = 'Y-m-d';

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __construct(Request $request) {
        $this->request = $request;
        $this->buildQuery();
    }

    /**
     * Get paginator instance from query
     *
     * @return \Illuminate\Pagination\Paginator
     */
    public function getPaginator()
    {
        $paginator = $this->query->paginate(
            // (int) $this->perPage,
            // null,
            // (int) $this->request->input('page',1)
        );

        $paginator = $this->addQueryStringValues($paginator);

        return $paginator;
    }

    /**
     * Get Eloquent query instance from query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Add query string values to paginator
     *
     * @return \Illuminate\Pagination\Paginator
     */
    public function addQueryStringValues($paginator)
    {
        $query_strings = [];

        $query_strings['orderByCol'] = $this->request->input('orderByCol', $this->orderByCols[0]);
        $query_strings['orderOrientation'] = $this->request->input('orderOrientation', $this->orderByCols[1]);

        if($this->request->filled('query'))
            $query_strings['query'] = $this->request->input('query');

        if($this->request->filled('filterCols'))
            $query_strings['filterCols'] = $this->request->input('filterCols', null);

        if($this->request->filled('filterStartDate'))
            $query_strings['filterStartDate'] = $this->request->input('filterStartDate');

        if($this->request->filled('filterEndDate'))
            $query_strings['filterEndDate'] = $this->request->input('filterEndDate');

        if($this->request->filled('perPage'))
            $query_strings['perPage'] = $this->request->input('perPage');

        if(count($query_strings) > 0)
            $paginator->appends($query_strings);

        return $paginator;
    }

    /**
     * Create base query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function buildQuery(): void
    {
        $this->query = new $this->model;

        if(count($this->withRelations) > 0)
            $this->query = $this->query->with($this->withRelations);

        $this->addFreeSearch();

        $this->addFilters();

        $this->addOrderByFields();

        $this->addDateRangeFilters();

        // $this->addPerPageFilter();

    }

    /**
     * Add free search statements to main query
     * Using Laravel Scout
     *
     * @return void
     */
    public function addFreeSearch(): void
    {
        if($this->request->filled('query')){
            $search_term = $this->request->input('query');
            $this->query = $this->query->search($search_term);
        }
    }

    /**
     * Add filter columns to main query
     *
     * @return void
     */
    public function addFilters(): void
    {
        if($this->request->filled('filterCols')){
            foreach($this->request->input('filterCols') as $field => $value){
                $this->query = $this->query->where($field, 'like', "%{$value}%");
            }
        }
    }

    /**
     * Add order fields to main query
     *
     * @return void
     */
    public function addOrderByFields(): void
    {
        $orderCol = str($this->request->input('orderByCol', $this->orderByCols[0]));
        $orderOrientation = $this->request->input('orderOrientacion', $this->orderByCols[1]);

        if($orderCol->contains('.')){
            /**
             * Here is a relation order table and column ie: "owner.name"
             * Create a join with the table and search with the column
             */

            $relation_table = (string) $orderCol->before('.');
            $model_table = (new $this->model)->getTable();
            $model_join_pivot = Arr::join([$model_table, str($relation_table)->singular() . "_id"], '.');
            $relation_join_pivot = Arr::join([$relation_table,'id'], '.');

            $this->query =
                $this->query->join($relation_table, $model_join_pivot, "=", $relation_join_pivot)
                ->orderBy((string) $orderCol, $orderOrientation);
        }
        else{
            $this->query = $this->query->orderBy($orderCol,$orderOrientation);
        }
    }

    /**
     * Add date range filters to main query
     *
     * @return void
     */
    public function addDateRangeFilters(): void
    {
        if($this->request->filled('filterDateRanges')){
            // dd($this->request->input('filterDateRanges'));
            foreach($this->request->input('filterDateRanges') as $field => $dateRange){
                try {
                    $rawStartDate = $dateRange['start'];
                    $rawEndDate = $dateRange['end'];

                    $startDate = Carbon::createFromFormat($this->defaultDateFormat, $rawStartDate);
                    $endDate = Carbon::createFromFormat($this->defaultDateFormat, $rawEndDate);

                    $this->query = $this->query->whereBetween($field, [$startDate, $endDate]);
                    // $this->query->dd();
                } catch (\InvalidArgumentException $th) {
                    Log::warning('invalid argument in Carbon date parsing in DataRepository', $th);
                }

            }
        }
    }

    /**
     * Add per page filter to main query
     *
     * @return void
     */
    public function addPerPageFilter(): void
    {
        if($this->request->filled('perPage')){
            $this->perPage = $this->request->input('perPage');
        }
    }

}
