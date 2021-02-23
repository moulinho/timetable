<?php 

 $error =null;
 $nom = null;
 $prenom = null;
 $sexe = null;
 $contact = null;
 $matiere = null;
 $daydispo1 =null;
 $datH1=null;
 $daydispo2 =null;
 $datH2=null;
 $daydispo3 =null;
 $datH3=null;
 $daydispo4 =null;
 $datH4=null;
 $daydispo5 =null;
 $datH5=null;

 if (!empty($_POST['nom'])) {
	/**
	 *  verification & filter 
	 */
	 
	 $nom = htmlentities($_POST['nom']);
	 $nom = preg_replace('#[^a-zA-Z]#i','',$nom);
	
 	if (is_numeric($nom[0])) {
		echo nl2br("Invalid the Firstname must be a Lettre");
		exit();
	}


  }

if (!empty($_POST['prenom'])) {

	 $prenom = htmlentities($_POST['prenom']) ;
	 $prenom = preg_replace('#[^a-zA-Z]#i','',$prenom);
	
	if (is_numeric($prenom[0])) {
		echo nl2br("Invalid the Lastname must be start by a Lettre ");
		exit();
	}
	
 }



if (isset($_POST['sex'])) {

	$sexe = htmlentities($_POST['sex']);

	if ($sexe ==="homme" || $sexe ==="femme"){
		
	} else {

		echo nl2br("Désolé veuillez selectionner");
		exit();
	}

	
	
}


 if (!empty($_POST['contact'])) {

	$contact =htmlentities($_POST['contact']);

	(int)$contact = preg_replace('#[^0-9]#i','',$contact);
	
	if (!is_numeric($contact[0])) {

		echo nl2br(" Désolé le contact doit commencer pas un chiffre");
		exit();
	}
	
 }

if (isset($_POST['mat'])) {

	$matiere = implode(",",$_POST['mat']);

	if ($matiere ==="francais" || $matiere ==="anglais" || $matiere ==="philosophie" || $matiere ==="atelier") {
	
	} else{
		 nl2br(" matière invalide");
		 exit();
	}
	
}

if (!(isset($_POST['daydispo1'])=="Lundi")) {

	$daydispo1.="";
	$datH1 .="";

} else {

	$daydispo1.=$_POST['daydispo1'];

	if (isset($_POST['heure1'])) {

		$datH1 .= implode(" ,",$_POST['heure1']);
		
	}
}

if (!(isset($_POST['daydispo2'])=="Mardi")) {

	$daydispo2.="";
	$datH2 .="";

} else {

	$daydispo2.=$_POST['daydispo2'];

	if (isset($_POST['heure2'])) {

		$datH2 .= implode(" ,",$_POST['heure2']);
		
	}
}


if (!(isset($_POST['daydispo3'])=="Mercredi")) {

	$daydispo3.="";
	$datH3 .="";

} else {

	$daydispo3.=$_POST['daydispo3'];

	if (isset($_POST['heure3'])) {

		$datH3 .= implode(" ,",$_POST['heure3']);
		
	}
}


if (!(isset($_POST['daydispo4'])=="Jeudi")) {

	$daydispo4.="";
	$datH4 .="";

} else {

	$daydispo4.=$_POST['daydispo4'];

	if (isset($_POST['heure4'])) {

		$datH4 .= implode(" ,",$_POST['heure4']);
		
	}
}


if (!(isset($_POST['daydispo5'])=="Vendredi")) {

	$daydispo5.="";
	$datH5 .="";

} else {

	$daydispo5.=$_POST['daydispo5'];

	if (isset($_POST['heure5'])) {

		$datH5 .= implode(" ,",$_POST['heure5']);
		
	}
}

if (($nom  && $prenom  && $sexe  && $contact  && $matiere ))
 {
	 	 
		$id_perso=uniqid();
		require 'conect/Database.php';
			
		$resul = $db->prepare("INSERT INTO `temps` (`nom`,`prenom`,`sex`,`contact`,`matiere`,`daydispo1`,`Hdispo1`,`daydispo2`,`Hdispo2`,`daydispo3`,`Hdispo3`,`daydispo4`,`Hdispo4`,`daydispo5`,`Hdispo5`,`id_perso`,`Date_enr`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");

		$resul->execute(array($nom,$prenom,$sexe,$contact,$matiere,$daydispo1,$datH1,$daydispo2,$datH2,$daydispo3,$datH3,$daydispo4,$datH4,$daydispo5,$datH5,$id_perso));

		echo"<div class='alert alert-success'>success</div>";
		
			
}else{
		echo " <div class='alert alert-danger'>Désolé veuillez remplir correctement les champs</div>";
	}


 ?>