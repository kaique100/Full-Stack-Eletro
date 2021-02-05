const express = require('express');
// import express from 'express';// não suportada na minha versão de node pois meu SO é Win7
const cors = require('cors');
const mysql = require('mysql');


const server = express();
server.use(express.json());
server.use(cors());

const connection = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "fseletro"
})

server.get("/produtos",(req,res)=>{

        connection.query("select * from produtos",(error, result)=>{
           if (error) {
               res.send(error)
           } else {
               res.send(result)
           }
        })
});

// server.post("/usuario",(req,res)=>{
//     const {name} = req.body;
//     connection.query(`insert into usuarios(name) values('${name}')`, (error, result)=>{
//         if(error){
//             res.send("Erro ao inserir usuário")
//         }else{
//             res.send("Usuario cadastro com sucesso!")
//         }
//     })
// })
server.listen(3333, function(){
    console.log("rodou o servidor")
})