<?php
//logic for login?

$thisPage="logInIndex";
$isLoggedIn="false";
$belowRoot = true;

$displayClass=false;
$showNav=false;

include("../header.php");
?>

<html>
<body>
    <!-- log in form -->
<center>
    <!-- navigate to appropriate folder depending on login credentials-->
      <p><br>Enter your Pace username and password.</p> 
                    
<div class="login-form">
    <form>
        <input type="text" class="form-input" placeholder="Pace ID"><br>
        
        <input type="password" class="form-input" placeholder="Password">
    </form>

        <!-- registration form -->
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

</div>       
</center>
    
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

</html>

<?php
include("../footer.php")
?>