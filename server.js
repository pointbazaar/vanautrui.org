
const url = require('url');
const http = require('http');
var fs=require('fs');
var mysql=require('mysql');

function getdatabaseconnection(){

	return mysql.createConnection({
		host:'localhost',
		user:'root',
		password:'Enderborn1',
		database:'messages'
	});
}


const app = http.createServer((request, response) => {
  
  if(request.method=="POST"){
	console.log("received POST request");
  
  }else{
	if(request.url=="/chat.html"){
		
		writechattoresponse(response);
		response.end();
	}else{

		var filename=request.url;
		console.log("new request: "+filename);
  
		writefiletoresponse(filename,response);

		response.end();
	}
  }

});

function writefiletoresponse(filename,response){

	var fname=filename.slice(1,filename.length);
	var extension=fname.slice(fname.indexOf(".")+1,fname.length);
	if(fs.existsSync(fname)){
		var htm=fs.readFileSync(fname);
		if(extension=='jpg'){
			response.writeHead(200,{'Content-Type':'image/jpg'});
			response.write(htm,'Base64');
		}else{	
			response.write(htm);
		}
	}else{
		var htm=fs.readFileSync("index.html");
		response.write(htm);
	}
}

app.listen(80);

