<?php
session_start();
if (isset($_SESSION['uid'])) {
} else {
    header('location: ../login.php');
}
?>

<?php include('html-boilerplate.php');
include("header.php");
?>
<div class="nav2 bg-info clearfix py-2">
    <button  type="button" class="p-1 ml-5 btn btn-warning float-left"><a href="admindash.php">Back</a></button>
    <h4 style="color: white;" class="text-center">Add Student Details</h4>
</div>


<!-- form -->
<section class="my-5">
    <div class="w-50 m-auto">
        <form action="addstudent.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="rollno">Roll No.</label>
                <input type="text" name="rollno" placeholder="Enter Rollno." autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Enter Full Name" autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="standard">Standard</label>
                <input type="text" name="standard" placeholder="Enter Standard" autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" placeholder="Enter City" autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="pcontact">Parent Contact</label>
                <input type="text" name="pcontact" placeholder="Enter Parent Contact no." autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" name="img">
            </div>

            <div>
                <input style=" width:30%; color: #fff; background-color:#218838;" type="submit" name="submit" id="submit" value="Submit" class="form-control" required>
            </div>
        </form>
    </div>
</section>

</form>
</div>

</body>

</html>

<?php
if (isset($_POST['submit'])) {
    include('../dbcon.php');
    $roll = $_POST['rollno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $pcon = $_POST['pcontact'];
    $std = $_POST['standard'];
    $imgname = $_FILES['img']['name']; //storing file name
    $tmpname = $_FILES['img']['tmp_name']; //temporary name stored
    move_uploaded_file($tmpname, "../dataimg/$imgname");


    $query = "INSERT INTO `student`(`rollno`, `name`, `city`, `pcontact`, `standard`, `image`) VALUES ('$roll', '$name', '$city', '$pcon', '$std', '$imgname')";
    $run = mysqli_query($con, $query);
    if ($run == true) {
?>
        <script>
            alert('Data inserted successfully.');
        </script>
<?php
    }
}
?>