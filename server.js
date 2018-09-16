
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
function getchatlog(){

	var connection=getdatabaseconnection();
	connection.connect();
	var chatlog="<div id='chatlog'>";
	var myquery = connection.query("select * from messages",function(err,rows,fields){
		if(err){
			var myerr="there was an error reading the database";
			console.log(myerr);
			return myerr;
		}
		//debug
		console.log(rows.length);
		console.log(rows[0].message);
		for(var i=0;i<rows.length;i++){
			chatlog+="<p>message: "+rows[i].message+"<p>";
		}
	});
	chatlog+="</div>";
	connection.end();
	return chatlog;
}

function writechattoresponse(response){
	var result="";	
	result+="<html><head><meta charset='utf-8'/></head><body>";
	result+=getchatlog()+fs.readFileSync("chatfragment.html");
	result+="</body></html>";
	response.write(result);
}

const app = http.createServer((request, response) => {
  
  if(request.method=="POST"){
	console.log("received POST request");
	/*var jsonstring="";
	request.on('data',function(data){jsonstring+=data;});
	var myjson;
	request.on('end',
		function(){
			//myjson=JSON.parse(jsonstring);
		}
	);*/
	
	writechattoresponse(response);
	response.end();
  
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
		response.write("didn't find file");
	}
}

app.listen(80);

