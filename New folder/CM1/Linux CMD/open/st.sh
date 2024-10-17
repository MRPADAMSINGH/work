#! /bin/bash
read -p "Insert value a:" A
read -p "Insert value b:" B

if [ $A -gt 0 ] && [ $B -gt 0 ]
then
echo "Sum=$((A+B))"

: 'else
	echo "Addition of two value $Sum "
'
fi
