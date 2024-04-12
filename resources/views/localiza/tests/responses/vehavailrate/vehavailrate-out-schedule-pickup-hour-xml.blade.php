<s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/">
    <s:Body xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
        <OTA_VehAvailRateResponse xmlns="http://tempuri.org/">
            <OTA_VehAvailRateRS TimeStamp="0001-01-01T00:00:00" Target="Test" Version="0" TransactionStatusCode="Start" RetransmissionIndicator="false">
                <Success/>
                <Warnings>
                    <Warning Type="3" ShortText="LLNRAG011" Code="303" Status="NotProcessed" xmlns="http://www.opentravel.org/OTA/2003/05">A agência de retirada não funciona na hora informada.</Warning>
                </Warnings>
            </OTA_VehAvailRateRS>
        </OTA_VehAvailRateResponse>
    </s:Body>
</s:Envelope>
