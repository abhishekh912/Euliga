//for Login form
function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var errorDisplay = document.getElementById("error-display");
    errorDisplay.innerHTML = "";

  if (username.trim() === "" && password.trim() === "") {
      errorDisplay.innerHTML = "Username and password should not be empty.";
      return false;
  }
    if (username.trim() === "") {
        errorDisplay.innerHTML = "Username should not be empty.";
        return false;
    }

    if (password.trim() === "") {
        errorDisplay.innerHTML = "Password should not be empty.";
        return false;
    }

    if (password.length < 8) {
        errorDisplay.innerHTML = "Password should be at least 8 characters long.";
        return false;
    }

    return true;
}

//for registraion

function validateReg() {
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("c-password").value;
    var errorDisplay = document.getElementById("error-display");
    errorDisplay.innerHTML = "";

    if (firstname.trim() === "") {
        errorDisplay.innerHTML = "First name should not be empty.";
        return false;
    }

    if (lastname.trim() === "") {
        errorDisplay.innerHTML = "Last name should not be empty.";
        return false;
    }

    if (username.trim() === "") {
        errorDisplay.innerHTML = "Username should not be empty.";
        return false;
    }

    if (password.trim() === "") {
        errorDisplay.innerHTML = "Password should not be empty.";
        return false;
    }

    if (password.length < 8) {
        errorDisplay.innerHTML = "Password should be at least 8 characters long.";
        return false;
    }

    if (confirmPassword.trim() === "") {
        errorDisplay.innerHTML = "Confirm Password should not be empty.";
        return false;
    }

    if (confirmPassword.length < 8) {
        errorDisplay.innerHTML = "Confirm Password should be at least 8 characters long.";
        return false;
    }

    if (password !== confirmPassword) {
        errorDisplay.innerHTML = "Passwords do not match.";
        return false;
    }

    return true;
}