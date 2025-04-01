<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="/img/logo-removebg-preview.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" />
    {{--
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/bootstrap/js/jquery-3.5.1.min.js"></script> --}}

    <title>header</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Andada Pro:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ramaraja:wght@400;700&display=swap" rel="stylesheet">
    <base href="/expenseMVC/">
    <link href="{{ asset('link/link.php') }}">

    <style type="text/css">
        body {
            color: #000;
            margin-top: 0;
<<<<<<< HEAD
            font-family: 'Arial, sans-serif';
            background-color: #fff0e2;
=======
            font-family: 'Arial, sans-serif'; 
            background: #E6C7A5;
>>>>>>> aa1d92fc7c0f0bb60efeb7f224dd78dac6bc28c5
        }

        /* @keyframes glow {
            0% { box-shadow: 0 0 10px #FFD7B5; }
            50% { box-shadow: 0 0 20px #E6C7A5; }
            100% { box-shadow: 0 0 10px #FFD7B5; }
        } */
        .sb-topnav {
            /* width: calc(100% - 16rem);
            margin-left: 16rem; */
            margin-top: -25px;
            transition: all 0.4s;
            color: #6B4226;
            background: #E6C7A5 !important;
            position: fixed;
            z-index: 1000;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            animation: glow 2s infinite alternate;
        }

        #content.active {
            width: 100%;
            margin: 0;
            position: fixed;
        }

        h2 {
            color: #6B4226;
            background: #E6C7A5 !important;
            font-weight: 700;
            font-size: 2rem;
            /* Adjust font size */
            padding: 10px 20px;
            /* Add some padding for spacing */
            text-align: center;
            /* Center the text */
            letter-spacing: 1px;
            /* Add some spacing between letters */
            transition: all 0.3s ease;
            /* Smooth transition on hover */
        }

        h2:hover {
            background: #D1A95D;
            /* Slightly darker background on hover */
            color: #4f311d;
            /* Change text color to white on hover */
            transform: translateY(-3px);
            /* Slight upward movement on hover */
        }

        button i:hover {
            color: #6B4226;
            background: #E6C7A5 !important;
        }

        .logo {
            border-radius: 5pc;
            background-color: #DBDBDB;
            width: 60px;
            height: 60px;
            margin-left: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 20px;
            }

            .navbar-bar img {
                height: 35px;
                width: 35px;
            }

            #content {
                width: 100%;
                margin: 0;
            }

            #content.active {
                margin-left: 16rem;
                width: calc(100% - 16rem);
            }

            button i {
                font-size: 20px;
            }
        }

        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
    </style>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark w-100 p-0" id="content"
        style="display: flex; position: fixed; justify-content: space-between; align-items: center;">
        <div class="navbar-brand" style="display: flex; justify-content: end; align-items: center;">
            <div class="logo m-2">
                <img src="/img/logo-removebg-preview.png" width="50px" height="50px" />
            </div>
            <h2>WalletWise</h2>
        </div>
        <div>
            <a href="{{ route('profile.edit') }}" class="nav-link">
                <i class="fas fa-user"></i>
                Profile
            </a>
        </div>
    </nav>
    {{--
    <script type="text/javascript" src="../../lib/js/main.js"></script> --}}
</body>

</html>