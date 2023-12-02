<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $Name = $_POST['name'];

        $user_id = $_POST['id'];

        $Email = $_POST['email'];

        $Phone = $_POST['phone'];

        $Title = $_POST['title'];

        $Created = $_POST['Created']; 

        $sql = "UPDATE contacts SET name='$Name',email='$Email',phone='$Phone',title='$Title', Created='$Created' WHERE id='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `contacts` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $Name = $row['name'];

            $Email = $row['email'];

            $Phone = $row['phone'];

            $Title  = $row['title'];

            $Created = $row['Created'];

            $user_id = $row['id'];

        } 

    ?>
<center>
        <h2>User Update Form</h2>
        

        <form action="" method="post">

          <fieldset>

            Name:<br>

            <input type="text" name="name" value="<?php echo $Name; ?>">

            <input type="hidden" name="id" value="<?php echo $user_id; ?>">

            <br>

            Email:<br>

            <input type="text" name="email" value="<?php echo $Email; ?>">

            <br>

            Phone:<br>

            <input type="number" name="phone" value="<?php echo $Phone; ?>">

            <br>

            Title:<br>

            <input type="text" name="title" value="<?php echo $Title; ?>">

            <br>

            
            Created:<br>

            <input type="date" name="Created" value="<?php echo $Created; ?>">

            <br>

            

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: create.php');

    } 

}

?> 