<?php require_once "../../auth/auth.php"; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>G3sYH | Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../../stylecss_view/stylecss_menu_contact.css">
    <link rel="icon" type="image/png" href="/MyWebsite/img/favicon.png">
</head>
<body>

<div class="container">
    <div class="card animate-card">

        <h1 class="title animate-item">Contact me :)</h1>
        <p class="subtitle animate-item">Pengen deket? boleh bgt!</p>

        <div class="contact-list animate-item">
    <p><i class="fa-solid fa-envelope"></i>garinsyuhada30@gmail.com</p>
    <p><i class="fa-brands fa-github"></i>github.com/G3sYH</p>
    <p><i class="fa-brands fa-whatsapp"></i>+6287890550922</p>
    <p><i class="fa-brands fa-instagram"></i>@garinsyuhada_</p>
    <p><i class="fa-brands fa-discord"></i>G3sYH</p>
</div>

        <a href="menu_home.php" class="btn-back animate-item">
            ← Back to Home
        </a>

    </div>
</div>
    <script>
document.addEventListener("DOMContentLoaded", () => {

    const items = document.querySelectorAll(".contact-list p");

    items.forEach((el, i) => {
        el.style.opacity = "0";
        el.style.transform = "translateY(18px)";
        el.style.animation = "itemEnter 0.5s ease-out forwards";
        el.style.animationDelay = `${0.4 + i * 0.15}s`;
    });

});
</script>
</body>
</html>