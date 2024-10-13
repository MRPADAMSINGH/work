#! /bin/bash
: '
read -p " Please enter a value " First
read -p " please enter a value " Secondd
'
: '
echo "Beffore Swaping"
echo "Num1: $((First))"
echo "Num2: $((Second))"

sum=$((First+Second))
'
First=10
Second=25
echo " Before Swape First :$First, second :$Second "
Temp=$First
First=$Second
Second=$Temp

echo " After Swaping "
echo " First : $First, Second : $Second "
