<?php
    if(isset($_POST['add'])){
        include('../db.php');

        $ilustrasi = $_POST['ilustrasi'];
        $judul = $_POST['judul'];
        $date = $_POST['date'];
        $genre = $_POST['genre'];
        $description = $_POST['description'];
        $story = $_POST['story'];

        $query = mysqli_query($con,
            "INSERT INTO novels(ilustrasi, judul, date, genre, description, story)
                VALUES
            ('ilustrasi', 'judul', 'date', 'genre', 'description', 'story')")
                or die(mysqli_error($con));

        if($query){
            echo
                '<script>
                alert("Tambah data sukses"); window.location = "../page/listPage.php"
                </script>';
        }
        else{
            echo
                '<script>
                alert("Tambah data gagal");
                </script>';
        }
    }
    else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>  