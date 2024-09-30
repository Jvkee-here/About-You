<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This For u Mpinn</title>
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
            max-width: 800px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            overflow: hidden;
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 20px 0;
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        li {
            font-size: 1.2em;
            margin-bottom: 15px;
            background: #f9f9f9;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        li:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        a {
            display: inline-block;
            padding: 12px 24px;
            font-size: 1.2em;
            color: #fff;
            background: #007bff;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        a:hover {
            background: #0056b3;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>This is about you :D</h1>
        <ul id="character-details">
            <!-- Rincian karakter akan diisi oleh JavaScript -->
        </ul>
        <a href="Latihan1.php" class="back-link">Mau Liat Foto Mpinn yang lain ?</a>
    </div>

    <script>
        // Function to get query parameters from URL
        function getQueryParams() {
            const params = new URLSearchParams(window.location.search);
            return {
                karakter: params.get('karakter'),
                nama: params.get('nama'),
                kota: params.get('kota'),
                pembuat: params.get('pembuat'),
                gambar: params.get('gambar')
            };
        }

        // Function to display character details
        function displayCharacterDetails() {
            const { karakter, nama, kota, pembuat, gambar } = getQueryParams();

            if (!karakter || !nama || !kota || !pembuat || !gambar) {
                window.location.href = 'Latihan1.php';
                return;
            }

            const detailsList = document.getElementById('character-details');
            detailsList.innerHTML = `
                <li>
                    <img src="img/${gambar}" alt="${karakter}">
                    <h2>${karakter}</h2>
                </li>
            `;
        }

        // Call the function to display character details on page load
        displayCharacterDetails();
    </script>
</body>
</html>

