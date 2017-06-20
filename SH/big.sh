#!/bin/bash

echo "first number is $1"
echo "2nd no is $2"
echo "3rd no is $3"

if [ $# -eq 3 ]
then 
        if [ $1 -gt $2 ]
         then  
                if [ $1 -gt $3 ]
                then echo "biggest no is $1"
                else echo "biggest no is $3"
                fi
        else 
                if [ $2 -gt $3 ]
                then echo "biggest no is $2"
                else echo "biggest no is $3"
                fi
        fi
else
echo "invalid argument please pass only one argument"
fi 
