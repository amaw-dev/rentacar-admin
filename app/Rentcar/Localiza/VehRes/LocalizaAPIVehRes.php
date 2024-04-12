<?php

namespace App\Rentcar\Localiza\VehRes;

use App\Rentcar\Localiza\LocalizaAPI;
use App\Rentcar\Localiza\VehRes\VehRes;
use SimpleXMLElement;

class LocalizaAPIVehRes extends LocalizaAPI {

    private $name;
    private $email;
    private $phoneNumber;
    private $phonePrefix;
    private $documentType;
    private $document;
    private $reference;
    private $returnDateTime;
    private $pickupDateTime;
    private $returnLocation;
    private $pickupLocation;
    private $category;
    private $selectedDays;
    private $vehicleChargeDay;
    private $vehicleChargeTotal;
    private $aeroline;
    private $flightNumber;
    private $flightDateTime;


    private $soapAction = '"http://www.opentravel.org/OTA/2003/05:OTA_VehAvailRateRQ"';
    private $context;

    public function __construct(
        $name,
        $email,
        $phoneNumber,
        $phonePrefix,
        $documentType,
        $document,
        $reference,
        $returnDateTime,
        $pickupDateTime,
        $returnLocation,
        $pickupLocation,
        $category,
        $selectedDays,
        $vehicleChargeDay,
        $vehicleChargeTotal,
        $aeroline,
        $flightNumber,
        $flightDateTime,
    ){
        parent::__construct();

        $this->name = $name;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->phonePrefix = $phonePrefix;
        $this->documentType = $documentType;
        $this->document = $document;
        $this->reference = $reference;
        $this->returnDateTime = $returnDateTime;
        $this->pickupDateTime = $pickupDateTime;
        $this->returnLocation = $returnLocation;
        $this->pickupLocation = $pickupLocation;
        $this->category = $category;
        $this->selectedDays = $selectedDays;
        $this->vehicleChargeDay = $vehicleChargeDay;
        $this->vehicleChargeTotal = $vehicleChargeTotal;
        $this->aeroline = $aeroline;
        $this->flightNumber = $flightNumber;
        $this->flightDateTime = $flightDateTime;

    }

    private function getFilledInputXML(){
        return <<<XML
        <s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/">
            <s:Body
                xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                xmlns:xsd="http://www.w3.org/2001/XMLSchema">
                <OTA_VehRes
                    xmlns="http://tempuri.org/">
                    <OTA_VehResRQ PrimaryLangID="esp"
                        RetransmissionIndicator="false" TransactionStatusCode="Start" Version="0"
                        TimeStamp="0001-01-01T00:00:00" EchoToken="{$this->token}"
                        MaxPerVendorInd="false">
                        <POS>
                            <Source ISOCountry="CO">
                                <RequestorID
                                    ID="{$this->requestorID}" Type="5" xmlns="http://www.opentravel.org/OTA/2003/05" />
                            </Source>
                        </POS>
                        <VehResRQCore>
                            <Customer
                                xmlns="http://www.opentravel.org/OTA/2003/05">
                                <Primary>
                                    <PersonName Surname="{$this->name}" />
                                    <Email>{$this->email}</Email>
                                    <Telephone
                                        PhoneUseType="5"
                                        PhoneTechnologyType="5"
                                        CountryAccessCode="57"
                                        PhoneNumber="3155555555"
                                    />
                                    <CitizenCountryName Code="CO" />
                                    <!-- 5 cedula -->
                                    <!-- 2 pasaporte -->
                                    <Document
                                        DocumentType="{$this->documentType}"
                                        DocID="{$this->document}"
                                    />
                                </Primary>
                            </Customer>
                            <!-- parece la referencia obtenida de la busqueda -->
                            <UniqueID Type="24" ID="{$this->reference}" />

                            <!-- info devuelto por la busqueda de categorias -->
                            <VehRentalCore OneWayIndicator="true" ReturnDateTime="{$this->returnDateTime}" PickUpDateTime="{$this->pickupDateTime}" xmlns="http://www.opentravel.org/OTA/2003/05">
                                <PickUpLocation LocationCode="{$this->pickupLocation}" CodeContext="internal code"/>
                                <ReturnLocation LocationCode="{$this->returnLocation}" CodeContext="internal code"/>
                            </VehRentalCore>
                            <!-- info devuelto por la busqueda de categorias -->
                            <RateQualifier RatePeriod="Daily" RateQualifier="018118" RateCategory="16"/>
                            <VehPref Code="{$this->category}" />
                            <VehicleCharges>
                                <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="142886.94" Purpose="1">
                                    <Calculation UnitCharge="{$this->vehicleChargeDay}" UnitName="Day" Quantity="{$this->selectedDays}" Total="{$this->vehicleChargeTotal}"/>
                                </VehicleCharge>
                            </VehicleCharges>
                        </VehResRQCore>
                        <VehResRQInfo>
                            <!-- al parecer en caso de reservar en una sucursal aeropuerto, se debe especificar datos del vuelo -->
                            <ArrivalDetails>
                                <OperatingCompany Code="{$this->aeroline}" />
                                <Number>{$this->flightNumber}</Number>
                                <ArrivalDateTime>{$this->flightDateTime}</ArrivalDateTime>
                            </ArrivalDetails>
                            <!-- 19 Travel Agency IATA Number -->
                            <RentalPaymentPref PaymentType="19" />
                            <!-- 7 Collision damage waiver -->
                            <CoveragePref CoverageType="7" />

                        </VehResRQInfo>
                    </OTA_VehResRQ>
                </OTA_VehRes>
            </s:Body>
        </s:Envelope>
        XML;
    }
}
