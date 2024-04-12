<?xml version="1.0" encoding="UTF-8"?>
<s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/">
  <s:Body xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
    <OTA_VehAvailRateResponse xmlns="http://tempuri.org/">
      <OTA_VehAvailRateRS TimeStamp="0001-01-01T00:00:00" Target="Test" Version="0" TransactionStatusCode="Start" RetransmissionIndicator="false">
        <Success/>
        <VehAvailRSCore>
          <VehRentalCore xmlns="http://www.opentravel.org/OTA/2003/05" OneWayIndicator="true" ReturnDateTime="2024-01-17T13:00:00" PickUpDateTime="2024-01-15T23:00:00">
            <PickUpLocation LocationCode="AABOT" CodeContext="internal code"/>
            <ReturnLocation LocationCode="AABOT" CodeContext="internal code"/>
          </VehRentalCore>
          <VehVendorAvails xmlns="http://www.opentravel.org/OTA/2003/05">
            <VehVendorAvail>
              <VehAvails RatePeriod="Daily" RateCategory="12">
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
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="48.3" Purpose="1">
                          <Calculation UnitCharge="24.15" UnitName="Day" Quantity="2" Total="48.3"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="016290" RateCategory="12"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    {{-- No prices total amount and estimated total --}}
                    <TotalCharge RateTotalAmount="0" EstimatedTotalAmount="0" CurrencyCode="USD" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="4.83" Purpose="6">
                        <Calculation Percentage="10" Total="4.83"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="USD" Amount="10.0947" Purpose="7"/>
                    </Fees>
                    <Reference ID="vQsAAB+LCAAAAAAABACNVs2S4jYQfhXKZzwlC9vY3DzAZKnsDtSMs5ewBw0IVhXbIrI9oTLF0+SQB9kXS8vyj/y35EIV7q+/7v7ULfWHEfI/aLIj4sBIZCwMz3U8G3tz25gan1makSVPjuxA+JLHtAT9/mFsjjTJ2AkMRy4GINjzEHLm/vQOEuvQr1SkhMOXqfEMgO2JioxATtun9UsYTF7D4HkVvKwgsyU/sjMPiWAnCUCWi30E31c0PfAk4ztgh7A5ib6whMXA6fgPcwdwluV7Psae7Q6iyXUUHWSCveUZT6u8QAbJIGRBlRGS+TWefGbvghq36TBgJ3hGf/z74x8+OfLJkgjBjdu3qqhlxCAXCjjL8V0H2Y7RmPI0o2J9hZ8EmJI8ipRUw5Y6+LBZka7fIRzvmEJ24St+yGNpqwPBX9H/rORYxxAtI3/mkPmJRCmdGjuepjkLqYh5qg6e09RYZCKnraw3SSt2u2HuQwJQNeExgxNxa6VIIruwLEZ2OOhpWq5vIcueW3OQ9AvNyBH8wfCxF/tkMtm3eR8jDtUwvjcWk4KoQqkQwZkm0MEvNGMCiCRqbwTB4zbcGzVUiascJMJFqKFRpZU8DcZ3XOTXKNXjLxRELnAqDrTmzHe1QAq25ELQ9AJayxaqoTAbGrQ3g03oehQr7C8iv2jpg7NGtCIZ+cRFLzmM8My0LBP5IUYLNFsg+8GZ+XPswzf4hwY5dBmBwTaRZVpOiKVDx6cc21cWXyKaSpfyBHWr/NwfY4W7jXH9djlDFoVyH33QE2FX0muHlnWYYA2TkYHmfV+WkLg0aDX0eqLbWZV0o7IVmumyVR47QQ9Fh0MHaMeFPBM7oeUtZnhhOw8+bjkWpW0SdlDTgLqmJxZXpXUF3kAvXqtgWolNbZbnYUtjLGa3MWt6NR2p7sjWuA5gS5guY3WntsprX4/3WFsX5v0U9PvrHlpeu/V1phKGIR/rWVUXvCYxh4MB0Xrt1Xl7s+bQqYOxe3Rtc4ZOtmmTg2t6p+ObeTq5NrIQ8ukcayPXufp/HiiEh4AGjz1Qh6Q8HZXPwHg314rsWf7ErnfifgL1MprSsfgV8T3cprgf1baSCR6NA/XosEKRiEYsjfkYfkfOpCg9gLoP7AJuEqOey0HSAA4MtpNUni77uxz0Tg5LEl9I8p2od/jn6K8kUqT/B9x7ZWPZP8VhpCPMd0CyvzviSNPNqJaFXkvXy8SARd9iVuw9j84ytL4WKXjzbSvYmcawJzhqxVG++ro0OFdlJ0La5cop2H2nevso9p91vQCNA4uEepu0sS32vzdBxDN//c7/KiW5fbv9B6j3eTm9CwAA" Type="41"/>
                    <Discount Amount="35.85" CurrencyCode="USD" DecimalPlaces="2" Percent="59.7501611989228" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>59.750161198922846</MinPerc>
                        <MaxPerc>59.750161198922846</MaxPerc>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="0">
                          <Calculation UnitCharge="0" UnitName="Day" Quantity="2" Total="0"/>
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
                        <Text>Será cobrada mais uma diária em função da quantidade de horas extras.</Text>
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
              </Info>
            </VehVendorAvail>
            <VehVendorAvail>
              <VehAvails RatePeriod="Daily" RateCategory="12">
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
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="53.66" Purpose="1">
                          <Calculation UnitCharge="26.83" UnitName="Day" Quantity="2" Total="53.66"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="016290" RateCategory="12"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="53.66" EstimatedTotalAmount="70.24094" CurrencyCode="USD" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="5.366" Purpose="6">
                        <Calculation Percentage="10" Total="5.366"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="USD" Amount="11.21494" Purpose="7"/>
                    </Fees>
                    <Reference ID="uAsAAB+LCAAAAAAABACNVsuS2jgU/RXKa+iShW1sdm4eE2qShup2shmyUIMgqrEtRrY7VLr4mlnMh+THcmX5Ib/CbKjC99zXuQ/ddyPgf9N4R8SBkdCYGxhZ2JtNkWsZY+MjS1Ky4PGRHQhf8IgWqL/ejc2Rxik7geDIRQ8Euy5CtovGd5BYh36hIiEcvoyNJwBsT1SkBILarlfPgT96Cfynpf+8hMgW/MjOPCCCnSQAmQ72EHxf0uTA45TvwDq4zUj4icUsApu2+zAzXdO0kD31sOf1Ysl1AOungr1mKU/KmIACqS9kMqUQAvkzGn1kb4Iat3E/YCd4Sn/+9/NfPjry0YIIwY3b1zKhRcggEgo40/YcG1m2UYuyJKVidYWfGCzFWRgqmvollfN+sTK6egN3vCUK2IUv+SGLpKxyBH9F97OiYxWBt5T8k0HkJxImdGzseJJkLKAi4okqOqeJMU9FRhtRb+KG72az3If4wGrMIwYVcSqmSCw7sEhGtjfwOQFCXQfPbHMGlH6iKTmCPgje92Ifj0b7pt3HkEM2jO+N+Sg3VKKUC/9MY+jeZ5oyAYYkam/4/uM22BsVVJGrFCTCQag2o1Ir7NQYz3aQV6FUfz9TIDnHKT/Q7FPP0Rwp2IILQZMLcC1bqILCXGjQzvzVrqsxLLF/iOyihb831pqhJUnJBy46wWGEpxPTnCAvwGiOpnNkPcAQzbAH3+Af6rWh0wgWrAkyoWABlgotnWJoX1h0CWkiVYoK6lL5uT3ECnUbsvT5coYYct7eu6A1YVfSaYaGtN/ACuYiBca7uiwmUSHQMuh0RLuvSuIGScsZ00krNXaCHvL+hvprxULuBNuB6c6neG7ZDx5uKOapbWJ2ULOA2qI1i8rU2gRvoBOvpTMtxTo303WxqVnMJ7cWa3zV/ag2ZGNYe7AFTKex3KiN9JrL8Z7Vxrq8H4K+ve6h5dKtlpkKGEZ8qGdVXvCWRBwKA6R12qv16qZ10amNsXN0rMkUnayJRQ7OxD0dXyenk2MhEyGPzrA2cK3F/3tHATwD1H/sgFpGiuqoeHqGu14qsmf5ml3v+P0A7KU0oUP+S8P3cJt8O6o7JRU8HAbq3uF6IiENWRLxIfyOnEmeug95H9gF1CRGPZa9Rn0oGFwmiawu+1EMeiuGBYkuJP5G1Cv8e/QXEiqj/wfceWMj2T95MZIBy3dAsr9b5EjRzShPhU5LV6dEj0S/YZbsLQvP0rV+FCl4/W0r2JlGcCXY6sBRuvqx1DtXRSdC2MWxKdh9per2yK+fVXX+DAPzgDo3tLHNr79XQcQTf/nGvxeU3L7efgGXOCs+uAsAAA==" Type="41"/>
                    <Discount Amount="38.17" CurrencyCode="USD" DecimalPlaces="2" Percent="58.7181140539299" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>58.7181140539299</MinPerc>
                        <MaxPerc>58.7181140539299</MaxPerc>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="0">
                          <Calculation UnitCharge="0" UnitName="Day" Quantity="2" Total="0"/>
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
                        <Text>Será cobrada mais uma diária em função da quantidade de horas extras.</Text>
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
              </Info>
            </VehVendorAvail>
            <VehVendorAvail>
              <VehAvails RatePeriod="Daily" RateCategory="12">
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
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="61.98" Purpose="1">
                          <Calculation UnitCharge="30.99" UnitName="Day" Quantity="2" Total="61.98"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="016290" RateCategory="12"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="61.98" EstimatedTotalAmount="81.13182" CurrencyCode="USD" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="6.198" Purpose="6">
                        <Calculation Percentage="10" Total="6.198"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="USD" Amount="12.95382" Purpose="7"/>
                    </Fees>
                    <Reference ID="vwsAAB+LCAAAAAAABACNVtmO2zYU/RVDz9aAWi35TeOlMZqMjRk1CBDngWPTDlFJdClpamTgr+lDPyQ/1ktRC7XFBQYDWPfc7fBc8r5rIfuTJDvMDxRH2lzTTd9yDdOemdpU+0jTDC9YcqQHzBYsJiXq67u2OZIkoycwHBkfgJieh5DjGdM7SFOFfiY8xQy+TLUnAGxPhGcYitquV89hMHkJg6dl8LyEyhbsSM8sxJyeBAAZrukj+L4k6YElGdtBdEib4+gTTWgMMd3ZgzVzbRv+bOTNkDUbROPrKDrIOH3NM5ZWdQENIgIXDVVGKOb3ePKRvnGi3abDgB1nGfn5789/2OTIJgvMOdNu36qmFhGFWgjgDMd3HWQ7WmPK04zw1RX+JRApyaNIUjVsqZMPm2XQ1RukYx1TSC9syQ55LGx1IvjJ+58lHasYsmX4rxwqP+EoJVNtx9I0pyHhMUvlwTOSavOM56RV9SZp5W4L5j4kAFYTFlM4EbdmCidChWUzQuJC24bvG8gHRi2g9BPJ8BH8wfC+5/tkMtm34z5GDLqhbK/NJ0WgCiVTBGeSgIKfSUY5BBKovRYEj9twr9VQSa50EAgXoSaMbK2M02B8x0V+jZIafyZAcoGTeUDwlu8qiSRswTgn6QW4FhKqoTAbCrQ3g03qehQr7G88vyjl77X1FyXSEmf4A+O96kxkWrph6MgPTTRH1hzZD47lz0wfvsEvNBhD5REi2DoydMMJTeHQ8Snn9oXGl4ikwqU8QtVa8N2bY4m7jcX643KGKgrq3vugNaZX3NNDyzocYAWjkQHpfV+a4Lg0KD30RNGVVkXdKG0FZyptlceOk0MhcZCAclzI000nNLy5Zc5t58E3W45Fa5uEHuQ4oK5pTeOqtS7BGxDjtUqmtNj0ZnieaSgRi+FtzApfjSTlJdma1wFsCVNprC7VVnvt+/Fe1NaNeb8E9QK7hxb3bn2fyYJhysc0K/uC5yRmcDBAWk9encc3aw6dOKbpHl1bt9DJ1m18cHXvdHzVTyfXRgZCPpmZysh17v5fJwrhJSDBYw/UCVKejqxnYLyba0Volq3p9U7eD8BeRlIylr8KfA+3KS5Iua5knEXjQDU7LFE4IhFNYzaG3+EzLloPoO8DvYCbwMj3cjBoAAcG60kqTpf+KAe9U8MCxxecfMfyIf41+jOOZND/A+49s7HQT3EY6UjkOyCh7w45wnTTqm2hJ+l6mxiwqGvMkr7l0VmkVvciCW++bTk9kxgWBUfuONJX3ZcG56pUIpRd7pyc3neq149iAVrVG9A4sCiot0pr22IBfOWYP7GX7+zvkpLbt9t/YJFoAb8LAAA=" Type="41"/>
                    <Discount Amount="64.01" CurrencyCode="USD" DecimalPlaces="2" Percent="67.376446444087" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>67.376446444087037</MinPerc>
                        <MaxPerc>67.376446444087037</MaxPerc>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="0">
                          <Calculation UnitCharge="0" UnitName="Day" Quantity="2" Total="0"/>
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
                        <Text>Será cobrada mais uma diária em função da quantidade de horas extras.</Text>
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
              </Info>
            </VehVendorAvail>
            <VehVendorAvail>
              <VehAvails RatePeriod="Daily" RateCategory="12">
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
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="64.4" Purpose="1">
                          <Calculation UnitCharge="32.2" UnitName="Day" Quantity="2" Total="64.4"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="016290" RateCategory="12"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="64.4" EstimatedTotalAmount="84.2996" CurrencyCode="USD" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="6.44" Purpose="6">
                        <Calculation Percentage="10" Total="6.44"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="USD" Amount="13.4596" Purpose="7"/>
                    </Fees>
                    <Reference ID="uAsAAB+LCAAAAAAABACNVsmO2zgQ/RVDZyugVku+qb1MjCRto1sTYDDOgW3TDhFJdCipY6Thr5nDfEh+bIqiFmqLBwYMiPVqe1VF1psWsm8k2WF+oDjS5prh28j2bdcytan2kaYZXrDkSA+YLVhMStTfb9rmSJKMnkBwZHwAYnoeQo6PpneQpgr9THiKGZxMtUcAbE+EZxiC2q5XT2EweQ6Dx2XwtITIFuxIzyzEnJ4EABmu6SM4X5L0wJKM7cA6uM1x9IkmNAabM++dY1m24VvImSHDH8Ti6wg2yDh9yTOWVjEBBUKfi2QqIQTyIZ58pK+caLfpMGDHWUZ+/fvrHzY5sskCc86025cqoUVEIRIi6uD4roNsR2tEeZoRvrrCXwKWkjyKJE3Dktr5sFgaXb2CO9YRhfTCluyQx0JWO4JP3j+WdKxi8Jbh7zlEfsJRSqbajqVpTkPCY5bKojOSavOM56QV9SZp+W43y31IAKwmLKZQEbdmCieiA8tkRHsDn7phzjzDhh8w+olk+AjqcP625/tkMtm3zT5EDJKhbK/NJ4WdCiU9BGeSQPM+kYxyMCRQey0IHrbhXquhklupIBAuQo0ZmVlpp8H4jov8GiXb+4kAxwVO+oFet3xXcSRhC8Y5SS9AteigGgpjoUB749e4rqewwv7B84sS/l5b/6VYWuIMv2e8F52JTEs3DB35oYnmyJojG2bJn5k+nMEXGrSh8ggWbB0ZuuGEplDo6JRD+0zjS0RSoVKWUJWK4+4QS9RtzNKflzPEUBD31getMb3iXje0pMMGVjAXGVDe16UJjkuBkkGvJbqNVRE3SlrBmEpapbHj5FA0ODSAUizk6aYTGt7cMue28843W4pFapuEHuQwoK5oTeMqtS7BG2jFa+VMSbHJzfA801AsFpPbiBW+moaUN2RrWgewJUylsbpRW+m1L8d7VlvX5f0Q1NvrHlpcuvVlJgOGGR/rWZkXvCUxg8IAab326ry6WVN04pime3Rt3UInW7fxwdW90/FFP51cGxkI+WRmKgPXufh/7yiEZ4AEDz1Qx0hZHRnPwHA3l4roWbam1zt+3wN7GUnJmP/K8D3cprge5Z6ScRaNA1XvsD3hiEQ0jdkYfofPuEg9gLwP9AJqAiMfy0GjARQMNpNUVJf+LAe9E8MCxxecfMXyFf49+jOOpNH/A+69sbHon6IY6YjlOyDR3x1yhOimVatCr6XrVWJAou4wS/qaR2fhWl2KJLw523J6JjFsCY5ccKSuuiwNzlXZiRB2uWxyel+p3j2K7WdVrz/jwCKg3g6tbYvt74Vj/siev7IfJSW3L7f/ANM7c/K4CwAA" Type="41"/>
                    <Discount Amount="117.8" CurrencyCode="USD" DecimalPlaces="2" Percent="78.5334193057019" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>78.5334193057019</MinPerc>
                        <MaxPerc>78.5334193057019</MaxPerc>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="0">
                          <Calculation UnitCharge="0" UnitName="Day" Quantity="2" Total="0"/>
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
                        <Text>Será cobrada mais uma diária em função da quantidade de horas extras.</Text>
                      </Paragraph>
                    </SubSection>
                  </VendorMessage>
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
              <VehAvails RatePeriod="Daily" RateCategory="12">
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
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="83.46" Purpose="1">
                          <Calculation UnitCharge="41.73" UnitName="Day" Quantity="2" Total="83.46"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="016290" RateCategory="12"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="83.46" EstimatedTotalAmount="109.24914" CurrencyCode="USD" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="8.346" Purpose="6">
                        <Calculation Percentage="10" Total="8.346"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="USD" Amount="17.44314" Purpose="7"/>
                    </Fees>
                    <Reference ID="vQsAAB+LCAAAAAAABACNVs2S4jYQfhXKZzwlC9vY3DzAZKnsDtSMs5ewBw0IVhXbIrI9oTLF0+SQB9kXS8vyj/zDOheqUH/9dfenbrk/jJD/QZMdEQdGImNhmNbMt72ZN3NcY2p8ZmlGljw5sgPhSx7TEvb7h7E50iRjJzAcuRiAYM9DyPHwdASJdehXKlLC4WRqPANge6IiI5DV9mn9EgaT1zB4XgUvK8hsyY/szEMi2EkCkOViH8H5iqYHnmR8B+wQNifRF5awGDhd5wFjz7UsKM+Z+9hyBtHkehcdZIK95RlPq7xABskgZEGVEZL5NZ58Zu+CGrfpMGAneEZ//PvjHz458smSCMGN27eqqGXEIBcKOMvxXQfZjtGY8jSjYn2FnwSYkjyKlFTDljr4sFmRrt8hHO+YQnbhK37IY2mrA8Ff0T9WcqxjiJaRP3PI/ESilE6NHU/TnIVUxDxVF89paiwykdNW1pukFbvdMOOQAFRNeMzgRtxaKZLILiyLkT0OenruHCMXz6WgX2hGjuANxx97sU8mk32b9THiUAvje2MxKWgqlAoQnGkC/ftCMyaASKL2RhA8bsO9UUOVtMpBIlyEGhpVWMnTYHzHRX6NUh3+QkHiAqfiQLvPfFcLpGBLLgRNL6C0bKAaCpOhQXsT2ISuB7HC/iLyi5Y+HGhEK5KRT1z0ksMIz0zLMpEfYrRAswWyH5yZP8c+nME/NMihywgMtoks03JCLB06PuXQvrL4EtFUupQ3qFsLuXtDrHC3e1y/Xc6QRaHcRx/0RNiV9NqhZR0mWMNcZKB535clJC4NWg29nuh2ViXdXdkKzXTZKo+doIeiw6EDtOtCnomd0PIWM7ywnQcftxyL0jYJO6hpQF3TE4ur0roCb6AXr1UwrcSmNsvzsKUxFpPbmDW9mo5UL2RrXAewJUyXsXpRW+W1H8cx1tZzOZ6C/nqNoeWjWz9mKmEY8ns9q+qCb0nM4WJAtF57db68WXPp1MHYPbq2OUMn27TJwTW90/HNPJ1cG1kI+XSOtZHrPPw/DxTCZ4AGjz1Qh6S8HZXPwHg3z4rsWf7EriNxP4F6GU3pvfgV8RhuU7yPalfJBI/uA/XosEKRiEYsjfk9/I6cSVF6AHUf2AXcJEZ9LAdJA7gw2E1Sebvs73LQOzksSXwhyXeivsI/R38lkSL9P+DeNzaW/VNcRnqHeQQk+7sjjjTdjGpV6LV0vUoMWPQdZsXe8+gsQ+tLkYI3Z1vBzjSWy51acJSvviwNzlXZiZB2uXAKNu5U7x7F9rOu15/7wCKh3h5tbIvt700Q8cxfv/O/Sklu327/Aexvm0O9CwAA" Type="41"/>
                    <Discount Amount="78.27" CurrencyCode="USD" DecimalPlaces="2" Percent="65.2286114835792" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>65.228611483579215</MinPerc>
                        <MaxPerc>65.228611483579215</MaxPerc>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="0">
                          <Calculation UnitCharge="0" UnitName="Day" Quantity="2" Total="0"/>
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
                        <Text>Será cobrada mais uma diária em função da quantidade de horas extras.</Text>
                      </Paragraph>
                    </SubSection>
                  </VendorMessage>
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
              <VehAvails RatePeriod="Daily" RateCategory="12">
                <VehAvail>
                  <VehAvailCore IsAlternateInd="false" Status="Available">
                    <Vehicle FuelType="Unspecified" DriveType="Unspecified" AirConditionInd="true" TransmissionType="Automatic" Description="SUV COMPACTO AUTOMÁTICO" OdometerUnitOfMeasure="Km" VendorCarType="IDAR" BaggageQuantity="3" PassengerQuantity="5" CodeContext="internal code" Code="GC">
                      <VehType VehicleCategory="1" DoorCount="4"/>
                      <VehClass Size="6"/>
                      <VehMakeModel Name="Opel Crossland 1.2"/>
                      <PictureURL>https://www.localiza.com/colombia-site/geral/Frota/CROS.png</PictureURL>
                    </Vehicle>
                    <RentalRate>
                      <RateDistance Unlimited="true" DistUnitName="Km" VehiclePeriodUnitName="Day"/>
                      <VehicleCharges>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="88.54" Purpose="1">
                          <Calculation UnitCharge="44.27" UnitName="Day" Quantity="2" Total="88.54"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="016290" RateCategory="12"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="88.54" EstimatedTotalAmount="115.89886" CurrencyCode="USD" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="8.854" Purpose="6">
                        <Calculation Percentage="10" Total="8.854"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="USD" Amount="18.50486" Purpose="7"/>
                    </Fees>
                    <Reference ID="vAsAAB+LCAAAAAAABACNVs2S4jYQfhVKZzwlG9tgbh5gslR2B2rG2UvYgwYEq4ptEdmeUJniaXLIg+yLpWX5R/5b50IV7q+/7v7ULfUHCvgfNN4TcWQkREtke9bcsjGaos8sScmKxyd2JHzFI1pAfv9A2xONU3YGw4mLHogzc725ufCmI0hLh36lIiEcLa0pegbA7kxFSiCj3dPmJfAnr4H/vPZf1pDZip/YhQdEsLMEYNO1PJnxmiZHHqd8D+wQNiPhFxazCDgd9wHPLM923YXn2o7n2L1ochtE+6lgb1nKkzIvkEEyCFlQaYRkfo0mn9m7oOg+7QfsBU/pj39//MMnJz5ZESE4un8ri1qFDHKhgDMdz3Ww7aDalCUpFZsb/MTAFGdhqKTqt1TB+82KdPMO4XjLFLArX/NjFklbFQj+iu5nJccmgmgp+TODzM8kTOgU7XmSZCygIuKJOnhOE7RMRUYbWW/jRuxmw4xDfFA15hGDE3ErpUgsu7AoRvY36GmYc89z3DnGUtIvNCUn8AfDx0Ec4snk0OR9DDlUw/gBLSc5UYlSIfwLjaGDX2jKBBBJ1AH5/uMuOKAKqsRVDhLhYlzTqNIKnhoDKWKvQqkef6Egco5TcaDhZ56rBVKwFReCJlfQWrZQBYXZ0KCdGaxDV6NYYn8R2VVLHz6sNKY1ScknLjrZWdiaGaZpYC+w8BLPlth+cGbe3PLgG/zDvRy6jsBgG9g0TCewpEPLp5jbVxZdQ5pIl+IIdWteUGeOFe4+xPXb9QJZ5NJ9dEFPhN1Ipx8a1n6CDYxGCqJ3fVlMosKg1dBpinZrldINypZrpstWeuwFPeYtDi2gHRdeGJYTmIvlzFrazoNnNRzz0rYxO6pxwG3TE4vK0toCb6EZb2UwrcS6NnOxsEyNMR/e2qzpVbekuiQb89qDLWC6jOWl2iiveT+OsTZuzPEU9AtsDC3v3eo+UwnDlA/1rKoLnpOIw8GAaJ32aj2+aX3o1LEs9+TaxgyfbcMmR9dYnE9vxvns2tjE2KNzSxu51t3/80ABvATUf+yAWiTF6ah8esa7vlZkz/IndhuJ+wnUS2lCh+KXxGO4bX5BqnUlFTwcBurRYYMiIQ1ZEvEh/J5cSF66D3Uf2RXcJEa9l72kPhwYrCeJPF32dzHorRxWJLqS+DtRD/HP0V9JqEj/D7jzzEayf/LDSAaYR0Cyv1viSNMdldtCp6WrbaLHoq8xa/aehRcZWt+LFLz+thPsQiNYFBy14yhffV/qnauiEyHtYucUbNypWj/yBWhTbUDDwDyhziqNdvkC+CaIeOav3/lfhST3b/f/AAyiAnu8CwAA" Type="41"/>
                    <Discount Amount="56.43" CurrencyCode="USD" DecimalPlaces="2" Percent="56.032946689646" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>56.032946689645954</MinPerc>
                        <MaxPerc>56.032946689645954</MaxPerc>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="0">
                          <Calculation UnitCharge="0" UnitName="Day" Quantity="2" Total="0"/>
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
                        <Text>Será cobrada mais uma diária em função da quantidade de horas extras.</Text>
                      </Paragraph>
                    </SubSection>
                  </VendorMessage>
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
              <VehAvails RatePeriod="Daily" RateCategory="12">
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
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="92.3" Purpose="1">
                          <Calculation UnitCharge="46.15" UnitName="Day" Quantity="2" Total="92.3"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="016290" RateCategory="12"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="92.3" EstimatedTotalAmount="120.8207" CurrencyCode="USD" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="9.23" Purpose="6">
                        <Calculation Percentage="10" Total="9.23"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="USD" Amount="19.2907" Purpose="7"/>
                    </Fees>
                    <Reference ID="vgsAAB+LCAAAAAAABACNVstyozgU/RUX69AlBMbBO2I7067ujl0Jk007C8WW3aoB5BaQcU3KXzOL+ZD82FwhHuLV9CYV6577OvfBfTcC/heNt0TsGQmNuWHOLNfG1hQbN8ZXlqRkweMD2xO+4BEtQN/fjfWBxik7guDARQ/EnSIPTzG+GUFiHfpMRUK4MYd/HwCwOVKREohpc796DPzJU+A/LP3HJUS24Ad24gER7CgByHKxh+B9SZM9j1O+BevgNiPhNxazCGzObj8hjG0LYcdG2HOw3Ysml0G0nwr2mqU8KeMCGqQFIRMqhRDMl2jylb0Jalxv+gFbwVP68d/Hv3xy4JMFEYIb15cyqUXIIBYKOGvqATfO1KhFWZJSsbrAnxgsxVkYKqr6JZXzfrEyunoDd7wlCtiZL/k+i6SscgQ/RfdZ0bGKwFtKfmYQ+ZGECb0xtjxJMhZQEfFEFZ7TxJinIqONqNdxw3ezYcYhPrAa84hBRdyKKRLLLiySkR0u+UTItW0PIxsY/UZTcgB1eH/fiV08meyaZu9CDskwvjPmk9xOiVIe/BONoYEfacoEGJKoneH7d5tgZ1RQxa1SkAgXodqMyqywU2O8qYu8CqVa/JECxzlO+YF+tz1Xc6RgCy4ETc5AteygCgqjoUE7I6iFV05iif1DZGctfHhwNEtLkpLPXHSiwwjbpmWZyAswmiN7jpxPU9ubYQ/e4BfqtaHzCBYcE1mmNQ2wVGjpFGP7xKJzSBOpUpRQl8rn7hgr3HXI1p/nE0SRU/feBd0TdiGdfmhI+w2sYDJSIL2ry2ISFQIth05TtFurpG6QtpwznbZSYyvoPm9xaAGtXGhm4llg2XPbleWSTOmaeW7rmO3VPKC26J5FZW5thtfQjZfSm5ZjnZx1e4stzWI+vLVYI6zuSbUkGwPbgy1gOo/lUm2k19yPY1YbG3M8BH2BjaHl3q32mQoYxnyoaVVe8DmJOBQGSOv0V+vjm9ZVpzDn7sF1TBsdHdMhe9e8PR5ezePRdRBsSo/OsDZzrd3/a0cBfAmof9cBtYwU1VHx9Mx3vVdk0/J7dhnx+xnYS2lCh/yXhsdw63xDqnMlFTwcBure4YYiIQ1ZEvEh/JacSJ66D3nv2RnUJEZ9L3uN+lAwOE8SWV32TzHprRgWJDqT+AdRH+Jfo59JqIz+DrjzmY1k/+TFSAYsj4Bkf7fIkaKrUV4LnZaurokeiX7GLNlbFp6ka/0uUvD6bSPYiUby5lQ3jtLV76XeuSo6EcIubk7BxpWq8yM/gFbVBTQMzAPqnNLGJj8AXwURD/zpB/+7oOT6cv0fgqSXEr4LAAA=" Type="41"/>
                    <Discount Amount="163.85" CurrencyCode="USD" DecimalPlaces="2" Percent="78.0223102430294" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>78.022310243029423</MinPerc>
                        <MaxPerc>78.022310243029423</MaxPerc>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="0">
                          <Calculation UnitCharge="0" UnitName="Day" Quantity="2" Total="0"/>
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
                        <Text>Será cobrada mais uma diária em função da quantidade de horas extras.</Text>
                      </Paragraph>
                    </SubSection>
                  </VendorMessage>
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
              <VehAvails RatePeriod="Daily" RateCategory="12">
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
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="134.16" Purpose="1">
                          <Calculation UnitCharge="67.08" UnitName="Day" Quantity="2" Total="134.16"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="016290" RateCategory="12"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="134.16" EstimatedTotalAmount="175.61544" CurrencyCode="USD" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="13.416" Purpose="6">
                        <Calculation Percentage="10" Total="13.416"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="USD" Amount="28.03944" Purpose="7"/>
                    </Fees>
                    <Reference ID="ugsAAB+LCAAAAAAABACNVsuS4jYU/RXKa9wlP9tm5wY6Q2WmoWhnNmEWahCMKrZFZLtDpYuvySIfMj+WK8sP+TXOhip8j+7j3HOl+6GF7A+S7DA/UhxpC814RI5vu7btanPtM00zvGTJiR4xW7KYlKjfP7TNiSQZPYPhxPgAxLFc33n0nPkE0lShXwlPMdMW5lx7AcD2THiGIant83ofBrPXMHhZBfsVZLZkJ3phIeb0LADIcE0fwfcVSY8sydgOvEPYHEdfaEJj8Ol6D8hxXM+yfQu5UOUgGN/GwEHG6VuesbTKCkgQDrgopzJCKr/Gs8/0nRPtPh8G7DjLyI9/f/zDZic2W2LOmXb/VpW0jCikQkQnHN91kO1ojSlPM8LXN/hJwFOSR5EkathSBx82S6frdwjHOqaQXtmKHfNY2OpA8Jf3P0s61jFEy/CfOWR+xlFK5tqOpWlOQ8Jjlsq2M5Jqi4znpJX1JmnFbstlGhIAqwmLKXTErZnCidBgWYwQOPDpeg6o2jcEoV9Ihk9wGj5/HPghmc0Oba9PEYNaKDtoi1nhpkLJAMGFJKDePckoB0cCddCC4GkbHrQaKqmVBwTCRahxIwsr/TQY33GRX6OkvvcEKC5wMg6I3fJdJZCELRnnJL0C00JANRTmQoH25q8JXY9hhf2F51clffiwVzytcIY/Md7LzkSmpRuGjvzQRAtkLZD94Fj+o+nDN/iHBn2oPIIHW0eGbjihKQ50zpRD+0rja0RScaRsoWot+O4OsYTdx1z9dr1AEgVzH33QM6Y33JNDyzrsYA1zkQHn/bM0wXFpUEroaaKrrIq5UdYKylTWqhM7To6FwkEBSreQp5tOaHgLy1zYzoNvtg4WpW0SepTTgLqmZxpXpXUJ3oAWb1UwpcSmNsPzTEPxWExuY1b4ahQpb8jWuA5gS5hKY3WjtsprX45TXlvX5XQK6u01hRaXbn2ZyYRhyMc0K+uCtyRm0BggrSevzrubNU0njmm6J9fWLXS2dRsfXd07n97089m1kYGQTx5NZeI6F//PA4XwDJDgqQfqOCm7I/MZmO7mVhGaZc/0NhH3E7CXkZSMxa8cT+E2xf0oN5WMs2gcqEaH/QlHJKJpzMbwO3zBRekB1H2kVzgmMPKxHHQaQMNgNUlFd+nf5aB3clji+IqT71i+wj9Hf8WRdPp/wL03Nhb6KZqRjnieAAl9d8gRprtWrQo9SderxIBF3WFW9D2PLiK0uhRJePNty+mFxLAlOHLBkWfVZWlwrkolQtrlusnp9KF69yi2n3W9/owDi4R6W7S2Lba/N475C3v9zv4qKbl/u/8HV+tDhboLAAA=" Type="41"/>
                    <Discount Amount="142.92" CurrencyCode="USD" DecimalPlaces="2" Percent="68.055683493067" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>68.05568349306705</MinPerc>
                        <MaxPerc>68.05568349306705</MaxPerc>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="0">
                          <Calculation UnitCharge="0" UnitName="Day" Quantity="2" Total="0"/>
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
                        <Text>Será cobrada mais uma diária em função da quantidade de horas extras.</Text>
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
              </Info>
            </VehVendorAvail>
            <VehVendorAvail>
              <VehAvails RatePeriod="Daily" RateCategory="12">
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
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="103.04" Purpose="1">
                          <Calculation UnitCharge="51.52" UnitName="Day" Quantity="2" Total="103.04"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="016290" RateCategory="12"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="103.04" EstimatedTotalAmount="134.87936" CurrencyCode="USD" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="10.304" Purpose="6">
                        <Calculation Percentage="10" Total="10.304"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="USD" Amount="21.53536" Purpose="7"/>
                    </Fees>
                    <Reference ID="vwsAAB+LCAAAAAAABACNVkuO2zgQvYqhtdWgvpa8U9vuiZGkbXRrggBxFmybdohIooeSeow0fJoscpBcbIqiPtQvno0Bqx5fVb2qIutNC9l3kmwx31McaXPNMGaG67mm52pT7QNNM7xgyYHuMVuwmJSoL2/a+kCSjB7BcGB8AGJ6HkKOZ01vIE0V+onwFDP4MtUeAbA5Ep5hCGrzsHoKg8lzGDwug6clRLZgB3piIeb0KADIcE0fwfclSfcsydgW2MFtjqOPNKExcLrOnetY9gx5PvJ915rZg2h8GUUHGacvecbSKi6QQTBwkVBlhGDex5MP9JUT7TodBmw5y8jvX79/ssmBTRaYc6Zdv1ZJLSIKsRBRC8d3HWQ7WmPK04zw1QV+EmBK8iiSUg1baufDZkm6egV3rGMK6Zkt2T6Pha12BH95/7OUYxWDtwz/k0PkRxylZKptWZrmNCQ8ZqksPCOpNs94TlpRr5OW73bD3IYEoGrCYgoVcWulcCK6sExGtDjoqRumM/NNw0ZC0o8kwwc4D4a3Hd8lk8muzXsfMciGsp02nxREFUq6CE4kgQ5+IhnlQCRQOy0I7jfhTquhUlx5QCBchBoamVrJ02B8x0V+jZI9/kRA5AIn/UDDW76rOJKwBeOcpGfQWrRQDYXZUKC9GWxc16NYYf/i+VkJHz58VpiWOMPvGO9FZyLT0g1DR35oojmy5si+cyx/ZvrwDf6hQQ5VR2CwdWTohhOa4kDnTDm3zzQ+RyQVR8oSqtZC794cS9x1jOvv8wmiKKR764MeML3gXj+0rMMEKxiNDETvn6UJjkuDkkOvKbqtVUk3KluhmSpbdWLLyb5ocWgBpVzI000nNLy5Zc5t5843WweL1NYJ3ctxQF3TA42r1LoCr6EZL5UzJcUmN8PzTENhLIa3MSt6NS0pL8nWvA5gS5gqY3WpttJr34+3WFs35u0Q1AvsFlrcu/V9JgOGKR/rWZkXPCcxg8KAaL326jy+WVN04pime3Bt3UJHW7fx3tW94+FFPx5dGxkI+WRmKiPXufv/7CiEl4AE9z1Qh6SsjoxnYLyba0X0LHuglxt+34F6GUnJmP+K+BZuXVyQcl3JOIvGgap3WKJwRCKaxmwMv8UnXKQeQN57eoZjAiPfy0HSAAoG60kqqkt/lIPeiWGB4zNOvmH5EP8Z/QlHkvT/gHvPbCz6pyhGOsJ8AyT6uyOOMF21alvotXS9TQxY1DVmSV/z6CRcq3uRhDffNpyeSCz2O7njyLPqvjQ4V2UnQtjlzsnp7UP1+lEsQKt6AxoHFgH1VmltUyyALxzzR/b8jf1bSnL9ev0PI4bK7r8LAAA=" Type="41"/>
                    <Discount Amount="98.48" CurrencyCode="USD" DecimalPlaces="2" Percent="65.6534708909964" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>65.653470890996374</MinPerc>
                        <MaxPerc>65.653470890996374</MaxPerc>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="0">
                          <Calculation UnitCharge="0" UnitName="Day" Quantity="2" Total="0"/>
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
                        <Text>Será cobrada mais uma diária em função da quantidade de horas extras.</Text>
                      </Paragraph>
                    </SubSection>
                  </VendorMessage>
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
              <VehAvails RatePeriod="Daily" RateCategory="12">
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
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="69.76" Purpose="1">
                          <Calculation UnitCharge="34.88" UnitName="Day" Quantity="2" Total="69.76"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="016290" RateCategory="12"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="69.76" EstimatedTotalAmount="91.31584" CurrencyCode="USD" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="6.976" Purpose="6">
                        <Calculation Percentage="10" Total="6.976"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="USD" Amount="14.57984" Purpose="7"/>
                    </Fees>
                    <Reference ID="vgsAAB+LCAAAAAAABACNVtuS2jgQ/RXKz3hKvmLz5gFmh9pkoGa8eQl50IAgqrUtVrYnVKb4mjzkQ/Jj27J8kW8hL1ThPn26+6hb6nctZP+SZIv5nuJIm2sm8pBpW57nalPtA00zvGDJge4xW7CYlKjP79r6QJKMHsFwYHwAYnoeQo5nT28gTRX6ifAUM/gy1Z4AsDkSnmFIavOweg6DyUsYPC2D5yVktmAHemIh5vQoAMhwTR/B9yVJ9yzJ2BbYIWyOo480oTFwzpw75Fm2ZRmm5XjezLIG0fgyig4yTl/zjKVVXiCDYOCioMoIyfwdTz7QN06063QYsOUsI79+/vrBJgc2WWDOmXb9UhW1iCjkQgBnOL7rINvRGlOeZoSvLvCTAFOSR5GUathSBx82S9LVG4RjHVNIz2zJ9nksbHUg+Mv7n6UcqxiiZfi/HDI/4iglU23L0jSnIeExS+XBM5Jq84znpJX1OmnFbjfMbUgAqiYspnAibq0UTkQXlsWIFgc9dROZrjNDxswCST+SDB/AHwzvO75LJpNdm/c+YlANZTttPimIKpQMEZxIAh38TDLKgUigdloQ3G/CnVZDpbjSQSBchBoaWVrJ02B8x0V+jZI9/kxA5AIn40DDW76rBJKwBeOcpGfQWrRQDYXZUKC9GWxC16NYYf/i+VlJf6c9KkRLnOFHxnvJgcyWbhg68kMTzZE1R/adY/kz04dv8A8NcqgyAoOtI0M3nNAUDh2fcmxfaHyOSCpcyhNUreJzf4wl7jrG9c/5BFkUyr33QQ+YXnCvHVrWYYIVTEYGmvd9aYLj0qDU0OuJbmdV0o3KVmimylZ5bDnZFx0OHaAcF/J00wkNb26Zc9u5882WY1HaOqF7OQ2oa3qgcVVaV+A19OKlCqaU2NRmeJ5pKIzF7DZmRa+mI+Ud2RrXAWwJU2Ws7tRWee3r8RZr68K8nYJ6f91Ci2u3vs5kwjDkYz0r64LXJGZwMCBar706b2/WHDpxTNM9uLZuoaOt23jv6t7x8Kofj66NDIR8MjOVketc/b8PFMJDQIL7HqhDUp6OzGdgvJtrRfQse6CXG3EfQb2MpGQsfkV8C7cu7ke5rWScReNANTrsUDgiEU1jNobf4hMuSg+g7j09g5vAyOdykDSAA4PtJBWnS7+Xg97JYYHjM06+YvkO/x79CUeS9E/AvVc2Fv1THEY6wnwDJPq7I44wXbVqWei1dL1MDFjULWZJ3/LoJEKra5GEN982nJ5IDHuCI1cc6auuS4NzVXYipF2unJzedqq3j2L/WdUL0DiwSKi3SWubYv975Zg/sZev7FspyfXL9X+f82iPvgsAAA==" Type="41"/>
                    <Discount Amount="105.12" CurrencyCode="USD" DecimalPlaces="2" Percent="75.0834331235887" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>75.083433123588733</MinPerc>
                        <MaxPerc>75.083433123588733</MaxPerc>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="0">
                          <Calculation UnitCharge="0" UnitName="Day" Quantity="2" Total="0"/>
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
                        <Text>Será cobrada mais uma diária em função da quantidade de horas extras.</Text>
                      </Paragraph>
                    </SubSection>
                  </VendorMessage>
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
              <VehAvails RatePeriod="Daily" RateCategory="12">
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
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="88.54" Purpose="1">
                          <Calculation UnitCharge="44.27" UnitName="Day" Quantity="2" Total="88.54"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="016290" RateCategory="12"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="88.54" EstimatedTotalAmount="115.89886" CurrencyCode="USD" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="8.854" Purpose="6">
                        <Calculation Percentage="10" Total="8.854"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="USD" Amount="18.50486" Purpose="7"/>
                    </Fees>
                    <Reference ID="vAsAAB+LCAAAAAAABACNVkty4zYQvYqKa9EFfk1qR0tyRhWPpbKZ2YxmAUuQBhWSUEDSUcWl02SRg8zF0iD4AX/DWdhVQj+87n7dDfaHFrI/SbLD/EBxpC00Azme5yDLdbW59kTTDC9ZcqQHzJYsJiXq64e2OZIkoycwHBkfgJieh4DKmU8gTRX6hfAUMziZa88A2J4IzzAEtX1cv4TB7DUMnlfBywoiW7IjPbMQc3oSAGS4po/gfEXSA0sytgN2cJvj6DNNaAyc9+jO9izbMRz4sxzT8gfR+DqKDjJO3/KMpVVcIINg4CKhygjB/B7Pnug7J9ptPgzYcZaRH//9+JfNjmy2xJwz7fatSmoZUYiFiFo4vusg29EaU55mhK+v8C8BpiSPIinVsKV2PmyWpOt3cMc6ppBe2Iod8ljYakfwk/ePpRzrGLxl+K8cIj/hKCVzbcfSNKch4TFLZeEZSbVFxnPSinqTtHy3G2YaEoCqCYspVMStlcKJ6MIyGdHioKduI8syTNcAQT+TDB/hNhx/7Pk+mc32bdaHiEEulO21xaygqVDSQXAmCfTvC8koByKB2mtB8LAN91oNldLKCwLhItTQyMRKngbjOy7ya5Ts8BcCEhc46Qfa3fJdxZGELRnnJL2A0qKBaihMhgLtTWDjuh7ECvsbzy9K+HvtSSFa4Qx/YrwXnIlMSzcMHfmhiRbIWiD7zrH8e9OHM/iFBjlUGYHB1pGhG05oigudO+XQvtL4EpFUXCkrqFrFcX+IJe42xvXH5QxRFMp99EGPmF5xrx1a1mGCNcxFBpr379IEx6VByaHXE93OqqQbla3QTJWturHj5FB0OHSAUi7k6aYTGt7CMhe2c+ebrYtFapuEHuQ0oK7pkcZVal2BN9CL18qZkmKTm+F5pqEwFpPbmBW9mo6UL2RrXAewJUyVsXpRW+m1H8cp1tZzOR2C+npNocWjWz9mMmAY8rGelXnBtyRmUBgQrddenS9v1hSdOKbpHl1bt9DJ1m18cHXvdHzTTyfXRgZCPrk3lZHrPPw/dxTCZ4AEDz1Qh6SsjoxnYLybZ0X0LHuk1wm/n0C9jKRkzH9FPIXbFO+j3FUyzqJxoOodNigckYimMRvD7/AZF6kHkPeBXuCawMiP5SBpAAWD3SQV1aX/lIPeiWGJ4wtOvmP5Ff45+guOJOmvgHvf2Fj0T1GMdIR5AiT6uyOOMN20alXotXS9SgxY1B1mRd/z6Cxcq0uRhDdnW07PJIYtwZELjryrLkuDc1V2IoRdLpycTl+qd49i+1nX6884sAiot0dr22L7e+OYP7PX7+zvUpLbt9v/UGWwLbwLAAA=" Type="41"/>
                    <Discount Amount="105.73" CurrencyCode="USD" DecimalPlaces="2" Percent="70.4834515451352" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>70.483451545135239</MinPerc>
                        <MaxPerc>70.483451545135239</MaxPerc>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="0">
                          <Calculation UnitCharge="0" UnitName="Day" Quantity="2" Total="0"/>
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
                        <Text>Será cobrada mais uma diária em função da quantidade de horas extras.</Text>
                      </Paragraph>
                    </SubSection>
                  </VendorMessage>
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
              <VehAvails RatePeriod="Daily" RateCategory="12">
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
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="118.06" Purpose="1">
                          <Calculation UnitCharge="59.03" UnitName="Day" Quantity="2" Total="118.06"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="016290" RateCategory="12"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="118.06" EstimatedTotalAmount="154.54054" CurrencyCode="USD" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="11.806" Purpose="6">
                        <Calculation Percentage="10" Total="11.806"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="USD" Amount="24.67454" Purpose="7"/>
                    </Fees>
                    <Reference ID="uAsAAB+LCAAAAAAABACNVsuS2jgU/RVKa9wlP8Hs3EBPqOk0VLcnm5CFGgRRjW0xst2h0sXXZJEPyY/NleWH/CBkQxW+576OzpXuOwr5vzTZELFjJEIzZNiu47m2iT00Ro8szcicJ3u2I3zOY1qiPr+j1Z4mGTuAYc/FAMS1Pd+bWOb4BtLSoZ+oSAlHM2uMngCwPlCREShq/bB8DoPRSxg8LYLnBVQ253t25CER7CAB2PQsH8P3BU13PMn4BqJD2pxEH1nCYog5wXfO1HZc03Uc3/W9QSw5X8EGmWCvecbTqiagQPoL2UxlhEL+jkeP7E1QdBkPAzaCZ/TXz18/+GjPR3MiBEeXL1VD84hBJRRwJqR1seOixpSnGRXLM/wkECnJo0jRNGypkw+bVdDlG6TjHVPITnzBd3ksbXUi+Cv6nxUdyxiyZeS/HCo/kCilY7ThaZqzkIqYp+rQOU3RLBM5bVW9Slq522K5DQmA1YTHDE7Eq5kiiVRg2YyUt9S169sTZwKkAqMfaUb24A7f37dim4xG23bY+4hDM4xv0WxUxKlQKkNwpAmI95lmTEAgidqiILhfh1tUQxW3ykEiPIybMKqzMk6D8V0P+zVKyfuZAscFTuUBrdu+pyVSsDkXgqYnoFoqqIbCWGjQ3vg1qesprLB/ifyklb9Fj0st0oJk5AMXveosbNmGaRrYDy08w/YMO3eu7U8sH77BPzwYQ+cRIjgGNg3TDS3p0PEph/aFxaeIptKlPELdKj93h1ihLtci/XM6Qg0Fce990ANhZ9JTQ8s6HGAJc5EB5X1flpC4NGgd9CTRFVZF3FXSCsZ00iqPjaC7QuAgAO2w8NSw3NCczmxr5rh3vtVyLFpbJWynhgF3TQ8srlrrErwCKZ6rZFqLTW/mdFoLrrDIyW3MGl+NINUN2ZrWAWwJ02msbtRWe+3L8VbU1nV5uwT99rqFlpdufZmpgmHGr2lW9QVvSczhYIC0nrw6r27WHDp1Lcvbe45h44NjOGTnGdPD/tU4HDwHmxj7dGJpA9e5+H+fKIRngAb3PVAnSHk6qp6B4W4uFalZ/sDON/J+APYymtJr+avAt3Cr4npUe0omeHQdqGeH7YlENGJpzK/hN+RIitYD6HvHTuAmMeqxHAwawIHBZpLK02Xfy0Hv1DAn8YkkX4l6hX+P/kQiFfRPwL03Npb6KQ4jvRL5Bkjqu0OONF1QtSr0JF2vEgMWfYdZsLc8OsrU+lKk4M23tWBHGsOW4KoFR/nqy9LgXJVKhLLLZVOw20717lFsP8t6/bkOLArq7dBoXWx/r4KIJ/7ylX8rKbl8ufwPWgQeV7gLAAA=" Type="41"/>
                    <Discount Amount="140.97" CurrencyCode="USD" DecimalPlaces="2" Percent="70.4834515449596" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>70.4834515449596</MinPerc>
                        <MaxPerc>70.4834515449596</MaxPerc>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="0">
                          <Calculation UnitCharge="0" UnitName="Day" Quantity="2" Total="0"/>
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
                        <Text>Será cobrada mais uma diária em função da quantidade de horas extras.</Text>
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
              </Info>
            </VehVendorAvail>
            <VehVendorAvail>
              <VehAvails RatePeriod="Daily" RateCategory="12">
                <VehAvail>
                  <VehAvailCore IsAlternateInd="false" Status="Available">
                    <Vehicle FuelType="Electric" DriveType="Unspecified" AirConditionInd="true" TransmissionType="Automatic" Description="ELÉTRICO AUTOMÁTICO" OdometerUnitOfMeasure="Km" VendorCarType="HDAE" BaggageQuantity="1" PassengerQuantity="5" CodeContext="internal code" Code="LY">
                      <VehType VehicleCategory="1" DoorCount="4"/>
                      <VehClass Size="34"/>
                      <VehMakeModel Name="E-star eléctrico automático"/>
                      <PictureURL>https://www.localiza.com/colombia-site/geral/Frota/ESTR.png</PictureURL>
                    </Vehicle>
                    <RentalRate>
                      <RateDistance Unlimited="true" DistUnitName="Km" VehiclePeriodUnitName="Day"/>
                      <VehicleCharges>
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="65.48" Purpose="1">
                          <Calculation UnitCharge="32.74" UnitName="Day" Quantity="2" Total="65.48"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="016290" RateCategory="12"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="65.48" EstimatedTotalAmount="85.71332" CurrencyCode="USD" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="6.548" Purpose="6">
                        <Calculation Percentage="10" Total="6.548"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="USD" Amount="13.68532" Purpose="7"/>
                    </Fees>
                    <Reference ID="vQsAAB+LCAAAAAAABACNVttu2zgQ/RVDz1ZAXS35TbGdrbFpbCTaAot1HxibdomVRJeSUqOBv6YP/ZD+2A5FXahbvS8GzDlzZuZwhpp3LWT/kmSL+Z7iSJtrrmN5rmnNXG2qPdI0wwuWHOgeswWLSQn6511bH0iS0SMYDowPQEzPQ8jx3OkNpKlCPxGeYgYnU+0JAJsj4RmGnDYPq+cwmLyEwdMyeF5CZgt2oCcWYk6PAoAM1/QRnC9JumdJxrbADmFzHH2kCY2Bc+bdGTPHtU3ftSzHMm1jEI0vo+gg4/Q1z1ha5QUyCAYuCqqMkMyf8eSRvnGiXafDgC1nGfn189cPNjmwyQJzzrTr56qoRUQhFwI4w/FdB9mO1pjyNCN8dYGfBJiSPIqkVMOWOviwWZKu3iAc65hCemZLts9jYasDwV/eP5ZyrGKIluGvOWR+xFFKptqWpWlOQ8JjlsqLZyTV5hnPSSvrddKK3W6Y25AAVE1YTOFG3FopnIguLIsRHQ56msicOYbvWz4o+pFk+ADucP6+47tkMtm1ae8jBsVQttPmk4KnQskIwYkk0MDPJKMciARqpwXB/SbcaTVUaisdBMJFqKGRlZU8DcZ3XOTXKNnizwQ0LnAyDvS75btKIAlbMM5JegapRQfVUBgNBdobwSZ0PYkV9g+en5X0d9rj3wrTEmf4A+O97EBnSzcMHfmhiebImiP7zrH8menDGfxDgxyqjsBg68jQDSc0hUPHpxzbFxqfI5IKl/IKVas47o+xxF3HuP46nyCLQrr3PugB0wvu9UPLOkywgsnIQPS+L01wXBqUGnpN0W2tSrpR2QrNVNkqjy0n+6LFoQWU60Kebjqh4c0tc247d77ZcixKWyd0L8cBdU0PNK5K6wq8hma8VMGUEpvaDM8zDYWxmN3GrOjVtKR8I1vzOoAtYaqM1ZvaKq/9PN5ibT2Yt1NQ369baPHs1s+ZTBimfKxnZV3wNYkZXAyI1muvzrc3ay6dOKbpHlxbt9DR1m28d3XveHjVj0fXRgZCPpmZysh1nv7fBwrhQ0CC+x6oQ1LejsxnYLybZ0X0LHuglxtxP4B6GUnJWPyK+BZuXTyQclvJOIvGgWp0WKFwRCKaxmwMv8UnXJQeQN17egY3gZGfy0HSAC4MtpNU3C79Xg56J4cFjs84+YLld/j36E84kqT/B9z7ysaif4rLSEeYb4BEf3fEEaarVi0LvZaul4kBi7rFLOlbHp1EaHUtkvDmbMPpicSwJzhyxZG+6ro0OFdlJ0La5crJ6W2nevso9p9VvQCNA4uEepu0tin2v1eO+RN7+cK+lZJcP1//A+vrtTO9CwAA" Type="41"/>
                    <Discount Amount="117.26" CurrencyCode="USD" DecimalPlaces="2" Percent="78.1756429633532" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>78.175642963353241</MinPerc>
                        <MaxPerc>78.175642963353241</MaxPerc>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="0">
                          <Calculation UnitCharge="0" UnitName="Day" Quantity="2" Total="0"/>
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
                        <Text>Será cobrada mais uma diária em função da quantidade de horas extras.</Text>
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
              </Info>
            </VehVendorAvail>
            <VehVendorAvail>
              <VehAvails RatePeriod="Daily" RateCategory="12">
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
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="123.44" Purpose="1">
                          <Calculation UnitCharge="61.72" UnitName="Day" Quantity="2" Total="123.44"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="016290" RateCategory="12"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="123.44" EstimatedTotalAmount="161.58296" CurrencyCode="USD" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="12.344" Purpose="6">
                        <Calculation Percentage="10" Total="12.344"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="USD" Amount="25.79896" Purpose="7"/>
                    </Fees>
                    <Reference ID="uwsAAB+LCAAAAAAABACNVsuS4jYU/RVKa9wlG9vY7NxAZ6jMNFS3M5swCzUIRhXbIrLdodLF12SRD5kfy5Xlh/wasqEK33NfR+dK9wOF/A+a7Ig4MBKhBbJNx8GuN8Noij6zNCNLnhzZgfAlj2kJ+v0DbY40ydgJDEcuBiCW52HsePPpHaSlQ79SkRIOX6boGQDbExUZgZq2T+uXMJi8hsHzKnhZQWVLfmRnHhLBThKATdfyZcUrmh54kvEdRIe0OYm+sITFENP1H0zbnPvYcmzfnNvufBBNrqPoIBPsLc94WtUFNMgIQjZUGaGYX+PJZ/YuKLpNhwE7wTP6498f//DJkU+WRAiObt+qppYRg1oo4EzHdx1sO6gx5WlGxfoKPwlESvIoUlQNW+rkw2YVdP0O6XjHFLILX/FDHktbnQj+iv5nRcc6hmwZ+TOHyk8kSukU7Xia5iykIuapOnhOU7TIRE5bVW+SVu62YO5DAmA14TGDE3FrpkgiVVg2IxUupe35pjk3rRkQ+oVm5Aje8PljL/bJZLJvR32MOPTC+B4tJkWYCqUSBGeagH5faMYEBJKoPQqCx224RzVUUascJMLFuAmjGivjNBjfcbFfo5TCXyhQXOBUHpD7zHe1RAq25ELQ9AJMSwHVUJgMDdqbwCZ1PYgV9heRX7Ty92inBVqRjHziolecha2ZYZoG9kMLL/Bsge0HZ+bPLR++wT88GEOnESLYBjYN0wkt6dDxKYf2lcWXiKbSpTxB3VrQ3RtihbuNxfrtcoYqCuY++qAnwq6kJ4eWdTjAGuYiA877viwhcWnQeuhpoqusirpR2grOdNoqj52gh0LhoADtuLBnWE5oeouZtbCdB99qORatbRJ2UNOAu6YnFletdQnegBavVTKtxaY30/MsU4tYTG5j1vhqFKluyNa4DmBLmE5jdaO22mtfjveitq7L+yXot9c9tLx068tMFQxDPqZZ1Re8JTGHgwHSevLqvLxZc+jUsSz36NrGDJ9swyYH1/BOxzfjdHJtbGLs07mljVzn4v95ohCeARo89kCdIOXpqHoGxru5VqRm+RO73sn7CdjLaErH8leB7+E2xf2odpVM8GgcqGeHBYpENGJpzMfwO3ImResB9H1gF3CTGPVYDgYN4MBgN0nl6bK/y0Hv1LAk8YUk34l6hX+O/koiFfT/gHtvbCz1UxxGOhL5Dkjqu0OONN1QtSr0JF2vEgMWfYdZsfc8OsvU+lKk4M23rWBnGsOW4KgFR/nqy9LgXJVKhLLLhVOw+0717lFsP+t6/RkHFgX19mi0Lba/N0HEM3/9zv8qKbl9u/0HGnbhWrsLAAA=" Type="41"/>
                    <Discount Amount="138.28" CurrencyCode="USD" DecimalPlaces="2" Percent="69.1417902549175" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>69.141790254917467</MinPerc>
                        <MaxPerc>69.141790254917467</MaxPerc>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="0">
                          <Calculation UnitCharge="0" UnitName="Day" Quantity="2" Total="0"/>
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
                        <Text>Será cobrada mais uma diária em função da quantidade de horas extras.</Text>
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
              </Info>
            </VehVendorAvail>
            <VehVendorAvail>
              <VehAvails RatePeriod="Daily" RateCategory="12">
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
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="95.52" Purpose="1">
                          <Calculation UnitCharge="47.76" UnitName="Day" Quantity="2" Total="95.52"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="016290" RateCategory="12"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="95.52" EstimatedTotalAmount="125.03568" CurrencyCode="USD" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="9.552" Purpose="6">
                        <Calculation Percentage="10" Total="9.552"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="USD" Amount="19.96368" Purpose="7"/>
                    </Fees>
                    <Reference ID="uwsAAB+LCAAAAAAABACNVs2S2jgQfhVKZ5iSBTaYmweYDbXJQM145xJy0IAgqrUtVrYnVKZ4mhzyIHmxbVn+kf9CLlTh/vrr7k/dUr8jX/zLoi2Ve04DNEcTjAlxiDNDQ/SRxwldiOjA91QsRMhy0Od3tD6wKOFHMByE7IBMsIUtgq3hDSQxoS9MxlSgORmiRwBsjkwmFHLaPKyefG/w7HuPS+9pCZktxIGfhE8lPyoAthziYvi+ZPFeRInYAjuETWnwiUc8BE5ndmfZUxfbY+xMbduxSSeaXnrRXiL5a5qIuMgLZFAMUhVUGCGZv8PBR/4mGboOuwFbKRL26+evH2JwEIMFlVKg65eiqEXAIRcGOMt2HRtPbFSZ0jhhcnWBnwiYojQItFTdljJ4t1mTrt4gnGiYfH4WS7FPQ2UrA8Ff2f6s5ViFEC2h/6WQ+ZEGMRuirYjjlPtMhiLWBy9YjOaJTFkt63VUi11vmNsQD1SNRMjhRJxSKRqpLsyLUR0OejoEYzybTi0Q9BNL6AG84fP7Tu6iwWBXZ70PBNTCxQ7NBxlNgdIBvBOLoH+fWMIlECnUDnne/cbfoRKqpdUOCuFgXNHownKeCuPaDnZLlO7wJwYSZzgdB9p97DpGIA1bCClZfAalVQOVUJgMA9qawCp0OYgF9i+Zno30d+jFIFrShH4QspUcwWQ8sqwRdn2C53g8x5M7e+xOiQvf4B/u5DBlBIbJCFsjy/aJcmj45EP7zMNzwGLlkp+gac3kbg2xxl37uP45nyCLTLn3NuiB8gtttUPN2k2wgrlIQPO2L49omBuMGlo90eysQrpe2TLNTNkKj61k+6zDoQOM48KzEbF9azYfk/nEvnNJzTErbR3xvZ4G3DQ98LAorSnwGnrxUgQzSqxqs2YzYhmM2eRWZkOvqiP1DVkb1w5sDjNlLG7UWnn1y/EWa+26vJ2CeXvdQqtLt7zMdMIw5H09q+uCtyQUcDAgWqu9Gi9vUh06s+GNPziT0RgfJ6MJ3Tuj2fHwOjoeHXUJYJdNiTFyjYv/94F8eAaYd98CNUjy09H5dIx3da2onhUP/HIj7gdQL2Ex64tfEN/CrbP7Ue8qiRRBP9CMDgsUDVjA41D04bf0RLPSPah7z8/gpjD6sewk9eDAYDeJ1eny7/mgN3JY0PBMo69Uv8K/R7/QQJP+Cbj1xoaqf7LDiHuYb4BUfzfEUaYrKlaFVkuXq0SHxdxhlvwtDU4qtLkUaXj1bSP5iYWwJdh6wdG+5rLUOVd5J0La+cIp+W2ncvfItp9Vuf70A7OEWns02mTb36uk8lE8fxXfckmuX67/A6lmVS+7CwAA" Type="41"/>
                    <Discount Amount="102.24" CurrencyCode="USD" DecimalPlaces="2" Percent="68.1579053067556" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>68.157905306755652</MinPerc>
                        <MaxPerc>68.157905306755652</MaxPerc>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="0">
                          <Calculation UnitCharge="0" UnitName="Day" Quantity="2" Total="0"/>
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
                        <Text>Será cobrada mais uma diária em função da quantidade de horas extras.</Text>
                      </Paragraph>
                    </SubSection>
                  </VendorMessage>
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
              <VehAvails RatePeriod="Daily" RateCategory="12">
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
                        <VehicleCharge IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Diárias" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="99.82" Purpose="1">
                          <Calculation UnitCharge="49.91" UnitName="Day" Quantity="2" Total="99.82"/>
                        </VehicleCharge>
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="016290" RateCategory="12"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="99.82" EstimatedTotalAmount="130.66438" CurrencyCode="USD" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="9.982" Purpose="6">
                        <Calculation Percentage="10" Total="9.982"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="USD" Amount="20.86238" Purpose="7"/>
                    </Fees>
                    <Reference ID="vgsAAB+LCAAAAAAABACNVsuS2jgU/RVKa+iSn9js3EBPqEkaqtvTm5CFGgRRjW0xst2h0sXXZJEPyY/NleWH/CBkQxW+577Ofei+o5D/S5MNETtGIjRDhu35U8fyTQ+N0UeWZmTOkz3bET7nMS1Rn9/Rak+TjB1AsOdiAOJYru9YljW+gTR16AsVKeFoZo7RIwDWByoyAkGtH5ZPYTB6DoPHRfC0gMjmfM+OPCSCHSQAG67pY/i+oOmOJxnfgHVwm5PoE0tYDDan1t3UMlzPNhzDswzD8AbR5HwVHWSCveYZT6u4gAZpQciEKiEE83c8+sjeBEWX8TBgI3hGf/389YOP9nw0J0JwdPlSJTWPGMRCZS0c33Ww7aBGlKcZFcsz/CRgKcmjSFE1LKmdD4uV0eUbuOMdUchOfMF3eSxltSP4K/qfFR3LGLxl5L8cIj+QKKVjtOFpmrOQipinqvCcpmiWiZy2ol4lLd/thrkNCYDVhMcMKuLWTJFEdmGZjGxx4NPEhu1AUd0pMPqJZmQP6vD9fSu2yWi0bZu9jzgkw/gWzUaFnQqlPARHmkADP9GMCTAkUVsUBPfrcItqqOJWKUiEi3FjRmVW2mkwvuNiv0apFn+iwHGBU36g3y3f1Rwp2JwLQdMTUC07qIbCaGjQ3gg2rutJrLB/ifykhb9FLxvN0oJk5AMXvehMbFoTw5hgPzTxDFszbN/BSpmaPnyDf3jQhs4jWLAn2JgYTmhKhY5OObbPLD5FNJUqZQl1qfzcH2OFu1yz9c/pCFEU1L33QQ+EnUmvH1rSYQNLmIwMSO/rsoTEpUDLodcU3daqqLtKW8GZTlulsRF0V7Q4tIBWLuxNTCc0vJllzmznzjdbikVqq4Tt1DjgruiBxVVqXYJX0IznypmWYpOb4XmmoVksZrcRa3w1Lal2ZGteB7AlTKex2qmt9Nrr8ZbV1sK8HYK+v26h5dqt15kKGKb8Ws+qvOA1iTkUBkjrtVfn7c2aolPHNN29a08sfLAnNtm5E++wf50cDq6NDYx9OjW1keus/t87CuEhoMF9D9QxUlZHxTMw3s1akT3LH9j5ht8PwF5GU3rNf2X4Fm5VLEh1rWSCR9eBune4oUhEI5bG/Bp+Q46kSD2AvHfsBGoSo57LQaMBFAyuk1RWl30vB70Tw5zEJ5J8Jeod/j36hUTK6J+Ae69sLPunKEZ6xfINkOzvDjlSdEHVsdBr6fqYGJDoV8yCveXRUbrWzyIFb76tBTvSGO4ER504Slc/lwbnquxECLs8OQW7rVRfH8X9s6wPoOvAIqDeJY3Wxf33Koh45M9f+beSksuXy/+dgXVhvgsAAA==" Type="41"/>
                    <Discount Amount="140.09" CurrencyCode="USD" DecimalPlaces="2" Percent="73.7316841518311" Description="Diárias"/>
                    <TPA_Extensions>
                      <OfferInfo xmlns="">
                        <MinPerc>73.731684151831118</MinPerc>
                        <MaxPerc>73.731684151831118</MaxPerc>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="USD" TaxInclusive="false" Amount="0">
                          <Calculation UnitCharge="0" UnitName="Day" Quantity="2" Total="0"/>
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
                        <Text>Será cobrada mais uma diária em função da quantidade de horas extras.</Text>
                      </Paragraph>
                    </SubSection>
                  </VendorMessage>
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
