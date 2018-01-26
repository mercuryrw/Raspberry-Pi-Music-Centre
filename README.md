# Raspberry-Pi-Music-Centre
Raspberry Pi Home Music Server Tutorial

This is a tutorial for anyone who is a complete Linux beginner and wishes to make a headless (no monitor/mouse/keyboard) music player using a Raspberry Pi 3 and an i2c DAC (in this case, I used an iquadio dac+).
It is designed to be set up on Raspian Stretch, but will probably work on any other Linux distro, given enough tinkering.

1.)	Connect to Raspberry Pi to the Wi-Fi using the icon in the bottom right, choosing our Wi-Fi and entering the password.

2.)	Open the terminal 

3.)	Enter “sudo raspi-config”

4.)	Go into “1 - Change User Password” and set it to “raspberrpi” or any password you choose

5.)	Go into “5 – Interfacing options > SSH” and set it to “enabled”

6.)	Go into “5 – Interfacing options > VNC” and set it to “enabled”

7.)	Go into “7 – Advanced options > Expand Filesystem” and run it

8.)	Go into “7 – Advanced options > Overscan” and “disable” it

9.)	Go into “7 – Advanced options > Resolution” and set it to “CEA Mode 4 1280x720 60Hz 16:9”

10.)	Select “Finish” then “Yes” to reboot



11.)	Open the terminal

12.)	Enter “sudo apt update” to update the repository lists

13.)	Enter “sudo apt upgrade” to install any new updates

14.)	Enter “sudo reboot” to reboot the system



15.)	Open the terminal

16.)	Enter “sudo nano /boot/config.txt”

17.)	Add the line “dtoverlay=iqaudio-dacplus” to enable the dac

18.)	Enter “sudo reboot” to reboot the system



19.)	Open the terminal

20.)	Enter “sudo apt install libasound2-plugin-equal” to install the equaliser plugin

21.)	Enter “sudo nano /etc/asound.conf”

22.)	Make the file the same as the “asound.conf” file in the tutorial folder

23.)	Save the file using “CTRL + O” then “Enter”



24.)	Enter “sudo apt install mpd” to install mpd, the music server program

25.)	Enter “sudo apt install mpc” to install the mpd terminal client program

26.)	Enter “sudo nano /etc/mpd.conf”

27.)	Make the file the same as the “mpd.conf” file in the tutorial folder

28.)	Save the file using “CTRL + O” then “Enter”

29.)	Enter “sudo reboot” to reboot the system



30.)	On your phone, install the app “MPDroid”, from the “FDroid app store” website

31.)	Check that you can connect to the mpd server on your raspberry pi



32.)	On the raspberry pi, open the terminal

33.)	Enter “sudo apt install nginx” to install the web server for the remote power controls and album art

34.)	Enter “sudo nano /etc/nginx/nginx.conf” 

35.)	Make the file the same as the “nginx.conf” file in the tutorial folder

36.)	Save the file using “CTRL + O” then “Enter”

37.)	Enter “sudo nano /etc/nginx/sites-available/default” 

38.)	Make the file the same as the “default” file in the tutorial folder

39.)	Save the file using “CTRL + O” then “Enter”

40.)	Enter “ln -s /media /var/www/html/media” to create a symbolic link between the hard drive and the web server

41.)	Enter “cd /var/www/html”

42.)	Make the folder the same as the “html” folder in the tutorial folder

43.)	Enter “sudo chmod +x *.sh” to give all scripts in the folder permission to execute



44.)	Enter “sudo apt install php7.0-fpm” to install the Fastpass CGI php server for running the poweroff and reboot scripts from the web server

45.)	Enter “sudo nano /etc/php/7.0/fpm/pool.d/www.conf”

46.)	Make the file the same as the “www.conf” file in the tutorial folder

47.)	Save the file using “CTRL + O” then “Enter”

48.)	Enter “sudo reboot” to reboot the system



49.)	On your phone, type the ip-address of the pi into your web browser (it will usually be in the form 192.168.0.xx). Test the web interface to see if it works. 



50.)	On your phone, open MPDroid and connect to the pi

51.)	Go into “Settings > Cover art settings > Download cover art” and turn it off

52.)	Go into “Settings > Cover art settings > Clear cover art cache” and press it

53.)	Go into “Settings > Cover art settings > Download local cover art” and turn it on

54.)	Go into “Settings > Cover art settings > Path to music” and set it to “/media”

55.)	Go into “Settings > Cover art settings > Cover filename” and set it to “Folder.jpg” (be careful as this is case sensitive)

56.)	Go into “Settings > Cover art settings > Download cover art” and turn it off

57.)	Go into “Settings > Library settings > Simple mode” and turn it on

58.)	Go into “Settings > Library settings > Use Album Cache” and turn it on

59.)	Go into “Settings > Library settings > Simple mode” and turn it on

60.)	Go into “Settings > Interface settings > Now playing settings > Show audio properties” and turn it on

61.)	Go into “Settings > Interface settings > Use light theme” and turn it off

62.)	Go into “Settings > Server Information” and run “Refresh MPD’s database”. This will scan the hard drive for music files and can take a long time (5-10 minutes). You can check to see if it finished using the web interface we created, in the “MPD status” page. Once you no longer see “Updating DB (#1)” then the scan is finished.

63.)	Close the app fully and then open it again

64.)	The music centre is complete!
