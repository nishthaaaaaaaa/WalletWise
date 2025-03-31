<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="/img/logo-removebg-preview.png">
    <title>Add Income</title>

    <base href="/expenseMVC/">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script type="text/javascript" src="lib/js/main.js"></script>
    <style type="text/css">
        body {
            min-height: 100vh;
            overflow-x: hidden;
            font-family: 'Arial, sans-serif';
        }

        .page-content {
            margin-top: 5% !important;
            margin-left: 17rem;
            margin-right: 1rem;
            transition: all 0.4s;
            color: #000;
            background-color: white;
            font-family: 'Arial, sans-serif';
        }

        .content.active {
            margin-left: 1rem;
            margin-right: 1rem;
            font-family: 'Arial, sans-serif';
        }

        th,
        td {
            color: #000;
            background-color: white;
            font-family: 'Arial, sans-serif';
        }
    </style>
</head>

<body>
    @include('shared.sidenav');
    @include('shared.header');

    <div class="page-content">
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 border border-gray-200 dark:border-gray-700">
            <div class="text-gray-700 dark:text-gray-300">
                <h3 class="text-lg font-semibold m-3">
                    {{ __('Upgrade Your Plan') }}
                </h3>
                <p class="m-3 text-sm">
                    {{ __('Once you upgrade, you will gain access to premium features. Proceed carefully before making any payments.') }}
                </p>
                <form method="POST" action="{{ route('payment') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="amount" class="block text-sm font-medium text-gray-700 m-3">Amount</label>
                        <input type="text" name="amount" id="amount" value="2000" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm 
                                   focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <button class="m-3 btn btn-dark">
                        {{ __('Update plan') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>



</html>