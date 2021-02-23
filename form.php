<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <script src="js/jquery-3.5.1.min.js"></script>
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/mycss.css" />
      <script src="js/bootstrap.min.js"></script>

      <title>Document</title>
</head>

<body>
      <div class="container">
            <form autocomplete="on" method="post" id="myform">

                  Nom : <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" />
                  <span class="error_nom"></span><br />

                  Prenom : <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prenom" />
                  <span class="error_prenom"></span>
                  <br />
                  <div class="bloc_sex">
                        Sexe : <input type="radio" name="sex" id="sex" value="femme"> &rArr; F
                        <input type="radio" name="sex" id="sex" value="homme"> &rArr; M
                        <span class="error_sex"></span>
                  </div>
                  Contact : <input type="text" name="contact" id="contact" placeholder="Entrez votre contact" />
                  <span class="error_contact"></span><br />

                  <label for="mat">Entrez Matière :</label>
                  <select name="mat[]" id="mat">
                        <option value="" disabled selected>Choisir</option>
                        <optgroup label="Literatures">
                              <option value="francais">Français</option>
                              <option value="anglais">Anglais</option>
                        </optgroup>
                        <optgroup label="Sciences">
                              <option value="philosophie">philo</option>
                              <option value="atelier">atelier</option>
                        </optgroup>
                  </select>
                  <span class="error_mat"></span>
                  <br />
                  <span id="block_dispo" style="display: flex;">
                        Jour et heure dispo :

                        <div class="bloc_choix">
                              Lundi &rArr; <input type="checkbox" name="daydispo1" id="dispo" value="Lundi" />
                              <span id="dayChoix1"><br />
                                    <span class="h"> 8h - 9h</span><input type="checkbox" value="8h-9h" name="heure1[]"
                                          id="h1" /><br />
                                    <span class="h"> 9h - 10h</span><input type="checkbox" value="9h-10h"
                                          name="heure1[]" id="h2" /><br />
                                    <span class="h">10h - 11h</span><input type="checkbox" value="10h-11h"
                                          name="heure1[]" id="h3" /><br />
                                    <span class="h">11h - 12h</span><input type="checkbox" value="11h-12h"
                                          name="heure1[]" id="h4" /><br />
                                    <span class="h">13h - 14h</span><input type="checkbox" value="13h-14h"
                                          name="heure1[]" id="h5" /><br />
                                    <span class="h">14h - 16h</span><input type="checkbox" value="14h-16h"
                                          name="heure1[]" id="h6" /><br />
                              </span>
                        </div>
                        <div class="bloc_choix">
                              Mardi &rArr; <input type="checkbox" name="daydispo2" id="dispo" value="Mardi" />
                              <span id="dayChoix2"><br />
                                    <span class="h"> 8h - 9h </span><input type="checkbox" value="8h-9h" name="heure2[]"
                                          id="h1" /><br />
                                    <span class="h"> 9h - 10h</span><input type="checkbox" value="9h-10h"
                                          name="heure2[]" id="h2" /><br />
                                    <span class="h">10h - 11h</span><input type="checkbox" value="10h-11h"
                                          name="heure2[]" id="h3" /><br />
                                    <span class="h">11h - 12h</span><input type="checkbox" value="11h-12h"
                                          name="heure2[]" id="h4" /><br />
                                    <span class="h">13h - 14h</span><input type="checkbox" value="13h-14h"
                                          name="heure2[]" id="h5" /><br />
                                    <span class="h">14h - 16h</span><input type="checkbox" value="14h-16h"
                                          name="heure2[]" id="h6" /><br />
                              </span>
                        </div>
                        <div class="bloc_choix">
                              Mercredi &rArr; <input type="checkbox" name="daydispo3" id="dispo" value="Mercredi" />
                              <span id="dayChoix3"><br />
                                    <span class="h"> 8h - 9h </span><input type="checkbox" value="8h-9h" name="heure3[]"
                                          id="h1" /><br />
                                    <span class="h"> 9h - 10h</span><input type="checkbox" value="9h-10h"
                                          name="heure3[]" id="h2" /><br />
                                    <span class="h">10h - 11h</span><input type="checkbox" value="10h-11h"
                                          name="heure3[]" id="h3" /><br />
                                    <span class="h">11h - 12h</span><input type="checkbox" value="11h-12h"
                                          name="heure3[]" id="h4" /><br />
                                    <span class="h">13h - 14h</span><input type="checkbox" value="13h-14h"
                                          name="heure3[]" id="h5" /><br />
                                    <span class="h">14h - 16h</span><input type="checkbox" value="14h-16h"
                                          name="heure3[]" id="h6" /><br />
                              </span>
                        </div>
                        <div class="bloc_choix">
                              Jeudi &rArr; <input type="checkbox" name="daydispo4" id="dispo" value="Jeudi" />
                              <span id="dayChoix4"><br />
                                    <span class="h"> 8h - 9h </span><input type="checkbox" value="8h-9h" name="heure4[]"
                                          id="h1" /><br />
                                    <span class="h"> 9h - 10h</span><input type="checkbox" value="9h-10h"
                                          name="heure4[]" id="h2" /><br />
                                    <span class="h">10h - 11h</span><input type="checkbox" value="10h-11h"
                                          name="heure4[]" id="h3" /><br />
                                    <span class="h">11h - 12h</span><input type="checkbox" value="11h-12h"
                                          name="heure4[]" id="h4" /><br />
                                    <span class="h">13h - 14h</span><input type="checkbox" value="13h-14h"
                                          name="heure4[]" id="h5" /><br />
                                    <span class="h">14h - 16h</span><input type="checkbox" value="14h-16h"
                                          name="heure4[]" id="h6" /><br />
                              </span>
                        </div>

                        <div class="bloc_choix">
                              Vendredi &rArr; <input type="checkbox" name="daydispo5" id="dispo" value="Vendredi" />
                              <span id="dayChoix5"><br />
                                    <span class="h"> 8h - 9h </span><input type="checkbox" value="8h-9h" name="heure5[]"
                                          id="h1" /><br />
                                    <span class="h"> 9h - 10h</span><input type="checkbox" value="9h-10h"
                                          name="heure5[]" id="h2" /><br />
                                    <span class="h">10h - 11h</span><input type="checkbox" value="10h-11h"
                                          name="heure5[]" id="h3" /><br />
                                    <span class="h">11h - 12h</span><input type="checkbox" value="11h-12h"
                                          name="heure5[]" id="h4" /><br />
                                    <span class="h">13h - 14h</span><input type="checkbox" value="13h-14h"
                                          name="heure5[]" id="h5" /><br />
                                    <span class="h">14h - 16h</span><input type="checkbox" value="14h-16h"
                                          name="heure5[]" id="h6" /><br />
                              </span>
                        </div>
                  </span>
                  <div id="result"></div>

                  <button type="submit" id="btnSend" name="SubForm" class="btn btn-primary">Envoyer</button>

            </form>
      </div>
      <script src="js/file.js"></script>
</body>

</html>