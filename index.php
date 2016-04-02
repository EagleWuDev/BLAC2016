<?php
	
	if($_POST['submit']){
	
		if(!$_POST['name']){
			$error = "<br />Please Enter Your Name";
		}
	
		if(!$_POST['email']){
			$error.= "<br />Please Enter Your Email";
		}

		if(!$_POST['comments']){
			$error.= "<br />Please Enter a Comment";
		}

		if($_POST['email'] != "" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			$error.="<br />Please enter a valid email address";
		}

		if ($error){
			$result='<div class = "alert alert-danger"><strong>There were error(s)
			in your form:</strong>'.$error.'</div>';

		} else {
			
			if(mail("gquintana1@babson.edu", "Comment via Website", 
				"Name: ".$_POST['name']. 
				"Email: ".$_POST['email'].
				"Comments: ".$_POST['comments']))

				{
					$result='<div class = "alert alert-success"><strong>Thank You!
					</strong>We will be in Touch</div>';

			
			} else {
				
				$result = '<div class = "alert alert-danger"><strong>Whoops! Something
				went wrong!</strong> Please Try again Later</div>';


			}

		}
	}



?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BLAC</title>
<!-- Load Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<!-- Load CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!-- Load Icon Font -->
<link href="css/webfont.css" rel="stylesheet" type="text/css" />
<!-- Load jQuery library -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!-- Load jCarousel js -->
<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
<!-- Load MixItUup js -->
<script type="text/javascript" src="js/jquery.mixitup.js"></script>
<!-- Load js -->
<script type="text/javascript" src="js/custom.js"></script>
</head>
<!-- Start Body -->
<body>
	<!-- Start Menu -->
	
    <div class="menubar" data-scroll="true">
		<a href="#home" class="logo"></a>
		<ul class="mainmenu">
			<li class="active"><a href="#home">Home</a></li>
			<li><a href="#services">Speakers</a></li>
            <li><a href="#schedule">Schedule</a></li>
			<li><a href="https://www.eventbrite.com/e/babson-8th-latin-american-entrepreneurship-forum-decision-markers-tickets-22459278306" target="_blank">Tickets</a></li>
		</ul>
	</div>

	<!-- End Menu -->
	
	<!-- Start Home -->
	<a class="scroll" id="home"></a>
	<div class="home hero">
		<div class="overlay"></div>
		<div class="herowrapper">
		</div>
		<a href="javascript:void(0);" class="scrolldown">
			<h3></h3>
			<div data-icon="&#xe017;" class="icon"></div>
		</a>
	</div>
	<!-- End Home -->

	<!-- Start BlockQuote -->
	<div class="blockquote main">
		<blockquote>Join us on April 8th to learn from top decision makers in the 8th Babson Latin American Forum. <br> Get your early bird tickets <a id = "tickets" href="https://www.eventbrite.com/e/babson-8th-latin-american-entrepreneurship-forum-decision-markers-tickets-22459278306" target="_blank"><b>here</b></a> and follow us on <a href="https://www.facebook.com/events/243101776026994/" target ="_blank"id ="tickets"><b>Facebook</b></a> for updates.</blockquote>
	</div>
	<!-- End BlockQuote -->
    <div class= "container">
        
   <center><iframe class= "video" width="560" height="315"  style="margin-top: 15px;"src="https://www.youtube.com/embed/86nzwCSsW8k" frameborder="0" allowfullscreen></iframe></center>
        
      
    </div>
    <div class="clear"></div>
	<!-- End Content -->
    <!-- Start Section Divider -->
	<div class="section divider">
		<h2 id="servicestitle">Tickets</h2>
		<a class="scroll" id="tickets2"></a>
	</div>
	<!-- End Section Divider -->
    <div id = "ticketsbutton">
        <a href = "https://www.eventbrite.com/e/babson-8th-latin-american-entrepreneurship-forum-decision-markers-tickets-22459278306" target="_blank"><button id="ticketButton"><h1> Tickets Here</h1></button></a>
    
    </div>
	

    
    <div class="clear"></div>

	<!-- Start Section Divider -->
	<div class="section divider">
		<h2 id="servicestitle">Speakers Forum 2016</h2>
		<a class="scroll" id="services"></a>
	</div>
	<!-- End Section Divider -->

	<!-- Start Content -->
	<div class="container">

		<!-- Start Main Paragraph -->
		<!-- Start Main Paragraph -->
        <div id="keynote">
        <div class="row text-center g-pad-bottom">
        <div class="col-md-12">
        <div class="col-md-6 box2">
            <div class = "center" id="speaker1"></div>
            <h2>Wood Staton</h2>
            <h5>Executive Chairman</h5>
            <h6>Arcos Dorados</h6> 
                <p class="somemargins">Woods Staton is the Managing Director of Pegasus Capital. He served as the Chief Executive Officer of Arcos Dorados Holdings, Inc. from 2007 to
