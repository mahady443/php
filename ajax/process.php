<?php
    $obj = new Ajaxcrud();
    $action=$_POST["action"];
    $obj->$action();
    

    class Ajaxcrud{
        private $con="";

    public function __construct(){
        $this->con= new mysqli('localhost','root','','crud');
    
    }
        function insert(){
            
            $name = $_POST["name"];
            $reg = $_POST["reg"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $status = $_POST["status"];
    
            if($name == ''){
                echo "Name is Required";
            
            }else if($reg == ''){
                echo "Registration is Required";
            }
            else if($email == ''){
                echo "Email is Required";
            }
            else if($phone == ''){
                echo "Phone is Required";
            }
            else if($status == ''){
                echo "Status is Required";
            }
            else{
                $qur = $this->con->query("INSERT INTO tbl_student(name,reg,email,phone,status)
                VALUES('$name','$reg','$email','$phone','$status')");
    
                if($qur){
                    echo "Data Submited";
                }else{
                    echo "Data Not Submited";
                
                }
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
        
    
        function delete(){
            
            $id = $_POST["id"];
            $this->con->query("DELETE FROM tbl_student WHERE id ='$id'");
            echo "Item Deleted";
        
        }
    
        function active(){
            
            $id = $_POST['id'];
            $this->con->query("UPDATE tbl_student SET status='2' WHERE id = '$id'");
            
        
        }
        function inactive(){
            
            $id = $_POST['id'];
            $this->con->query("UPDATE tbl_student SET status='1' WHERE id = '$id'");
            
        
        }
    
        function searchData(){
            
            $id = $_POST["id"];
    
            $qur = $this->con->query("SELECT * FROM tbl_student WHERE id = '$id'");
    
            $data = $qur->fetch_assoc();
            echo $data = json_encode($data);
        
        }
        function update(){
            
            $id = $_POST["id"];
            $name = $_POST["name"];
            $reg = $_POST["reg"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $status = $_POST["status"];
            $this->con->query(" UPDATE tbl_student SET name='$name', reg='$reg',email='$email',
            phone='$phone',status='$status' WHERE id='$id'");
            echo "200";
        
        }
        

    
    
    
    }


?>