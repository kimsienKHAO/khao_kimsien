<?php
 namespace CodeCourse\Repository;
 class UserRepository
 {
     public $username;
     public $gender;
     public $province;
     public $email;
         public function get($username,$gender,$province,$email){    
            $this->username = $username;
            $this->gender = $gender;
            $this->provice = $province;
            $this->email = $email;
         }
 }

?>