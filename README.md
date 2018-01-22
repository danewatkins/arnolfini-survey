# arnolfini-survey

## An animated kiosk survey designed for Arnolfini in Bristol to evaluate audience engagement with their artistic programme.
This repository contains the code and images to run an audience evaluation survey as an offline kiosk and this README.md file contains the instructions to set up a Raspberry Pi as a kiosk.
The survey is built in HTML, Javascript and PHP. The first version of the kiosk displayed the survey as a live website but the internet connection was irregular causing the survey to fail and creating a poor user experience.

This is the second version and the survey runs off a local server on the Pi. The survey uses PHP to write the audience's answers to a new text file every hour. The Pi uses lftp to synchronise the answers with an online website where the responses can be evaluated remotely. Using lftp covers drops in the internet, if it is down for several days lftp will back up the files when it is working again or less congested such as early morning.

At present 28th August 2017 all these pages are copyright Dane Watkins. That is just until I have time to find the right license.

These instructions will install the survey on a Raspberry Pi running a Waveshare 10.1" HDMI LCD (B) touchscreen. I am using a MacBook AIR so the instructions for burning the Raspberry Pi image are for OSX.

Lines starting   ```$: [command]``` indicate that the commands should be run in the Pi terminal.
Where [command] is a command.

### Create a Raspbian SD card
https://www.raspberrypi.org/downloads/raspbian/  
Download Raspbian image, these instructions work for Raspbian Stretch and may give different results for later versions.

https://www.sdcard.org/downloads/formatter_4/  
Use sd card formatter as OSX disk utility has problems formatting fat drives

https://etcher.io/  
Use etcher to burn the image onto the sd card

### Configure Pi to work with Waveshare 10.1" HDMI LCD (B) touchscreen.
Use a card reader to mount the sd card onto your Mac.
Add the following at the end of boot/config.txt which can be found in the boot partition on the sd card:
```
max_usb_current=1  
hdmi_group=2  
hdmi_mode=1  
hdmi_mode=87  
hdmi_cvt 1280 800 60 6 0 0 0
```
### Set up Raspberry Pi
http://alexba.in/blog/2013/01/04/raspberrypi-quickstart/
```
$: sudo apt-get update
$: sudo apt-get upgrade
$: sudo apt-get dist-upgrade
```

!! CHANGE PASSWORD !!
Raspberry Pi default username is 'pi' and the default password is 'raspberry' if you don't change the password and allow ssh on the Pi then anyone will be able to gain access to the pi and all its data.
```
$: sudo raspi-config
```

### Install apache
```
$: sudo apt-get install apache2 -y  
```
Raspbian creates server permissions as root  
Check http://localhost in chrome

### Install PHP
```
$: sudo apt-get install php5 libapache2-mod-php5 -y
```

I had problems installing MySQL onto the Pi so I rewrote the code and now it saves the data to a text file  

### Clone git files into html folder

Git is installed in Raspbian Stretch  
```
$: cd /var/www/html
$: sudo git clone https://github.com/danewatkins/arnolfini-survey.git
```
Create a new folder
```
$: sudo mkdir /var/www/html/arnolfini/answers
$: sudo chmod 0777 /var/www/html/arnolfini/answers
```
/pages/survey.js collects the responses  
/pages/inc.php writes the data  

### Monitor Pi core temperature
The previous version of the kiosk failed due to multiple reasons, one of which may have been overheating. We were using a Pi 3 in an enclosed space in a warm gallery. This script allows remote monitoring of the Pi's core temperature. It is not necessary if the Pi is registered as device with remote-iot.com as their service provide temperature monitoring as well as remote access.
3rd September 2017, the Pi's temperature has remained stable and it is unlikely that overheating was the cause of the problem.
```
$: /opt/vc/bin/vcgencmd measure_temp
```
This command prints the Raspberry Pis core temperature.  
scripts/temp.sh writes the temperature to answers/temp.txt

### Install the best text editor
```
$: sudo apt-get install vim
```

