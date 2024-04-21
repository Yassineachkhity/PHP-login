<?php
session_start();
include "db_conn.php";

    if (isset($_POST['uname'])  || isset($_POST['pwd'])){
       
        $uname = validate($_POST['uname']);
        $pwd = validate($_POST['pwd']);

        if (empty($uname)){
            header("Location: index.php?error= User Name is required");
            exit();

        } else if(empty($pwd)){
            header("Location: index.php?error= Password is required");
            exit();
        }else {
            $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pwd'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if ($row['username'] === $uname && $row['password'] === $pwd){
                    echo "Logged in!";
                    $_SESSION['username'] = $row["username"];
                    $_SESSION['id'] = $row["id"];
                    header("Location: home.php");
                    exit();
                }
                else{
                    header("Location: index.php?error= Incorrect User name or password");
                    exit();
                }
            } else{
                header("Location: index.php?error= Incorrect User name or password");
                exit();
            }
        }

    }else{
        header("Location: index.php");
        exit();
    }

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }