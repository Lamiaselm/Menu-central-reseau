<?php
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
                             <div class="djiant-col-md-6" style="padding-top:200px;">
              <div class="row" >
                        <div class="djiant-col-md-5">
                        <h4 class="djiant-title" style="font-size: 26px;">ENSEMBLE. PLUS FORTS.</h4>  
                  </div> 
                 

                 
                
                      </div>
                      <div class="row">
                        <div class="djiant-col-md-5">
                          <p class="decouvrez-djiant" style="font-size: 26px;">CHAMBRES DE COMMERCE, PRESSE SPÉCIALISÉE, PRESSE RÉGIONALE, ASSOCIATIONS SECTORIELLES... LEADERS DE COMMUNAUTÉS, CONNECTEZ VOUS EN RÉSEAUX, QUADRILLEZ LE WEB ET REVENEZ AU PREMIER PLAN. ENSEMBLE.</p>
                          <h4>OUVERTURE PROCHAINE.</h4>
  
                        </div>
                      </div>
                      
              <div class="row" style="margin-top: 50px;" >
                <div class="djiant-col-md-3 " style="    padding-left: 0px;">
                  
                <div class="col-xs-5 " style="    padding-left: 0px;">
                <img src="assets/image/MiniatureA4.svg" width="90px">
                </div>
                <div class="col-xs-7 disabled-network" style="padding-right: 20px;">
                <h4 style="  margin-bottom: 0px; margin-top: 0px;font-family:calibri;font-size:17px" >Comment ça marche </h4>
                          <p class="djiant-block" style="font-size: 14px;">Découvrez comment et pourquoi créer votre communauté avec Djiant.</p>
                </div>
              
               

                  
                </div>

                <div class="djiant-col-md-3 ">

                 <div class="col-xs-5 ">
                 <img src="assets/image/MiniatureA4.svg" width="90px" >
                 </div>
                 <div class="col-xs-7 disabled-network" style="    padding-left: 15px;">
                 <h4 style="  margin-bottom: 0px; margin-top: 0px; font-family:calibri;font-size:17px" >Réservez votre <br> cluster Djiant</h4>
                          <p class="djiant-block" style="font-size: 14px;">C’est quoi un « Cluster Djiant » et pourquoi le réserver maintenant  </p>
                 </div>
                    </div>
                  </div> 



                  </div> 
                  <div class="col-md-4" > 
              <img  src="assets/image/globe.png" width=600px; >
              </div>
                
                </div>


                
              </div> 

          <div class="portlet-light " id="tab_2_content">
                                                                                      
          </div>
          <div class=" portlet-light" id="tab_3_content" style="display: none;">
      
        </div>
        <div class=" portlet-light" id="tab_5_content"  style="display: none; "  >
              
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
    <span  class="tabbable-line "> <a  href="#" class="menu-footer disabled-network" >A propos </a> <a href="#" class="menu-footer disabled-network" >Menons légales  </a> <a href="#" class="menu-footer disabled-network" >CGU CGV</a> <a href="#" class="menu-footer disabled-network" >Contact</a> </span>
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

<!-- END PAGE LEVEL SCRIPTS -->


<script>




    $(document).on("click","#tab_1",function(){
    $(".portlet-light").hide();
  $('#tab_1_content').show();
      window.scroll({
    top: 0, 
    left: 0, 
    behavior: 'smooth' 
    });
    
});

    $(document).on("click","#TECHNOPARKS",function(){
     window.open('https://technoparks.djiant.com/', '_blank');
});

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