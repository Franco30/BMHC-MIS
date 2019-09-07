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
        <!-- <style type="text/css">
            #cssload-pgloading {}

            #cssload-pgloading:after {
                content: "";
                z-index: -1;
                position: absolute;
                top: 0; right: 0; bottom: 0; left: 0;
            }
            #cssload-pgloading .cssload-loadingwrap {position:absolute;top:45%;bottom:45%;left:25%;right:25%;}
            #cssload-pgloading .cssload-bokeh {
                font-size: 163px;
                width: 2em;
                height: 2em;
                position: relative;
                margin: 0 auto;
                list-style: none;
                padding:0;
                border-radius: 50%;
                -o-border-radius: 50%;
                -ms-border-radius: 50%;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
            }

            #cssload-pgloading .cssload-bokeh li {
                position: absolute;
                width: .3em;
                height: .3em;
                border-radius: 50%;
                -o-border-radius: 50%;
                -ms-border-radius: 50%;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
            }

            #cssload-pgloading .cssload-bokeh li:nth-child(1) {
                left: 50%;
                top: 0;
                margin: 0 0 0 -.2em;
                background: #0389e2;
                transform-origin: 50% 250%;
                -o-transform-origin: 50% 250%;
                -ms-transform-origin: 50% 250%;
                -webkit-transform-origin: 50% 250%;
                -moz-transform-origin: 50% 250%;
                animation: 
                    cssload-rota 1.3s linear infinite,
                    cssload-opa 4.22s ease-in-out infinite alternate;
                -o-animation: 
                    cssload-rota 1.3s linear infinite,
                    cssload-opa 4.22s ease-in-out infinite alternate;
                -ms-animation: 
                    cssload-rota 1.3s linear infinite,
                    cssload-opa 4.22s ease-in-out infinite alternate;
                -webkit-animation: 
                    cssload-rota 1.3s linear infinite,
                    cssload-opa 4.22s ease-in-out infinite alternate;
                -moz-animation: 
                    cssload-rota 1.3s linear infinite,
                    cssload-opa 4.22s ease-in-out infinite alternate;
            }

            #cssload-pgloading .cssload-bokeh li:nth-child(2) {
                top: 50%; 
                right: 0;
                margin: -.2em 0 0 0;
                background: rgb(255,0,60);
                transform-origin: -150% 50%;
                -o-transform-origin: -150% 50%;
                -ms-transform-origin: -150% 50%;
                -webkit-transform-origin: -150% 50%;
                -moz-transform-origin: -150% 50%;
                animation: 
                    cssload-rota 2.14s linear infinite,
                    cssload-opa 4.93s ease-in-out infinite alternate;
                -o-animation: 
                    cssload-rota 2.14s linear infinite,
                    cssload-opa 4.93s ease-in-out infinite alternate;
                -ms-animation: 
                    cssload-rota 2.14s linear infinite,
                    cssload-opa 4.93s ease-in-out infinite alternate;
                -webkit-animation: 
                    cssload-rota 2.14s linear infinite,
                    cssload-opa 4.93s ease-in-out infinite alternate;
                -moz-animation: 
                    cssload-rota 2.14s linear infinite,
                    cssload-opa 4.93s ease-in-out infinite alternate;
            }

            #cssload-pgloading .cssload-bokeh li:nth-child(3) {
                left: 50%; 
                bottom: 0;
                margin: 0 0 0 -.2em;
                background: rgb(250,190,40);
                transform-origin: 50% -150%;
                -o-transform-origin: 50% -150%;
                -ms-transform-origin: 50% -150%;
                -webkit-transform-origin: 50% -150%;
                -moz-transform-origin: 50% -150%;
                animation: 
                    cssload-rota 1.67s linear infinite,
                    cssload-opa 5.89s ease-in-out infinite alternate;
                -o-animation: 
                    cssload-rota 1.67s linear infinite,
                    cssload-opa 5.89s ease-in-out infinite alternate;
                -ms-animation: 
                    cssload-rota 1.67s linear infinite,
                    cssload-opa 5.89s ease-in-out infinite alternate;
                -webkit-animation: 
                    cssload-rota 1.67s linear infinite,
                    cssload-opa 5.89s ease-in-out infinite alternate;
                -moz-animation: 
                    cssload-rota 1.67s linear infinite,
                    cssload-opa 5.89s ease-in-out infinite alternate;
            }

            #cssload-pgloading .cssload-bokeh li:nth-child(4) {
                top: 50%; 
                left: 0;
                margin: -.2em 0 0 0;
                background: rgb(136,193,0);
                transform-origin: 250% 50%;
                -o-transform-origin: 250% 50%;
                -ms-transform-origin: 250% 50%;
                -webkit-transform-origin: 250% 50%;
                -moz-transform-origin: 250% 50%;
                animation: 
                    cssload-rota 1.98s linear infinite,
                    cssload-opa 6.04s ease-in-out infinite alternate;
                -o-animation: 
                    cssload-rota 1.98s linear infinite,
                    cssload-opa 6.04s ease-in-out infinite alternate;
                -ms-animation: 
                    cssload-rota 1.98s linear infinite,
                    cssload-opa 6.04s ease-in-out infinite alternate;
                -webkit-animation: 
                    cssload-rota 1.98s linear infinite,
                    cssload-opa 6.04s ease-in-out infinite alternate;
                -moz-animation: 
                    cssload-rota 1.98s linear infinite,
                    cssload-opa 6.04s ease-in-out infinite alternate;
            }







            @keyframes cssload-rota {
                from { }
                to { transform: rotate(360deg); }
            }

            @-o-keyframes cssload-rota {
                from { }
                to { -o-transform: rotate(360deg); }
            }

            @-ms-keyframes cssload-rota {
                from { }
                to { -ms-transform: rotate(360deg); }
            }

            @-webkit-keyframes cssload-rota {
                from { }
                to { -webkit-transform: rotate(360deg); }
            }

            @-moz-keyframes cssload-rota {
                from { }
                to { -moz-transform: rotate(360deg); }
            }

            @keyframes cssload-opa {
                0% { }
                12.0% { opacity: 0.80; }
                19.5% { opacity: 0.88; }
                37.2% { opacity: 0.64; }
                40.5% { opacity: 0.52; }
                52.7% { opacity: 0.69; }
                60.2% { opacity: 0.60; }
                66.6% { opacity: 0.52; }
                70.0% { opacity: 0.63; }
                79.9% { opacity: 0.60; }
                84.2% { opacity: 0.75; }
                91.0% { opacity: 0.87; }
            }

            @-o-keyframes cssload-opa {
                0% { }
                12.0% { opacity: 0.80; }
                19.5% { opacity: 0.88; }
                37.2% { opacity: 0.64; }
                40.5% { opacity: 0.52; }
                52.7% { opacity: 0.69; }
                60.2% { opacity: 0.60; }
                66.6% { opacity: 0.52; }
                70.0% { opacity: 0.63; }
                79.9% { opacity: 0.60; }
                84.2% { opacity: 0.75; }
                91.0% { opacity: 0.87; }
            }

            @-ms-keyframes cssload-opa {
                0% { }
                12.0% { opacity: 0.80; }
                19.5% { opacity: 0.88; }
                37.2% { opacity: 0.64; }
                40.5% { opacity: 0.52; }
                52.7% { opacity: 0.69; }
                60.2% { opacity: 0.60; }
                66.6% { opacity: 0.52; }
                70.0% { opacity: 0.63; }
                79.9% { opacity: 0.60; }
                84.2% { opacity: 0.75; }
                91.0% { opacity: 0.87; }
            }

            @-webkit-keyframes cssload-opa {
                0% { }
                12.0% { opacity: 0.80; }
                19.5% { opacity: 0.88; }
                37.2% { opacity: 0.64; }
                40.5% { opacity: 0.52; }
                52.7% { opacity: 0.69; }
                60.2% { opacity: 0.60; }
                66.6% { opacity: 0.52; }
                70.0% { opacity: 0.63; }
                79.9% { opacity: 0.60; }
                84.2% { opacity: 0.75; }
                91.0% { opacity: 0.87; }
            }

            @-moz-keyframes cssload-opa {
                0% { }
                12.0% { opacity: 0.80; }
                19.5% { opacity: 0.88; }
                37.2% { opacity: 0.64; }
                40.5% { opacity: 0.52; }
                52.7% { opacity: 0.69; }
                60.2% { opacity: 0.60; }
                66.6% { opacity: 0.52; }
                70.0% { opacity: 0.63; }
                79.9% { opacity: 0.60; }
                84.2% { opacity: 0.75; }
                91.0% { opacity: 0.87; }
            }
        </style> -->
        <style type="text/css">
        body {
	margin: 0;
	height: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
	background-color: black;
}

