<?xml version="1.0" encoding="UTF-8"?>
<s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/">
  <s:Body xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
    <OTA_VehAvailRateResponse xmlns="http://tempuri.org/">
      <OTA_VehAvailRateRS TimeStamp="0001-01-01T00:00:00" Target="Test" Version="0" TransactionStatusCode="Start" RetransmissionIndicator="false">
        <Success/>
        <VehAvailRSCore>
          <VehRentalCore xmlns="http://www.opentravel.org/OTA/2003/05" OneWayIndicator="true" ReturnDateTime="2023-12-02T08:00:00" PickUpDateTime="2023-12-01T08:00:00">
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
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="204002.29" EstimatedTotalAmount="304999.99761" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="23300.229" Purpose="6">
                        <Calculation Percentage="10" Total="23300.229"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="48697.47861" Purpose="7"/>
                    </Fees>
                    <Reference ID="qQsAAB+LCAAAAAAABACNVsmO20YQ/RWBZ2nQFBeRunG0xELskTDDGDAsH3rIltwIyVaa5ETwQF+TQz7EP5ZqNpfmIjMXAWK92l9V17vmsz9JcsA8oDjSltpMNy1LtyzDsLSp9pGmGV6xJKQBZisWkxL29V3bhSTJ6AkEIeMDkLnjIGS5aDqCnKvQz4SnmMGXqfYEgP2J8AxDVPvt5tn3Ji++97T2ntcQ2YqF9Mx8zOlJAJDu6LoN39ckDViSsQNYB7c5jj7RhMZg09AfXNedGzayB2H42od5GaevecbSKhJIXKhykUIlBPe/x5OP9I0T7TYdBhw4y8jPf3/+wyYhm6ww50y7favSWEUUgiAij4VhmO58oTWiPM0I31zhJwFLSR5FsjjDktr5sFga3byBO9YR+fTC1izIYyGrHcFf3v8sy7GJwVuG/8oh8hOOUjLVDixNc+oTHrNUtpqRVFtmPCetqHdJy3ebIuMQD6qasJhCR+y6UjgRvCuTEayGetpzxwUyO4Ian0iGQ9CGz+9Hfkwmk2Pb6mPEIBfKjtpyUpipUNKBdyYJMPaZZJSDIYE6ap73uPePWg2VpZUKAmEj1JiRiZV2Goxr2citUZLTzwRKXOCkH6TbhmsrjiRsxTgn6QUqLQhUQcUsKNDezDWu69GrsL/x/KKEf9S2XxRLa5zhD4z3opujuTHT9dnc9XUX5nlpGg+u6SwsfTFDxhKhQRtqHaWF+QzpPnJAoaNTjusLjS8RSYVK2UJVKj4r4ysBt3tG/ricwX1Rs/c+aIvpFfeI0JIOG9jARGRQ7b4uTXBcCpTge2zocqqq2f16oU69Ko0DJ0HBbeh9v0+LpWkvkfOAFi3FIrVdQgM5B6gr2tK4Sq1b4B2w8Fo5U1JU6IZsw1YsFjPbiJV6NVyUu7E1qAPYEqaWsdqlrfTaa3HMamtRjoeg7q0xtFi39RqTAcPM3uOszAtekZhBY6BoPXp1XtmsaTrBrhmQV2N2clA4M2EjztwTwjMjtBdED03r1QyUWeus/F878uEBIN5jD9QxUnZHxjMw180+EZxlW3od8fsBqpeRlNzzXxkew+2KzSjvkoyz6D5Q9Q7nEo5IRNOY3cMf8BkXqXuQd0AvoCYw8pkcNOpBw+AcSUV36Y9y0DsxrHB8wcl3LN/fX6M/40ga/T/g3usaC/4UzUjvWB4BCX53iiNEN606EnqUro+IAYl6vazpWx6dhWv1HJLw5tue0zOJ4T6w5GkjddUzaXCuSiZC2OVxyem4Un11FHfPpj587gOLgHo3s7Yv7r5XjvkTe/nO/i5Lcvt2+w+2iUC/qQsAAA==" Type="41"/>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="29000">
                          <Calculation UnitCharge="29000" UnitName="Day" Quantity="1" Total="29000"/>
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
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="194834.99" EstimatedTotalAmount="293000.00191" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="22383.499" Purpose="6">
                        <Calculation Percentage="10" Total="22383.499"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="46781.51291" Purpose="7"/>
                    </Fees>
                    <Reference ID="vwsAAB+LCAAAAAAABACNVsmO2zgQ/RVDZ6tB7ZJvai8TY5K20a0JAsQ5sG3aIUYSPZTUY6Thr5nDfEh+bIqiFmpxPH0w0KpXrxa+Iutdi9ifJN1ivqc41maa7ni+Y5uW52hT7SPNcjxn6YHuMZuzhFSor+/a+kDSnB7BcGB8BGL6PkKOb0zvIE0V+pnwDDP4MtWeALA5Ep5jSGqzWj5H4eQlCp8W4fMCMpuzAz2xCHN6FABk+IbhwvcFyfYszdkW2CFsgeNPNKUJcFrOA3IchCzfCMo/dxSNLzfRYc7pa5GzrM4L2iAYuCioNkIyvyeTj/SNE+06HQdsOcvJz39//sMmBzaZY86Zdv1WFzWPKeRCRFWeZdmB6WmtqchywpcX+EmBKS3iWLZq3NIEHzdL0uUbhGM9U0TPbMH2RSJsTSD4lw8/y3YsE4iW478KyPyI44xMtS3LsoJGhCcskwfPSKbNcl6QTtbrtBO7K5j7kBC6mrKEwom4TadwKlRYFSMkLrRtWLZnWI5v29DSTyTHB/AHw/uO79LJZNflfYwZVEPZTptNSqIaJUOEJ5KCgp9JTjkQCdROC8PHTbTTGqhsrnQQCBehlkaWVvG0mMBxUdCgpMafCTS5xMk4yHCtwFUCSdiccU6yM/RaSKiGitlQoIMZbEM3o1hjf+PFWUl/p62+KEwLnOMPjA+yM5Fp6Yahm0FkBDDfM9t6CGzfcwxPR9YMoVEOtY+SwdSRESEfHHo+1dy+0OQck0y4VEeoWsXn4RxL3PUW1x/nE2RRtu59CFphesEDPXSs4wRLGI0cmj70pSlOKoNSw0AUfWnVrbvdNtRrW+2x5WRfShwkMDwub2a7M+Q/IK/jWJa2TulejgPqm1Y0qUvrN3gNYrzUwZQSFdUh13IVxnJ4W7PSr1aS8pLszOsItoKpbawv1U553fvxHmvnxryfgnqB3UOLe7e5z2TCMLq3NCvrguckYXAw0LSBvHqPb94eOsGBvSevln700UG3TT/QgyPCunVwPWIcbOfV3isj17v7fx0ogpeAhI8DUI+kOh2Zz8h4t9eK0Cxb0cuduB+geznJyK34NfE93Lq8IOW6knMW3waq0WGJwjGJaZawW/gtPuGy9BDq3tMzuAmMfC9HSUM4MFhPMnG69Ec16L0c5jg54/Q7lg/xr9GfcSxJ/w948MwmQj/lYWQ3mO+AhL57zRGmq1ZvCwNJN9vEiEVdYxb0rYhPIrS6F0l4+23D6YkksCg4cseRvuq+NDpXlRIh7Wrn5PS+U7N+lAvQstmAbgPLhAartLYpF8BXjvkTe/nO/q5acv12/Q/ygFZqvwsAAA==" Type="41"/>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="29000">
                          <Calculation UnitCharge="29000" UnitName="Day" Quantity="1" Total="29000"/>
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
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="251229.18" EstimatedTotalAmount="392999.99662" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="30022.918" Purpose="6">
                        <Calculation Percentage="10" Total="30022.918"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="62747.89862" Purpose="7"/>
                    </Fees>
                    <Reference ID="vAsAAB+LCAAAAAAABACNVkty4zYQvYqKa9EFfsSPdrQkZ1SZsVQ2M5toFrAIaVAhCQUkHVVcOk0WOchcLA2CpMDfMF6oyuzXr7sfuoH+0EL2B0n3mB8pjrWlphu2gxaes3B9ba59plmOVyyN6BGzFUtIBfv9Q9tGJM3pCQwR4wMQ0/MQEJnzCaSpQr8SnmEGX+baMwB2J8JzDFntnjYvYTB7DYPndfCyhsxWLKJnFmJOTwKADM8wHPi+JtmRpTnbAzuELXD8haY0EZzeg2ki07IWC1T+uYNofB1FBzmnb0XOsjovkEEwcFFQbYRkfk1mn+k7J9ptPgzYc5aTH//++IfNIjZbYc6ZdvtWF7WKKeRCRFWuZdm+6Wp3U5HlhG+u8JMCU1rEsZRq2NIEHzZL0s07hGMdU0gvbM2ORSJsTSD4l/c/Szk2CUTL8Z8FZH7CcUbm2p5lWUFDwhOWyYNnJNOWOS9IK+tt2ordbphpSACqpiyhcCJOoxRORRdWxYgeF83tepaHfA/0/EJyHIEzfP048EM6mx3apI8xg1IoO2jLWclSoyR/cCYptO8LySkHIoE6aEHwuAsPWgOVykoHgXAQutPIuiqeO8ZfOMhvULLBXwgoXOJkHGQ4lu8ogSRsxTgn2QWEFv1TQ8VgKNDeAN5DN3NYY3/hxUVJHz4oRGuc40+M95ITU6Mbhm76oeHDHC1t68G3PXdhuDqylggNcqgySgZTR0aIPHDo+FQz+0qTS0wy4VKdoGqV9XRnWOJuY1y/Xc6QRancRx/0hOkV99qhZR0m2MBY5KB535emOKkMSg29nuh2Vi3duGyoI1vtsefkWHY4dED/uNyl7SyR9wBCqY5laduUHuU0oK7piSZ1aV2Bt9CL1zqYUqLSdMixHIWxHNy7WdHr3pHygmyN6wC2gqky1hdqq7z23TjF2rotp1NQL68ptLhzm7tMJgyTO9azsi54ShIGBwOi9dqr8/Dm90Mn2LeP5M3STx6KdNv0fN0/IaxbkeMSI7IXb/ZRGbnOvf/zQCG8AiR47IE6JNXpyHwGxvt+rYieZU/0OhH3E6iXk4yMxa+Jp3Db8n6Uq0rOWTwOVKPDBoVjEtMsYWP4PT7jsvQA6j7SC7gJjHwrB0kDODBYTTJxuvTvatA7OaxwcsHpdywf4Z+jv+JYkv4fcO+JTUT/lIeRjTBPgER/d8QRpptWbwq9lm42iQGLusKs6XsRn0VodSeS8Pu3HadnksCSsJD7jfRVd6XBuao6EdKu9k1Op52a1aNcfjbN9jMOLBPqrdHarlz+3jjmz+z1O/urkuT27fYfMcfe3bwLAAA=" Type="41"/>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="49000">
                          <Calculation UnitCharge="49000" UnitName="Day" Quantity="1" Total="49000"/>
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
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="270327.73" EstimatedTotalAmount="417999.99857" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="31932.773" Purpose="6">
                        <Calculation Percentage="10" Total="31932.773"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="66739.49557" Purpose="7"/>
                    </Fees>
                    <Reference ID="qQsAAB+LCAAAAAAABACNVsmSo0YQ/RUFZ9FRLGK70ZLao/BMS9GN52LNoRpKmgoDJRfQVrhDX+ODP2R+zFkUO2jwRREiX24vl8oPJWB/kPSAeUhxrHiKZdqGoTvmSlkqn2mW4zVLIxpitmYJqUC/fyi7iKQ5PYEgYnwCsjIs19YcdzmD1LvQr4RnmCmevlSeAbA/EZ5jiGn/tH0J/MVr4D9v/JcNRLZmET2zAHN6EgCkOZpmwfcNyUKW5uwA1sFtgeMvNKUJ2FyhB8d0V8gwzUkYvo5hfs7pW5GzrI4EEheqXKRQC8H9r8niM33nRLktpwEHznLy498f/7BFxBZrzDlTbt/qNNYxhSCIyAO4N13dVlpRkeWEb6/wk4KltIhjSc60pHE+LZZGt+/gjg1EAb2wDQuLRMgaR/CXjz9LOrYJeMvxnwVEfsJxRpbKgWVZQQPCE5bJUjOSKV7OC9KLepf2fPdbZB7iA6spSyhUxGqYwqnouyoZ0dPAp6o5NlRTsywdKP1CchyBPgg+jvyYLhbHvt3HmEE2lB0Vb1EaqlHShX8mKfTsC8kpB0MCdVR8/3EfHJUGKsmVCgJhIdSakalVdlqMu7KQ26BkV78QILnEST9IswzX6jiSsDXjnGQX4Fq0UA0V09CBjqaudd0MX439hReXTvjwYd2xtME5/sT4KDod6YaqaaruBprr6Y5nGg+u6dgrzVaR4SE0aaPLo7Sgq0gLkAMKA51qYF9pcolJJlSqEnalZULtAEvA7Z6R3y5ncF9y9jEGPWF6xaNG6EmnDWxhJnJge6xLU5xUgk7wo24Y9lTN2X2+0ICvWuPASVj2NtR+XCfbMy0POQ/I7imWqe1SGso5QEPRE03q1IYE76ALr7WzToptbjqyDKtjsZzaVtzhq+1FuR17gzqBrWBdGutt2kuvvxjnrPZW5XwI3c01hxYLt1lkMmCY2Xs9K/OCdyRhUBggbdReg3c2b4tOsGuG5M1QTw6KVFN3XNU9IawakWUTLTJXb2bYmbXB0v+5owCeAOI/jkADI1V1ZDwTc93uE9Gz7IleZ/x+AvZykpF7/mvDc7hduRnlZZJzFt8Hdr3DuYRjEtMsYffwB3zGZeo+5B3SC6gJjHwoJ436UDA4SDJRXfp3NeiDGNY4ueD0O5Yv8M/RX3Esjf4f8Oh9TUT/lMXI7lieAYn+HpAjRDelPhNGLd2cEROS7v2yoe9FfBauuweRhLff9pyeSQIXwkoeN1K3eyhNzlXViRB2dV5yOq/U3B3l5bNtTp/7wDKg0dWs7MvL741j/sxev7O/Kkpu327/AQh5DnypCwAA" Type="41"/>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="49000">
                          <Calculation UnitCharge="49000" UnitName="Day" Quantity="1" Total="49000"/>
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
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="283314.74" EstimatedTotalAmount="434999.99466" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="33231.474" Purpose="6">
                        <Calculation Percentage="10" Total="33231.474"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="69453.78066" Purpose="7"/>
                    </Fees>
                    <Reference ID="vgsAAB+LCAAAAAAABACNVsly2zgQ/RUVz5YLXESRutGSPFFNYqlsJpdRDjAJKaghCQ1IOqq49DVzmA/Jj6VBcAG3cHxw2ezXrxe8Bvpd89nfJDlgHlAcaStNX1ruQndc29XutI80zfCaJSENMFuzmJSov961XUiSjJ7AEDI+ALEXyDUWhnE3gTRU6BfCU8y0Ffz5BID9ifAMQ1L7x+2z781efO9p4z1vILM1C+mZ+ZjTkwAg3dF1G75vSBqwJGMHYIewOY4+0YTGwGk595bjGIZjWm7xYw6i8XUU7WWcvuYZS6u8oA2CgYuCKiMk82c8+0jfONFud8OAA2cZ+fnfz3/ZLGSzNeacabevVVHriEIuRFS1NCG8sdQaU55mhG+v8CsBpiSPItmqYUsdfNgsSbdvEI51TD69sA0L8ljY6kDwL+9/lu3YxhAtw//kkPkJRym50w4sTXPqEx6zVB48I6m2ynhOWlnvklbstmCmIR50NWExhROx607hRKiwLEZIvNC241imqztCKZ9IhkNwh+/vR35MZrNjm/YhYlAMZUdtNSt4KpSM4J1JAgJ+JhnlQCRQR83zHvb+UauhsrfSQSBshBoaWVnJ02DchY3cGiUl/kygxwVOxkG6bbq2EkjC1oxzkl6g1UJBFVSMhgLtjaCSXjWJFfYPnl+U9OGDpTBtcIY/MN7LzkCGOdf1ueH6ursynJVl3ruWs1zoyzkyVwgNcqh9lAzGHOk+csCh41OO7QuNLxFJhUt5hKpVfO6PscTdxrg+X86QRdG69z7oEdMr7umhZR0m2MJkZND0vi9NcFwalBp6ouhKq2rdeNtQp22Vx4GToJA4SKB/XMuVZa+Qc4+WLceitF1CAzkOqGt6pHFVWrfBOxDjtQqmlNjUZiDbtBXGYnYbs9KvRpLyjmzN6wC2hKltrO7UVnnt63GKtXVhTqeg3l9TaHHt1teZTBhGd0yzsi54TWIGBwNN68mr8/ZmzaET7FoBeTXnJweFc8tw3Ll7QnhuhvaS6KG1eLUCZeQ6V//vA/nwEBDvoQfqkJSnI/MZGO/mWhGaZY/0OhH3A3QvIykZi18RT+F2xQUpt5WMs2gcqEaHHQpHJKJpzMbwB3zGReke1B3QC7gJjHwuB0k9ODDYTlJxuvRHOeidHNY4vuDkG5bv8O/RX3AkSf8PuPfKxkI/xWGkI8wTIKHvTnOE6aZVy0JP0vUyMWBRt5gNfcujswitrkUS3nzbc3omsVg55YojfdV1aXCuSiVC2uXKyem0U719FPvPtl6AxoFFQr1NWtsX+98rx/yJvXxj38uW3L7efgGZ69QvvgsAAA==" Type="41"/>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="49000">
                          <Calculation UnitCharge="49000" UnitName="Day" Quantity="1" Total="49000"/>
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
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="432283.42" EstimatedTotalAmount="629999.99678" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="48128.342" Purpose="6">
                        <Calculation Percentage="10" Total="48128.342"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="100588.23478" Purpose="7"/>
                    </Fees>
                    <Reference ID="vQsAAB+LCAAAAAAABACNVtuS2jgQ/RXKzzAlX/DtzQPMhtpkoBgnL0seNCCIam2Lle0JlSm+Zh/2Q/JjaVm+CF/inQeqxn36dPdRt9TvWsj+JskW8wPFkeZr+hw5uof0uaNNtY80zfCCJUd6wGzBYlKi/nrX1keSZPQEhiPjPZC5aXtzx51PR5CGCv1CeIqZ5htT7RkAmxPhGYakNk+rXRhMXsLgeRnslpDZgh3pmYWY05MAIN3VdRu+L0l6YEnGtsAOYXMcfaIJjQWn/mAhE+mWjuSf04vG10F0kHH6mmcsrfICGQQDFwVVRkjmz3jykb5xot2m/YAtZxn5+d/Pf9nkyCYLzDnTbl+rohYRhVyIqMoxTcszHK0x5WlG+OoKPwkwJXkUSan6LXXwfrMkXb1BONYyhfTCluyQx8JWB4J/efezlGMVQ7QM/5ND5iccpWSqbVma5jQkPGapPHhGUs3PeE7usl4nd7HvG2YcEoCqCYspnIhdK4UT0YVlMaLFQU9oM1c3LdsAQT+RDB/BGz6/7/k+mUz296yPEYNaKNtr/qSgqVAyQHAmCfTvjmSUA5FA7bUgeNyEe62GSmmlg0DYCDU0srCSp8F4cxt5NUp2+I6AxAVOxkG6bXq2EkjCFoxzkl5AadFAFVRMhgLtTGATuh7ECvsHzy9K+vBhpzAtcYY/MN7JzkCGOdP1meGFuucbrm+ZD57lOnPdmSHTR6iXQ9VRMhgzpIfIBYeWTzm1LzS+RCQVLuURqlbxuTvFEncb4vp8OUMWhXTvXdATplfc6Yc7az/BCgYjA9G7vjTBcWlQaug0Rbu1KumGZUMt2SqPLSeHosWhBbrH5fiW7SP3AYRSHYvS1gk9yHFAbdMTjavS2gKvoRmvVTClxKY2A9mmrTAWo9uYFb2alpRX5N289mBLmCpjdaXelXd/O46x3t2X4ymo19cYWty69W0mE4bRHepZWRc8JjGDgwHROu3Venqz5tAJ9qwDeTVnJxcdZ5bhejPvhPDMPNoO0Y/W/NU6KCPXuvl/HyiEd4AEjx1Qi6Q8HZlPz3g314roWfZEryNxP4B6GUnJUPyKeAy3Li5IuaxknEXDQDU6rFA4IhFNYzaE3+IzLkoPoO4DvYCbwMjXspc0gAOD5SQVp0t/lIPeymGB4wtOvmH5DP8e/QVHkvT/gDuPbCz6pziMdIB5BCT6uyWOMN20alfotHS9S/RY1CVmSd/y6CxCq1uRhDffNpyeSQxrwlxuONJX3ZZ656rsREi73Dg5HXeql49i/VnV+88wsEios0hrm2L9e+WYP7OXb+x7Kcnt6+0XRJrca70LAAA=" Type="41"/>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="49000">
                          <Calculation UnitCharge="49000" UnitName="Day" Quantity="1" Total="49000"/>
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
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="321511.84" EstimatedTotalAmount="484999.99856" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="37051.184" Purpose="6">
                        <Calculation Percentage="10" Total="37051.184"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="77436.97456" Purpose="7"/>
                    </Fees>
                    <Reference ID="vQsAAB+LCAAAAAAABACNVttu2zgQ/RVDz3ZAXSxLflNsZ2u0jY1EWxSo+8BItEtUEr2UlDUa+Gv60A/pj+1Q1IW61ZsHA+GcOTNzOEPNm+az7yTZYx5QHGlLzXAdS587hq5NtQ80zfCKJSENMFuxmJSgL2/aNiRJRo9gCBkfgBiOg9DcMac3kIYK/UR4ihmcTLVHAOyOhGcYcto9bJ58b/Lse49r72kNma1YSE/Mx5weBQDpjq7bcL4macCSjO2BHcLmOPpIExoDp+7e2YaBTHehu8XfYhCNL6NoL+P0Jc9YWuUFMggGLgqqjJDM+3jygb5yol2nw4A9Zxn5/ev3TzYJ2WSFOWfa9WtV1CqikAsRVS1M03KNhdaY8jQjfHOBnwSYkjyKpFTDljr4sFmSbl4hHOuYfHpmaxbksbDVgeBf3j+WcmxiiJbhf3LI/IijlEy1PUvTnPqExyyVF89Iqi0znpNW1tukFbvdMLchHqiasJjCjdi1UjgRXVgWIzoc9NRdZ45caDYHFP1IMhyCO5y/HfghmUwObdr7iEExlB205aTgqVAygnciCTTwE8koByKBOmied7/zD1oNldpKB4GwEWpoZGUlT4Nx5zZya5Rs8ScCGhc4GQfptunaSiAJWzHOSXoGqUUHVVAxGgq0N4JN6HoSK+xfPD8r6cPBZ4VpjTP8jvFedgYyzJmuzwzX110Y76Vl3rmWs5jrixkylwgNcqg6SgZjhnQfOeDQ8SnH9pnG54ikwqW8QtUqjvtjLHHXMa6/zyfIopDurQ96wPSCe/3Qsg4TbGAyMhC970sTHJcGpYZeU3Rbq5JuXDbUka3y2HMSFC0OLdC/rsXSspfIuUOLlmNR2jahgRwH1DU90LgqrSvwFprxUgVTSlS6DtmmrTAWs9uYFb2alpRvZGteB7AlTJWxelNb5bWfx1usrQfzdgrq+3ULLZ7d+jmTCcPojvWsrAu+JjGDiwHReu3V+fZmzaUT7FoBeTFnRweFM8tw3Jl7RHhmhvaC6KE1f7ECZeQ6T/+fA/nwISDefQ/UISlvR+YzMN7NsyJ6lj3Qy42470C9jKRkLH5FfAu3LR5Iua1knEXjQDU6rFA4IhFNYzaG3+MTLkr3oO6AnsFNYOTncpDUgwuD7SQVt0t/lIPeyWGF4zNOvmH5Hf4z+hOOJOn/Afe+srHon+Iy0hHmGyDR3x1xhOmqVctCr6XrZWLAom4xa/qaRycRWl2LJLw523F6IjHsCXO54khfdV0anKuyEyHtcuXk9LZTvX0U+8+mXoDGgUVCvU1a2xX73wvH/JE9f2P/lpJcv17/A4BgKLG9CwAA" Type="41"/>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="49000">
                          <Calculation UnitCharge="49000" UnitName="Day" Quantity="1" Total="49000"/>
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
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="223100.84" EstimatedTotalAmount="329999.99956" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="25210.084" Purpose="6">
                        <Calculation Percentage="10" Total="25210.084"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="52689.07556" Purpose="7"/>
                    </Fees>
                    <Reference ID="uwsAAB+LCAAAAAAABACNVkty2zgQvYqKa8kFfsSPdrQkj1WTWCqbk02UBSxCCmpIQgOSjiounSaLHCQXmwZBUuAvjBeqMvv16+6HbqDftYD9S5Id5geKI22h2Z7hOaYx16baB5pmeMmSkB4wW7KYlJjP79omJElGj2AIGe+BGK6L0Ny1piNIQ4V+IjzFDL5MtScAbI+EZxhS2j6snwN/8hL4Tyv/eQWZLVlITyzAnB4FAOmurtvwfUXSA0sytgN2CJvj6CNNaAycJrozXOS5jukh8adbvWh8GUT7GaevecbSKi+QQTBwUVBlhGT+jicf6Bsn2nXaD9hxlpFfP3/9YJOQTZaYc6Zdv1RFLSMKuRBRlWOalmc42s2Upxnh6wv8JMCU5FEkpeq31MH7zZJ0/QbhWMsU0DNbsUMeC1sdCP7l3c9SjnUM0TL8Xw6ZH3GUkqm2Y2ma04DwmKXy4BlJtUXGc9LIepM0YjcbZhzig6oJiymciF0rhRPRhWUxosFBT92xLAs587kBin4kGQ7BHb6/7/k+mUz2Tdr7iEExlO21xaTgqVAygn8iCTTwM8koByKB2mu+f78N9loNldpKB4GwEbrRyMpKnhvGm9vIq1GyxZ8JaFzgZByk26ZnK4EkbMk4J+kZpBYdVEHFaCjQzgjeQteTWGH/4vlZSX+vPSpEK5zhR8Y7yRnIMGe6PjO8QPdguheWeedZrjPXnRkyFwj1cqgySgZjhvQAueDQ8imn9oXG54ikwqU8QdUqPnenWOKuQ1z/nE+QRaHcexf0gOkFd9qhYe0nWMNgZKB515cmOC4NSg2dnmh3ViXdsGyoJVvlsePkUHQ4dED3uJyFZS+Qe4echmNR2iahBzkNqG16oHFVWlvgDfTipQqmlKg0HbJNW2EsRvdmVvS6daS8Ihvj2oMtYaqM1ZXaKK95O46xNu7L8RTU62sMLW7d+jaTCcPkDvWsrAsek5jBwYBonfZqPb3Z7dAJ9qwDeTVnRxeFM8twvZl3RHhmhrZD9NCav1oHZeRaN//vAwXwDhD/vgNqkZSnI/PpGe/btSJ6lj3Qy0jcR1AvIykZil8Rj+E2xf0ol5WMs2gYqEaHBQpHJKJpzIbwO3zCRek+1H2gZ3ATGPla9pL6cGCwnKTidOn3ctBbOSxxfMbJVyyf4d+jP+FIkv4JuPPIxqJ/isNIB5hHQKK/W+II01WrdoVOS9e7RI9FXWJW9C2PTiK0uhVJ+O3bltMTiWFNmMsNR/qq21LvXJWdCGmXGyen40718lGsP+t6/xkGFgl1FmltW6x/rxzzJ/bylX0rJbl+uf4PJmJrwbsLAAA=" Type="41"/>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="29000">
                          <Calculation UnitCharge="29000" UnitName="Day" Quantity="1" Total="29000"/>
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
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="270327.73" EstimatedTotalAmount="417999.99857" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="31932.773" Purpose="6">
                        <Calculation Percentage="10" Total="31932.773"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="66739.49557" Purpose="7"/>
                    </Fees>
                    <Reference ID="qAsAAB+LCAAAAAAABACNVs2S2jgQfhXKZ5iS/21uHmA21E4GasabS8hBgwVRrW2xsj2hMsXT5JAHyYtty7KN/EOcC1W4v/7/utXvWsj+JekW8z3FsTbXZrru2o6n+7Y21R5pluMFSyO6x2zBElKhPr9r64ikOT2AIGJ8AGJ4HkK2Z09HkIYK/UR4hhl8mWpPANgcCM8xBLV5WD2HweQlDJ6WwfMSIluwiB5ZiDk9CADSPV134PuSZHuW5mwL1sFtgeOPNKUJ2DStO+Q4FnKRPQjD5z4syDl9LXKW1ZFA4kKVixRqIbj/O5k80jdOtMt0GLDlLCe/fv76wSYRmyww50y7fKnTWMQUgiAiD9c0Ld9wtauoyHLCV2f4ScFSWsSxLM6wpHE+LJZGV2/gjnVEIT2xJdsXiZA1juAv73+W5Vgl4C3H/xUQ+QHHGZlqW5ZlBQ0JT1gmW81Ips1zXpBW1Ou05btNkXFIAFVNWUKhI05TKZwK3lXJCFJDPXWEfNtwkS+48ZHkOAJ1+P6+47t0Mtm1zd7HDJKhbKfNJ6WdGiU9BEeSAmWfSU45GBKonRYE95twpzVQWVupIBAOQlczMrPKzhXj2w7yG5Qk9TOBGpc46Qfpjuk7iiMJWzDOSXaCUgsG1VAxDAq0N3RX183s1di/eHFSwt9pj4qhJc7xB8Z7wRnIMGFxzAw/1H2Y57ll3vmW59q6O0PmHKFBG2oZpQVjhvQQeaDQ0anG9YUmp5hkQqXqoCoVn5XxlYDLLSP/nI7gvizZex/0gOkZ93jQkg4bWMFE5FDsvi5NcVIJlOB7ZOhSqq7Z7XqhTr1qjS0n+5La0Pp+n9y55cyRd4fclmKZ2jqlezkGqCt6oEmdWrfAayDhuXampKiwDTmmo1gsZ/YqVup1paLcja05HcBWMLWM9S5tpddei2NWW4tyPAR1b42hxbpt1pgMGEb2FmdlXvCKJAwaA0Xr0avzyubXphPsW3vyas4OHopmluH5M/+A8MyMHJfokWW/Wntl1jor//eOQngASHDfA3WMVN2R8QzM9XWfCM6yB3oe8fsBqpeTjNzyXxsew63LxSjvkpyz+DZQ9Q7XEo5JTLOE3cJv8RGXqQeQ956eQE1g5DM5aDSAhsE5konu0u/VoHdiWODkhNOvWL6/v0d/wrE0+ifg3uuaCP6UzchuWB4BCX53iiNEF60+EnqUbo6IAYl6vSzpWxEfhWv1HJLw67cNp0eSwH1gy9NG6qpn0uBcVUyEsKvjktNxpebqKO+eVXP43AaWAfVuZm1T3n2vHPMn9vKVfatKcvly+R+5wLhEqAsAAA==" Type="41"/>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="49000">
                          <Calculation UnitCharge="49000" UnitName="Day" Quantity="1" Total="49000"/>
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
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="408601.22" EstimatedTotalAmount="598999.99698" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="45760.122" Purpose="6">
                        <Calculation Percentage="10" Total="45760.122"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="95638.65498" Purpose="7"/>
                    </Fees>
                    <Reference ID="vwsAAB+LCAAAAAAABACNVkty2zgQvYoKa8kFfsSPdrQkT1TjWCqbk02UBSxCCmpIQgOSjiounSaLHCQXmwbBP6kwXqjK7Nevux+6gX5HPv+XxjsiDoyEaIFmjm5ruq07BpqiR5akZMnjgB0IX/KIFqjP72gT0DhlRzAEXAxA5oblWrauTUeQehP6iYqEcLTQp+gJANsjFSmBpLYP62ffm7z43tPKe15BZksesBP3iWBHCcCao2kWfF/R5MDjlO+AHcJmJPzIYhZJTufO0OZze451N/8zB9HkchPtpYK9ZilPyrxABskgZEGlEZL5O5o8sjdB0XU6DNgJntJfP3/94JOAT5ZECI6uX8qiliGDXKisyjYM09VtVJuyJKVifYGfGJjiLAyVVMOWKviwWZGu3yAc75h8duYrfsgiaasCwb+i/1nJsY4gWkr+yyDzIwkTOkU7niQZ86mIeKIOntMELVKR0VbWm7gVu90w4xAPVI15xOBErEopEssuLIqRLS57W3NM3dVM03FA0o80JQH4g+F9L/bxZLJv896HHKphfI8Wk5yoRKkQ3onG0MHPNGUCiCRqjzzvfuvvUQVV4ioHibAwrmlUaQVPjXHnFnYrlOrxZwoi5zgVB2uW4VqNQAq25ELQ5AxayxYqoXI2GtDeDNahq1EssX+J7NxIf48e1w2mFUnJBy562elYN2aaNtNdX3Nhlhamceeajj3X7Bk2FhgPcjR1VAz6DGs+dsCh41PM7QuLziFNpEtxhE2r/NyfY4W73uL653yCLHLp3vugB8IupNcPLeswwRpGIwXR+74sJlFhaNTQa4pua5XS3ZYNd2QrPXaCHvIWhxboH5e9MK0Fdu6w3XLMS9vE7KDGAXdNDywqS+sKvIFmvJTBGiXWtenYMqwGYz68tbmhV92S6pJszesAtoA1ZSwv1VZ57ftxjLV1Y46n0LzAxtDy3q3uM5UwjO6tnlV1wXMScTgYEK3XXp3HN60PnRLXPNBXY3Z0cDAzdceduUdMZkZg2VQLzPmreWiMXOfu/30gH14C6t33QB2S4nRUPgPjXV8rsmf5A7uMxP0A6qU0obfil8RjuE1+Qap1JRU8vA1sRoclioQ0ZEnEb+F35ETy0j2o+8DO4CYx6r0cJPXgwGA9SeTpsu/FoHdyWJLoTOKvRD3Ev0d/IqEi/RNw75mNZP/kh5HcYB4Byf7uiCNNV1RuC72WrraJAUtzjVmxtyw8ydDNvUjB629bwU40gkVhrnYc5dvclwbnquhESLvYOQUbd6rWj3wBWlcb0G1gnlBvlUbbfAF8FUQ88Zev/FshyfXL9X+frB6MvwsAAA==" Type="41"/>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="49000">
                          <Calculation UnitCharge="49000" UnitName="Day" Quantity="1" Total="49000"/>
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
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="394086.33" EstimatedTotalAmount="580000.00597" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="44308.633" Purpose="6">
                        <Calculation Percentage="10" Total="44308.633"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="92605.04297" Purpose="7"/>
                    </Fees>
                    <Reference ID="qQsAAB+LCAAAAAAABACNVsmS4kYQ/RVCZ+goLWjhpgbaQ3imIbrluZg5VEsFU2FJhUtSm3AHX+ODP2R+zFkqLaWFkS9EoHy5vVwqP7SA/UHSA+YhxbG20ha6Z3m6ZTump821zzTL8ZqlEQ0xW7OEVLDfP7RdRNKcnkAQMT4CMVwXoaXrzCeQhgr9SniGGXyZa88A2J8IzzFEtX/avgT+7DXwnzf+ywYiW7OInlmAOT0JANJdXbfh+4ZkIUtzdgDr4LbA8Rea0gRsmujBtQ1kubozCsPXIczPOX0rcpbVkUDiQpWLFGohuP81mX2m75xot/k44MBZTn78++MfNovYbI05Z9rtW53GOqYQBBF5OKZpeYajtaIiywnfXuEnBUtpEceSnHFJ43xcLI1u38Ed64kCemEbFhaJkDWO4C8ffpZ0bBPwluM/C4j8hOOMzLUDy7KCBoQnLJOlZiTTVjkvSCfqXdrx3W2RaYgPrKYsoVARu2EKp6LvqmREV5ftrC8t13ZcCxj9QnIcgTp8/zjyYzqbHbtmH2MGyVB21Faz0k6Nkh78M0mhZV9ITjkYEqij5vuP++CoNVDJrVQQCBuh1ozMrLLTYryljbwGJZv6hQDHJU76QbpterbiSMLWjHOSXYBq0UE1VAyDAh0MXeu6mb0a+wsvLkr4R+2gGNrgHH9ifBCcgQwTqF4YXqB7MM8ry3zwLNdZ6s4CmSuERm2oNEoLxgLpAXJBoadTjesrTS4xyYRKVUFVKj4r4ysBt3tGfrucwX1J2ccQ9ITpFQ/6oCMdN7CFiciB7KEuTXFSCZTgB83Qb6mas/t8oR5ftcaBk7BsbSj9sE7OyrJXyH1ATkexTG2X0lCOAeqLnmhSp9YneAdNeK2dKSkq3YZs01YsljPbihW+2laUu7EzpyPYCqbSWO/STnrdtThltbMop0NQ99YUWqzbZo3JgGFk7/WszAtekYRBYYC0QXv1Xtm8LTrBnhWSN3NxclG0sAzXW3gnhBdmZDtEj6zlmxUqs9Zb+T93FMADQPzHAahnpKqOjGdkrtt9InqWPdHrhN9PwF5OMnLPf214CrcrF6O8S3LO4vtA1TucSzgmMc0Sdg9/wGdcpu5D3iG9gJrAyGdy1KgPBYNzJBPVpX9Xg96LYY2TC06/Y/n+/hz9FcfS6P8BD17XRPRPWYzsjuUJkOjvHjlCdNPqI2HQ0s0RMSJRr5cNfS/is3CtnkMS3n7bc3omCdwHS3naSF31TBqdq6oTIezquOR0Wqm5Osq7Z9scPveBZUCDm1nbl3ffG8f8mb1+Z39VlNy+3f4DQJqwCakLAAA=" Type="41"/>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="49000">
                          <Calculation UnitCharge="49000" UnitName="Day" Quantity="1" Total="49000"/>
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
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="250000" EstimatedTotalAmount="391391" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="29900" Purpose="6">
                        <Calculation Percentage="10" Total="29900"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="62491" Purpose="7"/>
                    </Fees>
                    <Reference ID="jgsAAB+LCAAAAAAABACNVttu2zgQ/RWDz3ZAXSxbelNsZ2tsGxuJNi91HxiJdomVRC8lpUYDf00f+iH9sR2KukuuigAGojlzPzOcd+Txf2m8J8JnJEQOmmmaAX+6pdloij6yJCUrHgfMJ3zFI1rAPr+jbUDjlB1BEHAxADGxhjUda9MRpN6EvlCREI4cfYoeAbA7UpESiGr3sHny3Mmz5z6u3ac1RLbiATtxjwh2lACsLTXNgu9rmvg8TvkerIPbjISfWMwisIkHheRSCt1UsNcs5UnpFZKUCkKGWwrB1d/R5CN7ExRdp8OAveAp/fXz1w8+CfhkRYTg6PqlDHkVMnBNZcwLwzBtfYFqUZakVGwu8BODpTgLQ1WIYUnlfFisjG7ewB3viDx25mvuZ5GUVY7gX9H/rMqxicBbSv7LIPIjCRM6RXueJBnzqIh4otrKaYKcVGS0FfU2bvlu02Ec4kJVYx4x6IhVVYrEkmNFMpLBOXV1bNjWHFuSCJ9oSgLQB8H7QRziyeTQtnsfcsiG8QNyJrmhEqVcuCcaAz+faMoEGJKoA3Ld+513QBVUFVcpSISFcW1GpVbYqTH23MJ2hVIMfqJQ5Byn/GDNgkwajhRsxYWgyRlqLSlUQiXzG9DehNWuq0ErsX+J7NwI/4BeGobWJCUfuOgFp2PdgDUx021Psx196ZjGnW0uF3NtMcOGg/GgjWYZlQV9hjUPL0Gho1NM6TOLziFNpErRwaZUfsZ3WAmut5T/OZ/AbV6q9z7ogbAL6fW/JR02sIFRSKHIfV0Wk6gQNILukaBLpbJWt+uEO3UqNfaC+jmloeX9/iwc03Lw8g4vWop5atuY+Yr+uCt6YFGZWrfAWyDfpXTWSLHOTceWYTUs5sNaixv1qimolmJrPgewBaxZxnKJttJr78Mxq60NOR5Cc2GNoeWerfaXChhG9RZnVV7wfEQcGgNF69Gr85SmddMpsU2fvhqz4xIHM1Nf2jP7iMnMCKwF1QJz/mr6jRnr7PrfO/Jg81P3vgfqGCm6o+IZmOd6j0jO8gd2GfH7AaqX0oTe8l8aHsNt84Wojo9U8PA2sOkdbiIS0pAlEb+F35MTyVN3IW+fnUFNYtT7OGjUhYbB9ZHI7rLvxaB3YliR6Ezir0Q9vL9Hv5BQGf0TcO9ZjSR/8mYkNyyPgCS/O8WRoisqr4MepavrYUDSPFvW7C0LT9J18w5S8PrbTrATjeAwmKubRuk276PBuSqYCGEXF6Rg40rVuZEfPJvq4rkNzAPqHcZolx98r4KIR/78lX8rSnL9cv0f6YZxj44LAAA=" Type="41"/>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="49000">
                          <Calculation UnitCharge="49000" UnitName="Day" Quantity="1" Total="49000"/>
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
                      </VehicleCharges>
                      <RateQualifier RatePeriod="Daily" RateQualifier="018116" RateCategory="16"/>
                      <RateRestrictions MinimumDayInd="false" MaximumDayInd="false"/>
                    </RentalRate>
                    <TotalCharge RateTotalAmount="310052.71" EstimatedTotalAmount="469999.99739" CurrencyCode="COP" DecimalPlaces="2" RateConvertInd="false"/>
                    <Fees>
                      <Fee IncludedInRate="true" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Taxa" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="35905.271" Purpose="6">
                        <Calculation Percentage="10" Total="35905.271"/>
                      </Fee>
                      <Fee IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="IVA" DecimalPlaces="2" CurrencyCode="COP" Amount="75042.01639" Purpose="7"/>
                    </Fees>
                    <Reference ID="qQsAAB+LCAAAAAAABACNVsuS4jYU/RVKa5iS35idG+gMlZmG6nZ6E2ahNoJRxbaIbHeodPE1WeRD5sdyZfkhPxiyoQrfc1/nPnQ/UMj/oOmOiIiRGC2QYVu2YzqG7aAp+sKynCx5emAR4Uue0Ar1+wfaHGiasyMIDlyMQBzL9R3LsqZ3kKYOfaUiIxwtzCl6AsD2SEVOIKjt4/o5DCYvYfC0Cp5XENmSH9iJh0SwowRgY24YLnxf0Sziac53YB3cFiT+ylKWgE3b+uSaruf5rj0KI5chLMgFeytyntWRQOJSVcgUaiG4/zWZfGHvgqLrdBywEzynP/798Q+fHPhkSYTg6PqtTmMZMwiCyjw8y7J900OtqMhyKtYX+EnBUlrEsSJnXNI4Hxcro+t3cMd7opCd+YpHRSJljSP4K4afFR3rBLzl5M8CIj+SOKNTtONZVrCQioRnqtScZmiRi4J2ot6kHd/dFrkPCYDVlCcMKuI2TJFU9l2VjGxq4NPE2PYsw/TnwOhXmpMDqMP3j73Yp5PJvmv2IeaQDON7tJiUdmqU8hCcaAot+0xzJsCQRO1REDxswz1qoIpbpSARLsatGZVZZafF+I6L/QalmvqZAsclTvnBhmv5ruZIwZZcCJqdgWrZQTVUDoMGHQxd67qZvRr7iyjOWvh79LrTLK1ITj5zMYjOxKY1M4yZ6YeGvzDncox8e+45hjfD1gLjURs6j8qCOcNGiOeg0NOp5vWFJeeYZlKlKqEulZ+1+VWA6y0jv51P4L7k7GMIeiTsQgaN0JGOG1jDSOTA9lCXpSSpBFrwg27o91TN2W2+cI+vWmMnaFT2NtR+WCdvYbsLPP+EvY5imdomZZGaA9wXPbKkTq1P8Aa68FI701JsczOxa7maxXJoW7HGV9uLajl2BnUEW8F0Gutl2kmvuxfvWe1syvsh6IvrHlru22aPqYBhZm/1rMoLnpGEQ2GAtEF79Z7ZvC06Jb4d0Tdrdpzjw8w25/7MP2Iysw6uR42D7bzZkTZrvZ3/c0chvAA0eBiAekaq6qh4Rua63SeyZ/kju9zx+xnYy2lGb/mvDd/DbcrNqA6TXPD4NlD3DucSiWnMsoTfwu/IiZSpB5B3xM6gJjHqnRw1GkDB4B7JZHXZ39Wg92JYkuRM0u9EPcA/R7+SWBn9P+DB85rI/imLkd2wfAck+7tHjhRdUX0lDFq6uSJGJPr5smLvRXySrvV7SMHbb1vBTjSBA8FRt43S1e+k0bmqOhHCrq5Lwe4rNWdHefism8vnNrAMaHA0o215+L0JIp74y3f+V0XJ9dv1P0P6JE+pCwAA" Type="41"/>
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
                        <Charge IncludedInRate="false" RateConvertInd="false" IncludedInEstTotalInd="true" Description="Proteções com co-participação regular" DecimalPlaces="2" CurrencyCode="COP" TaxInclusive="false" Amount="49000">
                          <Calculation UnitCharge="49000" UnitName="Day" Quantity="1" Total="49000"/>
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
