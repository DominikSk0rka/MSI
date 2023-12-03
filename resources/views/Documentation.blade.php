<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumentacja</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('tlo2.jpg') }}');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
        }

        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            padding: 20px;
        }

        .thumbnail-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 10px;
        }

        .thumbnail {
            width: 200px;
            cursor: pointer;
            margin: 5px;
            border: 2px solid black;
        }

        .thumbnail-description {
            margin-top: 5px;
            color: white;
        }

        #photo-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            align-items: center;
            justify-content: center;
        }

        #modal-content {
            max-width: 100%;
            max-height: 100%;
        }

        h1 {
            color: white;
        }

        #back-button-container {
            position: fixed;
            bottom: 20px;
            width: 100%;
            text-align: center;
        }

        #back-button {
            background-color: #4CAF50; /* Zielony kolor przycisku */
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <h1>Dokumentacja</h1>

    <!-- Dodaj miniatury ze zdjęciami i opisami -->
    <div class="image-container">
        <div class="thumbnail-container">
            <img src="{{ asset('Supp.jpg') }}" alt="Zdjęcie 1" class="thumbnail" onclick="openModal('{{ asset('Supp.jpg') }}')">
            <div class="thumbnail-description">Support Tree</div>
        </div>

        <div class="thumbnail-container">
            <img src="{{ asset('Adc.jpg') }}" alt="Zdjęcie 2" class="thumbnail" onclick="openModal('{{ asset('Adc.jpg') }}')">
            <div class="thumbnail-description">Adc Tree</div>
        </div>

        <div class="thumbnail-container">
            <img src="{{ asset('Mid.jpg') }}" alt="Zdjęcie 3" class="thumbnail" onclick="openModal('{{ asset('Mid.jpg') }}')">
            <div class="thumbnail-description">Mid Tree</div>
        </div>

        <div class="thumbnail-container">
            <img src="{{ asset('Jungle.jpg') }}" alt="Zdjęcie 4" class="thumbnail" onclick="openModal('{{ asset('Jungle.jpg') }}')">
            <div class="thumbnail-description">Jungle Tree</div>
        </div>

        <div class="thumbnail-container">
            <img src="{{ asset('Top.jpg') }}" alt="Zdjęcie 5" class="thumbnail" onclick="openModal('{{ asset('Top.jpg') }}')">
            <div class="thumbnail-description">Top Tree</div>
        </div>
    </div>

    <!-- Dodaj modal do wyświetlania zdjęć w większym oknie -->
    <div id="photo-modal" onclick="closeModal()">
        <img id="modal-content">
    </div>

    <!-- Dodaj przycisk powrotu -->
    <div id="back-button-container">
        <button id="back-button" onclick="goBack()">Back to Main Page</button>
    </div>

    <script>
        function openModal(photoPath) {
            var modal = document.getElementById('photo-modal');
            var modalContent = document.getElementById('modal-content');

            modalContent.src = photoPath;
            modal.style.display = 'flex';
        }

        function closeModal() {
            var modal = document.getElementById('photo-modal');
            modal.style.display = 'none';
        }

        function goBack() {
            // Przekieruj na stronę o ścieżce "/"
            window.location.href = "/";
        }
    </script>

</body>
</html>
