<?xml version="1.0" encoding="UTF-8"?>
<s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/">
  <s:Body xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
    <OTA_VehAvailRateResponse xmlns="http://tempuri.org/">
      <OTA_VehAvailRateRS TimeStamp="0001-01-01T00:00:00" Target="Test" Version="0" TransactionStatusCode="Start" RetransmissionIndicator="false">
        <Success/>
        <VehAvailRSCore>
          <VehRentalCore xmlns="http://www.opentravel.org/OTA/2003/05" OneWayIndicator="true" ReturnDateTime="2023-12-02T10:00:00" PickUpDateTime="2023-12-01T08:00:00">
            <PickUpLocation LocationCode="AABOT" CodeContext="internal code"/>
            <ReturnLocation LocationCode="AABOT" CodeContext="internal code"/>
          </VehRentalCore>
          <VehVendorAvails xmlns="http://www.opentravel.org/OTA/2003/05">
            <VehVendorAvail>
              <VehAvails RatePeriod="Daily" RateCategory="16">
                <VehAvail>
                  <VehAvailCore IsAlternateInd="false" Status="Available">
                    <Vehicle FuelType="Hybrid" DriveType="Unspecified" AirConditionInd="true" TransmissionType="Manual" Description="HÍBRIDO" OdometerUnitOfMeasure="Km" VendorCarType="HDMH" BaggageQuantity="2" PassengerQuantity="5" CodeContext="internal code" Code="FY">
                      <VehType VehicleCategory="1" DoorCount="4"/>
                      <VehClass Size="34"/>
                      <VehMakeModel Name="Suzuki Swift Híbrido Mecánico"/>
                      <PictureURL>https://www.localiza.com/colombia-site/geral/Frota/SWIB.png</PictureURL>
                    </Vehicle>
                    <RentalRate>
                      <RateDistance Unlimited="true" DistUnitName="Km" VehiclePeriodUnitName="Day"/>
                      <VehicleCharges>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="204002.29" Purpose="1">
                          <Calculation UnitCharge="204002.29" UnitName="Day" Quantity="1" Total="204002.29"/>
                        </VehicleCharge>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Horas extras" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="81600.916728" Purpose="11">
                          <Calculation UnitCharge="40800.458364" UnitName="Extra hour" Quantity="2" Total="81600.916728"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="285603.206728" EstimatedTotalAmount="449776.597606952" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="34360.3206728" Purpose="6">
                        <Calculation Percentage="10" Total="34360.3206728"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="71813.070206152" Purpose="7"/>
                    </Fees>
                    <Reference ID="qAsAAB+LCAAAAAAABACNVsmO4zYQ/RWDZ7tBSZYs+ab2kjEy0za6lQGCeA4cme0hIokOJXWMafhrcsiHzI+lKGqhFo9yMWDVq+3VwnpHAf+TJgciQkYitESGhV3LmbuOg6boI0szsuLJiYWEr3hMS9Qf72h3oknGXkFw4mIAYrouxraHpyNIU4d+piIlHL5M0RMA9q9UZASC2m83z4E/eQn8p7X/vIbIVvzEzjwggr1KADZcw5ARr2ka8iTjB7AObnMSfWIJi8GmZTx4nmdaDnYGYeTah/mZYF/zjKdVJJC4VBUyhUoI7n+NJx/Zm6DoNh0GHATP6I9/f/zDJyc+WREhOLp9qdJYRQyCoDKPhWXNPXOBGlGeZlRsrvCTgKUkjyJFzrCkdj4sVkY3b+COd0QBu/A1D/NYympH8Ff0Pys6NjF4y8hfOUT+SqKUTtGBp2nOAipinqpSc5qiZSZy2op6l7R8t1tkHOIDqwmPGVTEqZkiiey7MhnZ1MCnY7qebVuubI1PNCMn0IbP70dxTCaTY9vqY8QhF8aPaDkpzFQo5cA/0wQ69plmTIAhiToi33/cB0dUQxW1SkEiHIwbMyqx0k6D8WwHezVK9fQzBYoLnPKDDcfyHM2Rgq24EDS9ANOygSqonAUN2pu5xnU9ehX2F5FftPCPaPu7ZmlNMvKBi150JjatmWHMTC8wvKVlL233wbVd0/OsGbaWGA/a0HlUFswZNgLsgkJHpxzXFxZfIppKlbKEulR+1sZXAW73jPx2OYP7grP3PmhL2JX0GqElHTawgYnIgO2+LktIXAq04Hvd0O2pirP7fOEOX5XGQdCw6G2ofb9Oi+XcWWL3AS9aikVqu4SFag5wV7RlcZVal+AddOG1cqalqLUbdixHs1jMbCPW+Gp6Ue3G1qAOYEuYTmO1S1vptdfimNXWohwPQd9bY2i5bus1pgKGmb3XsyoveEViDoUB0nrt1Xlls6bohFLbJqYxI3aIZ3PLITP3RMgML0JzYZOTZc4NbdY6K//njgJ4AKj/2AN1jJTVUfEMzHWzT2TP8i27jvj9AOxlNKX3/FeGx3C7YjOquyQTPLoP1L3DtUQiGrE05vfwB3ImReo+5B2yC6hJjHomB436UDA4R1JZXfa9HPRODCsSX0jyjaj39+fozyRSRv8PuPe6xrJ/imKkdyyPgGR/d8iRohuqjoReS9dHxIBEv17W7C2PztK1fg4pePNtL9iZxnAf2Oq0Ubr6mTQ4V2UnQtjlcSnYuFJ9dRR3z6Y+fO4Di4B6NzPaF3ffV0HEE3/5xv8uKbl9uf0HmtUrI6gLAAA=" Type="41"/>
                    <Discount Amount="95997.71" CurrencyCode="COP" DecimalPlaces="2" Percent="31.99923606" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>31.99923606</MinPerc>
                        <MaxPerc>31.99923606</MaxPerc>
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
                  <VendorMessage InfoType="2">
                    <SubSection>
                      <Paragraph>
                        <Text>Os modelos que compõem este grupo são: Suzuki Swift Híbrido Mecánico. A Localiza não garante o modelo, somente o grupo.</Text>
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
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="194834.99" Purpose="1">
                          <Calculation UnitCharge="194834.99" UnitName="Day" Quantity="1" Total="194834.99"/>
                        </VehicleCharge>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Horas extras" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="77933.995416" Purpose="11">
                          <Calculation UnitCharge="38966.997708" UnitName="Extra hour" Quantity="2" Total="77933.995416"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="272768.985416" EstimatedTotalAmount="432976.601909544" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="33076.8985416" Purpose="6">
                        <Calculation Percentage="10" Total="33076.8985416"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="69130.717951944" Purpose="7"/>
                    </Fees>
                    <Reference ID="wAsAAB+LCAAAAAAABACNVtuOo0YQ/RWLZzNqwGDwG+NL1sru2Johq0jxPvTiHm8rQDsNTKwd+WvykA/ZH0s1zaW5LZkHS0OdOnXpU931rgXsT5IcMQ8pjrSVppsG8jzXWyyRNtc+0jTDa5acaYjZmsWkhP3xru3PJMnoKxjOjA9ATNdFyHaN+QTSVKGfCU8xgy9z7QkAh1fCMwxZHXbb58CfvQT+08Z/3kBma3amFxZgTl8FABmuYTjwfUPSkCUZOwI7hM1x9IkmNAZOy35Ato2Q5Rpe8ecMovFtFO1nnH7NM5ZWeUEbBAMXBVVGSObXePaRvnGi3efDgCNnGfnx749/2OzMZmvMOdPuX6qi1hGFXIioamlZC89cao0pTzPCtzf4SYApyaNItmrYUgcfNkvS7RuEYx1TQK9sw8I8FrY6EPzL+59lO7YxRMvwXzlk/oqjlMy1I0vTnAaExyyVB89Iqq0ynpNW1vukFbstmGmID11NWEzhRJy6UzgRKiyLERoX4jasxdKwbHexgJZ+Ihk+gz8Y3k/8lMxmpzbvY8SgGspO2mpWEFUoGcK/kAQU/EwyyoFIoE6a7z8egpNWQ2VzpYNAOAg1NLK0kqfBeLaDvBolNf5MoMkFTsZBhmN5jhJIwtaMc5JeoddCQhVUzIYC7c1gE7oexQr7C8+vSvonbfe7wrTBGf7AeC87E5mWbhi66QWGB7O0st0H13ZNz7N0ZK0QGuRQ+ygZTB0ZAXLBoeNTzu0Lja8RSYVLeYSqVXzuz7HE3ce4frteIIuide990A7TG+7poWUdJtjCaGTQ9L4vTXBcGpQaeqLoSqtq3XjbUKdtlceRk7CQOEigf1zL1cJZIfcBLVuORWn7hIZyHFDXtKNxVVq3wXsQ460KppSoqA45lqMwFsPbmJV+NZKUl2RrXgewJUxtY3Wptspr349TrK0bczoF9QKbQot7t77PZMIwumOalXXBcxIzOBhoWk9encc3aw4dE2Lb2DR0bIdIX1gO1t0zxjpahubSxmfLXBjKyHXu/p8HCuAlIP5jD9QhKU9H5jMw3s21IjTLdvQ2EfcDdC8jKRmLXxFP4fbFBSnXlYyzaByoRoctCkckomnMxvBHfMFF6T7UHdIruAmMfC8HSX04MFhPUnG69Hs56J0c1ji+4uQblg/xz9GfcSRJ/w+498zGQj/FYaQjzBMgoe9Oc4TprlXbQk/S9TYxYFHXmA19y6OLCK3uRRLefDtweiExLAq23HGkr7ovDc5VqURIu9w5OZ12qtePYgHa1hvQOLBIqLdKa4diAfzKMX9iL9/Y32VL7l/u/wGTmLDTwAsAAA==" Type="41"/>
                    <Discount Amount="105165.01" CurrencyCode="COP" DecimalPlaces="2" Percent="35.05500382" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>35.055003819999996</MinPerc>
                        <MaxPerc>35.055003819999996</MaxPerc>
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
              </Info>
            </VehVendorAvail>
            <VehVendorAvail>
              <VehAvails RatePeriod="Daily" RateCategory="16">
                <VehAvail>
                  <VehAvailCore IsAlternateInd="false" Status="OnRequest">
                    <Vehicle FuelType="Unspecified" DriveType="Unspecified" AirConditionInd="true" TransmissionType="Manual" Description="SUV COMPACTA" OdometerUnitOfMeasure="Km" VendorCarType="IFMR" BaggageQuantity="3" PassengerQuantity="5" CodeContext="internal code" Code="G">
                      <VehType VehicleCategory="3" DoorCount="4"/>
                      <VehClass Size="6"/>
                      <VehMakeModel Name="Fiat Pulse 1.3"/>
                      <PictureURL>https://www.localiza.com/colombia-site/geral/Frota/PULS.png</PictureURL>
                    </Vehicle>
                    <RentalRate>
                      <RateDistance Unlimited="true" DistUnitName="Km" VehiclePeriodUnitName="Day"/>
                      <VehicleCharges>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="251229.18" Purpose="1">
                          <Calculation UnitCharge="251229.18" UnitName="Day" Quantity="1" Total="251229.18"/>
                        </VehicleCharge>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Horas extras" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="100491.67303" Purpose="11">
                          <Calculation UnitCharge="50245.836515" UnitName="Extra hour" Quantity="2" Total="100491.67303"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="351720.85303" EstimatedTotalAmount="588684.59661627" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="44972.085303" Purpose="6">
                        <Calculation Percentage="10" Total="44972.085303"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="93991.65828327" Purpose="7"/>
                    </Fees>
                    <Reference ID="uwsAAB+LCAAAAAAABACNVs2SmzgQfhUXZzMlwGDwjbE9G9cmY9cMm0ucg4I1jmoBeQVMXJny0+SQB8mLbQvxI/5C5uCqob/+uvtTt9RvWsD+JckB85DiSFtppmGatuuZ7kKba+9pmuE1S040xGzNYlKiPr1puxNJMvoChhPjAxDTdRGyXXM+gTRV6EfCU8zgy1x7BMD+hfAMQ1L7h+1T4M+eA/9x4z9tILM1O9EzCzCnLwKADNcwHPi+IWnIkowdgB3C5jj6QBMaC073zjSRaVm2jYq/5SAaX0fRfsbplzxjaZUXyCAYuCioMkIyf8ez9/SVE+02HwYcOMvIr5+/frDZic3WmHOm3T5XRa0jCrkQUdXSshaeudQaU55mhG+v8JMAU5JHkZRq2FIHHzZL0u0rhGMdU0AvbMPCPBa2OhD8y/ufpRzbGKJl+L8cMn/BUUrm2oGlaU4DwmOWyoNnJNVWGc9JK+td0ordbphpiA+qJiymcCJOrRRORBeWxYgWBz31pWu5yHNBzw8kwydwhq9vR35MZrNjm/Q+YlAKZUdtNStYKpTk988kgfZ9IhnlQCRQR8337/fBUauhUlnpIBAOQg2NrKvkaTCe7SCvRskGfyKgcIGTcZDhWJ6jBJKwNeOcpBcQWvRPBRWDoUB7A9iEruewwv7F84uSPnxQiDY4w+8Y7yUnpkY3DN30AsNbWfbKdu9cYPU8S0fWCqFBDlVGyWDqyAiQCw4dn3Jmn2l8iUgqXMoTVK2ynu4MS9xtjOufyxmyKJR764MeML3iXju0rMMEWxiLDDTv+9IEx6VBqaHXE93OqqQblw11ZKs8DpyERYdDB/SPa7laOCvk3oFQqmNR2i6hoZwG1DU90LgqrSvwDnrxWgVTSlSaDjmWozAWg9uYFb2ajpQXZGtcB7AlTJWxulBb5bXvxinW1m05nYJ6eU2hxZ1b32UyYZjcsZ6VdcFTEjM4GBCt116dhzdrDh0TYtvYNHRsh0hfWA7W3RPGOlqG5tLGJ8tcGMrIde793wcK4BUg/n0P1CEpT0fmMzDezbUiepY90OtE3HegXkZSMha/Ip7C7Yr7Ua4qGWfROFCNDgsUjkhE05iN4Q/4jIvSfag7pBdwExj5Vg6S+nBgsJqk4nTp93LQOzmscXzByVcsH+Hfoz/iSJL+Cbj3xMaif4rDSEeYJ0CivzviCNNNqzaFXkvXm8SARV1hNvQ1j84itLoTSXjzbc/pmcSwJNhyv5G+6q40OFdlJ0La5b7J6bRTvXoUy8+23n7GgUVCvTVa2xfL3xeO+SN7/sq+lZLcPt/+By90JjS7CwAA" Type="41"/>
                    <Discount Amount="98770.82" CurrencyCode="COP" DecimalPlaces="2" Percent="28.22023355" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>28.220233550000007</MinPerc>
                        <MaxPerc>28.220233550000007</MaxPerc>
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
                  <VendorMessage InfoType="2">
                    <SubSection>
                      <Paragraph>
                        <Text>Os modelos que compõem este grupo são: Fiat Pulse 1.3, Renault Duster 1.6, Suzuki Vitara 1.6. A Localiza não garante o modelo, somente o grupo.</Text>
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
              </Info>
            </VehVendorAvail>
            <VehVendorAvail>
              <VehAvails RatePeriod="Daily" RateCategory="16">
                <VehAvail>
                  <VehAvailCore IsAlternateInd="false" Status="OnRequest">
                    <Vehicle FuelType="Unspecified" DriveType="Unspecified" AirConditionInd="true" TransmissionType="Automatic" Description="SUV COMPACTO AUTOMÁTICO" OdometerUnitOfMeasure="Km" VendorCarType="IDAR" BaggageQuantity="3" PassengerQuantity="5" CodeContext="internal code" Code="GC">
                      <VehType VehicleCategory="1" DoorCount="4"/>
                      <VehClass Size="6"/>
                      <VehMakeModel Name="Opel Crossland 1.2"/>
                      <PictureURL>https://www.localiza.com/colombia-site/geral/Frota/CROS.png</PictureURL>
                    </Vehicle>
                    <RentalRate>
                      <RateDistance Unlimited="true" DistUnitName="Km" VehiclePeriodUnitName="Day"/>
                      <VehicleCharges>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="270327.73" Purpose="1">
                          <Calculation UnitCharge="270327.73" UnitName="Day" Quantity="1" Total="270327.73"/>
                        </VehicleCharge>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Horas extras" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="112063.1321568" Purpose="11">
                          <Calculation UnitCharge="56031.5660784" UnitName="Extra hour" Quantity="2" Total="112063.1321568"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="382390.8621568" EstimatedTotalAmount="628831.638563251" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="48039.08621568" Purpose="6">
                        <Calculation Percentage="10" Total="48039.08621568"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="100401.690190771" Purpose="7"/>
                    </Fees>
                    <Reference ID="qwsAAB+LCAAAAAAABACNVsly2zgQ/RUVz6ILXEXyRkvyRDWJpbI5uUQ5IBSsoIYkNCDpqOLS1+SQD8mPTYPgAi6KclGV2K9f741+0yL2L8l2mMcUJ1qg6YZteqbl+76tzbX3NC/wkmUHGmO2ZCmpYZ/etM2BZAV9AcGB8QmIY7n+wvD8+Q2kqUI/Ep5jpgXmXHsEwPaF8AKDV9uH9VMUzp6j8HEVPq3AsyU70COLMKcvAoAMzzBc+L4iecyygu2AHcyWOPlAM5oCp4PuPNt3kGXbkzB8HsPCgtMvZcHyxhMIXKhyEUIjBPN/p7P39JUT7TKfBuw4K8ivn79+sNmBzZaYc6ZdPjdhLBMKThARx8KybN9caJ2ozAvC12f4yYApK5NEJmda0hqfFkvS9SuYYwNRRE9sxeIyFbLWEPzl488yHesUrBX4vxI8f8FJTubajuV5SSPCU5bLUjOSa0HBS9LzepP1bPdb5DYkhKxmLKVQEbfNFM5E39XBiK6u2tlbQDUN1zUhpR9IgQ+gD4K3Pd9ns9m+z3ufMIiGsr0WzCqiBiVNhEeSQc8+kYJyIBKovRaG99tor7VQmVypIBAuQh2NDK3m6TC+4yK/RcmufiKQ5Aon7SDDtXxXMSRhS8Y5yU+Qa9FCDVRMgwIdTV1nuh2+BvsXL0+K+/BhqTCtcIHfMT7yzkSmpRuGbvqR4QeWEzjened4pu9bOrIChCY51DxKBlNHRoQ8UBjo1AP7TNNTQnKhUpdQlVYBdQMsAZdrJP+cjmC+ytnbGPSA6RmPGqEnnSZYw0wUkO2xLs1wWgsU50fdMOypJmfX84UG+Wo0dpzEVW9D7cd1WgS2GyDvDi16ilVom4zGcg7QUPRA0ya0YYI30IXnxpgSYhebiVzLVRirqe3ESr66XpTbsTeoE9gapqax2aa98PqL8RZrb1XedkHdXLfQYuG2i0w6DDN7rWdlXPCOpAwKA0kbtdfgnS26omNCHAebho6dGOm25WLdO2Cso0VsLhx8sEzbUGZtsPR/byiCJ4CE9yPQgKSujvRnYq67fSJ6lj3Q8w277yB7BcnJNfsN8S3cptqM8jIpOEuuA1XrcDDhhCQ0T9k1/A4fcRV6CHHH9ARqAiMfyknSEAoGB0kuqku/14M+8GGJ0xPOvmL5Av8e/REnkvRPwKP3NRX9UxUjv8J8AyT6e5AcIbpozZkwaun2jJiQqPfLir6WyVGYVg8iCe++bTk9khQuBEceN1JXPZQm56ruRHC7Pi85va3U3h3V5bNuT5/rwMqh0dWsbavL7wvH/JE9f2Xf6pRcPl/+B/ZUAq2rCwAA" Type="41"/>
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
                  <VendorMessage InfoType="2">
                    <SubSection>
                      <Paragraph>
                        <Text>Os modelos que compõem este grupo são: Opel Crossland 1.2, Hyundai Creta 1.6, Kia Sonet 1.5. A Localiza não garante o modelo, somente o grupo.</Text>
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
              </Info>
            </VehVendorAvail>
            <VehVendorAvail>
              <VehAvails RatePeriod="Daily" RateCategory="16">
                <VehAvail>
                  <VehAvailCore IsAlternateInd="false" Status="Available">
                    <Vehicle FuelType="MultiFuel" DriveType="Unspecified" AirConditionInd="true" TransmissionType="Manual" Description="SUV MANUAL" OdometerUnitOfMeasure="Km" VendorCarType="IFMM" BaggageQuantity="3" PassengerQuantity="5" CodeContext="internal code" Code="G4">
                      <VehType VehicleCategory="3" DoorCount="4"/>
                      <VehClass Size="6"/>
                      <VehMakeModel Name="Renault Duster 1.3"/>
                      <PictureURL>https://www.localiza.com/colombia-site/geral/Frota/DUST.png</PictureURL>
                    </Vehicle>
                    <RentalRate>
                      <RateDistance Unlimited="true" DistUnitName="Km" VehiclePeriodUnitName="Day"/>
                      <VehicleCharges>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="283314.74" Purpose="1">
                          <Calculation UnitCharge="283314.74" UnitName="Day" Quantity="1" Total="283314.74"/>
                        </VehicleCharge>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Horas extras" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="117446.839362" Purpose="11">
                          <Calculation UnitCharge="58723.419681" UnitName="Extra hour" Quantity="2" Total="117446.839362"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="400761.579362" EstimatedTotalAmount="652878.907384858" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="49876.1579362" Purpose="6">
                        <Calculation Percentage="10" Total="49876.1579362"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="104241.170086658" Purpose="7"/>
                    </Fees>
                    <Reference ID="vgsAAB+LCAAAAAAABACNVkty2zgQvYqKa9MFfkVxR0vyRDWJpbI52URZIBSsoIYkNCDpUY1Lp5nFHCQXmwbBD/gL44XLZr9+3f3QDfS7FrI/SXrAPKI41nxNt23PcA3DQdqd9pFmOV6z9EQjzNYsIRXqy7u2O5E0p69gODE+AnEdtDId07ybQZoq9DPhGWaaD38+AWD/SniOIan94/Y5DBYvYfC0CZ43kNmaneiZhZjTVwFAhmcYLnzfkCxiac4OwA5hCxx/oilNgNP27m3PM03PslfljzWKxtdJdJBz+q3IWVbnBTIIBi4Kqo2QzO/J4iN940S73Y0DDpzl5Md/P/5lixNbrDHnTLt9rYtaxxRyIaKqpQXhzaXWmoosJ3x7hV8pMKVFHEupxi1N8HGzJN2+QTjWM4X0wjYsKhJhawLBv3z4WcqxTSBajv8qIPNXHGfkTjuwLCtoSHjCMnnwjGSan/OCdLLepZ3Y3YaZhwSgasoSCifiNkrhVHRhVYxocdDTWHqeba0MT3TKJ5LjE7jD9/cjP6aLxbFL+xAzKIayo+YvSp4aJSMEZ5JCAz+TnHIgEqijFgQP+/CoNVCprXQQCBehlkZWVvG0mJXjolWDki3+TEDjEifjIMO1Vq4SSMLWjHOSXUBq0UE1VIyGAh2MoJJePYk19jdeXJT04YOtMG1wjj8wPsjORKalG4ZurkJj5VuO73j3nuOZMEU6snyERjlUHSWDqSMjRB449HyqsX2hySUmmXCpjlC1is/DMZa42xTXH5czZFFK9z4EPWJ6xYN+6FjHCbYwGTmIPvSlKU4qg1LDoCn6rVVLNy0b6slWexw4icoWhxYYHtfSt10fefdo2XEsS9ulNJLjgPqmR5rUpfUF3kEzXutgSoltbSZyLVdhLGe3NSt6tS0p78jOvI5gK5gqY32ndsrrXo9zrJ0Lcz4F9f6aQ4trt7nOZMIwulM9K+uC1yRhcDAg2qC9em9v3h46JsRxsGno2ImQblsu1r0TxjpaRubSwSfLtA1l5HpX/88DhfAQkOBhAOqRVKcj8xkZ7/ZaET3LHul1Ju4HUC8nGZmKXxPP4XblBSm3lZyzeBqoRocdCsckplnCpvAHfMZl6QHUHdELuAmMfC5HSQM4MNhOMnG69J9q0Hs5rHFywel3LN/hn6M/41iS/gp48Momon/Kw8gmmGdAor974gjTTauXhUFLN8vEiEXdYjb0rYjPIrS6Fkl4+23P6ZkkYuWUK470Vdel0bmqOhHSrlZOTuedmu2j3H+2zQI0DSwTGmzS2r7c/75xzJ/Yy3f2dyXJ7evtfyWN/zW+CwAA" Type="41"/>
                    <Discount Amount="266685.26" CurrencyCode="COP" DecimalPlaces="2" Percent="48.48822835" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>48.488228349999993</MinPerc>
                        <MaxPerc>48.488228349999993</MaxPerc>
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
                  <VendorMessage InfoType="2">
                    <SubSection>
                      <Paragraph>
                        <Text>Os modelos que compõem este grupo são: Renault Duster 1.3, Suzuki Vitara 1.6. A Localiza não garante o modelo, somente o grupo.</Text>
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
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="432283.42" Purpose="1">
                          <Calculation UnitCharge="432283.42" UnitName="Day" Quantity="1" Total="432283.42"/>
                        </VehicleCharge>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Horas extras" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="179201.127852" Purpose="11">
                          <Calculation UnitCharge="89600.563926" UnitName="Extra hour" Quantity="2" Total="179201.127852"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="611484.547852" EstimatedTotalAmount="928715.273138268" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="70948.4547852" Purpose="6">
                        <Calculation Percentage="10" Total="70948.4547852"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="148282.270501068" Purpose="7"/>
                    </Fees>
                    <Reference ID="vQsAAB+LCAAAAAAABACNVs2SmzgQfhUXZzMlwGDMjbE9G9cmY5eHzSXOQcEaR7WAvAJmXTvlp9nDPkhebFuIH/EXMgdXDf31192fuqV+1wL2J0kOmIcUR5qn6bbjWq7puKY21z7SNMNrlpxpiNmaxaREfXnXdmeSZPQVDGfGByC25azspWvPJ5CmCv1MeIqZ5plz7RkA+1fCMwxJ7Z+2x8CfvQT+88Y/biCzNTvTCwswp68CgAzXMBz4viFpyJKMHYAdwuY4+kQTGgtO42GBLGQsDCT/loNofBtF+xmn3/KMpVVeIINg4KKgygjJ/B7PPtI3TrT7fBhw4CwjP/778S+bndlsjTln2v1rVdQ6opALEVUtLWuxMpdaY8rTjPDtDX4SYEryKJJSDVvq4MNmSbp9g3CsYwrolW1YmMfCVgeCf3n/s5RjG0O0DP+VQ+avOErJXDuwNM1pQHjMUnnwjKSal/GctLLeJa3Y7YaZhvigasJiCifi1ErhRHRhWYxocdAT2sw1rIUjWvsTyfAZvOHz+4mfktns1GZ9jBjUQtlJ82YFTYWSAfwLSaB/jySjHIgE6qT5/uM+OGk1VEorHQTCQaihkYWVPA1mZTtoVaNkhx8JSFzgZBxkONbKUQJJ2JpxTtIrKC0aqIKKyVCgvQlsQteDWGF/4/lVSR8+HBWmDc7wB8Z72ZnItHTD0M1VYKw8y/Zs98G1XXO1snRkeQgNcqg6SgZTR0aAXHDo+JRT+0Lja0RS4VIeoWoVn/tTLHH3Ma4/rhfIopDuvQ96wvSGe/3Qsg4TbGEwMhC970sTHJcGpYZeU3Rbq5JuXDbUka3yOHASFi0OLdA/rqW3cDzkPoBQqmNR2i6hoRwH1DU90bgqrSvwDprxVgVTSmxqM5FjOQpjMbqNWdGraUl5RbbmdQBbwlQZqyu1VV77dpxibd2X0ymo19cUWty69W0mE4bRHetZWRc8JjGDgwHReu3VeXqz5tAxIbaNTUPHdoj0heVg3T1jrKNlaC5tfLbMhaGMXOfm/3mgAN4B4j/2QB2S8nRkPgPj3VwromfZE71NxP0A6mUkJWPxK+Ip3K64IOWyknEWjQPV6LBC4YhENI3ZGP6AL7go3Ye6Q3oFN4GRr+UgqQ8HBstJKk6X/lMOeieHNY6vOPmO5TP8c/RnHEnSXwH3HtlY9E9xGOkI8wRI9HdHHGG6a9Wu0GvpepcYsKhLzIa+5dFFhFa3Iglvvu05vZAY1gRbbjjSV92WBueq7ERIu9w4OZ12qpePYv3Z1vvPOLBIqLdIa/ti/fvGMX9mL9/Z36Uk96/3/wE7zlUdvQsAAA==" Type="41"/>
                    <Discount Amount="117716.58" CurrencyCode="COP" DecimalPlaces="2" Percent="21.4030141" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>21.403014100000007</MinPerc>
                        <MaxPerc>21.403014100000007</MaxPerc>
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
              </Info>
            </VehVendorAvail>
            <VehVendorAvail>
              <VehAvails RatePeriod="Daily" RateCategory="16">
                <VehAvail>
                  <VehAvailCore IsAlternateInd="false" Status="OnRequest">
                    <Vehicle FuelType="Unspecified" DriveType="Unspecified" AirConditionInd="true" TransmissionType="Automatic" Description="SUV MANUAL" OdometerUnitOfMeasure="Km" VendorCarType="IFAR" BaggageQuantity="3" PassengerQuantity="5" CodeContext="internal code" Code="GX">
                      <VehType VehicleCategory="3" DoorCount="4"/>
                      <VehClass Size="6"/>
                      <VehMakeModel Name="Suzuki Vitara 2.4"/>
                      <PictureURL>https://www.localiza.com/colombia-site/geral/Frota/GRDV.png</PictureURL>
                    </Vehicle>
                    <RentalRate>
                      <RateDistance Unlimited="true" DistUnitName="Km" VehiclePeriodUnitName="Day"/>
                      <VehicleCharges>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="321511.84" Purpose="1">
                          <Calculation UnitCharge="321511.84" UnitName="Day" Quantity="1" Total="321511.84"/>
                        </VehicleCharge>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Horas extras" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="128604.736448" Purpose="11">
                          <Calculation UnitCharge="64302.368224" UnitName="Extra hour" Quantity="2" Total="128604.736448"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="450116.576448" EstimatedTotalAmount="717484.598570432" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="54811.6576448" Purpose="6">
                        <Calculation Percentage="10" Total="54811.6576448"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="114556.364477632" Purpose="7"/>
                    </Fees>
                    <Reference ID="vgsAAB+LCAAAAAAABACNVttu2zgQ/RVDz1ZASdbNb4rtbI22sZFoiwXWfWBlxiUqiS4lpUYDf80+7If0x3Yo6kLd6g2CANGcOTNzOEPOmxaybyTdYx5RHGtLTXcXCH5t5Ghz7QPNcrxi6ZFGmK1YQirU32/a9kjSnL6A4cj4CMT0PIRsz5rfQJoq9BPhGWbwZa49AmD3QniOIandw+YpDGbPYfC4Dp7WkNmKHemJhZjTFwFAhmcYIuM1ySKW5mwP7BC2wPFHmtIEOA3/zjFNZPmu4Zc/7igaXybRQc7plyJnWZ0XyCAYuCioNkIy75PZB/rKiXadjwP2nOXk17+//mGzI5utMOdMu36ui1rFFHIhoirXsha+6WqtqchywjcX+JMCU1rEsZRq3NIEHzdL0s0rhGM9U0jPbM2iIhG2JhD8y4efpRybBKLl+HsBmb/gOCNzbc+yrKAh4QnL5MEzkmnLnBekk/U27cTuNsxtSACqpiyhcCJOoxRORRdWxYgWBz0N37ORD83mgaIfSY6P4A7f3w78kM5mhy7tfcygGMoO2nJW8tQoGSE4kRQa+InklAORQB20ILjfhQetgUptpYNAOAi1NLKyiqfF+LaD/AYlW/yJgMYlTsZBhmP5jhJIwlaMc5KdQWrRQTVUjIYCHYxgG7qZxBr7By/OSvrw4S+FaY1z/I7xQXYmMi3dMHTTDw1/adlL27vzbM/0fUtH1hKhUQ5VR8lg6sgIkQcOPZ9qbJ9pco5JJlyqI1St4vNwjCXuOsX15/kEWZTSvQ1BD5he8KAfOtZxgg1MRg6iD31pipPKoNQwaIp+a9XSTcuGerLVHntOorLFoQWGx+UuF84SeXfI7TiWpW1TGslxQH3TA03q0voCb6EZL3UwpUSl65BjOQpjObutWdGrbUl5R3bmdQRbwVQZ6zu1U173erzF2rkwb6eg3l+30OLaba4zmTCM7lTPyrrgNUkYHAyINmiv3tubt4eOCbFtbBo6tiOkLywH694RYx25kena+GiZC0MZud7V//tAITwEJLgfgHok1enIfEbGu71WRM+yB3q5EfcdqJeTjEzFr4lv4bblBSm3lZyzeBqoRocdCsckplnCpvB7fMJl6QHUHdEzuAmMfC5HSQM4MNhOMnG69Gc16L0cVjg54/Qrlu/w79GfcCxJ/w948Momon/Kw8gmmG+ARH/3xBGmq1YvC4OWbpaJEYu6xazpaxGfRGh1LZLw9tuO0xNJYE+w5YojfdV1aXSuqk6EtKuVk9PbTs32Ue4/m2YBmgaWCQ02aW1X7n9fOOaP7Pkr+1FJcv18/Q/CiMBDvgsAAA==" Type="41"/>
                    <Discount Amount="78488.16" CurrencyCode="COP" DecimalPlaces="2" Percent="19.62203972" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>19.622039719999997</MinPerc>
                        <MaxPerc>19.622039719999997</MaxPerc>
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
                  <VendorMessage InfoType="2">
                    <SubSection>
                      <Paragraph>
                        <Text>Os modelos que compõem este grupo são: Suzuki Vitara 2.4, Renault Captur 2.0, Chevrolet Tracker 1.8, Suzuki Vitara 1.6. A Localiza não garante o modelo, somente o grupo.</Text>
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
              </Info>
            </VehVendorAvail>
            <VehVendorAvail>
              <VehAvails RatePeriod="Daily" RateCategory="16">
                <VehAvail>
                  <VehAvailCore IsAlternateInd="false" Status="OnRequest">
                    <Vehicle FuelType="Unspecified" DriveType="Unspecified" AirConditionInd="true" TransmissionType="Automatic" Description="EXECUTIVO AUTOMÁTICO" OdometerUnitOfMeasure="Km" VendorCarType="JDAR" BaggageQuantity="3" PassengerQuantity="5" CodeContext="internal code" Code="H">
                      <VehType VehicleCategory="1" DoorCount="4"/>
                      <VehClass Size="36"/>
                      <VehMakeModel Name="Renault Sandero Stepway 1.6"/>
                      <PictureURL>https://www.localiza.com/colombia-site/geral/Frota/SANA.png</PictureURL>
                    </Vehicle>
                    <RentalRate>
                      <RateDistance Unlimited="true" DistUnitName="Km" VehiclePeriodUnitName="Day"/>
                      <VehicleCharges>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="223100.84" Purpose="1">
                          <Calculation UnitCharge="223100.84" UnitName="Day" Quantity="1" Total="223100.84"/>
                        </VehicleCharge>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Horas extras" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="89240.3361408" Purpose="11">
                          <Calculation UnitCharge="44620.1680704" UnitName="Extra hour" Quantity="2" Total="89240.3361408"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="312341.1761408" EstimatedTotalAmount="484776.599568307" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="37034.11761408" Purpose="6">
                        <Calculation Percentage="10" Total="37034.11761408"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="77401.3058134272" Purpose="7"/>
                    </Fees>
                    <Reference ID="vQsAAB+LCAAAAAAABACNVkty2zgQvYoKa8kFkuJPO1qSx6pJLJXNZDPKApFgBTUkoQFJRxWXTjOLOUgulgbBD/hROF6oyuzXr7sfuoF+RyH/myY7Ig6MRGiBZq5t+I7jWhhN0QeWZmTJkyM7EL7kMS1Rf72jzZEmGXsFw5GLAYjpeRjb3nw6gjR16GcqUsLhyxQ9AWD7SkVGIKntw/o5DCYvYfC0Cp5XkNmSH9mJh0SwVwnAhmcYDnxf0fTAk4zvgB3C5iT6yBIWA6eF70wP+55r+Vj+GfNBNLncRAeZYF/zjKdVXiCDZBCyoMoIyfwZTz6wN0HRdToM2Ame0Z///fyXT458siRCcHT9UhW1jBjkQmVVrmXNfdNFjSlPMyrWF/hJgCnJo0hJNWypgw+bFen6DcLxjilkZ77ihzyWtjoQ/Cv6n5Uc6xiiZeSfHDJ/JVFKp2jH0zRnIRUxT9XBc5qiRSZy2sp6k7RitxtmHBKAqgmPGZyIUytFEtmFZTGyxUFPw53P59i1bRMU/UgzcgR3+P6+F/tkMtm3ae8jDsUwvkeLScFToVSE4EQTaOBnmjEBRBK1R0Fwvw33qIYqbZWDRDgYNzSqspKnwfi2g/0apVr8mYLGBU7FwYZj+Y4WSMGWXAiankFq2UEVVI6GBu2NYBO6nsQK+4fIz1r6e/SoEa1IRh656CVnYtOaGcbM9EPDX1j2wvbuPNszfd+aYWuB8SCHLqNiMGfYCLEHDh2fcmpfWHyOaCpdyhPUrfJzf4oV7nqL69P5BFkUyr33QQ+EXUivHVrWYYI1DEYGmvd9WULi0qDV0OuJbmdV0t2WDXdkqzx2gh6KDocO6B+Xu5g7C+zdYbflWJS2SdhBTQPumh5YXJXWFXgDvXipgmklak2HHcvRGIvRbcyaXk1HqiuyNa4D2BKmy1hdqa3y2rfjGGvrvhxPQb++xtDy1q1vM5UwTO6tnlV1wWMSczgYEK3XXp2nN2sOnVBq28Q0ZsQ+4NnccsjMOxIyw+7BdG1ytMy5oY1c5+b/faAQ3gEa3PdAHZLydFQ+A+PdXCuyZ/kDu4zEfQT1MprSW/Er4jHcprgf1bKSCR7dBurRYYUiEY1YGvNb+B05kaL0AOo+sDO4SYx6LQdJAzgwWE5SebrsRznonRyWJD6T5BtRz/Dv0Z9JpEj/D7j3yMayf4rDSG8wj4Bkf3fEkaYrqnaFXkvXu8SARV9iVuwtj04ytL4VKXjzbSvYicawJthqw1G++rY0OFdlJ0La5cYp2LhTvXwU68+63n9uA4uEeos02hbr31dBxBN/+ca/l5Jcv1x/AeD6krq9CwAA" Type="41"/>
                    <Discount Amount="96899.16" CurrencyCode="COP" DecimalPlaces="2" Percent="30.28098739" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>30.280987390000014</MinPerc>
                        <MaxPerc>30.280987390000014</MaxPerc>
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
                  <VendorMessage InfoType="2">
                    <SubSection>
                      <Paragraph>
                        <Text>Os modelos que compõem este grupo são: Renault Sandero Stepway 1.6, Hyundai Accent Premium 1.6. A Localiza não garante o modelo, somente o grupo.</Text>
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
              </Info>
            </VehVendorAvail>
            <VehVendorAvail>
              <VehAvails RatePeriod="Daily" RateCategory="16">
                <VehAvail>
                  <VehAvailCore IsAlternateInd="false" Status="OnRequest">
                    <Vehicle FuelType="Petrol" DriveType="Unspecified" AirConditionInd="true" TransmissionType="Automatic" Description="EXECUTIVO LUXO" OdometerUnitOfMeasure="Km" VendorCarType="IDAV" BaggageQuantity="3" PassengerQuantity="5" CodeContext="internal code" Code="L">
                      <VehType VehicleCategory="1" DoorCount="4"/>
                      <VehClass Size="6"/>
                      <VehMakeModel Name="Volkswagen Jetta R-line 1.4"/>
                      <PictureURL>https://www.localiza.com/colombia-site/geral/Frota/JETA.png</PictureURL>
                    </Vehicle>
                    <RentalRate>
                      <RateDistance Unlimited="true" DistUnitName="Km" VehiclePeriodUnitName="Day"/>
                      <VehicleCharges>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="270327.73" Purpose="1">
                          <Calculation UnitCharge="270327.73" UnitName="Day" Quantity="1" Total="270327.73"/>
                        </VehicleCharge>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Horas extras" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="108131.092438" Purpose="11">
                          <Calculation UnitCharge="54065.546219" UnitName="Extra hour" Quantity="2" Total="108131.092438"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="378458.822438" EstimatedTotalAmount="623684.598571342" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="47645.8822438" Purpose="6">
                        <Calculation Percentage="10" Total="47645.8822438"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="99579.893889542" Purpose="7"/>
                    </Fees>
                    <Reference ID="qAsAAB+LCAAAAAAABACNVs2SmzgQfhWXzmZKgMHgG2N7Nq6djF0zJJd1DgrWOKoF5BUwcWXKT7OHfZC8WFoIsPhx2IurTH/9/3Wr31HI/6bpjoiIkRgtkOHbnmdbloPRFD2yLCdLnh5YRPiSJ7RC/fWONgea5uwVBAcuBiCW52HseM50BGnp0M9UZITDlyl6AsD2lYqcQFDbh/VzGExewuBpFTyvILIlP7AjD4lgrxKATc80Xfi+olnE05zvwDq4LUj8kaUsAZv27A677gzPsTMII+c+LMgF+1rkPKsjgcSlqpAp1EJw/2cyeWRvgqLLdBiwEzynP//7+S+fHPhkSYTg6PKlTmMZMwiCyjzmtj3zrTm6ioosp2J9hp8ULKVFHKviDEsa58NiZXT9Bu54RxSyE1/xqEikrHEEf0X/syrHOgFvOfmngMhfSZzRKdrxLCtYSEXCM9VqTjO0yEVBW1Fv0pbvNkXGIQFUNeUJg464TaVIKnlXJSNJDfU0MfYda459yY2PNCcHUIfv73uxTyeTfdvsfcwhGcb3aDEp7dQo5SE40hQo+0xzJsCQRO1RENxvwz1qoKq2SkEiXIyvZlRmlZ0rxndc7DcoRepnCjUuccoPNl3bdzVHCrbkQtDsBKWWDKqhchg0aG/orq6b2auxf4jipIW/R4+aoRXJyQcuesFZ2LIN0zQsPzT9he0sHO/OczzL920D2wuMB23oZVQWLAObIfZAoaNTjesLS04xzaRK1UFdKj9r46sAl1tGPp2O4L4s2Xsf9EDYmfR40JIOG1jDRORQ7L4uS0lSCbTge2ToUqqu2e164U69ao2doFFJbWh9v0/zxcxdYO8Oz1uKZWqblEVqDHBX9MCSOrVugTdAwnPtTEtRYxt2bVezWM7sVazV60pFtRtbczqArWB6Getd2kqvvRbHrLYW5XgI+t4aQ8t126wxFTCM7C3OqrzgFUk4NAaK1qNX55XNr00nlDoOsUyDOBE2ZrZLDO9AiIHnkTV3yMG2ZqY2a52V/3tHITwANLjvgTpGqu6oeAbm+rpPJGf5AzuP+P0A1ctpRm/5rw2P4TblYlR3SS54fBuoe4dricQ0ZlnCb+F35EjK1APIO2InUJMY9UwOGg2gYXCOZLK77Ec16J0YliQ5kfQbUe/v79GfSayM/h9w73VNJH/KZmQ3LI+AJL87xZGiC6qPhB6lmyNiQKJfLyv2VsRH6Vo/hxT8+m0r2JEmcB846rRRuvqZNDhXFRMh7Oq4FGxcqbk6yrtn3Rw+t4FlQL2bGW3Lu++rIOKJv3zj36uSXL5cfgHCsosnqAsAAA==" Type="41"/>
                    <Discount Amount="139672.27" CurrencyCode="COP" DecimalPlaces="2" Percent="34.06640705" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>34.06640705</MinPerc>
                        <MaxPerc>34.06640705</MaxPerc>
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
                  <VendorMessage InfoType="2">
                    <SubSection>
                      <Paragraph>
                        <Text>Os modelos que compõem este grupo são: Volkswagen Jetta R-line 1.4. A Localiza não garante o modelo, somente o grupo.</Text>
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
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="408601.22" Purpose="1">
                          <Calculation UnitCharge="408601.22" UnitName="Day" Quantity="1" Total="408601.22"/>
                        </VehicleCharge>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Horas extras" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="163440.4889316" Purpose="11">
                          <Calculation UnitCharge="81720.2444658" UnitName="Extra hour" Quantity="2" Total="163440.4889316"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="572041.7089316" EstimatedTotalAmount="877084.596991464" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="67004.17089316" Purpose="6">
                        <Calculation Percentage="10" Total="67004.17089316"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="140038.717166704" Purpose="7"/>
                    </Fees>
                    <Reference ID="vwsAAB+LCAAAAAAABACNVkty2zgQvYoKa9EFkiJFckdL8kQ1jqWymWxGWSAUrKCGJDQg6aji0mlmMQfJxdIg+P9E44WqzH79uvuhG+h3FPC/abInImQkQh7SDRtj23Z1B83RI0szsuLJkYWEr3hMS9Rf72h7pEnGXsFw5GIEYpm2ay8NfX4DabShn6lICUeeMUdPANi9UpERSGr3sHkO/NlL4D+t/ec1ZLbiR3biARHsVQKw7ui6Dd/XNA15kvE9sEPYnEQfWcJiyencmbplLS1suMXfYhRNLpNoPxPsa57xtMoLZJAMQhZUGSGZP+PZI3sTFF3n44C94Bn9+d/Pf/nsyGcrIgRH1y9VUauIQS5UVrU0zYVrLFFjytOMis0FfhJgSvIoUlKNW+rg42ZFunmDcLxnCtiZr3mYx9JWB4J/xfCzkmMTQ7SM/JND5q8kSukc7Xma5iygIuapOnhOU+RlIqedrLdJJ3a3YW5DfFA14TGDE7FrpUgiu7AsRrY46KnpzsJw9cXCkc39kWbkCP5geD+IQzKbHbq89xGHahg/IG9WEFUoFcI/0QQ6+JlmTACRRB2Q79/vggOqoUpc5SARMFwNjSqt5GkwrmVjt0apHn+mIHKBU3Gwbpuu3QqkYCsuBE3PoLVsoQoqZ6MFHcxgE7oexQr7h8jPrfQP6HHTYlqTjHzgYpCdgQ1T03XNcAPd9UzLs5w7x3JglEwNmx7GoxxtHRWDoWE9wA449HzKuX1h8TmiqXQpj7BtlZ+Hc6xw1ymuT+cTZFFI9z4EPRB2IYN+6FjHCTYwGhmIPvRlCYlLQ6uGQVP0W6uSblo23JOt8tgLGhYtDi0wPK6lt7A97NzhZcexKG2bsFCNA+6bHlhcldYXeAvNeKmCtUpsajOwbdotxmJ4G3NLr6Yl1SXZmdcRbAlry1hdqp3yuvfjLdbOjXk7hfYFdgst7936PlMJw+hO9ayqC56TmMPBgGiD9uo9vllz6IRSyyKGrhErxNrCtInmHAnR8DI0lhY5msZCb41c7+7/faAAXgLq3w9APZLydFQ+I+PdXCuyZ/kDu9yI+wHUy2hKp+JXxLdw2+KCVOtKJng0DWxHhyWKRDRiacyn8HtyIkXpPtQdsjO4SYx6L0dJfTgwWE9SebrsRznovRxWJD6T5BtRD/Hv0Z9JpEj/D3jwzMayf4rDSCeYb4Bkf/fEkaYrqraFQUvX28SIpb3GrNlbHp1k6PZepODNt51gJxrDomCpHUf5tvel0bkqOxHSLndOwW471etHsQBt6g1oGlgkNFil0a5YAL8KIp74yzf+vZTk+uX6C8Eu8wG/CwAA" Type="41"/>
                    <Discount Amount="161398.78" CurrencyCode="COP" DecimalPlaces="2" Percent="28.31557503" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>28.315575029999994</MinPerc>
                        <MaxPerc>28.315575029999994</MaxPerc>
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
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="394086.33" Purpose="1">
                          <Calculation UnitCharge="394086.33" UnitName="Day" Quantity="1" Total="394086.33"/>
                        </VehicleCharge>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Horas extras" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="157634.5301724" Purpose="11">
                          <Calculation UnitCharge="78817.2650862" UnitName="Extra hour" Quantity="2" Total="157634.5301724"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="551720.8601724" EstimatedTotalAmount="850484.605965672" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="64972.08601724" Purpose="6">
                        <Calculation Percentage="10" Total="64972.08601724"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="135791.659776032" Purpose="7"/>
                    </Fees>
                    <Reference ID="qAsAAB+LCAAAAAAABACNVsuS2jgU/RVKa+iSbfyAnRvoCTVJQ3V7sglZKEZNVGNbjGx3qHTxNVnkQ/Jjc2X5IT+Is6EK33NfR+dK9w0F/F+a7IkIGYnQEs28hevNDdvCaIreszQjK54cWUj4ise0RH16Q9sjTTL2AoYjFwMQ0/Mwtj13OoI0dehHKlLC4csUPQJg90JFRqCo3cPmKfAnz4H/uPaf1lDZih/ZiQdEsBcJwIZnGA58X9M05EnG9xAd0uYk+sASFkNMC995jonnnuEOwsilD/Mzwb7kGU+rSqBx6SpkC5UR0v8dT96zV0HRdToM2Aue0V8/f/3gkyOfrIgQHF0/V22sIgZFUNmHa1nzhemixpSnGRWbC/wkECnJo0iRM2ypkw+bVdDNK6TjHVPAznzNwzyWtjoR/BX9z4qOTQzZMvJfDpW/kCilU7TnaZqzgIqYp+qoOU3RMhM5bVW9TVq52xIZh/jAasJjBifi1EyRROqubEaKWqrZMOy554CigdEPNCNHcIfvbwdxSCaTQzvsfcShGcYPaDkp4lQolcE/0QQk+0QzJiCQRB2Q79/vggOqoYpb5SARDsZNGNVZGafBLGwHL2qUEvUTBY4LnMqDDcdaOFoiBVtxIWh6BqqlgiqoHAYN2hu6JnU9exX2L5GftfIPaK8FWpOMvOOiV5yJTQuonpmLwFgsLXtpe3ee7ZmLhTXD1hLjwRg6jSqCOcNGgD1w6PiU4/rM4nNEU+lSnqBulZ+18VWA660g/5xPkL6g7K0PeiDsQno6aFmHA2xgIjIgu+/LEhKXBq34nhi6kqo4u80X7vBVeewFDQtpw9H3z8ldzp0l9u6w23IsWtsmLFRjgLumBxZXrXUJ3oIIL1UyrUVNbdixHC1iMbONWeOrkaK6G1tzOoAtYTqN1V3aaq99LY5FbV2U4yXo99YYWl639TWmCoaRvaVZ1Re8IjGHgwHSevLqvLJZc+iEUtsmpjEjdohnc8shM+9IyAy7oena5GiZc0Obtc6V//tEATwA1L/vgTpBytNR9QzMdXOfSM3yB3YZyfsO2MtoSm/lrwKP4bbFxaj2kkzw6DZQzw7bEoloxNKY38LvyYkUrfvQd8jO4CYx6pkcDOrDgcE6ksrTZd/LQe/UsCLxmSRfiXp/f4/+SCIV9E/Avdc1lvopDiO9EXkEJPXdIUearqhaEnqSrpeIAYu+vazZax6dZGp9HVLw5ttOsBONYT+w1WqjfPU1aXCuSiVC2eVyKdi4U711FHvPpl58bgOLgno7M9oVe98XQcQjf/7Kv5WUXD9f/wdS/UcRqAsAAA==" Type="41"/>
                    <Discount Amount="175913.67" CurrencyCode="COP" DecimalPlaces="2" Percent="30.86204817" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>30.86204817</MinPerc>
                        <MaxPerc>30.86204817</MaxPerc>
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
              </Info>
            </VehVendorAvail>
            <VehVendorAvail>
              <VehAvails RatePeriod="Daily" RateCategory="16">
                <VehAvail>
                  <VehAvailCore IsAlternateInd="false" Status="Available">
                    <Vehicle FuelType="Unspecified" DriveType="Unspecified" AirConditionInd="true" TransmissionType="Manual" Description="PICK-UP COM AR" OdometerUnitOfMeasure="Km" VendorCarType="MPMR" BaggageQuantity="0" PassengerQuantity="5" CodeContext="internal code" Code="V">
                      <VehType VehicleCategory="16" DoorCount="2"/>
                      <VehClass Size="1"/>
                      <VehMakeModel Name="Ram 700 Big Horn CD 1.4"/>
                      <PictureURL>https://www.localiza.com/colombia-site/geral/Frota/BIGH.png</PictureURL>
                    </Vehicle>
                    <RentalRate>
                      <RateDistance Unlimited="true" DistUnitName="Km" VehiclePeriodUnitName="Day"/>
                      <VehicleCharges>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="250000" Purpose="1">
                          <Calculation UnitCharge="250000" UnitName="Day" Quantity="1" Total="250000"/>
                        </VehicleCharge>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Horas extras" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="100000" Purpose="11">
                          <Calculation UnitCharge="50000" UnitName="Extra hour" Quantity="2" Total="100000"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="350000" EstimatedTotalAmount="586432" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="44800" Purpose="6">
                        <Calculation Percentage="10" Total="44800"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="93632" Purpose="7"/>
                    </Fees>
                    <Reference ID="jQsAAB+LCAAAAAAABACNVs2SmzgQfhWXzmZKgME2N8b2bFybjF0zZC7rHBSscVQLyCtg4sqUn2YP+yB5sbQQP+LHYS+uMv31/9etfkcB/5smeyJCRiLkIXO+xNbcsS0XTdFHlmZkxZMjCwlf8ZiWqL/e0fZIk4y9guDIxQBkhk1sWticjiAtHfpCRUo48qwpegTA7pWKjEBQu4fNU+BPngP/ce0/rSGyFT+yEw+IYK8SgM2FacqI1zQNeZLxPVgHtzmJPrGExWATDwrJpRL6mWBf84ynlVdIUioIGW4lBFd/xpOP7E1QdJ0OA/aCZ/Tnfz//5ZMjn6yIEBxdv1QhryIGrqmMeW7bs6U1R40oTzMqNhf4ScBSkkeRKsSwpHY+LFZGN2/gjndEATvzNQ/zWMpqR/BX9D+rcmxi8JaRf3KI/JVEKZ2iPU/TnAVUxDxVbeU0RV4mctqKepu0fLfpMA7xoaoJjxl0xK0rRRLJsTIZSWCopwEcspeug11JhE80I0fQB8H7QRySyeTQtnsfcciG8QPyJoWhCqVc+CeaAD+faMYEGJKoA/L9+11wQDVUFVcpSISLcWNGpVbaaTBLx8XLGqUY/EShyAVO+cGmC5lojhRsxYWg6RlqLSlUQSXzNWhvwhrX9aBV2D9EftbCP6AXzdCaZOQDF73gLGzZhmka1jIwl57teM7ibuEsrOXSNrDtYTxoQy+jsmAZ2AzwAhQ6OuWUPrP4HNFUqpQd1KXyM77DSnC9pfz5fAK3Rane+6AHwi6k1/+WdNjABkYhgyL3dVlC4lKgBd0jQZdKVa1u1wl36lRp7AUNC0pDy/v9mXsz18OLOzxvKRapbRMWKvrjruiBxVVq3QJvgXyXypmWYpObhV3b1SwWw9qItXo1FFRLsTWfA9gSppexWqKt9Nr7cMxqa0OOh6AvrDG03LP1/lIBw6je4qzKC56PmENjoGg9enWe0qxpOqHUcYhlGsQJsTGzXWIsjoQYeB7Ca06OtjUztRnr7PrfOwpg81P/vgfqGCm7o+IZmOdmj0jO8gd2GfH7AaqX0ZTe8l8ZHsNti4Wojo9M8Og2UPcOJxGJaMTSmN/C78mJFKn7kHfIzqAmMep9HDTqQ8Pg+khld9mPctA7MaxIfCbJN6Ie3t+jX0ikjP4fcO9ZjSV/imakNyyPgCS/O8WRoiuqroMepevrYUCiny1r9pZHJ+lav4MUvPm2E+xEYzgMHHXTKF39Phqcq5KJEHZ5QQo2rlSfG8XBs6kvntvAIqDeYYx2xcH3VRDxyJ+/8e9lSa5frr8A8oTXd40LAAA=" Type="41"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>0</MinPerc>
                        <MaxPerc>0</MaxPerc>
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
                  <VendorMessage InfoType="2">
                    <SubSection>
                      <Paragraph>
                        <Text>Os modelos que compõem este grupo são: Ram 700 Big Horn CD 1.4. A Localiza não garante o modelo, somente o grupo.</Text>
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
              </Info>
            </VehVendorAvail>
            <VehVendorAvail>
              <VehAvails RatePeriod="Daily" RateCategory="16">
                <VehAvail>
                  <VehAvailCore IsAlternateInd="false" Status="Available">
                    <Vehicle FuelType="Unspecified" DriveType="Unspecified" AirConditionInd="true" TransmissionType="Manual" Description="PICK-UP COM AR PLUS" OdometerUnitOfMeasure="Km" VendorCarType="NPMR" BaggageQuantity="0" PassengerQuantity="5" CodeContext="internal code" Code="VP">
                      <VehType VehicleCategory="16" DoorCount="2"/>
                      <VehClass Size="33"/>
                      <VehMakeModel Name="Renault Duster Oroch 1.6"/>
                      <PictureURL>https://www.localiza.com/colombia-site/geral/Frota/ORCH.png</PictureURL>
                    </Vehicle>
                    <RentalRate>
                      <RateDistance Unlimited="true" DistUnitName="Km" VehiclePeriodUnitName="Day"/>
                      <VehicleCharges>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="310052.71" Purpose="1">
                          <Calculation UnitCharge="310052.71" UnitName="Day" Quantity="1" Total="310052.71"/>
                        </VehicleCharge>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Horas extras" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="128530.9424208" Purpose="11">
                          <Calculation UnitCharge="64265.4712104" UnitName="Extra hour" Quantity="2" Total="128530.9424208"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="438583.6524208" EstimatedTotalAmount="702388.001018827" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="53658.36524208" Purpose="6">
                        <Calculation Percentage="10" Total="53658.36524208"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="112145.983355947" Purpose="7"/>
                    </Fees>
                    <Reference ID="qQsAAB+LCAAAAAAABACNVsuSmzgU/RWX1naXAAPGO9p2T1yTtF3dpDfjLBSsdlQDyCOg40qXv2YW8yH5sVwhHuLhMBtXmXvu69yH7jsK+N802RMRMhKhJZpZpuOYFnYxmqKPLM3IiidHFhK+4jEtUX+9o+2RJhl7BcGRiwGIbTmebVnWdARp6tAXKlLC0dKcokcA7F6pyAgEtXvYPAX+5DnwH9f+0xoiW/EjO/GACPYqAdhYGIYD39c0DXmS8T1YB7c5iT6xhMVgc27dOabjup4zH4SRSx/mZ4J9zTOeVpFA4lJVyBQqIbj/M558ZG+Cout0GLAXPKM///v5L58c+WRFhODo+qVKYxUxCILKPFzLmnumixpRnmZUbC7wk4ClJI8iRc6wpHY+LFZGN2/gjndEATvzNQ/zWMpqR/BX9D8rOjYxeMvIPzlE/kqilE7RnqdpzgIqYp6qUnOaomUmctqKepu0fLdbZBziA6sJjxlUxKmZIonsuzIZ2dTAp4nx3LUM01sAo59oRo6gDt/fD+KQTCaHttn7iEMyjB/QclLYqVDKg3+iCbTsE82YAEMSdUC+f78LDqiGKm6VgkQ4GDdmVGalnQbj2Q72apRq6icKHBc45QcbjuU5miMFW3EhaHoGqmUHVVA5DBq0N3SN63r2KuwfIj9r4R/Qy16ztCYZ+cBFLzoTm9bMMGamFxje0rKX9uJuYS9Mz7Nm2FpiPGhD51FZMGfYCPACFDo65bw+s/gc0VSqlCXUpfKzNr8KcL1l5PP5BO4Lzt77oAfCLqTXCC3psIENjEQGbPd1WULiUqAF3+uGbk9VnN3mC3f4qjT2goZFb0Pt+3Vyl3NniRd32G0pFqltExaqOcBd0QOLq9S6BG+hCy+VMy3FJjcTO5ajWSyGthFrfDW9qJZja1AHsCVMp7Fapq302ntxzGprU46HoC+uMbTct/UeUwHDzN7qWZUXPCMxh8IAab326jyzWVN0QqltE9OYETvEs7nlkNniSMgMu6Hp2uRomXNDm7XOzv+9owBeAOrf90AdI2V1VDwDc93sE9mz/IFdRvx+APYymtJb/ivDY7htsRnVYZIJHt0G6t7hXCIRjVga81v4PTmRInUf8g7ZGdQkRr2Tg0Z9KBjcI6msLvtRDnonhhWJzyT5RtQD/Hv0C4mU0f8D7j2vseyfohjpDcsjINnfHXKk6IqqK6HX0vUVMSDRz5c1e8ujk3St30MK3nzbCXaiMRwItrptlK5+Jw3OVdmJEHZ5XQo2rlSfHcXhs6kvn9vAIqDe0Yx2xeH3VRDxyJ+/8e8lJdcv119zlYWwqQsAAA==" Type="41"/>
                    <Discount Amount="239947.29" CurrencyCode="COP" DecimalPlaces="2" Percent="43.62677964" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>43.62677964</MinPerc>
                        <MaxPerc>43.62677964</MaxPerc>
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
                  <VendorMessage InfoType="2">
                    <SubSection>
                      <Paragraph>
                        <Text>Os modelos que compõem este grupo são: Renault Duster Oroch 1.6. A Localiza não garante o modelo, somente o grupo.</Text>
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
              </Info>
            </VehVendorAvail>
          </VehVendorAvails>
        </VehAvailRSCore>
      </OTA_VehAvailRateRS>
    </OTA_VehAvailRateResponse>
  </s:Body>
</s:Envelope>
