<?php
if(isset($_POST['save'])){
    require_once("signup.php");
    $sc = new People();

    $sc->setName($_POST['name']);
    $sc->setSurname($_POST['surname']);
    $sc->setBirthday($_POST['birthday']);
    $sc->setGender($_POST['gender']);
    $sc->setCity($_POST['city']);
    $sc->insertData();
    echo "<script>alert('data saved successfully') ;document.location='alldata.php'</script>";
}