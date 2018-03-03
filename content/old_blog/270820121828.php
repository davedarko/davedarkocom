<h2>The Wall</h2>
27.08.2012 - 18:28<p>
Nachdem ich mir wortw�rtlich die Z�hne an diesem Projekt ausgebissen habe, muss es hier auch endlich Erw�hnung finden. Urspr�nglich sollte mein Raumteiler - ein 5x5 Regal vom schwedischen M�belhinterherwerfer mit 25 RGB Modulen ausgetattet werden. Bisher sind es erst 9. Die Basis/ das Vorbild f�r den Aufbau und den Code sind BlinkM Lights von ThingM.<p> <h2>Die Platine</h2><br />
Eine Platine ist eigentlich unn�tig, da man alle Komponenten auch im deadbug Stil h�tte zusammen bringen k�nnen. Da ich eh schon immer einmal eigene Platinen �tzen wollte, habe ich mit Hilfe von Inkscape ein Layout erstellt und im CopyShop meines Vertrauens auf geeignetes Paper gebracht. Ich entschied mich f�r die Tonertransfer Methode. Bei reichelt erstand ich ein Einstiegsset f�r Platinen�tzen und folgte der Anleitung. Auf dem Bild ist meine allererste Platine zu sehen.<br />
<a rel="facebox" href="pics/IMG_20120721_1521482012-08-07.jpg"><br />
<img src="http://davedarko.com/pics/th_IMG_20120721_1521482012-08-07.jpg"></a><br />
<br />
<h2>Der Erste und der Rest</h2><br />
Der Code entstammt dem Ghetto Pixels Projekt auf <a href="http://www.instructables.com/id/Ghetto-Pixels-Building-an-open-source-BlinkM/">http://www.instructables.com/id/Ghetto-Pixels-Building-an-open-source-BlinkM/</a>. Der f�r gemeinesame Kathode umgeschriebene Code erf�llte wunderbar seinen Zweck. In der ersten Version benutzte ich noch den BlinkM Code und invertierte den Farbwert. Das Ergebnis entsprach aber nicht meiner Vorstellung und die Lampen liessen sich auch nicht ausschalten. Auch hatte ich vor dem Einl�ten bei den meissten Lampen vergessen, den Fuse f�r den OSC OUT abzuschalten, so dass die gr�ne Lampe st�ndig leuchtete. Es musste eine L�sung her, die sich mir nur in vorm einer selbstgebastelten SPI-W�scheklammer Adapter bot. <br />
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
Was fehlte war also nur noch das verteilen im Raumteiler. Aus ein paar alten USB Kabeln auf L�nge geschnitten hatte ich die 9 Ghettopixel verbinden wollen. Aus Mangel an einer Abisolierzange geschah dann, woran ich im Traum nie dachte; ein St�ck Schneidezahn ging verloren o.O . Ich habe mir also tats�chlich die Z�hne an diesem Projekt ausgebissen. Zu allem �berfluss blieb die Kette auch mitten im Programm einfach stehen! Ich war frustriert. Ohne Ansatz. Dachte I2C ist tats�chlich nicht daf�r geeignet. Erst heute, 4 Tage sp�ter habe ich eine kalte L�tstelle entdeckt und die Spannungsversorgung mit den n�tigen Kennzahlen versehen. Seit 2 Stunden l�uft die Kette nun wie eine Eins :)<br />
<br />
Hier noch ein Video der Kette, allerdings zum Zeitpunkt wo sie einschl�ft. <br />
<iframe width="560" height="315" src="http://www.youtube.com/embed/ES_UFQHU4dg" frameborder="0" allowfullscreen></iframe><br />
<br />
<h2>Zukunft</h2><br />
F�r das Geh�use und die Verkabelung habe ich mir bereits ein paar USB 1.1 Hubs besorgt, die wohl die ideale Form daf�r haben. Auch den ein oder anderen Tischtennisball muss ich mir noch besorgen. Sonst bin ich super zufrieden. Es muss noch etwas Software her, dass die Wand noch interaktiv wird.<br />
<br />
<h2>Update 07.05.2013</h2><br />
Leider sind mir nach und nach LEDs oder Attinys abgesprungen, der Arduino ist auch hin und der raspberry schl�ft auch in letzter Zeit gerne mal ein. 