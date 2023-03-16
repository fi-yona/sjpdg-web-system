<?php
    define("DEVELOPMENT", true);
    //echo('<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>');
    //echo('<script src="../script/firebase-config.js"></script>');

    $email = $_GET['email'];
    $password = $_GET['password'];

    if($email=="owner"&&$password="owner"){
        header('Location: ../owner/dashboard.html');
    }else if($email=="admin"&&$password="admin"){
        header('Location: ../admin/dashboard.html');
    }else{
        header('Location: ../login.html');
    }

    //echo('<script type="module">firebaseConfig(); </script>');
?>