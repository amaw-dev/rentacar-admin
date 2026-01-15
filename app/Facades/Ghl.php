<?php

namespace App\Facades;

use App\Services\Ghl\GhlClient;
use Illuminate\Support\Facades\Facade;

/**
 * @method static GhlClient forFranchise(string $franchiseKey)
 * @method static array|null upsertContact(array $data)
 * @method static array|null findContactByEmail(string $email)
 * @method static array|null findContactByPhone(string $phone)
 * @method static array|null createOpportunity(string $contactId, array $data)
 * @method static array|null updateOpportunity(string $opportunityId, array $data)
 *
 * @see GhlClient
 */
class Ghl extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'ghl';
    }
}
