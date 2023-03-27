<?php
class Student
{

    // private $con = "";

    // public function __construct()
    // {
    //     $this->con = new mysqli('localhost', 'root', '', 'crud');
    // }

    // public function insert($allData)
    // {
    //     $name = $allData['name'];
    //     $reg = $allData['reg'];
    //     $email = $allData['email'];
    //     $phone = $allData['phone'];
    //     $status = $allData['status'];

    //     if ($name == '') {
    //         echo '<div class="alert alert-danger">Name is required</div>';
    //     } 
    //     else if($reg == ''){
    //         echo '<div class="alert alert-danger">Registration is required</div>';
    //     }
    //     else if($email == ''){
    //         echo '<div class="alert alert-danger">Email is required</div>';
    //     }
    //     else if($phone == ''){
    //         echo '<div class="alert alert-danger">Phone is required</div>';
    //     }
    //     else if($status == ''){
    //         echo '<div class="alert alert-danger">Status is required</div>';
    //     }
    //     else {
    //         $qry = $this->con->query("INSERT INTO tbl_student(name,reg,email,phone,status)VALUES
    //         ('$name','$reg','$email','$phone','$status')");

    //         if ($qry) {
    //             return "Data Submited";
    //         } else {
    //             return "something went wrong";
    //         }
    //     }
    // }
    //     public function show(){
            
    //         return $this->con->query('SELECT * FROM tbl_student');
            
    //     }
    //     public function delete(){
    //         $id = $_POST['delete'];
            
    //         return $this->con->query('DELETE FROM tbl_student WHERE id=$id');
            
    //     }
    private $con;

    public function __construct()
    {
        $this->con = new mysqli('localhost','root','','crud');
    }

    public function insert($allData){
        $name = $allData['name'];
        $reg = $allData['reg'];
        $email = $allData['email'];
        $phone = $allData['phone'];
        $status = $allData['status'];

        if($name == ''){
        return '<div class="alert alert-danger">Name Rquired</div>';
        }
        else if($reg == ''){
            return '<div class="alert alert-danger">Registration Rquired</div>';
        }
        else if($email == ''){
            return '<div class="alert alert-danger">Email Rquired</div>';
        }
        else if($phone == ''){
            return '<div class="alert alert-danger">Phone Rquired</div>';
        }
        else if($status == ''){
            return '<div class="alert alert-danger">Status Rquired</div>';
        }
        else{
            $qur=$this->con->query("INSERT INTO tbl_student(name,reg,email,phone,status)
        VALUES('$name','$reg','$email','$phone','$status')");
        if($qur){
            return '<div class="alert alert-success">Data Submited</div>';
        }
        else{
            return "Not Submited";
        }
        }
        
    }

    public function show(){
    return $this->con->query("SELECT * FROM tbl_student");
    
    }

}
