<html>
    <body>
        <?php
        //sessions
        session_start();
        $_SESSION["username"] = "John";
        $_SESSION["role"] = ["Hacker"];
        echo "Session has been created ! <br>";

        //Accessing Session variables
        if(isset($_SESSION["username"])){
            echo" welcome" .$_SESSION["username"] ;
        }
        else {

       echo "NO active session found!";
    }    

    //Destroying/killing/terminating the session
    session_unset();
    session_destroy();
    echo "<br> Session has been terminated ! <br>" ;
    if(isset($_SESSION["username"])){
        echo" welcome" .$_SESSION["username"] ;
    }
    else {

   echo "NO active session found!";
}    


        ?>
</body>
</html>