<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Registration Form</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4 border border-info p-3">
                <?php
                    include'classes.php';
                    $student = new Student();
                    //insert
                    if(isset($_POST['btn'])){
                       echo $student->insert($_POST);
                    }
                    //active
                    if(isset($_GET['active'])){
                        $id=$_GET['active'];
                        $student->active($id);
                    }
                    //inactive
                    if(isset($_GET['inactive'])){
                        $id=$_GET['inactive'];
                        $student->inactive($id);
                    }
                    //delete
                    if(isset($_GET['delete'])){
                        $id=$_GET['delete'];
                        $student->delete($id);
                    }

                ?>
                <!-- form start  -->
                <form method="post">
                    <div class="form-group mt-2">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">Student First Name</label>
                                <input type="text" name="firstname" id="firstname" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="secondname">Student Last Name</label>
                                <input type="text" name="secondname" id="secondname"  class="form-control">
                            </div>
                        </div>
                        </div>
                        <div class="form-group mt-1">
                            <label for="date">Date Of Birth</label>
                            <input type="date" name="date" id="date" class="form-control">
                        </div>
                        <div class="form-group mt-1">
                            <label for="grade">Addmission Class</label>
                            <select name="grade" id="grade" class="form-control">
                                <option value="">--- Choose Option ---</option>
                                <option value="1">Class-1</option>
                                <option value="2">Class-2</option>
                                <option value="3">Class-3</option>
                                <option value="4">Class-4</option>
                                <option value="5">Class-5</option>
                                <option value="6">Class-6</option>
                                <option value="7">Class-7</option>
                                <option value="8">Class-8</option>
                                <option value="9">Class-9</option>
                            </select>
                        </div>
                        <div class="form-group mt-1">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="">--- Choose Option ---</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                        <div class="form-group mt-1">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" id="name" class="form-control">
                        </div>
                        <div class="form-group mt-1">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" class="form-control" style="resize: none;"></textarea>
                        </div>
                        <div class="form-group mt-1">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">--- Choose Option ---</option>
                                <option value="1">Active</option>
                                <option value="0">InActive</option>
                            </select>
                        </div>
                        <div class="form-group mt-1">
                            <button name="btn" class="btn btn-primary form-control">Submit</button>
                        </div>
                </form>
            </div>
            <!-- form end  -->
            <!-- insert table  -->
            <div class="col-md-8">
                <!-- table start -->
                <table class="table border border-primary">
                    <thead class="table-dark">
                        <tr>
                            <td>ID</td>
                            <td>FirstName</td>
                            <td>SecondName</td>
                            <td>DOB</td>
                            <td>Class</td>
                            <td>Gender</td>
                            <td>PhoneNo</td>
                            <td>Address</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $all=$student->show();
                            $sl=1;
                            // while start
                            while($data = $all->fetch_assoc()){
                                if($data["status"]==1){
                                    $status= '<a href="index.php?active='.$data["id"].'"class="btn btn-info btn-sm">Active</a>';
                                }else{
                                    $status='<a href="index.php?inactive='.$data["id"].'"class="btn btn-warning btn-sm">Inactive</a>';
                                }

                                echo'<tr>
                                <td>'.$sl.'</td>
                                <td>'.$data["firstname"].'</td>
                                <td>'.$data["secondname"].'</td>
                                <td>'.$data["date"].'</td>
                                <td>'.$data["grade"].'</td>
                                <td>'.$data["gender"].'</td>
                                <td>'.$data["phone"].'</td>
                                <td>'.$data["address"].'</td>
                                <td>'.$status.'</td>
                                <td>
                                <a href="edit.php?id='.$data["id"].'"class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="delete.php?id='.$data["id"].'"class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                <button data-bs-toggle="modal" data-bs-target="#delete"'.$data["id"].' "class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                
                                </td>
                                </tr>';
                                $sl++;?>
                                <!-- modal start  -->
                                <div class="modal fade" id="delete"<?php echo $data["id"] ?> tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation Message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Are You Sure To Delete This Item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <a href="index.php?delete= <?php echo $data["id"] ?>" type="button" class="btn btn-primary">Yes</a>
      </div>
    </div>
  </div>
<!-- </div> Modal end  -->


                           <?php
                        //    while end
                            }
?>
                    </tbody>
                   
                   
                </table>
                <!-- table end -->
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/all.min.js"></script>
</body>

</html>




                                <!-- Modal -->
                                <!--  -->
                            