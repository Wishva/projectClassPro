<?php
include_once('validations.php');
include_once('../Model/User.php');
$userObject = new User();
//all employee registration related functions are here

/*
*user types
    * employee = 1
    * customer = 2
    * supplier  = 3
*/

if(isset($_POST['testData']))
{
   if(isset($_POST['empFirstNameVal']) && isset($_POST['emplaststNameVal']) && isset($_POST['empEmailVal']) && isset($_POST['empPhoneVal'])
   && isset($_POST['empNicVal']) && isset($_POST['empAddressVal']) )
   {
    $empFirstName = htmlspecialchars($_POST['empFirstNameVal'],ENT_QUOTES);
    $emplaststName = htmlspecialchars($_POST['emplaststNameVal'],ENT_QUOTES);
    $empEmail = htmlspecialchars($_POST['empEmailVal'],ENT_QUOTES);
    $empPhone = htmlspecialchars($_POST['empPhoneVal'],ENT_QUOTES);
    $empNic = htmlspecialchars($_POST['empNicVal'],ENT_QUOTES);
    $empAddress = htmlspecialchars($_POST['empAddressVal'],ENT_QUOTES);

    $flag  = true;

    //employee first name validation
    if(validateEmptyFiled($empFirstName))
    {
        if(!validateName($empFirstName))
        {
            echo 'fnameInvalid';
            $flag = false;
        }
    }else
    {
        echo 'fnameEmpty';
        $flag = false;
    }

    //employee last name validation
    if(validateEmptyFiled($emplaststName))
    {
        if(!validateName($emplaststName))
        {
            echo 'lnameInvalid';
            $flag = false;
        }
    }else
    {
        echo 'lnameEmpty';
        $flag = false;
    }

    //employee email validation 
    if(validateEmptyFiled($empEmail))
    {
        if(!validateEmail($empEmail))
        {
            echo 'emailInvalid';
            $flag = false;
        }
    }else
    {
        echo 'emailEmpty';
        $flag = false;
    }

    //employee phone number validation
    if(validateEmptyFiled($empPhone))
    {
        if(!validatePhone($empPhone))
        {
            echo 'phoneInvalid';
            $flag = false;
        }
    }else
    {
        echo 'phoneEmpty';
        $flag = false;
    }

      //employee NIC validation
      if(validateEmptyFiled($empNic))
      {
          if(!validateNIC($empNic))
          {
              echo 'nicInvalid';
              $flag = false;
          }
      }else
      {
          echo 'nicEmpty';
          $flag = false;
      }

     //employee address validation
     if(!validateEmptyFiled($empAddress))
     {
        echo 'addressEmpty';
        $flag = false;
     }

     if($flag)
     {
        $empStatus = 'active';
        $emptype = 1;
        $password = password_hash($empNic,PASSWORD_DEFAULT);
        $userObject->setData($empFirstName, $emplaststName, $empEmail, $empPhone, $empNic,  $password, $empAddress, $empStatus, $emptype);
        $saveResult = $userObject->saveUser();
        if($saveResult)
        {
            echo 'data stored';
        }else{
            echo 'data save error';
        }
     }








   }
}

