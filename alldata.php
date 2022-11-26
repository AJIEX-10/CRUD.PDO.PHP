<?php
require_once("signup.php");
$data = new People();
$all = $data->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet" crossorigin="anonymous"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC">
    <title>Document</title>
</head>
<body>
<h2>List</h2>
<center>
    <a class="btn btn-success" href="index.php">add New people</a>
    <br>
</center>
<br>
<table>
    <tr>
        <th>name</th>
        <th>surname</th>
        <th>birthday</th>
        <th>gender</th>
        <th>city</th>
        <th>action</th>
    </tr>
    <?
foreach($all as $key => $val){
    ?>
    <tr>
        <td><?=$val['name']?></td>
        <td><?=$val['surname']?></td>
        <td><?$birthday = $val['birthday'];
            $age = floor( ( time() - strtotime($birthday) ) / (60 * 60 * 24 * 365.25) );
            echo $age . ' years';?></td>
        <td><?if($val['gender']==1){
            echo 'M';
        } else{
            echo 'F';
        }$val['gender']?></td>
        <td><?=$val['city']?></td>
        <td><a class="btn btn-danger" href="delete.php?id=<?=$val['id']?>&req=delete">DELETE</a>
        <a class="btn btn-warning" href="edit.php?id=<?=$val['id']?>">EDIT</a>
        </td>
    </tr>
<?
}
?>
</table>
</body>
</html>