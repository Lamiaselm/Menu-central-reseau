<?php 
	require_once("header/header.php");


$link= 'https://matrix.djiant.com/api/markers.php?network=2';

	$url = curl_init();
curl_setopt($url, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
curl_setopt($url, CURLOPT_URL, $link);
$result = curl_exec($url);
curl_close($url);

$url= $_SERVER['SERVER_NAME'];

if ($url =='djiant.com' ) {
 echo'      <script type="text/javascript">
    $(window).on("load",function(){
        $("#Djiant-racine-popup").modal("show");
    });
</script>';
}

 ?>
<body>
  
        <div class="sideMenu" >
        <ul class="mr-1">
          <li  class="mt-2 ml-2 selected-menu" id="popupInfo-li" > <img  id="popupInfo-btn" width="22px" src="assets/new-icons/Acceuil-Reseau.svg" alt="" ></li>
          <li  class="mt-2 ml-2 "> <img   data-toggle="popover" data-placement="bottom" data-content="Voir le profil complet de Meryem ABDELLI dans D-Contacts" width="22px" id="btnFullscreen" src="assets/new-icons/Full-Screen.svg"  alt="" ></li>
          <li  class="mt-2 ml-2"> <img id="zoomin" width="22px" src="assets/new-icons/Zoomplus.svg" alt="" style="filter: invert(1);" ></li>
          <li  class="mt-2 ml-2"><img id="zoomout" width="22px" src="assets/new-icons/ZoomMinus.svg" alt="" style="filter: invert(1);" ></li>
          <li  class="mt-2 ml-2"><img  width="22px" src="assets/new-icons/SearchTree.svg" alt="" class=" disable"></li>
          <li  class="mt-2 ml-2 "  <?php if ($url =='djiant.com' ) {echo'btn-selectedd';} ?> data-target="#Djiant-racine-popup" data-toggle=""><img id="popupRacine-btn"   width="22px" src="assets/new-icons/MenuDomains.svg" alt=""  class=" disable"></li>
          <li   class="mt-2 ml-2 " data-target="#Djiant-addserver-popup" data-toggle=""><img width="22px" src="assets/new-icons/IconServerPlus.svg" alt="" class=" disable"></li>
          <li  class="mt-2 ml-2 " data-target="#Djiant-about-popup" data-toggle=""><img  width="22px" src="assets/new-icons/AboutDjiant.svg" alt="" class=" disable"></li>
          

        </ul>

    </div>
            <div class="rightMenu" >
        <ul class="mr-1">
        	        

          
        </ul>

    </div>
    <div   class="popupInfo "><div  class="body"> 
      <div class="thumbnail">
                   
                   <div class=" popupInfo-header">
                    <img  src="assets/image/Technoparks.png" alt="Technoparks Djiant" >
                      
                    </div>
                    <div class="caption popupInfo-body">
                      <div class="row">
                        <div class="col-md-12">
                          <h4 style=" font-size: 18px;">TECHNOPARKS </h4>
                          <p style="font-family: calibri; font-weight: 100;"> Places where ideas, innovations and <br> entrepreneurs thrive and change the world.  </p>
                          </div>
                      </div>
                      <div class="row">
                              <div class="col-md-4">
                                <h3 style="font-size: 30px;margin-top: 10px" >71</h3>
                                <p>Covered countries   </p>
                              </div>
                             
                              <div class="col-md-4">
                                <h3 style="font-size: 30px;margin-top: 10px">900</h3>
                                <p>Listed communties    </p>
                              </div>
                              
                            </div>
                    </div>
                  </div>

    </div>
  </div>
<div class="body" >
    <div id="map"></div>
</div>
<div id="Djiant-racine-popup" class="modal  "  >
              <div class="modal-header ">
                  <button type="button" id="popupClose" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <div class=" d-flex line1" style="margin-left: 20px;"><img src="assets/image/logo-djiant.svg" class="icon mr-2"><h4>Djiant  </h4></div>
              </div>
               <div class="modal-header ">
               	 <div class=" row d-flex line1" style="margin-left: 10px;">
               	 	 <div class="col-md-3 ">
			<div class=" note-header">Domaines</div>
               	 </div>
               	 <div class="col-md-9 ">
			<div class=" note-header">Réseaux</div>
               	 </div>
              
		</div>
              </div>
              <div class="modal-body">
              	<div class="row">
              		<div class="col-md-3" style="padding-left: 24px;padding-right: 0px;">
              			<ul id="racine">						
				  			  <li style="padding: 0px 0px;"><span class="racine racine-down"> Domaines</span>
				  			  	<ul class="domaine active">
				  			  		
				  			  						      				<li id="1 " class="domaine-list selected">
				      				 <img class="" src="assets/image/All.svg" style=" width:22px; margin-right: 6px;">  All networks </li>  
                       <li id="1 " class="domaine-list ">
                       <img class="" src="assets/image/Local.svg" style=" width:22px; margin-right: 6px;"> Local economies </li>  
				      				
				      							      				<li id="2 " class="domaine-list ">
				      				 <img src="assets/image/Digital.svg" style=" width:22px; margin-right: 6px;"> Digital </li>  
				      				
				      							      				<li id="3 " class="domaine-list">
				      				 <img class="" src="assets/image/Education.svg" style=" width:22px; margin-right: 6px;"> Education </li>  
				      				
				      							      				<li id="4 " class="domaine-list">
				      				 <img class="" src="assets/image/Entrepreneurship.svg" style=" width:22px; margin-right: 6px;"> Entrepreneurship </li>  
				      				
				      							      				<li id="13 " class="domaine-list">
				      				 <img class="" src="assets/image/Industry.svg" style=" width:22px; margin-right: 6px;"> Industry </li>  
				      				
				      			
   			   					</ul>
				  			  </li>
							</ul>
              		</div>
              		<div class="col-md-9" style="padding-left: 28px;">
              		 <div class="row">
                <div class=" col-md-4" >
                  <a href="https://technopark.djiant.com/" target="_blanck" class="Djiant-racine-thumbnail ">
                  <div class="caption  ">
                  <span class="icon ">
                    <img src="assets/image/Miniature-generique-Technoparks.png" alt="">
                  </span>
                    <p style="padding-top: 10px; font-size: 13px; padding-bottom: 0px; text-align: center;" >Technoparks </p >
                  </div>
                  </a>
                </div>
                <div class=" col-md-4" >
                  <a href="javascript:;" class="Djiant-racine-thumbnail ">
                  <div class="caption  ">
                  <span class="icon ">
                    <img src="assets/image/Miniature-generique-Chambworks.png" alt="">
                  </span>
                    <p style="padding-top: 10px; font-size: 13px; padding-bottom: 0px; text-align: center;" >Chamb.works </p >
                  </div>
                  </a>
                </div>
                <div class=" col-md-4" >
                  <a href="javascript:;" class="Djiant-racine-thumbnail ">
                  <div class="caption  ">
                  <span class="icon ">
                    <img src="assets/image/Miniature-generique-ITcommunities.png" alt="">
                  </span>
                    <p style="padding-top: 10px; font-size: 13px; padding-bottom: 0px; text-align: center;" >IT Communities </p >
                  </div>
                  </a>
                </div>
                
              </div>
              <div class="row">
                <div class=" col-md-4" >
                  <a href="javascript:;" class="Djiant-racine-thumbnail ">
                  <div class="caption  ">
                  <span class="icon ">
                    <img src="assets/image/Miniature-generique-Biotech.png" alt="">
                  </span>
                    <p style="padding-top: 10px; font-size: 13px; padding-bottom: 0px; text-align: center;" >Biotechs </p >
                  </div>
                  </a>
                </div>
                <div class=" col-md-4" >
                  <a href="javascript:;" class="Djiant-racine-thumbnail ">
                  <div class="caption  ">
                  <span class="icon ">
                    <img src="assets/image/Miniature-generique-BusinessSchools.png" alt="">
                  </span>
                    <p style="padding-top: 10px; font-size: 13px; padding-bottom: 0px; text-align: center;" >Business Schools </p >
                  </div>
                  </a>
                </div>
                <div class=" col-md-4" >
                  <a href="javascript:;" class="Djiant-racine-thumbnail ">
                  <div class="caption  ">
                  <span class="icon ">
                    <img src="assets/image/Miniature-generique-Food.png" alt="">
                  </span>
                    <p style="padding-top: 10px; font-size: 13px; padding-bottom: 0px; text-align: center;" >Food </p >
                  </div>
                  </a>
                </div>
                
              </div>
              <div class="row">
                <div class=" col-md-4" >
                  <a href="javascript:;" class="Djiant-racine-thumbnail ">
                  <div class="caption  ">
                  <span class="icon ">
                    <img src="assets/image/Miniature-generique-Industry.png" alt="">
                  </span>
                    <p style="padding-top: 10px; font-size: 13px; padding-bottom: 0px; text-align: center;" >Industry </p >
                  </div>
                  </a>
                </div>
                <div class=" col-md-4" >
                  <a href="javascript:;" class="Djiant-racine-thumbnail ">
                  <div class="caption  ">
                  <span class="icon ">
                    <img src="assets/image/Miniature-generique-ITHealth.png" alt="">
                  </span>
                    <p style="padding-top: 10px; font-size: 13px; padding-bottom: 0px; text-align: center;" > IT Health </p >
                  </div>
                  </a>
                </div>
                <div class=" col-md-4" >
                  <a href="javascript:;" class="Djiant-racine-thumbnail ">
                 <div class="caption  ">
                  <span class="icon ">
                    <img src="assets/image/Miniature-generique-Regional.png" alt="">
                  </span>
                    <p style="padding-top: 10px; font-size: 13px; padding-bottom: 0px; text-align: center;" >Regional </p >
                  </div>
                  </a>
                </div>
                
              </div>  
              		</div>
              		
              	</div>
   
              </div>
            </div>
<div id="DFiles-popup" style="left: 55%;" class="modal container fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false">
                <div class="modal-header container-full-width">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <div class=" d-flex line1" style="margin-left: 3px;"><img src="assets/new-icons/DFiles.svg" class="icon mr-2"><p class="title">D-Files  </p></div>
                </div>
                <div class="modal-body" style="padding-top: 1px; padding-right: 0px; ">
                  <div class="col-md-4 ">
                    <h3 style="font-size: 20px; margin-bottom: 20px; font-weight: 700;">OFFER IN YOUR SPECIALITY OR REGION A RELEVANCE AND QUALITY OF DATA THAT GENERALIST SEARCH ENGINES CANNOT PROVIDE.  </h3>
                    <p>
                      D - Files is a Djiant service that allows you to propose a powerful and relevant research tool on the actors and resources of your regional or sectoral community:
                    </p>
                    <ul style="list-style-type: disc; padding-left: 15px;" >
                      <li class="module-argument" >
                      Offer companies and professionals from your community - but also from other Djiant communities - to publish and promote their know-how and messages in D - Files: company profile, products, services, job offers, commercial successes, nominations...</li>
                      <li class="module-argument">
                      Enable millions of users concerned by your community to search and locate information with a new relevance: search by keywords, thematic and geographic filters…</li>
                      <li class="module-argument">
                        Bring back to you the traffic and revenues from the search for information related to your thematic or geographical area.    
                      </li>
                    </ul>
                    <br>
                    <p>
                     Available on: November 2020.
                    </p>
                    
                    <button disabled style="border-radius: 3px !important;font-size: 14px;  " type="button" class="btn btn-default" id="voir_maquette">See the mock-up</button>
                  </div>


                  <div class="col-md-8 " style="padding-right: 0px;">
                               <div class="slideshow-container">

                                      <div class="mySlides-DFiles fade-slide">
                                        <div class="numbertext"></div>
                                        <img src="assets/image/modules/D-Files-page-1.png" style="width: 100%; border-radius: 3px !important;"  alt="">
                                        <div class="text"></div>
                                      </div>

                                      <div class="mySlides-DFiles fade-slide">
                                        <div class="numbertext"></div>
                                        <img src="assets/image/modules/D-Files-page-2.png" style="width: 100%; border-radius: 3px !important;" alt="">
                                        <div class="text"></div>
                                      </div>

                                      <div class="mySlides-DFiles fade-slide">
                                        <div class="numbertext"></div>
                                        <img src="assets/image/modules/D-Files-page-3.png" style="width: 100%; border-radius: 3px !important;" alt="">
                                        <div class="text"></div>
                                      </div>

                                      <a class="prev" onclick="plusSlides_DFiles(-1)">&#10094;</a>
                                      <a class="next" onclick="plusSlides_DFiles(1)">&#10095;</a>

                            </div>
                                      

                                      <div style="text-align:left">
                                        <span class="dot-DFiles" onclick="currentSlide_DFiles(1)"></span> 
                                        <span class="dot-DFiles" onclick="currentSlide_DFiles(2)"></span> 
                                        <span class="dot-DFiles" onclick="currentSlide_DFiles(3)"></span> 
                                      </div>
                  </div>

                      
                </div>
                
              </div>
              <div id="DPages-popup" style="left: 55%;" class="modal container fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false">
                <div class="modal-header container-full-width">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <div class=" d-flex line1" style="margin-left: 3px;"><img src="assets/new-icons/DPages.svg" class="icon mr-2"><p class="title">D-Pages  </p></div>
                </div>
                <div class="modal-body" style="padding-top: 1px; padding-right: 0px; ">
                  <div class="col-md-4 ">
                    <h3 style="font-size: 20px; margin-bottom: 20px; font-weight: 700;">OFFER IN YOUR SPECIALITY OR REGION A RELEVANCE AND QUALITY OF DATA THAT GENERALIST SEARCH ENGINES CANNOT PROVIDE.  </h3>
                    <p>
                      D - Files is a Djiant service that allows you to propose a powerful and relevant research tool on the actors and resources of your regional or sectoral community:
                    </p>
                    <ul style="list-style-type: disc; padding-left: 15px;" >
                      <li class="module-argument" >
                      Offer companies and professionals from your community - but also from other Djiant communities - to publish and promote their know-how and messages in D - Files: company profile, products, services, job offers, commercial successes, nominations...</li>
                      <li class="module-argument">
                      Enable millions of users concerned by your community to search and locate information with a new relevance: search by keywords, thematic and geographic filters…</li>
                      <li class="module-argument">
                        Bring back to you the traffic and revenues from the search for information related to your thematic or geographical area.    
                      </li>
                    </ul>
                    <br>
                    <p>
                     Available on: November 2020.
                    </p>
                    
                    <button disabled style="border-radius: 3px !important;font-size: 14px;  " type="button" class="btn btn-default" id="voir_maquette">See the mock-up</button>
                  </div>


                  <div class="col-md-8 " style="padding-right: 0px;">
                               <div class="slideshow-container">

                                      <div class="mySlides-DPages fade-slide">
                                        <div class="numbertext"></div>
                                        <img src="assets/image/modules/D-Pages-page-1.png" style="width: 100%; border-radius: 3px !important;"  alt="">
                                        <div class="text"></div>
                                      </div>

                                      <div class="mySlides-DPages fade-slide">
                                        <div class="numbertext"></div>
                                        <img src="assets/image/modules/D-Pages-page-2.png" style="width: 100%; border-radius: 3px !important;" alt="">
                                        <div class="text"></div>
                                      </div>

                                      <div class="mySlides-DPages fade-slide">
                                        <div class="numbertext"></div>
                                        <img src="assets/image/modules/D-Pages-page-3.png" style="width: 100%; border-radius: 3px !important;" alt="">
                                        <div class="text"></div>
                                      </div>

                                      <a class="prev" onclick="plusSlides_DPages(-1)">&#10094;</a>
                                      <a class="next" onclick="plusSlides_DPages(1)">&#10095;</a>

                            </div>
                                      

                                      <div style="text-align:left">
                                        <span class="dot-DPages" onclick="currentSlide_DPages(1)"></span> 
                                        <span class="dot-DPages" onclick="currentSlide_DPages(2)"></span> 
                                        <span class="dot-DPages" onclick="currentSlide_DPages(3)"></span> 
                                      </div>
                  </div>

                      
                </div>
                
              </div>
                      <div id="DFigures-popup" style="left: 55%;" class="modal container fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false">
                <div class="modal-header container-full-width">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <div class=" d-flex line1" style="margin-left: 3px;"><img src="assets/new-icons/DFigures.svg" class="icon mr-2"><p class="title">D-Figures  </p></div>
                </div>
                <div class="modal-body" style="padding-top: 1px; padding-right: 0px; ">
                  <div class="col-md-4 ">
                    <h3 style="font-size: 20px; margin-bottom: 20px; font-weight: 700;">REALTIME AND HIGHLY TARGETED MARKET RESEARCH FOR YOUR COMMUNITY   </h3>
                    <p>
                      D - Figures is the first "Research Engine" on the market. It revolutionizes market research by offering real-time analysis simply by typing a keyword.
                    </p>
                    <ul style="list-style-type: disc; padding-left: 15px;" >
                      <li class="module-argument" >
                      Produce market studies related to your community (a region, sector of activity...) with a great precision and offer them in free or paid access according to your commercial policy.</li>
                      <li class="module-argument">
                      Propose real-time and continuous analysis with an unprecedented level of precision: company population, competition, job market, level of training, innovation intensity...</li>
                      <li class="module-argument">
                        Expand your attractiveness and your revenues by creating a vast collection of exclusive market studies.   
                      </li>
                    </ul>
                    <br>
                    <p>
                     Available on: November 2020.
                    </p>
                    
                    <button disabled style="border-radius: 3px !important;font-size: 14px;  " type="button" class="btn btn-default" id="voir_maquette">See the mock-up</button>
                  </div>


                  <div class="col-md-8 " style="padding-right: 0px;">
                               <div class="slideshow-container">

                                      <div class="mySlides-DFigures fade-slide">
                                        <div class="numbertext"></div>
                                        <img src="assets/image/modules/D-Figures.png" style="width: 100%; border-radius: 3px !important;"  alt="">
                                        <div class="text"></div>
                                      </div>

                                      

                                      

                                      <a class="prev" onclick="plusSlides_DFigures(-1)">&#10094;</a>
                                      <a class="next" onclick="plusSlides_DFigures(1)">&#10095;</a>

                            </div>
                                      

                                      <div style="text-align:left">
                                        <span class="dot-DFigures" onclick="currentSlide_DFigures(1)"></span> 
                                       
                                      </div>
                  </div>

                      
                </div>
                
              </div>
<div id="Djiant-addserver-popup" class="modal" >
              <div class="modal-header ">
                  <button type="button" id="popupClose" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <div class=" d-flex line1" style="margin-left: 20px;"><img src="assets/new-icons/IconServerPlus.svg" class="icon mr-2"><h4>Create a community </h4></div>
              </div>
               
              <div class="modal-body scrollable " style="padding-left:50px; padding-top: 20px; ">
              	<div class="row" style="margin-top: 20px;">
              		<div class="col-md-5 ">
              		<H4 style="font-size: 14px; color: #008DD2; margin-top: 0px;">COMMUNITY LEADERS</H4>
              		<h4 style="font-size: 20px; margin-top: 0px;">COME BACK TO THE FOREFRONT</h4>	
              		</div>
              	</div>
              	<div class="row" >
              		
              		<div class="col-md-6" >
              		<p class="create-communety" >CREATE YOUR COMMUNITY WITH DJIANT, NETWORK AND TAKE BACK THE LEAD ON THE WEB. TOGETHER.</p>
              		<p style=" color: #008DD2">Learn more</p>
              			
              		</div>
              	</div>
              	<div class="row" style="margin-top: 80px;">
              		<div class="col-md-5 ">
              	<h4 style="font-size: 20px;">	Create a professional community</h4>
              		</div>
              		
              	</div>
              	<div class="row" style="margin-top: 30px;">
              		<div class="col-md-3 " style="flex: 0 0 29%;max-width: 29%;">
              		<img src="assets/image/60x60.png" alt="">	
              		</div>
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<img src="assets/image/60x60.png"   alt="">	
              		</div>
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<img src="assets/image/60x60.png"   alt="">	
              		</div>
              	</div>
              	<div class="row" style="margin-top: 30px;">
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<h4>DJIANT FOR</h4>	
              		<H4 style="font-size: 17px; color: #008DD2; margin-top: 0px;">BUSINESS ASSOCIATIONS</H4>
              		<p class="djiant-for">Loyalize and value members of your association from only 99€ per month.</p>
              		<p style=" color: #008DD2">Coming soon</p>
              		</div>
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<h4>DJIANT FOR</h4>		
              		<H4 style="font-size: 17px; color: #008DD2; margin-top: 0px;">EDUCATION</H4>
              		<p class="djiant-for">Higher education institutions, enhance your ecosystem (Alumni, partners companies...) to recruit internationally.</p>
              		<p style=" color: #008DD2">Coming soon</p>
              		</div>
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<h4>DJIANT FOR</h4>		
              		<H4 style="font-size: 17px; color: #008DD2; margin-top: 0px;">LOCAL COMMUNITIES</H4>
              		<p class="djiant-for">Chambers of commerce, development agencies, technopoles... Actors of Territorial Marketing, expand on the web together and come back to the forefront.</p>
              		<p style=" color: #008DD2">Learn more</p>
              		</div>
              	</div>
              	<div class="row" style="margin-top: 30px;">
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<img src="assets/image/60x60.png" alt="">	
              		</div>
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<img src="assets/image/60x60.png"   alt="">	
              		</div>
              	</div>
              	<div class="row" style="margin-top: 30px;">
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<h4>DJIANT FOR</h4>	
              		<H4 style="font-size: 17px; color: #008DD2; margin-top: 0px; ">NEWSPAPERS</H4>
              		<p class="djiant-for">Specialized press and regional press book your Djiant Cluster and make sure to be unmissable in your field.</p>
              		<p style=" color: #008DD2">Coming soon</p>
              		</div>
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<h4>DJIANT FOR</h4>		
              		<H4 style="font-size: 17px; color: #008DD2; margin-top: 0px;">BRANDS</H4>
              		<p class="djiant-for">Make your ecosystem the first source of web traﬁc and marketing analytics for your products, your messages, your job oﬀers...</p>
              		<p style=" color: #008DD2">Coming soon</p>
              		</div>
              	</div>
   				<div class="row" style="margin-top: 80px;">
              		<div class="col-md-5 ">
              	<h4 style="font-size: 20px;">	Build an engaged community</h4>
              		</div>
              	</div>
              	              	<div class="row" style="margin-top: 30px;">
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<img src="assets/image/60x60.png" alt="">	
              		</div>
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<img src="assets/image/60x60.png"   alt="">	
              		</div>
              		
              	</div>
              	<div class="row" style="margin-top: 30px;">
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<h4>DJIANT FOR</h4>	
              		<H4 style="font-size: 17px; color: #008DD2; margin-top: 0px;">SCIENCE</H4>
              		<p class="djiant-for">The Djiant platform made available for scientiﬁc communities.</p>
              		<p style=" color: #008DD2">Coming soon</p>
              		</div>
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<h4>DJIANT FOR</h4>		
              		<H4 style="font-size: 17px; color: #008DD2; margin-top: 0px;">THE PLANET</H4>
              		<p class="djiant-for">Djiant's contribution to help communities working to protect environment and nature. </p>
              		<p style=" color: #008DD2">Coming soon</p>
              		</div>
              		
              	</div>
              </div>
            </div>
<div id="Djiant-about-popup" class="modal" >
              <div class="modal-header ">
                  <button type="button" id="popupClose" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <div class=" d-flex line1" style="margin-left: 20px;"><img src="assets/image/logo-djiant.svg" class="icon mr-2"><h4>About Djiant  </h4></div>
              </div>
               
              <div class="modal-body" style="padding-left:50px;">
              	<div class="row" style="margin-top: 20px;">
              		<div class="col-md-6">
              			<H4 style=" color: #008DD2; margin-top: 0px;">ABOUT DJIANT</H4>
              			<H4 style="font-size: 20px;  margin-top: 0px;">THE WEB. BY THE MANY. FOR THE MANY</H4>
              			LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE ET DOLORE MAGNA ALIQUA. CILLUM DOLORE EU FUGIAT NULLA PARIATUR. 
              		</div>
              		
              	</div>
   				<div class="row" style="margin-top: 30px;">
              		<div class="col-md-3 "style="flex: 0 0 31%;max-width: 31%;">
              		<h4>Lorem</h4>	
              		
              		<p class="djiant-for">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. cillum dolore eu fugiat nulla pariatur. </p>
              		</div>
              		
              	</div>
              </div>
            </div>
<script>
	        /**
         * Create new map
         */
        var infowindow;
        var map;
        var gray_icon =  'assets/markers/MarkerGris.svg' ;
        var blue_icon =  'assets/markers/MarkerBleu.svg' ;
        var locations = <?php echo $result ?>;
        var myOptions = {
          mapTypeControl: false,
          streetViewControl: false,
          zoomControl:false,
          fullscreenControl: false,
          zoom: 3,
          center: new google.maps.LatLng(33.8445935,2.325165),
          mapTypeId: 'roadmap',
          styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative",
    "stylers": [
      {
        "visibility": "on"
      }
    ]
  },
  {
    "featureType": "administrative.country",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#a4a4a4"
      }
    ]
  },
  {
    "featureType": "administrative.country",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "administrative.province",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#a4a4a4"
      }
    ]
  },
  {
    "featureType": "landscape",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#e3e3e3"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]

        };
        map = new google.maps.Map(document.getElementById('map'), myOptions);
        /**
         * loop through (Mysql) dynamic locations to add markers to map.
         */
        var i ; var confirmed = 0;
        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][2], locations[i][3]),
                map: map,
                icon :   locations[i][11] === '0' ?  gray_icon : blue_icon ,
                zIndex:   locations[i][11] === '0' ?  0 : 1 ,
                html: locations[i][11] === '0' ?  '  <div class="container-full-width"><div class="header"><div class=""><div class="row" > <div class="col-md-10" > <div class="container d-flex line1" style="padding-left: 5px;"><img src="assets/new-icons/Server.svg" class="icon mr-2 disable"><p class="title" style="font-weight: 600; padding-bottom: 2px;">'+locations[i][1]+'</p>  </div></div> <div class="col-md-2" > <div class="title-right" > <img src="assets/image/IconPIN.svg" style="width: 13px; margin: 6px 9px 0px 0px;"> <img src="assets/image/IconSHARE.svg" style="width: 13px; margin-top: 6px "></div></div></div><hr><img class="Imag-fond" src="assets/image/generic-fond-gris.png" alt="Technoparks Djiant"><img class="Logo-Fentre" src="assets/image/generic-logo-gris.png" alt="Technoparks Djiant"><div class="container titles row line2"><div style="padding-left: 17px;" class="border-left-1 padding-left-0 col-3"><p class="title">About</p></div><div class="border-left-1 padding-left-0 col-9"><p class="title">Ressources</p></div></div></div></div> <div class="content"> <div class="container row"> <div class="padding-left-0 col-3"><div class="tab-titles">  <h5 style="" class="title5">'+locations[i][1]+'</h5><p>'+  locations[i][7]+' , '+locations[i][12]+'</p></div> </div> <div class="padding-left-0 col-9"> <div class="row" style="margin-left: 0px;"> <div class="col-md-6 djiant-block-hoverd"><a class="djiant-link"href="'+locations[i][10]+'" target="_blank"> <div class="col-xs-4 "><img src="assets/image/Icone-Website.svg" width="65px"></div><div class="col-xs-8" style =""><h4 style="margin-top:0px; margin-bottom:0px;" >Website</h4> <p class="djiant-block">Clic to connect to community Website. </p></div></a></div> </div>  </div> </div> </div></div>'  :  '<div class="container-full-width"><div class="header"><div class=""><div class="row" > <div class="col-md-10" > <div class="container d-flex line1" style="padding-left: 5px;"><img src="assets/new-icons/Server.svg" class="icon mr-2"><p class="title" style="font-weight: 600; padding-bottom: 2px;">'+locations[i][1]+'</p>  </div></div> <div class="col-md-2" > <div class="title-right" > <img src="assets/image/IconPIN.svg" style="width: 13px; margin: 6px 9px 0px 0px;"> <img src="assets/image/IconSHARE.svg" style="width: 13px; margin-top: 6px "></div></div></div><hr><img class="Imag-fond" src="assets/image/generic-fond-gris.png" alt="Technoparks Djiant"><img class="Logo-Fentre" src="assets/image/generic-logo-gris.png" alt="Technoparks Djiant"><div class="container titles row line2"><div style="padding-left: 17px;" class="border-left-1 padding-left-0 col-3"><p class="title">About</p></div><div  class="border-left-1 padding-left-0 col-9"><p class="title">Ressources</p></div></div></div></div> <div class="content"> <div class="container row" style="padding-right: 0px;"> <div class="padding-left-0 col-3"><div class="tab-titles">    <h5 style="" class="title5">'+locations[i][1]+'</h5><p>'+locations[i][4]+' , '+locations[i][12]+'</p></div> </div> <div class="padding-left-0 col-9 scrollable-srv"> <div class="row" style="margin-left: 0px; margin-bottom: 15px;"> <div class="col-md-5 djiant-block-hoverd" style="flex: 0 0 48%; max-width: 48%; margin-right: 7px;"><a class="djiant-link"href="'+locations[i][10]+'" target="_blank"> <div class="col-xs-4 "><img src="assets/image/Icone-Website.svg" width="63px"></div><div class="col-xs-8" style =""><h4 style="margin-top:0px; margin-bottom:0px;" >Website</h4> <p class="djiant-block">Clic to connect to community Website. </p></div></a></div> <div class="col-md-5 djiant-block-nothoverd" style="flex: 0 0 48%; max-width: 48%; margin-right: 7px;"><a class="djiant-link"href="#" > <div class="col-xs-4 "><img src="assets/image/Icone-D-Files.svg" width="65px"></div><div class="col-xs-8 disabled-network" style =""><h4 style="margin-top:0px; margin-bottom:0px;" >D - Files</h4> <p class="djiant-block">2.884 publicaons products, jobs offers....</p></div></a></div></div>     <div class="row" style="margin-left: 0px;"> <div class="col-md-5 djiant-block-nothoverd" style="flex: 0 0 48%; max-width: 48%; margin-right: 7px;"><a class="djiant-link"href="#" > <div class="col-xs-4 "><img src="assets/image/Icone-D-Contacts.svg" width="66px"></div><div class="col-xs-8 disabled-network" style =""><h4 style="margin-top:0px; margin-bottom:0px;" >D - Contact</h4> <p class="djiant-block">28.522 pros to connect with. </p></div></a></div> <div class="col-md-5 djiant-block-nothoverd" style="flex: 0 0 48%; max-width: 48%; margin-right: 7px;"><a class="djiant-link"href="#" > <div class="col-xs-4 "><img src="assets/image/Icone-D-Directory.svg" width="66px"></div><div class="col-xs-8 disabled-network" style =""><h4 style="margin-top:0px; margin-bottom:0px;" >D - Directory</h4> <p class="djiant-block">385 companies listed. </p></div></a></div></div>       </div> </div> </div></div>',
              
            });
            infowindow = new google.maps.InfoWindow();
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
          google.maps.event.addDomListener(document.getElementById('zoomin'), 'click', function() {
   var currentZoomLevel = map.getZoom();
   if(currentZoomLevel != 21){
     map.setZoom(currentZoomLevel + 1);}
  });   

  google.maps.event.addDomListener(document.getElementById('zoomout'), 'click', function() {
   var currentZoomLevel = map.getZoom();
   if(currentZoomLevel != 0){
     map.setZoom(currentZoomLevel - 1);}     
  });

  $(document).on("click",".body",function(){
    $('.popupInfo').hide();
    $('#popupInfo-li').removeClass('selected-menu');
    $('.side-Menu').removeClass('selected-menu');


});
  $(document).on("click",".modal-scrollable",function(){
    $('.side-Menu').removeClass('selected-menu');


});
  $(document).on("click","#popupClose",function(){
    $('#popupRacine-btn').removeClass('btn-selectedd');
    $('.side-Menu').removeClass('selected-menu');


}); 
  $(document).on("click","#popupInfo-btn",function(){
        $('.popupInfo').show();
    $('#popupInfo-li').addClass('selected-menu');

});
  $(document).on("click","#popupRacine-btn",function(){
        
    $('#popupRacine-btn').addClass('btn-selectedd');

});


    var $side_Menu = $('.side-Menu').on('click', function(e) {
    $side_Menu.removeClass('selected-menu');
    $(this).addClass('selected-menu'); });


