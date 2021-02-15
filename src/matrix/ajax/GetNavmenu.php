<?php 
require_once("../includes/initialiser.php");


$cpt = 0;
$domaines = Domaine::trouve_tous();


foreach ($domaines as $domaine) { $cpt++; ?>			
  			  <li  style="padding: 0px 0px;" ><span class="domaine <?php if ($cpt == 1) { echo'domaine-down'; }?> "> <img style="margin-right: 10px;" src="assets/image/<?php echo $domaine->img; ?>" width="22px"><?php echo $domaine->lib_Domaine; ?></span>
    			<ul class="network   <?php if ($cpt == 1) { echo'active'; }?>">
    				
    					
    	<?php $detaildomaines = Detaildomaine::trouve_par_domaine($domaine->id); foreach ($detaildomaines as $detaildomaine){ $count_srv = Server::count_serv($detaildomaine->id); ?>

      				<li  id="<?php echo $detaildomaine->lib_DetailDomaine; ?>" class="network-list" value="<?php echo $detaildomaine->id; ?>" >   <i class="fa fa-server" title="Cliquer sur l'icône pour afficher le détail de réseau" id="external-link" value="<?php echo $detaildomaine->id; ?>" data-toggle="modal" data-target="#myNetwork" style="font-size: 15px;margin-right: 3px;"></i> <?php echo $detaildomaine->lib_DetailDomaine; ?><span class="number"> <?php echo count($count_srv); ?></span>
					 </li>  
      			<?php } ?>	
   			   </ul>
  			  </li><?php }
  			   ?>
  	<script>
var domaine = document.getElementsByClassName("domaine");
var i;
for (i = 0; i < domaine.length; i++) {
  domaine[i].addEventListener("click", function() {
    this.parentElement.querySelector(".network").classList.toggle("active");
    this.classList.toggle("domaine-down");
  });
}


</script>