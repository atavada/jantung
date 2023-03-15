@extends('layouts.master')
@section('menu', '#home')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
    <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
        <div>
            <h1>Hearth Screening ADH</h1>
            <h5>Hearth Screening ADH adalah sebuah situs yang bertujuan untuk memberikan informasi dan layanan yang berkaitan dengan penyakit jantung. Website ini didesain dengan tampilan yang menarik dan mudah digunakan untuk memudahkan pengguna dalam mencari informasi mengenai penyakit jantung.</h5>
            <h5>Terdapat fitur untuk melakukan pengecekan risiko terkena penyakit jantung dengan menggunkan Algoritma K-Mean dan Naive Bayes.</h5>
            <a href="/kmeans" class="download-btn"><i class="bx bxl-play-store"></i> K-Mean</a>
            <a href="/bayes" class="download-btn"><i class="bx bxl-apple"></i> Naive Bayes</a>
        </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
            <img src="/img/jantung.png" class="ms-auto" style="width:336px ; height:456px" alt="">
        </div>
    </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= App +--Features Section ======= -->
    <section id="features" class="check">
    <div class="container">

        <div class="section-title">
            <h2>Fitur</h2>
            <p>Website ini memiliki fitur utama dalam cek penyakit jantung dengan berdasar pada Algoritma K-Means dan Naive Bayes. Tujuan dari
            algoritma K-Means adalah untuk meningkatkan efisiensi dalam pengolahan data dan memudahkan pengambilan keputusan.
            Naive Bayes menggunakan metode probabilistik untuk menghitung probabilitas terjadinya suatu kejadian berdasarkan informasi yang tersedia.</p>
        </div>

        <div class="row no-gutters">
        <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                <i class="bx bx-receipt"></i>
                    <h4>K-Means</h4>
                    <p>Cek penyakit jantung dengan menggunakan algoritma K-Means</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-cube-alt"></i>
                    <h4>Naive Bayes</h4>
                    <p>Cek penyakit jantung dengan menggunakan algoritma Naive Bayes</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-images"></i>
                    <h4>Solusi umum</h4>
                    <p>Menampilkan sebuah solusi dari hasil yang didapat dengan solusi umum </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-shield"></i>
                    <h4>Rekomendasi Obat</h4>
                    <p>Menampilkan sebuah rekomendasi obat berdasarkan hasil yang didapat</p>
                </div>
            </div>
            </div>
        </div>
        <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/features.svg" class="img-fluid" alt="">
        </div>
        </div>

    </div>
    </section><!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
    <div class="container">

        <div class="row content">
        <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-1.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Algoritma K-Means</h3>
            <p>
                K-Means dapat digunakan dalam cek penyakit jantung untuk melakukan pengelompokan atau clustering data berdasarkan karakteristik pasien yang memiliki risiko penyakit jantung yang sama. Dengan K-Means, data pasien dapat dikelompokkan ke dalam beberapa kelompok atau cluster berdasarkan kemiripan karakteristik tertentu.
            </p>
            <p>
                Tujuan dari penggunaan K-Means dalam cek penyakit jantung adalah untuk membantu dalam mengidentifikasi kelompok pasien yang berisiko tinggi terkena penyakit jantung. Dalam website ini, K-Means dikelompokkan  berdasarkan faktor risiko tertentu, yaitu tekanan darah, kadar kolestrol, dan detak jantung maksimal.
            </p>
            <p>
                Tujuan dari penggunaan K-Means dalam cek penyakit jantung adalah untuk membantu dokter atau tenaga medis dalam mengambil keputusan yang lebih baik dan lebih efektif dalam menangani pasien dengan risiko penyakit jantung. Selain itu, K-Means dapat membantu pasien untuk memperoleh pemahaman yang lebih baik mengenai risiko kesehatan mereka dan memperbaiki gaya hidup untuk mencegah terjadinya penyakit jantung.
            </p>
        </div>
        </div>

        <div class="row content">
            <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-2.png" class="img-fluid" alt="">
        </div>
            <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                <h3>Algoritma Naive Bayes</h3>
                    <p>
                        Tujuan dari menggunakan algoritma Naive Bayes dalam cek penyakit jantung adalah untuk membantu dalam melakukan pengecekan risiko terkena penyakit jantung berdasarkan data riwayat kesehatan dan faktor risiko.
                    </p>
                    <p>
                        Dalam hal ini, Naive Bayes digunakan untuk memprediksi kemungkinan seseorang terkena penyakit jantung berdasarkan faktor-faktor risiko yang telah diketahui sebelumnya, yaitu tekanan darah, kadar kolestrol, dan detak jantung maksimum.
                    </p>
                    <p>
                        Algoritma Naive Bayes bekerja dengan cara menghitung probabilitas terjadinya suatu kejadian (penyakit jantung) berdasarkan informasi yang tersedia (faktor risiko). Dalam hal ini, Naive Bayes dapat menghitung probabilitas seseorang terkena penyakit jantung dengan menggabungkan informasi dari semua faktor risiko yang ada.
                    </p>
                    <p>
                        Tujuan dari menggunakan algoritma Naive Bayes dalam cek penyakit jantung adalah untuk membantu dalam mengidentifikasi risiko terkena penyakit jantung pada seseorang dan memberikan rekomendasi tindakan yang perlu diambil, seperti perubahan gaya hidup atau pengobatan lebih lanjut. Hal ini dapat membantu individu untuk mengambil tindakan preventif yang tepat dan memperbaiki kesehatan jantung mereka.
                    </p>
            </div>
        </div>

        <div class="row content">
        <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-3.png" class="img-fluid" alt="">
        </div>
            <div class="col-md-8 pt-5" data-aos="fade-up">
                    <h3>Solusi Umum</h3>
                    <p>Setelah hasil yang didapat dari perhitungan algoritma K-Means dan Naive Bayes akan menghasilkan sebuah solusi umum yang nantinya tergantung output yang dihasilkan</p>
                    <p>
                    Solusi yang ditampilkan akan berdsarkan dari sumber-sumber terpercaya seperti jurnal, artikal,dan sebaginnya
                    </p>
            </div>
        </div>

        <div class="row content">
        <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-4.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Rekomendasi Obat</h3>
                <p class="">
                Setelah hasil yang didapat dari perhitungan algoritma K-Means dan Naive Bayes akan juga menghasilakn sebuah rekomendasi obat berdsarkan output yang tampil
                </p>
                <p>
                Rekomendasi Obat akan berpedoman pada jurnal kesehatan khusus penyakit jantung, artikel, website kesehatan yang dibuat pemerintah, dan sebagainnya.
                </p>
        </div>
        </div>

    </div>
    </section>
    <!-- End Details Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="profil" class="contactme section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
        <h2>Profil Pembuat</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
            <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
            </div>
            </div>

            <div class="swiper-slide">
            <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
            </div>
            </div>

            <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>
            </div>

        </div>
            <div class="swiper-pagination"></div>
        </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
                    <div class="form-group">
                        <input placeholder="Your Name" type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="form-group mt-3">
                        <input placeholder="Your Email" type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group mt-3">
                        <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea placeholder="Message" class="form-control" name="message" rows="5" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>
            
        </div>

    </div>

    </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection
