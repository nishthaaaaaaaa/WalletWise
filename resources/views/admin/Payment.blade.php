<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="/img/logo-removebg-preview.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <br>
    @include('shared.header')
    @include('shared.sidenav_admin')
    <style>
        body {
            margin: 0;
            background: #F3E5D8;
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        .forBg {
            background: #F3E5D8;
            padding: 50px;
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        .page-content {
            margin-left: 17rem;
            margin-right: 1rem;
            margin-top: 5%;
            width: calc(100% - 18rem);
            padding: 2rem;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        h5 {
            color: #6B4226;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1.5rem;
            border-radius: 10px;
            overflow: hidden;
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #fff;
            text-align: left;
            color: #6B4226;
        }

        th {
            background: #E6C7A5 !important;
            color: #6B4226;
        }

        .btn {
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: 0.3s;
            color: white;
        }

        .btn-danger {
            background: red;
        }
    </style>
</head>

<body>
    <div class="forBg">
        <div class="page-content" id="content">
            <h5>Payment Of User</h5>

            <form method="GET" action="{{ route('payment.filter') }}" class="form-inline mb-4">

                <label for="expenseDate" class="mr-2">Select Month:</label>
                <input type="month" class="form-control mr-2" id="expenseDate" name="date"
                    value="{{ request('date') }}">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-filter fa-xs"></i> Filter
                </button>
            </form>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Joining Date</th>
                        <th>Payment Amount</th>
                    </tr>
                </thead>

                @php
                    $data = $data ?? collect();
                @endphp

                @forelse($data as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ \Carbon\Carbon::parse($user->premium_started_at)->format('d M Y') }}</td>
                        <td>&#8377;{{ $user->premium_amount }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No premium users found for the selected month.</td>
                    </tr>
                @endforelse
                    @php
                $totalPremiumPayment = $data->sum('premium_amount');
                @endphp
                <tr>
                    <td colspan="3" style="text-align: left; font-weight: bold;">Total Premium Users:
                        {{ $data->count() }}
                    </td>
                    <td colspan="2" style="text-align: left; font-weight: bold;">Total Premium Payment:
                        &#8377; {{ $totalPremiumPayment }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>