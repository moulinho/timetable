<?php 

require 'conect/Database.php'; 
    
$datas = $db->prepare("SELECT `nom`, `prenom`, `sex`, `contact`, `matiere`, `daydispo1`, `Hdispo1`, `daydispo2`, `Hdispo2`, `daydispo3`, `Hdispo3`, `daydispo4`, `Hdispo4`, `daydispo5`, `Hdispo5`,`id_perso`, `Date_enr` FROM `temps`ORDER BY id DESC LIMIT 1 ");

$datas->execute();

require_once "header/header.php";

?>

<?php while ($inf = $datas->fetch(PDO::FETCH_ASSOC)) { ?>


<div class="container " style="margin: 200px auto;">


      <div class="row">

            <div class="col-xs-6 col-sm-4 col-md-4  mt-2">
                  <b>
                        Nom : <?= $inf['nom']?> <br />

                        Prenom : <?= $inf['prenom']?><br />

                        Sexe : <?= $inf['sex']?><br />

                        Contact : <?= $inf['contact']?>
                  </b>

            </div>

            <div class="col-xs-6 col-sm-4 col-md-4  mt-2">

                  <img src="img/T.jpg" alt="" srcset="">

            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 mt-4">

                  <b>Matière : <?= $inf['matiere']?></b>

                  <br /> <br />

                  <b>Ref &rArr; <?= $inf['id_perso']?></b>

            </div>

      </div>
      <div class="row">

            <table class="table table-bordered">

                  <tr>
                        <th>JOURS </th>
                        <th>Lundi</th>
                        <th>Mardi</th>
                        <th>Mercredi</th>
                        <th>Jeudi</th>
                        <th>Vendredi</th>

                  </tr>

                  <tr>

                        <td><b>HEURES</b></td>
                        <td><?= $inf['Hdispo1']? $inf['Hdispo1']:"XXXX"?></td>
                        <td><?= $inf['Hdispo2']? $inf['Hdispo2']:"XXXX"?></td>
                        <td><?= $inf['Hdispo3']? $inf['Hdispo3']:"XXXX"?></td>
                        <td><?= $inf['Hdispo4']? $inf['Hdispo4']:"XXXX"?></td>
                        <td><?= $inf['Hdispo5']? $inf['Hdispo5']:"XXXX"?></td>
                  </tr>

            </table>

      </div>

</div>

<?php };

require_once "footer/footer.php";

 ?>