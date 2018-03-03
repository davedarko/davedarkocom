Nachdem meine Bilder irgendwie doch ziemlich falsch formatiert waren, habe ich mit php den Export nach den neuesten Erkenntnissen variiert.

Beim eintragen in den Arduino Code und &uuml;bertragen sind mir meine zwei Import Nanos immer abgeschmiert, bis ich feststellen musste, dass die dann tats&auml;chlich keine 30000 bytes sondern nur 6500 bytes speichern k&ouml;nnen. Im allgemeinen weniger ein Problem, da meine Skripte eh nicht so gro&szlig; werden, aber doch schon ein wenig frech. Wer allerdings ein 5tel bezahlt, sollte sich &uuml;ber ein 5tel Leistung nicht beschweren.

![don't know what that is](../img/20131124_0038072013-11-24.jpg "don't know what that is")

Mein erster Ansatz zum Bilder speichern erfolgte pro Zeile mit dem Wert 0,1,2,3 pro Pixel. Der Gameboy &uuml;bertr&auml;gt alles aber irgendwie anders. Ein 16 * 160 Block ist aufgeteilt in 

- 8 Bytepaare f&uuml;r einen 8*8 Pixelblock
- 20 dieser Pixelbl&ouml;cke f&uuml;r eine Zeile
- 2 Zeilen f&uuml;r einen Informationsschub


__2 Bytes * 8 Linien * 20 Bl&ouml;cke * 2 Zeilen = 640 Bytes__