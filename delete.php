<?php
require_once('signup.php');

$record = new People();

if(isset($_GET['id']) && isset($_GET['req'])){
    if($_GET['req'] == 'delete'){
        $record->setId($_GET['id']);
        $record->delete();
        echo "<script>alert('data Deleted successfully') ;document.location='alldata.php'</script>";
    }
}