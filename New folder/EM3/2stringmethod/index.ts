// String Initialization
let str1: string = 'Hello';
let str2: string = 'Edunet';

// String Concatenation
console.log("Combined Result: " + str1.concat(str2));

// String charAt
console.log("Character At 4: " + str2.charAt(4));

// String indexOf
console.log("Index of T: " + str2.indexOf('T'));

// String replace
console.log("After Replacement: " + str1.replace('Hello', 'Welcome to'));

// String uppercase
console.log("UpperCase: " + str2.toUpperCase());

// String endsWith
console.log("String ends with 'net': " + str2.endsWith('net'));

// String includes
console.log("String includes 'dun': " + str2.includes('dun'));

// String lastIndexOf
console.log("Last Index of 'e': " + str2.lastIndexOf('e'));

// String match
console.log("Match 'net': " + str2.match(/net/));

// String search
console.log("Search 'du': " + str2.search('du'));

// String slice
console.log("Slice from index 1 to 4: " + str2.slice(1, 4));

// String split
console.log("Split string: " + str2.split(''));

// String substring
console.log("Substring from index 1 to 4: " + str2.substring(1, 4));

// String toLowerCase
console.log("LowerCase: " + str2.toLowerCase());

// String trim
let str3: string = '   Edunet   ';
console.log("Trimmed string: " + str3.trim());

// String trimLeft
console.log("Left Trimmed string: " + str3.trimLeft());

// String trimRight
console.log("Right Trimmed string: " + str3.trimRight());

// String valueOf
console.log("Value Of str1: " + str1.valueOf());
