#! /bin/bash
: '
echo "Enter A"
read A
echo "Enter B"
read B
echo "Enter Operation to Perform"
read op
case $op in
'+')
((Result=$A + $B));;
'-')
((Result=$A - $B));;
'x')
((Result=$A * $B));;
'/')
((Result=$A / $B));;
*)
echo "Wrong Number of arguments"
exit 0;;
esac
echo "$A $op $B= Result"
'
: '
fruit="pineapple"
case $fruit in
apple)
echo "your apple will cost 35p"
;;
pineapple)
echo "your fruit will cost 45p"
;;
pear)
echo "your fruit will cost 50p"
;;
peach)
echo "your fruit will cost 60p"
;;
*)
echo "unkonwn fruit"
esac
'

echo "Please insert your fruit name"
read fruit
case $fruit in
apple)
echo "your apple will cost 35p"
;;
pineapple)
echo "your fruit will cost 45p"
;;
pear)
echo "your fruit will cost 50p"
;;
peach)
echo "your fruit will cost 60p"
;;
*)
echo "unkonwn fruit"
esac







