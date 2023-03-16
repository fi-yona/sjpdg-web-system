function onLogin() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    if (email != "" && password!="") {
        if(email == "owner" && password == "owner"){
            window.location.href = "./owner/dashboard.html";
        }
    }else{
        window.location.href = "./owner/dashboard.html";
    }
}