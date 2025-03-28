<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="/img/logo-removebg-preview.png">
    <title>category</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/expenseMVC/">
    <br>
    @include('shared.header')
    @include('shared.sidenav_admin')

    <style type="text/css">
        body {
            min-height: 100vh;
            overflow-x: hidden;
            background-color: white;
            margin-top: 0%;
            font-family: 'Arial, sans-serif'; 
        }

        .page-content {
            margin-left: 17rem;
            margin-right: 1rem;
            transition: all 0.4s;
            background-color: white;
            margin-top: 5% !important;
            font-family: 'Arial, sans-serif'; 
        }

        .content.active {
            margin-left: 1rem;
            margin-right: 1rem;
            font-family: 'Arial, sans-serif'; 

        }

        #add1 input {
            width: 300px;
            height: 40px;
            font-family: 'Arial, sans-serif'; 
        }

        #add2 input {
            width: 300px;
            height: 40px;
            font-family: 'Arial, sans-serif'; 
        }

        .table tr {
            color: #000;
            background-color: white;

        }

        th,
        td {
            color: #000;
            background-color: white;
            font-family: 'Arial, sans-serif'; 
        }
        .admin-dashboard-title {
        font-size: 28px;
        font-weight: bold;
        color: white;
        background: linear-gradient(to right, #666, #222);
        /* Matching shade */
        padding: 12px 20px;
        border-radius: 8px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    }   
    </style>
</head>

<body>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" />
    <title>header</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/expenseMVC/">
    <link href="{{ asset('link/link.php') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

    <div class="page-content" id="content">
        <br>
        <section>
            <div class="row">
                <div class="container-fluid col-lg-12">
                    <div>
                        <h1 class="admin-dashboard-title">Add Category</h1>
                    </div>

                    <div class="card-body">
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    
                    
                        <form id="addIncomeForm" method="post" action="{{ route('admin.category.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="incomeName" class="form-label">Category of Expense/Income</label>
                                <input type="text" name="income_name" id="incomeName" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="type" class="form-label">Category Type</label>
                                <select name="income_type" id="type" class="form-control" required>
                                    <option value="">Select Type</option>
                                    <option value="income">Income</option>
                                    <option value="expense">Expense</option>
                                </select>
                            </div>
                            <button type="submit" name="insert" class="btn btn-dark">Add Category</button>
                        </form>
                    </div>

                </div>
                <br>
            </div>
    </div>
    </section>
    </div>

</body>

</html>