<?php
include_once('validations.php');
include_once('../Model/User.php');
$userObject = new User();

if(isset($_POST['testData']))
{
    if(isset($_POST['empLogEmailVal']) && isset($_POST['empLogPwdVal']))
    {
        $empEmail = htmlspecialchars($_POST['empLogEmailVal'],ENT_QUOTES);
        $empPwd = htmlspecialchars($_POST['empLogPwdVal'],ENT_QUOTES);

        $flag  = true;

        //employee first name validation
    if(!validateEmptyFiled($empEmail))
    {
        echo 'emailEmpty';
        $flag = false;
    }

    if(!validateEmptyFiled($empPwd))
    {
        echo 'pwdEmpty';
        $flag = false;
    }

    if($flag)
    {
        $empData = $userObject->getUserDatabyEmail($empEmail);

        if($empData)
        {
            $empStoredPwd = $empData['password']; //password form the DB

           //check whether the password is matching
           $pwdMatch = password_verify($empPwd,$empStoredPwd);

           if($pwdMatch)
           {
            echo 'user logged';

            $empId = $empData['id'];
            $_SESSION['empId'] = $empId;

           }else{
            echo 'password invalid';
           }
        }else{
            echo 'email invalid';
        }
    }

        



    }
}

