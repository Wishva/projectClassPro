<?php
include_once('validations.php');
//all employee registration related functions are here 

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

    //employee first name validation

    if(validateEmptyFiled($empFirstName))
    {
        if(!validateName($empFirstName))
        {
            echo 'fnameInvalid';
        }
    }else
    {
        echo 'fnameEmpty';
    }

    //employee last name validation

    if(validateEmptyFiled($emplaststName))
    {
        if(!validateName($emplaststName))
        {
            echo 'lnameInvalid';
        }
    }else
    {
        echo 'lnameEmpty';
    }








   }
}

