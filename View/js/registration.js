
  //  $('.forgot-pass').click(function(event) {
  //    $(".pr-wrap").toggleClass("show-pass-reset");
  //  });
   //
  //  $('.pass-reset-submit').click(function(event) {
  //    $(".pr-wrap").removeClass("show-pass-reset");
  //  });



   function checkPassSame() {
      // check if both password are the same
      var person_email = document.getElementById("person_email").value;
      var person_password = document.getElementById("person_password").value;
      var person_password2 = document.getElementById("person_password2").value;
      var person_firstname = document.getElementById("person_firstname").value;
      var person_name = document.getElementById("person_name").value;
      var person_color = document.getElementById("person_color").value;

      if( person_password == person_password2){
          }else{
              alert("Passwords are not the same");
          }
        }
