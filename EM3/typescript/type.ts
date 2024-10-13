// Creating an object
let person = {
    name: "John",
    age: 30,
    city: "New York"
  };
  
  // Check if a property exists in an object using the 'in' operator
  console.log("name" in person);  // Output: true
  console.log("gender" in person);  // Output: false
  
  // Deleting a property from an object using the 'delete' operator
  console.log(person);  // Before deletion
  delete person.age;
  console.log(person);  // After deletion
  
  // Using the 'typeof' operator to check the type of a variable
  let variable1 = 42;
  let variable2 = "Hello";
  let variable3 = true;
  
  console.log(typeof variable1);  // Output: "number"
  console.log(typeof variable2);  // Output: "string"
  console.log(typeof variable3);  // Output: "boolean"
  
  // Using the 'instanceof' operator to check if an object is an instance of a class
  class Car {
    constructor(make) {
      this.make = make;
    }
  }
  
  let myCar = new Car("Toyota");
  
  console.log(myCar instanceof Car);  // Output: true
  console.log(myCar instanceof Object);  // Output: true (since all objects are instances of Object)
  