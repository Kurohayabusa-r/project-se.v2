<?php
session_start();
session_unset();
session_regenerate_id(true);

require "../database/db.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST["email"];
    $password = $_POST["password"];

    if($email == "")
    {
        $_SESSION["error"] = "Email address must be filled";
    }
    else if($password == "")
    {
        $_SESSION["error"] = "Password must be filled";
    }
    else{
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $res = $stmt->get_result();

        if( $res && !isset($_SESSION["error"]) )
        {
            $row = $res->fetch_assoc();
            if( password_verify($password,$row["password"]) )
            {
                $_SESSION["user"] = $row;

                if( isset($_POST["remember"]) )
                {
                    setcookie("cookie_email",$email,time()+3600,"/");
                    setcookie("cookie_password",$password,time()+3600,"/");
                }
                header("Location: ../index.php");
            }
            else{
                $_SESSION["error"] = "User not found";
                header("Location: ../login.php");
            }
        }
        else{
            header("Location: ../login.php");
        }
        $stmt->free_result();
        $stmt->close();
    }
}

?>