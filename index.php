<?php require_once "auth/auth.php" ?>

<!DOCTYPE html>
<html lang="id"> 
<head>
    <meta charset="UTF-8">
    <title>G3sYH | Home</title>

    <!-- WAJIB RESPONSIVE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="stylecss_view/stylecss_index.css">
</head>
<body>

<div class="container">
    <div class="card animate-card">
        <h1 class="title animate-item">Welcome to my website</h1>
        <p class="subtitle animate-item">Please check the box below to enter!</p>

        <div class="check-area animate-item">
            <input type="checkbox" id="agree">
            <label for="agree">
                <span class="checkmark"></span>
                I agree to continue
            </label>
        </div>

        <div class="menu animate-item">
            <button id="homeBtn" class="btn disabled">Home</button>
        </div>

        <p id="warning" class="warning animate-item">
            ⚠️ Please check first!
        </p>
    </div>
</div>

<script src="js_controller/js_controller_index.js"></script>

</body>
</html>