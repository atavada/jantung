@extends('layouts.master')

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
            <a href="#" class="download-btn"><i class="bx bxl-play-store"></i> K-Mean</a>
            <a href="#" class="download-btn"><i class="bx bxl-apple"></i> Naive Bayes</a>
        </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
        <img src="/img/jantung.png" class="img-fluid" alt="">
        </div>
    </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
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
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-atom"></i>
                    <h4>Molestiae dolor</h4>
                    <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                <i class="bx bx-id-card"></i>
                    <h4>Explicabo consectetur</h4>
                    <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
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
            <ul>
                <li><i class="bi bi-check"></i> Et praesentium laboriosam architecto nam .</li>
                <li><i class="bi bi-check"></i> Eius et voluptate. Enim earum tempore aliquid. Nobis et sunt consequatur. Aut repellat in numquam velit quo dignissimos et.</li>
                <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
        </div>
        </div>

    </div>
    </section><!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Gallery</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

    </div>

    <div class="container-fluid" data-aos="fade-up">
        <div class="gallery-slider swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="assets/img/gallery/gallery-1.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-1.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/gallery-2.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-2.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/gallery-3.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-3.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/gallery-4.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-4.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/gallery-5.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-5.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/gallery-6.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-6.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/gallery-7.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-7.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/gallery-8.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-8.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/gallery-9.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-9.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/gallery-10.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-10.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/gallery-11.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-11.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/gallery-12.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-12.png" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
        </div>

    </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
        <h2>Testimonials</h2>
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

            <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                </div>
            </div>

                </div>
            <div class="swiper-pagination"></div>
        </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
    <div class="container">

        <div class="section-title">
            <h2>Pricing</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">

        <div class="col-lg-4 box" data-aos="fade-right">
            <h3>Free</h3>
            <h4>$0<span>per month</span></h4>
            <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
        </div>

        <div class="col-lg-4 box featured" data-aos="fade-up">
            <h3>Business</h3>
            <h4>$29<span>per month</span></h4>
            <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
        </div>

        <div class="col-lg-4 box" data-aos="fade-left">
            <h3>Developer</h3>
            <h4>$49<span>per month</span></h4>
            <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
        </div>

        </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">

            <h2>Frequently Asked Questions</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="accordion-list">
        <ul>
            <li data-aos="fade-up">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                    </p>
                </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                    </p>
                </div>
            </li>

        </ul>
        </div>

    </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6 info">
                    <i class="bx bx-map"></i>
                    <h4>Address</h4>
                    <p>A108 Adam Street,<br>New York, NY 535022</p>
                </div>
            <div class="col-lg-6 info">
                <i class="bx bx-phone"></i>
                <h4>Call Us</h4>
                <p>+1 5589 55488 55<br>+1 5589 22548 64</p>
            </div>
            <div class="col-lg-6 info">
                <i class="bx bx-envelope"></i>
                <h4>Email Us</h4>
                <p>contact@example.com<br>info@example.com</p>
            </div>
            <div class="col-lg-6 info">
                <i class="bx bx-time-five"></i>
                <h4>Working Hours</h4>
                <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
            </div>
            </div>
        </div>

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
    </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection
