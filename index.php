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
    <section id="t3">
        <h2>Lorem ipsum dolor sit amet.</h2>
        <div class="grid">
            <div class="item">
                <div class="icon">
                    <img src="img/2fas-auth-svgrepo-com.svg" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet.</p>
                <p>Lorem.</p>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="img/2gis-svgrepo-com.svg" alt="">
                </div>
                <p>Laborum magni molestiae reprehenderit sed.</p>
                <p>Lorem.</p>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="img/aarogya-setu-svgrepo-com.svg" alt="">
                </div>
                <p>Blanditiis ducimus eveniet laudantium similique.</p>
                <p>Lorem.</p>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="img/afweatherwidget-svgrepo-com.svg" alt="">
                </div>
                <p>Amet debitis fuga molestias nulla.</p>
                <p>Lorem.</p>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="img/alarms-svgrepo-com.svg" alt="">
                </div>
                <p>Aliquid culpa itaque magnam nesciunt?</p>
                <p>Lorem.</p>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="img/ameli-svgrepo-com.svg" alt="">
                </div>
                <p>Facilis fugit ipsum quibusdam velit.</p>
                <p>Lorem.</p>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="img/acm-svgrepo-com.svg" alt="">
                </div>
                <p>Aspernatur cum est incidunt voluptatum.</p>
                <p>Lorem.</p>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="img/anemo-svgrepo-com.svg" alt="">
                </div>
                <p>Cum facere molestias nulla repellat.</p>
                <p>Lorem.</p>
            </div>
        </div>
    </section>
</body>
</html>