#! /bin/bash
#Declaring function using the reserved keyboard function
#Multiple function

: 'function f1 {
	echo "Hello i am function "
	echo "Bye"
	}
	f1
'
#single line
: 'function f2 { echo "welcome to this world" ; echo "How are you" ; }
f2
'
#without function keyboard
: 'Hello () {
	echo "Hello welcome to NSTI"
	}
	Hello
	'
: 'Hello () { echo "Hello welcome to NSTI" ; }
Hello
'
#Passing a string Argument to a function
: 'Hello () {
	echo "Hello $1"
	}
	Hello "PGLU"
'
: 'Hello () {
	echo "Hello $1"
	echo "Hello $2"
	}
	Hello "PGLU" "GMR"
'
: 'Hello () {
	echo "Hello $1"
	echo "$2"
	}
	Hello "PGLU" "GMR"
'

#Passing an Integer Arguments to a function for addition.
: 'Sum () {
	add=$(($1+$2))
	echo "The Sum of $1 and $2 is $add"
	}
	Sum 220 20

	
Sum () {
	add=$(($1+$2))
	echo "The sum of $1 and $2 is $add"
	}
	Sum 50 500
Mul () {
	mul=$(($1*$2))
	echo "The mul of $1 and $2 is $mul"
	}
	Sum 5 7


Div () {
	div=$(($1/$2))
	echo "The div of $1 and $2 is $div"
	}
	Sum 10 2
'

: 'f3 () {
	if [ $A -ge 0] && [ $B -ge]

f3 () {
	if [ $1 -ge 50 ]
	then 
	echo "$1 is larger"
	else
	echo "$1 is smaller"
	fi
}
f3 14
'
f4 () {
	for i in 1 2 3 4 5 
	do 
		echo "Welcome to $i times"
	done
	}
f4

f5 () {
for i in {1..10}
	do
		echo "Welcome to $i times"
	done
}
f5














