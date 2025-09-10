<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>ZONK!</title>
  <style>
    body {
      background: radial-gradient(circle, #000000, #330000);
      color: red;
      font-family: 'Impact', sans-serif;
      text-align: center;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    h1 {
      font-size: 80px;
      animation: shake 0.4s infinite, flash 1s infinite alternate;
      margin: 0;
    }

    @keyframes shake {
      0% {
        transform: translate(2px, 2px) rotate(0deg);
      }

      25% {
        transform: translate(-2px, -3px) rotate(-2deg);
      }

      50% {
        transform: translate(-3px, 1px) rotate(2deg);
      }

      75% {
        transform: translate(3px, 3px) rotate(0deg);
      }

      100% {
        transform: translate(1px, -2px) rotate(-1deg);
      }
    }

    @keyframes flash {
      from {
        color: red;
      }

      to {
        color: yellow;
      }
    }

    .emoji {
      font-size: 60px;
      margin: 20px 0;
      animation: bounce 1s infinite;
    }

    @keyframes bounce {

      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-15px);
      }
    }

    .edukasi {
      color: white;
      font-size: 20px;
      margin-top: 30px;
      max-width: 600px;
      line-height: 1.6;
      padding: 15px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 10px;
    }

    .btn {
      margin-top: 25px;
      padding: 12px 25px;
      font-size: 18px;
      background: #ffcc00;
      color: black;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }

    .btn:hover {
      background: #ffaa00;
    }
  </style>
</head>

<body>
  <h1>ZONK 🤣🔥</h1>
  <div class="emoji">💀😂💀</div>
  <p class="edukasi">
    Anda baru saja TERTIPU oleh <b>Giveaway Palsu</b>!<br><br>
    Jangan asal percaya dengan link yang menawarkan diamond gratis,
    skin ML, atau hadiah iPhone.<br><br>
    👉 Ingat: <b>Phising itu nyata</b> dan bisa mencuri akun kamu.<br>
    Untungnya ini hanya <i>simulasi tugas kuliah cyber security</i> 😉
  </p>
  <button class="btn" onclick="window.location.href='index.php'">Coba Lagi</button>

  <audio id="sound" autoplay>
    <source src="https://www.myinstants.com/media/sounds/trollolololololololol.mp3" type="audio/mpeg">
  </audio>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const audio = document.getElementById("sound");
      // Coba play manual
      const playPromise = audio.play();

      if (playPromise !== undefined) {
        playPromise.catch(() => {
          // Jika gagal, tunggu klik pertama user
          document.body.addEventListener("click", () => {
            audio.play();
          });
        });
      }
    });
  </script>

</body>

</html>