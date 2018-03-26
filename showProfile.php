<?php
require("includes/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <title>Shopping Cart | e-Commerce Portal</title>
    <link rel="stylesheet" href="css/clientStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/clientScript.js"></script>
</head>
<body>
    <?php require_once('includes/clientHeaderCart.php'); ?>
    <?php require_once('includes/clientHeaderMenu.php'); ?>
    <div class="container">
        <div class="profile-body" style="margin-top: 16px;">
            <div class="profile-left">
                <div class="profile-user">
                    <img id="userGender" class="profile-user-img" src="img/profile-img-male.png">
                    <div class="profile-user-right">
                        <div class="txt-hello">Hello,</div>
                        <div class="txt-name">Deepak Upadhyay</div>
                    </div>
                </div>
                <div class="profile-user-menu">
                    <div class="profile-user-menu-list">
                        <div class="profile-user-menu-main">
                            <i class="menu-icon fa fa-truck"></i><a href="#" id="myOrder">MY ORDERS</a>
                        </div>
                        <div class="profile-user-menu-main">
                            <i class="menu-icon fa fa-id-card"></i><a href="#" id="accountSettings">ACCOUNT SETTINGS</a>
                            <div class="profile-user-menu-sub">
                                <a class="menu-active" href="#" id="myInformation">Profile Information</a>
                            </div>
                            <div class="profile-user-menu-sub">
                                <a href="#" id="myAddresses">Manage Address</a>
                            </div>
                        </div>
                        <div class="profile-user-menu-main">
                            <i class="menu-icon fa fa-power-off"></i><a href="#" id="logout">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-right">
                <div id="personal-information">
                    <div class="profile-right-personal-info">
                        <div class="pro-header">Presonal Information
                            <span id="personalEdit" class="edit">Edit</span>
                            <span id="personalCancel" class="cancel">Cancel</span>
                        </div>
                        <form id="personalInfo" name="personal-info">
                            <div class="input-group">
                                    <input class="input-field" type="text" id="txtFirstName" name="txtFirstNm" value="Deepak" disabled>
                                    <span id="errFnm" class="err"></span>
                                    <label>First Name</label>
                            </div>
                            <div class="input-group">
                                    <input class="input-field" type="text" id="txtLastName" name="txtLastNm" value="Upadhyay" disabled>
                                    <span id="errLnm" class="err"></span>
                                    <label>Last Name</label>
                            </div>
                            <div class="input-group">
                                    <button class="profile-right-save-btn" id="personalInfoBtn" name="PersonalInfoBtn">Save</button>
                            </div>
                            <div class="clear"></div>
                            <div class="personal-info-lable">
                                    Your Gender
                            </div>
                            <div class="input-radio-container disabled-radio">
                                    <label for="Male" class="input-radio-lable">
                                        <input type="radio" class="input-radio-btn" name="gender" id="Male" value="M" checked="checked" disabled>
                                        <div class="input-radio-effect"></div>
                                        <div class="input-radio-text">
                                            <span>Male</span>
                                        </div>
                                    </label>
                                    <label for="Female" class="input-radio-lable">
                                        <input type="radio" class="input-radio-btn" name="gender" id="Female" value="F" disabled>
                                        <div class="input-radio-effect"></div>
                                        <div class="input-radio-text">
                                            <span>Female</span>
                                        </div>
                                    </label>
                            </div>
                            <div class="clear"></div>
                        </form>
                    </div>
                    <div class="profile-right-personal-info">
                        <div class="pro-header">Email Address
                            <span id="emailEdit" class="edit">Edit</span>
                            <span id="emailCancel" class="cancel">Cancel</span>
                            <span id="changePassword" class="change">Change Password</span>
                        </div>
                        <form id="emailAddress" name="email-address">
                            <div class="input-group">
                                <input class="input-field" type="text" id="txtEmail" name="txtEmailAdd" value="upadhyaydeepak698@gmail.com" disabled>
                                <span id="errEml" class="err"></span>
                                <label>Email Address</label>
                            </div>
                            <div class="input-group">
                                <button class="profile-right-save-btn" id="changeEmailBtn" name="ChangeEmailBtn">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="clear"></div>
                    <div class="profile-right-personal-info">
                        <div div class="pro-header">Change Password
                            <span id="changeCancel" class="cancel">Cancel</span>
                        </div>
                        <form id="changePassword" name="change-password">
                            <div class="input-group">
                                <input class="input-field" type="password" id="txtCurPass" name="txtCurPwd">
                                <span id="errCurPwd" class="err"></span>
                                <label>Current Password</label>
                            </div>
                            <div class="clear"></div>
                            <div class="input-group">
                                <input class="input-field" type="password" id="txtNewPass" name="txtNewPwd">
                                <span id="errNewPwd" class="err"></span>
                                <label>New Password</label>
                            </div>
                            <div class="input-group">
                                <input class="input-field" type="password" id="txtConfPass" name="txtConfPwd">
                                <span id="errConfPwd" class="err"></span>
                                <label>Confirm New Password</label>
                            </div>
                            <div class="input-group">
                                <button class="profile-right-save-btn" id="changePassBtn" name="ChangePassBtn">Update</button>
                            </div>
                        </form>
                    </div>
                    <div class="clear"></div>
                    <div class="profile-right-personal-info">
                        <div class="pro-header">Mobile Number
                            <span id="mobileEdit" class="edit">Edit</span>
                            <span id="mobileCancel" class="cancel">Cancel</span>
                        </div>
                        <form id="mobileNumber" name="mobile-number">
                            <div class="input-group">
                                <input class="input-field" type="text" id="txtMobNo" name="txtMobile" value="8000766085" disabled>
                                <span id="errMobNo" class="err"></span>
                                <label>Mobile Number</label>
                            </div>
                            <div class="input-group">
                                <button class="profile-right-save-btn" id="changeMobileBtn" name="ChangeMobileBtn">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="clear"></div>
                    <div class="deactive-account">Deactivate Account</div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="profile-right">
                <div id="manage-address">
                    <div class="profile-right-manage-address">
                        <div class="pro-header">Manage Addresses</div>
                        <div class="clear"></div>
                        <div class="clear"></div>
                        <div class="add-address">
                            <i class="fa fa-address-card"></i>&nbsp; ADD A NEW ADDRESS
                        </div>
                        <form name="address-form" id="addressFrom" method="post">
                            <div class="input-group">
                                <textarea class="input-field" id="txtAddress" name="txtAddress"></textarea>
                                <!-- <input class="input-field" type="text" id="txtCity" name="txtCity"> -->
                                <span id="errAddress" class="err"></span>
                                <label>Address</label>
                            </div>
                            <div class="clear"></div>
                            <div class="input-group">
                                <input class="input-field" type="text" id="txtCity" name="txtCity">
                                <span id="errCity" class="err"></span>
                                <label>City</label>
                            </div>
                            <div class="input-group">
                                <input class="input-field" type="text" id="txtZip" name="txtZip">
                                <span id="errZip" class="err"></span>
                                <label>Zip</label>
                            </div>
                            <div class="clear"></div>
                            <div class="input-group">
                                <input class="input-field" type="text" id="txtState" name="txtState">
                                <span id="errState" class="err"></span>
                                <label>State</label>
                            </div>
                            <div class="input-group">
                                <input class="input-field" type="text" id="txtCountry" name="txtCountry">
                                <span id="errCountry" class="err"></span>
                                <label>Country</label>
                            </div>
                            <div class="clear"></div>
                            <div class="personal-info-lable">
                                Address Type
                            </div>
                            <div class="input-radio-container">
                                    <label for="Billing" class="input-radio-lable">
                                        <input type="radio" class="input-radio-btn" name="addType" id="Billing" value="Bill">
                                        <div class="input-radio-effect"></div>
                                        <div class="input-radio-text">
                                            <span>Billing Address</span>
                                        </div>
                                    </label>
                                    <label for="Shipping" class="input-radio-lable">
                                        <input type="radio" class="input-radio-btn" name="addType" id="Shipping" value="Ship">
                                        <div class="input-radio-effect"></div>
                                        <div class="input-radio-text">
                                            <span>Shipping Address</span>
                                        </div>
                                    </label>
                            </div>
                            <div class="input-group">
                                <button class="profile-right-save-btn" id="addAddressBtn" name="AddAddressBtn">Save</button>
                            </div>
                            <div class="input-group">
                                <button class="profile-right-cancel-btn" id="cancelAddAddressBtn" name="CancelAddAddressBtn">Cancel</button>
                            </div>
                        </form>
                        <div class="clear"></div>
                        <div class="address-list">
                            <div class="address-list-item">
                                <div class="address-header">
                                    <span class="address-type">Default Address</span>
                                    <span>Shipping Address</span>
                                    <span>Billing Address</span>
                                    <i class="menu-icon-add fa fa-ellipsis-v"></i>
                                    <ul class="address-menu">
                                        <li class="address-menu-item">Edit</li>
                                        <li class="address-menu-item">Delete</li>
                                    </ul>
                                </div>
                                <div class="address-text">
                                    506, Arista Business Space, Sindhu Bhavan Marg, Pakvan Cross Road, Bodakdev, 
                                    <br>Ahmedabad, Gujarat, India - 380054
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('includes/clientFooter.php'); ?>
</body>
</html>