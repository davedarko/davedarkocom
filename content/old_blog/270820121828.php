<h2>The Wall</h2>
27.08.2012 - 18:28<p>
Nachdem ich mir wortwörtlich die Zähne an diesem Projekt ausgebissen habe, muss es hier auch endlich Erwähnung finden. Ursprünglich sollte mein Raumteiler - ein 5x5 Regal vom schwedischen Möbelhinterherwerfer mit 25 RGB Modulen ausgetattet werden. Bisher sind es erst 9. Die Basis/ das Vorbild für den Aufbau und den Code sind BlinkM Lights von ThingM.<p> <h2>Die Platine</h2><br />
Eine Platine ist eigentlich unnötig, da man alle Komponenten auch im deadbug Stil hätte zusammen bringen können. Da ich eh schon immer einmal eigene Platinen ätzen wollte, habe ich mit Hilfe von Inkscape ein Layout erstellt und im CopyShop meines Vertrauens auf geeignetes Paper gebracht. Ich entschied mich für die Tonertransfer Methode. Bei reichelt erstand ich ein Einstiegsset für Platinenätzen und folgte der Anleitung. Auf dem Bild ist meine allererste Platine zu sehen.<br />
<a rel="facebox" href="pics/IMG_20120721_1521482012-08-07.jpg"><br />
<img src="http://davedarko.com/pics/th_IMG_20120721_1521482012-08-07.jpg"></a><br />
<br />
<h2>Der Erste und der Rest</h2><br />
Der Code entstammt dem Ghetto Pixels Projekt auf <a href="http://www.instructables.com/id/Ghetto-Pixels-Building-an-open-source-BlinkM/">http://www.instructables.com/id/Ghetto-Pixels-Building-an-open-source-BlinkM/</a>. Der für gemeinesame Kathode umgeschriebene Code erfüllte wunderbar seinen Zweck. In der ersten Version benutzte ich noch den BlinkM Code und invertierte den Farbwert. Das Ergebnis entsprach aber nicht meiner Vorstellung und die Lampen liessen sich auch nicht ausschalten. Auch hatte ich vor dem Einlöten bei den meissten Lampen vergessen, den Fuse für den OSC OUT abzuschalten, so dass die grüne Lampe ständig leuchtete. Es musste eine Lösung her, die sich mir nur in vorm einer selbstgebastelten SPI-Wäscheklammer Adapter bot. <br />
<br />
<a rel="facebox" href="pics/IMG_20120822_1352542012-08-27.jpg"><img src="http://davedarko.com/pics/th_IMG_20120822_1352542012-08-27.jpg"></a>
<a rel="facebox" href="pics/IMG_20120723_1441462012-08-07.jpg"><img src="http://davedarko.com/pics/th_IMG_20120723_1441462012-08-07.jpg"></a> 
<a rel="facebox" href="pics/IMG_20120731_1816372012-08-07.jpg"><img src="http://davedarko.com/pics/th_IMG_20120731_1816372012-08-07.jpg"></a><br />
<br />
Nach all dem Hickhack mit den falschen Adressen, der falschen Software und den nicht richtig gesetzten fuses wollte ich schon drei Kreutze machen, aber es gelang mir dann doch ein breadboard-approved-proof-of-concept zu basteln. <br />
<br />
<iframe width="560" height="315" src="http://www.youtube.com/embed/xaHpkSM0YQw" frameborder="0" allowfullscreen></iframe><br />
<br />
<h2> The Wall</h2><br />
Was fehlte war also nur noch das verteilen im Raumteiler. Aus ein paar alten USB Kabeln auf Länge geschnitten hatte ich die 9 Ghettopixel verbinden wollen. Aus Mangel an einer Abisolierzange geschah dann, woran ich im Traum nie dachte; ein Stück Schneidezahn ging verloren o.O . Ich habe mir also tatsächlich die Zähne an diesem Projekt ausgebissen. Zu allem Überfluss blieb die Kette auch mitten im Programm einfach stehen! Ich war frustriert. Ohne Ansatz. Dachte I2C ist tatsächlich nicht dafür geeignet. Erst heute, 4 Tage später habe ich eine kalte Lötstelle entdeckt und die Spannungsversorgung mit den nötigen Kennzahlen versehen. Seit 2 Stunden läuft die Kette nun wie eine Eins :)<br />
<br />
Hier noch ein Video der Kette, allerdings zum Zeitpunkt wo sie einschläft. <br />
<iframe width="560" height="315" src="http://www.youtube.com/embed/ES_UFQHU4dg" frameborder="0" allowfullscreen></iframe><br />
<br />
<h2>Zukunft</h2><br />
Für das Gehäuse und die Verkabelung habe ich mir bereits ein paar USB 1.1 Hubs besorgt, die wohl die ideale Form dafür haben. Auch den ein oder anderen Tischtennisball muss ich mir noch besorgen. Sonst bin ich super zufrieden. Es muss noch etwas Software her, dass die Wand noch interaktiv wird.<br />
<br />
<h2>Update 07.05.2013</h2><br />
Leider sind mir nach und nach LEDs oder Attinys abgesprungen, der Arduino ist auch hin und der raspberry schläft auch in letzter Zeit gerne mal ein. 