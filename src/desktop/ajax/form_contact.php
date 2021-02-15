<?php 
    $name = htmlspecialchars(trim($_POST['name']));	
    $email = htmlspecialchars(trim($_POST['mail'])) ;
    $tele = htmlspecialchars(trim($_POST['phone']));
    $company = htmlspecialchars(trim($_POST['company']));
	$site = htmlspecialchars(trim($_POST['website'])) ;

$myEmail ='maamar@djiant.com';
$headers = "From:".$email;
$emailSubject = 'Contact form - Djiant';
$txt = "Vous avez reçu un mail de : ".$email."  
		Nom : ". $name."
		Numéro de téléphone : ". $tele."
		Company : ".$company."
		Site web: ".$site.".";
if (mail($myEmail, $emailSubject, $txt, $headers)) { ?>
	<script type="text/javascript">
			toastr.success(" Your email has been sent, we will contact you as soon as possible","Great!");
			</script>
<?php } ?>



