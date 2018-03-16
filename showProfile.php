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
    <!-- <style rel="stylesheet" type="text/css">
        ._1b9jby {
            margin: 0 auto;
            position: relative;
            padding: 14px 64px 0;
        }
        .row{
            width: 100%;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-flow: row wrap;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
        }
        ._2c2GON {
            width: 25%;
        }
        -yAF57 {
            padding: 12px;
            margin-bottom: 16px;
        }
        ._1GRhLX {
            background-color: #fff;
            border-radius: 2px;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .08);
        }
        ._1DGSPv {
            margin-bottom: 16px;
        }
        ._367yRc {
            padding: 16px;
            font-size: 12px;
        }
        ._5tT1ZC {
            width: 75%;
            padding-left: 16px;
        }
        .bfHz-X {
            min-height: 300px;
        }
        ._1JMKW3 {
            padding: 24px 32px 0;
        }
        l022CW {
            padding-bottom: 56px;
        }
        ._2aK_Hc {
        padding-bottom: 24px;
        }
        ._10it6k {
            font-size: 18px;
            font-weight: 500;
            padding-right: 24px;
        }
        ._1x4IU1 {
            font-size: 14px;
            font-weight: 500;
            color: #2874f0;
            cursor: pointer;
        }
        ._2kN0A- {
            padding-bottom: 2px;
        }
        ._3wj6q3 {
            width: 270px;
            padding-right: 12px;
        }
        .Th26Zc {
            position: relative;
            margin-bottom: 10px;
        }
        ._16qL6K:disabled {
            background-color: #fafafa;
            cursor: not-allowed;
        }
        ._2pf-sU {
            padding: 16px;
            color: #878787;
        }
        ._366U7Q {
            height: 50px;
        }
        ._16qL6K {
            width: 100%;
            font-size: 14px;
            border: 1px solid var(--color-grey-grade2);
            outline: none;
            border-radius: 2px;
            padding: 20px 16px 0 13px;
            box-shadow: none;
            -moz-appearance: textfield;
            &[type='number']: :-webkit-inner-spin-button, &[type='number']::-webkit-outer-spin-button { -webkit-appearance: none;
            margin: 0;
            } &: disabled { background-color: var(--color-grey-grade0);
            cursor: not-allowed;
            }: ;
        }
        ._366U7Q {
            height: 50px;
        }
        ._16qL6K {
            width: 100%;
            font-size: 14px;
            border: 1px solid #e0e0e0;
            outline: none;
            border-radius: 2px;
            padding: 20px 16px 0 13px;
            box-shadow: none;
            -moz-appearance: textfield;
        }
        .yt2AKW {
            padding: 12px 0;
        }
        ._2FAt1l {
            font-size: 16px;
        }
        ._1YWe2- {
            color: #878787;
            cursor: not-allowed;
        }
        ._2pmKiA {
            color: #878787 !important;
            cursor: not-allowed;
        }
        ._2tcMoY {
            border-bottom: none;
            display: inline-block;
            margin-right: 32px;
        }
        ._8J-bZE {
            cursor: pointer;
        }
        ._2haq-9 {
            visibility: hidden;
            position: absolute;
        }
        ._2haq-9:checked ~ ._6ATDKp {
            border-color: #2874f0;
        }
        ._1YWe2- ._6ATDKp {
            border-color: #c2c2c2;
            cursor: not-allowed;
        }
        ._2pmKiA > ._6ATDKp {
            border-color: #c2c2c2 !important;
            cursor: not-allowed;
        }
        ._2tcMoY ._6ATDKp {
            margin-top: 2px;
            margin-left: 0;
        }
        ._6ATDKp {
            display: inline-block;
            border: 2px solid #979797;
            border-top-color: rgb(151, 151, 151);
            border-right-color: rgb(151, 151, 151);
            border-bottom-color: rgb(151, 151, 151);
            border-left-color: rgb(151, 151, 151);
            border-radius: 100%;
            height: 16px;
            width: 16px;
            position: relative;
            vertical-align: top;
            margin-top: 3px;
            cursor: pointer;
        }
        ._2tcMoY ._2o59RR {
            margin-left: 12px;
            width: auto;
        }
        ._2o59RR {
            display: inline-block;
            margin-left: 18px;
            width: calc(100% - 34px);
        }
        ._2FAt1l {
            font-size: 16px;
        }
        ._2pmKiA {
            color: #878787 !important;
            cursor: not-allowed;
        }
        ._2tcMoY {
            border-bottom: none;
            display: inline-block;
            margin-right: 32px;
        }
        ._8J-bZE {
            cursor: pointer;
        }
        ._2haq-9 {
            visibility: hidden;
            position: absolute;
        }
        ._6ATDKp::before {
            content: '';
            border-radius: 100%;
            height: 8px;
            width: 8px;
            margin: auto;
            position: absolute;
            top: 2px;
            left: 2px;
        }
        element {
        }
        ._2pmKiA > ._6ATDKp {
            border-color: #c2c2c2 !important;
            cursor: not-allowed;
        }
        ._2tcMoY ._6ATDKp {
            margin-top: 2px;
            margin-left: 0;
        }
        ._6ATDKp {
            display: inline-block;
            border: 2px solid #979797;
            border-top-color: rgb(151, 151, 151);
            border-right-color: rgb(151, 151, 151);
            border-bottom-color: rgb(151, 151, 151);
            border-left-color: rgb(151, 151, 151);
            border-radius: 100%;
            height: 16px;
            width: 16px;
            position: relative;
            vertical-align: top;
            margin-top: 3px;
            cursor: pointer;
        }
    </style> -->
