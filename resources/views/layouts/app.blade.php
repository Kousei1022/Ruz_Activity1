<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'My Website')</title>

    <style>

        /* PAGE */

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f1f5f9;
            color: #333;
        }

        /* HEADER */

        header {
            background-color: #1f2937;
            color: white;
            padding: 25px;
            text-align: center;
        }

        header h1 {
            margin: 0 0 15px 0;
        }

        /* NAVIGATION */

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* MAIN */

        main {
            width: 80%;
            max-width: 800px;
            margin: 40px auto;
        }

        /* CARD COMPONENT */

        .card {
            display: block;
            width: 100%;
            box-sizing: border-box;

            background-color: white;

            border: 3px solid #1f2937;

            border-radius: 15px;

            padding: 25px;

            margin: 20px 0;

            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.20);
        }

        /* CARD TITLE */

        .card h3 {
            margin: 0 0 12px 0;
            color: #1f2937;
            font-size: 24px;
        }

        /* CARD CONTENT */

        .card p {
            margin: 0;
            color: #555;
            font-size: 18px;
        }

        /* FOOTER */

        footer {
            text-align: center;
            padding: 25px;
            margin-top: 50px;
            color: #777;
        }

    </style>
</head>

<body>

    <header>

        <h1>My Website</h1>

        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/contact') }}">Contact</a>
            <a href="{{ route('products.index') }}">Products</a>
        </nav>

    </header>

    <main>

        @yield('content')

    </main>

    <footer>

        <p>&copy; 2026 My Website</p>

    </footer>

</body>

</html>