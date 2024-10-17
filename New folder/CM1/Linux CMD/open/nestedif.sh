#! /bin/bash
: '
echo "Enter First Number"
read var1
echo "Enter Second Number"
read var2
echo "Enter Third Number"
read var3
if [ $var1 -ge $var2 ]
then
	if [ $var1 -ge $var3 ]
	then
	echo "var1 is the Largest Number"
	else
		echo "var3 is the Largest Number"
	fi
else
	if [ $var2 -ge $var3 ]
	then
	echo "var2 is the Largest Number"
	else
		echo "var3 is the Largest Number"
	fi
fi
'
echo "Enter the sales amount"
read amount
echo "Enter the time duration"
read duration
if [ $amount -ge 10000 ];
then
	if [ $duration -ge 7 ];
	then
	echo "you will get 20% bonus"
	else
	echo "you will get 15% bonus"
	fi
else
	if [ $duration -le 10 ];
	then
	echo "you will get the bonus of 10%"
	else
	echo "you will get the bonus of 5%"
	fi
fi
