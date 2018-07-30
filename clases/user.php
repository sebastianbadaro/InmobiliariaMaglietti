<?php

/**
 *
 */
class User
{
  private $id;
  private $firstName;
  private $lastName;
  private $email;
  private $password;
  private $rol;

  function __construct($id,$firstName,$lastName,$email,$password,$rol)
  {
    $this->id = $id;
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->email = $email;
    $this->password = $password;
    $this->rol = $rol;
  }

  public function save(){
    include("dbConnection.php");

  $a = password_hash(trim($this->password),PASSWORD_DEFAULT);
  $sql = "INSERT INTO InmobiliariaMaglietti.users (firstName, lastName, email, password, rol) VALUES ('{$this->firstName}', '{$this->lastName}', '{$this->email}','{$a}', '1')";
  echo $sql;
  $result = $db->query($sql);
  }

   public function validateInformation($confirmPassword){

      $errors=[];

      if($this->firstName == ""){
        $errors[]="First name can't be empty.";
      }
      if($this->lastName == ""){
        $errors[]="Last name can't be empty.";
      }

      if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
        $errors[]= "Invalid email format.";
      }else if(Users::emailExists($this->email)){
         $errors[]= "Email in use.";
      }


      if($this->password == "" || $confirmPassword ==""){
      $errors[]="Complete both passwords.";
      }elseif ($this->password !=$confirmPassword) {
      $errors[]="Both passwords must match.";
      }elseif (strlen($this->password)<8) {
       $errors[]="Password must have at least 8 characters.";
      }




     return $errors;


  }
    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of First Name
     *
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Get the value of Last Name
     *
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Get the value of Email
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of Password
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of Rol
     *
     * @return mixed
     */
    public function getRol()
    {
        return $this->rol;
    }

}


 ?>
