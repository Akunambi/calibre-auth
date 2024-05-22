<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       /* Reset some default styles for better cross-browser consistency */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f2f5;
}

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 50px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.formHead h3 {
    margin-bottom: 20px;
    color: #333;
}

form {
    width: 100%;
    max-width: 300px;
    display: flex;
    flex-direction: column;
}

.nameGrp, .passGrp, .btnGrp {
    margin-bottom: 15px;
    display: flex;
    flex-direction: column;
}

input[type="text"], input[type="password"], input[type="email"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    margin-top: 5px;
}

input[type="submit"] {
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 10px;
}

input[type="button"]:hover {
    background-color: #0056b3;
}

input[type="checkbox"] {
    margin-right: 5px;
}

.btnGrp {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

    </style>
</head>
<body>
<div class="container">
        <div class="formHead">
            <h3>Login to dimiro library</h3>
        </div>
        <form method="POST" action="{{ route('login') }}">
        @csrf 
            <div class="nameGrp">
                <label for="username">Email</label>
                <input type="email" id="username" name="email" required>
            </div>
            <div class="passGrp">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="btnGrp">
                <div>
                    <input type="checkbox" id="rememberMe" name="rememberMe">
                    <label for="rememberMe">Remember Me</label>
                </div>
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>