</script>
<script>
// $j optional alias to jQuery noConflict()
var $j = jQuery.noConflict();

$j(document).ready(function() {
	$j('[data-toggle="popover"]').popover();
});
</script>
<script>
var slideIndex_DFiles = 1;
showSlides_DFiles(slideIndex_DFiles);

function plusSlides_DFiles(n) {
  showSlides_DFiles(slideIndex_DFiles += n);
}

function currentSlide_DFiles(n) {
  showSlides_DFiles(slideIndex_DFiles = n);
}

function showSlides_DFiles(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides-DFiles");
  var dots = document.getElementsByClassName("dot-DFiles");
  if (n > slides.length) {slideIndex_DFiles = 1}    
  if (n < 1) {slideIndex_DFiles = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active-dot-DFiles", "");
  }
  slides[slideIndex_DFiles-1].style.display = "block";  
  dots[slideIndex_DFiles-1].className += " active-dot-DFiles";
}

var slideIndex_DPages = 1;
showSlides_DPages(slideIndex_DPages);

function plusSlides_DPages(n) {
  showSlides_DPages(slideIndex_DPages += n);
}

function currentSlide_DPages(n) {
  showSlides_DPages(slideIndex_DPages = n);
}

function showSlides_DPages(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides-DPages");
  var dots = document.getElementsByClassName("dot-DPages");
  if (n > slides.length) {slideIndex_DPages = 1}    
  if (n < 1) {slideIndex_DPages = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active-dot-DPages", "");
  }
  slides[slideIndex_DPages-1].style.display = "block";  
  dots[slideIndex_DPages-1].className += " active-dot-DPages";
}

