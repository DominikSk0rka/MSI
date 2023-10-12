<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Champion select</title>
    @vite('resources/css/app.css')
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('Liga.jpg') }}');
            background-position: center;
            background-repeat: no-repeat;
            background-color: Green;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 24px;
            text-align: center;
        }

        .container {
            width: 100%;
            display: flex;
            justify-content: flex-start; /* Ustawienie linków na lewej stronie */
            padding-left: 20px; /* Dodatkowy odstęp od lewej strony */
        }

        .custom-link {
            text-decoration: none;
            font-size: 4rem; /* 7xl */
            text-transform: uppercase;
            margin: 10px;
            border: 5px solid transparent;
            padding: 5px;
            border-radius: 20px;
            transition: border 0.3s, color 0.3s, cursor 0.3s;
            cursor: grab;
        }

        .custom-link:hover {
            border-color: Black; /* Kolor granicy podczas najechania */
            color: Black; /* Kolor tekstu podczas najechania */
            cursor: grab;
        }
    </style>   
</head>

<body>
    <div class="container" >
        <div class="w-screen min-h-screen font-mono gap-5  flex flex-col pt-20 items-center">
            <a href="main" class="text-7xl uppercase m-10  border border-transparent p-5 rounded-xl border-transparent 
            hover:border-orange-400 hover:text-orange-400 duration-300 hover:cursor-grab"><button wire:click="setLaneIndex('Top')">Top</button></a>

            <a href="main" class="custom-link">Mid</a>

            <a href="main" class="custom-link">Jungle</a>

            <a href="main" class="custom-link">Adc</a>

            <a href="main" class="custom-link">Support</a>
        </div>
    </div>
</body>

</html>
