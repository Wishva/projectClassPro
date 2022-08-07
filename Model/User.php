<?php

include_once('dbCon.php');

class User
{
    private $userID;
    private $userFname;
    private $userLname;
    private $phoneNumber;
    private $nic;
    private $address;
    private $userPassword;
    private $userEmail;
    private $userType;
    private $userStatus;

    private $dbCon;

    public function __construct()
    {
        try {
            $this->dbCon = new mysqli(SERVER, USER, PASSWORD, DATABASE);
        } catch (Exception $e) {
            echo "Connection Failed " . $e->getMessage();
        }
    }

    //set variables 
    public function setData($userFname, $userLname, $userEmail, $phoneNumber, $nic,$password, $address, $userStatus, $userType)
    {
        $this->userFname = $this->dbCon->real_escape_string($userFname);
        $this->userLname = $this->dbCon->real_escape_string($userLname);
        $this->userEmail = $this->dbCon->real_escape_string($userEmail);
        $this->phoneNumber = $this->dbCon->real_escape_string($phoneNumber);
        $this->nic = $this->dbCon->real_escape_string($nic);
        $this->password = $this->dbCon->real_escape_string($password);
        $this->address = $this->dbCon->real_escape_string($address);
        $this->userStatus = $userStatus;
        $this->userType = $userType;
    }

    //send user data to the DB
    public function saveUser()
    {
        $sql = "INSERT INTO `user` (`firstname`, `lastname`, `email`, `phone`, `nic`,`password`, `address`, `status`, `usertype`) VALUES
        ( 
                '" . $this->userFname . "',
                '" . $this->userLname . "',
                '" . $this->userEmail . "',
                '" . $this->phoneNumber . "',
                '" . $this->nic . "',
                '" . $this->password . "',
                '" . $this->address . "',
                '" . $this->userStatus . "',
                '" . $this->userType . "'
        )";

        $runQuery = $this->dbCon->query($sql);
        if($runQuery)
        {
            return true;
        }else{
            return false;
        }
    }

    //get user data by email
    public function getUserDatabyEmail($userEmail)
    {
        $this->userEmail = $this->dbCon->real_escape_string($userEmail);

        $sql = "select `id`, `password`, `status`, `usertype` from `user` where email= '".$this->userEmail."'";

        $runQuery = $this->dbCon->query($sql);
        $numRows = $runQuery->num_rows;
        if($numRows)
        {
            $userData = $runQuery->fetch_assoc();
            return $userData;
        }else{
            return false;
        }

    }

}
