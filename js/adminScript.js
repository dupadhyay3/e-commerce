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
                $('#mainCatForm')[0].reset();
            });

            $('#errMain').fadeOut(1000);
            $('txtProCatMain').removeClass('box-input-field-error');
        } else {
            $('#errMain').fadeIn(1000);
            $('#errMain').text(msg[0]);
            $('#txtProCatMain').addClass('box-input-field-error');
            event.preventDefault(); //use to prevent submiting form
        }
    });

    // Add Sub Product Category
    $('#subCatForm').submit(function() {
        if (!isBlank($('#txtProCatSub').val()) && !isBlank($('#txtProCatMain1').val())) {

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

    // Add Product Details
    $('#proDetailForm').submit(function() {
        if (isBlank($('#txtProName').val())) {
            $('#errName').fadeIn(1000);
            $('#errName').text(msg[0]);
            $('#txtProName').addClass('box-imput-field-error');
            event.preventDefault(); //use to prevent submiting form
        } else {
            $('#errName').fadeOut(1000);
            $('#errName').text('');
            $('#txtProName').removeClass('box-imput-field-error');
        }

        if (isBlank($('#txtProSKU').val())) {
            $('#errSKU').fadeIn(1000);
            $('#errSKU').text(msg[0]);
            $('#txtProSKU').addClass('box-imput-field-error');
            event.preventDefault(); //use to prevent submiting form
        } else {
            $('#errSKU').fadeOut(1000);
            $('#errSKU').text('');
            $('#txtProSKU').removeClass('box-imput-field-error');
        }

        if (isBlank($('#txtProPrice').val())) {
            $('#errPrice').fadeIn(1000);
            $('#errPrice').text(msg[0]);
            $('#txtProPrice').addClass('box-imput-field-error');
            event.preventDefault(); //use to prevent submiting form
        } else {
            $('#errPrice').fadeOut(1000);
            $('#errPrice').text('');
            $('#txtProPrice').removeClass('box-imput-field-error');
        }

        if (isBlank($('#txtProCatMain2').val())) {
            $('#errProMain').fadeIn(1000);
            $('#errProMain').text(msg[0]);
            $('#txtProCatMain2').addClass('box-imput-field-error');
            event.preventDefault(); //use to prevent submiting form
        } else {
            $('#errProMain').fadeOut(1000);
            $('#errProMain').text('');
            $('#txtProCatMain2').removeClass('box-imput-field-error');
        }

        if (isBlank($('#txtProCatSub2').val())) {
            $('#errProSub').fadeIn(1000);
            $('#errProSub').text(msg[0]);
            $('#txtProCatSub2').addClass('box-imput-field-error');
            event.preventDefault(); //use to prevent submiting form
        } else {
            $('#errProSub').fadeOut(1000);
            $('#errProSub').text('');
            $('#txtProCatSub2').removeClass('box-imput-field-error');
        }

        if (isBlank($('#txtStock').val())) {
            $('#errProSub').fadeIn(1000);
            $('#errProSub').text(msg[0]);
            $('#txtProCatSub2').addClass('box-imput-field-error');
            event.preventDefault(); //use to prevent submiting form
        } else {
            $('#errProSub').fadeOut(1000);
            $('#errProSub').text('');
            $('#txtProCatSub2').removeClass('box-imput-field-error');
        }

        if (isBlank($('#FileImg').val())) {
            $('#errProImg').fadeIn(1000);
            $('#errProImg').text(msg[0]);
            $('#FileImg').addClass('box-imput-field-error');
            event.preventDefault(); //use to prevent submiting form
        } else {
            $('#errProImg').fadeOut(1000);
            $('#errProImg').text('');
            $('#FileImg').removeClass('box-imput-field-error');
        }

        //for Ajax Add Product Data into Database
        if (!isBlank($('#txtProName').val()) && !isBlank($('#txtProSKU').val()) && !isBlank($('#txtProPrice').val()) && !isBlank($('#txtProCatMain2').val()) && !isBlank($('#txtProCatSub2').val()) && !isBlank($('#txtStock').val()) && !isBlank($('#FileImg').val())) {

            $.ajax({
                type: 'POST',
                url: "../includes/addProduct.php",
                data: new FormData(this), //previous page data will be posted to ajax page
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#btnAddPro').attr('disabled', 'disabled');
                },
                success: function(data) {
                    alert(data);
                    $('#proDetailForm')[0].reset();
                    $('#btnAddPro').removeAttr('disabled');
                }
            });
        }
    });


    // Ajax For Main And Sub Category Relation in Add Product Details
    $('#txtProCatMain2').blur(function() {
        var mainId = $('#txtProCatMain2').val();
        if (mainId) {
            $.ajax({
                type: 'post',
                url: "../includes/getSubCategory.php",
                dataType: 'Json',
                data: { 'id': mainId },
                success: function(data) {
                    $('#opSubProCat').empty();
                    $.each(data, function(key, value) {
                        $('#opSubProCat').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        } else {
            $('#opSubProCat').empty();
        }
    });

    $('#proDetailEditForm').submit(function() {
        if (isBlank($('#editId').val())) {
            window.location.href = "../admin/productDetails.php";
        }

        if (isBlank($('#txtProName').val())) {
            $('#errName').fadeIn(1000);
            $('#errName').text(msg[0]);
            $('#txtProName').addClass('box-imput-field-error');
            event.preventDefault(); //use to prevent submiting form
        } else {
            $('#errName').fadeOut(1000);
            $('#errName').text('');
            $('#txtProName').removeClass('box-imput-field-error');
        }

        if (isBlank($('#txtProSKU').val())) {
            $('#errSKU').fadeIn(1000);
            $('#errSKU').text(msg[0]);
            $('#txtProSKU').addClass('box-imput-field-error');
            event.preventDefault(); //use to prevent submiting form
        } else {
            $('#errSKU').fadeOut(1000);
            $('#errSKU').text('');
            $('#txtProSKU').removeClass('box-imput-field-error');
        }

        if (isBlank($('#txtProPrice').val())) {
            $('#errPrice').fadeIn(1000);
            $('#errPrice').text(msg[0]);
            $('#txtProPrice').addClass('box-imput-field-error');
            event.preventDefault(); //use to prevent submiting form
        } else {
            $('#errPrice').fadeOut(1000);
            $('#errPrice').text('');
            $('#txtProPrice').removeClass('box-imput-field-error');
        }

        if (isBlank($('#txtProCatMain2').val())) {
            $('#errProMain').fadeIn(1000);
            $('#errProMain').text(msg[0]);
            $('#txtProCatMain2').addClass('box-imput-field-error');
            event.preventDefault(); //use to prevent submiting form
        } else {
            $('#errProMain').fadeOut(1000);
            $('#errProMain').text('');
            $('#txtProCatMain2').removeClass('box-imput-field-error');
        }

        if (isBlank($('#txtProCatSub2').val())) {
            $('#errProSub').fadeIn(1000);
            $('#errProSub').text(msg[0]);
            $('#txtProCatSub2').addClass('box-imput-field-error');
            event.preventDefault(); //use to prevent submiting form
        } else {
            $('#errProSub').fadeOut(1000);
            $('#errProSub').text('');
            $('#txtProCatSub2').removeClass('box-imput-field-error');
        }

        if (isBlank($('#txtStock').val())) {
            $('#errProSub').fadeIn(1000);
            $('#errProSub').text(msg[0]);
            $('#txtProCatSub2').addClass('box-imput-field-error');
            event.preventDefault(); //use to prevent submiting form
        } else {
            $('#errProSub').fadeOut(1000);
            $('#errProSub').text('');
            $('#txtProCatSub2').removeClass('box-imput-field-error');
        }


        //for Ajax Add Product Data into Database
        if (!isBlank($('#txtProName').val()) && !isBlank($('#txtProSKU').val()) && !isBlank($('#txtProPrice').val()) && !isBlank($('#txtProCatMain2').val()) && !isBlank($('#txtProCatSub2').val()) && !isBlank($('#txtStock').val()) && !isBlank($('#editId').val())) {

            $.ajax({
                type: 'POST',
                url: "../includes/editProduct.php",
                data: new FormData(this), //previous page data will be posted to ajax page
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#btnAddPro').attr('disabled', 'disabled');
                },
                success: function(data) {
                    alert(data);
                    $('#proDetailEditForm')[0].reset();
                    $('#btnAddPro').removeAttr('disabled');
                    setTimeout(function() {
                        window.location.href = "../admin/productDetails.php";
                    }, 0100);
                }
            });
        }
    });

    // Update Main Product Category
    $('#mainCatEditForm').submit(function() {
        if (isBlank($('#editId').val())) {
            window.location.href = "../admin/productCategory.php";
        }
        if (!isBlank($('#txtProCatMain').val()) && !isBlank($('#editId').val())) {

            //for Ajax Add Data into Database
            var main = $('#txtProCatMain').val();
            var eid = $('#editId').val();
            $.post("../includes/editMainProCat.php", {
                id: eid,
                main1: main,
            }, function(data) {
                alert(data); //Get Data From the addMainPRoCat.php which data is echo in that page
                //$('#alertMain').after(data);
                $('#mainCatEditForm')[0].reset();
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

    // Update Sub Product Category
    $('#subCatEditForm').submit(function() {
        if (isBlank($('#editId').val())) {
            window.location.href = "../admin/productCategory.php";
        }
        if (!isBlank($('#txtProCatSub').val()) && !isBlank($('#txtProCatMain1').val())) {
            //for Ajax Add Data into Database
            var eid = $('#editId').val();
            var main = $('#txtProCatMain1').val();
            var sub = $('#txtProCatSub').val();
            $.post("../includes/editSubProCat.php", {
                id: eid,
                main1: main,
                sub1: sub,
            }, function(data) {
                alert(data);
                $('#subCatEditForm')[0].reset();
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

function editDetails(id, php) {
    window.location.href = "../admin/" + php + "?edit=" + id;
}