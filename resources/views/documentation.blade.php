<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily api</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class="menu">
        <ul>
            <li>
                <h1>GET</h1>
                <ul>
                    <li><strong>api/user</strong></li>
                    <li><strong>api/user/{id}</strong></li>
                    <li><strong>api/daily</strong></li>
                    <li><strong>api/keyword</strong></li>
                    <li><strong>api/keyword/{id}</strong></li>
                </ul>
            </li>
            <li>
                <h1>POST</h1>
                <ul>
                    <li><strong>api/daily</strong></li>
                    <li><strong>api/user</strong></li>
                    <li><strong>api/keyword</strong></li>
                </ul>
            </li>
            <li>
                <h1>PUT</h1>
                <ul>
                    <li><strong>api/keyword/{id}</strong></li>
                    <li><strong>api/user/{id}</strong></li>
                </ul>
            </li>
            <li>
                <h1>DELETE</h1>
                <ul>
                    <li><strong>api/daily/{id}</strong></li>
                    <li><strong>api/keyword/{id}</strong></li>
                    <li><strong>api/user/{id}</strong></li>
                </ul>
            </li>
        </ul>
    </div>
</body>
</html>