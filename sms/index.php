<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Student Management System</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="mx-5 navbar-brand" href="index.php">SMS</a>
        <h3 style="color:white;" class="">Student Management System</h3>
        <button type="button" class="btn btn-info ml-auto mr-5" type="submit"><a style="color:white; text-decoration:none;" href="admin/admindash.php">Admin Login</a></button>
    </nav>

    <div class="nav2 bg-info clearfix py-1">
        <h4 style="color: white;" class="text-center">Student Information</h4>
    </div>


    <section class="my-5">
        <div class="w-50 m-auto">
            <form action="index.php" method="POST">
                <div class="form-group">
                    <label for="standard">Standard</label>
                    <select name="std" class="form-control">
                        <option>11th</option>
                        <option>12th</option>
                        <option>13th</option>
                        <option selected>14th</option>
                        <option>15th</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="rollno">Roll No.</label>
                    <input type="text" name="rollno" placeholder="Enter Rollno" autocomplete="off" class="form-control" required>
                </div>
                <div>
                    <input style = "width:30%; color: #fff; background-color:#218838;" type="submit" id="submit" name="submit" value="Show Info" class="form-control" required>
                </div>
            </form>
        </div>
    </section>


</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $standard = $_POST['std'];
    $rollno = $_POST['rollno'];
    include('function.php');
    showdetails($standard, $rollno);
}
?>