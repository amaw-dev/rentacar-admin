<s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/">
    <s:Body xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
        <OTA_VehAvailRateResponse xmlns="http://tempuri.org/">
            <OTA_VehAvailRateRS TimeStamp="0001-01-01T00:00:00" Target="Test" Version="0" TransactionStatusCode="Start" RetransmissionIndicator="false">
                <Success/>
                <VehAvailRSCore>
                    <VehRentalCore OneWayIndicator="false" ReturnDateTime="2024-01-20T12:00:00" PickUpDateTime="2024-01-18T12:00:00" xmlns="http://www.opentravel.org/OTA/2003/05">
                        <PickUpLocation LocationCode="AABOT" CodeContext="internal code"/>
                        <ReturnLocation LocationCode="AAMED" CodeContext="internal code"/>
                    </VehRentalCore>
                    <VehVendorAvails xmlns="http://www.opentravel.org/OTA/2003/05">
                        <VehVendorAvail>
                            <VehAvails RatePeriod="Daily" RateCategory="16">
                                <VehAvail>
                                    <VehAvailCore IsAlternateInd="false" Status="Available">
                                        <Vehicle FuelType="Unspecified" DriveType="Unspecified" AirConditionInd="true" TransmissionType="Manual" Description="ECONÔMICO COM AR" OdometerUnitOfMeasure="Km" VendorCarType="EDMR" BaggageQuantity="2" PassengerQuantity="5" CodeContext="internal code" Code="C">
                                            <VehType VehicleCategory="1" DoorCount="4"/>
                                            <VehClass Size="3"/>
                                            <VehMakeModel Name="Kia Picanto 1.0"/>
                                            <PictureURL>https://www.localiza.com/colombia-site/geral/Frota/PICX.png</PictureURL>
                                        </Vehicle>
                                        <RentalRate>
                                            <RateDistance Unlimited="true" DistUnitName="Km" VehiclePeriodUnitName="Day"/>
                                            <VehicleCharges>
                                                <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="307164.24" Purpose="1">
                                                    <Calculation UnitCharge="153582.12" UnitName="Day" Quantity="2" Total="307164.24"/>
                                                </VehicleCharge>
                                            </VehicleCharges>
                                            <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                                            <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                                        </RentalRate>
                                        <TotalCharge RateTotalAmount="307164.24" EstimatedTotalAmount="642203.56816" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                                        <Fees>
                                            <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="49060.624" Purpose="6">
                                                <Calculation Percentage="10" Total="49060.624"/>
                                            </Fee>
                                            <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa de retorno" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="125442" Purpose="2"/>
                                            <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="102536.70416" Purpose="7"/>
                                        </Fees>
                                        <Reference ID="vQsAAB+LCAAAAAAABACNVs2S2jgQfhXKZ5iSf7G5eYDZUJsM1IyTy5KDwIKo1rZY2Z5QmeJp9rAPkhdLy7KN/BfvHKga99dfd3/qlvpdC9jfJNlhfqQ40haaburI0i3L1abaR5pmeMmSkB4xW7KYlKC/3rVNSJKMnsAQMt4DMVwXIXvuTUeQhgr9QniKGXyZas8A2J4IzzDktH1avwT+5DXwn1f+ywoyW7KQnlmAOT0JANJdXXfg+4qkR5ZkbAfsEDbH0Sea0Bg4TfSgu55nmXMbFX92LxpfB9F+xukhz1ha5QUyCAYuCqqMkMyf8eQjfeNEu037ATvOMvLzv5//sknIJkvMOdNuX6uilhGFXIioam6almfMtbspTzPC11f4SYApyaNIStVvqYP3myXp+g3CsZYpoBe2Ysc8FrY6EPzLu5+lHOsYomX4nxwyP+EoJVNtx9I0pwHhMUvlwTOSaouM56SR9SZpxG42zDjEB1UTFlM4EadWCieiC8tiRIeDnjN9biDb8BxHNPcnkuEQ/MHwvuf7ZDLZN3kfIwbVULbXFpOCqELJEP6ZJNDBLySjHIgEaq/5/uM22Gs1VIorHQTCQehOI0sree4Yz3aQV6Nkj78QELnAyThId0zPUQJJ2JJxTtILaC1aqIKK2VCgnRm8h65HscL+wfOLkj44K0QrnOEPjHeSM5BhzZAOcge6vrDdheE9OLpjm4Y9Q+YCoV4OVcaawQ10AxxaPuXYvtL4EpFUuJQnqFrF5+4YS9xtiOvz5QxZFMq9d0FPmF5xpx0a1n6CNUxGBpp3fWmC49Kg1NDpiXZnVdINylZopspWeew4ORYdDh3Q8rIDfb6w5wvTe5hbDceitE1Cj3IaUNv0ROOqtLbAG+jFaxVMKVFpOuSYjsJYzO7drOh170h5RzbGtQdbwlQZqzu1UV7zehxjbVyY4ymo99cYWly79XUmE4bJHepZWRe8JjGDgwHROu3Venuz+6Gbtu7aITrMvPCAZpZl4JnrOs4sRLZ7QFh38clURq519f8+UAAPAfEfO6AWSXk6Mp+e8b5fK6Jn2RO9jsT9AOplJCVD8SviMdymuB/ltpJxFg0D1eiwQuGIRDSN2RB+h8+4KN2Huo/0Am4CI5/LXlIfDgy2k1ScLv1RDnorhyWOLzj5huU7/Hv0FxxJ0v8D7ryyseif4jDSAeYRkOjvljjCdNOqZaHT0vUy0WNRt5gVfcujswitrkUSfv+25fRMYtgTbLniSF91Xeqdq7ITIe1y5eR03KnePor9Z10vQMPAIqHOJq1ti/3vwDF/Zq/f2PdSktvX2y9G5ZezvQsAAA==" Type="41"/>
                                        <Discount Amount="66417.88" CurrencyCode="COP" DecimalPlaces="2" Percent="30.18994375" Description="Diárias"/>
                                        <TPA_Extensions>
                                            <OfferInfo xmlns="">
                                                <MinPerc>30.189943750000005</MinPerc>
                                                <MaxPerc>30.189943750000005</MaxPerc>
                                                <AutonomyId>6</AutonomyId>
                                            </OfferInfo>
                                        </TPA_Extensions>
                                    </VehAvailCore>
                                    <VehAvailInfo>
                                        <PricedCoverages>
                                            <PricedCoverage Required="false">
                                                <Coverage CoverageType="7">
                                                    <Details CoverageTextType="Description">Proteções com co-participação regular</Details>
                                                </Coverage>
                                                <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="58000">
                                                    <Calculation UnitCharge="29000" UnitName="Day" Quantity="2" Total="58000"/>
                                                </Charge>
                                            </PricedCoverage>
                                        </PricedCoverages>
                                    </VehAvailInfo>
                                </VehAvail>
                            </VehAvails>
                            <Info>
                                <VendorMessages>
                                    <VendorMessage InfoType="20">
                                        <SubSection>
                                            <Paragraph>
                                                <Text>Você informou que a devolução do carro será realizada em uma agência Localiza diferente da agência de retirada. Nesse caso, poderá ser cobrado um valor adicional referente ao retorno do carro entre agências, considerando a distância entre a cidade de destino e a de origem.</Text>
                                            </Paragraph>
                                        </SubSection>
                                    </VendorMessage>
                                    <VendorMessage InfoType="2">
                                        <SubSection>
                                            <Paragraph>
                                                <Text>Os modelos que compõem este grupo são: Kia Picanto 1.0, Fiat Mobi 1.0, Suzuki S-Presso 1.0, Renault Kwid 1.0. A Localiza não garante o modelo, somente o grupo.</Text>
                                            </Paragraph>
                                        </SubSection>
                                    </VendorMessage>
                                </VendorMessages>
                                <PaymentRules/>
                                <LocationDetails CodeContext="internal code" ExtendedLocationCode="BOG" AtAirport="true" Code="AABOT" Name="AEROPORTO INTERNACIONAL EL DORADO - BOGOTÁ">
                                    <Address Type="2" FormattedInd="false" UseType="7">
                                        <AddressLine>DIAGONAL 24C, 99-45, FONTIBÓN</AddressLine>
                                        <AddressLine>4.701389,-74.146944</AddressLine>
                                        <CityName>BOGOTA</CityName>
                                        <PostalCode>.</PostalCode>
                                        <StateProv StateCode="CD"/>
                                        <CountryName Code="CO"/>
                                        <TPA_Extensions>
                                            <int xmlns="">9691</int>
                                        </TPA_Extensions>
                                    </Address>
                                    <Telephone PhoneTechType="1" PhoneUseType="5" PhoneNumber="01 8000 520 001" FormattedInd="false"/>
                                    <AdditionalInfo>
                                        <OperationSchedules>
                                            <OperationSchedule/>
                                        </OperationSchedules>
                                    </AdditionalInfo>
                                </LocationDetails>
                                <LocationDetails CodeContext="internal code" ExtendedLocationCode="EOH" AtAirport="true" Code="AAMED" Name="AEROPORTO OLAYA HERRERA - MEDELLIN">
                                    <Address Type="2" FormattedInd="false" UseType="7">
                                        <AddressLine>  CARRERA 65A #13-157, LOC.14, A.OLAYA HERRERA</AddressLine>
                                        <AddressLine>6.219576,-75.586683</AddressLine>
                                        <CityName>MEDELLIN</CityName>
                                        <PostalCode>0</PostalCode>
                                        <StateProv StateCode="AN"/>
                                        <CountryName Code="CO"/>
                                        <TPA_Extensions>
                                            <int xmlns="">10032</int>
                                        </TPA_Extensions>
                                    </Address>
                                    <Telephone PhoneTechType="1" PhoneUseType="5" PhoneNumber="01 8000 520 001" FormattedInd="false"/>
                                    <AdditionalInfo>
                                        <OperationSchedules>
                                            <OperationSchedule/>
                                        </OperationSchedules>
                                    </AdditionalInfo>
                                </LocationDetails>
                            </Info>
                        </VehVendorAvail>
                        <VehVendorAvail>
                            <VehAvails RatePeriod="Daily" RateCategory="16">
                                <VehAvail>
                                    <VehAvailCore IsAlternateInd="false" Status="Available">
                                        <Vehicle FuelType="Unspecified" DriveType="Unspecified" AirConditionInd="true" TransmissionType="Manual" Description="INTERMEDIARIO MANUAL" OdometerUnitOfMeasure="Km" VendorCarType="SDMR" BaggageQuantity="3" PassengerQuantity="5" CodeContext="internal code" Code="F">
                                            <VehType VehicleCategory="1" DoorCount="4"/>
                                            <VehClass Size="7"/>
                                            <VehMakeModel Name="Suzuki Swift Dzire 1.2"/>
                                            <PictureURL>https://www.localiza.com/colombia-site/geral/Frota/SWFD.png</PictureURL>
                                        </Vehicle>
                                        <RentalRate>
                                            <RateDistance Unlimited="true" DistUnitName="Km" VehiclePeriodUnitName="Day"/>
                                            <VehicleCharges>
                                                <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="316331.56" Purpose="1">
                                                    <Calculation UnitCharge="158165.78" UnitName="Day" Quantity="2" Total="316331.56"/>
                                                </VehicleCharge>
                                            </VehicleCharges>
                                            <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                                            <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                                        </RentalRate>
                                        <TotalCharge RateTotalAmount="316331.56" EstimatedTotalAmount="654203.59004" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                                        <Fees>
                                            <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="49977.356" Purpose="6">
                                                <Calculation Percentage="10" Total="49977.356"/>
                                            </Fee>
                                            <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa de retorno" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="125442" Purpose="2"/>
                                            <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="104452.67404" Purpose="7"/>
                                        </Fees>
                                        <Reference ID="qQsAAB+LCAAAAAAABACNVsmO4zYQ/RWDZ7uhxdp8U3vJGJlpG93KXOI50BbtISKJDiV1jDT8NTnkQ+bHUhS1UItHuRiw6tX2+IqsDxSwP0iyx/xEcYQWaOY5luMYuqmhKfpM0wwvWRLSE2ZLFpMS9fsH2oYkyegZDCHjAxDDdTXNcrXpCNJQoV8JTzGDL1P0AoDdmfAMQ1G7zfo18Cdvgf+y8l9XUNmShfTCAszpWQA03dV1G76vSHpiScb2EB3S5jj6QhMaQ0zTfnJM03Y9dz4Iw7c+zM84PeYZS6tKoHHhykULlRHS/xpPPtN3TtB9OgzYc5aRH//++IdNQjZZYs4Zun+r2lhGFIogog/IPfcMBzWmPM0IX9/gJ4FISR5FkpxhS5182CyDrt8hHeuYAnplK3bKY2GrE8Ff3v8s6VjHkC3Df+ZQ+RlHKZmiPUvTnAaExyyVR81IihYZz0mr6m3Syt2WyDjEB1YTFlM4EbtmCidCd2UzQtRCzfpcNz3PtGwh5y8kwyH4g+HjwA/JZHJox32OGHRD2QEtJkWgCiVT+BeSgGZfSUY5BBKoA/L9511wQDVUkisdBMLWtCaMbK2M02A8qM+rUVLVrwRILnAyj6bbpmcriSRsyTgn6RW4FhKqoGIaFGhv6prU9fBV2F94flXKP6CNEmiFM/yJ8V5xhmbMZ5o+051A1xeWuzC8J1u3LdOwZpq50LTBGCqNdQQ30A1w6PiU8/pG42tEUuFSnqBqFZ+V+ZWA+6Mgv10vkL6g7KMP2mB6wz0dtKzDAdYwEhmQ3felCY5Lg1J8TwxdSVWcPeSrIEvlq/LYc3IqpA1H3/GyAt1ZWM7C9J6cecuxaG2b0JMcA61r2tC4aq1L8BZEeKuSKS0qatNs01YiFkPbmBW+GinKy7E1pwPYEqbSWF2mrfba9+JY1NZNOV6CenGNocV9W99jsmAY2UealX3BMxIzOBggrSevzjObNYduWrprhdpx5oVHbTafG3jmurY9C2HujxrWXXw2lVnr3Pk/TxTAC0D85x6oE6Q8HVnPwFw394nQLNvQ20jeT8BeRlLyKH8VeAy3LS5GuZhknEWPgWp2WJdwRCKaxuwRfo8vuGjdh75P9ApuAiPfycGgPhwY7COpOF36dznonRqWOL7i5DuWD/DP0V9xJIP+H3DveY2FforDSB9EHgEJfXfIEaY7qraEnqTrLWLAoq4vK/qeRxeRWt2HJLz5tuP0QmJYECy520hfdU8anKtSiVB2uV1yOu5Urx3F4rOuN5/HwKKg3tKMdsXid+SYv7C37+yvkpL7t/t/IFk9LakLAAA=" Type="41"/>
                                        <Discount Amount="91834.22" CurrencyCode="COP" DecimalPlaces="2" Percent="36.73368984" Description="Diárias"/>
                                        <TPA_Extensions>
                                            <OfferInfo xmlns="">
                                                <MinPerc>36.73368984</MinPerc>
                                                <MaxPerc>36.73368984</MaxPerc>
                                                <AutonomyId>6</AutonomyId>
                                            </OfferInfo>
                                        </TPA_Extensions>
                                    </VehAvailCore>
                                    <VehAvailInfo>
                                        <PricedCoverages>
                                            <PricedCoverage Required="false">
                                                <Coverage CoverageType="7">
                                                    <Details CoverageTextType="Description">Proteções com co-participação regular</Details>
                                                </Coverage>
                                                <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="58000">
                                                    <Calculation UnitCharge="29000" UnitName="Day" Quantity="2" Total="58000"/>
                                                </Charge>
                                            </PricedCoverage>
                                        </PricedCoverages>
                                    </VehAvailInfo>
                                </VehAvail>
                            </VehAvails>
                            <Info>
                                <VendorMessages>
                                    <VendorMessage InfoType="20">
                                        <SubSection>
                                            <Paragraph>
                                                <Text>Você informou que a devolução do carro será realizada em uma agência Localiza diferente da agência de retirada. Nesse caso, poderá ser cobrado um valor adicional referente ao retorno do carro entre agências, considerando a distância entre a cidade de destino e a de origem.</Text>
                                            </Paragraph>
                                        </SubSection>
                                    </VendorMessage>
                                    <VendorMessage InfoType="2">
                                        <SubSection>
                                            <Paragraph>
                                                <Text>Os modelos que compõem este grupo são: Suzuki Swift Dzire 1.2, Renault Logan 1.6, Gol Trendline 1.6, Voyage trendline 1.6, Hyundai Accent 1.6, Chevrolet Onix LT 1.4. A Localiza não garante o modelo, somente o grupo.</Text>
                                            </Paragraph>
                                        </SubSection>
                                    </VendorMessage>
                                </VendorMessages>
                                <PaymentRules/>
                                <LocationDetails CodeContext="internal code" ExtendedLocationCode="BOG" AtAirport="true" Code="AABOT" Name="AEROPORTO INTERNACIONAL EL DORADO - BOGOTÁ">
                                    <Address Type="2" FormattedInd="false" UseType="7">
                                        <AddressLine>DIAGONAL 24C, 99-45, FONTIBÓN</AddressLine>
                                        <AddressLine>4.701389,-74.146944</AddressLine>
                                        <CityName>BOGOTA</CityName>
                                        <PostalCode>.</PostalCode>
                                        <StateProv StateCode="CD"/>
                                        <CountryName Code="CO"/>
                                        <TPA_Extensions>
                                            <int xmlns="">9691</int>
                                        </TPA_Extensions>
                                    </Address>
                                    <Telephone PhoneTechType="1" PhoneUseType="5" PhoneNumber="01 8000 520 001" FormattedInd="false"/>
                                    <AdditionalInfo>
                                        <OperationSchedules>
                                            <OperationSchedule/>
                                        </OperationSchedules>
                                    </AdditionalInfo>
                                </LocationDetails>
                                <LocationDetails CodeContext="internal code" ExtendedLocationCode="EOH" AtAirport="true" Code="AAMED" Name="AEROPORTO OLAYA HERRERA - MEDELLIN">
                                    <Address Type="2" FormattedInd="false" UseType="7">
                                        <AddressLine>  CARRERA 65A #13-157, LOC.14, A.OLAYA HERRERA</AddressLine>
                                        <AddressLine>6.219576,-75.586683</AddressLine>
                                        <CityName>MEDELLIN</CityName>
                                        <PostalCode>0</PostalCode>
                                        <StateProv StateCode="AN"/>
                                        <CountryName Code="CO"/>
                                        <TPA_Extensions>
                                            <int xmlns="">10032</int>
                                        </TPA_Extensions>
                                    </Address>
                                    <Telephone PhoneTechType="1" PhoneUseType="5" PhoneNumber="01 8000 520 001" FormattedInd="false"/>
                                    <AdditionalInfo>
                                        <OperationSchedules>
                                            <OperationSchedule/>
                                        </OperationSchedules>
                                    </AdditionalInfo>
                                </LocationDetails>
                            </Info>
                        </VehVendorAvail>
                        <VehVendorAvail>
                            <VehAvails RatePeriod="Daily" RateCategory="16">
                                <VehAvail>
                                    <VehAvailCore IsAlternateInd="false" Status="Available">
                                        <Vehicle FuelType="Unspecified" DriveType="Unspecified" AirConditionInd="true" TransmissionType="Automatic" Description="COMPACTO AUTOMÁTICO" OdometerUnitOfMeasure="Km" VendorCarType="SDAR" BaggageQuantity="2" PassengerQuantity="5" CodeContext="internal code" Code="FX">
                                            <VehType VehicleCategory="1" DoorCount="4"/>
                                            <VehClass Size="7"/>
                                            <VehMakeModel Name="Suzuki Swift Dzire 1.2"/>
                                            <PictureURL>https://www.localiza.com/colombia-site/geral/Frota/SWIF.png</PictureURL>
                                        </Vehicle>
                                        <RentalRate>
                                            <RateDistance Unlimited="true" DistUnitName="Km" VehiclePeriodUnitName="Day"/>
                                            <VehicleCharges>
                                                <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="372863.26" Purpose="1">
                                                    <Calculation UnitCharge="186431.63" UnitName="Day" Quantity="2" Total="372863.26"/>
                                                </VehicleCharge>
                                            </VehicleCharges>
                                            <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                                            <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                                        </RentalRate>
                                        <TotalCharge RateTotalAmount="372863.26" EstimatedTotalAmount="728203.58534" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                                        <Fees>
                                            <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="55630.526" Purpose="6">
                                                <Calculation Percentage="10" Total="55630.526"/>
                                            </Fee>
                                            <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa de retorno" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="125442" Purpose="2"/>
                                            <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="116267.79934" Purpose="7"/>
                                        </Fees>
                                        <Reference ID="qgsAAB+LCAAAAAAABACNVsmO2zgQ/RWDZ7uhXbJvai8TI0nb6NYEAeIcaIt2iEiih5J6jDT8NTnkQ/JjUxS1UIvjuRiw6tWrqscqst5QwL6TZIv5geIIzdBEd0zD0k3Nc9AYfaBphucsCekBszmLSQn78obWIUkyegRDyPgAxPA8TbM9fXwHaajQT4SnmMGXMXoCwOZIeIYhq81q+Rz4o5fAf1r4zwvIbM5CemIB5vQoAJru6brIeEHSA0sytgV2CJvj6CNNaAycpvvg2Y5uWIY7CMOXPszPON3nGUurTKBw4cpFCZURwr+PRx/oKyfoOh4GbDnLyO9fv3+yUchGc8w5Q9evVRnziEISRNThmqY1NVzUmPI0I3x5gZ8EmJI8iqQ4w5Y6+LBZki5fIRzrmAJ6Zgt2yGNhqwPBX97/LOVYxhAtw//kkPkRRykZoy1L05wGhMcslUfNSIpmGc9JK+t10ordbpH7EB9UTVhM4UScWimciL4rixFdLdrZ0U3XNl3LAkU/kgyH4A7f33Z8l4xGuzbtY8SgGMp2aDYqeCqUjOCfSAIt+0wyyoFIoHbI9x83wQ7VUKmtdBAIR9MaGllZydNgprajTWuUbOpnAhoXOBlHg8GcOkogCZszzkl6BqlFB1VQMQwKtDd0Teh69irsXzw/K+nv0OqzwrTAGX7HeC87QzOsiaZPdDfQ9ZntzYzpg6M7tmnYE82cadogh6pjzeAFugEOHZ9yXl9ofI5IKlzKI1St4rMyvxJwvUXy9/kE4QvN3vqgFaYX3GuElnWYYAkjkYHafV+a4Lg0KMn3uqHbU5VmN/UqxFL1qjy2nByK3oaz73jZge7ObHdmTh9cq+VYlLZO6EHOgdY1rWhcldYVeA1deKmCKSUq7aY5pqMwFkPbmBW9ml6Ul2NrUAewJUyVsbpMW+W178V7rK2b8n4K6sV1Dy3u2/oekwnDzN7qWVkXPCMxg4MB0Xrt1Xlms+bQTVv37FDbT6bhXptYloEnnuc4kxAGf69h3cNHU5m1zp3/50ABvADEf+yBOiTl6ch8Bua6uU9Ez7IVvdyJ+w7Uy0hKbsWviO/h1sXNKBeTjLPoNlCNDvsSjkhE05jdwm/xCRel+1D3gZ7BTWDkOzlI6sOBwT6SitOlP8pB7+Qwx/EZJ9+wfID/jP6EI0n6f8C95zUW/VMcRnqD+Q5I9HdHHGG6ompL6LV0vUUMWNT1ZUFf8+gkQqv7kIQ33zacnkgMC4Itdxvpq+5Jg3NVdiKkXW6XnN53qteOYvFZ1pvPbWCRUG9pRpti8dtzzJ/Yyzf2bynJ9ev1PxKhaQ6qCwAA" Type="41"/>
                                        <Discount Amount="113568.37" CurrencyCode="COP" DecimalPlaces="2" Percent="37.85612427" Description="Diárias"/>
                                        <TPA_Extensions>
                                            <OfferInfo xmlns="">
                                                <MinPerc>37.85612427</MinPerc>
                                                <MaxPerc>37.85612427</MaxPerc>
                                                <AutonomyId>6</AutonomyId>
                                            </OfferInfo>
                                        </TPA_Extensions>
                                    </VehAvailCore>
                                    <VehAvailInfo>
                                        <PricedCoverages>
                                            <PricedCoverage Required="false">
                                                <Coverage CoverageType="7">
                                                    <Details CoverageTextType="Description">Proteções com co-participação regular</Details>
                                                </Coverage>
                                                <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="58000">
                                                    <Calculation UnitCharge="29000" UnitName="Day" Quantity="2" Total="58000"/>
                                                </Charge>
                                            </PricedCoverage>
                                        </PricedCoverages>
                                    </VehAvailInfo>
                                </VehAvail>
                            </VehAvails>
                            <Info>
                                <VendorMessages>
                                    <VendorMessage InfoType="20">
                                        <SubSection>
                                            <Paragraph>
                                                <Text>Você informou que a devolução do carro será realizada em uma agência Localiza diferente da agência de retirada. Nesse caso, poderá ser cobrado um valor adicional referente ao retorno do carro entre agências, considerando a distância entre a cidade de destino e a de origem.</Text>
                                            </Paragraph>
                                        </SubSection>
                                    </VendorMessage>
                                    <VendorMessage InfoType="2">
                                        <SubSection>
                                            <Paragraph>
                                                <Text>Os modelos que compõem este grupo são: Suzuki Swift Dzire 1.2, Hyundai Accent Advance 1.6, Logan Dynamique 1.6. A Localiza não garante o modelo, somente o grupo.</Text>
                                            </Paragraph>
                                        </SubSection>
                                    </VendorMessage>
                                </VendorMessages>
                                <PaymentRules/>
                                <LocationDetails CodeContext="internal code" ExtendedLocationCode="BOG" AtAirport="true" Code="AABOT" Name="AEROPORTO INTERNACIONAL EL DORADO - BOGOTÁ">
                                    <Address Type="2" FormattedInd="false" UseType="7">
                                        <AddressLine>DIAGONAL 24C, 99-45, FONTIBÓN</AddressLine>
                                        <AddressLine>4.701389,-74.146944</AddressLine>
                                        <CityName>BOGOTA</CityName>
                                        <PostalCode>.</PostalCode>
                                        <StateProv StateCode="CD"/>
                                        <CountryName Code="CO"/>
                                        <TPA_Extensions>
                                            <int xmlns="">9691</int>
                                        </TPA_Extensions>
                                    </Address>
                                    <Telephone PhoneTechType="1" PhoneUseType="5" PhoneNumber="01 8000 520 001" FormattedInd="false"/>
                                    <AdditionalInfo>
                                        <OperationSchedules>
                                            <OperationSchedule/>
                                        </OperationSchedules>
                                    </AdditionalInfo>
                                </LocationDetails>
                                <LocationDetails CodeContext="internal code" ExtendedLocationCode="EOH" AtAirport="true" Code="AAMED" Name="AEROPORTO OLAYA HERRERA - MEDELLIN">
                                    <Address Type="2" FormattedInd="false" UseType="7">
                                        <AddressLine>  CARRERA 65A #13-157, LOC.14, A.OLAYA HERRERA</AddressLine>
                                        <AddressLine>6.219576,-75.586683</AddressLine>
                                        <CityName>MEDELLIN</CityName>
                                        <PostalCode>0</PostalCode>
                                        <StateProv StateCode="AN"/>
                                        <CountryName Code="CO"/>
                                        <TPA_Extensions>
                                            <int xmlns="">10032</int>
                                        </TPA_Extensions>
                                    </Address>
                                    <Telephone PhoneTechType="1" PhoneUseType="5" PhoneNumber="01 8000 520 001" FormattedInd="false"/>
                                    <AdditionalInfo>
                                        <OperationSchedules>
                                            <OperationSchedule/>
                                        </OperationSchedules>
                                    </AdditionalInfo>
                                </LocationDetails>
                            </Info>
                        </VehVendorAvail>
                        <VehVendorAvail>
                            <VehAvails RatePeriod="Daily" RateCategory="16">
                                <VehAvail>
                                    <VehAvailCore IsAlternateInd="false" Status="OnRequest">
                                        <Vehicle FuelType="MultiFuel" DriveType="Unspecified" AirConditionInd="true" TransmissionType="Manual" Description="SUV MANUAL" OdometerUnitOfMeasure="Km" VendorCarType="IFMM" BaggageQuantity="3" PassengerQuantity="5" CodeContext="internal code" Code="G4">
                                            <VehType VehicleCategory="3" DoorCount="4"/>
                                            <VehClass Size="6"/>
                                            <VehMakeModel Name="Suzuki Vitara 1.6"/>
                                            <PictureURL>https://www.localiza.com/colombia-site/geral/Frota/VTRA.png</PictureURL>
                                        </Vehicle>
                                        <RentalRate>
                                            <RateDistance Unlimited="true" DistUnitName="Km" VehiclePeriodUnitName="Day"/>
                                            <VehicleCharges>
                                                <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="540655.46" Purpose="1">
                                                    <Calculation UnitCharge="270327.73" UnitName="Day" Quantity="2" Total="540655.46"/>
                                                </VehicleCharge>
                                            </VehicleCharges>
                                            <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                                            <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                                        </RentalRate>
                                        <TotalCharge RateTotalAmount="540655.46" EstimatedTotalAmount="1000203.57514" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                                        <Fees>
                                            <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="76409.746" Purpose="6">
                                                <Calculation Percentage="10" Total="76409.746"/>
                                            </Fee>
                                            <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa de retorno" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="125442" Purpose="2"/>
                                            <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="159696.36914" Purpose="7"/>
                                        </Fees>
                                        <Reference ID="qAsAAB+LCAAAAAAABACNVkty4zYQvYqKa8sFfkVyR0tyRpUZS2Uzs4lmAYmQBhWSUEDSUcWl02SRg8zF0iD4AT8aZuOS2a9fdz90A/2hhewPku4wP1Ica77mmIZuuAsdaQ/aZ5rleMnSiB4xW7KEVKDfP7RNRNKcnsAQMT4CcWzkGbZhPEwgDRX6lfAMM82Hny8A2J4IzzHktH1ev4bB7C0MXlbB6woyW7KInlmIOT0JANJdXXfg+4pkR5bmbAfsELbA8Rea0gQ4bfToWp6NTMsaheHrEBbknB6KnGV1JlC4cOWihNoI4X9NZp/pOyfa7WEcsOMsJz/+/fEPm0VstsScM+32rS5jGVNIgog6FqZpecZCa01FlhO+vsKfFJjSIo6lOOOWJvi4WZKu3yEc65lCemErdiwSYWsCwb98+FnKsU4gWo7/LCDzE44z8qDtWJYVNCQ8YZk8akYyzc95QTpZb9JO7G6LTEMCUDVlCYUTcRqlcCr6ripG9DToqTvIMKE5LAMU/UJyHIE7fP/Y8306m+27tE8xg2Io22v+rOSpUTJCcCYptOwrySkHIoHaa0HwtA33WgOV2koHgXAQamlkZRVPi/FsB3kNSjb1KwGNS5yMg3TH9BwlkIQtGecku4DUooNqqBgGBToYOiW9evZq7C+8uCjpwwdLYVrhHH9ifJCdgQxrjvS5vgh13bdd3/AeHd2xTcOeI9NHaJRD1bFhcEPdAIeeTzWvbzS5xCQTLtURqlbxWZlfCbjdI/ntcobwpWYfQ9Azplc8aISOdZxgDSORg9pDX5ripDIoyQ+6od9TtWZ39SrFUvWqPXacHMvehrPvedmhvvDthW96jwur41iWtknpUc4B6pueaVKX1hd4A114rYMpJba1GcgxHYWxHNrWrOjV9qK8HDuDOoKtYKqM9WXaKa97L06xdm7K6RTUi2sKLe7b5h6TCcPM3utZWRc8IwmDgwHRBu3Ve2bz9tBNW3ftCB3mXnRAc8sy8Nx1HWceIds9IKy7+GQqs9a7838eKIQXgARPA1CPpDodmc/IXLf3iehZ9kyvE3E/gXo5yci9+DXxFG5T3oxyMck5i+8D1eiwLeGYxDRL2D38Dp9xWXoAdR/pBdwERr6To6QBHBjsI5k4Xfp3Nei9HJY4ueD0O5YP8M/RX3EsSf8PePC8JqJ/ysPI7jBPgER/98QRpptWbwmDlm62iBGLur6s6HsRn0VodR+S8PbbltMzScR2KXcb6avuSaNzVXUipF1tl5xOOzVrR7n4rJvN5z6wTGiwNGvbcvE7cMxf2Nt39lclye3b7T+kcaKhqAsAAA==" Type="41"/>
                                        <Discount Amount="279672.27" CurrencyCode="COP" DecimalPlaces="2" Percent="50.84950344" Description="Diárias"/>
                                        <TPA_Extensions>
                                            <OfferInfo xmlns="">
                                                <MinPerc>50.84950344</MinPerc>
                                                <MaxPerc>50.84950344</MaxPerc>
                                                <AutonomyId>6</AutonomyId>
                                            </OfferInfo>
                                        </TPA_Extensions>
                                    </VehAvailCore>
                                    <VehAvailInfo>
                                        <PricedCoverages>
                                            <PricedCoverage Required="false">
                                                <Coverage CoverageType="7">
                                                    <Details CoverageTextType="Description">Proteções com co-participação regular</Details>
                                                </Coverage>
                                                <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="98000">
                                                    <Calculation UnitCharge="49000" UnitName="Day" Quantity="2" Total="98000"/>
                                                </Charge>
                                            </PricedCoverage>
                                        </PricedCoverages>
                                    </VehAvailInfo>
                                </VehAvail>
                            </VehAvails>
                            <Info>
                                <VendorMessages>
                                    <VendorMessage InfoType="20">
                                        <SubSection>
                                            <Paragraph>
                                                <Text>Você informou que a devolução do carro será realizada em uma agência Localiza diferente da agência de retirada. Nesse caso, poderá ser cobrado um valor adicional referente ao retorno do carro entre agências, considerando a distância entre a cidade de destino e a de origem.</Text>
                                            </Paragraph>
                                        </SubSection>
                                    </VendorMessage>
                                    <VendorMessage InfoType="2">
                                        <SubSection>
                                            <Paragraph>
                                                <Text>Os modelos que compõem este grupo são: Suzuki Vitara 1.6, Renault Duster 2.0. A Localiza não garante o modelo, somente o grupo.</Text>
                                            </Paragraph>
                                        </SubSection>
                                    </VendorMessage>
                                </VendorMessages>
                                <PaymentRules/>
                                <LocationDetails CodeContext="internal code" ExtendedLocationCode="BOG" AtAirport="true" Code="AABOT" Name="AEROPORTO INTERNACIONAL EL DORADO - BOGOTÁ">
                                    <Address Type="2" FormattedInd="false" UseType="7">
                                        <AddressLine>DIAGONAL 24C, 99-45, FONTIBÓN</AddressLine>
                                        <AddressLine>4.701389,-74.146944</AddressLine>
                                        <CityName>BOGOTA</CityName>
                                        <PostalCode>.</PostalCode>
                                        <StateProv StateCode="CD"/>
                                        <CountryName Code="CO"/>
                                        <TPA_Extensions>
                                            <int xmlns="">9691</int>
                                        </TPA_Extensions>
                                    </Address>
                                    <Telephone PhoneTechType="1" PhoneUseType="5" PhoneNumber="01 8000 520 001" FormattedInd="false"/>
                                    <AdditionalInfo>
                                        <OperationSchedules>
                                            <OperationSchedule/>
                                        </OperationSchedules>
                                    </AdditionalInfo>
                                </LocationDetails>
                                <LocationDetails CodeContext="internal code" ExtendedLocationCode="EOH" AtAirport="true" Code="AAMED" Name="AEROPORTO OLAYA HERRERA - MEDELLIN">
                                    <Address Type="2" FormattedInd="false" UseType="7">
                                        <AddressLine>  CARRERA 65A #13-157, LOC.14, A.OLAYA HERRERA</AddressLine>
                                        <AddressLine>6.219576,-75.586683</AddressLine>
                                        <CityName>MEDELLIN</CityName>
                                        <PostalCode>0</PostalCode>
                                        <StateProv StateCode="AN"/>
                                        <CountryName Code="CO"/>
                                        <TPA_Extensions>
                                            <int xmlns="">10032</int>
                                        </TPA_Extensions>
                                    </Address>
                                    <Telephone PhoneTechType="1" PhoneUseType="5" PhoneNumber="01 8000 520 001" FormattedInd="false"/>
                                    <AdditionalInfo>
                                        <OperationSchedules>
                                            <OperationSchedule/>
                                        </OperationSchedules>
                                    </AdditionalInfo>
                                </LocationDetails>
                            </Info>
                        </VehVendorAvail>
                        <VehVendorAvail>
                            <VehAvails RatePeriod="Daily" RateCategory="16">
                                <VehAvail>
                                    <VehAvailCore IsAlternateInd="false" Status="OnRequest">
                                        <Vehicle FuelType="Unspecified" DriveType="Unspecified" AirConditionInd="true" TransmissionType="Automatic" Description="SUV ELITE" OdometerUnitOfMeasure="Km" VendorCarType="XDAR" BaggageQuantity="4" PassengerQuantity="7" CodeContext="internal code" Code="GR">
                                            <VehType VehicleCategory="1" DoorCount="4"/>
                                            <VehClass Size="32"/>
                                            <VehMakeModel Name="Montero Sport GLS 3.0"/>
                                            <PictureURL>https://www.localiza.com/colombia-site/geral/Frota/MOSP.png</PictureURL>
                                        </Vehicle>
                                        <RentalRate>
                                            <RateDistance Unlimited="true" DistUnitName="Km" VehiclePeriodUnitName="Day"/>
                                            <VehicleCharges>
                                                <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="826369.74" Purpose="1">
                                                    <Calculation UnitCharge="413184.87" UnitName="Day" Quantity="2" Total="826369.74"/>
                                                </VehicleCharge>
                                            </VehicleCharges>
                                            <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                                            <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                                        </RentalRate>
                                        <TotalCharge RateTotalAmount="826369.74" EstimatedTotalAmount="1374203.56766" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                                        <Fees>
                                            <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="104981.174" Purpose="6">
                                                <Calculation Percentage="10" Total="104981.174"/>
                                            </Fee>
                                            <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa de retorno" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="125442" Purpose="2"/>
                                            <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="219410.65366" Purpose="7"/>
                                        </Fees>
                                        <Reference ID="wAsAAB+LCAAAAAAABACNVtuS4jYQ/RXKzzAl323ePMBkqewOFOPsS9gHAYJVxbaIbE+oTPE1eciH7I+lZfki35bMA1XjPn26+6hb6g8tZH+QZIv5keJIm2sz3bKQiyxTt7Sp9pmmGV6w5ESPmC1YTErY7x/a+kSSjJ7BcGJ8AGKbjm+7nj19gDRU6FfCU8y0uTHVXgGwOROeYchq87LahcHkLQxel8FuCZkt2IleWIg5PQsA0j1dd+D7kqRHlmRsC+wQNsfRF5rQWHBaT55rW65r2X7xZw+i8W0UHWScHvKMpVVeIINg4KKgygjJ/BpPPtN3TrT7dBiw5SwjP/798Q+bnNhkgTln2v1bVdQiopALEVW5pmn5hqs1pjzNCF/d4CcBpiSPIinVsKUOPmyWpKt3CMc6ppBe2ZId81jY6kDwL+9/lnKsYoiW4T9zyPyMo5RMtS1L05yGhMcslQfPSKrNM56TVtbrpBW73TCPIQGomrCYwok4tVI4EV1YFiN6vGhuZPumZZrIAEm/kAyfwB8MH3u+TyaTfZv3OWJQDWV7bT4piCqUDBFcSAIdvCMZ5UAkUHstCJ434V6roVJc6SAQDkINjSyt5Gkwvu0gv0bJHt8RELnAyThId0zfUQJJ2IJxTtIraC1aqIKK2VCgvRlsQtejWGF/4flVSR8+7BSmJc7wJ8Z72RnIsGZIn+luqOtz25sb/pOjO7Zp2DNkzhEa5FB1rBm8UDfAoeNTzu0bja8RSYVLeYSqVXzuz7HE3ce4frteIItCuo8+6AXTG+71Q8s6TLCC0chA9L4vTXBcGpQaek3Rba1KulHZCs1U2SqPLSfHosWhBTpedqi7c9udm/6Ta7Uci9LWCT3KcUBd0wuNq9K6Aq+hGW9VMKXEpjYDOaajMBbD25gVvZqWlJdka14HsCVMlbG6VFvlte/HR6ytG/NxCuoF9ggt7t36PpMJw+iO9aysC56TmMHBgGi99uo8vllz6Kate/YJHWb+6YBmlmXgmec5zuyEbO+AsO7hs6mMXOfu/3mgEF4CEjz3QB2S8nRkPgPj3VwromfZC709iPsJ1MtISsbiV8SPcOvigpTrSsZZNA5Uo8MWhSMS0TRmY/gtvuCi9ADqPtIruAmMfC8HSQM4MFhPUnG69O9y0Ds5LHB8xcl3LB/in6O/4kiS/h9w75mNRf8Uh5GOMD8Aif7uiCNMd63aFnotXW8TAxZ1jVnS9zy6iNDqXiThzbcNpxcSw6Jgyx1H+qr70uBclZ0IaZc7J6ePner1o1iAVvUGNA4sEuqt0tqmWAAPHPNX9vad/VVKcv92/w8115etwAsAAA==" Type="41"/>
                                        <Discount Amount="136815.13" CurrencyCode="COP" DecimalPlaces="2" Percent="24.87547746" Description="Diárias"/>
                                        <TPA_Extensions>
                                            <OfferInfo xmlns="">
                                                <MinPerc>24.875477459999995</MinPerc>
                                                <MaxPerc>24.875477459999995</MaxPerc>
                                                <AutonomyId>6</AutonomyId>
                                            </OfferInfo>
                                        </TPA_Extensions>
                                    </VehAvailCore>
                                    <VehAvailInfo>
                                        <PricedCoverages>
                                            <PricedCoverage Required="false">
                                                <Coverage CoverageType="7">
                                                    <Details CoverageTextType="Description">Proteções com co-participação regular</Details>
                                                </Coverage>
                                                <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="98000">
                                                    <Calculation UnitCharge="49000" UnitName="Day" Quantity="2" Total="98000"/>
                                                </Charge>
                                            </PricedCoverage>
                                        </PricedCoverages>
                                    </VehAvailInfo>
                                </VehAvail>
                            </VehAvails>
                            <Info>
                                <VendorMessages>
                                    <VendorMessage InfoType="20">
                                        <SubSection>
                                            <Paragraph>
                                                <Text>Você informou que a devolução do carro será realizada em uma agência Localiza diferente da agência de retirada. Nesse caso, poderá ser cobrado um valor adicional referente ao retorno do carro entre agências, considerando a distância entre a cidade de destino e a de origem.</Text>
                                            </Paragraph>
                                        </SubSection>
                                    </VendorMessage>
                                    <VendorMessage InfoType="2">
                                        <SubSection>
                                            <Paragraph>
                                                <Text>Os modelos que compõem este grupo são: Montero Sport GLS 3.0, Trailblazer LTZ 3.6. A Localiza não garante o modelo, somente o grupo.</Text>
                                            </Paragraph>
                                        </SubSection>
                                    </VendorMessage>
                                </VendorMessages>
                                <PaymentRules/>
                                <LocationDetails CodeContext="internal code" ExtendedLocationCode="BOG" AtAirport="true" Code="AABOT" Name="AEROPORTO INTERNACIONAL EL DORADO - BOGOTÁ">
                                    <Address Type="2" FormattedInd="false" UseType="7">
                                        <AddressLine>DIAGONAL 24C, 99-45, FONTIBÓN</AddressLine>
                                        <AddressLine>4.701389,-74.146944</AddressLine>
                                        <CityName>BOGOTA</CityName>
                                        <PostalCode>.</PostalCode>
                                        <StateProv StateCode="CD"/>
                                        <CountryName Code="CO"/>
                                        <TPA_Extensions>
                                            <int xmlns="">9691</int>
                                        </TPA_Extensions>
                                    </Address>
                                    <Telephone PhoneTechType="1" PhoneUseType="5" PhoneNumber="01 8000 520 001" FormattedInd="false"/>
                                    <AdditionalInfo>
                                        <OperationSchedules>
                                            <OperationSchedule/>
                                        </OperationSchedules>
                                    </AdditionalInfo>
                                </LocationDetails>
                                <LocationDetails CodeContext="internal code" ExtendedLocationCode="EOH" AtAirport="true" Code="AAMED" Name="AEROPORTO OLAYA HERRERA - MEDELLIN">
                                    <Address Type="2" FormattedInd="false" UseType="7">
                                        <AddressLine>  CARRERA 65A #13-157, LOC.14, A.OLAYA HERRERA</AddressLine>
                                        <AddressLine>6.219576,-75.586683</AddressLine>
                                        <CityName>MEDELLIN</CityName>
                                        <PostalCode>0</PostalCode>
                                        <StateProv StateCode="AN"/>
                                        <CountryName Code="CO"/>
                                        <TPA_Extensions>
                                            <int xmlns="">10032</int>
                                        </TPA_Extensions>
                                    </Address>
                                    <Telephone PhoneTechType="1" PhoneUseType="5" PhoneNumber="01 8000 520 001" FormattedInd="false"/>
                                    <AdditionalInfo>
                                        <OperationSchedules>
                                            <OperationSchedule/>
                                        </OperationSchedules>
                                    </AdditionalInfo>
                                </LocationDetails>
                            </Info>
                        </VehVendorAvail>
                        <VehVendorAvail>
                            <VehAvails RatePeriod="Daily" RateCategory="16">
                                <VehAvail>
                                    <VehAvailCore IsAlternateInd="false" Status="OnRequest">
                                        <Vehicle FuelType="Unspecified" DriveType="Unspecified" AirConditionInd="true" TransmissionType="Automatic" Description="SUV ESPECIAL" OdometerUnitOfMeasure="Km" VendorCarType="XFAR" BaggageQuantity="3" PassengerQuantity="5" CodeContext="internal code" Code="LE">
                                            <VehType VehicleCategory="3" DoorCount="4"/>
                                            <VehClass Size="32"/>
                                            <VehMakeModel Name="Renault Koleos 2.5"/>
                                            <PictureURL>https://www.localiza.com/colombia-site/geral/Frota/KOLE.png</PictureURL>
                                        </Vehicle>
                                        <RentalRate>
                                            <RateDistance Unlimited="true" DistUnitName="Km" VehiclePeriodUnitName="Day"/>
                                            <VehicleCharges>
                                                <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="716362.1" Purpose="1">
                                                    <Calculation UnitCharge="358181.05" UnitName="Day" Quantity="2" Total="716362.1"/>
                                                </VehicleCharge>
                                            </VehicleCharges>
                                            <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                                            <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                                        </RentalRate>
                                        <TotalCharge RateTotalAmount="716362.1" EstimatedTotalAmount="1230203.5669" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                                        <Fees>
                                            <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="93980.41" Purpose="6">
                                                <Calculation Percentage="10" Total="93980.41"/>
                                            </Fee>
                                            <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa de retorno" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="125442" Purpose="2"/>
                                            <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="196419.0569" Purpose="7"/>
                                        </Fees>
                                        <Reference ID="vQsAAB+LCAAAAAAABACNVtty4jgQ/RVKz5CybHyBNwfIDrWZQCXeeRnmQYBgVGtbrGxnqU3xNfuwHzI/ti3LF/k2TB6oivv06e6jbqk/UMD/pPGWiAMjIZqjiedaMzx1pw4ao2eWpGTB4yM7EL7gES1QXz/Q+kjjlJ3AcOSiB2JbzsxxTTy+gzR16BcqEsLR3ByjFwBsTlSkBJLaPK1eA3/0FvgvS/91CZkt+JGdeUAEO0mAgT2MZcZLmhx4nPItsEPYjISfWcwi4LTcB+xgE3u2beR/Xi+aXAfRfirYPkt5UuYFMkgGIQsqjZDM79Homb0Lim7jfsBW8JT++O/Hv3x05KMFEYKj27eyqEXIIBcqq3ItazozXVSbsiSlYnWFnxiY4iwMlVT9lip4v1mRrt4hHG+ZAnbhS37IImmrAsG/ovtZybGKIFpK/sog8xMJEzpGW54kGQuoiHiiDp7TBM1TkdFG1uu4EbvZMPchPqga84jBiTiVUiSWXVgUI1sc9LSxN8Xm1PNA0M80JUfwhs8fO7GLR6Ndk/Ux5FAL4zs0H+U0JUoF8M80hv59pSkTQCRRO+T7j5tghyqoklY5SIRjGDWNKqzgqTEz2zFmFUp1+CsFiXOcimNgx5o5WiAFW3AhaHIBpWUDlVA5GRq0M4F16GoQS+xvIrto6e/Q80pjWpKUfOKik51pmNOJgSfYDTCe297cnD042LEt054Y1twwejl0HSsGL8AmOLR8iql9Y9ElpIl0KY5Qt8rP3SlWuNsQ1x+XM2SRS/fRBT0RdiWdfmhY+wlWMBgpiN71ZTGJCoNWQ6cp2q1VSjcoW66ZLlvpsRX0kLc4tEDLyw6wO7fduTV7cKcNx7y0dcwOahyMtumJRWVpbYHX0IzXMphWYl2baTiWozHmo1ubNb3qllRXZGNee7AFTJexvFIb5TVvx3usjfvyfgr69XUPLW/d6jZTCcPoDvWsqgsek4jDwYBonfZqPb1pfegW3IX20dhPZse9MZlOTTLxPMeZHA3b2xsEe+RkaSPXuvl/HiiAd4D6jx1Qi6Q4HZVPz3jX14rsWf7ErnfifgL1UprQofgl8T3cOr8g1bKSCh4OA/XosEKRkIYsifgQfkvOJC/dh7oP7AJuEqNey15SHw4MlpNEni77pxj0Vg4LEl1I/J2oZ/jn6C8kVKS/Au48spHsn/wwkgHmOyDZ3y1xpOmGyl2h09LVLtFj0ZeYJXvPwrMMrW9FCl5/2wh2phGsCbbacJSvvi31zlXRiZB2sXEKdt+pWj7y9WdV7T/DwDyhziKNNvn6txdEvPC37/zvQpLbt9v/zNJ1o70LAAA=" Type="41"/>
                                        <Discount Amount="211818.95" CurrencyCode="COP" DecimalPlaces="2" Percent="37.16121855" Description="Diárias"/>
                                        <TPA_Extensions>
                                            <OfferInfo xmlns="">
                                                <MinPerc>37.161218550000008</MinPerc>
                                                <MaxPerc>37.161218550000008</MaxPerc>
                                                <AutonomyId>6</AutonomyId>
                                            </OfferInfo>
                                        </TPA_Extensions>
                                    </VehAvailCore>
                                    <VehAvailInfo>
                                        <PricedCoverages>
                                            <PricedCoverage Required="false">
                                                <Coverage CoverageType="7">
                                                    <Details CoverageTextType="Description">Proteções com co-participação regular</Details>
                                                </Coverage>
                                                <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="98000">
                                                    <Calculation UnitCharge="49000" UnitName="Day" Quantity="2" Total="98000"/>
                                                </Charge>
                                            </PricedCoverage>
                                        </PricedCoverages>
                                    </VehAvailInfo>
                                </VehAvail>
                            </VehAvails>
                            <Info>
                                <VendorMessages>
                                    <VendorMessage InfoType="20">
                                        <SubSection>
                                            <Paragraph>
                                                <Text>Você informou que a devolução do carro será realizada em uma agência Localiza diferente da agência de retirada. Nesse caso, poderá ser cobrado um valor adicional referente ao retorno do carro entre agências, considerando a distância entre a cidade de destino e a de origem.</Text>
                                            </Paragraph>
                                        </SubSection>
                                    </VendorMessage>
                                    <VendorMessage InfoType="2">
                                        <SubSection>
                                            <Paragraph>
                                                <Text>Os modelos que compõem este grupo são: Renault Koleos 2.5, Nissan Qashq 2.0. A Localiza não garante o modelo, somente o grupo.</Text>
                                            </Paragraph>
                                        </SubSection>
                                    </VendorMessage>
                                </VendorMessages>
                                <PaymentRules/>
                                <LocationDetails CodeContext="internal code" ExtendedLocationCode="BOG" AtAirport="true" Code="AABOT" Name="AEROPORTO INTERNACIONAL EL DORADO - BOGOTÁ">
                                    <Address Type="2" FormattedInd="false" UseType="7">
                                        <AddressLine>DIAGONAL 24C, 99-45, FONTIBÓN</AddressLine>
                                        <AddressLine>4.701389,-74.146944</AddressLine>
                                        <CityName>BOGOTA</CityName>
                                        <PostalCode>.</PostalCode>
                                        <StateProv StateCode="CD"/>
                                        <CountryName Code="CO"/>
                                        <TPA_Extensions>
                                            <int xmlns="">9691</int>
                                        </TPA_Extensions>
                                    </Address>
                                    <Telephone PhoneTechType="1" PhoneUseType="5" PhoneNumber="01 8000 520 001" FormattedInd="false"/>
                                    <AdditionalInfo>
                                        <OperationSchedules>
                                            <OperationSchedule/>
                                        </OperationSchedules>
                                    </AdditionalInfo>
                                </LocationDetails>
                                <LocationDetails CodeContext="internal code" ExtendedLocationCode="EOH" AtAirport="true" Code="AAMED" Name="AEROPORTO OLAYA HERRERA - MEDELLIN">
                                    <Address Type="2" FormattedInd="false" UseType="7">
                                        <AddressLine>  CARRERA 65A #13-157, LOC.14, A.OLAYA HERRERA</AddressLine>
                                        <AddressLine>6.219576,-75.586683</AddressLine>
                                        <CityName>MEDELLIN</CityName>
                                        <PostalCode>0</PostalCode>
                                        <StateProv StateCode="AN"/>
                                        <CountryName Code="CO"/>
                                        <TPA_Extensions>
                                            <int xmlns="">10032</int>
                                        </TPA_Extensions>
                                    </Address>
                                    <Telephone PhoneTechType="1" PhoneUseType="5" PhoneNumber="01 8000 520 001" FormattedInd="false"/>
                                    <AdditionalInfo>
                                        <OperationSchedules>
                                            <OperationSchedule/>
                                        </OperationSchedules>
                                    </AdditionalInfo>
                                </LocationDetails>
                            </Info>
                        </VehVendorAvail>
                        <VehVendorAvail>
                            <VehAvails RatePeriod="Daily" RateCategory="16">
                                <VehAvail>
                                    <VehAvailCore IsAlternateInd="false" Status="OnRequest">
                                        <Vehicle FuelType="Unspecified" DriveType="Unspecified" AirConditionInd="true" TransmissionType="Automatic" Description="SEDAN PRIME" OdometerUnitOfMeasure="Km" VendorCarType="PDAR" BaggageQuantity="3" PassengerQuantity="5" CodeContext="internal code" Code="LP">
                                            <VehType VehicleCategory="1" DoorCount="4"/>
                                            <VehClass Size="10"/>
                                            <VehMakeModel Name="Toyota Corolla Xei 1.8 Híbrido"/>
                                            <PictureURL>https://www.localiza.com/colombia-site/geral/Frota/CRLH.png</PictureURL>
                                        </Vehicle>
                                        <RentalRate>
                                            <RateDistance Unlimited="true" DistUnitName="Km" VehiclePeriodUnitName="Day"/>
                                            <VehicleCharges>
                                                <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="643023.68" Purpose="1">
                                                    <Calculation UnitCharge="321511.84" UnitName="Day" Quantity="2" Total="643023.68"/>
                                                </VehicleCharge>
                                            </VehicleCharges>
                                            <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                                            <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                                        </RentalRate>
                                        <TotalCharge RateTotalAmount="643023.68" EstimatedTotalAmount="1134203.57512" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                                        <Fees>
                                            <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="86646.568" Purpose="6">
                                                <Calculation Percentage="10" Total="86646.568"/>
                                            </Fee>
                                            <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa de retorno" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="125442" Purpose="2"/>
                                            <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="181091.32712" Purpose="7"/>
                                        </Fees>
                                        <Reference ID="qAsAAB+LCAAAAAAABACNVkuS4jgQvQqhNVTIX4x3LqCmiakuiCpPb5peCBC0YmyLke0aYio4zSzmIH2xSVn+yB+a3hCB8+XLzKdMKT9QyP+kyYaIPSMR8pFhGthx3ZmD0Rg9szQjc54c2J7wOY9pifr6gVYHmmTsCIYDFwMQazo1bdPG4ztIU4d+oSIlHPnmGL0AYH2kIiOQ1Ppp+RoGo7cweFkErwvIbM4P7MRDIthRArDhGYYL3xc03fMk4xtgh7A5iT6zhMXA6RgPpudiz3a9QRi59GFBJtguz3haZQKFS1chS6iMEP73ePTM3gVF1/EwYCN4Rn/89+NfPjrw0ZwIwdH1W1XGPGKQBJV1TC3LnplT1JjyNKNieYGfBJiSPIqUOMOWOviwWZEu3yEc75hCduYLvs9jaasDwV/R/6zkWMYQLSN/5ZD5kUQpHaMNT9OchVTEPFVHzWmK/EzktJX1KmnFbrfIfUgAqiY8ZnAibq0USWTflcXIppbdbNsOdLRjg6CfaUYO4A2fP7Zim4xG2zbrY8ShFsa3yB8VNBVKBQhONIGOfaUZE0AkUVsUBI/rcItqqJJWOUiEi3FDoworeRrMzHHxrEapnn6lIHGBU3Gw4VozVwukYHMuBE3PoLRsoAoqZ0GD9mauCV2PXoX9TeRnLf0tet5oTAuSkU9c9LIzsWlPsDExpqFh+I7nm7MH13Ady3Qm2PIxHuTQdawZvNAwwaHjU47rG4vPEU2lS3mEulV+1sZXAa63SP44nyB8odlHH/RE2IX0GqFlHSZYwkRkoHbflyUkLg1a8r1u6PZUpdlNvQqxdL0qj42g+6K34ew7Xk5oTH1n6luzh6ndcixKWyVsr+YAd01PLK5K6wq8gi68VMG0EpvaTOxarsZYzGxj1vRqelHdja1BHcCWMF3G6i5tlde+Fu+xti7K+yno99Y9tLxu62tMJQwze6tnVV3wisQcDgZE67VX55XNmkO3HMNzDng3mR12eGLbJpl4nutODtjxdpgYHjla2qx1rvyfBwrhAaDBYw/UISlPR+UzMNfNfSJ7lj+xy524n0C9jKb0VvyK+B5uVdyMai/JBI9uA/XosC2RiEYsjfkt/IacSFF6AHXv2RncJEY9k4OkARwYrCOpPF32TznonRzmJD6T5DtR7+/P0V9IpEh/Bdx7XWPZP8VhpDeY74Bkf3fEkaYrqpaEXkvXS8SARd9eFuw9j04ytL4OKXjzbS3YicawHzhqtVG++po0OFdlJ0La5XIp2H2neuso9p5lvfjcBhYJ9XZmtC72vp0g4oW/fed/l5Jcv13/B08dR+GoCwAA" Type="41"/>
                                        <Discount Amount="338488.16" CurrencyCode="COP" DecimalPlaces="2" Percent="51.28608468" Description="Diárias"/>
                                        <TPA_Extensions>
                                            <OfferInfo xmlns="">
                                                <MinPerc>51.28608468</MinPerc>
                                                <MaxPerc>51.28608468</MaxPerc>
                                                <AutonomyId>6</AutonomyId>
                                            </OfferInfo>
                                        </TPA_Extensions>
                                    </VehAvailCore>
                                    <VehAvailInfo>
                                        <PricedCoverages>
                                            <PricedCoverage Required="false">
                                                <Coverage CoverageType="7">
                                                    <Details CoverageTextType="Description">Proteções com co-participação regular</Details>
                                                </Coverage>
                                                <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="98000">
                                                    <Calculation UnitCharge="49000" UnitName="Day" Quantity="2" Total="98000"/>
                                                </Charge>
                                            </PricedCoverage>
                                        </PricedCoverages>
                                    </VehAvailInfo>
                                </VehAvail>
                            </VehAvails>
                            <Info>
                                <VendorMessages>
                                    <VendorMessage InfoType="20">
                                        <SubSection>
                                            <Paragraph>
                                                <Text>Você informou que a devolução do carro será realizada em uma agência Localiza diferente da agência de retirada. Nesse caso, poderá ser cobrado um valor adicional referente ao retorno do carro entre agências, considerando a distância entre a cidade de destino e a de origem.</Text>
                                            </Paragraph>
                                        </SubSection>
                                    </VendorMessage>
                                    <VendorMessage InfoType="2">
                                        <SubSection>
                                            <Paragraph>
                                                <Text>Os modelos que compõem este grupo são: Toyota Corolla Xei 1.8 Híbrido. A Localiza não garante o modelo, somente o grupo.</Text>
                                            </Paragraph>
                                        </SubSection>
                                    </VendorMessage>
                                </VendorMessages>
                                <PaymentRules/>
                                <LocationDetails CodeContext="internal code" ExtendedLocationCode="BOG" AtAirport="true" Code="AABOT" Name="AEROPORTO INTERNACIONAL EL DORADO - BOGOTÁ">
                                    <Address Type="2" FormattedInd="false" UseType="7">
                                        <AddressLine>DIAGONAL 24C, 99-45, FONTIBÓN</AddressLine>
                                        <AddressLine>4.701389,-74.146944</AddressLine>
                                        <CityName>BOGOTA</CityName>
                                        <PostalCode>.</PostalCode>
                                        <StateProv StateCode="CD"/>
                                        <CountryName Code="CO"/>
                                        <TPA_Extensions>
                                            <int xmlns="">9691</int>
                                        </TPA_Extensions>
                                    </Address>
                                    <Telephone PhoneTechType="1" PhoneUseType="5" PhoneNumber="01 8000 520 001" FormattedInd="false"/>
                                    <AdditionalInfo>
                                        <OperationSchedules>
                                            <OperationSchedule/>
                                        </OperationSchedules>
                                    </AdditionalInfo>
                                </LocationDetails>
                                <LocationDetails CodeContext="internal code" ExtendedLocationCode="EOH" AtAirport="true" Code="AAMED" Name="AEROPORTO OLAYA HERRERA - MEDELLIN">
                                    <Address Type="2" FormattedInd="false" UseType="7">
                                        <AddressLine>  CARRERA 65A #13-157, LOC.14, A.OLAYA HERRERA</AddressLine>
                                        <AddressLine>6.219576,-75.586683</AddressLine>
                                        <CityName>MEDELLIN</CityName>
                                        <PostalCode>0</PostalCode>
                                        <StateProv StateCode="AN"/>
                                        <CountryName Code="CO"/>
                                        <TPA_Extensions>
                                            <int xmlns="">10032</int>
                                        </TPA_Extensions>
                                    </Address>
                                    <Telephone PhoneTechType="1" PhoneUseType="5" PhoneNumber="01 8000 520 001" FormattedInd="false"/>
                                    <AdditionalInfo>
                                        <OperationSchedules>
                                            <OperationSchedule/>
                                        </OperationSchedules>
                                    </AdditionalInfo>
                                </LocationDetails>
                            </Info>
                        </VehVendorAvail>
                        <VehVendorAvail>
                            <VehAvails RatePeriod="Daily" RateCategory="16">
                                <VehAvail>
                                    <VehAvailCore IsAlternateInd="false" Status="OnRequest">
                                        <Vehicle FuelType="Electric" DriveType="Unspecified" AirConditionInd="true" TransmissionType="Automatic" Description="ELÉTRICO AUTOMÁTICO" OdometerUnitOfMeasure="Km" VendorCarType="HDAE" BaggageQuantity="1" PassengerQuantity="5" CodeContext="internal code" Code="LY">
                                            <VehType VehicleCategory="1" DoorCount="4"/>
                                            <VehClass Size="34"/>
                                            <VehMakeModel Name="E-star eléctrico automático"/>
                                            <PictureURL>https://www.localiza.com/colombia-site/geral/Frota/ESTR.png</PictureURL>
                                        </Vehicle>
                                        <RentalRate>
                                            <RateDistance Unlimited="true" DistUnitName="Km" VehiclePeriodUnitName="Day"/>
                                            <VehicleCharges>
                                                <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="397309.4" Purpose="1">
                                                    <Calculation UnitCharge="198654.7" UnitName="Day" Quantity="2" Total="397309.4"/>
                                                </VehicleCharge>
                                            </VehicleCharges>
                                            <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                                            <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                                        </RentalRate>
                                        <TotalCharge RateTotalAmount="397309.4" EstimatedTotalAmount="760203.5826" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                                        <Fees>
                                            <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="58075.14" Purpose="6">
                                                <Calculation Percentage="10" Total="58075.14"/>
                                            </Fee>
                                            <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa de retorno" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="125442" Purpose="2"/>
                                            <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="121377.0426" Purpose="7"/>
                                        </Fees>
                                        <Reference ID="vQsAAB+LCAAAAAAABACNVttu4zYQ/RVDz3ZASZYs+U2xna7RbGwk6gJFvQ+0RXuJSqJLSamxgb+mD/2Q/bEORV2o26p5MBDNmTMzhzPkfGg++5PEe8xPFIfaUpu7tmHZlu5oU+2ZJilesTigJ8xWLCIF6I8PbRuQOKVnMASM90AMx0HIcuzpCNJQoV8ITzCDL1PtBQC7M+Ephpx2T5tX35u8+d7L2ntdQ2YrFtAL8zGnZwFAuqPrNnxfk+TE4pTtgR3CZjj8TGMaCU70YJmObqAFkn+LXjS+DaK9lNNjlrKkzAtkEAxcFFQaIZlfo8kzfedEu0/7AXvOUvLj3x//sEnAJivMOdPuX8uiViGFXIioamGac9dYaLUpS1LCNzf4iYEpzsJQStVvqYL3myXp5h3CsZbJp1e2ZqcsErYqEPzLu5+lHJsIoqX4rwwyP+MwIVNtz5Ikoz7hEUvkwTOSaMuUZ6SR9TZuxG42zDjEA1VjFlE4EbtSCseiC4tiRIeDnrrlGo47123RKZ9JigNwh+8fB36IJ5NDk/YxZFAMZQdtOcl5SpSM4F1IDA38SlLKgUigDprnPe78g1ZBpbbSQSBshGoaWVnBU2Ncy0ZuhZIt/kpA4xwn4yDdNl1bCSRhK8Y5Sa4gteigEipGQ4F2RrAOXU1iif2FZ1cl/YP2/LvCtMYp/sR4JzsDGfMZ0mf6wtf1peUsDffB1m3LNKwZMpcI9XKoOlYMjq8b4NDyKcb2jUbXkCTCpThC1ZoX1BljibsPcf12vUAWuXQfXdATpjfc6YeGtZ9gA5ORguhdXxrjqDAoNXSaot1apXSDsuWaqbKVHntOTnmLQwu0vCxfXyytxdJ0HxbzhmNe2jamJzkOqG16olFZWlvgLTTjrQymlKh0HbJNW2HMZ7c2K3rVLSnvyMa89mALmCpjeac2ymtej2OsjQtzPAX1/hpDi2u3us5kwjC6Qz0r64LXJGJwMCBap71ab29aH7oJL7wVoOPMDY5oNp8beOY4tj0LYP6PCOsOPpvKyLWu/p8H8uEhIN5jB9QiKU5H5tMz3vW1InqWPdHbSNxPoF5KEjIUvyQew23zC1JuKyln4TBQjQ4rFA5JSJOIDeH3+ILz0j2o+0Sv4CYw8rnsJfXgwGA7ScTp0u/FoLdyWOHoiuNvWL7DP0d/waEk/T/gzisbif7JDyMZYB4Bif5uiSNMd61cFjotXS0TPRZ1i1nT9yy8iNDqWiTh9bcdpxcSwZ5gyRVH+qrrUu9cFZ0IaRcrJ6fjTtX2ke8/m2oBGgbmCXU2aW2X739HjvkLe/vG/i4kuX+9/wdvw8xvvQsAAA==" Type="41"/>
                                        <Discount Amount="51345.3" CurrencyCode="COP" DecimalPlaces="2" Percent="20.5381207" Description="Diárias"/>
                                        <TPA_Extensions>
                                            <OfferInfo xmlns="">
                                                <MinPerc>20.538120700000007</MinPerc>
                                                <MaxPerc>20.538120700000007</MaxPerc>
                                                <AutonomyId>6</AutonomyId>
                                            </OfferInfo>
                                        </TPA_Extensions>
                                    </VehAvailCore>
                                    <VehAvailInfo>
                                        <PricedCoverages>
                                            <PricedCoverage Required="false">
                                                <Coverage CoverageType="7">
                                                    <Details CoverageTextType="Description">Proteções com co-participação regular</Details>
                                                </Coverage>
                                                <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="58000">
                                                    <Calculation UnitCharge="29000" UnitName="Day" Quantity="2" Total="58000"/>
                                                </Charge>
                                            </PricedCoverage>
                                        </PricedCoverages>
                                    </VehAvailInfo>
                                </VehAvail>
                            </VehAvails>
                            <Info>
                                <VendorMessages>
                                    <VendorMessage InfoType="20">
                                        <SubSection>
                                            <Paragraph>
                                                <Text>Você informou que a devolução do carro será realizada em uma agência Localiza diferente da agência de retirada. Nesse caso, poderá ser cobrado um valor adicional referente ao retorno do carro entre agências, considerando a distância entre a cidade de destino e a de origem.</Text>
                                            </Paragraph>
                                        </SubSection>
                                    </VendorMessage>
                                    <VendorMessage InfoType="2">
                                        <SubSection>
                                            <Paragraph>
                                                <Text>Os modelos que compõem este grupo são: E-star eléctrico automático. A Localiza não garante o modelo, somente o grupo.</Text>
                                            </Paragraph>
                                        </SubSection>
                                    </VendorMessage>
                                </VendorMessages>
                                <PaymentRules/>
                                <LocationDetails CodeContext="internal code" ExtendedLocationCode="BOG" AtAirport="true" Code="AABOT" Name="AEROPORTO INTERNACIONAL EL DORADO - BOGOTÁ">
                                    <Address Type="2" FormattedInd="false" UseType="7">
                                        <AddressLine>DIAGONAL 24C, 99-45, FONTIBÓN</AddressLine>
                                        <AddressLine>4.701389,-74.146944</AddressLine>
                                        <CityName>BOGOTA</CityName>
                                        <PostalCode>.</PostalCode>
                                        <StateProv StateCode="CD"/>
                                        <CountryName Code="CO"/>
                                        <TPA_Extensions>
                                            <int xmlns="">9691</int>
                                        </TPA_Extensions>
                                    </Address>
                                    <Telephone PhoneTechType="1" PhoneUseType="5" PhoneNumber="01 8000 520 001" FormattedInd="false"/>
                                    <AdditionalInfo>
                                        <OperationSchedules>
                                            <OperationSchedule/>
                                        </OperationSchedules>
                                    </AdditionalInfo>
                                </LocationDetails>
                                <LocationDetails CodeContext="internal code" ExtendedLocationCode="EOH" AtAirport="true" Code="AAMED" Name="AEROPORTO OLAYA HERRERA - MEDELLIN">
                                    <Address Type="2" FormattedInd="false" UseType="7">
                                        <AddressLine>  CARRERA 65A #13-157, LOC.14, A.OLAYA HERRERA</AddressLine>
                                        <AddressLine>6.219576,-75.586683</AddressLine>
                                        <CityName>MEDELLIN</CityName>
                                        <PostalCode>0</PostalCode>
                                        <StateProv StateCode="AN"/>
                                        <CountryName Code="CO"/>
                                        <TPA_Extensions>
                                            <int xmlns="">10032</int>
                                        </TPA_Extensions>
                                    </Address>
                                    <Telephone PhoneTechType="1" PhoneUseType="5" PhoneNumber="01 8000 520 001" FormattedInd="false"/>
                                    <AdditionalInfo>
                                        <OperationSchedules>
                                            <OperationSchedule/>
                                        </OperationSchedules>
                                    </AdditionalInfo>
                                </LocationDetails>
                            </Info>
                        </VehVendorAvail>
                        <VehVendorAvail>
                            <VehAvails RatePeriod="Daily" RateCategory="16">
                                <VehAvail>
                                    <VehAvailCore IsAlternateInd="false" Status="OnRequest">
                                        <Vehicle FuelType="Unspecified" DriveType="Unspecified" AirConditionInd="true" TransmissionType="Manual" Description="4X4 STANDARD" OdometerUnitOfMeasure="Km" VendorCarType="FQMR" BaggageQuantity="0" PassengerQuantity="2" CodeContext="internal code" Code="P">
                                            <VehType VehicleCategory="15" DoorCount="4"/>
                                            <VehClass Size="8"/>
                                            <VehMakeModel Name="Toyota Hilux 2.5"/>
                                            <PictureURL>https://www.localiza.com/colombia-site/geral/Frota/TOYH.png</PictureURL>
                                        </Vehicle>
                                        <RentalRate>
                                            <RateDistance Unlimited="true" DistUnitName="Km" VehiclePeriodUnitName="Day"/>
                                            <VehicleCharges>
                                                <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="753031.32" Purpose="1">
                                                    <Calculation UnitCharge="376515.66" UnitName="Day" Quantity="2" Total="753031.32"/>
                                                </VehicleCharge>
                                            </VehicleCharges>
                                            <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                                            <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                                        </RentalRate>
                                        <TotalCharge RateTotalAmount="753031.32" EstimatedTotalAmount="1278203.57588" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                                        <Fees>
                                            <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="97647.332" Purpose="6">
                                                <Calculation Percentage="10" Total="97647.332"/>
                                            </Fee>
                                            <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa de retorno" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="125442" Purpose="2"/>
                                            <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="204082.92388" Purpose="7"/>
                                        </Fees>
                                        <Reference ID="tAsAAB+LCAAAAAAABACNVsuS4jYU/RVKa+iSbWxs79xAZ6jMdFPdzmzCLAQIRhXbIrLdodLF12SRD5kfy5Xlh/wa0guqWvfc19G58v1AIf+DJlsiDoxEyEczY+F4c9OxHBNN0WeWZmTJkyM7EL7kMS1hv3+gzZEmGTuB4cjFAMR0XYxtdzG9gzR16FcqUsLhZIqeAfByoiIjUNXL0/o1DCZvYfC8Cl5XUNmSH9mZh0SwkwRgwzUMB85XND3wJONbiA5pcxJ9YQmLIaZlPXjzuWNiD3vF3yCYXMfAQSbYPs94WlUFJMgAQrZTGaGUX+PJZ/YuKLpNhwFbwTP6498f//DJkU+WRAiObt+qlpYRg1Io8pM8iprDPM2oWF/hJ+GVTVI0bKnTDptV0PU7JOIdU8gufMUPeSxtdSL4V/SPFRHrGLJl5M8caj6RKKVTtOVpmrOQipin6sI5TZGfiZy2qt4krdxtodyHBMBnwmNGCsGUTJFEqq9sRmobGDdcC7u2a3kGKOQLzcgR3OH8Yyd2yWSya4d9jDg0w/gO+ZMiToVSGYIzTUC4rzRjAgJJ1A4FweNLuEM1VHGrHCTCwbgJozor4zQYz3awV6OUtF8pcFzgVB5sOJbnaIkUbMmFoOkFqJbaqaByJDRob/Sa1PUEVthfRH7Ryt+hrRZoRTLyiYtecSY25zNswBMSGoZvu77pPTiGY1umPcOWj/FgDJ3GOoIbGiY4dHzKcX1j8SWiqXQpb1C3yuPe+CrYbSzUb5czFFEQ99EHPRF2JT01tKzDAdYwFxlQ3vdlCYlLg9ZCTxJdYVXMjbJWUKazVnlsBT0UAgcBdLzs0Fj49sK3vIfFvOVYtLZJ2EENA+6anlhctdYleANSvFbJtBab3gzXnesRi8ltzBpfjSDV29ia1kK+C0sPpFA6i3hhWXPPXLS6a7+NvaCdAlqv5T1w+/G6h5Zvbv2WlZezQ2OSVX3BRyTmcC/AWU9dnQ9u1ty5ZRuufcT7mXfc49l8bpKZ6zrO7AjDv8fEcMnJ0gau8+7/PFEIXwEaPPZAnSDl7ah6Boa7eVSkZPkTu97J+wnYy2hKx/JXge/hNsXrqFaUTPBoHKhnh82JRDRiaczH8FtyJkXrAfR9YBdwkxj1rRwMGsCFwU6Syttlf5dz3qlhSeILSb4T9RH+OforiVTQ/wPufWJjqZ/iMtKRyHdAUt8dcqTphqpNoSfpepMYsOgrzIq959FZptZ3IgVvzl4EO9MY+Y6t9hvlq+9Kg3NVKhHKLvdMwe471atHsfys6+1nHFgU1Fuf0bJYcveCiGf+9p3/VVJy+3b7D7aIo1u0CwAA" Type="41"/>
                                        <Discount Amount="193484.34" CurrencyCode="COP" DecimalPlaces="2" Percent="33.94462091" Description="Diárias"/>
                                        <TPA_Extensions>
                                            <OfferInfo xmlns="">
                                                <MinPerc>33.94462090999999</MinPerc>
                                                <MaxPerc>33.94462090999999</MaxPerc>
                                                <AutonomyId>2</AutonomyId>
                                            </OfferInfo>
                                        </TPA_Extensions>
                                    </VehAvailCore>
                                    <VehAvailInfo>
                                        <PricedCoverages>
                                            <PricedCoverage Required="false">
                                                <Coverage CoverageType="7">
                                                    <Details CoverageTextType="Description">Proteções com co-participação regular</Details>
                                                </Coverage>
                                                <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="98000">
                                                    <Calculation UnitCharge="49000" UnitName="Day" Quantity="2" Total="98000"/>
                                                </Charge>
                                            </PricedCoverage>
                                        </PricedCoverages>
                                    </VehAvailInfo>
                                </VehAvail>
                            </VehAvails>
                            <Info>
                                <VendorMessages>
                                    <VendorMessage InfoType="20">
                                        <SubSection>
                                            <Paragraph>
                                                <Text>Você informou que a devolução do carro será realizada em uma agência Localiza diferente da agência de retirada. Nesse caso, poderá ser cobrado um valor adicional referente ao retorno do carro entre agências, considerando a distância entre a cidade de destino e a de origem.</Text>
                                            </Paragraph>
                                        </SubSection>
                                    </VendorMessage>
                                    <VendorMessage InfoType="2">
                                        <SubSection>
                                            <Paragraph>
                                                <Text>Os modelos que compõem este grupo são: Toyota Hilux 2.5, Renault Alaskan 2.5, Volkswagen Amarok 2.0. A Localiza não garante o modelo, somente o grupo.</Text>
                                            </Paragraph>
                                        </SubSection>
                                    </VendorMessage>
                                </VendorMessages>
                                <PaymentRules/>
                                <LocationDetails CodeContext="internal code" ExtendedLocationCode="BOG" AtAirport="true" Code="AABOT" Name="AEROPORTO INTERNACIONAL EL DORADO - BOGOTÁ">
                                    <Address Type="2" FormattedInd="false" UseType="7">
                                        <AddressLine>DIAGONAL 24C, 99-45, FONTIBÓN</AddressLine>
                                        <AddressLine>4.701389,-74.146944</AddressLine>
                                        <CityName>BOGOTA</CityName>
                                        <PostalCode>.</PostalCode>
                                        <StateProv StateCode="CD"/>
                                        <CountryName Code="CO"/>
                                        <TPA_Extensions>
                                            <int xmlns="">9691</int>
                                        </TPA_Extensions>
                                    </Address>
                                    <Telephone PhoneTechType="1" PhoneUseType="5" PhoneNumber="01 8000 520 001" FormattedInd="false"/>
                                    <AdditionalInfo>
                                        <OperationSchedules>
                                            <OperationSchedule/>
                                        </OperationSchedules>
                                    </AdditionalInfo>
                                </LocationDetails>
                                <LocationDetails CodeContext="internal code" ExtendedLocationCode="EOH" AtAirport="true" Code="AAMED" Name="AEROPORTO OLAYA HERRERA - MEDELLIN">
                                    <Address Type="2" FormattedInd="false" UseType="7">
                                        <AddressLine>  CARRERA 65A #13-157, LOC.14, A.OLAYA HERRERA</AddressLine>
                                        <AddressLine>6.219576,-75.586683</AddressLine>
                                        <CityName>MEDELLIN</CityName>
                                        <PostalCode>0</PostalCode>
                                        <StateProv StateCode="AN"/>
                                        <CountryName Code="CO"/>
                                        <TPA_Extensions>
                                            <int xmlns="">10032</int>
                                        </TPA_Extensions>
                                    </Address>
                                    <Telephone PhoneTechType="1" PhoneUseType="5" PhoneNumber="01 8000 520 001" FormattedInd="false"/>
                                    <AdditionalInfo>
                                        <OperationSchedules>
                                            <OperationSchedule/>
                                        </OperationSchedules>
                                    </AdditionalInfo>
                                </LocationDetails>
                            </Info>
                        </VehVendorAvail>
                    </VehVendorAvails>
                </VehAvailRSCore>
            </OTA_VehAvailRateRS>
        </OTA_VehAvailRateResponse>
    </s:Body>
</s:Envelope>
