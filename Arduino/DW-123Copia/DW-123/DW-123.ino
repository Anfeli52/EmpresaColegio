/*
  LiquidCrystal Library - Hello World

 Demonstrates the use a 16x2 LCD display.  The LiquidCrystal
 library works with all LCD displays that are compatible with the
 Hitachi HD44780 driver. There are many of them out there, and you
 can usually tell them by the 16-pin interface.

 This sketch prints "Hello World!" to the LCD
 and shows the time.

  The circuit:
 * LCD RS pin to digital pin 12
 * LCD Enable pin to digital pin 11
 * LCD D4 pin to digital pin 5
 * LCD D5 pin to digital pin 4
 * LCD D6 pin to digital pin 3
 * LCD D7 pin to digital pin 2
 * LCD R/W pin to ground
 * LCD VSS pin to ground
 * LCD VCC pin to 5V
 * 10K resistor:
 * ends to +5V and ground
 * wiper to LCD VO pin (pin 3)

 Library originally added 18 Apr 2008
 by David A. Mellis
 library modified 5 Jul 2009
 by Limor Fried (http://www.ladyada.net)
 example added 9 Jul 2009
 by Tom Igoe
 modified 22 Nov 2010
 by Tom Igoe
 modified 7 Nov 2016
 by Arturo Guadalupi

 This example code is in the public domain.

 http://www.arduino.cc/en/Tutorial/LiquidCrystalHelloWorld

*/

// include the library code:
#include <LiquidCrystal.h>
//Datos Ph
float calibration_value = 29.34;
int phval = 0;
unsigned long int avgval;
int buffer_arr[10], temp;

// initialize the library by associating any needed LCD interface pin
// with the arduino pin number it is connected to
const int rs = 12, en = 11, d4 = 5, d5 = 4, d6 = 3, d7 = 2;
LiquidCrystal lcd(rs, en, d4, d5, d6, d7);

void setup() {
  Serial.begin(9600);
  // set up the LCD's number of columns and rows:
  lcd.begin(16, 4);
  // Print a message to the LCD.
  lcd.print("    DW- 23   ");
}

void loop() {

  // Sensor de turbidez
  int sensorValue = analogRead(A1);
  float voltage = sensorValue * (5.0 / 1024);
  float tur = -1120.4 * voltage * voltage + 5742.3 * voltage - 4352.9;
  // sensor PH

  // set the cursor to column 0, line 1
  // (note: line 1 is the second row, since counting begins with 0):
  lcd.setCursor(0, 1);

  lcd.print("Voltaje= ");
  lcd.print(voltage);

  lcd.print("Vol");
  lcd.setCursor(4, 2);

  lcd.print("Turbidez= ");
  lcd.print(tur);


  //MUESTRA EL VOLTAJE Y LA TURBIDAD EN EL PUERTO SERIAL
  Serial.print("~/");
  Serial.print(voltage);
  Serial.print("/");
  Serial.print(tur);


  ///Sensor ph
  for (int i = 0; i < 10; i++) {
    buffer_arr[i] = analogRead(A3);
    delay(30);
  }
  for (int i = 0; i < 9; i++) {
    for (int j = i + 1; j < 10; j++) {

      if (buffer_arr[i] > buffer_arr[j]) {
        temp = buffer_arr[i];
        buffer_arr[i] = buffer_arr[j];
        buffer_arr[j] = temp;
      }
    }
  }
  avgval = 0;
  float ph_act = 0;
  float volt = 0;
  for (int i = 2; i < 8; i++) {
    avgval += buffer_arr[i];
    volt = (float)avgval * 5.0 / 1024 / 6;
    
  }
  ph_act = -5.70 * volt + calibration_value;


  lcd.setCursor(4, 3);
  // print the number of seconds since reset:
  lcd.print("PH= ");
  lcd.print(ph_act);
  Serial.print("/");
  Serial.println(ph_act);

}
