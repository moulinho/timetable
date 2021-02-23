 $(document).ready(function() {

       var error_nom = $(".error_nom"),
             error_prenom = $(".error_prenom"),
             error_sex = $(".error_sex"),
             error_contact = $(".error_contact"),
             error_mat = $(".error_mat");
                  
            let choix = $("div #dayChoix1,#dayChoix2,#dayChoix3,#dayChoix4,#dayChoix5").css("display",
                  "none");
            let day = $("div #dispo");
            day.mousedown(function() {
                  let type = $("#dispo").attr("type");

                  if (type === "checkbox") {
                        $(this).next(choix).toggle();
                  }


            });

           
            $("#nom").keyup(function() {
                  check_nom();
            });

            $("#prenom").keyup(function() {
                  check_prenom();
            });
       
            $(":radio").click(function() {
                  check_sex();
            });
       
            $("#contact").keyup(function() {
                  check_contact();
            });

            $("#mat").click(function(e) {
                  e.preventDefault();
                  check_mat();
            });
            
       $("#btnSend").click(function (e) {
                        check_form();  
            });

       
            function check_nom() {

                  if ($("#nom").val() === "" ) {
                        error_nom.text("");
                  } else if (!($("#nom").val().match(/^[a-z]+$/i))) {
                        error_nom.css("color", "red").text("Not valide !");

                  }
                  else {
                        error_nom.html("<img src='img/ok.png' width='50px'/> ");
                  }
            }

            function check_prenom() {

                  if ($("#prenom").val() === "" ) {
                        error_prenom.text("");
                  } else if (!($("#prenom").val().match(/^[a-z]+$/i))) {
                         error_prenom.css("color", "red").text("Not valide !")
                  }
                  else {
                        error_prenom.html("<img src='img/ok.png' width='50px' />")
                  }
            }

            function check_sex() {
                  $("#myform :radio").change(function(e) {
                        e.preventDefault();
                        var radioValue = $("input[type='radio']:checked", "#myform").val();

                        if (radioValue === "femme" || radioValue === "homme") {
                              error_sex.html("<img src='img/ok.png' width='50px' />");

                        }
                  });
            }

            function check_contact() {

                  if ($("#contact").val() === "" || ($("#contact").val().length) <8 || !$("#contact").val()
                        .match(/^[0-9]+$/i)) {
                        error_contact.css("color", "red").text("Not valid")
                  } else {
                        error_contact.html("<img src='img/ok.png' width='50px' />")
                  }
            }

            function check_mat() {
                  let optionValue = $("#mat option:selected").val();

                  if (optionValue === "francais" || optionValue === "anglais" || optionValue === "philosophie" ||
                        optionValue === "atelier") {

                        error_mat.html("<img src='img/ok.png' width='50px' />")
                  } else {
                        error_mat.css("color", "red").text("Veuillez effectuer un choix")
                  }

            }
            function check_form () {


                  $("#myform").on("submit", function (e) {                       
                  e.preventDefault();
                        let DataString = $(this).serialize();
                        $.ajax({
                              type: "post",
                              url: "enr.php",
                              data: DataString,
                              cache: false,
                              beforeSend: function () {
                                    
                                          $("#btnSend").css("background-color", "#33ccff").text("Traitement...");
                                   
                              },
                              success: function (data) {
                                    if (data !== "") {
                                          $("#result").html(data);
                                          
                                          $("#btnSend").css("background-color", "#337ab7").text("Envoyer").fadeIn(3000);
                                          window.location.assign("Check_Emp.php");

                                    }
                                    
                              }
                              
                           })
                       
                  });
              }
});