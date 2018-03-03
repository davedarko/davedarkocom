<h2>FTP Download Script für GBPrinterapp</h2>
25.11.2009 - 12:41<p>
Ein kleines App, welches vom FTP Server TXT Dateien vom Server runterlädt, löscht und im Home Verzeichnis speichert.<p>
<h2>Feature</h2>
osd notify Mitteilung.<p>
<pre>
#!/bin/bash

ftp_site=127.0.0.1
username=user
passwd=password
HOME=/home/dave/Gameboyapp

cd $HOME
frint=$(
ftp -in &lt;&lt;EOF
open $ftp_site
user $username $passwd
bin
cd Gameboyapp
mls *.txt - 
mget *.txt
mdelete *.txt
close 
bye
EOF
)

if [ "$frint" != "" ] ;
then (
#    frint=${frint:0:100}
    notify-send "GAMEBOY Printer" "Neue Dateien:
    $frint " -i /home/dave/Bilder/gbapp.png
)
fi
</pre>