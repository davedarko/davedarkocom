<h2>Gameboy Printer XI - Success</h2>
24.11.2013 - 10:06<p>
Nachdem meine Bilder irgendwie doch ziemlich falsch formatiert waren, habe ich mit php den Export nach den neuesten Erkenntnissen variiert. <br />
Beim eintragen in den Arduino Code und &uuml;bertragen sind mir meine zwei Import Nanos immer abgeschmiert, bis ich feststellen musste, dass die dann tats&auml;chlich keine 30000 bytes sondern nur 6500 bytes speichern k&ouml;nnen. Im allgemeinen weniger ein Problem, da meine Skripte eh nicht so groﬂ werden, aber doch schon ein wenig frech. Wer allerdings ein 5tel bezahlt, sollte sich &uuml;ber ein 5tel Leistung nicht beschweren.<br />
<br />
Mein erster Ansatz zum Bilder speichern erfolgte pro Zeile mit dem Wert 0,1,2,3 pro Pixel. Der Gameboy &uuml;bertr&auml;gt alles aber irgendwie anders. Ein 16 * 160 Block ist aufgeteilt in <br />
<ul>
<li>8 Bytepaare f&uuml;r einen 8*8 Pixelblock</li>
<li>20 dieser Pixelbl&ouml;cke f&uuml;r eine Zeile</li>
<li>2 Zeilen f&uuml;r einen Informationsschub</li>
</ul>
<strong>2 Bytes * 8 Linien * 20 Bl&ouml;cke * 2 Zeilen = 640 Bytes</strong><p>
<a rel="facebox" href="pics/20131124_0038072013-11-24.jpg"><img src="pics/th_20131124_0038072013-11-24.jpg"></a> 
<img src="gbapp_converter.php?file=./gameboyapp/20120101044519-TUXIES.dat&color=ffddbb">
<br />
<p>Tags: gameboy printer