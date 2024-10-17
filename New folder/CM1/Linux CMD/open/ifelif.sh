#! /bin/bash
: '
echo "Enter the number"
read a
if [ $a -gt 5 ]
then
echo "number is greater then 5"
elif [ $a -eq 5 ]
then
echo "number is euqual to 5"
else
echo "The number is less then 5"
fi
'


echo "Enter your Marks"
read mark
if [ $mark -ge 90 ];
then
echo "Grade:- A+"
elif [[ $mark -le 90 && $mark -ge 80 ]]
then
echo "Grade:- A"
elif [[ $mark -le 80 && $mark -ge 70 ]]
then
echo "Grade:- B+"
elif [[ $mark -le 70 && $mark -ge 60 ]]
then
echo "Grade:- C+"
else
echo "Grade F"
fi
