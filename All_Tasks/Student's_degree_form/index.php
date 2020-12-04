<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $degree = $_POST['degree'];
    $students = array();
    foreach ($name as $key => $n) {

        $students[$n] = $degree[$key];

    }

    if (count($students) == 10) {
        include_once 'display.php';
    }

    exit;
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
    <form  method="post">
    <label >Name :</label>
    <input type="text" name="name[0]">
    <label >Degree :</label>
    <input type="number" name="degree[0]">
    <br>
    <label >Name :</label>
    <input type="text" name="name[1]">
    <label >Degree :</label>
    <input type="number" name="degree[1]">
    <br>
    <label >Name :</label>
    <input type="text" name="name[2]">
    <label >Degree :</label>
    <input type="number" name="degree[2]">
    <br>
    <label >Name :</label>
    <input type="text" name="name[3]">
    <label >Degree :</label>
    <input type="number" name="degree[3]">
    <br>
    <label >Name :</label>
    <input type="text" name="name[4]">
    <label >Degree :</label>
    <input type="number" name="degree[4]">
    <br>
    <label >Name :</label>
    <input type="text" name="name[5]">
    <label >Degree :</label>
    <input type="number" name="degree[5]">
    <br>
    <label >Name :</label>
    <input type="text" name="name[6]">
    <label >Degree :</label>
    <input type="number" name="degree[6]">
    <br>
    <label >Name :</label>
    <input type="text" name="name[7]">
    <label >Degree :</label>
    <input type="number" name="degree[7]">
    <br>
    <label >Name :</label>
    <input type="text" name="name[8]">
    <label >Degree :</label>
    <input type="number" name="degree[8]">
    <br>
    <label >Name :</label>
    <input type="text" name="name[9]">
    <label >Degree :</label>
    <input type="number" name="degree[9]">
    <br>
    <button type='submit'>Submit</button>
    </form>
</body>
</html>
