<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn= new mysqli("localhost","root","","web1");
    if(!$conn)
        {
            die("error");
        }
    else
        {
            echo("sucess");
        }

   
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Passwod</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $data=mysqli_query($conn,"SELECT * FROM students");
        $values=mysqli_fetch_all($data);
        foreach($values as $result){
                     echo'
                <tr>
                    <td>'.$result[0].'</td>
                    <td>'.$result[1].'</td>
                    <td>'.$result[2].'</td>
                    <td>'.$result[3].'</td>
                </tr>
                ';
        }
        ?>
        </tbody>
    </table>
    
</body>
</html>
