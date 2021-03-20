<html>
    <head>
        <title>Register</title>
        <script src = "../js/main.js"></script>
    </head>

    <body>
            <input type="email" placeholder="Enter your email" id="email">
            <input type="password" placeholder="Enter your password" id="password">

            <input type="checkbox" id="hospitalRadio" name="hospitalCheck" onClick="showHideDiv()">
            <label for="hospitalCheck">Hospital</label><br>

            <div id="hospitalDiv" style="display:none;">
                <input type="text" placeholder ="Enter Hospital Name">
                <input type="text" placeholder ="Enter Total Number of Beds">
                <input type="text" placeholder ="Enter Available Beds">
                <input type="text" placeholder ="Enter Available Beds">
            </div>

            <button onclick="registerUser()">Register Now</button>

            <!-- The core Firebase JS SDK is always required and must be listed first -->
            <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
            <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-auth.js"></script>

            <!-- TODO: Add SDKs for Firebase products that you want to use
                https://firebase.google.com/docs/web/setup#available-libraries -->
            <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-analytics.js"></script>

            <script>
            // Your web app's Firebase configuration
            // For Firebase JS SDK v7.20.0 and later, measurementId is optional
            var firebaseConfig = {
                apiKey: "AIzaSyA51cvIzky7O-1OouRlD-a0uH-9SWFC1iM",
                authDomain: "covid-fe3c0.firebaseapp.com",
                databaseURL: "https://covid-fe3c0-default-rtdb.firebaseio.com",
                projectId: "covid-fe3c0",
                storageBucket: "covid-fe3c0.appspot.com",
                messagingSenderId: "518057904152",
                appId: "1:518057904152:web:5b4e100eff114e3f8a9b6d",
                measurementId: "G-NEQBFH0X6E"
            };
            
            // Initialize Firebase
            firebase.initializeApp(firebaseConfig);
            firebase.analytics();

            function registerUser(){
                console.log("Register user function callled");
                var email = document.getElementById('email').value;     
                var password = document.getElementById('password').value; 
                firebase.auth().createUserWithEmailAndPassword(email,password).then(function(){
                    alert('User regeistered!');
                    var id=firebase.auth().currentUser.uid;
                    firebase.database().ref('Users/'+id).set({
                    fatherName:fname,
                    UserAge:age,
                    CNIC:cnic,
                    });
                }).catch(function(error){
                    alert('error');

                })  
            }
        </script>
    </body>
</html>
