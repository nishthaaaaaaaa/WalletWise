<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WalletWise Registration</title>
{{--     
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" />
<script src="lib/bootstrap/js/jquery.slim.min.js"></script>
<script src="lib/bootstrap/js/poper.min.js"></script>
<script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="lib/bootstrap/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> --}}
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(112, 112, 112);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 800px;
        }
        .form-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-header img {
            width: 80px;
            height: auto;
        }
        .form-header h4 {
            font-size: 24px;
            color: #333;
            margin-top: 10px;
        }
        .form-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .form-group {
            width: 48%;
            margin-bottom: 15px;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        label{
            
            color: #555;
        }
        .full-width {
            width: 100%;
        }
        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        .form-footer a {
            color: #555;
            text-decoration: none;
        }
        .btn {
            background: #333;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background: black;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-header">
            <img src="/img/logo-removebg-preview.png" alt="Logo">
            <h4>WalletWise</h4>
        </div>
        
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
            <h2 class="text-center">Register Yourself</h2>
            {{-- <hr><br> --}}
            <div class="form-container">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input id="age" type="number" name="age" min="15" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input id="contact" type="text" name="contact" required>
                </div>
                <div class="form-group">
                    <label for="plan_type">Plan Type</label>
                    <select id="plan_type" name="plan_type">
                        <option value="regular">Regular</option>
                        <option value="premium">Premium</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="limit">Limit</label>
                    <input id="limit" type="number" name="limit" step="0.01" min="0" required>
                </div>
                <div class="form-group full-width">
                    <label for="profile_picture">Profile Picture</label>
                    <input id="profile_picture" type="file" class="btn btn-primary" name="profile_picture" accept="image/*">
                </div>
            </div>
            
            <div class="form-footer">
                <a href="{{ route('login') }}">Already registered?</a>
                <button type="submit" class="btn">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