October 1, 2015. He served as the President of the South Cone Region of
McDonald's Corporation. Mr. Staton has over 20 years’
experience in International Business, including as the Marketing Vice President of Grupo
Indega. He has been the Executive Chairman of Arcos Dorados Holdings, Inc. since 2007, and has been an Executive Board member of the American Chamber of Commerce in Argentina. Mr. Staton is also actively involved
with Ronald McDonald House Charities and has been its Founder and President in Argentina. He holds a B.A. degree in Economics from Emory University in
Atlanta in 1971 and an M.B.A. degree from IMD in Lausanne, Switzerland in 1976.</p>
        </div>    
            <div class="col-md-6 box2">
            <div id="speaker2" class="center"></div>
            <h2>Karenann Terrell</h2>
            <h5>CIO</h5>
            <h6>Walmart</h6> 
                <p class="somemargins">Karenann Terrell is executive vice president and chief information officer for Wal-Mart Stores, Inc. She has responsibility for the company’s
global technology including stores and clubs, supply chain, merchandising, security, data/analytics and enterprise infrastructure. Karenann leads
a team who develop innovative technology solutions to help customers get the products they want, in the way they choose, whether it be in
stores and clubs, online or via mobile device. In 2013, Karenann was named CIO of the Year by the National Association of Software & Services
Companies (NASSCOM).She has been recognized as one of the 100 Most Influential Women in the Automotive Business by Automotive News.
She earned a bachelor’s degree from Kettering University and a master’s degree from Purdue University, both in electrical engineering.</p>
        </div>  
            
            <div class="col-md-6 box2">
            <div id="speaker3" class="center"></div>
            <h2>Deniz Mizne</h2>
            <h5>CEO</h5>
            <h6>Lemann Foundation</h6> 
                <p class="somemargins">Deniz heads the private foundation established by global entrepreneur Jorge Paulo Lemann to increase the quality of public education in Brazil. He is also chairman of
the board of Instituto Sou da Paz and serves on other boards in the areas of education, human rights and public safety. Before joining the Foundation, Denis was
founder and Executive Director of Instituto Sou da Paz, a leading Brazilian NGOs focused on violence prevention. He has contributed to the approval of the
“Disarmament Statute,” one of the most modern pieces of legislation to control the use of guns. After being enacted, the law helped reduce homicides for the first time
in decades in the country - thousands of lives have been saved. By developing several crime prevention projects with young people in the most violent places in Sao
Paulo, and working to improve the work of the police and criminal justice systems, Sou da Paz has helped more than a million people. Its work has been recognized as
one of the reasons why the city of Sao Paulo was able to reduce by 80% its homicide rate in the last decade</p>
        </div>  
        
          <div class="col-md-6 box2">
            <div class="center" id ="speaker18"></div>
            <h2>Andres Moreno</h2>
            <h5>CEO/Founder</h5>
            <h6>Open English</h6> 
                <p class="somemargins">Andres Moreno is the Founder, Executive Chairman, and CEO of Open English, the leader in internet-based English language instruction.Besides his role as
