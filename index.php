<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success!</title>
    <style type="text/css">
        body {
            background-color: #f5f5f5;
            margin-top: 8%;
            color: #5d5d5d;
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
            text-shadow: 0px 1px 1px rgba(255,255,255,0.75);
            text-align: center !important;
        }

        h1 {
            font-size: 2.45em;
            font-weight: 700;
            color: #5d5d5d;
            letter-spacing: -0.02em;
            margin-bottom: 30px;
            margin-top: 30px;
        }

        .container {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
        }

        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
        }

        .info {
            color:#5594cf;
            fill:#5594cf;
        }

        .error {
            color:#c92127;
            fill:#c92127;
        }

        .warning {
            color:#ffcc33;
            fill:#ffcc33;
        }

        .success {
            color:#5aba47;
            fill:#5aba47;
        }

        .icon-large {
            height: 132px;
            width: 132px;
        }

        .description-text {
            color: #707070;
            letter-spacing: -0.01em;
            font-size: 1.25em;
            line-height: 20px;
        }

        .footer {
            margin-top: 40px;
            font-size: 0.7em;
        }

        .delay-1s {
            -webkit-animation-delay: 1s;
            animation-delay: 1s;
        }
    
        @keyframes fadeIn {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

    </style>
</head>
<body>
<div class="container text-center">
    <div class="row">
        <div class="col">
            <div class="animated fadeIn">
                <i class="success">
                    <svg class="success icon-large fa-check-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                    </svg>
                </i>
            </div>
            <h1 class="animated fadeIn">Success!</h1>
            <div class="description-text animated fadeIn delay-1s">
                <p>Your new nginx web server is ready to use. <?php echo date("d/m/Y H:i"); ?></p>
            </div>
        </div>
    </div>
</div>
</body></html>