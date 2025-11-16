<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Portfolio — Arif Rahman</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="Foto/iconarf.png">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
    html {
        scroll-behavior: smooth;
    }

    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: #0e1625;
        color: #ffffff;
    }

    nav {
        display: flex;
        justify-content: space-between;
        padding: 20px 60px;
        align-items: center;
        background: #0e1625;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 10;
    }

    nav a {
        color: #fff;
        text-decoration: none;
        margin: 0 18px;
        font-weight: 500;
    }

    .logo {
        font-size: 24px;
        font-weight: 700;
        color: #00e5ff;
    }

    .hero {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 140px 60px 60px;
    }

    .hero-text h1 {
        font-size: 38px;
        margin: 0;
        font-weight: 700;
    }

    .hero-text h2 {
        font-size: 22px;
        margin-top: 6px;
        font-weight: 500;
        color: #00e5ff;
    }

    .hero-text p {
        max-width: 500px;
        color: #b4c2d8;
        margin-top: 16px;
        line-height: 1.7;
        font-size: 15px;

        text-align: justify;
        text-justify: inter-word;
    }

    .role {
        font-size: 18px;
        margin-top: 4px;
        color: #00e5ff;
        font-weight: 500;
    }

    .btn {
        display: inline-block;
        margin-top: 26px;
        padding: 12px 26px;
        background: #00e5ff;
        color: #000;
        font-weight: 600;
        border-radius: 10px;
        text-decoration: none;
        transition: 0.2s;
    }

    .btn:hover {
        background: #00bcd4;
    }

    .social-icons {
        display: flex;
        gap: 10px;
    }

    .social-icons a {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        background: #ffffff10;
        /* soft transparan */
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        backdrop-filter: blur(5px);
        border: 1px solid #ffffff25;
        transition: 0.3s ease;
        font-size: 16px;
    }

    .social-icons a:hover {
        background: #4c80e4;
        /* warna biru modern */
        border-color: #4c80e4;
        transform: translateY(-3px);
    }

    /* Animasi foto */
    @keyframes fadeSlideUp {
        0% {
            opacity: 0;
            transform: translateY(40px) scale(0.95);
        }

        100% {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    .hero-img {
        width: 350px;
        height: 400px;
        border-radius: 40px;
        background: #00e5ff22;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 0 40px #00e5ff55;
        overflow: hidden;

        /* Animasi */
        opacity: 0;
        animation: fadeSlideUp 1s ease-out forwards;
        animation-delay: 0.3s;
        /* jeda 0.3 detik */
    }

    .hero-img img {
        width: 90%;
        height: auto;
        border-radius: 30px;
    }


    /* ——————————————————————
   RESPONSIVE 900px (Tablet)
—————————————————————— */
    @media (max-width: 900px) {

        nav {
            padding: 15px 25px;
        }

        nav a {
            margin: 0 10px;
            font-size: 14px;
        }

        .hero {
            padding: 120px 30px 40px;
            flex-direction: column-reverse;
            text-align: center;
        }

        .hero-text p {
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .social-icons {
            justify-content: center;
        }

        .hero-img {
            width: 260px;
            height: 300px;
        }
    }

    /* ——————————————————————
   RESPONSIVE 600px (HP)
—————————————————————— */
    @media (max-width: 600px) {

        nav {
            padding: 15px 15px;
        }

        nav a {
            margin: 0 6px;
            font-size: 12px;
        }

        .logo {
            font-size: 20px;
        }

        .hero-text h1 {
            font-size: 28px;
        }

        .hero-text h2 {
            font-size: 16px;
        }

        .hero-text p {
            font-size: 14px;
            padding: 0 5px;
        }

        .hero-img {
            width: 220px;
            height: 260px;
        }
    }



    .about {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        align-items: center;
        padding: 60px 10%;
    }

    /* Foto */
    .about-img img {
        width: 100%;
        max-width: 300px;
        border-radius: 25px;
        display: block;
        object-fit: cover;
        box-shadow: 0 0 25px rgba(0, 255, 255, 0.2);
    }

    /* Text */
    .about-text h2 {
        color: #18e0f8;
        font-size: 40px;
        margin-bottom: 20px;
    }

    .about-text p {
        max-width: 500px;
        color: #b4c2d8;
        margin-top: 16px;
        line-height: 1.7;
        font-size: 15px;

        text-align: justify;
        text-justify: inter-word;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .about {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .about-img img {
            margin: 0 auto;
        }
    }

    .skills-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
        gap: 20px;
        padding: 20px;
    }

    .skill-card.only-icon {
        background: #0d0d0d;
        padding: 25px;
        border-radius: 12px;
        text-align: center;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .skill-card.only-icon img {
        width: 70px;
        height: 70px;
        object-fit: contain;
        filter: drop-shadow(0 0 5px #18e0f8);
        animation: floating 3s ease-in-out infinite;
    }

    /* Animasi Melayang */
    @keyframes floating {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    /* Hover effect */
    .skill-card.only-icon:hover {
        transform: translateY(-8px);
        box-shadow: 0 0 15px #18e0f8;
    }

    .skills-title {
        color: #18e0f8;
        font-size: 40px;
        text-align: center;
        margin-bottom: 20px;
    }



    /* PORTFOLIO SECTION */
    .portfolio {
        padding: 80px 60px;
        background: #0e1625;
        color: #fff;
    }

    .portfolio-title {
        text-align: center;
        font-size: 32px;
        margin-bottom: 40px;
        color: #00e5ff;
    }

    /* GRID */
    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 30px;
    }

    /* CARD */
    .portfolio-card {
        background: #121d30;
        border-radius: 18px;
        overflow: hidden;
        border: 1px solid #00e5ff30;
        box-shadow: 0 0 15px #00e5ff20;
        transition: 0.3s ease;
    }

    .portfolio-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 0 25px #00e5ff60;
        border-color: #00e5ff;
    }

    .portfolio-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }

    /* CONTENT */
    .p-content {
        padding: 20px;
    }

    .p-content h3 {
        color: #00e5ff;
        margin-top: 0;
    }

    .p-content p {
        color: #b4c2d8;
        font-size: 14px;
        margin: 10px 0 15px;
    }

    /* BUTTON */
    .p-btn {
        display: inline-block;
        padding: 8px 14px;
        background: #00e5ff;
        color: #000;
        font-weight: 600;
        border-radius: 8px;
        text-decoration: none;
        transition: 0.2s ease;
    }

    .p-btn:hover {
        background: #00bcd4;
    }

    /* RESPONSIVE */
    @media(max-width: 600px) {
        .portfolio {
            padding: 60px 20px;
        }
    }

    .experience-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }

    .exp-card {
        background: #0f1c26;
        border: 1px solid #114f5f;
        padding: 25px;
        border-radius: 22px;
        transition: 0.3s ease;
    }

    .exp-card:hover {
        transform: translateY(-6px);
        border-color: #13e2d8;
    }

    /* Foto */
    .exp-img {
        width: 100%;
        height: 180px;
        overflow: hidden;
        border-radius: 16px;
        margin-bottom: 18px;
    }

    .exp-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.3s ease;
    }

    .exp-card:hover .exp-img img {
        transform: scale(1.06);
    }

    /* Tahun */
    .exp-year {
        display: inline-block;
        margin-top: 15px;
        padding: 6px 14px;
        background: #0a333f;
        border-radius: 8px;
        font-size: 14px;
    }

    .section-title {
        text-align: center;
        font-size: 36px;
        color: #00e5ff;
        margin-bottom: 30px;
    }

    /* CONTACT SECTION */
    .contact {
        padding: 80px 60px;
        background: #0e1625;
        color: #fff;
    }

    .contact-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: start;
    }

    .contact-info h3 {
        font-size: 24px;
        color: #00e5ff;
        margin-bottom: 10px;
    }

    .contact-info p {
        color: #b4c2d8;
        line-height: 1.7;
    }

    .contact-details p {
        margin: 10px 0;
        font-size: 15px;
    }

    .contact-details i {
        color: #00e5ff;
        margin-right: 10px;
    }

    .contact-social {
        margin-top: 20px;
        display: flex;
        gap: 12px;
    }

    .contact-social a {
        width: 38px;
        height: 38px;
        background: #ffffff10;
        border: 1px solid #ffffff25;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        transition: 0.3s ease;
    }

    .contact-social a:hover {
        background: #00e5ff;
        color: #000;
        transform: translateY(-3px);
    }

    /* FORM */
    .contact-form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .contact-form input,
    .contact-form textarea {
        background: #121d30;
        border: 1px solid #284861;
        padding: 12px 15px;
        border-radius: 10px;
        color: #fff;
        font-size: 14px;
        outline: none;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
        border-color: #00e5ff;
    }

    .send-btn {
        border: none;
        cursor: pointer;
        width: fit-content;
    }

    /* Responsive */
    @media(max-width: 768px) {
        .contact-container {
            grid-template-columns: 1fr;
        }
    }
    </style>