engaged CEO and occasional TV ad actor, Moreno is a multifaceted entrepreneur involved in a myriad of projects of global impact. In 2013 he was appointed
member of the Board of Directors of Endeavor Miami, a leading global promoter of entrepreneurship in emerging markets present in more than 16
countries, including 6 in Latin America. He is also a member of YPO Americas Gateway chapter, the world's leading network of Chief Executives. Moreno also
travels frequently to Spanish- and Portuguese-speaking countries to hold conferences on success and entrepreneurship.
In 2014, Andres Moreno founded his latest incursion, Next University, an online higher education institute that is bringing job-ready skills to the emerging
middle class in LatAm.
</p>
        </div>  
            
            
               <div class="col-md-12 box2">
            <div class="center speakerfillerbig" ></div>
            <h2>Alfie Vivian</h2>
            <h5>Unilever</h5>
            <h6>Vice President, Refreshment North America</h6> 
                   <p class="somemargins"> <strong>Alfie joined Unilever after college as a Management Trainee and has since had an incredibly successful international career in Unilever Marketing! Don’t miss this opportunity to learn what it takes to be a leader in today’s dynamic business world!</strong>
</p>
        </div> 
            
            
            
            
           
        
        
            
            </div>
        
        </div>
        </div>

		<!-- Clear :) -->
		<div class="clear"></div>
	</div>
	<!-- End Content -->
	
<br>
<br>
	<!-- Start Content -->

	<div class="clear"></div>
    <div class="container">
    <div class = "text-center">
        <a href="#muchlatin" data-toggle="collapse"><h3>Click Here for More Speakers</h3></a></div>
<br />
    
    <div class = "row text-center g-pad-bottom collapse" id ="muchlatin">
    
        
        <div class="col-md-12">
            
             <div class ="col-md-4 box">
            <div class = "portait center" id="speaker69"></div>
        <h2>Pablo Ciano </h2>
        <h5>CEO</h5>
        <h6>Central and South America DHL Express </h6>
        <p>Pablo Ciano is CEO of DHL LaTam and is a member of the Express Americas Management Board.
In DHL, he built up the Customer Service Group, supported the CEO Express USA as Chief of Staff
during the restructure of the USA operations and lead IT. To better embed IT into the organization, as
CIO Express Americas, Pablo succesfully consolidated the 11 Service Desks across the region, redesigned the structure, and
implemented the Latin America Telecoms Optimization in 16 countries.  On top of his IT responsibilities, he is managing 22 call centers across the
Americas region with more than 3000 customers service advisors. He has developed and implemented enhanced customer experience and
technology for cash customers as part of the Retail Segment expansion.
            </p> 
        </div>
            
             <div class ="col-md-4 box">
            <div class = "portait center" id ="speaker11"></div>
        <h2>Roberto Zamora </h2>
        <h5>President</h5>
        <h6>Grupo Lafise</h6>
        <p>Zamora is founder and chairman of Miami-based Latin American Financial Services (Lafise), which has provided
locally run currency exchange and investment-banking services throughout Central America. He also heads Nicaragua's Banco de Credito
Centroamericano (Bancentro), which many regard as that nation's most technologically advanced bank. Zamora began his career with Citibank
in Nicaragua twenty-one years ago, amid that nation's civil war.
            </p> 
        </div>
    
            <div class="col-md-4 box">
            <div id="speaker4" class= "portait center"></div>
            <h2>Cecilia Riviello</h2>
                
            <h6>VP Ventas North of Latin America, Avon/Founder and CEO, Balanceship Consultoria</h6> 
                <p>Experiencia como VP y Gerente General de empresas como Avon, Natura, L´Oreal, Liz Claiborne, Estee Lauder. He sido conferencista a nivel internacional
