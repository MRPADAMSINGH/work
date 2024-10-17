#! /bin/bash

: 'for i in 1 2 3 4 5
do
echo "welcome to adit for $i time"
done
'
: 'for i in {1..5}
do
echo "welcome $i"
done
'
: 'for i in {0..10..2}
do
echo "welcome $i"
done
'

: 'i=1
for day in mon tue wed thu fri
do
echo "weekday $((i++)) : $day"
done
'

for i in "zero" "one" "two" "three" "four" "five"
do
echo Element $i
done
