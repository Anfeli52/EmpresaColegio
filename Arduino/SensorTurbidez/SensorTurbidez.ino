void setup() {
  Serial.begin(9600);
}

void loop() {
  int turbidity = analogRead(A0);
  float volt = turbidity*(5.0/1024.0)*3;
  Serial.println(volt);
  delay(200);
}
