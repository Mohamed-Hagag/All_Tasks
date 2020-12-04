<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    if (empty($_POST['userName'])) {
        $errors['userName'] = 'Please Enter User Name ';
    }
    if (empty($_POST['email'])) {
        $errors['email'] = 'Please Enter Email ';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Please Enter Password ';
    }
    if (empty($_POST['re-password'])) {
        $errors['re-password'] = 'Please Enter Confirm Password ';
    }
    if ($_POST['re-password'] != $_POST['password']) {
        $errors['confirm'] = 'Please make sure your passwords match';
    }
    if (empty($_POST['gender'])) {
        $errors['gender'] = 'Please Enter gender ';
    }
    if (empty($_POST['mobile'])) {
        $errors['mobile'] = 'Please Enter Mobile ';
    }

}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && empty($errors)) {
    include 'home.php';
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form  method="post">
      <label>User Name :</label>
      <input type="text" name="userName" />
      <span>
        <?php
if (isset($errors['userName'])) {
    echo ($errors['userName']);
}
?>
      </span>
      <br />
      <label>Email :</label>
      <input type="email" name="email" />
      <span>
        <?php
if (isset($errors['email'])) {
    echo ($errors['email']);
}
?>
      </span>

      <br />
      <label>Password :</label>
      <input type="password" name="password" />
      <span>
        <?php
if (isset($errors['password'])) {
    echo ($errors['password']);
}
?>
      </span>

      <br />
      <label>Confirm Password :</label>
      <input type="password" name="re-password" />
      <span>
        <?php
if (isset($errors['re-password'])) {
    echo ($errors['re-password']);
} elseif (isset($errors['confirm'])) {
    echo ($errors['confirm']);

}
?>
      </span>

      <br />
      <label>Mobile : </label>
      <input type="tel" name="mobile" />
      <span>
        <?php
if (isset($errors['mobile'])) {
    echo ($errors['mobile']);
}
?>
      </span>

      <br />
      <label>Gender :</label>
      <label>Male</label>
      <input type="radio" name="gender" value="Male" />
      <label>Female</label>
      <input type="radio" name="gender" value="Female" />
      <span>
        <?php
if (isset($errors['gender'])) {
    echo ($errors['gender']);
}
?>
      </span>

      <br />
      <button type="submit">Submit</button>
    </form>
  </body>
</html>
