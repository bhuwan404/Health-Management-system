<?php
session_start();
if (isset($_SESSION['uid'])) {
    header('location: admin/admindash.php');
}
?>

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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="mx-5 navbar-brand" href="index.php">SMS</a>
        <h3 style="color:white;">Student Management System</h3>
    </nav>
    <div class="nav2 bg-info clearfix py-2">
        <button type="button" class="p-1 ml-5 btn btn-warning float-left"><a href="index.php">Back</a></button>
        <h4 style="color: white;" class="text-center">Admin Login</h4>
    </div>

    <section class="my-5">
        <div class="w-50 m-auto">
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="uname">Username</label>
                    <input type="text" name="uname" autocomplete="off" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" autocomplete="off" class="form-control" required>
                </div>
                <div>
                    <input style=" width:30%; color: #fff; background-color:#218838;" type="submit" name="login" value="login" class="form-control" required>
                </div>
            </form>
        </div>
    </section>

</html>

<?php
include('dbcon.php');

if (isset($_POST['login'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM `admin` WHERE username='$uname' AND password='$pass';";
    $run = mysqli_query($con, $query);
    $row = mysqli_num_rows($run);
    if ($row < 1) {
?>
        <script>
            alert('Username or Password not matched');
            window.open('login.php', '_self');
        </script>
<?php
    } else {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];

        session_start();
        $_SESSION['uid'] = $id;
        header('location: admin/admindash.php');
    }
}

?>