# PHP-APRS-Client
an APRS client programmed using PHP.

# prerequisites
-  jq, installed using : ```sudo apt install jq```
-  curtail, visit here and build from source https://github.com/Comcast/Infinite-File-Curtailer
-  apache2, ```sudo apt install apache2```
-  PHP, ```sudo apt install php```
-  direwolf, ```sudo apt install direwolf``` or build from source https://github.com/wb2osz/direwolf
-  bash
-  linux OS

# step by step
## create service direwolf
- ```cd /var/www/html```
- ```sudo git clone https://github.com/YD1RUH/PHP-APRS-Client.git```
- ```sudo mv PHP-APRS-Client APRS```
- ```cd APRS```
- open the service file with nano ```sudo nano direwolfd.service```
- change ther service with your callsign near ```grep``` command
- ```sudo cp direwolfd.service /etc/systemd/system/```
- ```sudo systemctl daemon-reload```
- ```sudo systemctl enable direwolfd.service```
- ```sudo systemctl start direwolfd.service```

## start service apache2 server
- ```sudo /etc/init.d/apache2 start```

## use the system
- open browser
- access http://localhost/APRS

## enjoy the system 73 good luck
