<?php
ob_start();
include('view/layouts/header.php');
require 'model/dbCon.php';
$sql = "SELECT * FROM Staffs";
$req = mysqli_query($conn, $sql);
$req1 = mysqli_query($conn, $sql);
$req2 = mysqli_query($conn, $sql);

if (isset($_POST['submit'])) {
  $date=$_POST['date'];
  $shift_1=$_POST['shift_1'];
  $shift_2=$_POST['shift_2'];
  $shift_3=$_POST['shift_3'];
  $check = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM Schedule WHERE date1='$date'"));
  if ($check) {
    return header('location:schedule.php');
  }
  $sql = "INSERT INTO `schedule`(date1,shift_1,shift_2,shift_3) VALUES ('$date','$shift_1','$shift_2','$shift_3')";
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
              <input class="form-control" name="date" required placeholder="yyyy-mm-dd" type="date" />
            </div>
            <div class="form-group">
              <label>8 - 11 h</label>
              <select name='shift_1' class="form-control">
              <?php while ($row = mysqli_fetch_assoc($req)) { ?>
                <option value="<?=$row['full_name'] ?>"><?=$row['full_name'] ?></option>
              <?php }; ?>
              </select>
            </div>

            <div class="form-group">
              <label>13 - 17 h</label>
              <select name='shift_2' class="form-control" >
            <?php while ($row1 = mysqli_fetch_assoc($req1)) { ?>
                <option value="<?=$row1['full_name'] ?>"><?=$row1['full_name'] ?></option>
              <?php }; ?>
              </select>
            </div>

            <div class="form-group">
              <label>18 - 22 h</label>
              <select name='shift_3' class="form-control">
            <?php while ($row2 = mysqli_fetch_assoc($req2)) { ?>
                <option value="<?=$row2['full_name'] ?>"><?=$row2['full_name'] ?></option>
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