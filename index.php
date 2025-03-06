<?php
include 'popup-handler.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menara Pandang Teratai</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function popUp() {
            Swal.fire({
                title: 'Jaiz Cahya Prasetya',
                html: "<p>NIM : 2311103059</p><p>Kelas : SI07-E</p><p>Email : jaizcahya@student.telkomuniversity.ac.id</p>",
                showCancelButton: true,
                confirmButtonText: 'OK',
                cancelButtonText: 'Close'
            })
        }
    </script>
</head>

<body>
    <header class="header">
        <img class="logo-nav" src="logo.png" alt="logo menara">
        <h2>Menara Pandang Teratai</h2>
        <nav class="navigation">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Pesan Tiket</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero-section">
            <div class="hero-content">
                <h1>Selamat datang di Menara Pandang Teratai</h1>
                <p>Tinggi menara teratai yaitu 114m, terletak di pusat kota Purwokerto. Menikmati
                    keindahan kota Purwokerto di monumen tertinggi kota satria.</p>
            </div>
            <div class="hero-buttons">
                <form method="post" action="">
                    <input type="hidden" name="action" value="showPopup">
                    <button type="submit">Pesan Tiket</button>
                </form>
                <button>Lihat Sejarah</button>
            </div>
        </section>

        <section class="team-section">
            <h2>Meet The Team</h2>
            <p>Kelompok Tugas Besar Pemrograman Aplikasi Web</p>
            <br>

            <div class="column">
                <div class="card">
                    <img src="jaizz.JPG" alt="Jaiz" style="width:80%">
                    <div class="container">
                        <h3>Jaiz Cahya Prasetya</h3>
                        <p class="title">Backend Developer</p>
                        <p>
                            <button onclick="popUp()">More Details</button>
                        </p>
                    </div>
                </div>
            </div>

            </div>
        </section>

        <?php
        include 'popup-component.php';
        ?>

    </main>

    <script>
        function closePopup() {
            document.getElementById('popupContainer').style.display = 'none';
        }
    </script>
</body>

</html>