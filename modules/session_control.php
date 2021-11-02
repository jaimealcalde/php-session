<?php   
    function checkSession(){
        session_start();
        $urlFile = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

        if ($urlFile == "index.php" || $urlFile == "PHP-SESSION") {
    
            if (isset($_SESSION["email"])) {
                header("Location:./second_page.php");
            } else {

                if ($alert = checkLoginError()) return $alert;
    
                if ($alert = checkLoginInfo()) return $alert;
    
                if ($alert = checkLogout()) return $alert;
            }
        } else {
            if (!isset($_SESSION["email"])) {
                $_SESSION["loginError"] = "You don't have permission to enter the dashboard. Please Login.";
                header("Location:./index.php");
            }
        }

    }

    function destroySession(){
        session_start();
        unset($_SESSION);

        destroySessionCookie();

        session_destroy();
        header("Location:../index.php?logout=true");
    }

    function authUser(){
        session_start();

        $email = $_POST["email"];
        $password = $_POST["password"];

        if(checkUser($email, $password)){
            $_SESSION["email"] = $email;
            header("Location:../second_page.php");
        }else{
            $_SESSION["loginError"] = "Wrong email or password!";
            header("Location:../index.php");
        }
    }

    function checkUser(string $email, string $password){
        $emailDb = "jaime.alcalde.n@gmail.com";
        $passwordDb = "qwerty";

        $passwordDbEncript = password_hash($passwordDb, PASSWORD_DEFAULT);

        if($email === $emailDb && password_verify($password, $passwordDbEncript)) return true;
        else return false;
    }

    function destroySessionCookie(){
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }
    }

    function checkLoginError(){
        if (isset($_SESSION["loginError"])) {
            $errorText = $_SESSION["loginError"];
            unset($_SESSION["loginError"]);
            return ["type" => "danger", "text" => $errorText];
        }
    }

    function checkLoginInfo(){
        if (isset($_SESSION["loginInfo"])) {
            $infoText = $_SESSION["loginInfo"];
            unset($_SESSION["loginInfo"]);
            return ["type" => "primary", "text" => $infoText];
        }
    }

    function checkLogout(){
        if (isset($_GET["logout"]) && !isset($_SESSION["email"])) return ["type" => "primary", "text" => "Logout succesful"];
    }