en Harvard Business School con temas de Sustentabilidad, en el Seminario de Talento Femenino y Alta Dirección del IPADE en Miami Mayo 2015, en el
seminario de alta diecacon femenina en el IDE Ecuador - Febrero 2016 y desarrollo de Liderazgo en diversos foros como “Mujeres de Éxito en WTC, Abril
2015” y en varias universidades en México (Anáhuac, ITESM, UNAM, UVM). Reconocida como una de las mujeres más poderosas de México por Expansión
en el 2012, 2014 y 2015, como la Mujer Ejecutiva del año en abril del 2013 por Grupo Mundo Ejecutivo, rankeada entre las 25 ejecutivas más destacadas de
Mujer Ejecutiva 2015 y obtuvo el tercer lugar de las “100 líderes con mejor reputación en México” de acuerdo a MERCO (monitor empresarial de reputación
corporativa).</p>
        </div> 
             <div class ="col-md-4 box">
            <div class = "portait center" id ="speaker8"></div>
        <h2>Alvio Barrios </h2>
        <h5>Senior VP</h5>
        <h6>Americas Enterprise/Juniper Neworks</h6>
        <p>As Senior Vice President of Sales, Alvio Barrios leads the Enterprise Vertical Industries and Commercial businesses for the Americas where he is responsible
for driving sales, services, and go-to-market strategy. He served as Vice President for U.S. and Latin American markets at Ciena Communications
and was critical in the integration of Nortel Metro Ethernet Networks. Prior to Ciena, he served at Nortel for 16 years, holding
various executive positions in Engineering, Marketing and Sales. Bringing his experience to Juniper, Barrios leads high performance teams with major Service Provider and Enterprise customers.
            </p> 
        </div>
            
             <div class ="col-md-4 box">
            <div class = "portait center" id="speaker14"></div>
        <h2>John McIntire</h2>
        <h5>Investor</h5>
        <h6>Open English</h6>
        <p>John is an early stage investor in educational technology. He led the angel investment in and is a director on
Open English, an online English-teaching school which has attracted over 400,000 students and has raised $120 million in venture capital. He is actively involved in various non-profit initiatives related to his native Cuba, including being chairman of the Cuba
Emprende Foundation, the largest entrepreneur training program and the only micro business incubator/accelerator
on the island. John is also a director of the US-Cuba Business Council and an advisor to the Engage Cuba Policy Council and the Council of the Americas’ Cuba
Working Group.
            </p> 
        </div>
            
             <div class ="col-md-4 box">
            <div class = "portait center" id = "speaker15"></div>
        <h2>Marcos Jorge Leon</h2>
        <h5>Managing Partner</h5>
        <h6>Tamroc Partners</h6>
        <p>Mr. Jorge has extensive experience in private equity, portfolio management, and asset management. Prior to GLJ/Grupo Leon Jimenes, Mr. Jorge founded
