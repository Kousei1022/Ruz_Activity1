<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Stockroom')</title>

    <style>

        /* PAGE */

        :root {
            --ink: #17211b;
            --muted: #66736a;
            --paper: #f6f3eb;
            --panel: #fffdf8;
            --line: #d9ded5;
            --accent: #d95d39;
            --accent-dark: #a9442d;
            --green: #315c49;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Georgia, 'Times New Roman', serif;
            background: var(--paper);
            color: var(--ink);
        }

        /* HEADER */

        header {
            background: var(--green);
            color: #fffdf8;
            padding: 22px clamp(20px, 6vw, 84px);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            border-bottom: 5px solid var(--accent);
        }

        header h1 {
            margin: 0;
            font-size: clamp(24px, 4vw, 38px);
            letter-spacing: 1px;
        }

        /* NAVIGATION */

        nav a {
            color: #fffdf8;
            text-decoration: none;
            margin-left: 18px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: 700;
        }

        nav a:hover {
            color: #ffd0c2;
        }

        .nav-user { color: #dce7dc; font: 14px Arial, sans-serif; }
        .nav-form { display: inline; }
        .nav-button { border: 0; background: transparent; color: #fffdf8; cursor: pointer; font: 700 14px Arial, sans-serif; margin-left: 18px; padding: 0; }

        /* MAIN */

        main {
            width: min(92%, 1040px);
            margin: 48px auto;
        }

        h2 { font-size: clamp(30px, 5vw, 52px); margin: 0 0 10px; line-height: 1; }
        p { line-height: 1.6; }
        a { color: var(--accent-dark); font-weight: 700; }
        .eyebrow { color: var(--accent-dark); font: 700 12px Arial, sans-serif; letter-spacing: 2px; margin: 0 0 12px; text-transform: uppercase; }
        .page-intro { color: var(--muted); margin: 0 0 30px; font: 16px Arial, sans-serif; }
        .page-header { align-items: end; display: flex; gap: 28px; justify-content: space-between; margin-bottom: 30px; }
        .button, button {
            display: inline-block;
            border: 0;
            border-radius: 3px;
            background: var(--accent);
            color: #fff;
            cursor: pointer;
            font: 700 14px Arial, sans-serif;
            padding: 12px 18px;
            text-decoration: none;
        }
        .button:hover, button:hover { background: var(--accent-dark); }
        .button-secondary { background: transparent; border: 1px solid var(--line); color: var(--ink); }
        .button-secondary:hover { background: #eef0e8; }
        .flash { background: #e4f0e5; border-left: 4px solid var(--green); margin: 20px 0; padding: 13px 16px; font: 14px Arial, sans-serif; }
        .errors { background: #fff0eb; border-left: 4px solid var(--accent); margin: 20px 0; padding: 13px 16px; font: 14px Arial, sans-serif; }
        }

        /* CARD COMPONENT */

        .card {
            display: block;
            width: 100%;
            box-sizing: border-box;

            background: var(--panel);
            border: 1px solid var(--line);
            border-radius: 4px;
            padding: 24px;
            margin: 18px 0;
            box-shadow: 8px 8px 0 rgba(49, 92, 73, .08);
        }

        /* CARD TITLE */

        .card h3 {
            margin: 0 0 12px 0;
            color: var(--ink);
            font-size: 24px;
        }

        /* CARD CONTENT */

        .card p {
            margin: 0;
            color: var(--muted);
            font: 16px Arial, sans-serif;
        }

        .product-actions { display: flex; flex-wrap: wrap; gap: 10px; align-items: center; margin-top: 20px; }
        .product-actions form { margin: 0; }
        .product-card { display: grid; gap: 18px; grid-template-columns: minmax(0, 1fr) auto; }
        .product-card h3 { margin-bottom: 8px; }
        .product-meta { align-items: end; display: flex; flex-direction: column; gap: 7px; font: 14px Arial, sans-serif; white-space: nowrap; }
        .product-meta strong { color: var(--accent-dark); font: 700 22px Georgia, serif; }
        .product-meta span { color: var(--muted); }
        .product-card .product-actions { grid-column: 1 / -1; }
        .empty-state { text-align: center; }
        .empty-state h3 { font-size: 26px; margin: 0 0 8px; }
        .empty-state p { color: var(--muted); }
        .auth-shell { margin: 0 auto; max-width: 680px; }
        .auth-heading { margin-bottom: 28px; }
        .auth-heading h2 { max-width: 600px; }
        .form-footnote { color: var(--muted); font: 14px Arial, sans-serif; margin: 22px 0 0; }
        .check-label { align-items: center; display: flex; gap: 8px; margin-bottom: 22px; text-transform: none; letter-spacing: 0; }
        .check-label input { width: auto; }
        .form-card { max-width: 680px; }
        label { display: block; margin-bottom: 7px; font: 700 13px Arial, sans-serif; text-transform: uppercase; letter-spacing: 1px; }
        input, textarea { width: 100%; border: 1px solid var(--line); border-radius: 2px; background: #fff; color: var(--ink); font: 16px Arial, sans-serif; padding: 12px; }
        input:focus, textarea:focus { border-color: var(--accent); outline: 2px solid #f5c1b3; }
        .field { margin-bottom: 20px; }
        .field-error { color: var(--accent-dark); display: block; margin-top: 6px; font: 13px Arial, sans-serif; }

        /* FOOTER */

        footer {
            text-align: center;
            padding: 25px;
            margin-top: 50px;
            color: var(--muted);
            font: 13px Arial, sans-serif;
        }

        @media (max-width: 680px) {
            header { align-items: flex-start; flex-direction: column; }
            nav a, .nav-button { margin-left: 0; margin-right: 14px; }
            main { margin: 34px auto; }
            .page-header, .product-card { display: block; }
            .page-header .button { margin-top: 8px; }
            .product-meta { align-items: flex-start; margin-top: 18px; }
            .product-card .product-actions { margin-top: 20px; }
        }

    </style>
</head>

<body>

    <header>

        <h1>Stockroom</h1>

        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/contact') }}">Contact</a>
            @auth
                <span class="nav-user">{{ auth()->user()->name }}</span>
                <a href="{{ route('products.index') }}">Products</a>
                <form class="nav-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="nav-button" type="submit">Log out</button>
                </form>
            @else
                <a href="{{ route('login') }}">Log in</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </nav>

    </header>

    <main>

        @if(session('success'))
            <div class="flash">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="errors">
                <strong>Please check the highlighted details.</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')

    </main>

    <footer>

        <p>&copy; 2026 My Website</p>

    </footer>

</body>

</html>