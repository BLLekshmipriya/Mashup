#!/bin/bash

echo "Read no: $1"
n=$1
while [ $n -gt 0 ]
do
echo $n
((n=n-1))
done

