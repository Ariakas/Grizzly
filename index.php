<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="Fetch.js"></script>
    <script defer src="script.js"></script>
</head>
<body>
    <section id="t1">
        <form action="" id="country_form">
            <label>
                <input type="tel" placeholder="Phone No" required>
            </label>
            <button>Get</button>
            <p id="country_response"></p>
        </form>
    </section>
<?php if (!($_COOKIE["GRIZZLY"] ?? false)): ?>
    <dialog id="t2" open>
        <button id="close_popup">X</button>
        <p>Попап о том что на странице используются кукисы</p>
        <button id="confirm_cookie">OK</button>
    </dialog>
<?php endif; ?>
</body>
</html>