<?php require_once "header/header.php" ?>

<div class="container ">
      <form method="post" id="myform" class="table-responsive myform">


            <label for="nom"> Firsmane </label> <input type="text" name="nom" id="nom" class="form-control"
                  placeholder="Enter Firsmane" />

            <span class="error_nom"></span>

            <br />

            <label for="prenom"> LastName </label> <input type="text" name="prenom" id="prenom" class="form-control"
                  placeholder="Enter LastName" />

            <span class="error_prenom"></span>

            <br />

            <div class="bloc_sex">

                  <label> Sex </label> <input type="radio" name="sex" id="sex" value="femme"> &rArr;
                  F
                  <input type="radio" name="sex" id="sex" value="homme"> &rArr; M

                  <span class="error_sex"></span>

            </div>

            <label for="contact">Contact </label> <input type="text" class="form-control" name="contact" id="contact"
                  placeholder="Enter contact" />

            <span class="error_contact"></span>

            <br />

            <label for="mat">Enter Matière </label>

            <select name="mat[]" id="mat" class="form-control">

                  <option value="" disabled selected></option>

                  <optgroup label="Literatures">

                        <option value="francais">French</option>
                        <option value="anglais">English</option>

                  </optgroup>

                  <optgroup label="Sciences">

                        <option value="philosophie">philo</option>
                        <option value="atelier">atelier</option>

                  </optgroup>

            </select>
            <span class="error_mat"></span>
            <br />

            <span id="block_dispo" style="display: flex;">
                  <b>Days & Hours dispo </b>

                  <div class="bloc_choix">
                        Monday &rArr; <input type="checkbox" name="daydispo1" id="dispo" value="Lundi" />
                        <span id="dayChoix1">
                              <br />

                              <span class="h"> 8h - 9h</span><input type="checkbox" value="8h-9h" name="heure1[]"
                                    id="h1" />

                              <br />

                              <span class="h"> 9h - 10h</span><input type="checkbox" value="9h-10h" name="heure1[]"
                                    id="h2" />
                              <br />

                              <span class="h">10h - 11h</span><input type="checkbox" value="10h-11h" name="heure1[]"
                                    id="h3" />
                              <br />

                              <span class="h">11h - 12h</span><input type="checkbox" value="11h-12h" name="heure1[]"
                                    id="h4" />
                              <br />

                              <span class="h">13h - 14h</span><input type="checkbox" value="13h-14h" name="heure1[]"
                                    id="h5" />
                              <br />

                              <span class="h">14h - 16h</span><input type="checkbox" value="14h-16h" name="heure1[]"
                                    id="h6" />
                              <br />

                        </span>
                  </div>
                  <div class="bloc_choix">
                        Tuesday &rArr; <input type="checkbox" name="daydispo2" id="dispo" value="Mardi" />
                        <span id="dayChoix2">
                              <br />

                              <span class="h"> 8h - 9h </span><input type="checkbox" value="8h-9h" name="heure2[]"
                                    id="h1" />
                              <br />
                              <span class="h"> 9h - 10h</span><input type="checkbox" value="9h-10h" name="heure2[]"
                                    id="h2" />
                              <br />
                              <span class="h">10h - 11h</span><input type="checkbox" value="10h-11h" name="heure2[]"
                                    id="h3" />
                              <br />
                              <span class="h">11h - 12h</span><input type="checkbox" value="11h-12h" name="heure2[]"
                                    id="h4" />
                              <br />
                              <span class="h">13h - 14h</span><input type="checkbox" value="13h-14h" name="heure2[]"
                                    id="h5" />
                              <br />
                              <span class="h">14h - 16h</span><input type="checkbox" value="14h-16h" name="heure2[]"
                                    id="h6" />
                              <br />
                        </span>

                  </div>

                  <div class="bloc_choix">
                        Wednesday &rArr; <input type="checkbox" name="daydispo3" id="dispo" value="Mercredi" />

                        <span id="dayChoix3">
                              <br />
                              <span class="h"> 8h - 9h </span><input type="checkbox" value="8h-9h" name="heure3[]"
                                    id="h1" />
                              <br />
                              <span class="h"> 9h - 10h</span><input type="checkbox" value="9h-10h" name="heure3[]"
                                    id="h2" />
                              <br />
                              <span class="h">10h - 11h</span><input type="checkbox" value="10h-11h" name="heure3[]"
                                    id="h3" />
                              <br />
                              <span class="h">11h - 12h</span><input type="checkbox" value="11h-12h" name="heure3[]"
                                    id="h4" />
                              <br />
                              <span class="h">13h - 14h</span><input type="checkbox" value="13h-14h" name="heure3[]"
                                    id="h5" />
                              <br />
                              <span class="h">14h - 16h</span><input type="checkbox" value="14h-16h" name="heure3[]"
                                    id="h6" />
                              <br />
                        </span>
                  </div>
                  <div class="bloc_choix">
                        Thursday &rArr; <input type="checkbox" name="daydispo4" id="dispo" value="Jeudi" />
                        <span id="dayChoix4"><br />
                              <span class="h"> 8h - 9h </span><input type="checkbox" value="8h-9h" name="heure4[]"
                                    id="h1" /><br />
                              <span class="h"> 9h - 10h</span><input type="checkbox" value="9h-10h" name="heure4[]"
                                    id="h2" /><br />
                              <span class="h">10h - 11h</span><input type="checkbox" value="10h-11h" name="heure4[]"
                                    id="h3" /><br />
                              <span class="h">11h - 12h</span><input type="checkbox" value="11h-12h" name="heure4[]"
                                    id="h4" /><br />
                              <span class="h">13h - 14h</span><input type="checkbox" value="13h-14h" name="heure4[]"
                                    id="h5" /><br />
                              <span class="h">14h - 16h</span><input type="checkbox" value="14h-16h" name="heure4[]"
                                    id="h6" /><br />
                        </span>
                  </div>

                  <div class="bloc_choix">
                        Friday &rArr; <input type="checkbox" name="daydispo5" id="dispo" value="Vendredi" />
                        <span id="dayChoix5"><br />
                              <span class="h"> 8h - 9h </span><input type="checkbox" value="8h-9h" name="heure5[]"
                                    id="h1" /><br />
                              <span class="h"> 9h - 10h</span><input type="checkbox" value="9h-10h" name="heure5[]"
                                    id="h2" /><br />
                              <span class="h">10h - 11h</span><input type="checkbox" value="10h-11h" name="heure5[]"
                                    id="h3" /><br />
                              <span class="h">11h - 12h</span><input type="checkbox" value="11h-12h" name="heure5[]"
                                    id="h4" /><br />
                              <span class="h">13h - 14h</span><input type="checkbox" value="13h-14h" name="heure5[]"
                                    id="h5" /><br />
                              <span class="h">14h - 16h</span><input type="checkbox" value="14h-16h" name="heure5[]"
                                    id="h6" /><br />
                        </span>
                  </div>
            </span>
            <div id="result"></div>

            <button type="submit" id="btnSend" name="SubForm" class="btn btn-primary">Envoyer</button>

      </form>

</div>

<?php require_once "footer/footer.php";?>