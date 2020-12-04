<?php
$users = [
    '0' => ['email' => 'mohamed@gmail.com', 'password' => '12345'],
    '1' => ['email' => 'ahmed@gmail.com', 'password' => '11111'],
    '2' => ['email' => 'ali@gmail.com', 'password' => '22222'],
    '3' => ['email' => 'mahmoud@gmail.com', 'password' => '33333'],
    '4' => ['email' => 'afsha@gmail.com', 'password' => '99999'],
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = '';

    foreach ($users as $user) {

        if (($user['email'] == $_POST['email']) && ($user['password'] == $_POST['password'])) {
            include_once 'home.php';
            exit;
        } else {
            $errors = 'Not valid email or password';
            break;
        }

        // if ($user['email']  != $_POST['email']) {
        //     echo ('ooo');
        // }
        // if  ($user['password'] != $_POST['password']) {
        //     echo ('kk');
        //     break;
        // }

        //  else{
        //     $errors['email']='Not valid email';
        //     continue;
        // }

        // if($_POST['password'] != $user['password']){
        //     $errors['password']='Not valid password';

        // }
        // if(($_POST['email'] != $user['email']) && ($_POST['password'] != $user['password'])){
        //     $errors['user']='Not valid email or password';

        // }

    }

}
// if (($_SERVER['REQUEST_METHOD'] == 'POST') && empty($errors)) {
//     include 'home.php';
//     exit;
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label>Email :</label>
        <input type="email" name="email">
        <br>
        <label>Password :</label>
        <input type="password" name="password">
        <br>
        <?php
if (isset($errors)) {
    echo ($errors);
}
?>
        <br>

        <button type="submit">Login</button>
    </form>

</body>

</html>