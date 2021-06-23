var http = require('http');

var nrc = require('node-run-cmd');

var schedule = require('node-schedule');

var moment = require('moment');


// var express = require('express');

var socketIo = require('socket.io');

var mysql = require('mysql');

var connection = mysql.createConnection({
	host : 'localhost',
	user : 'root',
	password : '',
	database : 'parking_hub'
});


connection.connect();



// var app = express();


// app.get('/',function(req,res){

// 	res.send("Hello")

// })


// app.get('/name/:id',function(req,res){

// 	connection.query(`Select * from users where id = ${req.params.id} LIMIT 1`,function(err,result){
// 		res.send(`<h1>${result[0].email}</h1>`);
// 	})


// })


// app.post('/name',function(req,res){

// 	res.send(`Hello Post`)

// })

var server =http.createServer();

var io = socketIo(server);

var path = require('path');

var c = path.join(__dirname,'../');
	

var j = schedule.scheduleJob('* * * * *', function(){
	
	nrc.run(`php ${c}/artisan schedule:run`).then(function(r){
		console.log(`php ${c} artisan schedule:run`)
		console.log('Cron EXEC');
	})
	.catch(err => {
		console.log('Error on command',err);
	})
});


var onlineUsers = [];
var totalUsers = 0;
var parking = [];
var notification = 0;
var count = 0;

io.on('connection',function(userSocket){


	/*  Here  */

		userSocket.on('hello',function(data){
			notification = notification + 1;
			io.sockets.emit('notification',notification);
			io.sockets.emit('parking',{
				vendorid :data.vendorid,
				city :data.city,
				title :data.title,
				address : data.address,
				description :data.description,
				status : data.status,
				floor : data.floor,
				image : data.image
			})
			// console.log(parking);
			// io.sockets.emit('parking',parking);
		});
		userSocket.on('msg',function(data){
			console.log(data);
			var confirm = data;
			count = count + 1;
			// io.sockets.emit('count',count);
			io.sockets.emit('message',confirm);
		})
		userSocket.emit('welcomeMessage','Hello, welcome o sockets');

	totalUsers = totalUsers + 1;

	onlineUsers.push({
		id :1,
		socket : userSocket.id
	})
	console.log(onlineUsers);
	console.log('User Connect');
	// console.info(`Client connected [id=${socket.id}]`);

	userSocket.on('disconnect',function(){
		console.log('User disconnect');
		totalUsers = totalUsers - 1;
		onlineUsers.splice(0,1);

		io.sockets.emit('totalUsers',totalUsers)

	});
	
	userSocket.broadcast.emit('newUser','connected with us');

	io.sockets.emit('totalUsers',totalUsers) // All Users




})

server.listen(4000,'0.0.0.0',function(err){

	if(err){
		console.log(err);

	} else {
		console.log('Server is running on port 4000 ');	
	}

})

