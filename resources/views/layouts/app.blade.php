<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Citas Médicas')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        header {
            background: #007bff;
            color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        header h1 {
            margin: 0;
        }
        main {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 5px;
            border-left: 4px solid #007bff;
        }
        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenido a la Aplicación de Citas Médicas</h1>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
