//window.setTimeout(reloadfun,5000);

function reloadfun(){
	location.reload(true);
}

var str;
var papers;
var strs=[];
var len;
var mycounter=0;
var typewriterspeedinverse=50;

function typewriter_effect(){
	//take the text from the elements with class "typewriter"
	//and add it back in
	papers=document.getElementsByClassName("typewriter");
	
	for(var i=0;i<papers.length;i++){
		strs[i]=papers[i].innerHTML;
		papers[i].innerHTML="";
	}
	
	window.setTimeout(typewriter_iterate,typewriterspeedinverse);
	
}

function typewriter_iterate(){
	for(var i=0;i<papers.length;i++){
		papers[i].innerHTML=strs[i].slice(0,mycounter)+"&#x25AE";
	}
	mycounter++;
	if(mycounter<= 10000 ){
		window.setTimeout(typewriter_iterate,typewriterspeedinverse);
	}
}

typewriter_effect();
