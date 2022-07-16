<?php

    include_once('dbCon.php');

class User
{
    private $userID;
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

   
}

