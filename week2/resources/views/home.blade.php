<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>TDA</title>
    <link rel="stylesheet" href="css/about.css" />
</head>
<body>
    <section class="header">
        <div class="name">
            <p>TECHNOLOGY DEVELOPMENT AIRFRAME</p>
        </div>
        <nav>
            <a href="home"><img src="img/Logo Bayucaraka.png"></a>
            <a href="home"><p class="nav_center">BAYUCARAKA ITS</p></a>
            <div class="nav-links">
                <Ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#vehicle">Vehicle</a></li>
                    <li><a href="/blog">artikel</a></li>
                    <li><a href="/contact">contact</a></li>
                </Ul>
            </div>
        </nav>
        

    </section>
    <section class="About" id="about">
        <h1>About</h1>
        <div class="col">
            <div class="col-bayu">
                <h3>Bayucaraka</h3>
                <p>Bayucaraka ITS merupakan sebuah tim robotik yang berasal dari Institut Teknologi Sepuluh Nopember Surabaya yang bergerak di 
                    bidang UAV atau pesawat tanpa awak. Bayucaraka telah meraih berbagai penghargaan 
                        dalam berbagai ajang perlombaan baik ditingkat nasional maupun nasional.
                </p>
            </div>
            <div class="col-tda">
                <h3>TDA</h3>
                <p>TDA atau Technology Development Airframe merupakan salah satu dari divisi yang berada di Bayucaraka. TDA mengembangkan 
                    berbagai pesawat dengan berbagai bentuk dan kegunaan yang beraneka ragam. Pesawat yang telah berhasil 
                    di lombakan adalah pesawat dengan konfigurasi 4 motor VTOl dan 1 motor untuk Fixed-Wing.
                </p>
            </div>
        </div>
    </section>
    <section class="vehicle" id="vehicle">
        <h1>Vehicle</h1>
        <h2>Albatros</h2>
        <h3>Image</h3>
        <div class="row">
            <div class="image">
                <img src="img/img1.jpg" alt="">
                <img src="img/img2_cut.jpg" alt="">
                <img src="img/img3.jpg" alt="">
                <img src="img/img4.jpg" alt="">
                <img src="img/img5.jpg" alt="">
                <img src="img/img6.jpg" alt="">
            </div>
        </div>
        <h3>Progress</h3>
        <div class="row-vid">
            <div class="video">
                <video src="img/vid1.mp4" autoplay="True" controls muted width="750px"></video>
                <p>VTOL</p>
            </div>
            <div class="video">
                <video src="img/vid3.mp4" autoplay="True" controls muted width="750px"></video>
                <p>Fixed-Wing</p>
            </div>
        </div>
    </section>
    <section class="part">
        <h1>Used Part</h1>
        <table>
            <tr>
                <td>Part Name</td>
                <td>Amount</td>
            </tr>
            <tr>
                <td>Matek F405 VTOL</td>
                <td>1 Pcs</td>
            </tr>
            <tr>
                <td>ESC 50A</td>
                <td>1 Pcs</td>
            </tr>
            <tr>
                <td>T-Motor as2814</td>
                <td>1 Pcs</td>
            </tr>
        </table>
    </section>
    <section class="youtube">
        <p>Youtube</p>
        <iframe width="50%" height="540" src="https://www.youtube.com/embed/qva1ssm7xZc?autoplay=1&mute=1">
        </iframe>
    </section>
    <section class="join">
        <h1>Owner : {{ $nama }}</h1>
    </section>
</body>
</html>