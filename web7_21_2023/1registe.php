<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>

    <h1>Registration Form</h1>
    <div>
        <form action="1registe.php"method="post">
        <table bgcoloe="lightblue">
            <tr>

                <td>First Name:</td>
                <td><input type="text"name="fname"placeholder="Kamal"></td>
            <tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text"name="lname"placeholder="perera"></td>
            </tr>
            <tr>

                <td>Username:</td>
                <td><input type="text"name="uname"placeholder="perera.lk"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password"name="password"placeholder="Kamal"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio"name="gender"value="male">Male<br>
                <input type="radio"name="gender"value="female">Female</td>
            </tr>
            <tr>
                <td>Academic Year:</td>
                <td>
                    <select name="option">
                        <option value="firstyear">1st year</option>
                        <option value="secondsyear">2nd year</option>
                        <option value="thirdyear">3rd year</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email"name="email"placeholder="name@gmail.com"></td>
            </tr>
            <tr>
                <td>Phone number</td>
                <td><input type="tel"name="phone"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit"value="submit"></td>
            </tr>
        </table>
        </form>
    </div>
</center>
     
<?php
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$uname=$_REQUEST["uname"];
$pword=$_REQUEST["password"];
$gender=$_REQUEST["gender"];
$year=$_REQUEST["option"];
$mail=$_REQUEST["email"];
$number=$_REQUEST["phone"];

?>

    
    <table border="1">
        <tr>
            <td>firstName:</td>
            <td><?php echo $fname ?></td>
        </tr>
        <tr>
            <td>lastName:</td>
            <td><?php echo $lname ?></td>
        </tr>
        <tr>
            <td>UserName:</td>
            <td><?php echo $uname ?></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><?php echo $pword ?></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td><?php echo $gender ?></td>
        </tr>
        <tr>
            <td>Acedemic year:</td>
            <td><?php echo $year?></td>
        </tr>
        <tr>
            <td>Email adress:</td>
            <td><?php echo $mail ?></td>
        </tr>
        <tr>
            <td>Phone number:</td>
            <td><?php echo $number ?></td>
        </tr>
    </table>
</body>
</html>
