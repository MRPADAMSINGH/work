#! /bin/bash
: '
m=1
n=3
if [ $m -eq $n ];
then
echo "Both the variables are same"
else
echo "Both the variables are different"
fi

'

: 'echo "Insert value A"
read a
echo "Insert value B"
read b
if [ $a -gt $b ];
then
echo "a is large."
else
echo "b is large"
fi
'

: 'echo "Enterr  your age"
read Age
if [ $Age -ge 18 ]
then
echo "You are elegible for vote"
else
echo "You are not eligible for vote"
fi
'


