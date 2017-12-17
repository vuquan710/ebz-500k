<?php
ob_start();
include('view/layouts/header.php');
require 'model/dbCon.php';
$id =  $_GET['id'];
$sql = "SELECT * FROM Schedule WHERE id ='$id'";
$req = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($req);

$sql_staff = "SELECT * FROM Staffs";
$req_staff_1 = mysqli_query($conn, $sql_staff);
$req_staff_2 = mysqli_query($conn, $sql_staff);
$req_staff_3 = mysqli_query($conn, $sql_staff);

if (isset($_POST['submit'])) {
    $date=$_POST['date'];
    $shift_1=$_POST['shift_1'];
    $shift_2=$_POST['shift_2'];
    $shift_3=$_POST['shift_3'];
    $sql = "UPDATE Schedule SET date1='$date',shift_1='$shift_1',shift_2='$shift_2',shift_3='$shift_3' WHERE id='$id' ";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header('location:schedule.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Schedule
            <small>Add</small>
          </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
          <form action="" method="POST">
            <div class="form-group">
              <label>Date</label>
              <input class="form-control" name="date" value="<?=$row['date1']?>" required type="date" />
            </div>
            <div class="form-group">
              <label>8 - 11 h</label>
              <select name='shift_1' class="form-control">
              <?php while ($row_staff_1 = mysqli_fetch_assoc($req_staff_1)) { ?>
                <option value="<?=$row_staff_1['full_name'] ?>" <?= $row['shift_1'] == $row_staff_1['full_name'] ? "selected" : ""; ?> ><?=$row_staff_1['full_name'] ?></option>
              <?php }; ?>
              </select>
            </div>

            <div class="form-group">
              <label>13 - 17 h</label>
              <select name='shift_2' class="form-control" >
              <?php while ($row_staff_2 = mysqli_fetch_assoc($req_staff_2)) { ?>
                <option value="<?=$row_staff_2['full_name'] ?>" <?= $row['shift_2'] == $row_staff_2['full_name'] ? "selected" : ""; ?> ><?=$row_staff_2['full_name'] ?></option>
              <?php }; ?>
              </select>
            </div>

            <div class="form-group">
              <label>18 - 22 h</label>
              <select name='shift_3' class="form-control">
               <?php while ($row_staff_3 = mysqli_fetch_assoc($req_staff_3)) { ?>
                <option value="<?=$row_staff_3['full_name'] ?>" <?= $row['shift_3'] == $row_staff_3['full_name'] ? "selected" : ""; ?> ><?=$row_staff_3['full_name'] ?></option>
              <?php }; ?>
              </select>
            </div>

            <button name="submit" type="submit" class="btn btn-default">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php include('view/layouts/footer.php'); ?>