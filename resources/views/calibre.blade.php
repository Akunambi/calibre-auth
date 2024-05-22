<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calibre Server</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }
        .iframe-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        .logout-link {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 9999;
        }
        /* iframe {
            width: 100%;
            height: calc(100% - 40px); /* Adjust for logout link height */
            /* border: none;
            display: block; */
        } */
    </style>
</head>
<body>
    <div class="iframe-container">
        <div class="logout-link"><form id="logout-form" action="{{ route('logout') }}" method="POST" >
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    @csrf
</form></div>
        <iframe src="http://localhost:8080"></iframe>
    </div>
</body>
</html>
