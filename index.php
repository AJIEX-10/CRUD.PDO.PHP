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
    <h3>Add new people</h3>
    <p>The number 1 in the 'gender' field is male, the other is female</p>

    <div>
        <form action="process.php" method="post">
            <label for="name">NAME</label>
            <input type="text" id="name" name="name"/>

            <label for="surname">SURNAME</label>
            <input type="text" id="surname" name="surname"/>

            <label for="birthday">BIRTHDAY</label>
            <input type="date" id="birthday" name="birthday"/>

            <label for="gender">GENDER</label>
            <input type="number" id="gender" name="gender" pattern="^[1-2]{1}$"/>

            <label for="city">CITY</label>
            <input type="text" id="city" name="city"/>

            <input type="submit" value="Save" name="save"/>
        </form>
    </div>
</body>
</html>