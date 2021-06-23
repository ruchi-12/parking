var http = require('http');
var express = require('express');

var app = express();
 app.get('/',function(req,res){
	res.send('hello get')
})
http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/html'});
  res.send('Hello World!');
 
}).listen(4000);