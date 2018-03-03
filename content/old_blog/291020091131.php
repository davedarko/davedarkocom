<h2>GB - Printer ... eine Träumerei</h2>
29.10.2009 - 11:31<p>
<img width="100%" src="pics/gbprinter.png"><br />
<br />
Eine kleine Träumerei...<br />
<br />
Seit ich den Printer mit einem Netzteil versehen und die Seite <a target="_blank" href="http://furrtek.free.fr/index.php?p=crea&a=gbprinter">http://furrtek.free.fr/index.php?p=crea&a=gbprinter</a> entdeckt habe, träume ich mir eine super - coole USB-AVR-Druckermaschinerie aus. Ein FTDI Dongle als USB Adapter für RS-232 an den Atmega8 Chip, der die Signale an den Drucker schickt. Vielleicht könnte man auch mit Hilfe vom V-USB den FTDI umgehen. Allerdings müsste ich mir dann noch ausdenken, wie ich die RGB LED füttern könnte, die anstelle der roten Batterie LED ihren Platz findet. Die RGB LED würde in Rot für Strom, Blau für Senden und Grün für Empfangen leuchten. Stell ich mir ganz cool vor. Die ganze Logik könnte in das eh nicht mehr benötigte Batteriefach. Die Batterien (6 Stück!) waren eh super schnell leer, deshalb das Netzteil. Trotzdem soll aber der alte Port erhalten bleiben, nur soll zusätzlich noch eine vielleicht kleinere USB Buchse dazukommen.<br />
<br />
Ein Auszug:<br />
Französisch - Googledeutsch : Google<br />
Googledeutsch - Deutsch : Dave<br />
<h2>Geschichte</h2>
Der Game Boy Printer ist ein Thermo-Drucker der als Zubehör für den Game Boy verkauft wurde. Entworfen und produziert wurde er von Seiko Instruments im Auftrag von Nintendo.
Der Drucker war ein relativer Misserfolg, aber auch ein gut kalkuliertes Risiko, wie sich später herausstellte. Seine Hauptfunktionen waren in erster Linie Pokémon und Fotos von der Gameboy Camera zu drucken.<p>

<h2>Hardware</h2>
Die Mechanik ist noch verfügbar MTP102. Das Druckpapier ist Thermopapier, 38mm breit und druckt 1,2 Streifen pro Minute (16 Pixel pro Zeile). Der Motor und das Thermo-Druckkopf werden mit 5V versorgt. Die Kern-Logik des Druckers ist ein 78011F (Datenblatt: mPD78018F), ein 8-Bit-Mikrocontroller, entwickelt und hergestellt von NEC im Namen der IIC. Es besitzt 8K ROM und 512 Byte RAM, erweiterbar auf bis zu 8K, durch einen externen Schaltkreis (was hier der Fall ist).Die Erweiterung des Arbeitsspeichers die hier in Frage kommt, ist ein 9264BLF-10L (Datenblatt: 9264BLF-10L ). RAM 64 K (8K). Die Schnittstelle zwischen dem Mikrocontroller und dem Thermo-Druckkopf wird mit zwei LB1721M realisiert (Datenblatt: LB1721M ), produziert von Sanyo, die Optokoppler sind Darlington Transistoren. Die Überwachung von Spannung und Strom wird durch den M62290L sichergestellt (Datenblatt : M62290L/FP ) heute von Renesas hergestellt.<p>
<br />
<object width="560" height="340"><param name="movie" value="http://www.youtube.com/v/8dEegIBwfdw&hl=de&fs=1&"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/8dEegIBwfdw&hl=de&fs=1&" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="560" height="340"></embed></object><p>

Datenübertragung:<br />
<img width="560" src="http://www.devrs.com/gb/files/gblpof.gif"><p />
Schnittstelle: <br />
<img width="560" src="http://www.devrs.com/gb/files/gb2pp7.gif"><br />

<a target="_blank" href="http://www.weblearn.hs-bremen.de/risse/RST/SS99/gameboy/GameBoy.htm#4.%20Die%20serielle%20Schnittstelle%20des%20GameBoy">Die serielle Schnittstelle des GameBoys</a><p>
<p>Tags: Gameboy, Printer