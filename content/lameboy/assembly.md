# Assembling The Kit

- Solder the ESP12 and the power switch in manually to prevent heat damage

![lameboy](/img/lameboy/lameboy_front.png "Lameboy front")

What is this good for? 

Ever needed an IoT remote to connect to all your MQTT stuff? Or wanted to check your hackaday.io likes? Maybe test your WiFi with the ESP8266? It's also good for gaming, as the looks might give away.

RGB background light might seem unnecessary at first, but in context and with some thought it's a good indicator for things. To save pins I'm throwing an attiny13/45/85 on the board to let a BlinkM clone handle the RGB controlling. https://code.google.com/archive/p/codalyze/downloads - firmware

On that I2C is also a PCF8574, an IO Expander that will scan the buttons for me.

There is a grove connector - basically almost a 2mm JST connector - that will allow me to add some sensors

<style>
img[alt=lameboy] { width: 100%; }
</style>	