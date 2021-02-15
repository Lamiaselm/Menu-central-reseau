<?php 
/* Change path info depending on your file locations */
require_once 'mobile/Mobile_Detect.php';
$detect = new Mobile_Detect;

if($detect->isMobile()) {
  header("Location: http://m.djiant.com");
die();
}
	require_once("header/header.php");
	require_once("header/navbar.php");

$urldomaine_active = curl_init();
curl_setopt($urldomaine_active, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($urldomaine_active, CURLOPT_RETURNTRANSFER, true);
curl_setopt($urldomaine_active, CURLOPT_URL, 'https://matrix.djiant.com/api/domaine.php?is_active=1');
$resultdomaine_active = curl_exec($urldomaine_active);
curl_close($urldomaine_active);
$domaine_active = json_decode($resultdomaine_active);
$cpt =0;
///////
$url = curl_init();
curl_setopt($url, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
curl_setopt($url, CURLOPT_URL, 'https://matrix.djiant.com/api/domaine.php?is_active=0');
$result = curl_exec($url);
curl_close($url);
$domaine_not_active = json_decode($result);
$cpt =0;
///////
?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper" >
		<div class="page-content">
			<!-- BEGIN DASHBOARD  -->
				

					<div class=" portlet-light" id="tab_1_content" >
              
              <div class="portlet-body  " style="padding-left:18px;">
                             <div class="djiant-col-md-7" style="padding-top:150px; width: 695px;">
              <div class="row" >
                        <div class="djiant-col-md-5">
                        <h4 class="djiant-title">TOGETHER.STRONGER.</h4>  
                  </div> 
                 

                 
                
                      </div>
                      <div class="row">
                        <div class="djiant-col-md-5">
                          <p class="decouvrez-djiant">CHAMBERS OF COMMERCE, SPECIALIZED PRESS,REGIONAL PRESS, SECTORAL ASSOCIATIONS...COMMUNITY LEADERS, CONNECT INNETWORKS, CRISSCROSS THE WEB AND RETURN TO THE FORE FRONT. TOGETHER.</p>
  
                        </div>
                      </div>
                      
              <div class="row" style="margin-top: 50px;" >
                <div class="djiant-col-md-2 djiant-block-hoverd" style="margin-right:10px;  width: 300px;">
                 <a class="djiant-link" href="https://info.djiant.com/" target="_blank"> 
								<div class="col-xs-4 ">
                <img src="assets/image/MiniatureA4.svg" width="90px">
								</div>
								<div class="col-xs-8">
                <h4 style="  margin-bottom: 0px; margin-top: 0px;font-family:calibri;font-size:17px" >How it works</h4>
                         <p class="djiant-block">Find out how  and why  create your community with  our  service “Djiant for  Communities”.</p>
								</div>
				 </a>			  
                  
                </div>
                  <div class="djiant-col-md-2 djiant-block-nothoverd" style="  width: 300px;">
                 
								<div class="col-xs-4 ">
                <img src="assets/image/MiniatureA4.svg" width="90px">
								</div>
								<div class="col-xs-8 disabled-network">
               <h4 style="  margin-bottom: 0px; margin-top: 0px; font-family:calibri;font-size:17px" >Book your Djiant <br> Cluster</h4>
                          <p class="djiant-block">What is a "Djiant  Cluster" and why  book it now.  </p>
								</div>
						  
                  
                </div>
               
                  </div> 



                  </div> 
                  <div class="djiant-col-md-5" > 
              <img  src="assets/image/globe.png" width=750px; >
              </div>
                
                </div>


                
              </div> 

					<div class="portlet-light " id="tab_2_content">
                                   <div class="row">
                                       <div class="col-md-2 ">
                                          <div class="portlet light ">
                                                 
                                                 <div class="portlet-body " style="padding-left: 11px;">

                                                 <ul id="racine"  >                                       
                                                   <li  style="padding: 0px 0px;" ><span class="Popular-networks"> Popular networks</span>
                                                        <ul class="domaine active" style="padding-left: 0px;">
                                                               
                                                               <?php foreach ($domaine_active->domaines as $domaine) { $cpt++ ?>
                                                        <li style="border-radius: 1px !important;" id="<?php if (isset($domaine->id)) {echo $domaine->id;} ?> "  class="<?php if($cpt ==1 ){echo 'domaine-list selected';} ?><?php if($cpt >1 ){echo 'domaine-list ';} ?> " >
                                                         <img class="<?php if($cpt ==1 ){echo 'selected-img';} ?>" src="<?php if(isset($domaine->img_path)) {echo $domaine->img_path;} ?>" style=" width:22px; margin-right: 6px;" > <?php if (isset($domaine->nom)) {echo $domaine->nom;} ?> </li>  
                                                        
                                                 <?php } ?>

                                                        </ul>
                                                   </li>
                                                   <li  style="margin-top: 30px; " ><span class="All-networks disabled-network"> All networks</span>
                                                        <ul class="domaine active" style="padding-left: 0px;">
                                                               
                                                               <?php foreach ($domaine_not_active->domaines as $domaine_not_active) { $cpt++ ?>
                                                        <li style="border-radius: 1px !important;" id="<?php if (isset($domaine_not_active->id)) {echo $domaine_not_active->id;} ?> "  class="domaine-list-disabled  disabled-network" >
                                                         <img  src="<?php if(isset($domaine_not_active->img_path)) {echo $domaine_not_active->img_path;} ?>" style=" width:22px; margin-right: 6px;" > <?php if (isset($domaine_not_active->nom)) {echo $domaine_not_active->nom;} ?> </li>  
                                                        
                                                 <?php } ?>

                                                        </ul>
                                                   </li>
                                                 </ul>
                                                 
                                                 </div>
                                          </div>
                                          
                                   </div>  
                                   <div class="col-md-9 djiant-network" id="network_1">
                                          <div class="row">
                                              <div class="djiant-col-md-8 " style="margin-top: 25px;">
                                              <div class="thumbnail  disabled-network" id="REGIONAL">
                                                 <div class="row" style="margin-left: 0px; ">
                                                    <div class="col-md-5" style="padding-left: 15px; padding-top: 8px;">
                                                       <div class="caption popupInfo-body " >
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                          <p style="font-size: 14px; color: #008DD2; margin-bottom: 3px;">Main network</p>
                                                                           <h4 class="djiant-title">REGIONAL ECONOMIES </h4>
                                                                           <p class="decouvrez-djiant" style="font-size: 22px;"> LOCAL ECONOMY. NATIVE COMMUNITY  </p>
                                                                           <p class="djiant-block-4" style="padding-bottom: 30px;">A Djiant Network of regional business communities in partnership with local newspapers.</p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 120px;">
                                                                               <div class="col-md-4">
                                                                                 <h4 style="margin-bottom: 0px;margin-top: 0px;">20</h4>
                                                                                 <p style="margin-top: 0px;" > Countries   </p>
                                                                               </div>
                                                                              
                                                                               <div class="col-md-4">
                                                                                 <h4 style="margin-bottom: 0px;margin-top: 0px;">251</h4>
                                                                                 <p style="margin-top: 0px;">Communities    </p>
                                                                               </div>
                                                                               
                                                                             </div>
                                                                     </div>  
                                                    </div>
                                                    <div class="col-md-7">
                                                           <img src="assets/image/Regional.png"  style="width: 531.8px;height: 355px; display: block;" >
                                                        <div class="row " >
                                                           <div class="col-md-12 bottom-left" style="display: none;">
                                                            <div class="row" style="padding-top: 15px;">
                                                              <div class="col-md-1">
                                                              </div>
                                                              <div class="col-md-8">
                                                                      <p style="font-weight: 100;font-size: 11px; color: #fff; padding: 0px; margin:0px;" >New community</p>  
                                                                      <h4 style=" color: #fff; padding: 0px;margin:0px;">Region Sud</h4>
                                                                      <p style="font-weight: 100;font-size: 11px; color: #fff; padding: 0px;margin:0px;">The french economic region, Region Sud, opens its Djiant Server, in partnership with Rising Sud, the economic development agency.</p>
                                                              </div>     
                                                            </div>
                                                           </div>
                                                           
                                                         </div>
                                                    </div>

                                                        
                                                 </div>
                                                                      
                                                                     
                                                 </div>  
                                         </div>   
                                          </div>
                                          <div class="row" >
                                             <div class="djiant-col-md-2 " style="margin-right: 6px;">
                                                <div class="thumbnail disabled-network" id="CCI-France-International" >
                                                                      <img src="assets/image/CCI-France-International.png"  style="width: 100%; height: 140px; display: block;" >
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                          <h4 style=" font-size: 14px; margin-bottom: 0px; margin-top: 0px;">CCI FRANCE INTERNATIONAL  </h4>
                                                                           <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                            Abroad French Chambers of Commerce, gathering a global community of 38.500 businesses.  </p>
                                                                           </div>
                                                                       </div>
                                                                        <div class="row" style="margin-top:88px;">
                                                                              
                                                                               
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
                                           
                                            <div class="djiant-col-md-2 "style="margin-left: 5px; margin-right: 5px;">
                                                <div class="thumbnail disabled-network" id="Belgian-Chambers">
                                                                      <img src="assets/image/Belgian-Chambers.png"  style="width: 100%; height: 140px; display: block;">
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px;margin-bottom: 0px; margin-top: 0px;">  BELGIAN CHAMBERS</h4>
                                                                           <p style="font-family: calibri; font-weight: 100; margin-top: 0px;"> The Federation of chambers of commerce in Belgium and Belgian chambers abroad.  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top:88px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                            
                                            <div class="djiant-col-md-2 " style="margin-left: 5px; margin-right: 5px;">
                                                <div class="thumbnail disabled-network " id="Clusters">
                                                                      <img src="assets/image/Clusters.png"  style="width: 100%; height: 140px; display: block;" >
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px; margin-bottom: 0px; margin-top: 0px;">CLUSTERS </h4>
                                                                           <p style="font-family: calibri; font-weight: 100; margin-top: 0px;"> Coming soon </p>
                                                                           </div>
                                                                       </div>
                                                                      <div class="row" style="margin-top:122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                            
                                          </div>
                                          <div class="row">
                                            <div class="djiant-col-md-2 " style="margin-right: 6px;">
                                                 <div class="thumbnail disabled-network" id="DevAgencies">
                                                                      <img src="assets/image/DevAgencies.png"  style="width: 100%; height: 140px; display: block;" >
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px; margin-bottom: 0px; margin-top: 0px;">DEVELOPMENT AGENCIES </h4>
                                                                           <p style="font-family: calibri; font-weight: 100; margin-top: 0px;"> Coming soon </p>
                                                                           </div>
                                                                       </div>
                                                                      <div class="row" style="margin-top:122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                            

                                            <div class="djiant-col-md-2 " style="margin-left: 5px; margin-right: 5px;">
                                                <div class="thumbnail disabled-network" id="CHAMB-WORKS">
                                                                      <img src="assets/image/CCI.png"  style="width: 100%; height: 140px; display: block;" >
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                          <h4 style=" font-size: 14px; margin-bottom: 0px; margin-top: 0px;">CHAMB.WORKS  </h4>
                                                                           <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                          Coming soon  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                      
                                                                     </div>
                                                 </div>
                                            </div>
                                            <div class="djiant-col-md-2 " style="margin-left: 5px; margin-right: 5px;">
                                                <div class="thumbnail disabled-network" id="BUSINESS-FEDERATIONS">
                                                                      <img src="assets/image/Confederations.png"  style="width: 100%; height: 140px; display: block;" >
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                          <h4 style=" font-size: 14px; margin-bottom: 0px; margin-top: 0px;">BUSINESS FEDERATIONS </h4>
                                                                           <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                          Coming soon  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                      
                                                                     </div>
                                                 </div>
                                            </div>
                                          </div>
                                          
                                   </div> 
                         <div class="djiant-col-md-9 djiant-network" id="network_2" style="display: none;">
                                          <div class="row">
                                              <div class="djiant-col-md-8 " style="margin-top: 25px;">
                                              <div class="thumbnail  disabled-network">
                                                 <div class="row" style="margin-left: 0px; ">
                                                    <div class="col-md-5" style="padding-left: 15px; padding-top: 8px;">
                                                       <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                          <p style="font-size: 14px; color: #008DD2; margin-bottom: 3px;">Main network</p>
                                                                           <h4 class="djiant-title">INFORMATION TECHNOLOGIES </h4>
                                                                           <p class="decouvrez-djiant" style="font-size: 22px;"> IT COMMUNITIES ALL AROUND THE WORLD  </p>
                                                                           <p class="djiant-block-4" style="padding-bottom: 30px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                                                           </div>
                                                                       </div>
                                                                      
                                                                              <div class="row" style="margin-top: 50px;">
                                                                               <div class="col-md-4">
                                                                                 <h4 style="margin-bottom: 0px;margin-top: 0px;"></h4>
                                                                                 <p style="margin-top: 0px;" >    </p>
                                                                               </div>
                                                                              
                                                                               <div class="col-md-4">
                                                                                 <h4 style="margin-bottom: 0px;margin-top: 0px;"></h4>
                                                                                 <p style="margin-top: 0px;">    </p>
                                                                               </div>
                                                                               
                                                                             </div>
                                                                     </div>  
                                                    </div>
                                                    <div class="col-md-7">
                                                           <img src="assets/image/IT Communities.jpeg"  style="width: 531.8px;height: 355px; display: block;" >
                                                        <div class="row " >
                                                           <div class="col-md-12 bottom-left"style="display: none;">
                                                            <div class="row" style="padding-top: 15px;">
                                                              <div class="col-md-1">
                                                              </div>
                                                              <div class="col-md-8">
                                                                      <p style="font-weight: 100;font-size: 11px; color: #fff; padding: 0px; margin:0px;" >New community</p>  
                                                                      <h4 style=" color: #fff; padding: 0px;margin:0px;">Information Technologies - Region Sud</h4>
                                                                      <p style="font-weight: 100;font-size: 11px; color: #fff; padding: 0px;margin:0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  </p>
                                                              </div>     
                                                            </div>
                                                           </div>
                                                           
                                                         </div>
                                                    </div>

                                                        
                                                 </div>
                                                                      
                                                                     
                                                 </div>  
                                         </div>   
                                          </div>
                                           <div class="row">
                                           <div class="djiant-col-md-2" style=" margin-right: 6px;">
                                                <div class="thumbnail disabled-network">
                                                                      <img src="assets/image/Cloud.png" alt="100%x200" style="width: 100%; height: 140px; display: block;" >
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px;margin-bottom: 0px; margin-top: 0px;">CLOUD </h4>
                                                                            <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                          Coming soon  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                            <div class="djiant-col-md-2 " style="margin-left: 5px; margin-right: 5px;">
                                                <div class="thumbnail disabled-network">
                                                                      <img src="assets/image/Data.png"  style="width: 100%; height: 140px; display: block;" >
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px;margin-bottom: 0px; margin-top: 0px;">DATA </h4>
                                                                           <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                          Coming soon  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                            <div class="djiant-col-md-2 " style="margin-left: 5px; margin-right: 5px;">
                                                <div class="thumbnail disabled-network">
                                                                      <img src="assets/image/Digital ARts.png"  style="width: 100%; height: 140px; display: block;" >
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px;margin-bottom: 0px; margin-top: 0px;">DIGITAL ARTS </h4>
                                                                          <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                          Coming soon  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                            <div class="djiant-col-md-2 " style="margin-left: 5px; margin-right: 5px;">
                                                <div class="thumbnail disabled-network">
                                                                      <img src="assets/image/ITHealth.png"  style="width: 100%; height: 140px; display: block;" >
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px;margin-bottom: 0px; margin-top: 0px;">IT HEALTH </h4>
                                                                          <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                          Coming soon  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                            
                                          
                                          </div>
                                          <div class="row">
                                            <div class="djiant-col-md-2 " style="margin-right: 6px;">
                                                <div class="thumbnail disabled-network">
                                                                      <img src="assets/image/IT Retail.png"  style="width: 100%; height: 140px; display: block;">
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px;margin-bottom: 0px; margin-top: 0px;">IT RETAIL </h4>
                                                                          <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                          Coming soon  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                            <div class="djiant-col-md-2 " style="margin-right: 6px;">
                                                <div class="thumbnail disabled-network">
                                                                      <img src="assets/image/LINUX.jpg"  style="width: 100%; height: 140px; display: block;">
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px;margin-bottom: 0px; margin-top: 0px;">LINUX </h4>
                                                                          <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                          Coming soon  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                            <div class="djiant-col-md-2 " style="margin-left: 5px; margin-right: 5px;">
                                                <div class="thumbnail disabled-network">
                                                                      <img src="assets/image/Coding.png"  style="width: 100%; height: 140px; display: block;" >
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px;margin-bottom: 0px; margin-top: 0px;">Coding</h4>
                                                                          <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                          Coming soon  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                            <div class="djiant-col-md-2 " style="margin-left: 5px; margin-right: 5px;">
                                                <div class="thumbnail disabled-network">
                                                                      <img src="assets/image/Cybersecu.png"  style="width: 100%; height: 140px; display: block;">
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px;margin-bottom: 0px; margin-top: 0px;">SECURTY </h4>
                                                                          <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                          Coming soon  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                           
                                          </div>
                                          <div class="row">
                                            <div class="djiant-col-md-2" style="margin-left: 5px; margin-right: 5px;">
                                                <div class="thumbnail disabled-network">
                                                                      <img src="assets/image/Telecom.png" alt="100%x200" style="width: 100%; height: 140px; display: block;" >
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px;margin-bottom: 0px; margin-top: 0px;">TELECOM </h4>
                                                                          <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                          Coming soon  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                          </div>
                                          
                            </div> 
                                   <div class="djiant-col-md-9 djiant-network" id="network_3" style="display: none;">
                                          <div class="row">
                                              <div class="djiant-col-md-8 " style="margin-top: 25px;">
                                              <div class="thumbnail  disabled-network">
                                                 <div class="row" style="margin-left: 0px; ">
                                                    <div class="col-md-5" style="padding-left: 15px; padding-top: 8px;">
                                                       <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                          <p style="font-size: 14px; color: #008DD2; margin-bottom: 3px;">Main network</p>
                                                                           <h4 class="djiant-title">HIGHER EDUCATION</h4>
                                                                           <p class="decouvrez-djiant" style="font-size: 22px;"> LOREM IPSUM DOLOR SIT AMET CONS ECTETUR ADIPISCING ELIT IT  </p>
                                                                           <p class="djiant-block-4" style="padding-bottom: 30px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row">
                                                                               <div class="col-md-3">
                                                                                 <h4 style="margin-top: 10px"></h4>
                                                                                 <p>    </p>
                                                                               </div>
                                                                              
                                                                               <div class="col-md-3">
                                                                                 <h4 style="margin-top: 10px"></h4>
                                                                                 <p>    </p>
                                                                               </div>
                                                                               
                                                                             </div>
                                                                     </div>  
                                                    </div>
                                                    <div class="col-md-7">
                                                           <img src="assets/image/Higher Edu.png"  style="width: 531.8px;height: 355px; display: block;" >
                                                      <div class="row " >
                                                           <div class="col-md-12 bottom-left"style="display: none;">
                                                            <div class="row" style="padding-top: 15px;">
                                                              
                                                              <div class="col-md-8">
                                                                      
                                                              </div>     
                                                            </div>
                                                           </div>
                                                           
                                                         </div>
                         
                                                           
                                                       
                                                    </div>

                                                        
                                                 </div>
                                                                      
                                                                     
                                                 </div>  
                                         </div>   
                                          </div>
                                          <div class="row">
                                            <div class="djiant-col-md-2 " style="margin-right: 6px;">
                                                <div class="thumbnail disabled-network">
                                                                      <img src="assets/image/Business Schools.png"  style="width: 100%; height: 140px; display: block;">
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px;margin-bottom: 0px; margin-top: 0px;">BUSINESS SCHOOLS </h4>
                                                                          <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                          Coming soon  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                           <div class="djiant-col-md-2" style="margin-left: 5px; margin-right: 5px;">
                                                <div class="thumbnail disabled-network">
                                                                      <img src="assets/image/Exec Training.png" alt="100%x200" style="width: 100%; height: 140px; display: block;" >
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px;margin-bottom: 0px; margin-top: 0px;">EXECUTIVE TRAINING </h4>
                                                                        <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                          Coming soon  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                            <div class="djiant-col-md-2 " style="margin-left: 5px; margin-right: 5px;">
                                                <div class="thumbnail disabled-network">
                                                                      <img src="assets/image/Research.png"  style="width: 100%; height: 140px; display: block;" >
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px;margin-bottom: 0px; margin-top: 0px;">RESEARCH NET </h4>
                                                                         <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                          Coming soon  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                            <div class="djiant-col-md-2 " style="margin-left: 5px; margin-right: 5px;">
                                                <div class="thumbnail disabled-network">
                                                                      <img src="assets/image/Universities.png"  style="width: 100%; height: 140px; display: block;" >
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px;margin-bottom: 0px; margin-top: 0px;">UNIVERSITIES </h4>
                                                                           <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                          Coming soon  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                            
                                          </div>
       
                                  
                                          
                                   </div> 
                                   <div class="djiant-col-md-9 djiant-network" id="network_4" style="display: none;">
                                          <div class="row">
                                              <div class="djiant-col-md-8 " style="margin-top: 25px;">
                                              <div class="thumbnail  disabled-network">
                                                 <div class="row" style="margin-left: 0px; ">
                                                    <div class="col-md-5" style="padding-left: 15px; padding-top: 8px;">
                                                       <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                          <p style="font-size: 14px; color: #008DD2; margin-bottom: 3px;">Main network</p>
                                                                           <h4 class="djiant-title">ENTREPRENEURSHIP </h4>
                                                                           <p class="decouvrez-djiant" style="font-size: 22px;"> LOREM IPSUM DOLOR SIT AMET CONS ECTETUR ADIPISCING ELIT IT  </p>
                                                                           <p class="djiant-block-4" style="padding-bottom: 30px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row">
                                                                               <div class="col-md-3">
                                                                                 <h4 style="margin-top: 10px"></h4>
                                                                                 <p>    </p>
                                                                               </div>
                                                                              
                                                                               <div class="col-md-3">
                                                                                 <h4 style="margin-top: 10px"></h4>
                                                                                 <p>    </p>
                                                                               </div>
                                                                               
                                                                             </div>
                                                                     </div>  
                                                    </div>
                                                    <div class="col-md-7">
                                                           <img src="assets/image/Entrepren.png"  style="width: 531.8px;height: 355px; display: block;" >
                                                        <div class="row " >
                                                           <div class="col-md-12 bottom-left" style="display: none;">
                                                            <div class="row" style="padding-top: 15px;">
                                                              
                                                              <div class="col-md-8">
                                                                      <p style="font-weight: 100;font-size: 11px; color: #fff; padding: 0px; margin:0px;" >New community</p>  
                                                                      <h4 style=" color: #fff; padding: 0px;margin:0px;">Entrepreneurship - France </h4>
                                                                      <p style="font-weight: 100;font-size: 11px; color: #fff; padding: 0px;margin:0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et doloremagna aliqua. Ut enim ad minim veniam, quis nostrud exercitaon ullamco laboris nisi ut aliquip ex eacommodo consequat. </p>
                                                              </div>     
                                                            </div>
                                                           </div>
                                                           
                                                         </div>
                                                    </div>

                                                        
                                                 </div>
                                                                      
                                                                     
                                                 </div>  
                                         </div>   
                                          </div>
                                          <div class="row">
                                            <div class="djiant-col-md-2 " style="margin-right: 6px;">
                                                <div class="thumbnail disabled-network">
                                                                      <img src="assets/image/Finance.png"  style="width: 100%; height: 140px; display: block;">
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px;margin-bottom: 0px; margin-top: 0px;">FINANCE </h4>
                                                                          <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                          Coming soon  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                           <div class="djiant-col-md-2" style="margin-left: 5px; margin-right: 5px;">
                                                <div class="thumbnail disabled-network">
                                                                      <img src="assets/image/HR.png" alt="100%x200" style="width: 100%; height: 140px; display: block;" >
                                                                      <div class="caption popupInfo-body  ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px;margin-bottom: 0px; margin-top: 0px;">HUMAN RESSOURCES </h4>
                                                                          <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                          Coming soon  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                            <div class="djiant-col-md-2 " style="margin-left: 5px; margin-right: 5px;">
                                                <div class="thumbnail disabled-network">
                                                                      <img src="assets/image/Incubators.png"  style="width: 100%; height: 140px; display: block;" >
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px;margin-bottom: 0px; margin-top: 0px;">INCUBATORS </h4>
                                                                           <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                          Coming soon  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                            <div class="djiant-col-md-2 " style="margin-left: 5px; margin-right: 5px;">
                                                <div class="thumbnail disabled-network">
                                                                      <img src="assets/image/Logistics.png"  style="width: 100%; height: 140px; display: block;" >
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px;margin-bottom: 0px; margin-top: 0px;">LOGISTICS </h4>
                                                                          <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                          Coming soon  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                            
                                          </div>
                                          <div class="row">
                                            <div class="djiant-col-md-2 " style="margin-left: 5px; margin-right: 5px;">
                                                <div class="thumbnail disabled-network">
                                                                      <img src="assets/image/Marketing.png"  style="width: 100%; height: 140px; display: block;" >
                                                                      <div class="caption popupInfo-body ">
                                                                       <div class="row">
                                                                         <div class="col-md-12">
                                                                           <h4 style=" font-size: 14px;margin-bottom: 0px; margin-top: 0px;">MARKETING </h4>
                                                                         <p style="font-family: calibri; font-weight: 100; margin-top: 0px;">
                                                                          Coming soon  </p>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row" style="margin-top: 122px;">
                                                                              
                                                                               
                                                                             </div>
                                                                     </div>
                                                 </div>
                                            </div>
                                          </div>
       
                                  
                                          
                                   </div> 
                                   
                                   </div>
					  
                                      
                                          
                                        
                                   		
					</div>
					<div class=" portlet-light" id="tab_3_content" style="display: none;">
              
              <div class="portlet-body  " style="padding-left:20px; padding-top:55px; ">
 
               <div class="row" >
               
               <div class="djiant-col-md-2 djiant-block-hoverd" style="margin-right:10px;  width: 300px;">
                 <a class="djiant-link" href="https://info.djiant.com/" target="_blank"> 
								<div class="col-xs-4 ">
                <img src="assets/image/MiniatureA4.svg" width="90px">
								</div>
								<div class="col-xs-7">
                <h4 style="  margin-bottom: 0px; margin-top: 0px;font-family:calibri;font-size:17px" >Djiant for Communities</h4>
                         <p class="djiant-block">Find out how  and why  create your community with  our  service “Djiant for  Communities”.</p>
								</div>
				 </a>			  
                  
                </div>
                  <div class="djiant-col-md-2 djiant-block-nothoverd" style="margin-right:10px;  width: 300px;">
                 
								<div class="col-xs-4 ">
                <img src="assets/image/MiniatureA4.svg" width="90px">
								</div>
								<div class="col-xs-7 disabled-network">
               <h4 style="  margin-bottom: 0px; margin-top: 0px; font-family:calibri;font-size:17px" >Book your Djiant <br> Cluster</h4>
                          <p class="djiant-block">What is a "Djiant  Cluster" and why  book it now.  </p>
								</div>
				 			  
                  
                </div>              
              </div> 
              
                <div class="row" >
                <div class="djiant-col-md-6" style="margin-top:40px;">
                <h4 style="margin-top: 0px;font-family:calibri !important;font-size:17px;" >Create a professional community</h4>
                </div>
                      
          
                </div> 
                <div class="row" style="margin-top:40px;">

                  <div class="djiant-col-md-2 djiant-block-nothoverd" style="margin-right:10px;  width: 300px;">
                  
								<div class="col-xs-4 ">
                <img src="assets/image/MiniatureA4.svg" width="90px">
								</div>
								<div class="col-xs-8 disabled-network">
               <h4 style="  margin: 0px; padding: 0px;font-family:calibri;font-size:14px">Djiant for</h4>
                <h4 style="  margin-bottom: 0px; margin-top: 0px;font-family:calibri;font-size:17px" >Business Associations</h4>
                          <p class="djiant-block"> Loyalize and value  members  of your   association from only  99€ per month.</p>
								</div>
				 			  
                  
                </div>   
                  <div class="djiant-col-md-2 djiant-block-nothoverd" style="margin-right:10px;  width: 300px;">
                 
								<div class="col-xs-4 ">
                <img src="assets/image/MiniatureA4.svg" width="90px">
								</div>
								<div class="col-xs-8 disabled-network">
               <h4 style="  margin: 0px; padding: 0px;font-family:calibri;font-size:14px">Djiant for</h4>
                <h4 style="  margin-bottom: 0px; margin-top: 0px; font-family:calibri;font-size:17px" >Education</h4>
                          <p class="djiant-block">Higher education  institutions, enhance  your ecosystem (Alumni, partners companies...) to   recruit internationally.</p>
								</div>		  
                  
                </div>   
                  <div class="djiant-col-md-3 djiant-block-nothoverd" style="">
								<div class="col-xs-3 " style="width: 29%;">
                <img src="assets/image/MiniatureA4.svg" width="90px">
								</div>
								<div class="col-xs-8 disabled-network" style="    width: 71%;">
                <h4 style=" margin: 0px; padding: 0px; font-family:calibri;font-size:14px">Djiant for</h4>
                <h4 style="  margin-bottom: 0px; margin-top: 0px; font-family:calibri;font-size:17px" > Local Communities</h4>
                    <p class="djiant-block">Chambers of commerce, development agencies, technopoles...  Actors of Territorial Marketing, expand on the web together  and  come back to the forefront.</p>
								</div>	    
                </div>   
              </div> 
              <div class="row"  style="margin-top:40px;" >

                <div class="djiant-col-md-2 djiant-block-nothoverd" style="margin-right:10px;  width: 300px;">
								<div class="col-xs-4 ">
                <img src="assets/image/MiniatureA4.svg" width="90px">
								</div>
								<div class="col-xs-8 disabled-network">
               <h4 style="  margin: 0px; padding: 0px;font-family:calibri;font-size:14px">Djiant for</h4>
                          <h4 style="  margin-bottom: 0px; margin-top: 0px;font-family:calibri;font-size:17px" > Newspaper</h4>
                          <p class="djiant-block">Specialized press  and regional press  book your Djiant Cluster and make  sure to be  unmissable in your field.</p>
								</div>
                </div>

                <div class="djiant-col-md-2 djiant-block-nothoverd" style="margin-right:10px;  width: 300px;">
								<div class="col-xs-4 ">
                <img src="assets/image/MiniatureA4.svg" width="90px">
								</div>
								<div class="col-xs-8 disabled-network">
               <h4 style="  margin: 0px; padding: 0px;font-family:calibri;font-size:14px">Djiant for</h4>
                <h4 style="  margin-bottom: 0px; margin-top: 0px; font-family:calibri;font-size:17px" > Brands</h4>
                          <p class="djiant-block">Make your ecosystem the first source of web traﬁc and marketing  analytics for your  products, your messages, your job oﬀers...</p>
								</div>
                </div>               
              
          
              </div>  
            



            

              

          </div>
        </div>
        <div class=" portlet-light" id="tab_5_content"  style="display: none; "  >
              
              <div class="portlet-body  " style="padding-left:20px; padding-top:55px; ">

   
              <div class="row" > 
              	 <div class="djiant-col-md-2 djiant-block-hoverd" style="margin-right:10px;  width: 300px;">
                 <a class="djiant-link" target="_blank" href="https://info.djiant.com/about" > 
								<div class="col-xs-4 ">
                <img src="assets/image/MiniatureA4.svg" width="90px">
								</div>
								<div class="col-xs-8 ">
               <h4 style="  margin-bottom: 0px; margin-top: 0px;font-family:calibri;font-size:17px" >Company</h4>
                     <p class="djiant-block">About Djiant,<br>mission and values</p>
								</div>
				 </a>			  
                  
                </div>    
              	 <div class="djiant-col-md-2 djiant-block-hoverd" style="margin-right:10px;  width: 300px;">
                  <a class="djiant-link" target="_blank" href="https://info.djiant.com/about#people" > 
								<div class="col-xs-4 ">
                <img src="assets/image/MiniatureA4.svg" width="90px">
								</div>
								<div class="col-xs-8 ">
              <h4 style="  margin-bottom: 0px; margin-top: 0px; font-family:calibri;font-size:17px" > People</h4>
                     <p class="djiant-block">The team behind  <br>the project</p>
								</div>
				 </a>			  
                  
                </div>    
             
                <div class="djiant-col-md-2 djiant-block-nothoverd" style="margin-right:10px;  width: 300px;">
								<div class="col-xs-4 ">
                <img src="assets/image/MiniatureA4.svg" width="90px">
								</div>
								<div class="col-xs-8 disabled-network">
              <h4 style="  margin-bottom: 0px; margin-top: 0px; font-family:calibri;font-size:17px" >Jobs</h4>
                 <p class="djiant-block">We are hiring</p>
								</div>

                </div>   
         </div> 
         <div class="row"  style="margin-top:40px;" > 
        
                 <div class="djiant-col-md-2 djiant-block-nothoverd" style="margin-right:10px;  width: 300px;">
								<div class="col-xs-4 ">
                <img src="assets/image/MiniatureA4.svg" width="90px">
								</div>
								<div class="col-xs-8 disabled-network">
              <h4 style="  margin-bottom: 0px; margin-top: 0px;font-family:calibri;font-size:17px" > Location & contacts</h4>
                     <p class="djiant-block">Our office</p>
								</div>
                </div>   
         </div> 
              
              

              

          </div>
        </div>
                     
                            <div id="notification" >
                            </div>
			</div>
			<!-- END DASHBOARD STATS -->

		</div>
	</div>
	<!-- END CONTENT -->
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner pull-right">
		<span  class="tabbable-line "> <a  href="#" class="menu-footer" >About</a> <a href="#" class="menu-footer" >Legal Notice  </a> <a href="#" class="menu-footer" >Privacy Policy</a> </span>
	</div>

	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>

<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://explorer.djiant.com/assets/global/plugins/racine/racine.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/global/scripts/toastr.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script>

    $(document).on("click","#tab_1",function(){
    $(".portlet-light").hide();
	$('#tab_1_content').show();
	$(".page-header.navbar").css("background-color", "#fff");
    $(".page-container").css("background-color", "#fff");
    $(".page-container").css('background-image', 'none');
    $('.nav-tabs').next('li .active').find('a').css("background-color", "#fff");
      window.scroll({
    top: 0, 
    left: 0, 
    behavior: 'smooth' 
    });
    
});
    $(document).on("click","#tab_2",function(){
    $(".portlet-light").hide();
  	$('#tab_2_content').show();
  	$(".page-header.navbar").css("background-color", "#fff");
    $(".page-container").css("background-color", "#fff");
    $(".page-container").css('background-image', 'none');  
    $('.nav-tabs').next('li .active').find('a').css("background-color", "#fff");
      window.scroll({
    top: 0, 
    left: 0, 
    behavior: 'smooth' 
    });

});
        $(document).on("click","#tab_3",function(){
    $(".portlet-light").hide();
    $('#tab_3_content').show();
    $(".page-header.navbar").css("background-color", "#fff");
    $(".page-container").css("background-color", "#fff");
    $(".page-container").css('background-image', 'url("assets/image/Image-droite.png")');
    $(".page-container").css("background-repeat", "no-repeat");
    $(".page-container").css("background-size", "cover");
    $('.nav-tabs').next('li .active').find('a').css("background-color", "#fff");

        window.scroll({
    top: 0, 
    left: 0, 
    behavior: 'smooth' 
    });

    
});
$(document).on("click","#tab_5",function(){
    $(".portlet-light").hide();
    $('#tab_5_content').show();
    $(".page-header.navbar").css("background-color", "#fff");
    $(".page-container").css("background-color", "#fff");
    $(".page-container").css('background-image', 'url("assets/image/Image-droite.png")');
    $(".page-container").css("background-repeat", "no-repeat");
    $(".page-container").css("background-size", "cover");
    $('.nav-tabs').next('li .active').find('a').css("background-color", "#fff");
        window.scroll({
    top: 0, 
    left: 0, 
    behavior: 'smooth' 
    });
    
});
    $(document).on("click","#TECHNOPARKS",function(){
     window.open('https://technoparks.djiant.com/', '_blank');
});
    /*
    $(document).on("click","#REGIONAL",function(){
     window.open('https://regional.djiant.com/', '_blank');
}); 
    
   $(document).on("click","#CCI-France-International",function(){
     window.open('http://cci-france-international.djiant.com', '_blank');
});
   $(document).on("click","#Belgian-Chambers",function(){
     window.open('http://belgian-chambers.djiant.com', '_blank');
});
   $(document).on("click","#Clusters",function(){
     window.open('https://clusters.djiant.com/', '_blank');
});
   $(document).on("click","#DevAgencies",function(){
     window.open('https://development-agencies.djiant.com/', '_blank');
});
*/
    var $domaine_list = $('.domaine-list').on('click', function(e) {
    var id= $(this).attr('id');
    $(".djiant-network").hide();
    $('#network_'+id).show();


}); 
jQuery(document).ready(function() {    
	
       Layout.init(); // init current layout

});
</script>



<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>