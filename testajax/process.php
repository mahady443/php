<?php

    $obj = new Student();
    $action = $_POST["action"];
    $obj->$action();
    class Student{
        private $con;

        public function __construct()
        {
            $this->con = new mysqli('localhost','root','','crud');
        }

        function insert (){
            $name = $_POST['name'];
            $reg = $_POST['reg'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $status = $_POST['status'];

            $qry = $this->con->query("INSERT INTO tbl_student(name,reg,email,phone,status)
                VALUES('$name','$reg','$email','$phone','$status')");

            if($qry){
                echo "DATA SUBMITED";
            }
            else{
                echo "DATA NOT SUBMITED";
            }
        
        }

        function show(){
            
            $qur = $this->con->query("SELECT * FROM tbl_student");
            $allData="";
            $sl = 1;
            while($data = $qur->fetch_assoc()){
                if($data["status"] == "1"){
                    $status = "<button class=' active btn btn-primary btn-sm'  value=".$data["id"].">Active</button>";
                }else{
                    $status = "<button class=' inactive btn btn-warning btn-sm' value=".$data["id"].">Inactive</button>";
                }
    
                // . mean concating in php
                $allData .= "<tr> 
                            <td>".$sl." </td> 
                            <td>".$data['name']." </td> 
                            <td>".$data['reg']." </td> 
                            <td>".$data['email']." </td> 
                            <td>".$data['phone']." </td>
                            <td>".$status." </td>
                            <td><button class='btn edit btn-info btn-sm' id='edit'value='".$data["id"]."' >Edit</button>
                                <button class='btn btn-danger btn-sm' id='delete' value='".$data["id"]."'>Delete</button>
                            </td>
                            </tr>";
                            $sl++;
                
            }
            
            echo $allData;
        }






    
    }

?>
