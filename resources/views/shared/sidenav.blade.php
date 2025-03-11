<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" />
  <script src="lib/bootstrap/js/jquery.slim.min.js"></script>
  <script src="lib/bootstrap/js/poper.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap/js/jquery-3.5.1.min.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Collapsible sidebar using Bootstrap 4</title>

  <base href="/expenseMVC/">
  
  <script type="text/javascript" src="lib/js/main.js"></script>
  <style type="text/css">
   body {
    background-color: #121212; /* Primary - Pure Black */
    color: #E0E0E0; /* Text - Light Gray */
}

.vertical-nav {
    min-width: 16rem;
    width: 16rem;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    background: #121212; /* Primary - Pure Black */
    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.4s;
    color: #E0E0E0; /* Text - Light Gray */
    text-decoration: none;
}

.text-gray {
    color: #E0E0E0; /* Text - Light Gray */
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
    color: #E0E0E0; /* Text - Light Gray */
    text-decoration: none;
    transition: 0.3s;
}

.nav-item {
    background-color: #121212; /* Primary - Pure Black */
}

#sidebar.active {
    margin-left: -16rem;
}

ul li a:hover {
    color: #BB86FC !important; 
    font-size: 22px;
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
    color: #E0E0E0; /* Text - Light Gray */
}

.nav-link:hover {
    background-color: #BB86FC; 
    color: #121212 !important; /* Primary - Pure Black */
}

.nav-link i {
    margin-right: 10px;
    font-size: 20px;
}

.nav-item.active .nav-link {
    background-color: #BB86FC; /* Secondary - Cyan */
    color: #121212 !important; /* Primary - Pure Black */
}

.nav-item.active .nav-link i {
    color: #121212 !important; /* Ensuring icons remain visible */
}

  </style>
</head>

<body>

  <!--vertical bar-->
  <div class="vertical-nav" id="sidebar">
    <ul class="nav flex-column bg-dark mb-0">
      <li class="nav-item">
        <a href="{{ url('dashboard') }}" class="nav-link"> <i class="fas fa-tachometer-alt"></i> Dashboard</a>
      </li>
      <li class="nav-item">
        <a href="{{ url('dashboard/category') }}" class="nav-link"> <i class="fas fa-list-alt"></i> Create category</a>
      </li>
      <li class="nav-item">
        <a href="{{ url('dashboard/income') }}" class="nav-link"> <i class="fas fa-dollar-sign"></i> Add income</a>
      </li>
      <li class="nav-item">
        <a href="{{ url('dashboard/expense') }}" class="nav-link"> <i class="fas fa-money-bill-wave"></i> Add expense</a>
      </li>
      <li class="nav-item">
        <a href="{{ url('dashboard/incomeReport') }}" class="nav-link"> <i class="fas fa-chart-line"></i> Income report</a>
      </li>
      <li class="nav-item">
        <a href="{{ url('dashboard/expenseReport') }}" class="nav-link"> <i class="fas fa-chart-pie"></i> Expense report</a>
      </li>
      <li class="nav-item">
        <a href="{{ url('dashboard/savingReport') }}" class="nav-link"> <i class="fas fa-piggy-bank"></i> Saving report</a>
      </li>
      <li class="nav-item">
        <a href="{{ url('dashboard/profile') }}" class="nav-link"> <i class="fas fa-user"></i> Profile</a>
      </li>
      <li class="nav-item">
        <a href="{{ url('dashboard') }}" class="nav-link"> <i class="fas fa-sign-out-alt"></i> Logout</a>
      </li>
    </ul>
  </div>
  <script type="text/javascript" src="lib/js/main.js"></script>
</body>

</html>