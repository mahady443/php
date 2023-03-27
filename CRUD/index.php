<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATION</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
</head>

<body>

    <!-- <?php
    //with out oop

    // if (isset($_POST['btn1'])){

    //     $name=$_POST['name'];
    //     $reg=$_POST['reg'];
    //     $email=$_POST['email'];
    //     $phone=$_POST['phone'];
    //     $status=$_POST['status'];

    //     $con = new mysqli('localhost', 'root', '', 'crud');
    //     $stmt = "INSERT INTO tbl_student(name,reg,email,phone,status)VALUES
    //     ('$name','$reg','$email','$phone','$status')";
    //     $qur = $con->query($stmt);

    // }
    ?>



    <div class="container">
        <div class="row mt-5">
            <div class="col-md-5 border border-info p-3">
                <?php
                // include 'classes.php';
                // $student = new Student();
                // if (isset($_POST['btn1'])) {

                //     echo '<div class="alert alert-success">' . $student->insert($_POST) . '</div>';
                // }

                ?>


                <form action="" method="POST">
                    <div class="form-group my-3">
                        <label for="name">Student Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group my-3">
                        <label for="reg">Student Registration Number</label>
                        <input type="text" name="reg" id="reg" class="form-control">
                    </div>
                    <div class="form-group my-3">
                        <label for="eamil">Student Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group my-3">
                        <label for="name">Student Phone</label>
                        <input type="phone" name="phone" id="phone" class="form-control">
                    </div>
                    <div class="form-group my-3">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="">-------Select Option ----------</option>
                            <option value="1">Active</option>
                            <option value="2">InActive</option>
                        </select>
                    </div>
                    <div class="form-group my-3">
                        <button class="btn btn-info form-control" name="btn1">Save</button>
                    </div>
                </form>
            </div>
            <div class="col-md-7">
                <table class="table border border-primary">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Registration</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // $all = $student->show();
                        // while ($data = $all->fetch_assoc()) {
                        //     echo '<tr> 
                        //     <td>' . $data["id"] . '</td>
                        //     <td>' . $data["name"] . '</td>
                        //     <td>' . $data["reg"] . '</td>
                        //     <td>' . $data["email"] . '</td>
                        //     <td>' . $data["phone"] . '</td>
                        //     <td>' . $data["status"] . '</td>
                        //     <td>
                        //     <div class="d-flex ">
                        //     <button name="update" class="btn btn-primary mx-2" type="button">Update
                        //     </button>
                        //     <button name="delete" class="btn btn-danger mx-2" type="button">Delete</button>
                        //     </div>
                        //         </tr>';
                        // }

                        ?>

                            
                            
                    </tbody>
                </table>


            </div>

        </div>
    </div> -->



        <div class="container">
            <div class="row mt-5">
                <div class="col-md-5 border border-info p-3">
                    <?php
                        include'classes.php';
                        $student = new Student();

                        if(isset($_POST['btn'])){
                        echo$student->insert($_POST);
                        }
                    ?>
                    <form method="POST">
                        <div class="form-group my-3">
                            <label for="name">Student Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label for="reg">Student Registration</label>
                            <input type="text" name="reg" id="reg" class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label for="email">Student Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label for="phone">Student Phone</label>
                            <input type="phone" name="phone" id="phone" class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label for="status">Status</label>
                            <select name="status" id="" class="form-control">
                            <option value="">------Select ------</option>
                            <option value="1">Active</option>
                            <option value="2">InActive</option>
                            </select>

                            <button name="btn" class="form-control my-3 btn btn-info">Save</button>
                        </div>
                        
                    </form>
                </div>
                <div class="col-md-7">
                    <table class="table border border-primary">
                        <thead class="table-dark">
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Registration</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $all = $student->show();
                            while ($data = $all->fetch_assoc()) 
                            {
                            echo '<tr>
                            <td>'.$data["id"].'</td>
                            <td>'.$data["name"].'</td>
                            <td>'.$data["reg"].'</td>
                            <td>'.$data["email"].'</td>
                            <td>'.$data["phone"].'</td>
                            <td>'.$data["status"].'</td>
                            
                        </tr>';
                            }
                            
                            ?>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>



                        







    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/all.min.js"></script>
</body>

</html>