var slideIndex_DFigures = 1;
showSlides_DFigures(slideIndex_DFigures);

function plusSlides_DFigures(n) {
  showSlides_DFigures(slideIndex_DFigures += n);
}

function currentSlide_DFigures(n) {
  showSlides_DFigures(slideIndex_DFigures = n);
}

function showSlides_DFigures(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides-DFigures");
  var dots = document.getElementsByClassName("dot-DFigures");
  if (n > slides.length) {slideIndex_DFigures = 1}    
  if (n < 1) {slideIndex_DFigures = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active-dot-DFigures", "");
  }
  slides[slideIndex_DFigures-1].style.display = "block";  
  dots[slideIndex_DFigures-1].className += " active-dot-DFigures";
}
</script>
<script>
  $(function() {

  // open in fullscreen
  $('#fullscreen .requestfullscreen').click(function() {
    $('#fullscreen').fullscreen();
    return false;
  });
  // exit fullscreen
  $('#fullscreen .exitfullscreen').click(function() {
    $.fullscreen.exit();
    return false;
  });
  // document's event
  $(document).bind('fscreenchange', function(e, state, elem) {
    // if we currently in fullscreen mode
    if ($.fullscreen.isFullScreen()) {
      $('#fullscreen .requestfullscreen').hide();
      $('#fullscreen .exitfullscreen').show();
    } else {
      $('#fullscreen .requestfullscreen').show();
      $('#fullscreen .exitfullscreen').hide();
    }

  });
});
</script>
<script>
function toggleFullscreen(elem) {
  elem = elem || document.documentElement;

  if (!document.fullscreenElement && !document.mozFullScreenElement &&
    !document.webkitFullscreenElement && !document.msFullscreenElement) {
    if (elem.requestFullscreen) {
      elem.requestFullscreen();
    } else if (elem.msRequestFullscreen) {
      elem.msRequestFullscreen();
    } else if (elem.mozRequestFullScreen) {
      elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) {
      elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
    }
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    }
  }
}

document.getElementById('btnFullscreen').addEventListener('click', function() {
  toggleFullscreen();
});

</script>
<script src="assets/global/plugins/racine/racine.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
</body>
</html>