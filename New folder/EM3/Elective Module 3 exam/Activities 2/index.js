// import the express module
const express = require('express')
const app = express();

// static files
app.use(express.static(__dirname + '/public'));

//route for home page
app.get('/home', (req, res) => {
res.sendFile(__dirname + '/index.html');
})

//route for about page
app.get('/about', (req,res)=>{
    res.sendFile(__dirname + '/about.html');
})

//route for contact page
app.get('/contact', (req,res)=>{
    // res.send('Welcome to the Contact page');
    res.sendFile(__dirname + '/contact.html');
})


//start the server on port 3000
app.listen(3000);
console.log('listening on port 3000: http://localhost:3000/');