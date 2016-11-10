#!/bin/bash
	clear ; loop=y
	while [ "$loop" = y ] ;
 	do
	  echo "Menu";  echo "===="
  	  echo "D: print the date"
	  echo "W: print the users who are currently log on."
	  echo "P: print the working directory"
	  echo "Q: quit."
	  echo
	  read -s choice 		# silent mode: no echo to terminal
	  case $choice in
		D | d) date ;;
		W | w) who ;;
		P | p) pwd ;;
		Q | q) loop=n ;;
		*) echo "Illegal choice." ;;
	  esac
	  echo
	done 