### Set up folder to hold answers
```
$: sudo mkdir arnolfini/answers
$: sudo chmod 0755 arnolfini/answers
```
This folder stores the data generated by the audience's responses to the survey. The survey generates the files in the format
```
answers-[year]-[month]-[day]-[hour].txt
```
ie:
```
answers-2017-08-28-14.txt
```
Which stores all the data for 2pm 28th August 2017.
The survey generates a new file for each hour.

### Install lftp
lftp is a neat little app that syncs local data with a remote website folder
```
$: sudo apt-get install lftp
```
scripts/syncAnswers syncs the folder with a website folder.

WARNING! Move scripts/syncAnswers out of git repo if you are going to enter website passwords
```
$: sudo mv /var/www/html/arnolfini-survey/scripts/syncAnswers /var/www/html/syncAnswers
```
WARNING! Save answers to folder out of public_html so that it can not be publicly accessed but the data can be read by password protected dashboard.

Change the authorisation details for website
```
$: sudo vim /var/www/html/arnolfini-survey/scripts/syncAnswers
```

### Set up cron job to collect data
Run crontab as root as the permissions on the web server are all root
```
$: sudo crontab -e
```
add these lines
```
 */10 * * * * /var/www/html/arnolfini-survey/scripts/temp.sh
 1 * * * * /var/www/html/syncAnswers
```
This records the Pi's core temperature every 10 minutes and syncs the answers folder with the website every hour. This is not necessary if the pi is connected via remote-iot.com as their service records the pi's temperature.
```
$: sudo chmod 0777 /var/www/html/arnolfini-survey/scripts/temp.sh
$: chmod 0777 /var/www/html/syncAnswers
```
By default on Debian the cron log isn't working
open
```
$: sudo vim /etc/rsyslog.conf
```
and uncomment the line
```
# cron.*
```
restart rsyslog via
```
$: sudo /etc/init.d/rsyslog restart
```
Thanks to https://raspberrypi.stackexchange.com/questions/3741/where-do-cron-error-message-go

Check cron log to see if the crontabs are working
```
$: sudo vim /var/log/cron.log
```
view the log at
```
$:/var/log/cron.log
```
### Set up Pi for kiosk mode
Copy the autostart file into home .config folder which is read on reboot.
```
cp /etc/xdg/lxsession/LXDE-pi/autostart  /home/pi/.config/lxsession/LXDE-pi/autostart
```
Open the file in your favourite text editor
```
sudo vim /home/pi/.config/lxsession/LXDE-pi/autostart
```
Add these lines to run Chrome in kiosk mode on reboot
```
#@xscreensaver -no-splash
@point-rpi
@xset s off
@xset -dpms
@xset s noblank
@chromium-browser --kiosk --start-maximised --incognito --disable-pinch --overscroll-history-navigation=0 http://localhost/arnolfini-survey/pages/1.php
```
--kiosk  
runs Chrome fullscreen  
--start-maximised runs Chrome fullscreen to the maximum screen dimensions  
--disable-pinch
disables gesture on the touch screen and stope the user from enlarging the page through pinch control  
--overscroll-history-navigation=0  
stops the users from going back a page by swiping left  
--incognito  creates a new Chrome incognito session

### Hide cursor
There are several Raspberry Pi kiosk tutorials that recommend using ```unclutter``` to hide the mouse. Our first version of the survey used unclutter and it may have been one of the reasons why the touch failed, it could also have been the heat and the poor connectivity. But there were times when touch wouldn't work navigating the local operating system. Personaly I would advise against using unclutter, I don't think it is very reliable.

Using css ```cursor:none``` to hide the cursor doesn't work in a kiosk. On reboot the mouse shows and is only hidden with a mouse movement not a touch movement. 

We found that the best way to hide the mouse was through the x-server.

```
sudo vim etc/lightdm/lightdm.conf
```
uncomment
```
#xserver-command = X
```
add -nocursor on line 91
```
#xserver-command = X -nocursor
```
### Connect remotely to Pi via
remote-iot.com

The free tier on remote-iot.com put a lots of resources on one server which can and does lose connection with the pi. This is obviously frustrating if you are a long way from the pi. The way to counter this problem is to run a daily cron job that re-establishes the connection, that is create a cron-jon of the intital shell command that create a link between the pi and remote-iot.com.
