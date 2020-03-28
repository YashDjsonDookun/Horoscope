<!DOCTYPE html>
<html>
    <head>
        <title>Register - Login Form</title>
        <link rel="stylesheet" href="./assets/css/panel.css">
        <script
          src="https://code.jquery.com/jquery-3.4.1.js"
          integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
          crossorigin="anonymous">
        </script>
    </head>
    <body>
        <div class="container">
           <div class="registration">
              <header>
                  <h1>Register for an account</h1>
              </header>
              <form action="controlPanel.php" method="GET">
                  <div class="firstname">
                    <label for="firstName">First Name: </label>
                    <input type="text" name="firstName" placeholder="e.g Donald" required>
                  </div>
                  <div class="lastname">
                    <label for="lastName">Last Name: </label>
                    <input type="text" name="lastName" placeholder="e.g Trump" required>
                  </div>
                  <div class="usernmae">
                    <label for="username">Username: </label>
                    <input type="text" name="username" placeholder=" e.g Donald_Trump666" required>
                  </div>
                  <div class="email">
                    <label for="email">Email: </label>
                    <input type="text" name="email" placeholder="e.g donaldTrump@mail.us" required>
                  </div>                 
                  <div class="phone">
                    <label for="phone">Phone: </label>
                    <input  style="border: solid 4px #cb29a0;
                        border-radius: 8px;
                        padding: 4px;
                        color: #325990;
                        font-size: 20px;" id="tel" type="tel" name="phone" placeholder="e.g 57654321" required>
                  </div>
                  <div class="address">
                    <label for="address">Address: </label>
                    <input style="width: 331px;" type="text" name="address" placeholder="e.g 14 ncmc, ncdkaamei">
                  </div>
                  <div class="password">
                    <label for="password">Password: </label>
                    <input  style="border: solid 4px #cb29a0;
                        border-radius: 8px;
                        padding: 4px;
                        color: #325990;
                        font-size: 20px;" type="password" name="password" required>
                  </div>
                  <div class="choice">
                      <button type="submit">Register</button>
                      <button id="loginButton">Log In</button>
                  </div>     
              </form>
           </div>
           <div class="login" style="display: none;">
              <header>
                  <h1>Log Into Your Account</h1>
              </header>
              <form action="controlPanel.php" method="GET">
                  <div class="usernmae">
                    <label for="username">Username: </label>
                    <input type="text" name="username" placeholder=" e.g Donald_Trump666" required>
                  </div>                
                  <div class="password">
                    <label for="password">Password: </label>
                    <input  style="border: solid 4px #cb29a0;
                        border-radius: 8px;
                        padding: 4px;
                        color: #325990;
                        font-size: 20px;" type="password" name="password" required>
                  </div>
                  <div class="choice">
                      <button type="submit">Login</button>
                      <button id="registerButton">Register</button>
                  </div>     
              </form>
           </div>          
        </div>
    </body>
    <script>
        $(document).ready(function(){
            $("#loginButton").click(function(){
                  $(".registration").hide();
                  $(".login").show();
                });

                $("#registerButton").click(function(){
                  $(".login").hide();
                  $(".registration").show();
            });
        });
    </script>
</html>