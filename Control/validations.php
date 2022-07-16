<?php

    // validating email format and database existence

    function validateEmail($custEmail)
    {
        if (!filter_var($custEmail, FILTER_VALIDATE_EMAIL)) {
            return false;
        } else {
            return true;
        }
    }

    // validating firstname and lastname

    function validateName($custName)
    {
        if (preg_match("/^([a-zA-Z' ]+)$/", $custName)) {
            return true;
        } else {
            return false;
        }
    }

    // validating contact number

    function validatePhone($custPhone)
    {
        if (
            preg_match("/^(07[1,2,5,6,7,8][0-9]\d\d\d\d\d\d)$/", $custPhone)
        ) {
            return true;
        } else {
            return false;
        }
    }

    // validating password strength

    function validatePassword($cusPassword)
    {
        if (
            preg_match("/(?=^.{6,255}$)((?=.*\d)(?=.*[A-Z])(?=.*[a-z])|
            (?=.*\d)(?=.*[^A-Za-z0-9])(?=.*[a-z])|(?=.*[^A-Za-z0-9])(?=.*[A-Z])
            (?=.*[a-z])|(?=.*\d)(?=.*[A-Z])(?=.*[^A-Za-z0-9]))^.*/", $cusPassword)
        ) {
            return true;
        } else {
            return false;
        }
    }

    //validate NIC number

    function validateNIC($cusNIC)
    {
        if (
            preg_match("/^(?:19|20)?\d{2}(?:[0-35-8]\d\d(?<!(?:000|500|36[7-9]|3[7-9]\d|86[7-9]|8[7-9]\d)))\d{4}(?:[vVxX])$/", $cusNIC)
        ) {
            return true;
        } else {
            return false;
        }
    }

    //validate address

    function validateAddress($cusAddress)
    {
        if (!empty($cusAddress) && $cusAddress != "" && strlen(trim($cusAddress)) > 0) {
            return true;
        } else {
            return false;
        }
    }

    function validateEmptyFiled($fieldNmae)
    {
        if (!empty($fieldNmae) && $fieldNmae != "" && strlen(trim($fieldNmae)) > 0) {
            return true;
        } else {
            return false;
        }
    }