Tamroc Partners, a small cap Private Equity firm based out of Boston, where he was responsible for sourcing and deploying capital into majority equity
positions. Mr. Jorge also worked as an investment professional for Coventry Development Corporation, a multi-billion dollar asset manager with headquarters
in NYC. Mr. Jorge has nearly ten years of experience investing in small and early-stage companies and serves on seven boards. Mr. Jorge earned his MBA
from the Harvard Business School, and his BS in Finance from Babson College
            </p> 
        </div>
            
           
 
             <div class ="col-md-4 box">
            <div class = "portait center" id="speaker17"></div>
        <h2>Lety Nettles</h2>
        <h5>Walmart</h5>
        <p> As a corporate technology executive, an enterprise architecture/transformation leader, and an entrepreneur, specializing in linking strategy to operations by delivering rapid transformations through business pattern recognition. After studying business patterns for over 20 years, Letty developed a formal practice for quickly recognizing, capturing and translating business behavior.She has proven success with implementing and managing large and small corporate technology organizations with assignments that range from multi-year cross-organizational transformations to 30-day precision-point deliveries.
            </p> 
        </div>
            
            
            
        <div class ="col-md-4 box">
            <div class = "portait center" id ="speaker5"></div>
        <h2>Robert Koffler </h2>
        <h5>CEO</h5>
        <h6>Biscayne Americas Advisers</h6>
        <p>Robert Koffler is the founder and CEO of BiscayneAmericas Advisers LLC a SEC registered institutional investment advisory firm and of Lera Investment Technologies LLC (‘LIT’) a Consumption Outcome based IT funding company.  At LIT infrastructure technologies opportunities such as those related to Cloud, XaaS or the Internet of Everything are selected and funded through the global footprint of LIT’s partners and clients.  Previously Mr. Koffler was President of Americas Trust Bank in Miami and Director and Executive Vice President of Vestrust Securities Inc. and Citibank. He has BSBA in Finance from Boston University.
            </p> 
        </div>
        <div class ="col-md-4 box">
            <div class = "portait center" id ="speaker6"></div>
        <h2>Hernan Fernandez </h2>
        <h5>Co-Founder, Managing Partner</h5>
        <h6>Agnel Ventures Mexico</h6>
        <p>Hernan is CoFounder and Partner at Angel Ventures Mexico, the first professionally managed Angel Investor Network in the country with a total of 14 Million USD invested, and Angel Group operations in Mexico City, Guadalajara, Sonora and
Tijuana/San Diego, CA, Lima, Peru and Colombia. He is also a Managing Partner for the AVM Coinvestment Fund I, a 20MM Fund that has
coinvested in over 15 companies with fellow Angels, Networks and Funds worldwide in Latin American Deals. Hernan also worked as a
consultant for the sustainable business initiative of the United Nations Development Program in New York and Paraguay.
            </p> 
        </div>
 
                     
     <div class ="col-md-4 box">
        <div class = "portait center" id ="speaker7"></div>
        <h2>Gilberto Crombe </h2>
        <h6>Global Chairman</h6>
        <h6>Entrepreneur's Organization</h6>
        <p>A long-time EO leader, Gilberto Crombé was Director and Board Liason and is now Global Chairman on the EO Global Board of Directors. He was also Education Chair, International Liaison, and Mentorship Chair for EO Monterrey, as well as Regional Director (LAC) and Strategic Alliances Director. Under his leadership, LAC produced four Rock Star chapters, introduced new chapters (e.g.EO Guadalajara) and significantly increased membership to 557.
            </p> 
        </div>
            
              
        
      <div class ="col-md-4 box">
            <div class = "portait center" id ="speaker11"></div>
        <h2>Roberto Zamora </h2>
        <h5>President</h5>
        <h6>Grupo Lafise</h6>
        <p>Zamora is founder and chairman of Miami-based Latin American Financial Services (Lafise), which has provided
locally run currency exchange and investment-banking services throughout Central America. He also heads Nicaragua's Banco de Credito
Centroamericano (Bancentro), which many regard as that nation's most technologically advanced bank.
            </p> 
        </div>
            
      <div class ="col-md-4 box">
            <div class = "portait center" id ="speaker13"></div>
        <h2>Alvaro de Marichalar</h2>
        <h5>Founder</h5>
        <h6>Telesat</h6>
        <p>Álvaro de Marichalar y Sáenz de Tejada. Academic of the Royal Sea Academy of Spain. Born in Pamplona, Navarra. Kingdom of Spain Sailor,
