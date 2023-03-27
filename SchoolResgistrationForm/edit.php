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
            <div class="col-md-4 offset-md-4 border border-info p-3">
                <?php
                    include'classes.php';
                    $student = new Student();
                    $id = $_GET["id"];
                    $obj= $student->findForUpdate($id);
                    $alldata = $obj->fetch_assoc();
                    if(isset($_POST['btn'])){
                       echo $student->update($_POST,$id);
                    }

                ?>

                <form method="post">
                    <div class="form-group mt-2">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">Student First Name</label>
                                <input type="text" value="<?php echo $alldata["firstname"]; ?>" name="firstname" id="firstname" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="secondname">Student Last Name</label>
                                <input type="text" value="<?php echo $alldata["secondname"]; ?>" name="secondname" id="secondname"  class="form-control">
                            </div>
                        </div>
                        </div>
                        <div class="form-group mt-1">
                            <label for="date">Date Of Birth</label>
                            <input type="date" value="<?php echo $alldata["date"]; ?>" name="date" id="date" class="form-control">
                        </div>
                        <div class="form-group mt-1">
                            <label for="grade">Addmission Class</label>
                            <select name="grade" value="<?php echo $alldata["grade"]; ?>" id="grade" class="form-control">
                                <option value="<?php echo $alldata["grade"]; ?>">
                                <?php if($alldata['grade']==1){
                                echo "Class-1";
                                } elseif($alldata['grade']==2){
                                    echo "Class-2";
                                } elseif($alldata['grade']==3){
                                    echo "Class-3";
                                } elseif($alldata['grade']==4){
                                    echo "Class-4";
                                } elseif($alldata['grade']==5){
                                    echo "Class-5";
                                } elseif($alldata['grade']==6){
                                    echo "Class-6";
                                } elseif($alldata['grade']==7){
                                    echo "Class-7";
                                } elseif($alldata['grade']==8){
                                    echo "Class-8";
                                } elseif($alldata['grade']==9){
                                    echo "Class-9";
                                }
                                ?>
                                </option>
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
                            <select name="gender"id="gender" class="form-control">
                                <option  value="<?php echo $alldata["gender"]; ?>" >
                                <?php
                                    if($alldata['gender']==1){
                                        echo "Male";
                                    }else{
                                    echo "Female";
                                    }
                                ?>
                            
                            </option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                        <div class="form-group mt-1">
                            <label for="phone">Phone Number</label>
                            <input type="text" value="<?php echo $alldata["phone"]; ?>" name="phone" id="name" class="form-control">
                        </div>
                        <div class="form-group mt-1">
                            <label for="address">Address</label>
                            <textarea name="address" 
                            value="" id="address" class="form-control" style="resize: none;"><?php echo $alldata["address"];?></textarea>
                        </div>
                        <div class="form-group mt-1">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="<?php echo $alldata["status"];?>" >
                                    <?php
                                        if($alldata['status']==1){
                                            echo "Active";
                                            }
                                            else{
                                                echo"InActive";
                                            }
                                    ?>
                            </option>
                                <option value="1">Active</option>
                                <option value="0">InActive</option>
                            </select>
                        </div>
                        <div class="form-group mt-1">
                            <button name="btn" class="btn btn-primary form-control">Update Data</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/all.min.js"></script>
</body>

</html>