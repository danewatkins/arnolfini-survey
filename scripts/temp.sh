#!/bin/bash
#get the temperature of the pi and save it to answeres folder

echo $(date)  "," $(/opt/vc/bin/vcgencmd measure_temp) >> ../answers/temp.txt
