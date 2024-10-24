const express=require('express');
const app=express();
const {MongoClient} = require('mongodb');


MongoClient.connect("mongodb://localhost:27017", {useNewUrlParser:true, useUnifiedTopology:true})
.then(client=>{
    console.log("Connected  to MongoDB");
    
    //create a db object from client
    const db=client.db();

});

app.listen(5000, ()=>{
    console.log("Server is Running on http://localhost:3000/");
});
