# arnolfini-survey 

## This is an animated kiosk survey designed for Arnolfini in Bristol to evaluate audience engagement with their programme.
At present 28th August 2017 all these pages are copyright Dane Watkins. That is just until I have time to find the right licence.

These instructions will install the survey on a Raspberry Pi. These instructions are for a pi running a waveshare 10.1 inch screen. I am using a MacBook AIR so the instructions are for OSX.

### Burn image to sd card

https://www.sdcard.org/downloads/formatter_4/
Use sd card formatter as OSX disk utility has problems formatting fat 
https://etcher.io/
Etcher to burn the image

### Update /boot/config.txt on the card
add the following at the end of the file:

max_usb_current=1
hdmi_group=2
hdmi_mode=1
hdmi_mode=87
hdmi_cvt
1024 600 60 6 0 0 0

### Install apache

sudo apt-get install apache2 -y

### Install PHP

sudo apt-get install php5 libapache2-mod-php5 -y

I had problems installing MySQL onto the Pi so I rewrote the code and now it writes the data to a text file /var/www/htm. The file /pages/inc.php writes the data. Javascript  

### Clone git files into html folder

$: sudo cd /var/www/html 
$: sudo git clone https://github.com/danewatkins/arnolfini-survey.git

### Check temperature of files
$: /opt/vc/bin/vcgencmd measure_temp
This command prints the Raspberry Pis core temperature.
scripts/temp.sh prints writes the temperature to answers/temp.txt

### Install lftp
lftp syncs all data in the answers folder with website folder
The answers from the survey can then be pulled into an online database and I can check the Pis temperature.
$: sudo apt-get install lftp

### Install the best text editor
$: sudo apt-get install vim

### Set up cron job to collect data
Rember to chmod files

### Set up Pi for kiosk mode

cp /etc/xdg/lxsession/LXDE-pi/autostart /home/pi/.config/lxsecp /etc/xdg/lxsession/LXDE-pi/autostart /home/pi/.config/lxsession/LXDE-pi/autostart

sudo vim /home/pi/.config/lxsession/LXDE-pi/autostart

#@xscreensaver -no-splash  # comment this line out to disable screensaver
@xset s off
@xset -dpms
@xset s noblank
@chromium-browser --incognito --kiosk http://localhost/  # load chromium afte

### Hide cursor
sudo vim etc/lightdm/lightdm.conf
uncomment
xserver-command=X
add -nocursor
line 91
