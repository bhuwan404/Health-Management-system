<?php
include('../dbcon.php');
$roll = $_POST['rollno'];
$name = $_POST['name'];
$city = $_POST['city'];
$pcon = $_POST['pcontact'];
$std = $_POST['standard'];
$id = $_POST['sid'];
$imgname = $_FILES['img']['name']; //storing file name
$tmpname = $_FILES['img']['tmp_name']; //tempprary name stored
move_uploaded_file($tmpname, "../dataimg/$imgname");


$query = "UPDATE `student` SET `rollno` = '$roll', `name` = '$name', `city` = '$city', `pcontact` = '$pcon', `standard` = '$std', `image` = '$imgname' WHERE `student`.`id` = $id; ";
$run = mysqli_query($con, $query);
if ($run == true){
?>
    <script>
        alert('Data updated successfully.');
        window.open('updateform.php?sid=<?php echo $id; ?>', '_self');
    </script>
<?php
}
else{
    echo "error";
}

?>