#!/bin/bash

#get the temperature of the pi and save it to answers folder

echo $(date)  "," $(/opt/vc/bin/vcgencmd measure_temp) >> /var/www/html/arnolfini-survey/answers/temp.txt
