<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            color: white;
            background-color: #4CAF50;
            margin-bottom: 10px;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="button-container">
        <a href="{{ route('main', ['lane' => 'top']) }}"><button class="button">Top</button></a>
        <a href="{{ route('main', ['lane' => 'adc']) }}"><button class="button">Adc</button></a>
        <a href="{{ route('main', ['lane' => 'mid']) }}"><button class="button">Mid</button></a>
        <a href="{{ route('main', ['lane' => 'jungle']) }}"><button class="button">Jungle</button></a>
        <a href="{{ route('main', ['lane' => 'support']) }}"><button class="button">Support</button></a>
    </div>

</body>
</html>
