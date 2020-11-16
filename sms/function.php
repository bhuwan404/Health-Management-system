<?php
function showdetails($std, $roll)
{
    include('dbcon.php');
    $query = "SELECT * FROM `student` WHERE `rollno` = '$roll' AND `standard` = '$std'";
    $run = mysqli_query($con, $query);
    if (mysqli_num_rows($run) > 0) {
        $data = mysqli_fetch_assoc($run);
?>

        <div style="overflow-x:auto;" id="sdetails">
            <table border="2">
                <tr>
                    <th colspan="3">Student Details</th>
                </tr>
                <tr>
                    <th rowspan="5"><img style="max-height:150px; max-widt:220px;" src="dataimg/<?php echo $data['image']; ?>" alt=""></th>
                    <td>Rollno</td>
                    <td><?php echo $data['rollno'] ?></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><?php echo $data['name'] ?></td>
                </tr>
                <tr>
                    <td>Standard</td>
                    <td><?php echo $data['standard'] ?></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><?php echo $data['city'] ?></td>
                </tr>
                <tr>
                    <td>Parent Contact</td>
                    <td><?php echo $data['pcontact'] ?></td>
                </tr>
            </table>
        </div>
        
<?php
    } else {
        echo "<script>alert('No Student Found');</script>";
    }
}
?>