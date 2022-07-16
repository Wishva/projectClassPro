$(document).ready(function () {

    //------------------user registration--------------------------------------------------------------------------------------

    let empFirstName = $("#empFName");
    let emplaststName = $("#empLName");
    let empEmail = $("#empEmail");
    let empPhone = $("#empPhone");
    let empNic = $("#empNIC");
    let empAddress = $("#empAddress");

    $("#empRegForm").submit(function (event) { 
        event.preventDefault();
        
    let empFirstNameVal = empFirstName.val();
    let emplaststNameVal = emplaststName.val();
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
        }
    });

     });









});