<h2>BINGO</h2>
29.09.2012 - 00:00<p>
Finally! Ich weiﬂ noch nicht genau wie, aber es l‰uft endlich!<p> auto lo<br />
<br />
iface lo inet loopback<br />
iface eth0 inet dhcp<br />
<br />
auto wlan0<br />
iface wlan0 inet static<br />
address 192.168.0.113<br />
netmask 255.255.255.0<br />
gateway 192.168.0.1<br />
wpa-driver wext<br />
wpa-ssid ****<br />
wpa-proto WPA2<br />
wpa-key-mgmt WPA-PSK<br />
wpa-psk ****<br />
<br />
<br />
wird wohl am versteckten ssid Namen gelegen haben. <p>Tags: Raspberry PI, W-Lan