</head>
<body>
    <?php require_once('includes/clientHeaderCart.php'); ?>
    <?php require_once('includes/clientHeaderMenu.php'); ?>
    <div class="container">
    
        <div class="profile-body">
            <div class="profile-left">
                <div class="profile-user">
                    <div class="profile-user-left">
                        <img class="profile-user-img" src="img/profile-img-male.png">
                    </div>
                    <div class="profile-user-right">
                        <h6>Hello,</h6>
                        <h3>Deepak Upadhyay</h3>
                    </div>
                </div>
                <div class="profile-user-menu">
                    <div class="profile-user-menu-list">
                        <div class="profile-user-menu-main">
                            <i class="fa fa-archive"></i> &nbsp; MY ORDERS
                        </div>
                        <hr>
                        <div class="profile-user-menu-main">
                            <i class="fa fa-id-card"></i> &nbsp; ACCOUNT SETTINGS
                            <div class="profile-user-menu-sub menu-active">
                                Profile Information
                            </div>
                            <div class="profile-user-menu-sub">
                                Manage Address
                            </div>
                        </div>
                        <hr>
                        <div class="profile-user-menu-main">
                            <i class="fa fa-power-off"></i> &nbsp; Logout
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-right">
                <div id="personal-information">
                    <div class="profile-right-personal-info">
                        <h3>Presonal Information</h3>
                        <span class="edit">Edit</span>
                        <span class="cancel">Cancel</span>
                        <form id="personalInfo" name="personal-info">
                            <div class="personal-info-inpu-text">
                                <lable for="proFirstName">First Name</lable>
                                <input type="text" id="proFirstName" name="ProFirstNm">
                            </div>
                            <div class="personal-info-input-text">
                                <lable for="proLastName">Last Name</lable>
                                <input type="text" id="proLastName" name="ProLastNm">
                            </div>
                            <button class="profile-right-save-btn" id="personalInfoBtn" name="PersonalInfoBtn">Save</button>
                            <div class="personal-info-lable">
                                You Gender
                            </div>
                            <div class="personal-info-input-text">
                                <lable for="proMale">
                                    <div class="personal-radio-btn">
                                        <input type="radio" name="gender" id="proMale" value="M">
                                    </div>
                                    <div class="personal-radio-txt">
                                        <h5>Male</h5>
                                    </div>
                                </lable>
                                <lable for="proFemale">
                                    <div class="personal-radio-btn">
                                        <input type="radio" name="gender" id="proFemale" value="F">
                                    </div>
                                    <div class="personal-radio-txt">
                                        <h5>Female</h5>
                                    </div>
                                </lable>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <div class="_1b9jby row">
            <div class="_2c2GON">
                <div>
                    <div class="_1GRhLX -yAF57 row">
                        <img class="fUkK-z" src="//img1a.flixcart.com/www/linchpin/fk-cp-zion/img/profile-pic-male_2fd3e8.svg" width="50px" height="50px">
                        <div class="M6fKa7">
                            <div class="_3buEbR">
                                Hello
                            </div>
                            <div class="e1sGxS">Deepak Upadhyay</div>
                        </div>
                    </div>
                    <div class="_1GRhLX _1DGSPv">
                        <div>
                            <div class="_2ACZMj">
                                <div class="_3NNJZh row">
                                    <img class="_1xt1eX" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIxOCIgdmlld0JveD0iMCAwIDI0IDE4Ij48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC04LjY5NCAtMTEpIj48ZWxsaXBzZSBjeD0iMjAuNTU3IiBjeT0iMjAiIHJ4PSIyMC41NTciIHJ5PSIyMCIvPjxwYXRoIGZpbGw9IiMyODc0RjEiIGQ9Ik05IDExdjE3LjEwOGMwIC40OTMuNDEuODkyLjkxOC44OTJoNC45M3YtNS4yNTdoLTMuMDMzbDQuOTEyLTQuNzcgNC45NzIgNC44M2gtMy4wMzVWMjloMTIuNDE3Yy41MDcgMCAuOTE4LS40LjkxOC0uODkyVjExSDl6Ii8+PC9nPjwvc3ZnPg==">
                                    <a class="_2ZZi8V" href="/account/orders">MY ORDERS<span class="_16k-VF"><svg width="16" height="27" viewBox="0 0 16 27" xmlns="http://www.w3.org/2000/svg" class="_13rI_R"><path d="M16 23.207L6.11 13.161 16 3.093 12.955 0 0 13.161l12.955 13.161z" fill="#878787" class=""></path></svg></span></a>
                                </div>
                            </div>
                            <div class="_1zr6a1"></div>
                        </div>
                        <div>
                            <div class="_2ACZMj">
                                <div class="_3NNJZh row">
                                    <img class="_1xt1eX" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMiIgaGVpZ2h0PSIyMSIgdmlld0JveD0iMCAwIDIyIDIxIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC05LjY5NCAtMTApIj48cGF0aCBmaWxsPSIjMjg3NEYwIiBkPSJNMTQuMjc1IDIyLjcwNGMyLjI3Mi0uNDEyIDQuMzQ3LS42MTggNi4yMjUtLjYxOCAxLjg3OCAwIDMuOTUzLjIwNiA2LjIyNS42MThhNS4xNSA1LjE1IDAgMCAxIDQuMjMgNS4wNjhWMzFoLTIwLjkxdi0zLjIyOGE1LjE1IDUuMTUgMCAwIDEgNC4yMy01LjA2OHptMS4yNzQtNy43MjRjMC0yLjU4IDIuMTYzLTQuNjczIDQuODMyLTQuNjczIDIuNjY3IDAgNC44MyAyLjA5MiA0LjgzIDQuNjczIDAgMi41OC0yLjE2MyA0LjY3My00LjgzIDQuNjczLTIuNjcgMC00LjgzMy0yLjA5Mi00LjgzMy00LjY3M3oiLz48ZWxsaXBzZSBjeD0iMjAuNTU3IiBjeT0iMjAiIHJ4PSIyMC41NTciIHJ5PSIyMCIvPjwvZz48L3N2Zz4=">
                                    <div class="_3X41hQ">ACCOUNT SETTINGS</div>
                                </div>
                                <div>
                                    <a href="/account">
                                        <div class="NqIFxw HDbIt8">
                                            Profile Information
                                        </div>
                                    </a>
                                    <a href="/account/addresses">
                                        <div class="NqIFxw">
                                            Manage Addresses
                                        </div>
                                    </a>
                                    <a href="/account/subscriptions">
                                        <div class="NqIFxw">
                                            Notification Preferences
                                        </div>
                                    </a>
                                    <a href="/account/pancard">
                                        <div class="NqIFxw">
                                            PAN Card Information
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="_1zr6a1"></div>
                        </div>
                        <div>
                            <div class="_2ACZMj">
                                <div class="_3NNJZh row">
                                    <img class="_1xt1eX" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMyIgaGVpZ2h0PSIyMiIgdmlld0JveD0iMCAwIDIzIDIyIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC05LjY5NCAtOSkiPjxlbGxpcHNlIGN4PSIyMC41NTciIGN5PSIyMCIgcng9IjIwLjU1NyIgcnk9IjIwIi8+PHBhdGggZD0iTTcgNmgyOHYyOEg3eiIvPjxwYXRoIGZpbGw9IiMyODc0RjAiIGZpbGwtcnVsZT0ibm9uemVybyIgZD0iTTMxLjUgMjd2MS4xNjdhMi4zNCAyLjM0IDAgMCAxLTIuMzMzIDIuMzMzSDEyLjgzM2EyLjMzMyAyLjMzMyAwIDAgMS0yLjMzMy0yLjMzM1YxMS44MzNBMi4zMzMgMi4zMzMgMCAwIDEgMTIuODMzIDkuNWgxNi4zMzRhMi4zNCAyLjM0IDAgMCAxIDIuMzMzIDIuMzMzVjEzSDIxYTIuMzMzIDIuMzMzIDAgMCAwLTIuMzMzIDIuMzMzdjkuMzM0QTIuMzMzIDIuMzMzIDAgMCAwIDIxIDI3aDEwLjV6TTIxIDI0LjY2N2gxMS42Njd2LTkuMzM0SDIxdjkuMzM0em00LjY2Ny0yLjkxN2MtLjk3IDAtMS43NS0uNzgyLTEuNzUtMS43NXMuNzgtMS43NSAxLjc1LTEuNzVjLjk2OCAwIDEuNzUuNzgyIDEuNzUgMS43NXMtLjc4MiAxLjc1LTEuNzUgMS43NXoiLz48L2c+PC9zdmc+">
                                    <div class="_3X41hQ">PAYMENTS</div>
                                </div>
                                <div>
                                    <a href="/account/wallet">
                                        <div class="NqIFxw">
                                            PhonePe Wallet
                                            <span class="_3qs2U5">
                                                ₹75
                                            </span>
                                        </div>
                                    </a>
                                    <a href="/account/giftcard">
                                        <div class="NqIFxw">
                                            Gift Cards
                                            <span class="_3qs2U5">
                                                ₹0
                                            </span>
                                        </div>
                                    </a>
                                    <a href="/account/buynowpaylater">
                                        <div class="NqIFxw">
                                            Pay Later
                                            <span class="_3qs2U5">
                                                ₹0/ ₹5,000
                                            </span>
                                        </div>
                                    </a>
                                    <a href="/account/carddetails">
                                        <div class="NqIFxw">
                                            Saved Cards
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="_1zr6a1"></div>
                        </div>
                        <div>
                            <div class="_2ACZMj">
                                <div class="_3NNJZh row">
                                    <img class="_1xt1eX" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMyIgaGVpZ2h0PSIxOSIgdmlld0JveD0iMCAwIDIzIDE5Ij48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiMyODc0RjAiIGZpbGwtcnVsZT0ibm9uemVybyIgZD0iTTIwLjUgMi43NWgtOUw5LjI1LjVIMi41QTIuMjQ3IDIuMjQ3IDAgMCAwIC4yNiAyLjc1bC0uMDEgMTMuNUEyLjI1NyAyLjI1NyAwIDAgMCAyLjUgMTguNWgxOGEyLjI1NyAyLjI1NyAwIDAgMCAyLjI1LTIuMjVWNWEyLjI1NyAyLjI1NyAwIDAgMC0yLjI1LTIuMjV6bS01LjYyNSAzLjM3NWEyLjI1NyAyLjI1NyAwIDAgMSAyLjI1IDIuMjUgMi4yNTcgMi4yNTcgMCAwIDEtMi4yNSAyLjI1IDIuMjU3IDIuMjU3IDAgMCAxLTIuMjUtMi4yNSAyLjI1NyAyLjI1NyAwIDAgMSAyLjI1LTIuMjV6bTQuNSA5aC05VjE0YzAtMS40OTYgMy4wMDQtMi4yNSA0LjUtMi4yNXM0LjUuNzU0IDQuNSAyLjI1djEuMTI1eiIvPjxwYXRoIGQ9Ik0tMi00aDI3djI3SC0yeiIvPjwvZz48L3N2Zz4=">
                                    <div class="_3X41hQ">MY STUFF</div>
                                </div>
                                <div>
                                    <a href="/account/rewards">
                                        <div class="NqIFxw">
                                            My Rewards
                                        </div>
                                    </a>
                                    <a href="/account/reviews">
                                        <div class="NqIFxw">
                                            My Reviews &amp; Ratings
                                        </div>
                                    </a>
                                    <a href="/notifications">
                                        <div class="NqIFxw">
                                            All Notifications
                                        </div>
                                    </a>
                                    <a href="/wishlist">
                                        <div class="NqIFxw">
                                            My Wishlist
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="_1zr6a1"></div>
                        </div>
                        <div class="_1zr6a1"></div>
                        <div class="_2ACZMj">
                            <div class="_3NNJZh row">
                                <svg width="24" height="24" class="" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#2874F0" stroke-width="0.3" stroke="#2874F0" d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C17.99 7.86 19 9.81 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-2.19 1.01-4.14 2.58-5.42L6.17 5.17C4.23 6.82 3 9.26 3 12c0 4.97 4.03 9 9 9s9-4.03 9-9c0-2.74-1.23-5.18-3.17-6.83z"></path>
                                </svg>
                                <a class="_2ZZi8V" href="#">Logout</a>
                            </div>
                        </div>
                    </div>
                    <div class="_1GRhLX _367yRc">
                        <div class="_3vwQsJ">Frequently Visited:</div>
                        <div class="row">
                            <span class="AXbOF3">Change Password</span>
                            <a class="AXbOF3" href="/account/orders">Track Order</a>
                            <a class="AXbOF3" href="/helpcentre">Help Center</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_5tT1ZC">
                <div class="bfHz-X">
                    <div class="_1GRhLX">
                        <div class="_1JMKW3">
                            <div class="l022CW">
                                <div class="_2aK_Hc">
                                    <span class="_10it6k">Personal Information</span>
                                    <span class="_1x4IU1">Edit</span>
                                </div>
                                <form>
                                    <div class="_2kN0A- row">
                                        <div class="_3wj6q3">
                                            <div class="Th26Zc">
                                                <input class="_16qL6K _2pf-sU _366U7Q" name="firstName" required="" disabled="" autocomplete="name" tabindex="1" value="Deepak" type="text">
                                            </div>
                                        </div>
                                        <div class="_3wj6q3">
                                            <div class="Th26Zc">
                                                <input class="_16qL6K _2pf-sU _366U7Q" name="lastName" disabled="" autocomplete="name" tabindex="2" value="Upadhyay" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="yt2AKW">
                                        Your Gender 
                                    </div>
                                    <div>
                                        <label for="Male" class="_8J-bZE _2FAt1l _1YWe2- _2pmKiA _2tcMoY">
                                            <input disabled="" class="_2haq-9" name="gender" readonly="" id="Male" value="on" type="radio">
                                            <div class="_6ATDKp"></div>
                                            <div class="_2o59RR">
                                                <span disabled="" tabindex="3">Male</span>
                                            </div>
                                        </label>
                                        <label for="Female" class="_8J-bZE _2FAt1l _2pmKiA _2tcMoY">
                                            <input disabled="" class="_2haq-9" name="gender" readonly="" id="Female" value="on" type="radio">
                                            <div class="_6ATDKp"></div>
                                            <div class="_2o59RR">
                                                <span disabled="" tabindex="4">Female</span>
                                            </div>
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <div>
                                    <div class="ubrbk7">
                                        <div class="_3oYEid">
                                            <span class="MJ2tO_">Email Address</span>
                                            <a class="_7qszba oZoRPi" href="#">Edit</a>
                                            <a class="oZoRPi" href="#">Change Password</a>
                                        </div>
                                        <form>
                                            <div class="_9eaqI8 row">
                                                <div class="_2P6fHI">
                                                    <div class="Th26Zc">
                                                        <input class="_16qL6K _3jqlFr _366U7Q" name="email" autocomplete="email" required="" disabled="" value="upadhyaydeepak698@gmail.com" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div>
                                    <div class="ubrbk7">
                                        <div class="_3oYEid">
                                            <span class="MJ2tO_">Mobile Number</span>
                                            <a class="_7qszba oZoRPi" href="#">Edit</a>
                                        </div>
                                        <form>
                                            <div class="_9eaqI8 row">
                                                <div class="_2P6fHI">
                                                    <div class="Th26Zc">
                                                        <input class="_16qL6K _3jqlFr _366U7Q" name="mobileNumber" autocomplete="tel" required="" disabled="" value="+918000766085" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="_1StnW- _2MZYr7">
                                <div class="_27biyA">FAQs</div>
                                <div>
                                    <h4 id="what-happens-when-i-update-my-email-address-or-mobile-number-">What happens when I update my email address (or mobile number)?</h4>
                                    <p>Your login email id (or mobile number) changes, likewise. You'll receive all your account related communication on your updated email address (or mobile number).</p>
                                    <h4 id="when-will-my-flipkart-account-be-updated-with-the-new-email-address-or-mobile-number-">When will my Flipkart account be updated with the new email address (or mobile number)?</h4>
                                    <p>It happens as soon as you confirm the verification code sent to your email (or mobile) and save the changes.</p>
                                    <h4 id="what-happens-to-my-existing-flipkart-account-when-i-update-my-email-address-or-mobile-number-">What happens to my existing Flipkart account when I update my email address (or mobile number)?</h4>
                                    <p>Updating your email address (or mobile number) doesn't invalidate your account. Your account remains fully functional. You'll continue seeing your Order history, saved information and personal details.</p>
                                    <h4 id="does-my-seller-account-get-affected-when-i-update-my-email-address-">Does my Seller account get affected when I update my email address?</h4>
                                    <p>Flipkart has a 'single sign-on' policy. Any changes will reflect in your Seller account also.</p>
                                </div>
                            </div>
                            <div class="_3uzK7o">Deactivate Account</div>
                        </div>
                        <div>
                            <img src="//img1a.flixcart.com/www/linchpin/fk-cp-zion/img/myProfileFooter_0cedbe.png" style="vertical-align: middle;" width="100%" height="auto">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    
    </div>
    <?php require_once('includes/clientFooter.php'); ?>
</body>
</html>