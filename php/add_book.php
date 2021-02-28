<?php 

include_once 'dbh.inc.php';

 $title = $_POST['book_title'];
 $author = $_POST['book_author'];
 $rok = $_POST['book_year'];



 $sql = "INSERT INTO ksiazki (tytul, autor, rok_wydania) VALUES ('$title', '$author', '$rok');";

 mysqli_query($conn, $sql);
 header("Location: ../index.html");

