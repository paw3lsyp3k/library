<?php 

include_once 'dbh.inc.php';

 $imie = $_POST['readername'];
 $nazwisko = $_POST['readersurname'];
 $phone = $_POST['readerphone'];
 $email = $_POST['readermail'];
 $ulica = $_POST['readeraddress1'];
 $nrdomu = $_POST['readeraddress2'];
 $miasto = $_POST['readercity'];
 $kod = $_POST['readerpostal'];


 $sql = "INSERT INTO czytelnicy (imie, nazwisko, telefon, mail, ulica, nr_domu, miejscowosc, kod) VALUES ('$imie', '$nazwisko', '$phone', '$email', '$ulica', '$nrdomu', '$miasto', '$kod');";

 mysqli_query($conn, $sql);
 header("Location: ../index.html");

