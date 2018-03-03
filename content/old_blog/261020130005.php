<h2>ALPS Touchpad am Arduino</h2>
26.10.2013 - 00:05<p>
W&auml;hrend meiner Sortier und Aufr&auml;umaktionen, die meistens eher im Chaos oder der puren Verzweiflung enden, bin ich auf ein altes Touchpad aus meinem Notebook gesto&szlig;en. Ich muss wohl gedacht haben, wenn da nur vier Kontakte zum Notebook gehen, sollte man damit sicher noch mal was anfangen k&ouml;nnen.
<h2>Einleitung</h2>
Ein wenig schlau googlen und ich fand heraus, dass die meisten Touchpads wohl &uuml;ber PS / 2 kommunizieren. Ein Protokoll was ich des &ouml;fteren auf der Hackaday Seite in Benutzung mit Mikrocontrollern sah und schnell die ersten Projekte fand.<br />
<h2>Pinbelegung</h2>
Anhand der unterschiedlichen ALPS Pads und dem Oscillator dessen Mittelbein gegen Masse geht und meinem Multimeter auf Widerstandsmessung eingestellt, konnte ich die Pinbelegung dann doch schnell bestimmen. Mein reaktiviertes Atmega8 Board, welches ich Arduino IDE f&auml;hig l&ouml;tete sendet mir nun &uuml;ber die serielle Schnittstelle die X und Y Differenzen, die mein Fingerstreifen ausl&ouml;sen.<p>
<a rel="facebox" href="pics/20131026_0009292013-10-26.jpg"><img src="../img/th_20131026_0009292013-10-26.jpg"></a>
<a rel="facebox" href="pics/20131026_0007452013-10-26.jpg"><img src="../img/th_20131026_0007452013-10-26.jpg"></a>
<br />
<h2>Die wichtigsten Links</h2>
Der Weg zur Arduino Bibliothek und dem Example Sketch - bei neueren Versionen der Arduino Umgebung muss noch eine Zeile in der Header Datei ps2.h ge&auml;ndert werdenHier soll "WProgram.h" mit "Arduino.h" ersetzt werden.<br>
<a href="http://playground.arduino.cc/ComponentLib/Ps2mouse">http://playground.arduino.cc/ComponentLib/Ps2mouse</a><p>
Eine ausf&uuml;hrliche Beschreibung des Protokolls (vielleicht f&uuml;r sp&auml;ter interessant) - dank der vorhandenen Arduino Bibliothek aber zweitrangig.<br>
<a href="http://www.marjorie.de/ps2/ps2_protocol.htm">http://www.marjorie.de/ps2/ps2_protocol.htm</a><br>
<a href="http://www.computer-engineering.org/ps2mouse/">http://www.computer-engineering.org/ps2mouse/</a><br>