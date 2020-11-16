<?php
session_start();
if (isset($_SESSION['uid'])) {
} else {
    header('location: ../login.php');
}
?>

<?php
include('html-boilerplate.php');
include('header.php');
?>
<div class="nav2 bg-info clearfix py-2">
    <button type="button" class="p-1 ml-5 btn btn-warning float-left"><a href="../index.php">Back</a></button>
    <h4 style="color: white;" class="text-center">Welcome to Admin Dashboard</h4>
</div>
<div class="dashboard ">
    <ul style="list-style:none; text-decoration: none; font-size:25px;">
        <li><a href="addstudent.php">1. Insert Student</a></li>
        <li><a href="updatestudent.php">2. Update Student</a></li>
        <li><a href="deletestudent.php">3. Delete Student</a></li>
    </ul>
</div>
</body>