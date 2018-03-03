<h2>GB - Printer ... eine Tr�umerei</h2>
29.10.2009 - 11:31<p>
<img width="100%" src="pics/gbprinter.png"><br />
<br />
Eine kleine Tr�umerei...<br />
<br />
Seit ich den Printer mit einem Netzteil versehen und die Seite <a target="_blank" href="http://furrtek.free.fr/index.php?p=crea&a=gbprinter">http://furrtek.free.fr/index.php?p=crea&a=gbprinter</a> entdeckt habe, tr�ume ich mir eine super - coole USB-AVR-Druckermaschinerie aus. Ein FTDI Dongle als USB Adapter f�r RS-232 an den Atmega8 Chip, der die Signale an den Drucker schickt. Vielleicht k�nnte man auch mit Hilfe vom V-USB den FTDI umgehen. Allerdings m�sste ich mir dann noch ausdenken, wie ich die RGB LED f�ttern k�nnte, die anstelle der roten Batterie LED ihren Platz findet. Die RGB LED w�rde in Rot f�r Strom, Blau f�r Senden und Gr�n f�r Empfangen leuchten. Stell ich mir ganz cool vor. Die ganze Logik k�nnte in das eh nicht mehr ben�tigte Batteriefach. Die Batterien (6 St�ck!) waren eh super schnell leer, deshalb das Netzteil. Trotzdem soll aber der alte Port erhalten bleiben, nur soll zus�tzlich noch eine vielleicht kleinere USB Buchse dazukommen.<br />
<br />
Ein Auszug:<br />
Franz�sisch - Googledeutsch : Google<br />
Googledeutsch - Deutsch : Dave<br />
<h2>Geschichte</h2>
Der Game Boy Printer ist ein Thermo-Drucker der als Zubeh�r f�r den Game Boy verkauft wurde. Entworfen und produziert wurde er von Seiko Instruments im Auftrag von Nintendo.
Der Drucker war ein relativer Misserfolg, aber auch ein gut kalkuliertes Risiko, wie sich sp�ter herausstellte. Seine Hauptfunktionen waren in erster Linie Pok�mon und Fotos von der Gameboy Camera zu drucken.<p>

<h2>Hardware</h2>
Die Mechanik ist noch verf�gbar MTP102. Das Druckpapier ist Thermopapier, 38mm breit und druckt 1,2 Streifen pro Minute (16 Pixel pro Zeile). Der Motor und das Thermo-Druckkopf werden mit 5V versorgt. Die Kern-Logik des Druckers ist ein 78011F (Datenblatt: mPD78018F), ein 8-Bit-Mikrocontroller, entwickelt und hergestellt von NEC im Namen der IIC. Es besitzt 8K ROM und 512 Byte RAM, erweiterbar auf bis zu 8K, durch einen externen Schaltkreis (was hier der Fall ist).Die Erweiterung des Arbeitsspeichers die hier in Frage kommt, ist ein 9264BLF-10L (Datenblatt: 9264BLF-10L ). RAM 64 K (8K). Die Schnittstelle zwischen dem Mikrocontroller und dem Thermo-Druckkopf wird mit zwei LB1721M realisiert (Datenblatt: LB1721M ), produziert von Sanyo, die Optokoppler sind Darlington Transistoren. Die �berwachung von Spannung und Strom wird durch den M62290L sichergestellt (Datenblatt : M62290L/FP ) heute von Renesas hergestellt.<p>
<br />
<object width="560" height="340"><param name="movie" value="http://www.youtube.com/v/8dEegIBwfdw&hl=de&fs=1&"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/8dEegIBwfdw&hl=de&fs=1&" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="560" height="340"></embed></object><p>

Daten�bertragung:<br />
<img width="560" src="http://www.devrs.com/gb/files/gblpof.gif"><p />
Schnittstelle: <br />
<img width="560" src="http://www.devrs.com/gb/files/gb2pp7.gif"><br />

<a target="_blank" href="http://www.weblearn.hs-bremen.de/risse/RST/SS99/gameboy/GameBoy.htm#4.%20Die%20serielle%20Schnittstelle%20des%20GameBoy">Die serielle Schnittstelle des GameBoys</a><p>
<p>Tags: Gameboy, Printer