</head>

<body>
    <nav>
        <div class="logo">Portofolio.</div>
        <div>
            <a href="#home">Home</a>
            <a href="#services">Skills</a>
            <a href="#portfolio">Portofolio</a>
            <a href="#experience">Experience</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>

    <section class="hero" id="home">
        <div class="hero-text">
            <p>Hello, It's Me</p>

            <h1>Arif Rahman</h1>
            <h2>Geography Student</h2>

            <p>Saya Arif Rahman, mahasiswa Geografi Universitas Lambung Mangkurat semester 7 dengan fokus pada Sistem
                Informasi Geografis (SIG) dan pengembangan WebGIS. Berpengalaman dalam pengolahan data spasial,
                visualisasi peta interaktif, serta pengembangan WebGIS melalui kegiatan KKL 2 dan magang di
                Bappelitbangda.
                Tertarik pada pemanfaatan teknologi geospasial untuk mendukung perencanaan dan pengambilan keputusan
                berbasis data</p>

            <div class="social-icons">
                <!-- Instagram -->
                <a href="https://www.instagram.com/ararifrhmn_?igsh=MWJxb3d2YnRicjFlMg==" target="_blank"
                    title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>

                <!-- WhatsApp -->
                <a href="https://wa.me/6285754085145" target="_blank" title="WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>

                <!-- TikTok -->
                <a href="https://www.tiktok.com/@tanpalatte?_r=1&_t=ZS-91QAfSuVF6Q" target="_blank" title="TikTok">
                    <i class="fab fa-tiktok"></i>
                </a>

                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/in/arif-rhmn-3a71552b1?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                    target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>

            <a class="btn" href="DATA/CV ARIF RAHMAN.pdf">Download CV</a>
        </div>

        <div class="hero-img">
            <img src="Foto/ARF.png" alt="Foto Kamu" />
        </div>
    </section>



    <!-- SKILLS -->
    <section class="skills" id="services">
        <h2 class="skills-title">My Skills</h2>

        <div class="skills-container">

            <div class="skill-card only-icon">
                <img src="Foto/qgis-removebg-preview.png" alt="QGIS Icon">
            </div>

            <div class="skill-card only-icon">
                <img src="Foto/arcmap-removebg-preview.png" alt="ARCMAP Icon">
            </div>

            <div class="skill-card only-icon">
                <img src="Foto/word.png" alt="word Icon">
            </div>

            <div class="skill-card only-icon">
                <img src="Foto/html.png" alt="HTML Icon">
            </div>

            <div class="skill-card only-icon">
                <img src="Foto/css-3.png" alt="CSS Icon">
            </div>

            <div class="skill-card only-icon">
                <img src="Foto/js.png" alt="JS Icon">
            </div>

            <div class="skill-card only-icon">
                <img src="Foto/php.png" alt="PHP Icon">
            </div>

        </div>
    </section>


    <!-- PORTFOLIO -->
    <section class="portfolio" id="portfolio">
        <h2 class="portfolio-title">My Portofolio</h2>

        <div class="portfolio-grid">

            <!-- CARD 1 -->
            <div class="portfolio-card">
                <img src="Foto/hasilwebdesa.png" alt="Project WebGIS">
                <div class="p-content">
                    <h3>WebGIS Desa Loksado</h3>
                    <p>Pembuatan WebGIS Desa menggunakan Leaflet, GeoJSON, HTML, CSS, JS, dan PHP.</p>
                    <a href="https://desaloksado.id/" class="p-btn"><i class="fa-solid fa-up-right-from-square"></i>
                        Lihat</a>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="portfolio-card">
                <img src="Foto/Hasilnarsum.png" alt="Peta Tematik">
                <div class="p-content">
                    <h3>Peta Tematik Dalam Bentuk WEB</h3>
                    <p>Pembuatan WebGIS Peta Tematik Wilayah kampus ULM BJM menggunakan Leaflet, GeoJSON, HTML, CSS, JS,
                        dan
                        PHP.</p>
                    <a href="Foto/Hasilnarsum.png" class="p-btn"><i class="fa-solid fa-up-right-from-square"></i>
                        Lihat</a>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="portfolio-card">
                <img src="Foto/hasillaporanmagang.png" alt="Analisis Banjir">
                <div class="p-content">
                    <h3>Hasil Laporan Magang</h3>
                    <p>Pembuatan Hasil Laporan Magang dalam bentuk Web</p>
                    <a href="https://visits.id/Paparan" class="p-btn"><i class="fa-solid fa-up-right-from-square"></i>
                        Lihat</a>
                </div>
            </div>

        </div>
    </section>
    <!-- EXPERIENCE -->
    <section class="experience" id="experience">
        <h2 class="section-title">My Experience</h2>

        <div class="experience-container">

            <!-- Card 1 -->
            <div class="exp-card">
                <div class="exp-img">
                    <img src="Foto/magang.jpg" alt="Magang Bappelitbangda HSS">
                </div>
                <h3>Magang – Bappelitbangda HSS</h3>
                <p>
                    Saya terlibat dalam analisis data geospasial, pemetaan berbasis SIG, dan pengembangan WebGIS sebagai
                    penerapan teknologi geospasial.
                </p>
                <span class="exp-year">2025</span>
            </div>

            <!-- Card 2 -->
            <div class="exp-card">
                <div class="exp-img">
                    <img src="Foto/kkl 2.jpg" alt="KKL 2 Pemetaan Desa">
                </div>
                <h3>KKL 2 – Sebagai Ketua Kajian WebGIS</h3>
                <p>
                    Berkesempatan memimpin tim dalam Pembuatan website desa Loksado.
                </p>
                <span class="exp-year">2025</span>
            </div>


            <!-- Card 3 -->
            <div class="exp-card">
                <div class="exp-img">
                    <img src="Foto/surver bpbd.jpg" alt="Analisis GIS Dasar">
                </div>
                <h3>Tim survey BPBD Di Kabupaten Barito kuala</h3>
                <p>
                    Tim Surveyor
                </p>
                <span class="exp-year">2024</span>
            </div>

            <!-- Card 4 -->
            <div class="exp-card">
                <div class="exp-img">
                    <img src="Foto/narsum.jpg" alt="Analisis GIS Dasar">
                </div>
                <h3>Workshop Basic WebGIS Development</h3>
                <p>
                    Berkesempatan Menjadi Narasumber dalam Workshop Basic WebGIS Development yang diadakan oleh
                    Program Studi Geografi Universitas Lambung Mangkurat.
                </p>
                <span class="exp-year">2025</span>
            </div>

        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact" id="contact">
        <h2 class="section-title">Contact Me</h2>

        <div class="contact-container">
            <div class="contact-info">
                <h3>Get in Touch</h3>
                <p>Silakan hubungi saya jika ingin bekerja sama, bertanya seputar GIS, atau proyek WebGIS.</p>

                <div class="contact-details">
                    <p><i class="fa-solid fa-envelope"></i>ararifrahman00@gmail.com</p>
                    <p><i class="fa-solid fa-phone"></i> +62 857-5408-5145</p>
                    <p><i class="fa-solid fa-location-dot"></i> Banjarmasin, Kalimantan Selatan</p>
                </div>

                <div class="contact-social">
                    <a href="https://www.instagram.com/ararifrhmn_" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/6285754085145" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.linkedin.com/in/arif-rhmn" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <form class="contact-form">
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Email Address" required>
                <textarea rows="5" placeholder="Your Message" required></textarea>
                <button type="submit" class="btn send-btn">Send Message</button>
            </form>
        </div>
    </section>






</body>

</html>