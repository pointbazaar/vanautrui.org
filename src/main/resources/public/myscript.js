//window.setTimeout(reloadfun,5000);

function reloadfun(){
	location.reload(true);
}

var str;
var papers;
var strs=[];
var len;
var mycounter=0;
var typewriterspeedinverse=40;

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

var mylanguage="german";

function change_language(){
	var languages=["english","german"];
	var tobedisabled=[];
	console.log("change to:"+mylanguage);
	
	console.log("elements to delete");
	for(var j=0;j<languages.length;j++){
		var myelements = document.getElementsByClassName(languages[j]);
		for(var i=0;i<myelements.length;i++){
			console.log(myelements[i]);
			myelements[i].style.display="none";
		}
	}
	console.log("elements to enable");
	var tobeenabled=document.getElementsByClassName(mylanguage);
	for(var i=0;i<tobeenabled.length;i++){
		
		tobeenabled[i].style.display="block"; //"auto" didn't work
	}

	mylanguage=(mylanguage=="english")?"german":"english";
	window.setTimeout(change_language,5000);
}

change_language();
