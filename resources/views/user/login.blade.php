<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Mero Fashion Hub</title>
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
                            <h2 class="ec-breadcrumb-title">Login</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Login</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec login page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Log In</h2>

                        <p class="sub-title mb-3">Best place to buy and sell digital products</p>
                    </div>
                </div>
                <div class="ec-login-wrapper">
                    <div class="ec-login-container">
                        <div class="ec-login-form">
                            <form action="#" method="post">
                                <span class="ec-login-wrap">
                                    <label>Email Address*</label>
                                    <input type="text" name="name" placeholder="Enter your email add..."
                                        required />
                                </span>
                                <span class="ec-login-wrap">
                                    <label>Password*</label>
                                    <input type="password" name="password" placeholder="Enter your password" required />
                                </span>
                                <span class="ec-login-wrap ec-login-fp">
                                    <label><a href="#">Forgot Password?</a></label>
                                </span>
                                <span class="ec-login-wrap ec-login-btn">
                                    <button class="btn btn-primary" type="submit">Login</button>
                                    <a href="register.html" class="btn btn-secondary">Register</a>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <style>

        .ec-login-wrapper {
            max-width: 530px;
            margin: 0 auto 0;
        }

        .ec-login-wrapper .ec-login-container {
            border: 1px solid #ededed;
            padding: 34px 38px 34px;
            text-align: left;
            background-color: #fff;
        }

        .ec-login-wrapper .ec-login-container .ec-login-form form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .ec-login-wrapper .ec-login-container .ec-login-form label {
            margin-bottom: 9px;
            color: #444444;
            font-size: 15px;
            font-weight: 500;
            letter-spacing: 0;
            line-height: 1;
        }

        .ec-login-wrapper .ec-login-container .ec-login-form input {
            background-color: transparent;
            border: 1px solid #eeeeee;
            color: #777;
            font-size: 14px;
            margin-bottom: 27px;
            padding: 0 15px;
            width: 100%;
            outline: none;
        }

        .ec-login-wrapper .ec-login-container .ec-login-form .ec-login-wrap+.ec-login-wrap input {
            margin-bottom: 15px;
        }

        .ec-login-wrapper .ec-login-container .ec-login-form .ec-login-fp label {
            margin-bottom: 0;
        }

        .ec-login-wrapper .ec-login-container .ec-login-form .ec-login-fp label a {
            color: #444444;
            font-size: 14px;
            font-weight: 400;
            letter-spacing: 0px;
        }

        .ec-login-wrapper .ec-login-container .ec-login-form .ec-login-btn {
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

        .ec-login-wrapper .ec-login-container .ec-login-form .btn {
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
            margin: 15px auto 0;
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
