<?php
    if(isset($_GET['id'])){
        include ('../db.php');
        $id = $_GET['id'];
        $queryDelete = mysqli_query($con, "DELETE FROM novels WHERE id='$id'") or die(mysqli_error($con));
        if($queryDelete){
            echo
                '<script>
                alert("Delete data Success"); window.location = "../page/listPage.php"
                </script>';
        }
        else{
            echo
                '<script>
                alert("Delete data Failed"); window.location = "../page/listPage.php"
                </script>';
        }
    } 
    else{
        echo
            '<script>
            window.history.back();
            </script>';
    }
?>