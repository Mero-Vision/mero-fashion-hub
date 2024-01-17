<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Create Account</title>
    <meta name="keywords"
        content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
    <meta name="author" content="ashishmaraviya">
    @include('user.layout.header')



</head>

<body>
    <div id="ec-overlay">
        <div class="ec-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    @include('user.layout.nav')

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Register</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Register</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Start Register -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Register</h2>
                        
                        <p class="sub-title mb-3">Best place to buy and sell digital products</p>
                    </div>
                </div>
                <div class="ec-register-wrapper">
                    <div class="ec-register-container">
                        <div class="ec-register-form">
                            <form action="#" method="post">
                                <span class="ec-register-wrap ec-register-half">
                                    <label>First Name*</label>
                                    <input type="text" name="firstname" placeholder="Enter your first name"
                                        required />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Last Name*</label>
                                    <input type="text" name="lastname" placeholder="Enter your last name" required />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Email*</label>
                                    <input type="email" name="email" placeholder="Enter your email add..."
                                        required />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Phone Number*</label>
                                    <input type="text" name="phonenumber" placeholder="Enter your phone number"
                                        required />
                                </span>
                                <span class="ec-register-wrap">
                                    <label>Address</label>
                                    <input type="text" name="address" placeholder="Address Line 1" />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>City *</label>
                                    <span class="ec-rg-select-inner">
                                        <select name="ec_select_city" id="ec-select-city" class="ec-register-select">
                                            <option selected disabled>City</option>
                                            <option value="1">City 1</option>
                                            <option value="2">City 2</option>
                                            <option value="3">City 3</option>
                                            <option value="4">City 4</option>
                                            <option value="5">City 5</option>
                                        </select>
                                    </span>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Post Code</label>
                                    <input type="text" name="postalcode" placeholder="Post Code" />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Country *</label>
                                    <span class="ec-rg-select-inner">
                                        <select name="ec_select_country" id="ec-select-country"
                                            class="ec-register-select">
                                            <option selected disabled>Country</option>
                                            <option value="1">Country 1</option>
                                            <option value="2">Country 2</option>
                                            <option value="3">Country 3</option>
                                            <option value="4">Country 4</option>
                                            <option value="5">Country 5</option>
                                        </select>
                                    </span>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Region State</label>
                                    <span class="ec-rg-select-inner">
                                        <select name="ec_select_state" id="ec-select-state" class="ec-register-select">
                                            <option selected disabled>Region/State</option>
                                            <option value="1">Region/State 1</option>
                                            <option value="2">Region/State 2</option>
                                            <option value="3">Region/State 3</option>
                                            <option value="4">Region/State 4</option>
                                            <option value="5">Region/State 5</option>
                                        </select>
                                    </span>
                                </span>
                                <span class="ec-register-wrap ec-recaptcha">
                                    <span class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S"
                                        data-callback="verifyRecaptchaCallback"
                                        data-expired-callback="expiredRecaptchaCallback"></span>
                                    <input class="form-control d-none" data-recaptcha="true" required
                                        data-error="Please complete the Captcha">
                                    <span class="help-block with-errors"></span>
                                </span>
                                <span class="ec-register-wrap ec-register-btn">
                                    <button class="btn btn-primary" type="submit">Register</button>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Register -->






    <style>
        .ec-register-wrapper {
            max-width: 934px;
            margin: 0 auto 0;
        }

        .ec-register-wrapper .ec-register-container {
            border: 1px solid #ededed;
            padding: 30px;
            text-align: left;
            background-color: #fff;
        }

        .ec-register-wrapper .ec-register-container .ec-register-form .ec-register-wrap {
            width: 100%;
            padding: 0 15px;
        }

        .ec-register-wrapper .ec-register-container .ec-register-form .ec-register-wrap.ec-register-half {
            width: 50%;
        }

        .ec-register-wrapper .ec-register-container .ec-register-form form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            margin: 0 -15px;
        }

        .ec-register-wrapper .ec-register-container .ec-register-form label {
            margin-bottom: 9px;
            color: #444444;
            font-size: 15px;
            font-weight: 500;
            letter-spacing: 0;
            line-height: 1;
        }

        .ec-register-wrapper .ec-register-container .ec-register-form input {
            background-color: transparent;
            border: 1px solid #ededed;
            color: #777;
            font-size: 14px;
            margin-bottom: 26px;
            padding: 0 15px;
            width: 100%;
            outline: none;
        }

        .ec-register-wrapper .ec-register-container .ec-register-form input::-webkit-input-placeholder {
            color: #777 !important;
        }

        .ec-register-wrapper .ec-register-container .ec-register-form input::-moz-placeholder {
            color: #777 !important;
        }

        .ec-register-wrapper .ec-register-container .ec-register-form input:-ms-input-placeholder {
            color: #777 !important;
        }

        .ec-register-wrapper .ec-register-container .ec-register-form input::-ms-input-placeholder {
            color: #777 !important;
        }

        .ec-register-wrapper .ec-register-container .ec-register-form input::placeholder {
            color: #777 !important;
        }

        .ec-register-wrapper .ec-register-container .ec-register-form .ec-register-fp label {
            margin-bottom: 0;
        }

        .ec-register-wrapper .ec-register-container .ec-register-form .ec-register-fp label a {
            color: #444444;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 0px;
        }

        .ec-register-wrapper .ec-register-container .ec-register-form .ec-rg-select-inner {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            height: 50px;
            border-radius: 0;
            border: 1px solid #ededed;
            font-size: 14px;
            padding: 0;
            margin-bottom: 27px;
        }

        .ec-register-wrapper .ec-register-container .ec-register-form .ec-rg-select-inner select {
            padding: 0 15px;
        }

        .ec-register-wrapper .ec-register-container .ec-register-form .ec-rg-select-inner::after {
            content: "\f107";
            position: absolute;
            font-family: "EcIcons";
            top: 0;
            right: 0;
            padding: 0 10px;
            cursor: pointer;
            pointer-events: none;
            font-size: 24px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            height: 50px;
            line-height: 1;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            color: #777777;
        }

        .ec-register-wrapper .ec-register-container .ec-register-form .ec-register-wrap.ec-recaptcha {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .ec-register-wrapper .ec-register-container .ec-register-form .ec-register-btn {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .ec-register-wrapper .ec-register-container .ec-register-form .btn {
            cursor: pointer;
            font-size: 20px;
            line-height: 1;
            padding: 0 15px;
            text-transform: uppercase;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            outline: none;
            border-radius: 0px;
            width: 150px;
            margin: 26px auto 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
    </style>







    <!-- Chat Boat end -->
    @include('user.layout.footer')


</body>

</html>
