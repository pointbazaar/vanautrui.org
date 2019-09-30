window.onload=function(){

var list = document.getElementById("futurehacks");

var view = {
	"hacks":[
		{
			"name":"4opmc Hack 2019",
			"url":"https://www.4opmc.com/hackathon",
			"location":"Essen, Germany",
			"startdate":"1.10.2019",
			"enddate":"2.10.2019",
			"totalprizes":"5500"
		},
		{
			"name":"Provinzial Hack 2019",
			"url":"https://www.provinzial.com/content/_micro/hackathon/",
			"location":"Duesseldorf, Germany",
			"startdate":"8.11.2019",
			"enddate":"10.11.2019",
			"totalprizes":"2500"
		},
		{
			"name":"Kreathon 2019",
			"url":"https://kreathon-krefeld.de/",
			"location":"Krefeld,Germany",
			"startdate":"15.11.2019",
			"enddate":"16.11.2019",
			"totalprizes":"unknown"
		}
		
	],
	"example":"example"
};

var template=`
{{#hacks}} 
	<li class="list-group-item">
		<span class="float-right">
				{{startdate}} - {{enddate}}
			</span>
		<div class="row align-items-center">
			<a href="{{url}}">
				<h4>{{name}}</h4> 
			</a>
			<div class="ml-2 mb-2 badge badge-info">UPCOMING</div>
		</div>
		<div>
			<div class="row m-3">
				<img src="https://image.flaticon.com/icons/svg/149/149060.svg" style="height: 30px;"/>
				<span>{{location}}</span>
			</div>
		</div>
		<strong>{{totalprizes}} € in Prizes</strong>
	</li>
	
{{/hacks}} `;
var output = Mustache.render(template,view);

list.innerHTML=output;

console.log(output);

console.log("completed templating with mustache");
}


/*
<li class="list-group-item">
	<div class="badge bade-secondary">SKIPPING IT</div>
	4opmc Hackathon 2019 (in Essen, Germany), 1.10.2019 bis 2.10.2019
	<a class="float-right" href="https://www.4opmc.com/hackathon">Website</a>
	<p>skipped it because it conflicts with my schedule</p>
	<h3>Prizes Total: 5500 Euro</h3>
</li>
		
		*/
