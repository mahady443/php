<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Form</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4 p-4 border border-dark rounded">
                <div class="msg">
                    
                </div>
                <div class="form-group mt-3">
                    <label for="name">Student Name</label>
                    <input type="text" class="form-control name" id="name">
                </div>
                <div class="form-group mt-3">
                    <label for="reg">Student Registration</label>
                    <input type="text" class="form-control reg" id="reg">
                </div>
                <div class="form-group mt-3">
                    <label for="email">Student Email</label>
                    <input type="text" class="form-control email" id="email">
                </div>
                <div class="form-group mt-3">
                    <label for="phone">Student Phone</label>
                    <input type="text" class="form-control phone" id="phone">
                </div>
                <div class="form-group mt-3">
                    <label for="status">Student Status</label>
                    <select id="status" class="status form-control">
                        <option value="">------SELECT------</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <button class="btn  btn-info form-control save">Save Info</button>
                </div>
                <div class="form-group mt-3">
                    <button style="display: none;" class="btn update btn-info form-control ">Update Info</button>
                </div>

                
            </div>
            <div class="col-md-8">
                <table class="table border border-primary">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Registration</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="t-data">

                    </tbody>
                </table>
            </div>
            </div>
            </div>




    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="ajax.js"></script>
</body>
</html>