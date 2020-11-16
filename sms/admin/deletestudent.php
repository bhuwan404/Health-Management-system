<?php
session_start();
if (isset($_SESSION['uid'])) {
} else {
    header('location: ../login.php');
}
?>

<?php
include('html-boilerplate.php');
include("header.php");
?>
<div class="nav2 bg-info clearfix py-2">
    <button type="button" class="ml-5 btn btn-warning float-left"><a href="admindash.php">Back</a></button>
    <h2 style="color: white;" class="text-center">Delete Student Details</h2>
</div>

<section class="my-5">
    <div class="w-50 m-auto">
        <form action="deletestudent.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="standard">Standard</label>
                <input type="number" name="standard" autocomplete="off" class="form-control" required>
            </div>
            <div>
                <input style=" width:30%; color: #fff; background-color:#218838;" type="submit" name="submit" value="Search" class="form-control" required>
            </div>
        </form>
    </div>
</section>

<?php
if (isset($_POST['submit'])) {
    include('../dbcon.php');
    $name = $_POST['name'];
    $std = $_POST['standard'];
    $sql = "SELECT * FROM `student` WHERE `standard`='$std' AND `name` LIKE '%$name%'";
    $run = mysqli_query($con, $sql);

    if (mysqli_num_rows($run) < 1) {
?>
        <script>
            alert("No Result Found!");
        </script>
    <?php
    } else {
    ?>
        <div class="searchResult">
            <table style="width:60%" ;>
                <tr>
                    <th>SN</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Rollno</th>
                    <th>Delete</th>
                </tr>
                <?php
                $count = 0;
                while ($data = mysqli_fetch_assoc($run)) {
                    $count++;
                ?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><img style="max-width: 100px;" src="../dataimg/<?php echo $data['image']; ?>" /></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['rollno']; ?></td>
                        <td><a href="deleteform.php?sid=<?php echo $data['id'] ?>">Delete</a></td> <!-- here id is sent in updateform.php using get method -->
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
<?php
    }
}
?>

</body>

</html>