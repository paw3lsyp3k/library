<?php 

include_once 'dbh.inc.php';

 $id_reader = $_POST['reader_id'];
 $id_book = $_POST['book_id'];


 $sql = "INSERT INTO wypozyczenia (ID_czytelnika, ID_ksiazki) VALUES ('$id_reader', '$id_book');";

 mysqli_query($conn, $sql);
 header("Location: ../index.html");

