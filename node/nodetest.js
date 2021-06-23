var http = require('http');
// var dt = require('./date');
var url = require('url');

http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/plain'});
  // res.end('Hello World!');
  //  res.write("The date and time are currently: " + dt.myDateTime());
  // res.end();
  var q = url.parse(req.url, true).query;
  var txt = q.year + " " + q.month;
  res.end(txt);
}).listen(8080);
