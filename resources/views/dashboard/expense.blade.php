<!DOCTYPE html>
<html>
<head>
    <title>Add Expense</title>
    <base href="/expenseMVC/">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <style type="text/css">
        body {
            min-height: 100vh;
            overflow-x: hidden;
        }
        .page-content {
            margin-left: 17rem;
            margin-right: 1rem;
            transition: all 0.4s;
        }
        .content.active {
            margin-left: 1rem;
            margin-right: 1rem;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            loadExpense();
        });
    </script>
</head>
<body>
    @include('shared.sidenav');
    @include('shared.header');
    <div class="page-content" id="content">
        <div class="container-fluid shadow">
            <br>
            <header> 
                <h1 class="h3 display">Add Expense</h1>
            </header>
            <form class="mt-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="expensename">Name: </label>
                            <input type="text" class="form-control" name="ename" placeholder="Expense name" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="expenseamount">Amount:</label>
                            <input type="number" class="form-control" name="eamount" placeholder="Amount" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="expensedate">Date: </label>
                            <input type="date" class="form-control" name="edate" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="expensecategory">Category:</label>
                            <select class="form-control" name="ecategory">
                                <option value="">Select Category</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="comment">Description:</label>
                            <textarea class="form-control" rows="3" name="edescription" placeholder="Enter description"></textarea>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Insert</button>
                        </div>
                    </div>
                </div>                 
            </form>
        </div>
        <br>
        <section>
            <div class="container-fluid shadow">
                <br>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th colspan="6"><center><h5>Expense details</h5></center></th>
                        </tr>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>   
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Expense rows will be dynamically added here -->
                    </tbody>
                </table>
                <br>
            </div>
        </section>
    </div>
</body>
</html>
