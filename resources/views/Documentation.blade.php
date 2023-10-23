<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumentacja</title>
    <style>
        .thumbnail-container {
            display: flex;
            align-items: center;
        }

        .thumbnail {
            width: 200px; /* Dostosuj rozmiar miniatury według potrzeb */
            cursor: pointer;
            margin: 5px;
            border: 2px solid black; /* Dodaj ramkę czarną wokół miniaturki */
        }

        .thumbnail-description {
            margin-left: 10px;
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
    </style>
</head>
<body>

    <h1>Dokumentacja</h1>

    <!-- Dodaj miniatury ze zdjęciami i opisami -->
    <div class="image-container">
        <div class="thumbnail-container">
            <img src="{{ asset('Supp.jpg') }}" alt="Zdjęcie 1" class="thumbnail" onclick="openModal('{{ asset('Supp.jpg') }}')">
            <div class="thumbnail-description">Support Tree</div>

            <img src="{{ asset('Adc.jpg') }}" alt="Zdjęcie 2" class="thumbnail" onclick="openModal('{{ asset('Adc.jpg') }}')">
            <div class="thumbnail-description">Adc Tree</div>

            <img src="{{ asset('Mid.jpg') }}" alt="Zdjęcie 3" class="thumbnail" onclick="openModal('{{ asset('Mid.jpg') }}')">
            <div class="thumbnail-description">Mid Tree</div>

            <img src="{{ asset('Jungle.jpg') }}" alt="Zdjęcie 4" class="thumbnail" onclick="openModal('{{ asset('Jungle.jpg') }}')">
            <div class="thumbnail-description">Jungle Tree</div>
    </div>

    <!-- Dodaj modal do wyświetlania zdjęć w większym oknie -->
    <div id="photo-modal" onclick="closeModal()">
        <img id="modal-content">
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
    </script>

</body>
</html>