<?php
class User_model extends CI_Model
{

     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     function create_user($username,$firstname,$lastname, $password, $email, $status)
     {
     $password = password_hash($password, PASSWORD_DEFAULT);

     //$sql = "INSERT INTO 'tbl_usrs' ('username','firstname','lastname', 'password', 'email', 'status') 
     //    VALUES ('{$username}','{$firstname}','{$lastname}', '{$password}', '{$email}', '{$status}');";
     $sql = "INSERT INTO `tbl_usrs` (`username`, `firstname`, `lastname`, `password`, `email`, `status`) VALUES ('$username','$firstname','$lastname', '$password', '$email', '$status');";

     $query = $this->db->query($sql);
     }
     
}     
?> 