.loader {
    width: 20em;
    height: 20em;
    font-size: 10px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.loader .face {
    position: absolute;
    border-radius: 50%;
    border-style: solid;
    animation: animate 3s linear infinite;
}

.loader .face:nth-child(1) {
    width: 100%;
    height: 100%;
    color: gold;
    border-color: currentColor transparent transparent currentColor;
    border-width: 0.2em 0.2em 0em 0em;
    --deg: -45deg;
    animation-direction: normal;
}

.loader .face:nth-child(2) {
    width: 70%;
    height: 70%;
    color: lime;
    border-color: currentColor currentColor transparent transparent;
    border-width: 0.2em 0em 0em 0.2em;
    --deg: -135deg;
    animation-direction: reverse;
}

.loader .face .circle {
    position: absolute;
    width: 50%;
    height: 0.1em;
    top: 50%;
    left: 50%;
    background-color: transparent;
    transform: rotate(var(--deg));
    transform-origin: left;
}

.loader .face .circle::before {
    position: absolute;
    top: -0.5em;
    right: -0.5em;
    content: '';
    width: 1em;
    height: 1em;
    background-color: currentColor;
    border-radius: 50%;
    box-shadow: 0 0 2em,
                0 0 4em,
                0 0 6em,
                0 0 8em,
                0 0 10em,
                0 0 0 0.5em rgba(255, 255, 0, 0.1);
}

@keyframes animate {
    to {
        transform: rotate(1turn);
    }
}

        </style>
    </head>
    <body>
        <!-- <div id="cssload-pgloading">
            <div class="cssload-loadingwrap">
                <ul class="cssload-bokeh">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div> -->
        <div class="loader">
  <div class="face">
    <div class="circle"></div>
  </div>
  <div class="face">
    <div class="circle"></div>
  </div>
</div>
    </body>
</html>