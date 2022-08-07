$(document).ready(function () {


    //---------------------------------------------------------user registration-------------------------------------------------------------------------------

    let empFirstName = $("#empFName");
    let emplastName = $("#empLName");
    let empEmail = $("#empEmail");
    let empPhone = $("#empPhone");
    let empNic = $("#empNIC");
    let empAddress = $("#empAddress");
    let empFNameError = $("#empFNameError");
    let empLNameError = $("#empLNameError");
    let empEmailError = $("#empEmailError");
    let empPhoneError = $("#empPhoneError");
    let empNicError = $("#empNicError");
    let empAddressError = $("#empAddrError");


    //function remove red border, remove error message, remove input data
    function clearEmpRegField(fieldName, fieldErrorName)
    {
        $('#'+fieldName).removeClass('errorField');
        $('#'+fieldErrorName).text('');
    }

    $("#empRegForm").submit(function (event) { 
        event.preventDefault();
        
    let empFirstNameVal = empFirstName.val();
    let emplaststNameVal =  emplastName.val();
    let empEmailVal =empEmail.val();
    let empPhoneVal = empPhone.val();
    let empNicVal = empNic.val();
    let empAddressVal =empAddress.val();

    $.ajax({
        method:"POST",
        url:"../Control/empRegControl.php",
        data:{testData:1,empFirstNameVal:empFirstNameVal,emplaststNameVal:emplaststNameVal, empEmailVal: empEmailVal,
            empPhoneVal:empPhoneVal,empNicVal:empNicVal,empAddressVal:empAddressVal},
        success:function (data) {
            alert(data);
            //validate first name
           if(data.includes("fnameEmpty"))
           {
            empFirstName.addClass('errorField');
            empFNameError.text('Please fill this field');
           }
           if(data.includes("fnameInvalid"))
           {
            empFirstName.addClass('errorField');
            empFNameError.text('Invalid First Name (A-Z/a-z only)');
           }

           //validate last name
           if(data.includes("lnameEmpty"))
           {
            emplastName.addClass('errorField');
            empLNameError.text('Please fill this field');
           }
           if(data.includes("lnameInvalid"))
           {
            emplastName.addClass('errorField');
            empLNameError.text('Invalid Last Name  (A-Z/a-z only)');
           }

           //validate email 
           if(data.includes("emailEmpty"))
           {
            empEmail.addClass('errorField');
            empEmailError.text('Please fill this field');
           }
           if(data.includes("emailInvalid"))
           {
            empEmail.addClass('errorField');
            empEmailError.text('Invalid Email');
           }

           //valida phone
           if(data.includes("phoneEmpty"))
           {
            empPhone.addClass('errorField');
            empPhoneError.text('Please fill this field');
           }
           if(data.includes("phoneInvalid"))
           {
            empPhone.addClass('errorField');
            empPhoneError.text('Invalid Phone number');
           }

           //validate NIC
           if(data.includes("nicEmpty"))
           {
            empNic.addClass('errorField');
            empNicError.text('Please fill this field');
           }
           if(data.includes("nicInvalid"))
           {
            empNic.addClass('errorField');
            empNicError.text('Invalid NIC');
           }

           //validte address 
           if(data.includes("addressEmpty"))
           {
            empAddress.addClass('errorField');
            empAddressError.text('Please fill this field');
           }

           if(data.includes('data stored'))
           {
            $.confirm({
                title: 'User data stored successfully!',
                content: 'Employee NIC will be the password',
                type: 'green',
                typeAnimated: true,
                buttons: {
                    tryAgain: {
                        text: 'Close',
                        btnClass: 'btn-green',
                        action: function(){
                            location.reload();
                        }
                    }
                }
            });
           }

        }
    });

    });

    $('#employeeRegFormReset').on('click',function(){
        clearEmpRegField("empFName", "empFNameError");
        clearEmpRegField("empLName", "empLNameError");
        clearEmpRegField("empEmail", "empEmailError");
        clearEmpRegField("empPhone", "empPhoneError");
        clearEmpRegField("empNIC", "empNicError");
        clearEmpRegField("empAddress", "empAddrError");
    });

});

//---------------------------------------------------------user login-------------------------------------------------------------------------------

let empLogEmail = $(".empLogEmail");
let empLogPwd = $(".empLogPwd");
let empLogEmailError = $("#empLogEmailError");
let empLogPwdError = $("#empLogPwdError");

$("#empLogForm").submit(function (event) { 
    event.preventDefault();

    let empLogEmailVal = empLogEmail.val();
    let empLogPwdVal =  empLogPwd.val();

    $.ajax({
        method:"POST",
        url:"../Control/empLogControl.php",
        data:{testData:1,empLogEmailVal:empLogEmailVal,empLogPwdVal:empLogPwdVal},
        success:function (data) {
            alert(data);
           if(data.includes('emailEmpty'))
           {
            empLogEmail.addClass('errorField');
            empLogEmailError.text('Please fill this field');
           }

           if(data.includes('pwdEmpty'))
           {
            empLogPwd.addClass('errorField');
            empLogPwdError.text('Please fill this field');
           }

           if(data.includes('email invalid'))
           {
            empLogEmail.addClass('errorField');
            empLogEmailError.text('Invalid Email');
           }

           if(data.includes('password invalid'))
           {
            empLogPwd.addClass('errorField');
            empLogPwdError.text('Invalid Password');
           }

           if(data.includes('user logged'))
           {
            window.location.replace("admin.php");
           }
        }
    });

   



    
});