<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is about you</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('bg1.jpeg');
            background-size: cover;
            background-position: center;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            background-image: url('bg2.jpeg');
            background-size: cover;
            background-position: center;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            padding: 30px;
            text-align: center;
            position: relative;
        }

        h1 {
            font-size: 3em;
            margin-bottom: 30px;
            color: #222;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            justify-content: center;
        }

        .card {
            background: #f8f9fa;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: left;
            position: relative;
            padding: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
            border: 4px solid #007bff;
        }

        .card h2 {
            font-size: 1.5em;
            margin: 10px 0;
            color: #333;
        }

        .card p {
            font-size: 1em;
            color: #555;
            margin: 5px 0;
        }

        .card a {
            margin-top: auto;
            padding: 10px;
            font-size: 1.2em;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .card a:hover {
            color: #0056b3;
            text-decoration: underline;
        }



        .back-button {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            font-size: 1.2em;
            color: #fff;
            background: #007bff;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s;
        }

        .back-button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>THIS IS ABOUT YOU :D</h1>
        <style>
            h1 {
    font-size: 3em;
    margin-bottom: 30px;
    color: white; /* Warna teks putih */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}
</style>
        <div class="grid-container" id="anime-list">
            <!-- Daftar karakter akan diisi oleh JavaScript -->
        </div>
    </div>
    <script>
        // Array of anime characters
        const anime = [
            {
                karakter: "❤️",
                gambar: "mpinn1.jpg"
            },
            {
                karakter: "💕",
                gambar: "mpinn2.jpg"
            },
            {
                karakter: "💕",
                gambar: "mpinn3.jpg"
            },
            {
                karakter: "❤️",
                gambar: "mpinn4.jpg"
            }
        ];

        // Function to generate the list of characters
        function generateAnimeList() {
            const list = document.getElementById('anime-list');
            anime.forEach(character => {
                const card = createCard(character);
                list.appendChild(card);
            });
        }

        // Function to create a card element
        function createCard(character) {
            const card = document.createElement('div');
            card.className = 'card';
            card.innerHTML = `
              <img src="img/${character.gambar}" alt="${character.karakter}">
                <h2>${character.karakter}</h2>
                <a href="Latihan2.php?karakter=${encodeURIComponent(character.karakter)}&nama=${encodeURIComponent(character.nama)}&kota=${encodeURIComponent(character.kota)}&pembuat=${encodeURIComponent(character.pembuat)}&gambar=${encodeURIComponent(character.gambar)}">
                    Lihat Detail
                </a>
            `;
            return card;
        }

        // Call the function to populate the list on page load
        generateAnimeList();
    </script>
</body>
</html>
