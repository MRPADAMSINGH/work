#!/bin/bash
read -p "Enter a Number : " num
if ((num % 2 == 0));
then
echo "$num is an even number."
else
echo "$num is odd number."
fi
