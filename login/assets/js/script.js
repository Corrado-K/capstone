function passwordValidation(){

    let email = document.getElementById('email').value;
    let pattern = /^[a-z0-9](\.?[a-z0-9]){5,}@ashesi.edu.gh$/;
    let password = document.getElementById('password').value;
    let confirm_password = document.getElementById('confirm_password').value;

    if(password == "" || confirm_password == ""){
        // document.getElementById('password').classList.remove("border-green-600");
        // document.getElementById('confirm_password').classList.remove("border-green-600");
        document.getElementById('password').classList.remove("border-red-600");
        document.getElementById('confirm_password').classList.remove("focus:border-red-600 focus:shadow-outline-red");
    }else if (password !== confirm_password) {
        // document.getElementById('password').classList.remove("border-green-600");
        // document.getElementById('confirm_password').classList.remove("border-green-600");
        document.getElementById('password').classList.add("border-red-600");
        document.getElementById('confirm_password').classList.add("focus:border-red-600 focus:shadow-outline-red");
        document.getElementById("password_message").innerHTML = "Passwords do not match";
    }else if(password === confirm_password){
        // document.getElementById('password').classList.remove("border-red-600");
        // document.getElementById('confirm_password').classList.remove("focus:border-red-600 focus:shadow-outline-red");
        document.getElementById('password').classList.add("border-green-600");
        document.getElementById('confirm_password').classList.add("border-green-600");
        document.getElementById("password_message").innerHTML = "Passwords match";
        
    }

    if (pattern.test(email)) {
        console.log("match");
        return true;
    }else{
        console.log("no match");
        return false;
    }
}

addEventListener('keyup', passwordValidation);