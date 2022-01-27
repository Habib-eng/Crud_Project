<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link rel="stylesheet" href="stylesheet.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_SESSION['message'])): 
    //tkharej akel cadre l ahmer oela akhdher?>
        <div class="alert alert-<php?=$_SESSION['msg_type']?>">
            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>


    <?php 
        $mysqli = new mysqli('localhost','root','','crud') or die (mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM articles") or die ($mysqli->error);
        //pre_r($result);
        //pre_r($result->fetch_assoc());
        //pre_r($result->fetch_assoc());
        ?>
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Article</th>
                        <th>Comments</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <?php
                    while ($row=$result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['Name'];?></td>
                            <td><?php echo $row['LastName'];?></td>
                            <td><?php echo $row['Email'];?></td>
                            <td><?php echo $row['Article'];?></td>
                            <td><?php echo $row['Comments'];?></td>
                            <td>
                                <a href="Read.php?edit=<?php echo $row['id']; ?>"
                                    class="btn btn-info">Edit</a>
                                <a href="link.php?delete=<?php echo $row['id']; ?>"
                                    class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
            </table>
        </div>

        <?php
        function pre_r($array){
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
    ?>
    <?php include 'footer.php'; ?>
</body>
</html>