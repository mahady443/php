<!-- php Start -->
<?php

// class start
    class Student{
    private $con="";

    public function __construct(){
        $this->con= new mysqli('localhost','root','','schoolregistration');
    }
// insert start
    public function insert($allData){
        $firstname = $allData['firstname'];
        $secondname = $allData['secondname'];
        $date = $allData['date'];
        $grade = $allData['grade'];
        $gender = $allData['gender'];
        $phone = $allData['phone'];
        $address = $allData['address'];
        $status = $allData['status'];

        if($firstname==''){
            return '<div class="alert alert-danger ">First Name is Required</div>';
        }
        else if($secondname ==''){
            return '<div class="alert alert-danger ">Second Name is Required</div>';
        }
        else if($date ==''){
            return '<div class="alert alert-danger ">Date is Required</div>';
        }
        else if($grade ==''){
            return '<div class="alert alert-danger ">Class is Required</div>';
        }
        else if($gender ==''){
            return '<div class="alert alert-danger ">Gender is Required</div>';
        }
        else if($phone ==''){
            return '<div class="alert alert-danger ">Phone is Required</div>';
        }
        else if($address ==''){
            return '<div class="alert alert-danger ">Address is Required</div>';
        }
        else if($status ==''){
            return '<div class="alert alert-danger ">Status is Required</div>';
        }
        
        else{
            $qry = $this->con->query("INSERT INTO tbl_student(firstname,secondname, date, grade, gender, phone, address, status) VALUES 
        ('$firstname','$secondname','$date','$grade','$gender','$phone','$address','$status')");
        
        if($qry){
            return '<div class="alert alert-success">Data Submited Successfully</div>';
        }
        else{
            return '<div class="alert alert-danger ">Something Went Wrong</div>';
        }
        
        }
    
    }
    // insert end
    // show start
    public function show(){
         $qry=$this->con->query("SELECT * FROM tbl_student");
        return $qry;
    }
    // show end
    // active start
    public function active($id){
        $qry=$this->con->query("UPDATE tbl_student SET status ='0'WHERE id ='$id'");
        header("location:index.php");
    }
    // active end
    // inactive start
    public function inactive($id){
        $qry=$this->con->query("UPDATE tbl_student SET status ='1'WHERE id ='$id'");
        header("location:index.php");
    }
    // inactive end
    
    //search start
    public function findForUpdate($id){
        $qry=$this->con->query("SELECT * FROM tbl_student WHERE id ='$id'");
        return $qry;
    }
    // search end
    // update Start
    public function update($allData,$id){
        $firstname = $allData['firstname'];
        $secondname = $allData['secondname'];
        $date = $allData['date'];
        $grade = $allData['grade'];
        $gender = $allData['gender'];
        $phone = $allData['phone'];
        $address = $allData['address'];
        $status = $allData['status'];

        if($firstname==''){
            return '<div class="alert alert-danger ">First Name is Required</div>';
        }
        else if($secondname ==''){
            return '<div class="alert alert-danger ">Second Name is Required</div>';
        }
        else if($date ==''){
            return '<div class="alert alert-danger ">Date is Required</div>';
        }
        else if($grade ==''){
            return '<div class="alert alert-danger ">Class is Required</div>';
        }
        else if($gender ==''){
            return '<div class="alert alert-danger ">Gender is Required</div>';
        }
        else if($phone ==''){
            return '<div class="alert alert-danger ">Phone is Required</div>';
        }
        else if($address ==''){
            return '<div class="alert alert-danger ">Address is Required</div>';
        }
        else if($status ==''){
            return '<div class="alert alert-danger ">Status is Required</div>';
        }
        
        else{
            $qry = $this->con->query(" UPDATE  tbl_student SET firstname = '$firstname',secondname ='$secondname', date='$date', grade='$grade', gender='$gender', phone='$phone', address='$address', status='$status'Where id='$id'");

            }
        if($qry){
            header('location:index.php');
        }
        else{
            return '<div class="alert alert-danger ">Something Went Wrong</div>';
        }
        
        }
        // update end

        // delete start
        public function delete($id){
          $delete = $this->con->query("DELETE FROM tbl_student WHERE id='$id'"); 
            if($delete){
                header('location:index.php');
            }
        }
        // delete end
    
    }
    // class end

?>
<!-- php end -->
