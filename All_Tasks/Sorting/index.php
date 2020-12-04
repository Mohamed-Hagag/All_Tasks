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
<select name="sortBy">
        <option value>Sort By</option>
        <option value="name">Name</option>
        <option value="id">Id</option>
    </select>
<button type="submit">Show employees</button>
</form>
</body>
</html>
