<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <?php
        echo "<h1 style='color:red'>My Form</h1>";

        if(isset($_POST['submit'])){
        echo 'Password is:'.$_POST['pwd'];
        }
        ?> 
    <form action="" method="post">
        <div>
            <label for="">Username:</label>
            <input type="text" name="Username" />
        </div>
        <div>
            <label for="">Password</label>
            <input type="text" name="pwd" />
        </div>

        <div>

            <input type="submit" value="Login" name="submit">
        </div>

    </form>

    <div>
        
    </div>
</body>

</html>

<!-- ASSIGNMENT -->
<!-- "What are the different form elements and attributes?" -->
<!-- Write Difference Between get and post -->