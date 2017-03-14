<html>
    <head>
        <title>CIS 101 Portal: Log In</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheets/screen.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>
    
    <body>
        <div class="head-container">
            
            <div class="nav-title" alight="left">
                   <div>
                       <center>
                        <a href="/"><img src="img/Pace_logo.png" id="logo"></a>
                       <h1>LOG IN</h1>
                           </center>
                    </div>
                </div>
        
           <!-- log in form -->
            <br>
                <center>
                    
                    <p>Enter your Pace username and password.</p> 
                    
                <div class="login-form">
                    
                    <form>
<input type="text" class="form-input" placeholder="Pace ID"><br>
                        
<input type="password" class="form-input" placeholder="Password">
                    </form>
                        
                        <br>
                        <button id="sub">Log In</button> <button id="sub" class="reg-btn">Register</button>
                        
                        <br>
                        <div class="reg">
                        <form>
                        <input type="text" class="form-input" placeholder="First Name">    
                        
                        <input type="text" class="form-input" placeholder="Last Name">
                        
                        <input type="text" class="form-input" placeholder="Pace ID">
                        
                        <input type="password" class="form-input" placeholder="Password">
                            
                        <input type="password" class="form-input" placeholder="Confirm password"><br>
                            
                        <input type="radio" name="role" value="prof"> Professor &nbsp;&nbsp;
  <input type="radio" name="role" value="student"> Student<br>
                            
                            <button id="sub">Submit</button>
                            </form>
                        
                        </div>
                        
                        <a href="">Forgot password?</a>
                    
                    </form>
        </div>       
            </center>
        
        <!-- php logic -->
        
    <script>
        //toggle registration form.
        $(document).ready(function(){
            $( ".reg" ).hide();
            $(".reg-btn").click(function(){
        $(".reg").slideToggle("slow");
            });
        });
      
    </script>
    
    </body>

        <?php
    include('footer.php');
?>

</html>
    
    