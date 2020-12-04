<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $Id = $_POST['id'];
    $employees = array();
    foreach ($name as $key => $n) {

        $employees[$Id[$key]] = $n;

    }

    function sortBy($employees, $sortMethod)
    {

        if ($sortMethod == 'name') {
            asort($employees);
            return ($employees);
        } elseif ($sortMethod == 'id') {
            ksort($employees);
            return ($employees);

        }
    }
    if (in_array($_POST['sortBy'], ['name', 'id'])) {
        $employees = (sortBy($employees, $_POST['sortBy']));

    } else {
        echo ('Please enter sort by');
    }


    foreach ($employees as $key => $employee) {
        print "<h2>Name : $employee , ID : $key</h2> ";

    }

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
    <form method="post">
    <label >Employee1 :</label>
<input type="text" name="name[0]">
<label >ID :</label>
<input type="number" name="id[0]">
<br>
<label >Employee2 :</label>
<input type="text" name="name[1]">
<label >ID :</label>
<input type="number" name="id[1]">
<br>
<label >Employee3 :</label>
<input type="text" name="name[2]">
<label >ID :</label>
<input type="number" name="id[2]">
<br>
<label >Employee4 :</label>
<input type="text" name="name[3]">
<label >ID :</label>
<input type="number" name="id[3]">
<br>
<label >Employee5 :</label>
<input type="text" name="name[4]">
<label >ID :</label>
<input type="number" name="id[4]">
<br>
<label >Employee6 :</label>
<input type="text" name="name[5]">
<label >ID :</label>
<input type="number" name="id[5]">
<br>
<label >Employee7 :</label>
<input type="text" name="name[6]">
<label >ID :</label>
<input type="number" name="id[6]">
<br>
<label >Employee8 :</label>
<input type="text" name="name[7]">
<label >ID :</label>
<input type="number" name="id[7]">
<br>
<label >Employee9 :</label>
<input type="text" name="name[8]">
<label >ID :</label>
<input type="number" name="id[8]">
<br>
<label >Employee10 :</label>
<input type="text" name="name[9]">
<label >ID :</label>
<input type="number" name="id[9]">
<br>
<label >Employee11 :</label>
<input type="text" name="name[10]">
<label >ID :</label>
<input type="number" name="id[10]">
<br>
<label >Employee12 :</label>
<input type="text" name="name[11]">
<label >ID :</label>
<input type="number" name="id[11]">
<br>
<label >Employee13 :</label>
<input type="text" name="name[12]">
<label >ID :</label>
<input type="number" name="id[12]">
<br>
<label >Employee14 :</label>
<input type="text" name="name[13]">
<label >ID :</label>
<input type="number" name="id[13]">
<br>
<label >Employee15 :</label>
<input type="text" name="name[14]">
<label >ID :</label>
<input type="number" name="id[14]">
<br>
<br>
<select name="sortBy">
        <option value>Sort By</option>
        <option value="name">Name</option>
        <option value="id">Id</option>
    </select>
<button type="submit">Show employees</button>
</form>
</body>
</html>
