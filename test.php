<?php
include('../eco-mart/front-end/includes/config.php');
if (isset($_POST['add'])) {
    $date = $_POST['date'];
    $query = mysqli_query($connection, "insert into date (datecol) values ('$date')");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="date" name="date">
        <button name="add">add</button>
    </form>
</body>

</html>