#!/bin/bash

echo "first no is $1"
echo "second no is $2"

if [ $# -eq 2 ] 
then
    echo $1+$2
else
    echo "invalid argument please pass only one argument"
fi
