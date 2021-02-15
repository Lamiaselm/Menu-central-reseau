<?php 
require_once("../includes/initialiser.php");
if (isset($_POST['id'])) {
 $id = intval($_POST['id']);
}
if (isset($id)) {
	echo $id;
   $detaildomaine = Detaildomaine::trouve_par_id($id);

}

    $errors = array();
if (empty($_POST['name'])) {
	 $errors[]= 'Champ Nom est vide !';
}
	$detaildomaine->url = htmlspecialchars(trim($_POST['url']));
	$detaildomaine->lib_DetailDomaine = htmlspecialchars(trim(addslashes($_POST['name'])));
	$detaildomaine->id_Domaine = htmlspecialchars(trim(addslashes($_POST['reseaux'])));
	$detaildomaine->description = htmlspecialchars(trim($_POST['desc']));


	if (empty($errors)){
        if ( $detaildomaine->save()) {
             		echo '<script type="text/javascript">
			toastr.success("'. $detaildomaine->nom .'  modifier avec succès ","Très bien !");
			</script>';
			$Djiant_index = Djiant_index::actualiser();
            
        }else{
                
         echo '<script type="text/javascript">
			toastr.info(" S\'il vous plaît modifier à nouveau  ","Aucun changement !");
			</script>';
        
        }
         
        }else{
        // errors occurred
        	         echo '<script type="text/javascript">
        	          toastr.error("';
        	         	 foreach ($errors as $msg) {
        	         	echo ' - '.$msg.' <br />';
        	         	 }
			echo '  ","Attention !");
			</script>'; 
    }
 ?>