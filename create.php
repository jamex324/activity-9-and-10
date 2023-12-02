<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="style.css">
    

<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    

    $Name = $_POST['name'];

    $Email = $_POST['email'];

    $Phone = $_POST['phone'];

    $Title = $_POST['title'];

    $Created = $_POST['Created'];

    $sql = "INSERT INTO contacts( name, email, phone, title, Created) VALUES ( '$Name', '$Email', '$Phone', '$Title', '$Created')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "ERROR!!!!". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>
<center>
<h2>CONTACT FORM</h2>

<form action="" method="POST">

  <fieldset>

    Name:<br>

    <input type="text" name="name" placeholder="put your name">

    <br>

    Email:<br>

    <input type="text" name="email" placeholder="put your email">

    <br>

    Phone:<br>

    <input type="number" name="phone" placeholder="put your phone">

    <br>

    Title:<br>

    <input type="text" name="title" placeholder="put your title">

    <br>

    Created:<br>

    <input type="date" name="Created">

    <br>

    

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>


