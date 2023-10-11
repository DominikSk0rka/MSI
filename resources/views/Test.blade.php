<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('Liga.jpg') }}'); /* Ustawienie tła za pomocą funkcji asset() */
          
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 24px;
            text-align: center;
        }

        /* Dodaj dodatkowe style według potrzeb */
    </style>
</head>
<body>
    <p>Treść strony</p> 
</body>
</html>
