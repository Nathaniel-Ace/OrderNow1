<!DOCTYPE html>
<html>
<head>
    <title>OrderNow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            margin: 20px;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        form {
            width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="submit"] {
            display: block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #0070ba;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #00578a;
        }

        /* Styling für das kleine Fenster */
        .popup-container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 9999;
            display: none;
        }

        .popup-content {
            text-align: center;
        }

        .popup-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #0070ba;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .popup-button:hover {
            background-color: #00578a;
        }
    </style>
</head>

<body>
    <h1>Kredit-/Debitkartenzahlung</h1>
    <form method="post">

        <label for="card_holder">Karteninhaber:</label>
        <input type="text" id="card_holder" name="card_holder" required><br>

        <label for="card_number">Kartennummer:</label>
        <input type="number" id="card_number" name="card_number" maxlength="16" required><br>

        <label for="expiry_month">Ablaufdatum (Monat/Jahr):</label>
        <select id="expiry_month" name="expiry_month" required>
            <option value="">Monat</option>
            <option value="01">Januar</option>
            <option value="02">Februar</option>
            <option value="03">Maerz</option>
            <option value="04">April</option>
            <option value="05">Mai</option>
            <option value="06">Juni</option>
            <option value="07">Juli</option>
            <option value="08">August</option>
            <option value="09">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Dezember</option>
        </select>
        <select id="expiry_year" name="expiry_year" required>
            <option value="">Jahr</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
            <option value="2028">2028</option>
            <option value="2029">2029</option>
            <option value="2030">2030</option>
            <option value="2031">2031</option>
        </select><br>

        <label for="cvv">CVV:</label>
        <input type="number" id="cvv" name="cvv" maxlength="3" required><br>

        <input id="payButton" type="submit" value="Speichern">
    </form>

    <div id="popup" class="popup-container">
        <div class="popup-content">
            <b>Speichern Sie Ihre Karteninformationen!</b>
            <button class="popup-button" onclick="closePopup()">Speichern</button>
        </div>
    </div>

    <script>
        function closePopup() {
            var popup = document.getElementById('popup');
            popup.style.display = 'none';
        }

        document.getElementById('payButton').addEventListener('click', function(event) {
            event.preventDefault();
            var popup = document.getElementById('popup');
            popup.style.display = 'block';
        });
    </script>
</body>
</html>
