#! /bin/bash
read -p " enter First value " A
read -p " enter second Value " B
if [ $A -eq $B ]
then
echo " $A is equal to $B "
else
echo " $A is not equal to $B "
fi
