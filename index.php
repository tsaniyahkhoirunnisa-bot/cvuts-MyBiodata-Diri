<?php
$pesen_status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_kirim'])) {
    $nama = htmlspecialchars($_POST['txt_nama']);
    $email = htmlspecialchars($_POST['txt_email']);
    $pesen = htmlspecialchars($_POST['txt_pesen']);

    if (!empty($nama) && !empty($email) && !empty($pesen)) {
        $pesen_status = "<div class= 'alert-success'>Terima kasih
<strong>$nama</strong>, pesen Anda telah berhasil dikirim ke server SMKN
5 Batam!</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta nama="viewport" content="width=device-width, initial-
scale=1.0">
    <title>CV Tsaniyah khoirunnisa -SMK 5 Batam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <header>
        <div class="profile-info">
            <div class="avatar"> </div>
            <div>
                <h1 style="margin:0;">Tsaniyah khoirunnisa</h1>
                <p style="margin:5px 0 0 0; color: gray;">Siswa Teknik
Komputer dan Jaringan SMKN 5 Batam</p>
             </div>
             </div>
             <nav>
                 <a href="#profil">Home</a>
                 <a href="#skills">Skills</a>
                 <a href="#kontak">Contact</a>
                 <button id="btn-theme" onclick="toggleTheme()">Dark 
Mode</button>
         </nav>
    </header>

    <div class="left-column">
        <div class="card" id="profil">
            <h2>PROFIL</h2>
            <h3>BIODATA</h3>
            <p>Pelajar aktif dan praktisi di bidang Teknik Komputer
dan Jaringan dengan fokus pada administrasi server dan Keamanan jaringan.</p>

            <h3> PENDIDIKAN</h3>
            <ul>
                <li>TK Almukmin 2015 </li>
                <li>SDN 002 2016-2021 </li>
                <li>SMP ALFALAH 2022-2025 </li>
                <li>SMKN 5 Batam 2025-2027</li>
            </ul>

            <h3>PENGALAMAN SISWA</h3>
            <ul>
                <li>Siswa TKJ di SMKN 5 Batam</li>
                <li>Membuat kabel LAN & Konfigurasi</li>
            </ul>
        </div>
    </div>

    <div class="right-column">
        <div class="card" id="skills">
            <h2>NETWORK SKILLS</h2>

            <div class="skill-item">
                <span class="skill-name">MikroTik RounterOS</span>
                <div class="progress-bar"><div class="progress-fill"
style="width: 90%;"></div></div>
             </div>

             <div class="skill-item">
                <span class="skill-name">Cisco Networking</span>
                <div class="progress-bar"><div class="progress-fill"
style="width: 85%;"></div></div>
            </div>

            <div class="skill-item">
                <span class="skill-name">Linux server
(Debian/Ubuntu)</span>
                 <div class="progress-bar"><div class="progress-fill"
style="width: 80%;"></div></div>
                </div>
            <div class="skill-item">
                <span class="skillname">Network Security</span>
                <div class="progres-bar"><div class="progress-fill"
style="width: 75%;"></div></div>
                </div>
              </div>

      <div class="card" id="kontak>
        <h2>FORM KONTAK</h2>

             <?PHP ECHO $pesan_status; ?>

          <form action="<?php echo $_SERVER['PHP_SELF']; ?>
method="POST">
          <div class="form-group">
            <method="POST">
    <div class="form-group">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="txt_nama" placeholder="Masukkan nama..." required>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="txt_email" placeholder="Masukkan email..." required>
    </div>

    <div class="form-group">
       <label for="pesan">Pesan:</label>
        <textarea id="pesan" name="txt_pesan" rows="4" placeholder="Tuliskan pesan..." required></textarea>
    </div>

                 <button type="submit" name="btn_kirim" class="btn-
submit">KIRIM PESAN</button>
            </form>
         </div>
      </div>

    </div>
</div>

<script src="script.js"></script>
</body>
</html>
