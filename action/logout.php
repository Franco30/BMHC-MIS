<?php
session_start();
?>
<?php
unset($_SESSION['user_id']);

echo '<meta http-equiv="refresh" content="2;url=../index">';
//echo '<i>Logging out. Please wait...</i>';
?>

<html>

<head>
    <title>BMHC-MIS</title>
    <link rel="icon" href="../assets/images/bmhc.png" type="image/x-icon" />
<!--
    <style>
        @-webkit-keyframes spin {
            0% {
                transform: rotate(0)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        @-moz-keyframes spin {
            0% {
                -moz-transform: rotate(0)
            }

            100% {
                -moz-transform: rotate(360deg)
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        .spinner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1003;
            background: #000000;
            overflow: hidden
        }

        .spinner div:first-child {
            display: block;
            position: relative;
            left: 50%;
            top: 50%;
            width: 150px;
            height: 150px;
            margin: -75px 0 0 -75px;
            border-radius: 50%;
            box-shadow: 0 3px 3px 0 #ff3d71;
            transform: translate3d(0, 0, 0);
            animation: spin 2s linear infinite
        }

        .spinner div:first-child:after,
        .spinner div:first-child:before {
            content: '';
            position: absolute;
            border-radius: 50%
        }

        .spinner div:first-child:before {
            top: 5px;
            left: 5px;
            right: 5px;
            bottom: 5px;
            box-shadow: 0 3px 3px 0 #ffaa00;
            -webkit-animation: spin 3s linear infinite;
            animation: spin 3s linear infinite
        }

        .spinner div:first-child:after {
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            box-shadow: 0 3px 3px 0 #0095ff;
            animation: spin 1.5s linear infinite
        }
    </style>
-->
    <style>

    .spinner {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1003;
    overflow: hidden
        }
        
    .logo {
        
    display: block;
    position: relative;
    left: 50%;
    top: 50%;
    width: 500px;
    margin: -162px 0 0 -257px;
        }
        
    </style>
</head>

<body>
    <div id="nb-global-spinner" class="spinner">
        <img src="../assets/images/BMHC-Logo.gif" class="logo"/>
        <div class="blob blob-0"></div>
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>
        <div class="blob blob-4"></div>
        <div class="blob blob-5"></div>
    </div>
<!--
    <div class="row">
    <div class="col-md-12">
        <img src="../assets/images/BMHC-Logo.gif" class="logo"/>
        </div>
    </div>
-->
</body>

</html>