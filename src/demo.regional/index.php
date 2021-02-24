<?php 
	require_once("header/header.php");


$link= 'https://matrix.djiant.com/api/markers.php?network=4';

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
          <li  class="mt-2 ml-2 "   data-target="#Djiant-racine-popup" data-toggle=""><img id="popupRacine-btn"   width="22px" src="assets/new-icons/MenuDomains.svg" alt=""  class=" disable"></li>
          <li   class="mt-2 ml-2 " data-target="#Djiant-addserver-popup" data-toggle=""><img width="22px" src="assets/new-icons/IconServerPlus.svg" alt="" class=" disable"></li>
          <li  class="mt-2 ml-2 " id="reseau-button" ><img  width="22px" src="assets/new-icons/AboutDjiant.svg" alt=""></li>
          

        </ul>

    </div>
            <div class="rightMenu" >
        <ul class="mr-1">
        	        

          
        </ul>

    </div>
    <div   class="popupInfo">
      <div  class="body" > 
        <div class="thumbnail">
       
           <img  src="assets/image/Vignette-reseau-Regional.png" alt="Regional Djiant" >
        </div>

    </div>
  </div>
    <div   class="popupInfo-reseau" style="display:none;">
      <div  class="body" style="height:100%;"> 
        <div class="thumbnail"style="height:100%;">
        <div class="reseau-container">
     
        <!-- BEGIN HEADER -->
        <div class="page-header -i navbar navbar-fixed-top" style="border: none; font-family:calibri;">
       
          <!-- BEGIN HEADER INNER -->
          <div class="page-header-inner" style="padding-top: 10px;">
          <button id="close">Close</button>
            <!-- BEGIN LOGO -->
            <div class="page-logo">
              <img id="djiant" style="margin-right: 6px; margin-top: 2px" src="assets/image/logo-djiant.svg" width="22px"> 
        
              <span style="font-size:17px;"  >    Djiant <span class=" note the-web">Platform for BTOB Communities </span> </span> 
              
               
              <div class="menu-toggler sidebar-toggler hide">
              </div>
            </div>
            
        
            <!-- END LOGO -->
          </div>
          <!-- END HEADER INNER -->
        </div>
        <div class="page-header -i navbar navbar-fixed-top" id="navbar-fixed-top" style="margin-top: -10px;">
          <!-- BEGIN HEADER INNER -->
          <div class="page-header-inner">
        <div class="tabbable-line " style="    padding-left: 0px;">
                      
                        <ul class="nav nav-tabs ">
                          <li class =""style="margin-bottom:-21px;">
                            <a id="tab_1" data-toggle="tab">
                            <h4 style="margin:0px; font-weight: 400;" >New communities</h4> </a>
                          </li>
                          <li class ="" style="margin-bottom:-21px;">
                            <a id="tab_2" data-toggle="tab">
                          <h4 style="margin:0px; font-weight: 400;" >All communities</h4>	 </a>
                          </li>
                          
                        </ul>
          </div>
          </div>
          <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->

        <div class="scrollable" style="max-height: 530px; direction: ltr;  ">
         
          
          <div class="row" id="network_4" style="display:none;">
          <div class="djiant-col-md-2"  style="margin-left: 44px; margin-right: 5px;" >
                                                <div class="thumbnail active-network" id="TECHNOPARKS">
                                                                      <img src="assets/image/Technoparks.png" alt="100%x200" style="width: 100%; height: 140px; display: block;" >
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px; margin-bottom: 0px; margin-top: 0px;">TECHNOPARKS </h4>
                                                                           <p style="font-family: calibri; font-weight: 100; margin-top: 0px;"> Places where tomorow’s economy is invented.   </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 63px;">
                                                                               <div class="col-md-4">
                                                                                 <h4 style="margin-bottom: 0px;">71</h4>
                                                                                 <p style="margin-top: 0px;" > Countries   </p>
                                                                               </div>
                                                                              
                                                                               <div class="col-md-4">
                                                                                 <h4 style="margin-bottom: 0px;">900</h4>
                                                                                 <p style="margin-top: 0px;">Communities    </p>
                                                                               </div>
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                            <div class="djiant-col-md-2"  style="margin-left: 5px; margin-right: 5px;" >
                                                <div class="thumbnail active-network" id="TECHNOPARKS">
                                                                      <img src="assets/image/Technoparks.png" alt="100%x200" style="width: 100%; height: 140px; display: block;" >
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px; margin-bottom: 0px; margin-top: 0px;">TECHNOPARKS </h4>
                                                                           <p style="font-family: calibri; font-weight: 100; margin-top: 0px;"> Places where tomorow’s economy is invented.   </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 63px;">
                                                                               <div class="col-md-4">
                                                                                 <h4 style="margin-bottom: 0px;">71</h4>
                                                                                 <p style="margin-top: 0px;" > Countries   </p>
                                                                               </div>
                                                                              
                                                                               <div class="col-md-4">
                                                                                 <h4 style="margin-bottom: 0px;">900</h4>
                                                                                 <p style="margin-top: 0px;">Communities    </p>
                                                                               </div>
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>

          
        
            
            
            </div>
            </div>
            </div>
           <!-- <img  src="assets/image/Vignette-reseau-Regional.png" alt="Regional Djiant" >-->
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
        var locations = [
    [
        "14592",
        "Kentucky",
        "37.8393332",
        "-84.2700179",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14593",
        "Louisiana",
        "30.9842977",
        "-91.9623327",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14597",
        "Maine",
        "45.253783",
        "-69.4454689",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14598",
        "Maryland",
        "39.0457549",
        "-76.6412712",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14599",
        "Massachusetts",
        "42.4072107",
        "-71.3824374",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14600",
        "Michigan",
        "44.3148443",
        "-85.6023643",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14601",
        "Minnesota",
        "46.729553",
        "-94.6858998",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14602",
        "Mississippi",
        "32.3546679",
        "-89.3985283",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14603",
        "Missouri",
        "37.9642529",
        "-91.8318334",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14604",
        "Montana",
        "46.8796822",
        "-110.3625658",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14605",
        "Nebraska",
        "41.4925374",
        "-99.9018131",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14606",
        "New Hampshire",
        "43.1938516",
        "-71.5723953",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14607",
        "New Jersey",
        "40.0583238",
        "-74.4056612",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14608",
        "New Mexico",
        "34.5199402",
        "-105.8700901",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14609",
        "New York",
        "40.7127753",
        "-74.0059728",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14610",
        "North Carolina",
        "35.7595731",
        "-79.0192997",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14611",
        "North Dakota",
        "47.5514926",
        "-101.0020119",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14612",
        "Ohio",
        "40.4172871",
        "-82.907123",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14613",
        "Oklahoma",
        "35.4675602",
        "-97.5164276",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14614",
        "Oregon",
        "43.8041334",
        "-120.5542012",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14615",
        "Pennsylvania",
        "41.2033216",
        "-77.1945247",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14616",
        "Rhode Island",
        "41.5800945",
        "-71.4774291",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14617",
        "South Carolina",
        "33.836081",
        "-81.1637245",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14618",
        "South Dakota",
        "43.9695148",
        "-99.9018131",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14619",
        "Tennessee",
        "35.5174913",
        "-86.5804473",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14620",
        "Texas",
        "31.9685988",
        "-99.9018131",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14621",
        "Utah",
        "39.3209801",
        "-111.0937311",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14622",
        "Vermont",
        "44.5588028",
        "-72.5778415",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "16926",
        "Greater London",
        "51.4309209",
        "-0.0936496",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United Kingdom"
    ],
    [
        "14623",
        "Virginia",
        "37.4315734",
        "-78.6568942",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "16927",
        "South East",
        "51.7612056",
        "-1.2464674",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United Kingdom"
    ],
    [
        "14624",
        "Washington",
        "47.7510741",
        "-120.7401385",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "16928",
        "South West",
        "50.2660471",
        "-5.0527125",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United Kingdom"
    ],
    [
        "14625",
        "West Virginia",
        "38.5976262",
        "-80.4549026",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "16929",
        "West Midlands",
        "52.586973",
        "-2.12882",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United Kingdom"
    ],
    [
        "14626",
        "Wisconsin",
        "43.7844397",
        "-88.7878678",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "16930",
        "North West",
        "53.4807593",
        "-2.2426305",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United Kingdom"
    ],
    [
        "14627",
        "Wyoming",
        "43.0759678",
        "-107.2902839",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "16931",
        "North East",
        "54.7294099",
        "-1.8811598",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United Kingdom"
    ],
    [
        "16932",
        "Yorkshire and the Humber",
        "53.9062233",
        "-1.0333573",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United Kingdom"
    ],
    [
        "16933",
        "East Midlands",
        "53.100319",
        "-0.9936306",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United Kingdom"
    ],
    [
        "16934",
        "East of England",
        "51.5742447",
        "0.4856781",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United Kingdom"
    ],
    [
        "14638",
        "Baden-W\u00fcrttemberg",
        "48.6616037",
        "9.3501336",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Germany"
    ],
    [
        "14639",
        "Bavaria",
        "48.7904472",
        "11.4978895",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Germany"
    ],
    [
        "14641",
        "Brandenburg",
        "52.1313922",
        "13.2162494",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Germany"
    ],
    [
        "14642",
        "Bremen",
        "53.0792962",
        "8.8016936",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Germany"
    ],
    [
        "14643",
        "Hamburg",
        "53.5510846",
        "9.9936819",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Germany"
    ],
    [
        "14644",
        "Hesse",
        "50.6520515",
        "9.1624376",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Germany"
    ],
    [
        "14645",
        "Mecklenburg-Western Pomerania",
        "53.6126505",
        "12.4295953",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Germany"
    ],
    [
        "16959",
        "\u00cele-de-France",
        "48.8499198",
        "2.6370411",
        "",
        "",
        "",
        "\u00cele-de-France",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "France"
    ],
    [
        "16960",
        "Normandy",
        "48.8798704",
        "0.1712529",
        "",
        "",
        "",
        "Normandy",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "France"
    ],
    [
        "16961",
        "New Aquitaine",
        "45.7087182",
        "0.626891",
        "",
        "",
        "",
        "New Aquitaine",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "France"
    ],
    [
        "16962",
        "Occitania",
        "43.8927232",
        "3.2827625",
        "",
        "",
        "",
        "Occitania",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "France"
    ],
    [
        "16963",
        "Pays de la Loire",
        "47.7632836",
        "-0.3299687",
        "",
        "",
        "",
        "Pays de la Loire",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "France"
    ],
    [
        "16965",
        "Madrid",
        "40.4167754",
        "-3.7037902",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Spain"
    ],
    [
        "16968",
        "Flanders",
        "51.0108706",
        "3.7264613",
        "",
        "",
        "",
        "Flanders",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Belgium"
    ],
    [
        "16969",
        "Bern",
        "46.9479739",
        "7.4474468",
        "",
        "",
        "",
        "Bern",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Switzerland"
    ],
    [
        "16970",
        "Geneva",
        "46.2043907",
        "6.1431577",
        "",
        "",
        "",
        "Geneva",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Switzerland"
    ],
    [
        "16972",
        "Oran",
        "35.6987388",
        "-0.6349319",
        "",
        "",
        "",
        "Oran",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Algeria"
    ],
    [
        "16973",
        "Tunis",
        "36.8064948",
        "10.1815316",
        "",
        "",
        "",
        "Tunis",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Tunisia"
    ],
    [
        "16974",
        "Sousse",
        "35.8245029",
        "10.634584",
        "",
        "",
        "",
        "Sousse",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Tunisia"
    ],
    [
        "16976",
        "Rabat",
        "33.9715904",
        "-6.8498129",
        "",
        "",
        "",
        "Rabat",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Morocco"
    ],
    [
        "16977",
        "Dubai",
        "25.2048493",
        "55.2707828",
        "",
        "",
        "",
        "Dubai",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United Arab Emirates"
    ],
    [
        "16979",
        "Ontario",
        "51.253775",
        "-85.323214",
        "",
        "",
        "",
        "Ontario",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Canada"
    ],
    [
        "16980",
        "Pondicherry",
        "11.9415915",
        "79.8083133",
        "",
        "",
        "",
        "Pondicherry",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "India"
    ],
    [
        "16981",
        "Dublin",
        "53.3498053",
        "-6.2603097",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Ireland"
    ],
    [
        "16982",
        "Cork",
        "51.8985143",
        "-8.4756035",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Ireland"
    ],
    [
        "13911",
        "Nevada",
        "38.8026097",
        "-116.419389",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "16983",
        "Lisbonne",
        "38.7222524",
        "-9.1393366",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Portugal"
    ],
    [
        "16984",
        "Porto",
        "41.1579438",
        "-8.6291053",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Portugal"
    ],
    [
        "14521",
        "Andalucia",
        "37.5442706",
        "-4.7277528",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Spain"
    ],
    [
        "14522",
        "Aragon",
        "41.5976275",
        "-0.9056623",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Spain"
    ],
    [
        "14523",
        "Asturias",
        "43.3613953",
        "-5.8593267",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Spain"
    ],
    [
        "14524",
        "Balearic Islands",
        "39.3587759",
        "2.7356328",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Spain"
    ],
    [
        "14525",
        "Canary Islands",
        "28.2915637",
        "-16.6291304",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Spain"
    ],
    [
        "14526",
        "Cantabria",
        "43.1828396",
        "-3.9878427",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Spain"
    ],
    [
        "14527",
        "Castilla Y L\u00e9on",
        "41.8356821",
        "-4.3976357",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Spain"
    ],
    [
        "14528",
        "Castilla La Mancha",
        "39.2795607",
        "-3.097702",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Spain"
    ],
    [
        "14529",
        "Catalonia",
        "41.5911589",
        "1.5208624",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Spain"
    ],
    [
        "14530",
        "Extremadura",
        "39.4937392",
        "-6.0679194",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Spain"
    ],
    [
        "14531",
        "Galicia",
        "42.5750554",
        "-8.1338558",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Spain"
    ],
    [
        "14533",
        "Murcia",
        "38.1398141",
        "-1.366216",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Spain"
    ],
    [
        "14534",
        "Navarra",
        "42.6953909",
        "-1.6760691",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Spain"
    ],
    [
        "14535",
        "Basque Country",
        "43.2449128",
        "-1.2891036",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Spain"
    ],
    [
        "14536",
        "La Rioja",
        "42.2870733",
        "-2.539603",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Spain"
    ],
    [
        "14537",
        "Valencia",
        "39.4840108",
        "-0.7532809",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Spain"
    ],
    [
        "14538",
        "Ceuta",
        "35.8893874",
        "-5.3213455",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Spain"
    ],
    [
        "14539",
        "Melilla",
        "35.2922775",
        "-2.9380973",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Spain"
    ],
    [
        "14540",
        "Nunavut",
        "70.2997711",
        "-83.107577",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Canada"
    ],
    [
        "14541",
        "Northwest Territories",
        "64.8255441",
        "-124.8457334",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Canada"
    ],
    [
        "14542",
        "Yukon",
        "64.2823274",
        "-135",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Canada"
    ],
    [
        "14545",
        "Nova Scotia",
        "44.6819866",
        "-63.744311",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Canada"
    ],
    [
        "14546",
        "New Brunswick",
        "46.5653163",
        "-66.4619164",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Canada"
    ],
    [
        "14547",
        "Manitoba",
        "53.7608608",
        "-98.8138762",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Canada"
    ],
    [
        "14548",
        "British Columbia",
        "53.7266683",
        "-127.6476205",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Canada"
    ],
    [
        "14549",
        "Prince Edward Island",
        "46.510712",
        "-63.4168136",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Canada"
    ],
    [
        "14550",
        "Saskatchewan",
        "52.9399159",
        "-106.4508639",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Canada"
    ],
    [
        "14551",
        "Alberta",
        "53.9332706",
        "-116.5765035",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Canada"
    ],
    [
        "14552",
        "Newfoundland and Labrador",
        "53.1355091",
        "-57.6604364",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Canada"
    ],
    [
        "14553",
        "Abruzzo",
        "42.1920119",
        "13.7289167",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Italy"
    ],
    [
        "14554",
        "Basilicata",
        "40.6430766",
        "15.9699878",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Italy"
    ],
    [
        "14555",
        "Calabria",
        "39.3087714",
        "16.3463791",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Italy"
    ],
    [
        "14556",
        "Alabama",
        "32.3182314",
        "-86.902298",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14557",
        "Alaska",
        "64.2008413",
        "-149.4936733",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14558",
        "Arizona",
        "34.0489281",
        "-111.0937311",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14559",
        "Campania",
        "40.6670887",
        "15.1068113",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Italy"
    ],
    [
        "14560",
        "Arkansas",
        "35.20105",
        "-91.8318334",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14561",
        "Emilia-Romagna",
        "44.5967607",
        "11.2186396",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Italy"
    ],
    [
        "14562",
        "California",
        "36.778261",
        "-119.4179324",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14563",
        "Friuli-Venezia Giulia",
        "46.2259177",
        "13.1033646",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Italy"
    ],
    [
        "14564",
        "Latium (Lazio)",
        "41.6552418",
        "12.989615",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Italy"
    ],
    [
        "14565",
        "Colorado",
        "39.5500507",
        "-105.7820674",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14566",
        "Connecticut",
        "41.6032207",
        "-73.087749",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14567",
        "Delaware",
        "38.9108325",
        "-75.5276699",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14568",
        "Liguria",
        "44.3167917",
        "8.3964938",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Italy"
    ],
    [
        "14569",
        "Lombardia",
        "45.4790671",
        "9.8452433",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Italy"
    ],
    [
        "14570",
        "Marche",
        "43.5058744",
        "12.989615",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Italy"
    ],
    [
        "14571",
        "Molise",
        "41.6738865",
        "14.7520939",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Italy"
    ],
    [
        "14572",
        "Piemonte",
        "45.0522366",
        "7.5153885",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Italy"
    ],
    [
        "13805",
        "Illinois",
        "41.8848614",
        "-87.6224564",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14573",
        "Puglia (Apulia)",
        "40.7928393",
        "17.1011931",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Italy"
    ],
    [
        "14574",
        "Sardegna (Sardinia)",
        "40.1208752",
        "9.0128926",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Italy"
    ],
    [
        "14575",
        "Sicialia (Sicily)",
        "37.5999938",
        "14.0153557",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Italy"
    ],
    [
        "14576",
        "Toscana (Tuscany)",
        "43.7710513",
        "11.2486208",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Italy"
    ],
    [
        "14577",
        "Trentino-Alto Adige(Trentino-South Tyrol ) *",
        "46.4336662",
        "11.1693296",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Italy"
    ],
    [
        "14578",
        "Umbria",
        "42.938004",
        "12.6216211",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Italy"
    ],
    [
        "14579",
        "Valle d\\'Aosta(Aosta Valley )",
        "45.7358041",
        "7.3193276",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Italy"
    ],
    [
        "14580",
        "Veneto",
        "45.4414662",
        "12.3152595",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "Italy"
    ],
    [
        "14581",
        "Florida",
        "27.6648274",
        "-81.5157535",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14582",
        "Georgia",
        "32.1656221",
        "-82.9000751",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14583",
        "Hawaii",
        "19.8967662",
        "-155.5827818",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14584",
        "Idaho",
        "44.0682019",
        "-114.7420408",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14586",
        "Indiana",
        "40.2671941",
        "-86.1349019",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14588",
        "Iowa",
        "41.8780025",
        "-93.097702",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "14590",
        "Kansas",
        "39.011902",
        "-98.4842465",
        "",
        "",
        "",
        "",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "0",
        "United States of America"
    ],
    [
        "16964",
        "Provence-Alpes-C\u00f4te d'Azur",
        "43.9351691",
        "6.0679194",
        "",
        "",
        "",
        "Provence-Alpes-C\u00f4te d\\'Azur",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "1",
        "France"
    ],
    [
        "16967",
        "Wallonia",
        "50.4175637",
        "4.4510066",
        "",
        "",
        "",
        "Wallonia",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "1",
        "Belgium"
    ],
    [
        "16971",
        "Algiers",
        "36.753768",
        "3.0587561",
        "",
        "",
        "",
        "Algiers",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "1",
        "Algeria"
    ],
    [
        "16975",
        "Casablanca",
        "33.5731104",
        "-7.5898434",
        "",
        "",
        "",
        "Casablanca",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "1",
        "Morocco"
    ],
    [
        "16978",
        "Quebec",
        "52.9399159",
        "-73.5491361",
        "",
        "",
        "",
        "Quebec",
        "",
        "assets\/gris-window.png",
        "https:\/\/info.djiant.com\/",
        "1",
        "Canada"
    ]
];
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
                html: locations[i][11] === '0' ?  '  <div class="container-full-width"><div class="header"><div class=""><div class="row" > <div class="col-md-10" > <div class="container d-flex line1" style="padding-left: 5px;"><img src="assets/new-icons/Server.svg" class="icon mr-2 disable"><p class="title" style="font-weight: 600; padding-bottom: 2px;">'+locations[i][1]+'</p>  </div></div> <div class="col-md-2" > <div class="title-right" > <img src="assets/image/IconPIN.svg" style="width: 13px; margin: 6px 9px 0px 0px;"> <img src="assets/image/IconSHARE.svg" style="width: 13px; margin-top: 6px "></div></div></div><hr><img class="Imag-fond" src="assets/image/generic-fond-gris.png" alt="Technoparks Djiant"><img class="Logo-Fentre" src="assets/image/generic-logo-gris.png" alt="Technoparks Djiant"><div class="container titles row line2"><div style="padding-left: 17px;" class="border-left-1 padding-left-0 col-5"><p class="title">About</p></div><div class="border-left-1 padding-left-0 col-7"><p class="title">Ressources</p></div></div></div></div> <div class="content"> <div class="container row"> <div class="padding-left-0 col-5"><div class="tab-titles">  <h5 style="" class="title5">'+locations[i][1]+', '+locations[i][12]+'</h5><p> Local newspaper, chambers of commerce, business associaons... <br>Become partner, become unique. <br>Book this server and build with<br> Djiant a thriving Business <br>Community</p></div> </div> <div class="padding-left-0 col-7"> <div class="row" style="margin-left: 0px;"> <div class="col-md-8 djiant-block-hoverd"><a class="djiant-link"href="https://info.djiant.com/" target="_blank"> <div class="col-xs-4 "><img src="assets/image/Icone-Website.svg" width="75px"></div><div class="col-xs-8" style =""><h4 style="margin-top:0px; margin-bottom:0px;" >Djiant for Communies</h4> <p class="djiant-block">Clic here to discover why and how to build a Business Community with Djiant.</p></div></a></div> </div>  </div> </div> </div></div>'  :  '<div class="container-full-width"><div class="header"><div class=""><div class="row" > <div class="col-md-10" > <div class="container d-flex line1" style="padding-left: 5px;"><img src="assets/new-icons/Server.svg" class="icon mr-2"><p class="title" style="font-weight: 600; padding-bottom: 2px;">'+locations[i][1]+'</p>  </div></div> <div class="col-md-2" > <div class="title-right" > <img src="assets/image/IconPIN.svg" style="width: 13px; margin: 6px 9px 0px 0px;"> <img src="assets/image/IconSHARE.svg" style="width: 13px; margin-top: 6px "></div></div></div><hr><img class="Imag-fond" src="assets/image/generic-fond-gris.png" alt="Technoparks Djiant"><img class="Logo-Fentre" src="assets/image/generic-logo-gris.png" alt="Technoparks Djiant"><div class="container titles row line2"><div style="padding-left: 17px;" class="border-left-1 padding-left-0 col-4"><p class="title">About</p></div><div  class="border-left-1 padding-left-0 col-8"><p class="title">Ressources</p></div></div></div></div> <div class="content"> <div class="container row" style="padding-right: 0px;"> <div class="padding-left-0 col-4"><div class="tab-titles">    <h5 style="" class="title5">'+locations[i][1]+'</h5><p>Server already booked. Coming soon.</p></div> </div> <div class="padding-left-0 col-8 scrollable-srv"> <div class="row" style="margin-left: 0px; margin-bottom: 14px;"> <div class="col-md-5 djiant-block-nothoverd" style="flex: 0 0 48%; max-width: 48%; margin-right: 7px;"><a class="djiant-link"href="#" > <div class="col-xs-4 "><img src="assets/image/Icone-Website.svg" width="63px"></div><div class="col-xs-8 disabled-network" style =""><h4 style="margin-top:0px; margin-bottom:0px;" >Website</h4> <p class="djiant-block">Clic to connect to community Website. </p></div></a></div> <div class="col-md-5 djiant-block-nothoverd" style="flex: 0 0 48%; max-width: 48%; margin-right: 7px;"><a class="djiant-link"href="#"  > <div class="col-xs-4 "><img src="assets/image/Icone-D-Directory.svg" width="65px"></div><div class="col-xs-8 disabled-network" style =""><h4 style="margin-top:0px; margin-bottom:0px;" >D - Directory</h4> <p class="djiant-block">5000 companies listed. </p></div></a></div></div>     <div class="row" style="margin-left: 0px;"> <div class="col-md-5 djiant-block-nothoverd" style="flex: 0 0 48%; max-width: 48%; margin-right: 7px;"><a class="djiant-link"href="#" > <div class="col-xs-4 "><img src="assets/image/IconFigures.svg" width="66px"></div><div class="col-xs-8 disabled-network" style =""><h4 style="margin-top:0px; margin-bottom:0px;" >D - Figures</h4> <p class="djiant-block">Stats of the community. </p></div></a></div> </div>       </div> </div> </div></div>',
              
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
  $(document).on("click","#tab_1",function(){
    $(".portlet-light").hide();
    $(this).addClass('active');
	  $('#network_4').show();
    $(".page-header.navbar").css("background-color", "#fff");
    $(".page-container").css("background-color", "#fff");
    $(".page-container").css('background-image', 'none');
    $('.nav-tabs').next('li .active').find('a').css("background-color", "#fff");

    
});

  $(document).on("click",".body",function(){
    $('.popupInfo').hide();
    $('#popupInfo-li').removeClass('selected-menu');
    $('.side-Menu').removeClass('selected-menu');


});
$(document).on("click","#reseau-button",function(){
  
    $('.popupInfo').hide();
    $('.popupInfo-reseau').show();
   


});
$(document).on("click","#close",function(){
  
  $('.popupInfo').hide();
  $('.popupInfo-reseau').hide();
 


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