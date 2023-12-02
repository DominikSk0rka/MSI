<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        .button-container {
            display: flex;
            flex-direction: column; /* Dodajemy tę linię, aby przyciski były ułożone jeden pod drugim */
            align-items: center;
            padding: 20px;
        }

        .button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            color: white;
            background-color: #4CAF50; /* Zmień kolor tła według potrzeb */
            margin-bottom: 10px; /* Dodajemy tę linię, aby dodać odstęp między przyciskami */
        }

        .button:hover {
            background-color: #45a049; /* Zmień kolor tła przy najechaniu myszką */
        }
    </style>
</head>
<body>

    <div class="button-container">
        <a href="pytania"><button class="button">Top</button></a>
        <a href="pytaniaadc"><button class="button">Adc</button></a>
        <a href="pytaniamid"><button class="button">Mid</button></a>
        <a href="pytaniajungle"><button class="button">Jungle</button></a>
        <a href="pytaniasupport"><button class="button">Support</button></a>
    </div>

</body>
</html>
