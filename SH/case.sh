#!/bin/bash

a=$1
b=$2
c=$3
case $b in
	+) echo $(expr $1 + $3)
	   ;;
	-) echo $(expr $1 - $3)
	   ;;
	/) echo $(expr $1 / $3)
	   ;;
	*) echo $(expr $1 * $3)
	   ;;
esac
