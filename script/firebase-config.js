// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.17.2/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.17.2/firebase-analytics.js";

function firebaseConfig(){
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
          
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
    apiKey: "AIzaSyDwfSoK5Q9YPXe00HuuCKfTzQ9_-5OeY9Y",
    authDomain: "sjpdg-56b1b.firebaseapp.com",
    projectId: "sjpdg-56b1b",
    storageBucket: "sjpdg-56b1b.appspot.com",
    messagingSenderId: "888439869688",
    appId: "1:888439869688:web:00677f3c1ba4e9fd306b0d",
    measurementId: "G-GWVE7DZVZ1"
    };
          
    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
}