window.onload=function(){

var list = document.getElementById("displayhacks_past");

var view = {
	"hacks":[
		{
			"name":"Provinzial Hackathon 2018",
			"url":"https://www.youtube.com/watch?v=P36I8Q4-DTE",
			"location":"Duesseldorf, Germany",
			"startdate":"idk",
			"enddate":"idk",
			"totalprizes":"around 2000",
			"whatwebuilt":`My Team built a Website (with Bootstrap CSS) with multiple Pages to present a "Netflix for renting" business model, where people would just have to interact with 1 Party (Provinzial Insurance) to choose among 3 tiers of subscription, which would enable them to freely choose their apartment in any city that is in this program. A 10% free apartments rate would have to be maintained in the apartments in this program, for a given city. This makes life easier for the people renting and elevates Provinzial to provide security by having a clear monthly subscription fee, without "Nebenkosten" and seperate Utilities and Internet contracts. Everything would already be setup. And i could change my subscription or the apartment i live in on a monthly basis. We thought this would vastly improve the lives of renters when compared to the current situation. `,
			"whatawinnerbuilt":"",
			"status":"WON",
			"opt_custom":""
		},
		{
			"name":"Kreathon 2018",
			"url":"https://kreathon-krefeld.de/",
			"location":"Krefeld, Germany",
			"startdate":"idk",
			"enddate":"idk",
			"totalprizes":"around 2000",
			"whatwebuilt":`My Team built a Voice Assistant based on MyCroft to enable people to ask for directions (it was Public Transport API Connected) and ask when to put their trash out. The thing is, MyCroft Voice recognition is not so mature, so our Presentation kind of failed. Yeah. Python is crap. `,
			"whatawinnerbuilt":`They improved the algorithm the Stadtwerke Krefeld were using to route their garbage trucks. They had an iot solution to measure how filled garbage bins were, and used it to route the garbage trucks. Their algorithm shortened the path of the trucks by 10%, which would save 1000$+ . Clear business win. `,
			"status":"LOST",
			"opt_custom":""
		},
		{
			"name":"Energy Hackathon 2019",
			"url":"https://energy-hack.com/",
			"location":"Essen, Germany",
			"startdate":"idk",
			"enddate":"idk",
			"totalprizes":"2000",
			"whatwebuilt":`My Team built a Website (which was presented as a mobile app) which would enable Utility Companies, Banks and Investors to interact with, and gather information about people living in africa, which need loans to finance Infrastructure for Energy. Our prototype worked with the Factom Blockchain and provided the ability to use SMS to "pay people". This would enable investors and loan providers to gather information about someones finances. `,
			"whatawinnerbuilt":``,
			"status":"WON",
			"opt_custom":""
		},
		{
			"name":"ApoBank Hackathon 2019",
			"url":"https://www.bankathon.net/apobank-hackathon/",
			"location":"Duesseldorf, Germany",
			"startdate":"idk",
			"enddate":"idk",
			"totalprizes":"15000",
			"whatwebuilt":`My Team built a Website (which was presented as a mobile app) where Doctors could sign up with their medical number, the system would detect their other information, including picture, and then they could ask questions and post articles, to exchange information, and see each other on a map. The idea was to enable more social interaction and enable them to share non-medical knowledge, e.g. related to business of their practise. One judge said that he found our idea to be not innovative, as it reminds him too much of Facebook, and that it would be just another social network. I agree with him there. We had other, more controversial ideas, like enabling Service Providers to interact with the doctors on the Platform or to provide a "Peer-review lite" kind of experience for fast publishing of scientific knowledge, but discarded those. `,
			"whatawinnerbuilt":`They made a financial assistant for doctors, by building a UI in React. It showed financial recommendations using big data and comparing your financial situation with other doctors, providing indicators as to performance and staff spending and so on, `,
			"status":"LOST",
			"opt_custom":""
		},
		{
			"name":"GeoHack 2019",
			"url":"http://www.transformationsstadt.de/geohack-takeover/",
			"location":"Wuppertal, Germany",
			"startdate":"idk",
			"enddate":"idk",
			"totalprizes":"around 3000",
			"whatwebuilt":`My Team built a Website, where you could select administrative areas (cities) and compare them across some Better Life Index Dimensions. You can also zoom in to discover events and amenities, which are nearby. The idea was to be able to personalize a Map to individual preferences. Our Team won 500 Euro. `,
			"whatawinnerbuilt":`The top winning team was 1 Lady. She made a presentation about how a software would work that would plan activities for you, based on your interest. So if you are having a vacation in some German city, that software would present various events and venues and a plan for how to travel between them. She talked about Art and the local Art Scene in Wuppertal also. And how the local art scene could attract more visitors. This Team won 15 000 Euro, but some of it was tied to actually implementing the Idea, atleast that is how i understood it. `,
			"status":"WON",
			"opt_custom":"http://geohack-team-future.vanautrui.org/"
		},
		{
			"name":"Journalism Hackathon 2019",
			"url":"https://www.vor-ort.nrw/2019/05/02/hackathon-hacking-local_media/",
			"location":"Essen, Germany",
			"startdate":"5.7.2019",
			"enddate":"7.7.2019",
			"totalprizes":"6000",
			"whatwebuilt":`We built a Firefox Browser Extension, SwearBlock Extension which takes swear words and hate speech and puts Emojis there instead. We recognize that this is not an elegant solution, as it cosumes too much CPU time, but it is a funny extension you can try out for a while. Someone in our Team said that it would be interesting for Multiplayer Video Games. I personally do not believe it, but maybe.
We originally wanted to place Texts and Information in AR , but struggled to transform GPS coordinates into the local AR space. Also we struggled with ARCore, which we could not understand well. We wanted to display news and information in AR, maybe with Overpass API, Meetup API, Local News Articles,... `,
			"whatawinnerbuilt":` The top winning team (Team Ruhr Derby) built a game where Players could compete in a quiz about local knowledge and statistical data about the local Region. The prototype permitted only Bots to compete with. In the game there would be articles about the local Region, relevant to the Quiz, by local Newspapers. So it would give them traffic to their website. That was their selling point.`,
			"status":"LOST",
			"opt_custom":"https://github.com/milo2110/SwearBlock-Extension"
		},
		{
			"name":"PropTech Hackathon 2019",
			"url":"https://digitalhubcologne.de/proptech-hackathon/",
			"location":"Cologne, Germany",
			"startdate":"20.9.2019",
			"enddate":"22.9.2019",
			"totalprizes":"around 1000",
			"whatwebuilt":`Our Concept was for a Security Robot. We called it "SecBot". It was inspired by KnightScope, a comany which is making Security Robots in America. So we bought a small and cheap (50$) programmable Robot platfrom from Conrad Electronics, and put a Raspberry Pi with a Webcam on top. Streaming of the video worked great. We also had an application for Facial Recognition. Our Presentation was about how security robots would in some situations be more cost-effective than static security cameras and security staff. `,
			"whatawinnerbuilt":`Andrey Bogomolov's Team won the Hack with a Vue.js Webapp "MyButler". The Concept was about having a small device in the houses, and an App, which would facilitate Communication between tenants and Landlords. So it could speed up the whole thing, so that landlords and tenants would not have to communicate by snail mail. And there could be Ads placed in the App for various home-related services. `,
			"status":"LOST",
			"opt_custom":""
		},
		{
			"name":"DoHack 2019",
			"url":"https://dohack.io/",
			"location":"Dortmund, Germany",
			"startdate":"27.9.2019",
			"enddate":"29.9.2019",
			"totalprizes":"(raspberries, ...), around 300",
			"whatwebuilt":` Our Team built an App for Citizens to send a picture,location and optionally personal information to a 'hero' dashboard for police, ambulance and some companies about security incidents such as vandalism, car accidents, violence and the like. The idea was that this would encourage people to notify the authorities. Because many people do not want to call the police because they do not want to give out their identity to them, and maybe because they do not have time to talk with them on the phone. This app would provide a quick way to notify the authorities. `,
			"whatawinnerbuilt":`A winning team built an app where you could 'adopt' green spaces in the city and care for them. You could adopt them in the app, and then plant stuff there. The idea was to encourage people taking care of the environment and doing environmental stewardship. Each green space would have its own page on their website. So you could post updates and pictures. It would enable people to have a green space to care for even if they do not have their own garden. And it would improve the city. `,
			"status":"LOST",
			"opt_custom":""
		}
	]
};

var template=`
{{#hacks}} 
	<li class="list-group-item">
		<span class="float-right">
				{{startdate}} - {{enddate}}
			</span>
		<div class="row align-items-center">
			<div class="mr-2 mb-2 badge badge-info">{{status}}</div>
			<a href="{{url}}">
				<h4>{{name}}</h4> 
			</a>
			
		</div>
		
		<a href="{{opt_custom}}">{{opt_custom}}</a>
		
		<h4>What we built</h4>
		<p>{{whatwebuilt}}</p>
		<h4>What a winning Team built</h4>
		<p>{{whatawinnerbuilt}}</p>
		
		
		
		<div class="row justify-content-between align-items-center">
			<strong class="m-3">{{totalprizes}} € in Prizes</strong>
			<div class="row m-3">
				<img src="https://image.flaticon.com/icons/svg/149/149060.svg" style="height: 30px;"/>
				<span>{{location}}</span>
			</div>
		</div>
	</li>
	
{{/hacks}} `;
var output = Mustache.render(template,view);

list.innerHTML=output;

//console.log(output);

console.log("completed templating with mustache");
}


/*

		
		*/
