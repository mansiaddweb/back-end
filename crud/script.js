const path = require('path');
const mysql = require('mysql');
const ejs = require('ejs');
const express = require('express');
const bodyparser = require('body-parser');
const app = express();

const mysqlConnection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'org',
    });
    mysqlConnection.connect((err)=> {
        if(!err)
        console.log('Connection Established Successfully');
        else
        console.log('Connection Failed!'+ JSON.stringify(err,undefined,2));
        });

app.set('views',path.join(__dirname,'views'));

app.set('view engine','ejs');
app.use(bodyparser.json());
app.use(bodyparser.urlencoded({extended: false}));

app.get('/' , (req, res) => {
    // res.send( 'CRUD Operation');
    let sql ="select * from student";
    let query = mysqlConnection.query(sql,(err,rows)=>{
    if(err) throw err;
    res.render('user',{
        title:'CRUD OPERATION',
        student:rows

    });
} );
});

app.get('/add' , (req, res) => {
    res.render('add',{
        title:'CRUD OPERATION',
    });
       
});

app.post('/save',(req,res)=>{
    let data ={id:req.body.id, name:req.body.name, email:req.body.email, password:req.body.password,mobile: req.body.mobile, address:req.body.address};
    let sql = "Insert into student set ?";
    let query = mysqlConnection.query(sql,data,(err,results)=>{
        if(err) throw err;
        res.redirect('/');
    });
});

app.get('/edit/:studentID',(req,res)=>{
    const studentID = req.params.studentID;
    let sql =" select *from student where id =" +studentID;
    let query = mysqlConnection.query(sql,(err,result)=>{
        res.render('edit',{
            title:'CRUD OPERATION',
            student : result[0]
        });
    });
});

app.post('/update',(req,res)=>{
    // let data ={id:req.body.id, name:req.body.name, email:req.body.email, password:req.body.password,mobile: req.body.mobile, address:req.body.address};
    const studentID = req.body.id;
    let sql = "update student set Name='"+req.body.name+"',email='"+req.body.email+"',password='"+req.body.password+"',mobile='"+req.body.mobile+"',address='"+req.body.address+"'where id="+studentID;
    let query = mysqlConnection.query(sql,(err,results)=>{
        if(err) throw err;
        res.redirect('/');
    });
});

app.get('/delete/:studentID',(req,res)=>{
    const studentID = req.params.studentID;
    let sql =" delete from student where id =" +studentID;
    let query = mysqlConnection.query(sql,(err,result)=>{
        if(err) throw err;
        res.redirect('/');
        });
    });


app.listen(3990,() =>{
    console.log('server start');
});