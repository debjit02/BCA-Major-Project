// For password checking
        function checkPasswordMatch() {
          const password = document.getElementById("password");
          const confirmPassword = document.getElementById("confirm-password");
          const error = document.getElementById("password-match-error");

          if (password.value !== confirmPassword.value) {
            error.style.display = "block";
          } else {
            error.style.display = "none";
          }
        }
      



// Providing an extra textbox when user selects other documents 
  var select = document.getElementById("identity");
  var otherIdentity = document.getElementById("otherIdentity");

  select.addEventListener("change", function() {
    if (select.value === "other") {
      otherIdentity.style.display = "block";
    } else {
      otherIdentity.style.display = "none";
    }
  });

