<?php
ob_start();
include('view/layouts/header.php');
require 'model/dbCon.php';

if (isset($_POST['submit'])) {
   $name=$_POST['name'];
   $year=$_POST['year'];
   $address=$_POST['address'];
   $phone=$_POST['phone'];
   $cmt=$_POST['cmt'];
   $gender=$_POST['gender'];
   $sql = "INSERT INTO `staffs`(full_name,year_of_birth,address,sex,phone,cmt) VALUES ('$name','$year','$address','$gender','$phone','$cmt')";
   if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header('location:staff.php');
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
                        <h1 class="page-header">Staff
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input class="form-control" name="name" required placeholder="Full Name" />
                            </div>
                               <div class="form-group">
                                <label>Year Of Birth</label>
                                <input class="form-control" name="year" required placeholder="1995" />
                            </div>
                               <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" name="address" required placeholder="Hanu" />
                     
                               <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" name="phone" required placeholder="Phone" />
                            </div>
                               <div class="form-group">
                                <label>Identity Card</label>
                                <input class="form-control" name="cmt"  required placeholder="Identity Card" />
                            </div>
                            </div>
                               <div class="form-group">
                                <label>Gender </label>
                                <br>
                                <input type="radio" name="gender" checked value="1"> Male
                                <input type="radio" name="gender" value="2"> Female<br>
                            </div>
                            <button name="submit" type="submit" class="btn btn-default">Save</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
<?php include('view/layouts/footer.php'); ?>