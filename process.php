<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Input Control</title>
</head>

<body>
    <header>
        <h1>Input Control</h1>
    </header>
    <br>
    <br>
    <form action="process.php" method="post">
        <table align="center">
            <thead>
                <th>Input Control PHP</th>
            </thead>
            <tbody>
                <tr>
                    <td><label for="firstname">First Name</label></td>
                    <td><input type="text" name="first_name" id=""></td>
                </tr>
                <tr>
                    <td><label for="lastname">Last Name</label></td>
                    <td><input type="text" name="last_name"></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone Number</label></td>
                    <td><input type="tel" name="telephone"></td>
                </tr>
                <tr>
                    <td><label for="address">Your Address</label></td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td><input type="reset" value="Reset Data" name="reset"></td>
                    <td><input type="submit" value="Submit Data" name="proses"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>
<?php
include "./connection.php";
if(isset($_POST['proses'])){
    mysqli_query($koneksi, "INSERT INTO userdata SET
    first_name = '$_POST[first_name]',
    last_name = '$_POST[last_name]',
    phone_number = '$_POST[telephone]',
    address = '$_POST[address]'");
}
?>