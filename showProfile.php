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
                            <div class="profile-user-menu-sub menu-active">
                                <a href="#" id="myInformation">Profile Information</a>
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
                            <span class="edit">Edit</span>
                            <span class="cancel">Cancel</span>
                        </div>
                        <form id="personalInfo" name="personal-info">
                                <div class="input-group">
                                    <input class="input-field" type="text" id="txtFirstName" name="txtFirstNm" value="Deepak" disabled>
                                    <span id="errEml" class="err"></span>
                                    <label>First Name</label>
                                </div>
                                <div class="input-group">
                                    <input class="input-field" type="text" id="txtLastName" name="txtLastNm" value="Upadhyay" disabled>
                                    <span id="errEml" class="err"></span>
                                    <label>Last Name</label>
                                </div>
                                <div class="input-group">
                                    <button class="profile-right-save-btn" id="personalInfoBtn" name="PersonalInfoBtn">Save</button>
                                </div>
                            <div class="personal-info-lable">
                                Your Gender
                            </div>
                            <div class="input-field">
                                <lable for="proMale">
                                    <div class="input-field-radio">
                                        <input type="radio" name="gender" id="proMale" value="M">
                                    </div>
                                    <div class="input-field-radio-txt">
                                        <h5>Male</h5>
                                    </div>
                                </lable>
                                <lable for="proFemale">
                                    <div class="input-field-radio">
                                        <input type="radio" name="gender" id="proFemale" value="F">
                                    </div>
                                    <div class="input-field-radio-txt">
                                        <h5>Female</h5>
                                    </div>
                                </lable>
                            </div>
                        </form>
                    </div>
                    <div class="profile-right-personal-info">
                        <div class="pro-header">Email Address
                            <span class="edit">Edit</span>
                            <span class="cancel">Cancel</span>
                            <span id="changePassword" class="change">Change Password</span>
                        </div>
                        <form id="emailAddress" name="email-address">
                            <div class="input-field">
                                <lable for="emailAdd">Email Address</lable>
                                <input type="text" id="emailAdd" name="EmailAdd">
                            </div>
                            <button class="profile-right-save-btn" id="changeEmailBtn" name="ChangeEmailBtn">Save</button>
                        </form>
                    </div>
                    <div class="profile-right-personal-info">
                        <div div class="pro-header">Change Password
                            <span class="cancel">Cancel</span>
                        </div>
                        <form id="changePassword" name="change-password">
                            <div class="input-field">
                                <lable for="curPassword">Current Password</lable>
                                <input type="password" id="curPassword" name="CurPassword">
                            </div>
                            <div class="input-field">
                                <lable for="newPassword">New Password</lable>
                                <input type="password" id="newPassword" name="NewPassword">
                            </div>
                            <div class="input-field">
                                <lable for="confPassword">Confirm New Password</lable>
                                <input type="password" id="confPassword" name="ConfPassword">
                            </div>
                            <button class="profile-right-save-btn" id="changePassBtn" name="ChangePassBtn">Change    Password</button>
                        </form>
                    </div>
                    <div class="profile-right-personal-info">
                        <div class="pro-header">Mobile Number
                            <span class="edit">Edit</span>
                            <span class="cancel">Cancel</span>
                        </div>
                        <form id="mobileNumber" name="mobile-number">
                            <div class="input-field">
                                <lable for="mobileNo">Mobile Number</lable>
                                <input type="text" id="mobileNo" name="MobileNo">
                            </div>
                            <button class="profile-right-save-btn" id="changeMobileBtn" name="ChangeMobileBtn">Save</button>
                        </form>
                    </div>
                </div>
                <div id="manage-address">
                    <div class="profile-right-manage-address">
                        <div class="pro-header">Manage Addresses</div>
                        <div class="add-address">
                            <i class="fa fa-address-card"></i> ADD A NEW ADDRESS
                        </div>
                        <div class="address-form">
                            <div class="input-field">
                                <lable for="address">Address</lable>
                                <textarea id="address" name="Address"></textarea>
                            </div>
                            <div class="input-field">
                                <lable for="city">City</lable>
                                <input type="text" id="city" name="City">
                            </div>
                            <div class="input-field">
                                <lable for="zip">Zip</lable>
                                <input type="text" id="zip" name="Zip">
                            </div>
                            <div class="input-field">
                                <lable for="state"></lable>State</lable>
                                <input type="text" id="state" name="State">
                            </div>
                            <div class="input-field">
                                <lable for="country"></lable>Country</lable>
                                <input type="text" id="country" name="Country">
                            </div>
                            <div class="personal-info-lable">
                                Address Type
                            </div>
                            <div class="input-field">
                                <lable for="addBilling">
                                    <div class="input-field-radio">
                                        <input type="radio" name="type" id="addBilling" value="Biling">
                                    </div>
                                    <div class="input-field-radio-txt">
                                        <h5>Billing</h5>
                                    </div>
                                </lable>
                                <lable for="addShipping">
                                    <div class="input-field-radio">
                                        <input type="radio" name="type" id="addShipping" value="Shipping">
                                    </div>
                                    <div class="input-field-radio-txt">
                                        <h5>Shipping</h5>
                                    </div>
                                </lable>
                            </div>
                            <button class="profile-right-save-btn" id="addAddressBtn" name="AddAddressBtn">Save</button>
                            <button class="profile-right-cancel-btn" id="changeMobileBtn" name="Cancel">Cancel</button>
                        </div>
                        <div class="address-list">
                            <div class="address-list-item">
                                <div class="address-header">
                                    <span>Billing Address</span>
                                    <i class="fa fa-ellipsis-v"></i>
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