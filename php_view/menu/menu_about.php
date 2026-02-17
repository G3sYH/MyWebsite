<?php require_once "../../auth/auth.php"; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>G3sYH | About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../../stylecss_view/stylecss_menu_about.css">
    <link rel="icon" type="image/png" href="/MyWebsite/img/favicon.png">
</head>
<body>

<div class="card animate-card">

    <h1 class="title animate-item">About Me ^_^</h1>
    <p class="subtitle animate-item">A little about me and this website</p>
    <div class="profile animate-item">
    <p class="about-text typewriter" data-text="Hi kids this is your dad.
klo lu baca ini, berarti lu lagi gabut kan. Atau gk nyasar. Atau dua-duanya. Gua juga gk terlalu peduli sih.

Anyway, selamat datang di website yg gua buat pake tenaga, waktu, dan sedikit kewarasan.

Jadi knp website ini ada? Simple. Dosen gua tiap pertemuan hobi bgt nyuruh bikin project. Daripada file project gua kececer gk jelas di laptop, flashdisk, atau apalah yaudah gua kumpulin aja di satu tempat (website ini).

Sekalian juga jadi portofolio. Biar klo ada yg nanya, “Lu bisa apa?” Gua tinggal tunjukin web ini. Hemat tenaga, hemat omongan.

Website ini gua bangun native (dari nol), gk pake framework. Bkn karena sok jago, tapi karena gua pengen tau aja batas sabar gua sejauh mana. Backend? ya pakai PHP sama JavaScript lahhh. Dan yaa, gua masih hidup kok(walaupun tiap ngoding kadang pgn mati).

Sisanya lu lanjutin aja deh explore sendiri website ny. Kalau lu bingung, gua apa lagi. Klo ada bug/rusak, berarti gua lagi males benerin.

Dan entah knp lu masih baca sampai sini. Thanks ya udah luangin waktu buat dengerin yappingan gua, berarti hidup lu gak sesibuk itu.

Kalau lu ketawa pas baca ini, fix kita satu server sih, chat aj gua di wa siapa tau bisa jadi patner."></p>
        <div class="profile-info  animate-item">
            <p><span>Name</span> Garin Syuhada</p>
            <p><span>Age</span> 19 Tahun</p>
            <p><span>Hobby</span> Teknologi (IT), Olahraga, Game</p>
            <p><span>Note</span> Apalagi isi sendiri... :v</p>
        </div>
    </div>

    <!-- <div class="social animate-item">
        <a href="https://github.com/G3sYH" target="_blank"><i class="fa-brands fa-github"></i></a>
        <a href="https://discord.com" target="_blank"><i class="fa-brands fa-discord"></i></a>
        <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
    </div> -->

    <a href="menu_home.php" class="btn-back animate-item">
        ← Back to Home
    </a>

    <div class="footer-log animate-item">
        <a href="menu_log.php">Log</a>
        <span class="version">V1.0</span>
    </div>

</div>
    <script>
document.addEventListener("DOMContentLoaded", () => {

    const items = document.querySelectorAll(".animate-item");

    items.forEach((el, index) => {
        el.style.animation = "itemEnter 0.55s ease-out forwards";
        el.style.animationDelay = `${0.3 + index * 0.15}s`;
    });

});
</script>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const el = document.querySelector(".typewriter");
    const text = el.dataset.text.trim(); // 🔥 trim spasi
    let index = 0;
    const speed = 28;

    function type() {
        if (index < text.length) {
            el.textContent += text[index];
            index++;
            setTimeout(type, speed);
        } else {
            el.classList.add("done");
        }
    }

    // tunggu animasi card + title
    setTimeout(type, 1300);
});
</script>
</body>
</html>