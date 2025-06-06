<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/img/logo-removebg-preview.png">
    <title>Profile</title>

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet"> --}}

    <style>
    
      
       
        .navbar {
            z-index: 1000;
            font-family: 'Arial, sans-serif'; 
        }

        /* Container Styling */
       

        /* Card Styling */
        .card {
           
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(255, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            font-family: 'Arial, sans-serif'; 
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 15px rgba(255, 0, 0, 0.3);
            font-family: 'Arial, sans-serif'; 
        }

        /* Ensure Cards are Same Height */
        .equal-height {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            font-family: 'Arial, sans-serif'; 
        }
       
        /* Button Styling */
        .btn-custom {
            background-color: #ff0000; 
            color: #fff; /* White text */
            font-weight: bold;
            border-radius: 5px;
            padding: 10px 15px;
            transition: 0.3s ease;
            font-family: 'Arial, sans-serif';
        }

        .btn-custom:hover {
            background-color: black;
            color: white;
            border: 1px solid red;
            font-family: 'Arial, sans-serif';
        }
        
    </style>
</head>
<body>

    
    @auth
        @if (Auth::user()->is_Admin == 'Yes')
            @include('shared.sidenav_admin');
        @else
            @include('shared.sidenav');
        @endif
    @endauth

    @include('shared.header');
    
    <x-app-layout>
    
          
                
                <div class="col-md-12">
                    <div class="card p-4 mb-4 shadow-lg equal-height">
                        <h4 class="mb-3">Update Profile Information</h4>
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card p-4 mb-4 shadow-lg equal-height">
                        <h4 class="mb-3">Change Password</h4>
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card p-4 mb-4 shadow-lg">
                        <h4 class="mb-3 text-danger">Delete Account</h4>
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
          
    </x-app-layout>

</body>
</html>