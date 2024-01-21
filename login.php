<?php
    include('default.html');
    include('database.php');
    if(loggedin()) {
        header("location:todo.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title> Login </title>
</head>
<body>

    <p style="white-space:pre">  Don't have an account <a href="newuser.php" style="color: red; text-decoration: none"> Create New Account </a> </p> 
    
    <?php error(); ?>

    <center>
    <form action="valid.php" method="POST">
    <fieldset>
        <legend style="color: blue;"> Login </legend>
            <table>
                <tbody>
                    <tr>
                         <td> <pre>Name </pre> </td>
                         <td> <input style="border: 1px solid black;" size="25" type="text" name="username" autocomplete="off" required></td>
                    </tr>
                    <tr>
                         <td> <pre>Password </pre> </td>
                         <td> <input style="border: 1px solid black;" size="25" type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td>
                            <?php                            
                                $capcode = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
                                $capcode = substr(str_shuffle($capcode), 0, 6);
                                $_SESSION['captcha'] = $capcode;
                                echo '<div class = "unselectable">'.$capcode.'</div>';
                            ?>
                        </td>
                        <td> <input style="border: 1px solid black;" size="25" type="text" name="captcha" autocomplete="off" required></td>
                    </tr>
                    <tr>
                        <td> <input type="reset" value="Reset"> </td>
                        <td> <input type="submit" value="Submit"> </td>
                    </tr>
                </tbody>
            </table>
    </fieldset>
    </center>
    </form>
</body>

