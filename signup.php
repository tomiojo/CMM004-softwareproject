
<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>Sign up</title>
        <link rel ="stylesheet" href="./stylesignup.css">
        <style>
            .error{
                color:red;
                font-style: oblique;
            }
        </style>
    </head>
    <body>
        <div class ="form-Signup">
            <h1> Signup Here </h1>
            <form action="signupbe.php" method= 'POST' id="signupform">
                <h3>Email Address</h3>
                <Input type='text' name='email' placeholder="johndoe@email.com">
                    <h3>Password</h3>
                <Input type='password' name='password' placeholder="Password">
                    <h3>Telephone number</h3>
                <Input type='text' name='telephone' placeholder="Telephone">
                    <br><br>
                    <button type="submit" name="submit"> Submit </button>
            </form>
        </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src=https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js></script>
        <script src="signup.js"></script>

    </body>

    <?php
    if(isset ($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
            echo "<p>Empty fields</p>" ;
        }
        else if($_GET["error"]=="invalidemail"){
                echo "<p>Enter a valid email </p>" ;

        }
        else if($_GET["error"]=="stmtfailed"){
            echo "<p>Please try again </p>" ;

        }
        else if($_GET["error"]=="emailtaken"){
            echo "<p> Email already exist </p>" ;
        }
    }
    ?>

</html>
    

    
