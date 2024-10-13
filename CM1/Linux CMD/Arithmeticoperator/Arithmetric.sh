#! /bin/bash
read -p "Insert a Number A:" A
read -p "Insert a Number B:" B
Sum=$((A+B))
echo "Sum=$Sum"
Sub=$((A-B))
echo "Sub=$Sub"
Mul=$((A*B))
echo "Multiply=$Mul"
Sq=$((A*A))
SQ=$((B*B))
echo "Square of A=$Sq"
echo "Square of B=$SQ"
Div=$((A/B))
echo "division=$Div"
Exp=$((A**B))
echo "Exponential=$Exp"
MD=$((A%B))
echo "Modular Division=$MD"
In=$((A+=10))
echo "Value of A"
echo "Incrementing=$In"
In=$((B+=10))
echo "Value of B"
echo "Incrementing=$In"
De=$((A-=5))
echo "Value of A"
echo "Decrementing=$De"
De=$((B-=5))
echo "Value of B"
echo "Decrementing=$De"
