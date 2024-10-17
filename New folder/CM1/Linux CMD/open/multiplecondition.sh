#! /bin/bash
echo "Enter First Number"
read var1
echo "Enter Second Number"
read var2
echo "Enter Third Number"
read var3
if [ $var1 -ge $var2 ] && [ $var1 -ge $var3 ];
then
echo "$var1 is the largest Number"
elif [ $var2 -ge $var1 ] && [ $var2 -ge $var3 ];
then
echo "$var2 is the largest Number"
else
echo "$var3 is the largest Number"
fi
