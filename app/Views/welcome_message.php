<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Selamat Datang!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- STYLES -->

    <style {csp-style-nonce}>
        html,
        body {
            height: 100%;
            width: 100%;
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }
        .bg {
            min-height: 100%;
            min-width: 100%;
            background: linear-gradient(0deg, rgba(196, 196, 196, 0.47), rgba(196, 196, 196, 0.47)), url("https://disk.mediaindonesia.com/thumbs/1800x1200/news/2022/02/3cb46291b0644606982a81995b8df58a.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>

<body>
<div class="container bg col d-flex justify-content-center align-items-center">
    <div class="card col-8">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="https://cdn-icons-png.flaticon.com/512/5231/5231019.png" class="w-100" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title text-nowrap"><?= esc($nama) ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted text-nowrap"><?= esc($kelas) ?> - <?= esc($nim) ?></h6>
                    <table class="table">
                        <tr>
                            <td class="pl-0">Umur</td>
                            <td><?= esc($umur)  ?></td>
                        </tr>
                        <tr>
                            <td class="pl-0">Tempat Tanggal Lahir</td>
                            <td><?= esc($ttl)  ?></td>
                        </tr>
                        <tr>
                            <td class="pl-0">Alamat Rumah</td>
                            <td><?= esc($alamat)  ?></td>
                        </tr>
                    </table>
                    <div class="row justify-content-between">
                        <div class="col">
                            <a href="#" class="card-link"><?= esc($email)  ?></a>
                        </div>
                        <div class="col text-right">
                            <a href="#" class="card-link"><?= esc($telp)  ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
    <section>

        <h1 class="text-center">BIODATA</h1>

        <table class="table">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php /*= esc($nama) */ ?></td>
            </tr>
            <tr>
                <td>Nomor Induk Mahasiswa</td>
                <td>:</td>
                <td><?php /*= esc($nim) */ ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?php /*= esc($kelas) */ ?></td>
            </tr>
        </table>

    </section>-->

<script>
    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
</script>

<!-- -->

</body>

</html>