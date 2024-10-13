let a = 5;  //  binary: 0101
let b = 3;  //  binary: 0011

// Bitwise AND
console.log('Bitwise AND of', a, 'and', b, ':', a & b);  // Result: 1 (binary: 0001)

// Bitwise OR
console.log('Bitwise OR of', a, 'and', b, ':', a | b);   // Result: 7 (binary: 0111)

// Bitwise XOR (exclusive OR)
console.log('Bitwise XOR of', a, 'and', b, ':', a ^ b);   // Result: 6 (binary: 0110)

// Bitwise NOT
console.log('Bitwise NOT of', a, ':', ~a);               // Result: -6 (in two's complement form)

// Left shift
console.log('Left shift of', a, 'by 1 bit:', a << 1);    // Result: 10 (binary: 1010)

// Right shift (with sign)
console.log('Right shift of', a, 'by 1 bit (with sign):', a >> 1);  // Result: 2 (binary: 0010)

// Right shift (zero fill)
console.log('Right shift of', a, 'by 1 bit (zero fill):', a >>> 1);  // Result: 2 (binary: 0010)
