<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <title>Admin Login Panel</title>
    <style>
        div.Login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px
        }
    </style>
</head>
<body class="bg-light" >
    <div class="Login-form text-center rounded bg-white shadow overflow-hidden">
        <form>
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
            <div class="p-4">
                <div class="mb-3">
                 <input name="admin_name" type="text" class="form-control shadow-none text-center" placeholder="Admin Panle">
                </div>
                <div class="mb-4">
                <input name="admin_pass" type="password" class="form-control shadow-none text-center" placeholder="password">
                </div>
                <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
            </div>
        </form>
    </div>
</body>
</html>