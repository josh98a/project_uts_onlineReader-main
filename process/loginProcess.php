<?php
    if(isset($_POST['login'])){
        include('../db.php');
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'") or die(mysqli_error($con));
        
        if(mysqli_num_rows($query) == 0){
            echo
            '<script>
            alert("email not found!"); window.location = "../page/loginPage.php"
            </script>';
        }else{
            $user = mysqli_fetch_assoc($query);

            if(password_verify($password, $user['password'])){
                session_start();

                $_SESSION['isLogin'] = true;
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['phone'] = $user['phone'];

                echo
                '<script>
                alert("Login Success"); window.location = "../page/index.php"
                </script>';
            }else {
                echo    
                '<script>
                alert("Username or Password Invalid");
                window.location  = "../page/loginPage.php"
                </script>';
                }
        }
    }else{
        echo
        '<script>
        window.history.back()
        </script>';
    }