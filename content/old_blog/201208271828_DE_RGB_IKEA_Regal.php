<h2>The Wall</h2>
27.08.2012 - 18:28<p>
Nachdem ich mir wortw&ouml;rtlich die Z&auml;hne an diesem Projekt ausgebissen habe, muss es hier auch endlich Erw&auml;hnung finden. Urspr&uuml;nglich sollte mein Raumteiler - ein 5x5 Regal vom schwedischen M&ouml;belhinterherwerfer mit 25 RGB Modulen ausgetattet werden. Bisher sind es erst 9. Die Basis/ das Vorbild f&uuml;r den Aufbau und den Code sind BlinkM Lights von ThingM.<p> <h2>Die Platine</h2><br />
Eine Platine ist eigentlich unn&ouml;tig, da man alle Komponenten auch im deadbug Stil h&auml;tte zusammen bringen k&ouml;nnen. Da ich eh schon immer einmal eigene Platinen &auml;tzen wollte, habe ich mit Hilfe von Inkscape ein Layout erstellt und im CopyShop meines Vertrauens auf geeignetes Paper gebracht. Ich entschied mich f&uuml;r die Tonertransfer Methode. Bei reichelt erstand ich ein Einstiegsset f&uuml;r Platinen&auml;tzen und folgte der Anleitung. Auf dem Bild ist meine allererste Platine zu sehen.<br />
<a rel="facebox" href="../img/IMG_20120721_1521482012-08-07.jpg">
<img src="../img/th_IMG_20120721_1521482012-08-07.jpg">
</a><br />
<br />
<h2>Der Erste und der Rest</h2><br />
Der Code entstammt dem Ghetto Pixels Projekt auf <a href="http://www.instructables.com/id/Ghetto-Pixels-Building-an-open-source-BlinkM/">http://www.instructables.com/id/Ghetto-Pixels-Building-an-open-source-BlinkM/</a>. Der f&uuml;r gemeinesame Kathode umgeschriebene Code erf&uuml;llte wunderbar seinen Zweck. In der ersten Version benutzte ich noch den BlinkM Code und invertierte den Farbwert. Das Ergebnis entsprach aber nicht meiner Vorstellung und die Lampen liessen sich auch nicht ausschalten. Auch hatte ich vor dem Einl&ouml;ten bei den meissten Lampen vergessen, den Fuse f&uuml;r den OSC OUT abzuschalten, so dass die gr&uuml;ne Lampe st&auml;ndig leuchtete. Es musste eine L&ouml;sung her, die sich mir nur in vorm einer selbstgebastelten SPI-W&auml;scheklammer Adapter bot. <br />
<br />
<a rel="facebox" href="../img/IMG_20120822_1352542012-08-27.jpg">
	<img src="../img/th_IMG_20120822_1352542012-08-27.jpg">
</a>
<a rel="facebox" href="../img/IMG_20120723_1441462012-08-07.jpg">
	<img src="../img/th_IMG_20120723_1441462012-08-07.jpg">
</a> 
<a rel="facebox" href="../img/IMG_20120731_1816372012-08-07.jpg">
	<img src="../img/th_IMG_20120731_1816372012-08-07.jpg">
</a>
<br />
<br />
Nach all dem Hickhack mit den falschen Adressen, der falschen Software und den nicht richtig gesetzten fuses wollte ich schon drei Kreutze machen, aber es gelang mir dann doch ein breadboard-approved-proof-of-concept zu basteln. <br />
<br />
<iframe width="560" height="315" src="http://www.youtube.com/embed/xaHpkSM0YQw" frameborder="0" allowfullscreen></iframe><br />
<br />
<h2> The Wall</h2><br />
Was fehlte war also nur noch das verteilen im Raumteiler. Aus ein paar alten USB Kabeln auf L&auml;nge geschnitten hatte ich die 9 Ghettopixel verbinden wollen. Aus Mangel an einer Abisolierzange geschah dann, woran ich im Traum nie dachte; ein St&uuml;ck Schneidezahn ging verloren o.O . Ich habe mir also tats&auml;chlich die Z&auml;hne an diesem Projekt ausgebissen. Zu allem &Uuml;berfluss blieb die Kette auch mitten im Programm einfach stehen! Ich war frustriert. Ohne Ansatz. Dachte I2C ist tats&auml;chlich nicht daf&uuml;r geeignet. Erst heute, 4 Tage sp&auml;ter habe ich eine kalte L&ouml;tstelle entdeckt und die Spannungsversorgung mit den n&ouml;tigen Kennzahlen versehen. Seit 2 Stunden l&auml;uft die Kette nun wie eine Eins :)<br />
<br />
Hier noch ein Video der Kette, allerdings zum Zeitpunkt wo sie einschl&auml;ft. <br />
<iframe width="560" height="315" src="http://www.youtube.com/embed/ES_UFQHU4dg" frameborder="0" allowfullscreen></iframe><br />
<br />
<h2>Zukunft</h2><br />
F&uuml;r das Geh&auml;use und die Verkabelung habe ich mir bereits ein paar USB 1.1 Hubs besorgt, die wohl die ideale Form daf&uuml;r haben. Auch den ein oder anderen Tischtennisball muss ich mir noch besorgen. Sonst bin ich super zufrieden. Es muss noch etwas Software her, dass die Wand noch interaktiv wird.<br />
<br />
<h2>Update 07.05.2013</h2><br />
Leider sind mir nach und nach LEDs oder Attinys abgesprungen, der Arduino ist auch hin und der raspberry schl&auml;ft auch in letzter Zeit gerne mal ein. 