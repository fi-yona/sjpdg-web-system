<?php
    define("DEVELOPMENT", true);

    function useHeader(){
        ?>
        <center>
        <h1><img src="assets/img/logo-horizontal.png" class="logo-header"></h1>
        </center>
        <?php
    }

    function useFooter(){
        ?>
        <center>
        <div class="footer">
            Copyright UD Sinar Jaya Padang (IT Departement) - 2023
        </center>
        </div>  
        <?php
    }

    function firebaseSDK(){
        ?>
        <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.17.2/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.17.2/firebase-analytics.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyA3klVbt8rsiNrBZ_faKghclSlpD4kOwkk",
            authDomain: "sj-pdg.firebaseapp.com",
            databaseURL: "https://sj-pdg-default-rtdb.asia-southeast1.firebasedatabase.app",
            projectId: "sj-pdg",
            storageBucket: "sj-pdg.appspot.com",
            messagingSenderId: "999875237750",
            appId: "1:999875237750:web:1f52a593ce52c2ecb98c57",
            measurementId: "G-RDPGXK5VCP"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
        </script>
        <?php
    }
?>