Adventurer, Entrepreneur and Lecturer. In 1984 he founded TeleSat, one of the first companies to supply systems for satellite television
reception in Spain, England and France. Presently he manages his own mobile-phone sales and recycling company in Spain and other
European countries. His passion is sailing; an activity he combines with his business commitments. Since 1982 he has carried out 39 maritime
expeditions, winning eleven World Records. With his sea crossing expeditions he raises humanitarian aid for NGO, such as Mensajeros de la
Paz or Tierra de Hombres.

            </p> 
        </div>
         
              <div class ="col-md-4 box">
            <div class = "portait center" id ="speaker9"></div>
        <h2>Jonathan Bournigal</h2>
        <h5>President</h5>
        <h6>Carabela Search and Management</h6>
        <p>Basbson College '07 Business Administration, Fianace and Economics. MBA '13 HBS. Five years of experience as an Investment Banker at Citi Group. 
            </p> 
        </div>
        
    
        
            
    </div>
    </div>
   
    </div>
    

	<!-- Clear :) -->
	<div class="clear"></div>
	<!-- End Content -->
<div class="section divider">
		<a class="scroll" id="schedule"></a>
	</div>
    
    <center><img src="img/Schedulefinal.png" id="scheduleimg" width ="65%"/></center>

    
    
    <!-- Start Section Divider -->
	<div class="section divider">
		<h2 id="servicestitle">Special Events</h2>
		<a class="scroll" id="specialevents"></a>
	</div>
	<!-- End Section Divider -->
    
    <div class= "container">
        <div class="col-md-6 center">
            <center> <img src="img/gallery/1.%20Exito%20Workshop.PNG" class="center" width = "85%" /></center>
        </div>
    <div class="text-center">
        <div class="col-md-6 center">
    <h1>Workshop: Exito with Andres Moreno</h1>
            <h4>Éxito with Andres Moreno is an intensive program designed for entrepreneurs that are looking to turn ideas into real businesses and executives that are looking to develop a creative environment within their businesses. <b>Don't forget to RSVP for this free event when you buy your conference ticket.</b> The workshop will take place during the conference 5.30-7.00 pm at Olin Auditorium. <br /> <br /> <br /></h4>
    
    </div> 
  
    </div>
        
                <div class = "col-md-6">

                    <center> <img src="img/gallery/2.%20OpenEnglish%20Recruiting%20Event.jpg" width = "85%"/></center>
        </div>
      <div class="text-center">
        <div class="col-md-6 center">
    <h1> Recruiting Event: </h1>
            <h4>OpenEnglish will host a recruiting event for both undergrads and grads that will take place during lunch. This event is limited to 30 people, so make sure to save your spot now! <br /> <br /><a style ="font-size: 1em;" href= "https://docs.google.com/a/babson.edu/forms/d/1JTex38SDV87Lwpe2U23TpwZwyH7OtDU-6LSmMoezWuQ/viewform?c=0&w=1" target="_blank">Click Here to Register</a> <br /> <br /> <br /> <br />
        </h4>
    
    </div>
    </div>        
        <div class="col-md-6"><center><img src = "img/gallery/3.%20Startup-Showcase.png" width = "85%"/> </center></div>
        
        
    
      <div class="text-center">
        <div class="col-md-6 center">
    <h1> Start-Up Event: </h1> 
            <h4>The 8th edition of the Babson Latin American Forum - "I Am Decision Maker" is finally here! and to make this experience even greater, we want to show case 4 startups during our forum. 
                This is a great opportunity to have exposure to more than 400 attendees and top influential speakers. If you're interested, here are the requisites:
                <br />
                
                
                <a  style ="font-size: 1em;" href="https://www.eventbrite.com/e/babson-8th-latin-american-entrepreneurship-forum-decision-markers-tickets-22459278306" target="_blank">1. Buy Your Tickets Here to the Forum</a>
                
                <br /> 
                 <a  style ="font-size: 1em;" href="https://docs.google.com/forms/d/1oLFh5_baL8qEJ_lxiIzV5yTX4RX3ArtrGO4wYWXvohk/viewform?c=0&w=1"target="_blank" >2. Register Here</a>
                <br />  
                3. Have a stand and pitch ready!</h4>
                
        
    
    </div>
    </div>
        
        
        
        
        
    </div>
    
    <div class="clear"></div>
    
    <!-- Start Section Divider -->
	<div class="section divider">
		<h2 id="servicestitle">Our Sponsors</h2>
		<a class="scroll" id="sponsors"></a>
	</div>
	<!-- End Section Divider -->
    <div class="text-center">
        <h1 id="platinum">PLATINUM Sponsors</h1>
        
       <img src="img/Juniper%20Networks.png" width="35%">
       
        <img src="img/sga.jpg" width="15%">
    <h1 id="gold">Gold Sponsors</h1>
        <div class="col-md-4"> <center>
        <img src="img/Grupo%20Unicomer%20(alta).jpeg" width= "65%"></center>
        </div>
        
        <div class="col-md-4"> <br /> <br /><center>
        <img src="img/Pedego.png" width= "65%"> </center>
        </div>
        <div class="col-md-4"> <center>
        <img src="img/Babson_EXECED.jpeg" width= "65%"></center>
        </div>
    </div>
    
    <div class="clear"></div>
    <br/><br />
    <div class="text-center">
    <h1 id="silver">Silver Sponsors</h1>
         <div class="col-md-3"><center>
             <img src="img/blankcenter.jpg" width="80%"></center>
        </div>
        <div class="col-md-3"> <center>
            <img src="img/Diversity%20&%20Inclusion.png" width= "50%"></center>
        </div>
        
        <div class="col-md-3"> <center>
        <img src="img/cutler.jpg" width="80%"></center>
        </div>
        <div class="col-md-3"> <center>
        <img src="img/Babson_LEWIS_2C.jpg" width="65%"></center>
        </div>
    </div>
    <div class="clear"></div>
    <div class= "text-center">
    <h1 style="color:#cd7f32;">Bronze Sponsors</h1>
        <div class="col-md-12">    <center> <img src="img/Glavin%20Office.png" width = "15%"/></center> </div>
        
    </div>
    <div class="clear"></div>
    <!-- Start Section Divider -->
	<div class="section divider">
		<h2 id="servicestitle">Gallery</h2>
		<a class="scroll" id="contact"></a>
	</div>
	<!-- End Section Divider -->
        <div class="container">
           <div class = "content">
            
               <div id="cp_widget_d46677c3-ba1d-425e-875b-510857a222d7">...</div><script type="text/javascript">
