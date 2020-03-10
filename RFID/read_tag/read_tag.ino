#include <Wire.h>
#include <PN532_I2C.h>
#include <NfcAdapter.h>

PN532_I2C pn532_i2c(Wire);
NfcAdapter nfc = NfcAdapter(pn532_i2c);

void setup() {
  Serial.begin(9600);
  Serial.println("NFC TAG READER"); 
  nfc.begin();
}

void loop() {
  //lecture();
  if (nfc.tagPresent()) {
    
    NfcTag tag = nfc.read();
    // every tag won't have a message
    if (tag.hasNdefMessage()) { 
      // Retrieves the Unique Identification from your tag 
      //NCarte=tag.getUidString();
      Serial.print("UID= ");
      Serial.println(tag.getUidString());
      delay(10);
    }
  }
  delay(500);
}
