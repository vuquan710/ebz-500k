<?php 
include 'view/layouts/header.php';
require 'model/dbCon.php';
$sql = "SELECT * FROM Staffs";
$req = mysqli_query($conn, $sql);
$id =1;
?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Staff
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Date Of Birth</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Identity Card</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while ($row = mysqli_fetch_assoc($req)) { ?>
                            <tr class="odd gradeX" align="center">
                                <td><?=$id++ ?></td>
                                <td><?= $row['full_name']?></td>
                                <td><?= $row['year_of_birth']?></td>
                                <td><?= $row['address']?></td>
                                <td><?= $row['sex'] == 1 ? 'Male' : 'Female'?></td>
                                <td><?= $row['phone']?></td>
                                <td><?= $row['cmt']?></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm (' Có muốn xóa k?')" href="deleteStaff.php?id=<?=$row['id']?>"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="editStaff.php?id=<?=$row['id']?>">Edit</a></td>
                            </tr>
                        <?php }; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
	        </div>
<?php 
include('view/layouts/footer.php');
?>
