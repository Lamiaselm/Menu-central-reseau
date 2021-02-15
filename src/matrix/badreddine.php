<?php
require_once("includes/initialiser.php");
$cpt = 0;
$detaildomaines = Detaildomaine::is_active_in();

foreach ($detaildomaines as $detaildomaine) { 
	if ($detaildomaine->id <> 4) {
		$Pays = Pays::trouve_51();
		foreach ($Pays as $Pays) {
if ($Pays->id <= 246) {
		$Server = new Server();
	$Server->id_DetailDomaine = $detaildomaine->id;
	$Server->nom = $detaildomaine->lib_DetailDomaine.'-'.$Pays->name;
	$Server->pays = $Pays->id;
	$Server->url_server = 'info.djiant.com/djiant-cluster';
	$Server->longitude = $Pays->longitude;
	$Server->latitude = $Pays->latitude;
	$Server->about = 'Welcome to this Djiant Server. If you want to become partner click on the link bellow';
	$Server->phone = htmlspecialchars(trim($_POST['phone']));
	$Server->is_Djiant = 0;
	$Server->authorized = 0;
	$Server->zoom = 1;
	$Server->created_at = mysql_datetime();
	$Server->created_by = 1;
   

if ($Server->existe()) {
			echo  $Server->nom .' existe déja';
			
		}else{
			$Server->save();
			echo  $Server->nom .' ajouter ';		
}
}				}	}}
$Djiant_index = Djiant_index::actualiser();
			?>

