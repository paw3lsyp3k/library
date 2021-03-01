<?php 

include_once 'dbh.inc.php';

 $id_ksiazki = $_POST['book_id'];
 $id_czytelnika = $_POST['reader_id'];



 $sql = "DELETE FROM wypozyczenia WHERE ID_czytelnika=$id_czytelnika AND ID_ksiazki=$id_ksiazki;";

 mysqli_query($conn, $sql);
 header("Location: ../index.html");

