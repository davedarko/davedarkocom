<h2>Arduino über den Browser steuern</h2>
08.12.2011 - 23:57<p>
Ein kleiner Erfolg für den Tag. Ich kann nun mit meinem Android Pad und eigentlich allen anderen Internet - fähigen Geräten eine am Arduino angeschlossene LED steuern. woot!<p> Das Skript auf dem Arduino ist eigentlich nur:<br />
<br />
Lese seriell <br />
 wenn seriell = f dann Lampe aus<br />
 wenn seriell = n dann Lampe an<br />
Ende<br />
<br />
Auf dem Server läuft dann folgendes:<br />
<br />
$set = "stty -F /dev/ttyUSB0 9600 -hupcl ; ";<br />
if ($_POST['lampe']=='on') shell_exec($set."echo 'n' >/dev/ttyUSB0");<br />
if ($_POST['lampe']=='off') shell_exec($set."echo 'f' >/dev/ttyUSB0");<br />
<br />
<div class="github"><script src="https://gist.github.com/1521875.js?file=remote.pde"></script></div>
der -hupcl steht für <i>hang up on closeing</i> und das minus verneint das. Ist unbedingt nötig, da sonst der Arduino einfach resettet - ungünstig um code auszuführen.<p>Tags: arduino, php
