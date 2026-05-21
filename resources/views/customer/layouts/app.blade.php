<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOODFIT</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            font-family: 'Poppins', sans-serif;
        }

        body{
            background: #f8f9fc;
        }

        .navbar{
            background: #111827;
            padding: 15px 8%;
        }

        .navbar-brand{
            color: #facc15 !important;
            font-weight: 700;
            font-size: 28px;
        }

        .nav-link{
            color: white !important;
            margin-right: 15px;
        }

        .nav-link:hover{
            color: #facc15 !important;
        }

        .btn-login{
            background: #facc15;
            color: #111827;
            border-radius: 10px;
            padding: 10px 20px;
            font-weight: 600;
        }

        .btn-login:hover{
            background: white;
        }

        footer{
            background: #0f172a;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 100px;
        }

    </style>

</head>
<body>

    @include('customer.layouts.navbar')

    @yield('content')

    @include('customer.layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>