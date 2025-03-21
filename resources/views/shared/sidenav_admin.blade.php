<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  {{-- <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" />
  <script src="lib/bootstrap/js/jquery.slim.min.js"></script>
  <script src="lib/bootstrap/js/poper.min.js"></script>
  <script type="text/javascript" src="lib/bootst    rap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap/js/jquery-3.5.1.min.js"></script> --}}
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Collapsible sidebar using Bootstrap 4</title>
  <base href="/expenseMVC/">
  <script type="text/javascript" src="lib/js/main.js"></script>
  <style type="text/css">
    body {
        margin: 0;
        padding: 0;
    }
    .vertical-nav {
      margin-top: 69px;
      min-width: 16rem;
      width: 16rem;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      background: #121212;
      /* Primary - Pure Black */
      box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
      transition: all 0.4s;
      color: #E0E0E0;
      /* Text - Light Gray */
      text-decoration: none;
    }
    .text-gray {
      color: #E0E0E0;
      /* Text - Light Gray */
      padding: 5px;
      font-size: 25px;
      padding-left: 10px;
    }
    ul li {
      line-height: 40px;
      border-bottom: 2px solid rgba(255, 255, 255, 0.1);
      padding-left: 1px;
      text-decoration: none;
    }
    ul li a {
      color: #E0E0E0;
      /* Text - Light Gray */
      text-decoration: none;
      transition: 0.3s;
    }
    x-dropdown-link{
      color: #E0E0E0;
      /* Text - Light Gray */
      text-decoration: none;
      transition: 0.3s;
    }
    .nav-item {
      background-color: #121212;
      /* Primary - Pure Black */
    }
    #sidebar.active {
      margin-left: -16rem;
    }
    ul li a:hover {
      font-size: 17px;
      padding-left: 10px;
      transition: 0.5s;
      color: black;
      background-color: white;
      border-radius: 5px;
    }
    x-dropdown-link:hover {
      font-size: 17px;
      padding-left: 10px;
      transition: 0.5s;
      color: black;
      background-color: white;
      border-radius: 5px;
    }
    @media (max-width: 768px) {
      #sidebar {
        margin-left: -17rem;
      }
      #sidebar.active {
        margin-left: 0;
      }
    }
    li {
      list-style: none;
    }
    .nav-link {
      display: flex;
      align-items: center;
      padding: 10px 15px;
      font-size: 18px;
      font-weight: 500;
      transition: background-color 0.3s, color 0.3s;
      color: #E0E0E0;
    }
    .nav-link:hover {
      background-color: white;
      color: black;
      /* Primary - Pure Black */
      box-shadow: 0 3px 5px rgb(162, 150, 150);
    }
    .nav-link i {
      margin-right: 10px;
      font-size: 20px;
    }
    .nav-item.active .nav-link {
      background-color: rgb(177, 177, 177);
      /* Secondary - Cyan */
      color: black !important;
      /* Primary - Pure Black */
    }
    .nav-item.active .nav-link i {
      color: #121212 !important;
    }
    
  </style>
</head>
<body>
  <!--vertical bar-->
  <div class="vertical-nav" id="sidebar">
    <ul class="nav flex-column bg-dark mb-0">
      <li class="nav-item">
        <a href=" {{url('admin/dashboard')}}" class="nav-link"> <i class="fas fa-tachometer-alt"></i> Dashboard</a>
      </li>
      <li class="nav-item">
        <a href="{{url('admin/category')}}" class="nav-link"> <i class="fas fa-list-alt"></i> Category</a>
      </li>
      
      <li class="nav-item">
        <a href="{{url('admin/showCategory')}}" class="nav-link"><i class="fas fa-eye"></i> Show Category</a>
      </li>
      <li class="nav-item">
        <a href="{{ url('admin/members') }}" class="nav-link"><i class="fas fa-user-alt"></i>Member</a>
      </li>
      <li class="nav-item">
       
      </li>
      <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="nav-link">
          <i class="fas fa-sign-out-alt" ></i>
            {{ __('Log Out') }}
          </a>
        </form>
      </li>
    </ul>
  </div>
</body>
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    // Get current URL path
    let currentPath = window.location.pathname;
    // Select all sidebar links
    let navLinks = document.querySelectorAll(".nav-item a");
    navLinks.forEach(link => {
        let linkPath = new URL(link.href).pathname; // Get the path from href
        // Exact match check
        if (currentPath === linkPath) {
            link.parentElement.classList.add("active");
        }
    });
});
    </script>
  </script>
</html>