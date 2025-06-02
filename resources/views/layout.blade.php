<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Listado de Clips')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background: #181a1b;
            color: #f1f1f5;
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #23272b;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.25);
            padding: 32px 24px;
        }
        h1, h2, h3, h4, h5, h6 {
            color: #e2e8f0;
            margin-top: 0;
        }
        ul, ol {
            list-style: none;
            padding: 0;
            margin: 0 0 1rem 0;
        }
        li {
            background: #23272b;
            margin-bottom: 12px;
            padding: 14px 18px;
            border-radius: 8px;
            font-size: 1.1rem;
            transition: background 0.2s;
            color: #f1f1f5;
            border: 1px solid #2d3748;
        }
        li:hover {
            background: #2d3748;
        }
        a {
            color: #4fd1c5;
            text-decoration: none;
            transition: color 0.2s;
        }
        a:hover {
            color: #38b2ac;
            text-decoration: underline;
        }
        .btn {
            display: inline-block;
            font-weight: 500;
            color: #fff;
            background-color: #4fd1c5;
            border: none;
            border-radius: 6px;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.2s;
            text-align: center;
            text-decoration: none;
        }
        .btn:hover, .btn:focus {
            background-color: #38b2ac;
            color: #fff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #23272b;
            color: #f1f1f5;
            margin-bottom: 1rem;
        }
        th, td {
            padding: 12px 16px;
            border: 1px solid #2d3748;
        }
        th {
            background: #2d3748;
            color: #e2e8f0;
            font-weight: 600;
        }
        tr:nth-child(even) {
            background: #202225;
        }
        input, select, textarea {
            background: #23272b;
            color: #f1f1f5;
            border: 1px solid #2d3748;
            border-radius: 6px;
            padding: 8px 12px;
            margin-bottom: 1rem;
            font-size: 1rem;
        }
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #4fd1c5;
        }
        label {
            color: #e2e8f0;
            margin-bottom: 0.5rem;
            display: block;
        }
        .alert {
            padding: 12px 18px;
            border-radius: 6px;
            margin-bottom: 1rem;
            font-size: 1rem;
        }
        .alert-success {
            background: #22543d;
            color: #c6f6d5;
        }
        .alert-danger {
            background: #742a2a;
            color: #fed7d7;
        }
        .alert-warning {
            background: #744210;
            color: #f6e05e;
        }
        .alert-info {
            background: #234e52;
            color: #bee3f8;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>
