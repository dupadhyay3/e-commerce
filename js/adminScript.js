//function will check emial is valid or not
function isEmail(email) {
    var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regex.test(email);
}

//check value is number or not
function isNumber(n) {
    if (!isNaN(n)) { return true; } else { return false; }
}

//check value is string or not
function isString(n) {
    var strng = /^[a-zA-Z ]+$/g;
    if (strng.test(n) && !isNumber(n)) {
        return true;
    } else {
        return false;
    }
}

//password validation
function isPassword(pwd) {
    var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])/; /*First Check small, capital, number, special char*/
    return regex.test(pwd);
}

//blank validation
function isBlank(val) {
    if (val == "" && val.length == 0) return true;
    else return false;
}

//check value is null or not
function isNull(val) {
    if (val == "null") return true;
}

// Page Loading Event 
$(document).ready(function() {
    var msg = ["* Require Field", "* Only Digits Allowed", "* Only Characters & Space Allowed", "* Invalid Email. Ex.: abc@xyz.com", "* Invalid Password. Ex.: Abc@123, Character >= 6", "* Both Password is Not Matched"];

    //login btn click
    $('#logForm').submit(function() {
        //email validation
        if (!isBlank($('#txtLoginEml').val())) {
            if (!isEmail($('#txtLoginEml').val())) {
                $('#errEml').fadeIn(1000);
                $('#errEml').text(msg[3]);
                $('#txtLoginEml').addClass('box-input-field-error');
                $('#txtLoginEml').focus();
                event.preventDefault(); //use to prevent submiting form
            } else {
                $('#errEml').fadeOut(1000);
                $('#txtLoginEml').removeClass('box-input-field-error');
            }
        } else {
            event.preventDefault(); //use to prevent submiting form
            $('#errEml').fadeIn(1000);
            $('#errEml').text(msg[0]);
            // $('#txtLoginEml').focus();
            $('#txtLoginEml').addClass('box-input-field-error');
        }

        //password validation
        if (!isBlank($('#txtLoginPwd').val())) {
            if (!isPassword($('#txtLoginPwd').val()) && $('#txtLoginPwd').val.length < 6) {
                $('#errPwd').fadeIn(1000);
                $('#errPwd').text(msg[4]);
                $('#txtLoginPwd').focus();
                $('#txtLoginPwd').addClass('box-input-field-error');
                event.preventDefault(); //use to prevent submiting form
            } else {
                $('#errPwd').fadeOut(1000);
                $('#txtLoginPwd').removeClass('box-input-field-error');
            }
        } else {
            $('#errPwd').fadeIn(1000);
            $('#errPwd').text(msg[0]);
            //$('#txtLoginPwd').focus();
            $('#txtLoginPwd').addClass('box-input-field-error');
            event.preventDefault(); //use to prevent submiting form
        }

    });

    // Add Main Product Category
    $('#mainCatForm').submit(function() {
        if (!isBlank($('#txtProCatMain').val())) {

            //for Ajax Add Data into Database
            var main = $('#txtProCatMain').val();
            $.post("../includes/addMainProCat.php", {
                main1: main,
            }, function(data) {
                alert(data); //Get Data From the addMainPRoCat.php which data is echo in that page
                //$('#alertMain').after(data);
                $('#mainCatForm')[0].reset();
            });

            $('#errMain').fadeOut(1000);
            $('txtProCatMain').removeClass('box-input-field-error');
        } else {
            $('#errMain').fadeIn(1000);
            $('#errMain').text(msg[0]);
            //$('#txtLoginPwd').focus();
            $('#txtProCatMain').addClass('box-input-field-error');
            event.preventDefault(); //use to prevent submiting form
        }
    });

    // Add Sub Product Category
    $('#subCatForm').submit(function() {
        if (!isBlank($('#txtProCatSub').val()) && !isBlank($('#txtProCatMain1').val())) {
            // console.log(main.val());
            // console.log(sub.val());

            //for Ajax Add Data into Database
            var main = $('#txtProCatMain1').val();
            var sub = $('#txtProCatSub').val();
            $.post("../includes/addSubProCat.php", {
                main1: main,
                sub1: sub,
            }, function(data) {
                alert(data);
                $('#subCatForm')[0].reset();
            });

            $('#errMainSub').fadeOut(1000);
            $('txtProCatMain1').removeClass('box-input-field-error');
            $('#errSub').fadeOut(1000);
            $('txtProCatSub').removeClass('box-input-field-error');

        } else {
            $('#errSub').fadeIn(1000);
            $('#errSub').text(msg[0]);
            $('#errMainSub').fadeIn(1000);
            $('#errMainSub').text(msg[0]);
            $('#txtProCatSub').addClass('box-input-field-error');
            $('#txtProCatMain1').addClass('box-input-field-error');
            event.preventDefault(); //use to prevent submiting form
        }
    });
});