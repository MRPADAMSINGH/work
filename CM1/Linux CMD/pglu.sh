#! /bin/bash

#Que 1 )swap two number
: '
read -p " Please enter the first number " First
read -p " Please enter the second number " Second

Temp=$First
First=$Second
Second=$Temp
echo " After swaping, numbers are "
echo " First=$First , Second=$Second "
'

#Que 2 )whole Number
: '
i=0
while [ $i -ge 0 ]
do
echo " $i "
((i++))
done
'

#Que 3 ) Prime number
#Prime

read -p " Enter a Value " n
for((i=2; i<=$n/2; i++))
do
a=$(($n%i));
if [ $a -eq 0 ]
then
echo " $n is not a Prime number "
exit 0
fi
done
echo " $n is Prime number "


#Que 4 ) Print the natural number
: '
i=1
while [ $i -ge 0 ]
do
echo " $i "
((i++))
done
'   

#Que 5-6 )Even or Odd.
: '
read -p "Enter a number: " A
B=$(($A%2))
if [ $B -eq 0 ]
then
echo " Number $A is Even "
else
echo " Number $A is Odd "
fi
'
#Que 7 ) Read two integer number and print the subtraction of both the number.
: '
read -p " Please enter the first value " A
read -p " Please enter the first value " B
Sub1=$(($A-$B))
Sub2=$(($B-$A))
if [ $A -gt $B ]
then
echo " Subtraction of both the number = $Sub1 "
else
echo " Subtraction of both the number = $Sub2 "
fi
'

#Que 8 )Check the number is grater then 20 or not.
: '
read -p " Enter a Value " A
if [ $A -gt 20 ]
then
echo " $A is grater then 20 "
else
echo " $A is not grater then 20 "
fi
'


#Que 9 )Table of 13
: '
for i in 13 26 39 52 65 78 91 104 117 130
do
echo " $i "
done
'
#Que 10 ) C style forloop
: '
for i in {1..10}
do
echo " $i "
done

'


: '
read -p " enter a value " a

if [ $(($a%2)) -eq 1 ]
then
echo " Prime "
else
echo " Not prime "
fi


'

































