void Lecture()
{
if (nfc.tagPresent())
  {
    NfcTag tag = nfc.read();

    if (tag.hasNdefMessage()) // every tag won't have a message
    {
//      NCarte=tag.getUidString();
//      Serial.print(NCarte);
      Serial.println("=UIDf");
      delay(10);
      NdefMessage message = tag.getNdefMessage();

      if (message.getRecordCount() != 1) {
        Serial.print("s");
      }
      

      // cycle through the records, printing some info from each
      int recordCount = message.getRecordCount();
      for (int i = 0; i < recordCount; i++)
      {

        NdefRecord record = message.getRecord(i);
        // NdefRecord record = message[i]; // alternate syntax
        // The TNF and Type should be used to determine how your application processes the payload
        // There's no generic processing for the payload, it's returned as a byte[]
        int payloadLength = record.getPayloadLength();
        byte payload[payloadLength];
        record.getPayload(payload);

        // Print the Hex and Printable Characters
        // Force the data into a String (might work depending on the content)
        // Real code should use smarter processing
        String payloadAsString = "";
        for (int c = 0; c < payloadLength; c++) {
          payloadAsString += (char)payload[c];
        }
        //Serial.print("  Le message est : ");
       // longueur = payloadLength;
        //message=payloadAsString;
     //   payloadAsString=payloadAsString.substring(1,longueur);
        Serial.print("message = ");
        Serial.print(payloadAsString);
        Serial.println("f");

        // id is probably blank and will return ""
        String uid = record.getId();
        if (uid != "") {
          Serial.print("  ID: ");Serial.println(uid);
        }
      }
    }
  }
  else
  {
    Serial.println("Carte non presentef");
  }
  delay(500);
}
