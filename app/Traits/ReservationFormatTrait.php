<?php

namespace App\Traits;

use App\Enums\IdentificationType;
use App\Models\Branch;

trait ReservationFormatTrait {

    use FormatTrait;

    public function formattedShortIdentificationType(): string {
        $identificationType = IdentificationType::from($this->identification_type);
        $format = "";

        if($identificationType === IdentificationType::Cedula)
            $format = "C.C.";
        else if($identificationType === IdentificationType::CedulaExtranjeria)
            $format = "C.E.";
        else if($identificationType === IdentificationType::Pasaporte)
            $format = "Pasaporte";

        return $format;

    }

    public function formattedCategory(): string {
        return $this->categoryObject->category ?? "";
    }

    public function formattedPickupPlace(): string {
        return $this->formattedBranch($this->pickupLocation);
    }

    public function formattedPickupCity(): string {
        return $this->pickupLocation->city->name;
    }

    public function formattedReturnPlace(): string {
        return $this->formattedBranch($this->returnLocation);
    }

    public function formattedReturnCity(): string {
        return $this->returnLocation->city->name;
    }

    public function formattedExtraHoursPrice(): string {
        return $this->moneyFormat($this->extra_hours_price);
    }

    public function formattedCoveragePrice(): string {
        return $this->moneyFormat($this->coverage_price);
    }

    public function formattedTaxFee(): string{
        return $this->moneyFormat($this->tax_fee);
    }

    public function formattedIVAFee(): string {

    public function formattedSubtotalPrice(): string {
        return $this->moneyFormat($this->getSubtotalPrice());
    }

    public function formattedTotalPrice(): string {
        return $this->moneyFormat($this->total_price);
    }

    public function formattedTotalPriceLocaliza(): string {
        return $this->moneyFormat($this->total_price_localiza);
    }

    public function formattedPickupDate(): string {
        return $this->dateFormat($this->pickup_date);
    }

    public function formattedReturnDate(): string {
        return $this->dateFormat($this->return_date);
    }

    public function formattedPickupHour(): string {
        return $this->hourFormat($this->pickup_hour);
    }

    public function formattedReturnHour(): string {
        return $this->hourFormat($this->return_hour);
    }

    private function formattedBranch(Branch|null $branch): string{
        return ($branch) ? "{$branch->name} - {$branch->code}" : "";
    }
}
