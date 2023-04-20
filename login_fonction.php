<?php 
include "db_connection.php" ; //import connection to db 
function getId(){  
    global $conn ; // tp bring a variable such as function from somewhere else we use globale 

    $requet ="select * from users" ;
$resultat = mysqli_query($conn , $requet);

while($row = mysqli_fetch_assoc($resultat)){  //row list have all the elements of data base
                                            //key and values 
    $id =  $row['id'];      // we get the id of every line 
      echo " <option value ='$id'>$id</option> "; // print it in the options 

  }
} 
function create(){
    global $conn ;
    $name = $_POST['name'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if($name && $lastname && $email && $password){
        echo "info successfully added ";
    }else {
        die("enter your info ");
    }
    //create connection  on file db_connection.php
    //requet sql a executer avec les champs de form and the 
    // variable to put in 
    $requet = "INSERT INTO users (name , lastName , email , password )
    Values('$name' , '$lastname' ,'$email' ,'$password')";
    //insert into table 
    if(mysqli_query($conn ,$requet)){
        echo "your info are successfully added  ";
    } else {
        echo "error :" .$requet . mysqli_error($conn);
    }


}
function update(){
   
        global $conn ;
        $name = $_POST['name'];
        $lastname = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $_POST['id'];
    
    
        $query = "update users set " ;
        $query .= "name='$name' ," ;
        $query .= "lastname='$lastname' , " ;
        $query .= "email='$email' , " ;
        $query .= "password='$password'  " ;
        $query .= "where id = $id " ;
    
        $result =mysqli_query($conn , $query);
        if(!$result){
            die("failed" . mysqli_error($conn));
        }
    
       
}
function delete(){
    global $conn ;
    $id = $_POST['id'];

    $querry = "delete from users where id= $id " ; 
    $result = mysqli_query($conn , $querry);
    if(!$result){
        die("failed " . mysqli_error($conn));
    }
    
}
function getRecords() {
    global $conn;
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
  
    $records = array();
    while ($row = mysqli_fetch_assoc($result)) {
      $records[] = $row;
    }
  
    return $records;
  }
  
?>