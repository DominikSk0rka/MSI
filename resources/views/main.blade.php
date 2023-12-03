<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }

        .background-behind {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('tlo.jpg') center/cover fixed;
        }

        .container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 1000px;
            height: 840px;
            overflow: hidden;
            border-radius: 20px;
            background: url('Liga.jpg') center/cover fixed;
        }

        .button-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .button {
            position: absolute;
            cursor: pointer;
            border: none;
            overflow: hidden;
            width: 100px;
        }

        .button img {
            width: 100%;
            display: block;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .button:hover .overlay {
            opacity: 1;
        }

        .overlay-text {
            color: white;
            text-align: center;
            font-size: 16px;
        }

        /* Add styles for the back button */
        .back-button {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="background-behind"></div>
    <div class="container">
        <div class="button-container">
            <a href="pytania" class="button" style="top: 140px; left: 190px;">
                <img src="TOP.png" alt="Top Icon">
                <div class="overlay">
                    <div class="overlay-text">Top</div>
                </div>
            </a>
            <a href="pytaniamid" class="button" style="top: 400px; left: 450px;">
                <img src="MIDDLE.png" alt="Mid Icon">
                <div class="overlay">
                    <div class="overlay-text">Mid</div>
                </div>
            </a>
            <a href="pytaniaadc" class="button" style="top: 650px; left: 800px;">
                <img src="ADC.png" alt="ADC Icon">
                <div class="overlay">
                    <div class="overlay-text">ADC</div>
                </div>
            </a>
            <a href="pytaniajungle" class="button" style="top: 350px; left: 250px;">
                <img src="JUNGLE.png" alt="Jungle Icon">
                <div class="overlay">
                    <div class="overlay-text">Jungle</div>
                </div>
            </a>
            <a href="pytaniasupport" class="button" style="top: 650px; left: 700px;">
                <img src="SUPPORT.png" alt="Support Icon">
                <div class="overlay">
                    <div class="overlay-text">Support</div>
                </div>
            </a>
            <a href="/" class="back-button">Back to Main Page</a>
        </div>
    </div>
</body>
</html>
