
const url = require('url');
const http = require('http');
var fs=require('fs');

const app = http.createServer((request, response) => {
  /*
  response.writeHead(200, {"Content-Type": "text/html"});
  response.write('&lt;h1&gt;The city you are in is ${city}.&lt;/h1&gt;');
  response.end();*/
  var htm=fs.readFileSync('index.html','utf8');
  response.writeHead(200, {"Content-Type": "text/html"});
  response.write('test',{html:htm});
  response.end();
});

app.listen(3000);

