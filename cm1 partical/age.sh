#!/bin/bash
read -p "Enter Your age: " age
if [ "$age" < 18 ]; then
echo "Your id under 18! You are a minor"
elif [ "$age" > 18 ] && [ "$age" < 60 ]; then
echo "Your is Adult."
else
echo "You are a senior citizen."
fi
