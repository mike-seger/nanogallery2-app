#!/bin/bash

if [ ! -d img ] ; then
	echo "img directory does not exist"
	exit 1
fi

cd img
rename "s/[^A-Za-z0-9.-]//g;s/^îmg//;s/^îmg//;s/-1920x[0-9-]*//;s/abstract-wallpaper//;s/^[0-9-]*//;s/-100//" *.jpg *.png *.jpeg

dim=200
mkdir -p ../thumb-img

find *jpg | while read f ; do 
	th="../thumb-img/${f}"
	if [ ! -f "$th" ] ; then
		convert "$f" -thumbnail ${dim}x${dim}^ -gravity center -extent ${dim}x${dim} "$th"
	fi
done
