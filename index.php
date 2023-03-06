<!DOCTYPE html>
<html>
	<head>
		<title>SJP's System</title>
		<link rel="stylesheet" href="assets/style/styles.css">
        <link rel="shortcut icon" href="assets/img/logo.svg">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
        <?php 
			include_once("function.php");
		?>
		<header>
            <?php
                useHeader();
            ?>
            <nav class="nav-home">
                <ul class="nav-home-ul">
                    <li><a href="#home-section">Home</a></li>
                    <li><a href="#about-us-section">About Us</a></li>
                    <li><a href="#online-shop-section">Online Shop</a></li>
                    <li><a href="#contact-section">Contact</a></li>
                    <li><a href="login.php"><button type="button" class="btn-log-in-home">Log In</button></a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div id="home-section" class="home-section">
                <img src="assets/img/home-img.png" class="home-img">
                <p>Welcome to Our SINAR JAYA PADANG’s System</p>
            </div>
            <div id="about-us-section" class="about-us-section">
                <h2>About Us</h2>
                <table id="tab-about-us-1" class="tab-about-us">
                    <tr class="tr-about-us">
                        <td style="width: 30%; padding: 0%">
                            <img src="assets/img/about-us-1.png" class="about-us-img">
                        </td>
                        <td>
                            <p class="about-us-text-1">UD Sinar Jaya Padang merupakan salah satu distributor yang memegang beberapa pendistribusian produk-produk dari beberapa manufaktur dengan beragam jenis produk. UD Sinar Jaya Padang bertugas menjadi penghubung antara manufaktur atau pabrik dengan toko-toko.</p>
                        </td>
                    </tr>
                </table>
                <table id="tab-about-us-2" class="tab-about-us">
                    <tr class="tr-about-us">
                        <td style="width: 70%; padding: 0%">
                            <p class="about-us-text-2">UD  Sinar Jaya Padang bertanggung jawab untuk wilayah Sumatera Barat, Indonesia, khususnya daerah Padang.</br><b>Lokasi Kantor:</b> <a href="https://goo.gl/maps/msEGjAzjquq11hiUA">Jalan Pasar Malintang Dalam No. 3, Padang, Sumatera Barat, Indonesia</a></br><b>Kode Pos Kantor:</b> 25211</p>
                        </td>
                        <td style="text-align: right">
                            <img src="assets/img/about-us-2.png" class="about-us-img">
                        </td>
                    </tr>
                </table>
            </div>
            <div id="online-shop-section" class="online-shop-section">
                <h2>Online Shop</h2>
                <p class="online-shop-text-1">Shopee: <a href="https://shopee.co.id/sinarjayapdg">sinar_jaya_pdg</a></p>
            </div>
            <div id="warehouse-img">
                <img src="assets/img/footer-img.png" class="contact-img">
            </div>
            <div id="contact-section" class="contact-section">
                <center>
                <h2>Contact</h2>
                <table id="tab-contact" class="tab-contact">
                    <tr class="tr-tab-contact">
                        <td class="title-tab-contact">
                            Media Sosial
                        </td>
                        <td class="title-tab-contact"> 
                            Nomor Telepon
                        </td>
                        <td class="title-tab-contact">
                            Email
                        </td>
                    </tr>
                    <tr class="tr-tab-contact">
                        <td class="content-tab-contact">
                            <img src="assets/icon/ins.svg" class="ins-icon"> <a href="https://www.instagram.com/sinar_jaya_pdg">sinar_jaya_pdg</a>
                        </td>
                        <td class="content-tab-contact">
                            <a href="tel:+628116631198">(+62)8116631198</a>
                        </td>
                        <td class="content-tab-contact">
                            <a href="mailto:sinarjayapdgud@gmail.com">sinarjayapdgud@gmail.com</a>
                        </td>
                    </tr>
                </table>
                </center>
            </div>
        </main>
        <footer>
            <?php
                useFooter();
            ?>
        </footer>
        <?php
            firebaseSDK();
        ?>
	</body>
</html>