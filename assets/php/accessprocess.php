
<?php
    session_start();
    require 'dbcreds.php';
    
    //$portal_user = $_POST('username');
    $result = mysqli_query($dbconnect, "select * from users where username = '$username' and password = '$password'") 
        or die("Failed to query database ".mysqli_error($dbconnect));
    $row = mysqli_fetch_array($result);
    if ($row['username'] == $username && !empty($username) && $row['password'] && !empty($password) == $password){
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('location: https://portal.boompje5.nl');
    } else {
        echo '<script language="javascript" type="text/javascript">alert("Gebruikersnaam en/of wachtwoord onjuist.");document.location.href="https://auth.boompje5.nl"</script>';
    }
    
?>
