# arnolfini-survey

## This is an animated kiosk survey designed for Arnolfini in Bristol to evaluate audience engagement with their artistic programme.
At present 28th August 2017 all these pages are copyright Dane Watkins. That is just until I have time to find the right license.

These instructions will install the survey on a Raspberry Pi running a waveshare 10.1 inch screen. I am using a MacBook AIR so the instructions are for OSX.

### Burn image to sd card

https://www.sdcard.org/downloads/formatter_4/
Use sd card formatter as OSX disk utility has problems formatting fat
https://www.raspberrypi.org/downloads/raspbian/
Download raspbian image
https://etcher.io/
Etcher to burn the image onto the sd card

### Update /boot/config.txt on the card
Configure Pi  to work with Waveshare 10.1 touchscreen
add the following at the end of boot/config.txt:

max_usb_current=1
hdmi_group=2
hdmi_mode=1
hdmi_mode=87
hdmi_cvt 1024 600 60 6 0 0 0

### Set up Raspberry Pi
http://alexba.in/blog/2013/01/04/raspberrypi-quickstart/
sudo apt-get update
sudo apt-get upgrade
sudo apt-get dist-upgrade

### Install apache

sudo apt-get install apache2 -y
Raspbian creates server permissions as root
check http:localhost

### Install PHP

sudo apt-get install php5 libapache2-mod-php5 -y

I had problems installing MySQL onto the Pi so I rewrote the code and now it saves the data to a text file
Create a new folder
$: sudo mkdir /var/www/html/arnolfini/answers
$: chmod 0777 /var/www/html/arnolfini/answers

The file /pages/inc.php writes the data. Javascript  

### Clone git files into html folder

$: cd /var/www/html
$: sudo git clone https://github.com/danewatkins/arnolfini-survey.git

### Check temperature of files
$: /opt/vc/bin/vcgencmd measure_temp
This command prints the Raspberry Pis core temperature.
scripts/temp.sh writes the temperature to answers/temp.txt

### Install the best text editor
$: sudo apt-get install vim

### Set up folder to hold answers
:$ sudo mkdir arnolfini/answers
:$ sudo chmod 0755 arnolfini/answers

### Install lftp
lftp is a neat little app that syncs local data with a remote website folder
$: sudo apt-get install lftp
scripts/syncAnswers syncs the folder with a website folder.

WARNING! Move scripts/syncAnswers out of git repo if you are going to enter website passwords
$: sudo mv /var/www/html/arnolfini-survey/scripts/syncAnswers /var/www/html/syncAnswers

The answers from the survey can then be pulled into an online database and I can check the Pis temperature.

$: sudo vim /var/www/html/arnolfini-survey/scripts/syncAnswers
Change the authorisation details for website

### Set up cron job to collect data
Remember to chmod files
$: sudo crontab -e
add these line
 */10 * * * * /var/www/html/arnolfini-survey/scripts/temp.sh
 1 * * * * /var/www/html/syncAnswers
/*
Remember
Check cron log to see if the crontabs are working
:$ vim /var/log/cron.log

### Set up Pi for kiosk mode

cp /etc/xdg/lxsession/LXDE-pi/autostart /home/pi/.config/lxsecp /etc/xdg/lxsession/LXDE-pi/autostart /home/pi/.config/lxsession/LXDE-pi/autostart

sudo vim /home/pi/.config/lxsession/LXDE-pi/autostart

#@xscreensaver -no-splash  # comment this line out to disable screensaver
@xset s off
@xset -dpms
@xset s noblank
@chromium-browser --incognito --kiosk http://localhost/  # load chromium afte
@chromium-browser --kiosk --start-maximised --incognito --disable-pinch --overscroll-history-navigation=0

### Hide cursor
sudo vim etc/lightdm/lightdm.conf
uncomment
xserver-command=X
add -nocursor
line 91

### Connect remotely to Pi via
remote-iot.com
