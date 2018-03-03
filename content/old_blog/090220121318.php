<h2>LM75 und Arduino</h2>
09.02.2012 - 13:18<p>
Inzwischen blende ich auch Temperatur Information(en) und das Datum in die Bilder meiner Webcam ein. Dank image_magick war das sehr einfach möglich. <br />
<br />
mogrify -fill white -stroke black -strokewidth 1.5 -font FreeMono-Fett -pointsize 24 -gravity southwest -annotate +5+5 "$temp2" $time.png<p> <div class="github"><script src="https://gist.github.com/1779562.js?file=temperatur.pde"></script></div><p>Tags: arduino, temp