<?php
require_once('signup.php');
$data = new People();
$data->setID($_GET['id']);
if(isset($_POST['edit'])){
    $data->setName($_POST['name']);
    $data->setSurname($_POST['surname']);
    $data->setBirthday($_POST['birthday']);
    $data->setGender($_POST['gender']);
    $data->setCity($_POST['city']);

    $data->update();
    echo "<script>alert('data Updated successfully') ;document.location='alldata.php'</script>";
}

$record = $data->fetchOne();
$val = $record[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet" crossorigin="anonymous"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Update data</h3>
    <div>
        <form action="" method="post">
            <label for="name">NAME</label>
            <input type="text" id="name" name="name" placeholder="" value="<?php echo $val['name'];?>"/>

            <label for="surname">SURNAME</label>
            <input type="text" id="surname" name="surname" placeholder="" value="<?php echo $val['surname'];?>"/>

            <label for="birthday">BIRTHDAY</label>
            <input type="date" id="birthday" name="birthday" placeholder="" value="<?php echo $val['birthday'];?>"/>

            <label for="gender">GENDER</label>
            <input type="number" id="gender" name="gender" placeholder="" value="<?php echo $val['gender'];?>"/>

            <label for="city">CITY</label>
            <input type="text" id="city" name="city" placeholder="" value="<?php echo $val['city'];?>"/>

            <input type="submit" value="EDIT" name="edit"/>
        </form>  
    </div>
</body>
</html>