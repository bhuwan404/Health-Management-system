<?php
session_start();
if (isset($_SESSION['uid'])) {
} else {
    header('location: ../login.php');
}
?>

<?php
include('html-boilerplate.php');
include('header.php')
?>
<!-- <div class="header1">
    <button style="margin-right: 500px;"><a href="updatestudent.php">Back</a></button>
</div> -->

<?php
include('../dbcon.php');
$sid = $_GET['sid'];
$query = "SELECT * FROM `student` WHERE `id`='$sid'";
$run = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($run);
?>
<div class="nav2 bg-info clearfix py-2">
    <button type="button" class="p-1 ml-5 btn btn-warning float-left"><a href="updatestudent.php">Back</a></button>
    <h4 style="color: white;" class="text-center">Update Student Details</h4>
</div>

<section class="my-5">
    <div class="w-50 m-auto">
        <form action="updatedata.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="rollno">Roll No.</label>
                <input type="text" name="rollno" value="<?php echo $data['rollno']; ?>" placeholder="Enter Rollno." autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo $data['name']; ?>" placeholder="Enter Full Name" autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="standard">Standard</label>
                <input type="text" name="standard" value="<?php echo $data['standard']; ?>" placeholder="Enter Standard" autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" value="<?php echo $data['city']; ?>" placeholder="Enter City" autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="pcontact">Parent Contact</label>
                <input type="text" name="pcontact" value="<?php echo $data['pcontact']; ?>" placeholder="Enter Parent Contact no." autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" name="img">
            </div>

            <div>
                <input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
                <input style=" width:20%; color: #fff; background-color:#218838;" type="submit" name="submit" value="Submit" class="form-control" required>
            </div>
        </form>
    </div>
</section>