var http=require('http');
var exec=require('child_process').exec;
var server = http.createServer(function(request,response){
	response.writeHead(200,{"Content-Type":"text/html"});

	console.log("got a request");

	var child=exec("git pull",function(error,stdout,stderr){});
	
	response.write("<p> hello </p>");
	response.end();
});

server.listen(9999);
console.log("server ist listening");