var cpo = []; cpo["_object"] ="cp_widget_d46677c3-ba1d-425e-875b-510857a222d7"; cpo["_fid"] = "AkGAGWtD5XKD";
var _cpmp = _cpmp || []; _cpmp.push(cpo);
(function() { var cp = document.createElement("script"); cp.type = "text/javascript";
cp.async = true; cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
var c = document.getElementsByTagName("script")[0];
c.parentNode.insertBefore(cp, c); })(); </script><noscript>Powered by Cincopa <a href='http://www.cincopa.com/video-hosting'>Video Hosting</a> for Business solution.<span>New Gallery 2016/3/24</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2848</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/10/2015 2:57:43 PM</span><span>width</span><span> 4288</span><span>cameramodel</span><span> NIKON D90</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2832</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/9/2015 11:20:52 PM</span><span>width</span><span> 4256</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2832</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/10/2015 1:40:50 PM</span><span>width</span><span> 4256</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2703</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/9/2015 11:23:09 PM</span><span>width</span><span> 4062</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2832</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/10/2015 1:42:19 PM</span><span>width</span><span> 4256</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2832</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/10/2015 1:43:18 PM</span><span>width</span><span> 4256</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 3673</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/9/2015 11:27:04 PM</span><span>width</span><span> 2444</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2832</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/10/2015 1:43:18 PM</span><span>width</span><span> 4256</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2832</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/10/2015 1:43:18 PM</span><span>width</span><span> 4256</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 3970</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/9/2015 11:29:04 PM</span><span>width</span><span> 2642</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2832</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/10/2015 1:47:34 PM</span><span>width</span><span> 4256</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 3846</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/9/2015 11:31:21 PM</span><span>width</span><span> 2559</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2832</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/10/2015 1:48:09 PM</span><span>width</span><span> 4256</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2402</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/9/2015 11:32:49 PM</span><span>width</span><span> 2402</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2832</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/10/2015 1:48:41 PM</span><span>width</span><span> 4256</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2324</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/9/2015 11:32:58 PM</span><span>width</span><span> 3492</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2832</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/10/2015 1:48:52 PM</span><span>width</span><span> 4256</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 4106</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/9/2015 11:33:33 PM</span><span>width</span><span> 2732</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2405</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/10/2015 1:49:27 PM</span><span>width</span><span> 3614</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 3834</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/9/2015 11:33:51 PM</span><span>width</span><span> 2550</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2188</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/10/2015 1:49:40 PM</span><span>width</span><span> 3288</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 3628</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/9/2015 11:34:23 PM</span><span>width</span><span> 2414</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2848</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/10/2015 1:50:02 PM</span><span>width</span><span> 4288</span><span>cameramodel</span><span> NIKON D90</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 3810</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/9/2015 11:34:50 PM</span><span>width</span><span> 2535</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2558</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/10/2015 1:51:05 PM</span><span>width</span><span> 2558</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 3682</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/9/2015 11:35:30 PM</span><span>width</span><span> 2450</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2546</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/10/2015 1:51:27 PM</span><span>width</span><span> 3826</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 3925</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/9/2015 11:36:27 PM</span><span>width</span><span> 2612</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2832</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/10/2015 1:52:07 PM</span><span>width</span><span> 4256</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2566</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/9/2015 11:38:15 PM</span><span>width</span><span> 3856</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2832</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/10/2015 1:52:43 PM</span><span>width</span><span> 4256</span><span>cameramodel</span><span> NIKON D3S</span><span>flash</span><span> 13</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 2630</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 4/9/2015 11:38:26 PM</span><span>width</span><span> 3952</span><span>cameramodel</span><span> NIKON D3S</span></noscript>
    
    </div>
    </div> 
                

    <div class="clear"></div>
	
	<!-- Start Section Divider -->
	<div class="section divider">
		<h2 id="servicestitle">Contact Us</h2>
		<a class="scroll" id="contact"></a>
	</div>
	<!-- End Section Divider -->

	<!-- Start Content -->
	<div class="content contact">
       
        <form method="post">
		<!-- Start Main Paragraph -->
		<p class="main dark-gray">Drop us a Comment</p>
		<!-- Start Main Paragraph -->
		<?php echo $result; ?>
            
		<label for="name">Name</label><br>
		<input type="text" name="name" value="<?php echo $_POST['name']; ?>" class="form-control"><br>
		
		<label for="email">Email</label><br>
		<input type="text" name = "email"  value="<?php echo $_POST['email']; ?>" class="form-control"><br>
		
		<label>Message</label><br>
		<textarea rows="3" class="form" name="comments" value = "<?php echo $_POST['comments']; ?>"></textarea>

        <input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit"/>
        </form>

		<!-- Clear :) -->
		<div class="clear"></div>
	</div>
	<!-- End Content -->
	
	<footer class="footer">
        <h6> © Copyright 2016  | <a href="http://babsoncode.com/" target="_blank">CODE </a>, <a href="http://www.eaglewu.com/" target="_blank">Website Made By Eagle Wu</a></h6>
	</footer>

    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/scrollreveal.min.js"></script>
    <script>
     window.sr = ScrollReveal();
        sr.reveal('.box');
        sr.reveal('.box2');
        sr.reveal('.servicestitle', {delay:500}, {origin: 'left'});
        sr.reveal('.sched', {origin: 'left'});
             
    </script>
</body>
<!-- End Body -->
</html>
