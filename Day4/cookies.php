<html>
<body>
    <?php
    //cookies

    //set a cookie
    $cookieName = 'langPreference';
    $cookieValue = 'French';
    $cookieExpire = time() +(60);


    setcookie($cookieName, $cookieValue, $cookieExpire,"/");

    echo "Cookie has been set !";

    //Accessing the cookie
    if(isset($_COOKIE[$cookieName])){
        echo " <br> your language prefereance is:".$_COOKIE[$cookieName];
    }
    else{
        echo " <br> Cookie is not set !";
    }

    //Deleting Cookie or block the cookie
    setcookie($cookieName,$cookieValue, time() - (30),"/");
    echo "<br> Cookie has been deleted !";

    
    ?>
</body>
</html>