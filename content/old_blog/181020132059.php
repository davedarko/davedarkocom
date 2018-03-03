<h2>Simple SD Audio Player (mono) von ELM-chan.org</h2>
18.10.2013 - 20:59<p>
Eine Zeit lang habe ich interessante Projekte rund um die AVRs gesucht und bin w&auml;hrend dessen auf den Audio Player von elm-chan.org gestoﬂen, der mit einem Attiny85 und einem SD Kartenslot auskommt. In der Fortsetzung beschreibe ich die Probleme auf die ich gestoﬂen bin und worauf eventuell zu achten ist.<p> <h2>0. Die Grundstimmung</h2><br />
Einfach ein gutes Gef&uuml;hl, beim l&ouml;ten den Iron Man Soundtrack laufen zu lassen.<br />
<iframe width="560" height="32" src="//www.youtube.com/embed/videoseries?list=PL3C2CF7FD75CB61B4" frameborder="0" allowfullscreen></iframe><br />
<br />
<h2>1. Der SD Karten Adapter</h2>
Die Zeichnung der Schaltung auf elm-chan.org bezieht sich auf die Anschl&uuml;sse eines MicroSD Adapters. Auf <a href="http://elasticsheep.com/2010/01/reading-an-sd-card-with-an-atmega168/">http://elasticsheep.com/</a> fand ich f&uuml;r meinen groﬂen SD Kartenadapter, der gleichzeitig als Breadboardadapter herhalten sollte, die entsprechenden Anschl&uuml;sse. Nachdem ich alles dem entsprechend verkabelt hatte, viel mir auf, dass in der Schaltung ung&uuml;nstiger Weise der Masse Draht mit 3,3V beschriftet war, sodass ich versehentlich mit dem Schalter die DO / PB0 Leitung auf Plus statt Masse gezogen habe. Beim Schreiben bemerke ich, dass das die Batterie Spannung kennzeichnen soll. <br />
<a rel="facebox" href="pics/bg63aNyL59PYYre0td1QDYHA2013-10-18.jpg"><img src="../img/th_bg63aNyL59PYYre0td1QDYHA2013-10-18.jpg"></a>
<br />
<h2>2. Die Programmierung</h2>
... sollte eigentlich ein alter Hut sein, da ich inzwischen berufsbedingt an einem Mac arbeiten muss und diesen auch privat verwende, galt es aber AVRdude und AVR Burn-o-mat - treue Linux Gef&auml;hrten, nach zu installieren und einzurichten. Beim Programmieren des Attiny85 mit der vorkompilierten HEX File meckerte AVRdude aber, sodass ich wie auf der Seite vorgeschlagen die FUSE "Zeilen" per HEX Editor herausnehmen musste und nachtr&auml;glich per AVRdude setzen sollte. Dabei half mir <a href="http://www.engbedded.com/fusecalc/">http://www.engbedded.com/fusecalc/</a> ungemein, da es mir die AVRdude Argumente gleich mit angab. <br />
<br />
<h2>3. Die Soundfiles</h2>
Die einzigen Soundfiles, die bisher funktionieren sind auf einer Weseite erzeugt worden, die TTS (TextToSpeech) benutzt. <br />
<a href="http://www2.research.att.com/~ttsweb/tts/demo.php">http://www2.research.att.com/~ttsweb/tts/demo.php</a><br />
Nachtrag: habe wohl zu lange Dateinamen gew&auml;hlt, meine eigens erstellten Marvin Soundfiles spielen auch ab :)<br /> 
<br />
<h2>4. Missverst&auml;ndnisse vermeiden</h2>
Irgendwie habe ich die Funktionsweise erst falsch verstanden, da ich dachte, dass die Samples per Knopfdruck abgespielt werden. Tats&auml;chlich werden diese aber immer abgespielt und der Knopfdruck wechselt nur zwischen den Dateien. <br />
<br />
<h2>5. Verbesserungen</h2>
Man k&ouml;nnte sicherlich noch einen Verst&auml;rker zwischen Ausgang und Lautsprecher setzen, da das Signal doch sehr schwach wirkt. Ich habe nur den Mono Teil ausprobiert, da ich keinen HSVProgrammer besitze. Diesen ben&ouml;tigt man, wenn man den RESET PIN anderweitig benutzen m&ouml;chte. Ein Tiefpass Filter wird noch empfohlen und ich sollte sicher nicht die 5V vom USB Adapter benutzen, sondern 3.3V wie skizziert benutzen.<p>&nbsp;<br />
<h2>6. Video</h2>
<iframe width="560" height="420" src="//www.youtube.com/embed/9Uyd5C3iVjM" frameborder="0" allowfullscreen></iframe>
<br />
 Tags: <i>SD, Attiny85</i><br />