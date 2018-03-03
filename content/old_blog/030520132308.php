<h2>Sonic Screwdriver</h2>
03.05.2013 - 23:08<p>
Baubericht zu meinem TV-Highlight - Prop-Highlight.<p> Ein Arduino Mini mit Atmega328 - ohne FTDI Chip,<br />
der sich um folgende Dinge k&uuml;mmern wird / bereits auch schon tut:<br />
<br />
<h3>Einzelaufgaben</h3>
<ul>
<li>Ansteuern einer RGB LED</li>
<li>Ansteuern einer IR LED</li>
<li>Ansteuern einer UV LED</li>
<li>Ansteuern eines PIEZO Element/Lautsprecher</li>
<li>Senden von 433 MHz Signalen</li>
<li>Men&uuml;f&uuml;hrung &uuml;ber 3 Kn&ouml;pfe (ENTER HOCH RUNTER)</li>
<li>Auslesen eines LDR - Fotowiderstand</li>
</ul>
<h3>Kombinatorisch/Funktionen:</h3>
- "Theremin" LDR auslesen, Helligkeit in T&ouml;ne Wandeln<br />
- Helligkeit der Einzelfarben &uuml;ber Tastenkombination regeln<br />
- 433 sendet bei HOCH Ein und bei RUNTER aus<br />
- Melodien spielen (1812 - noch so ein Klassiker f&uuml;r Props)<br />
<br />
Momentan ist der Speicher zu einem Drittel in Benutzung - nicht schlecht, wenn man bedenkt, dass die IR und 433MHz Remote Bibliothek schon drin ist.<br />
<br />
Es fehlt noch die Integration der warmweiﬂen LED und der UV LED und eine m&ouml;glichst gescheite Anzeige der Men&uuml;punkte, allzu viele PINS bleiben nicht mehr - geplant war eigentlich eine der kleinen 5x7 LED Matrizen zu benutzen. Nur ein PWM ist noch &uuml;ber (Warmweiss?). UV werde ich nicht regeln m&uuml;ssen, denke ich. Zur Not liegt noch der ein oder andere Attiny45 in der Kiste, sodass ich die RGBs ausgliedern k&ouml;nnte.<br />
<br />
<h3>Bilder</h3>

<a rel="facebox" href="pics/20130507_0105442013-05-07.jpg"><img src="pics/th_20130507_0105442013-05-07.jpg"></a>
<a rel="facebox" href="pics/20130503_2222352013-05-03.jpg"><img src="pics/th_20130503_2222352013-05-03.jpg"></a>
<a rel="facebox" href="pics/led2013-05-03.jpg"><img src="pics/th_led2013-05-03.jpg"></a>
<p>
<h3>Links</h3>
GIT: [<a target="blank" href="https://github.com/davedarko/sonic_screwdriver">https://github.com/davedarko/sonic_screwdriver</a>]<br>
DOCS: [<a target="blank" href="https://docs.google.com/spreadsheet/ccc?key=0Auq_Z1mfg4hwdEFNRVJpVGdnSDBtM1d6UVVIclFtREE&usp=sharing
">https://docs.google.com/</a>]<br>
CIRCUIT: [<a target="blank" href="http://www.circuits.io/circuits/3604
">http://www.circuits.io/circuits/3604</a>]<p>

Vorlagen / Beispiele: <br>
<a href="http://www.instructables.com/id/Sonic-Screwdriver-TV-B-Gone-Conversion/">http://www.instructables.com/id/Sonic-Screwdriver-TV-B-Gone-Conversion/</a><br>
<a href="http://salviusrobot.blogspot.de/2012/12/diy-sonic-screwdriver.html">http://salviusrobot.blogspot.de/2012/12/diy-sonic-screwdriver.html</a><br>
<a href="http://salviusrobot.blogspot.de/2013/04/sonic-screwdriver-schematics.html">http://salviusrobot.blogspot.de/2013/04/sonic-screwdriver-schematics.html</a>
<p>Tags: sonic screwdriver