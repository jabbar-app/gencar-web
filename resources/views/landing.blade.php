@extends('template.main')

@section('content')
  <!-- rts banner area start -->
  <div class="rts-banner-area-one banner-five rts-section-gap">
    <div class="container pt--120 pb--120">
      <div class="row align-items-center justify-content-md-center justify-content-lg-start">
        <div class="col-lg-6 col-md-10 order-2 order-lg-0">
          <div class="banner-one-content-left">
            <h1 class="title split-collab">
              Generasi <br> <span>Cakrawala 8</span>
            </h1>
            <p class="disc">
              Struggling to find PPC experts who really understand your business our world-class marketers would love to
              help.
            </p>
            <a href="{{ route('register') }}" class="rts-btn btn-primary-5 arrow-rotate">Daftar Sekarang <i
                class="fa-light fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-6 col-md-10 d-flex justify-content-lg-end justify-content-center">
          <div class="banner-one-right-content-with-img">
            <img src="{{ asset('assets/images/gencar-7.webp') }}" alt="banner_image">
          </div>
        </div>
      </div>
    </div>

    <div class="radious-shape">
      <img class="right-bottom" src="{{ asset('assets/images/shape/07.png') }}" alt="banner_image">
      <img class="mid-top" src="{{ asset('assets/images/shape/08.png') }}" alt="banner_image">
      <img class="left-top" src="{{ asset('assets/images/shape/07.png') }}" alt="banner_image">
      <img class="center-bottom" src="{{ asset('assets/images/shape/08.png') }}" alt="banner_image">
    </div>

    <div class="container">
      <div class="brand-area-inner">
        <div class="row">
          <div class="col-lg-12">
            <div class="brand-title-area text-center">
              <h3 class="title">Kolaborasi membangun negeri</h3>
              <div class="brand-left-short-title-one">
                <ul class="star-rating">
                  <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                  <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                  <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                  <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                  <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                </ul>
                <p class="disc">Ayo gabung dalam gerakan kolaboratif dengan berbagai organisasi dan komunitas</p>
              </div>
            </div>
          </div>
        </div>
        <div class="brand-slider-area">
          <div class="light swiper rts-brandSlider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="brand-inner">
                  <a href="#"><img src="{{ asset('assets/images/logo-fim.png') }}" alt="brand"
                      style="height: 60px;"></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="brand-inner">
                  <a href="#"><img src="{{ asset('assets/images/fim-delser.png') }}" alt="brand"
                      style="height: 100px; margin-top: -20px;"></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="brand-inner">
                  <a href="#"><img src="{{ asset('assets/images/fim-medan.png') }}" alt="brand"
                      style="height: 100px; margin-top: -20px;"></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="brand-inner">
                  <a href="#"><img src="{{ asset('assets/images/logo-gencar-ijo.png') }}" alt="brand"
                      style="height: 60px;"></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="brand-inner">
                  <a href="#"><img src="{{ asset('assets/images/arsenal.png') }}" alt="brand"
                      style="height: 60px;"></a>
                </div>
              </div>
            </div>
          </div>

          <div class="dark swiper rts-brandSlider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="brand-inner">
                  <a href="#"><img src="assets/images/brand/25.png" alt="brand"></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="brand-inner">
                  <a href="#"><img src="assets/images/brand/26.png" alt="brand"></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="brand-inner">
                  <a href="#"><img src="assets/images/brand/27.png" alt="brand"></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="brand-inner">
                  <a href="#"><img src="assets/images/brand/28.png" alt="brand"></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="brand-inner">
                  <a href="#"><img src="assets/images/brand/29.png" alt="brand"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- rts banner area end -->

  <!-- rts servgice area start -->
  <div class="rts-service-area-five rts-section-gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="title-wrapper-between justify-content-center align-items-center">
            <div class="title-style-one-left text-center">
              <span class="pre text-center skew-up">Syarat dan Ketentuan</span>
              <h2 class="title skew-up text-center">Calon Peserta<br>
                Generasi Cakrawala 8</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="section-inner">
        <div class="row mt--10 g-5">
          <div class="col-lg-12">
            <div class="overflow-right-div">
              <div class="service-swiper-main-wrapper-2">
                <div class="swiper mySwiper-service-five pb--120">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <!-- ingle service area start -->
                      <div class="single-service-style-two">
                        <div class="icon">
                          <img src="{{ asset('assets/img/logo_gencar.png') }}" alt="service" style="height: 24px;">
                        </div>
                        <a href="service-single.html">
                          <h6 class="title">Profil</h6>
                        </a>
                        <p class="disc">
                          Pemuda/i berusia 17 s/d 25 tahun dan berdomisili di Sumatera Utara.
                        </p>
                        <a href="service-single.html" class="btn-border-bottom">Learn more <i
                            class="fa-sharp fa-light fa-arrow-right"></i></a>
                      </div>
                      <!-- ingle service area end -->
                    </div>
                    <div class="swiper-slide">
                      <!-- ingle service area start -->
                      <div class="single-service-style-two">
                        <div class="icon">
                          <img src="{{ asset('assets/img/logo_gencar.png') }}" alt="service" style="height: 24px;">
                        </div>
                        <a href="service-single.html">
                          <h6 class="title">Komitmen</h6>
                        </a>
                        <p class="disc">
                          Berkomitmen tinggi untuk mengikuti pelatihan dan siap berkontribusi minimal selama setahun
                          setelah pelatihan dilaksanakan.
                        </p>
                        <a href="service-single.html" class="btn-border-bottom">Learn more <i
                            class="fa-sharp fa-light fa-arrow-right"></i></a>
                      </div>
                      <!-- ingle service area end -->
                    </div>
                    <div class="swiper-slide">
                      <!-- ingle service area start -->
                      <div class="single-service-style-two">
                        <div class="icon">
                          <img src="{{ asset('assets/img/logo_gencar.png') }}" alt="service" style="height: 24px;">
                        </div>
                        <a href="service-single.html">
                          <h6 class="title">Kontribusi</h6>
                        </a>
                        <p class="disc">
                          Memiliki minat belajar yang tinggi dan tertarik di bidang pengabdian dan kegiatan sosial.
                        </p>
                        <a href="service-single.html" class="btn-border-bottom">Learn more <i
                            class="fa-sharp fa-light fa-arrow-right"></i></a>
                      </div>
                      <!-- ingle service area end -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="button-pagination-area">
          <div class="swiper-button-next"><i class="fa-light fa-arrow-right"></i></div>
          <div class="swiper-button-prev"><i class="fa-light fa-arrow-left"></i></div>
          <div class="swiper-pagination2"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- rts servgice area End -->

  <!-- rts product area start -->
  <div class="rts-product-area bg-gray-2">
    <div class="container-2">
      <div
        class="row justify-content-center align-items-center single-product-list single-product-list-2 pt--125 pb--125 pb_sm--0 pt_sm--60">
        <div class="col-lg-5 col-md-6 col-sm-10">
          <div class="left-image">
            <div class="thumbnail">
              <img src="{{ asset('assets/images/literasi.jpg') }}" alt="Literasi">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-10 offset-lg-1">
          <div class="portfolio-content-wrapper-list">
            <h2 class="title"><span>01.</span> Literasi</h2>
            <p class="disc">
              Berfokus pada pengembangan budaya membaca, diskusi intelektual, dan literasi digital. Berkolaborasi dengan
              komunitas lokal untuk meningkatkan minat baca dan literasi.
            </p>
            <div class="product-service-wrapper">
              <!-- single service -->
              <div class="single-service">
                <i class="fa-light fa-check"></i>
                <p>Lapak Literasi</p>
              </div>
              <!-- single service end -->
              <!-- single service -->
              <div class="single-service">
                <i class="fa-light fa-check"></i>
                <p>Review Buku</p>
              </div>
              <!-- single service end -->
              <!-- single service -->
              <div class="single-service">
                <i class="fa-light fa-check"></i>
                <p>Muda Bicara</p>
              </div>
              <!-- single service end -->
            </div>
          </div>
        </div>
      </div>
      <div
        class="row justify-content-center align-items-center section-separator-top-bg-white single-product-list single-product-list-2 pt--125 pb--125 pb_sm--0 pt_sm--60">
        <div class="col-lg-6 col-md-6 col-sm-10 order-2 order-md-0">
          <div class="portfolio-content-wrapper-list">
            <h2 class="title"><span>02.</span> Rumah Belajar (Rumbel)</h2>
            <p class="disc">
              Divisi Rumah Belajar (Rumbel) bertanggung jawab dalam pengelolaan program pendidikan bagi anak-anak dan
              masyarakat sekitar. Menciptakan ruang belajar yang mandiri dan berkelanjutan. Berkoordinasi dengan warga
              sekitar untuk meningkatkan efektivitas program.
            </p>
            <div class="product-service-wrapper">
              <!-- single service -->
              <div class="single-service">
                <i class="fa-light fa-check"></i>
                <p>Ruang Belajar</p>
              </div>
              <!-- single service end -->
              <!-- single service -->
              <div class="single-service">
                <i class="fa-light fa-check"></i>
                <p>Ruang Kesenian</p>
              </div>
              <!-- single service end -->
              <!-- single service -->
              <div class="single-service">
                <i class="fa-light fa-check"></i>
                <p>Ruang Kreativitas</p>
              </div>
              <!-- single service end -->
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-10 offset-lg-1">
          <div class="right-image">
            <div class="thumbnail">
              <img src="{{ asset('assets/images/rumbel.jpg') }}" alt="Rumbel">
            </div>
          </div>
        </div>
      </div>
      <div
        class="row justify-content-center align-items-center section-separator-top-bg-white single-product-list single-product-list-2 pt--125 pb--125 pb_sm--0 pt_sm--60">
        <div class="col-lg-5 col-md-6 col-sm-10">
          <div class="left-image">
            <div class="thumbnail">
              <img src="{{ asset('assets/images/cakrawala.JPG') }}" alt="product">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-10 offset-lg-1">
          <div class="portfolio-content-wrapper-list">
            <h2 class="title"><span>03.</span> Program Cakrawala</h2>
            <p class="disc">
              Merancang dan mengimplementasikan program sosial dan pendidikan. Mengidentifikasi kebutuhan masyarakat dan
              target sasaran program. Menjadi fasilitator serta melakukan monitoring dan evaluasi program. Melaporkan
              hasil kegiatan dan bertanggung jawab kepada koordinator.
            </p>
            <div class="product-service-wrapper">
              <!-- single service -->
              <div class="single-service">
                <i class="fa-light fa-check"></i>
                <p>Sosial dan Pendidikan</p>
              </div>
              <div class="single-service">
                <i class="fa-light fa-check"></i>
                <p>Perencanaan dan Implementasi</p>
              </div>
              <div class="single-service">
                <i class="fa-light fa-check"></i>
                <p>Fasilitator Program</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- rts product area end -->

  <!-- rts counter up area start -->
  <div class="rts-counterup-area rts-section-gap">
    <div class="container-2">
      <div class="row pb--80">
        <div class="col-lg-12">
          <div class="counter-upmain-wrapper-style-one">
            <!-- single counter up area start -->
            <div class="single-counter-up-five">
              <div class="icon"><img src="assets/images/counter/07.svg" alt=""></div>
              <h3 class="title"><span class="counter">8</span>x</h3>
              <p>Pelatihan</p>
            </div>
            <!-- single counter up area end -->
            <!-- single counter up area start -->
            <div class="single-counter-up-five">
              <div class="icon"><img src="assets/images/counter/08.svg" alt=""></div>
              <h3 class="title"><span class="counter">200</span>+</h3>
              <p>Alumni</p>
            </div>
            <!-- single counter up area end -->
            <!-- single counter up area start -->
            <div class="single-counter-up-five">
              <div class="icon"><img src="assets/images/counter/09.svg" alt=""></div>
              <h3 class="title"><span class="counter">48</span>+</h3>
              <p>Program</p>
            </div>
            <!-- single counter up area end -->
            <!-- single counter up area start -->
            <div class="single-counter-up-five">
              <div class="icon"><img src="assets/images/counter/10.svg" alt=""></div>
              <h3 class="title"><span class="counter">2018</span></h3>
              <p>Tahun didirikan</p>
            </div>
            <!-- single counter up area end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- rts counter up area end -->

  <!-- rts call to action area start -->
  <div class="rts-call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="call-to-action-area-5">
            <h2 class="title skew-up">Ayo bergabung dan bertumbuh bersama di <br> Generasi Cakrawala 8</h2>
            <p class="disc">Program Pelatihan dan Kepemimpinan Terbaik dari FIM Medan & FIM Deli Serdang.</p>
            <div class="button-area">
              <a href="{{ route('register') }}" class="rts-btn btn-secondary-5"><i class="fa-light fa-paper-plane"></i>Daftar Sekarang</a>
              <a href="https://wa.me/6282267103015" target="_blank" class="rts-btn btn-secondary-5-1">Tanya Admin</a>
            </div>
            <div class="shape-image">
              <img src="assets/images/cta/03.webp" alt="" class="one">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- rts call to action area end -->

  <!-- rts-case studies-area start -->
  <div class="rts-case-studies-5 rts-section-gap2">
    <div class="container-2">
      <div class="row">
        <div class="col-lg-12">
          <div class="title-wrapper-between justify-content-center">
            <div class="title-style-one-left text-center">
              <span class="pre skew-up text-center">Hal-hal yang perlu kamu tahu</span>
              <h2 class="title skew-up text-center">Sebelum menjadi bagian dari <br>
                Generasi Cakrawala 8</h2>
            </div>
            <!-- button-area next prev area -->
            <div class="next-prev-btn-area">

            </div>
            <!-- button-area next prev end -->
          </div>
        </div>
      </div>
      <div class="row mt--60">
        <div class="col-lg-12">
          <div class="single-portfolio-box-style style-five d-block">
            <div class="inner-content">
              <div class="left-content">
                <p class="pre text-center">F.A.Q.</p>
                <a href="#">
                  <h3 class="title animated fadeIn text-center">Pertanyaan yang sering diajukan</h3>
                </a>
                <p class="desc">
                <ul>
                  <li>Kak, pelatihan nya online atau offline ya kak?</li>
                  <li class="text-danger">Hallo kakak, untuk pelatihan kali ini kita full offline ya kakak, terima
                    kasih</li>
                </ul>

                <ul>
                  <li>Kak, kalau aku tidak berasal dari Medan maupun Deli Serdang, tapi sekarang lagi kuliah di Medan/Deli
                    Serdang, apakah bisa daftar?</li>
                  <li class="text-danger">Hallo kakak, sangat bisa.</li>
                </ul>

                <ul>
                  <li>Kak, kalau saya mahasiswa akhir dan sudah bekerja, apakah masih bisa mendaftar?</li>
                  <li class="text-danger">Halo kak, selama usia masih 16- 25 tahun boleh banget ya kak.</li>
                </ul>

                <ul>
                  <li>Kak, apakah bisa mengikuti pelatihan tidak full atau hanya 1-2 hari?</li>
                  <li class="text-danger">Hallo kak, mohon maaf kakak, jika kamu tidak mengikuti rangkaian kegiatan dari
                    awal sampai akhir, maka
                    kamu tidak di anggap lulus sebagai alumni generasi cakrawala angkatan ke 8</li>
                </ul>

                <ul>
                  <li>Kak, apakah pelatihan ini gratis?</li>
                  <li class="text-danger">Hallo kak, akan ada commitment fee setelah kamu di nyatakan lulus wawancara.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single-portfolio-box-style style-five align-items-start">
            <a href="#" class="thumbnail">
              <img src="{{ asset('assets/images/gencar-7.webp') }}" alt="product">
            </a>
            <div class="inner-content">
              <div class="left-content">
                <p class="pre">Forum Indonesia Muda (FIM) Medan dan Deli Serdang</p>
                <a href="#">
                  <h3 class="title animated fadeIn">Sejarah dan Latar Belakang</h3>
                </a>
                <p class="desc">
                  Forum Indonesia Muda (FIM) merupakan forum independen yang beranggotakan pemuda/i dari berbagai latar
                  belakang aktivitas, universitas, maupun lembaga kepemudaan dari seluruh Indonesia. Didirikan pada tahun
                  2003 oleh Elmir Amien dan Siti Markhamah Fauzie (Pak'E dan Bunda), forum ini bertujuan untuk
                  meningkatkan kapasitas dan kompetensi kepemimpinan serta pendidikan karakter pemuda/i Indonesia agar
                  dapat berkontribusi dalam pembangunan bangsa.
                </p>

                <p class="desc">
                  Di Sumatera Utara, FIM berekspansi menjadi dua wilayah, yaitu FIM Medan dan FIM Deli Serdang. Dalam
                  upaya pengembangan kepemimpinan dan kontribusi sosial, FIM Sumatera Utara membentuk Generasi Cakrawala
                  (GenCar) pada tahun 2018 sebagai inkubator kepemimpinan bagi pemuda/i di wilayah tersebut.
                </p>

                {{-- <a href="#" class="rts-btn btn-primary-4 arrow-rotate">Selengkapnya <i
                    class="fa-light fa-arrow-right"></i></a> --}}
              </div>
            </div>
          </div>
          <div class="single-portfolio-box-style style-five align-items-start">
            <a href="#" class="thumbnail">
              <img src="{{ asset('assets/images/gencar-7.webp') }}" alt="product">
            </a>
            <div class="inner-content">
              <div class="left-content">
                <p class="pre">Forum Indonesia Muda (FIM) Medan dan Deli Serdang</p>
                <a href="#">
                  <h3 class="title animated fadeIn">Generasi Cakrawala (GenCar)</h3>
                </a>
                <p class="desc">Generasi Cakrawala merupakan wadah pengembangan karakter, kepemimpinan, serta sarana
                  bagi pemuda/i Sumatera Utara untuk berkontribusi di masyarakat. GenCar menekankan pentingnya empati,
                  pemikiran kritis, dan kreativitas dalam menyelesaikan permasalahan sosial.
                </p>

                {{-- <a href="#" class="rts-btn btn-primary-4 arrow-rotate">Selengkapnya <i
                    class="fa-light fa-arrow-right"></i></a> --}}
              </div>
            </div>
          </div>
          <div class="single-portfolio-box-style style-five align-items-start">
            <a href="#" class="thumbnail">
              <img src="{{ asset('assets/images/gencar-7.webp') }}" alt="product">
            </a>
            <div class="inner-content">
              <div class="left-content">
                <p class="pre">Forum Indonesia Muda (FIM) Medan dan Deli Serdang</p>
                <a href="#">
                  <h3 class="title animated fadeIn">Pelatihan Generasi Cakrawala</h3>
                </a>
                <p class="desc">
                  Sebelum menjadi bagian dari Generasi Cakrawala, calon anggota harus mengikuti serangkaian pelatihan yang
                  telah diselenggarakan di berbagai wilayah di Sumatera Utara sejak tahun 2018. Berikut adalah sejarah
                  perjalanan pelatihan GenCar:
                <ol>
                  <li>GenCar 1 - Pemuda Kontributif, Suarakan Aksimu</li>
                  <li>GenCar 2 - Aksi Pemuda, Berbakti Untuk Bangsa</li>
                  <li>Pelatihan Wilayah Labuhanbatu Raya</li>
                  <li>GenCar 3 - Sinergi Pemuda Labuhanbatu Raya</li>
                  <li>GenCar 4 - Pemuda Berkarya, Indonesia Berdaya (Pelatihan Daring)</li>
                  <li>GenCar 5 - Bangun Empati, Sinergi Untuk Negeri</li>
                  <li>GenCar 6 - Kolaborasi Aksi, Bangun Asa Untuk Negeri</li>
                  <li>GenCar 7 - Akselerasi Generasi Baru Sumatera Utara</li>
                </ol>
                Pada tahun ini, Generasi Cakrawala akan memasuki rekrutmen generasi yang ke-8.
                </p>

                <a href="{{ route('register') }}" class="rts-btn btn-primary-4 arrow-rotate">Daftar Sekarang <i
                    class="fa-light fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="bottom-btn text-center">
            <a href="service.html" class="rts-btn btn-primary-4-border arrow-rotate">Lihat semua kegiatan <i
                class="fa-light fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- rts-case studies-area end -->

  <!-- expart team area start -->
  <div class="expart-team-area-7 rts-section-gapTop rts-section-gap2Bottom team-five">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="title-style-one-center">
            <span class="pre skew-up text-center">Alumni Gencar</span>
            <h2 class="title skew-up text-center">Ayo gabung dan berjejaring dengan para <br> Alumni Generasi Cakrawala
            </h2>
          </div>
        </div>
      </div>
      {{-- <div class="row g-48 mt--10">
        <div class="col-lg-3 col-md-4 col-sm-6">
          <!-- single teama area start -->
          <div class="single-team-area-7">
            <div class="thumbnail">
              <img src="assets/images/team/01.png" alt="team">
            </div>
            <h6 class="title">Kevin Smith</h6>
            <span class="designation">Founder & CEO</span>
          </div>
          <!-- single teama area end -->
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <!-- single teama area start -->
          <div class="single-team-area-7">
            <a href="#" class="thumbnail">
              <img src="assets/images/team/02.png" alt="team">
            </a>
            <h6 class="title">David Daily</h6>
            <span class="designation">Head of Production</span>
          </div>
          <!-- single teama area end -->
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <!-- single teama area start -->
          <div class="single-team-area-7">
            <div class="thumbnail">
              <img src="assets/images/team/03.png" alt="team">
            </div>
            <h6 class="title">Taylor Johnson</h6>
            <span class="designation">Head of Marketing</span>
          </div>
          <!-- single teama area end -->
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <!-- single teama area start -->
          <div class="single-team-area-7">
            <div class="thumbnail">
              <img src="assets/images/team/04.png" alt="team">
            </div>
            <h6 class="title">Kevin Smith</h6>
            <span class="designation">Founder & CEO</span>
          </div>
          <!-- single teama area end -->
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <!-- single teama area start -->
          <div class="single-team-area-7">
            <div class="thumbnail">
              <img src="assets/images/team/05.png" alt="team">
            </div>
            <h6 class="title">Sarah Smith</h6>
            <span class="designation">Project Manager</span>
          </div>
          <!-- single teama area end -->
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <!-- single teama area start -->
          <div class="single-team-area-7">
            <div class="thumbnail">
              <img src="assets/images/team/06.png" alt="team">
            </div>
            <h6 class="title">Rick James</h6>
            <span class="designation">Creative Director</span>
          </div>
          <!-- single teama area end -->
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <!-- single teama area start -->
          <div class="single-team-area-7">
            <div class="thumbnail">
              <img src="assets/images/team/07.png" alt="team">
            </div>
            <h6 class="title">Allen Chang</h6>
            <span class="designation">Development Lead</span>
          </div>
          <!-- single teama area end -->
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <!-- single teama area start -->
          <div class="single-team-area-7">
            <div class="thumbnail">
              <img src="assets/images/team/08.png" alt="team">
            </div>
            <h6 class="title">David Larsson</h6>
            <span class="designation">Fun Atmosphere</span>
          </div>
          <!-- single teama area end -->
        </div>
      </div> --}}
    </div>
  </div>
  <!-- expart team area end -->

  <!-- campaign area start -->
  <div class="rts-campaign-area rts-section-gap2">
    <div class="container-2">
      <div class="section-inner">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-7 order-2 order-md-0">
            <div class="left-side-content">
              <h3 class="title">Nilai dan Prinsip Generasi Cakrawala</h3>
              <p class="desc">Generasi Cakrawala mengadopsi 7 Pilar Kepemimpinan dan 7 Pilar Karakter dari Forum
                Indonesia Muda sebagai nilai dasar dalam berorganisasi:
              </p>
              <h5>7 Pilar Kepemimpinan</h5>
              <ol>
                <li>Akhlak</li>
                <li>Mengenal diri</li>
                <li>Pengorganisasian</li>
                <li>Manajerial</li>
                <li>Komunikasi</li>
                <li>Pengambilan keputusan</li>
                <li>Kekuatan belajar</li>
              </ol>
              <h5>7 Pilar Karakter</h5>
              <ol>
                <li>Keteladanan</li>
                <li>Cinta kasih</li>
                <li>Integritas</li>
                <li>Keadilan</li>
                <li>Kebersahajaan</li>
                <li>Totalitas</li>
                <li>Solidaritas</li>
              </ol>

              <h5>5 Nilai Diri (Core Values) Generasi Cakrawala</h5>
              <ol>
                <li>Pembelajar</li>
                <li>Integritas</li>
                <li>Objektif</li>
                <li>Kolaboratif</li>
                <li>Bersahaja</li>
              </ol>
              <p class="desc">Dengan semangat kontribusi, Generasi Cakrawala terus berkembang sebagai wadah bagi
                pemuda/i Sumatera Utara
                dalam membangun masa depan yang lebih baik bagi diri mereka sendiri dan masyarakat.</p>

              <a href="{{ route('register') }}" class="rts-btn btn-primary-5 arrow-rotate">Daftar Sekarang <i
                  class="fa-light fa-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1 col-md-5">
            <div class="right-side-image">
              <img src="assets/images/product/28.webp" alt="">
              <div class="short-image"><img src="assets/images/product/28_1.webp" alt="" width="286">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- campaign area end -->


  <!-- client area start -->
  <div class="rts-section-gap2 rts-client-feedback-area-4 rts-client-feedback-area-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="title-style-one-center">
            <span class="pre skew-up">Dokumentasi kegiatan</span>
            <h2 class="title skew-up">Intip beberapa kegiatan <br> generasi cakrawala.</h2>
          </div>
        </div>
      </div>
      <div class="row g-48 mt--0 justify-content-sm-center">
        <div class="col-lg-4 col-md-6 col-sm-10">
          <img src="{{ asset('assets/images/gencar-7.webp') }}" alt="" class="single-testimonials-area p-0">
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10">
          <img src="{{ asset('assets/images/gencar-7.webp') }}" alt="" class="single-testimonials-area p-0">
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10">
          <img src="{{ asset('assets/images/gencar-7.webp') }}" alt="" class="single-testimonials-area p-0">
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10">
          <img src="{{ asset('assets/images/gencar-7.webp') }}" alt="" class="single-testimonials-area p-0">
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10">
          <img src="{{ asset('assets/images/gencar-7.webp') }}" alt="" class="single-testimonials-area p-0">
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10">
          <img src="{{ asset('assets/images/gencar-7.webp') }}" alt="" class="single-testimonials-area p-0">
        </div>
      </div>
      <div class="row mt--80">
        <div class="col-lg-12 d-flex justify-content-center">
          <a href="#" class="rts-btn btn-primary-4-border arrow-rotate">Lihat lebih banyak <i
              class="fa-light fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- client area end -->

  <!-- blog area start -->
  <div class="rts-section-gap2 rts-blog-area-one home-five">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="title-style-one-center">
            <span class="pre">Berita & Artikel</span>
            <h2 class="title">Liputan seputar gencar</h2>
          </div>
        </div>
      </div>
      <div class="row g-48 mt--0 justify-content-sm-center justify-content-md-start">
        <div class="col-lg-4 col-md-6 col-sm-10">
          <!-- single blog area start -->
          <div class="single-blog-area-style-one">
            <a href="#" class="thumbnail">
              <img src="{{ asset('assets/images/gencar-7.webp') }}" alt="blog-image">
            </a>
            <div class="inner-content-wrapper">
              <a href="#">
                <h6 class="title">
                  Pendaftaran Rekrutmen Generasi Cakrawal 8 Resmi Dibuka!
                </h6>
              </a>
              <div class="bottom-area">
                <span class="admin">Gencar</span>
                <span>•</span>
                <span class="date">16 Maret 2025</span>
              </div>
            </div>
          </div>
          <!-- single blog area end -->
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10">
          <!-- single blog area start -->
          <div class="single-blog-area-style-one">
            <a href="#" class="thumbnail">
              <img src="{{ asset('assets/images/gencar-7.webp') }}" alt="blog-image">
            </a>
            <div class="inner-content-wrapper">
              <a href="#">
                <h6 class="title">
                  Pendaftaran Rekrutmen Generasi Cakrawal 8 Resmi Dibuka!
                </h6>
              </a>
              <div class="bottom-area">
                <span class="admin">Gencar</span>
                <span>•</span>
                <span class="date">16 Maret 2025</span>
              </div>
            </div>
          </div>
          <!-- single blog area end -->
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10">
          <!-- single blog area start -->
          <div class="single-blog-area-style-one">
            <a href="#" class="thumbnail">
              <img src="{{ asset('assets/images/gencar-7.webp') }}" alt="blog-image">
            </a>
            <div class="inner-content-wrapper">
              <a href="#">
                <h6 class="title">
                  Pendaftaran Rekrutmen Generasi Cakrawal 8 Resmi Dibuka!
                </h6>
              </a>
              <div class="bottom-area">
                <span class="admin">Gencar</span>
                <span>•</span>
                <span class="date">16 Maret 2025</span>
              </div>
            </div>
          </div>
          <!-- single blog area end -->
        </div>

        <div class="col-lg-12  text-center">
          <a href="blog.html" class="rts-btn btn-primary-4-border arrow-rotate">Lihat selengkapnya <i
              class="fa-light fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- blog area end -->

  <!-- rts call to action area start -->
  <div class="rts-call-to-action area-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="call-to-action-area-5 area-5_2">
            <h2 class="title skew-up">Siap untuk berkontribusi?</h2>
            <p class="disc">Ayo bergabung jadi bagian dari Generasi Cakrawala 8.</p>
            <div class="button-area">
              <a href="{{ route('register') }}" class="rts-btn btn-primary-5">Daftar Sekarang</a>
              <a href="https://wa.me/6282267103015" target="_blank" class="rts-btn btn-primary-4-border">Tanya
                Admin</a>
            </div>
            <div class="shape-image">
              <img src="assets/images/cta/04.webp" alt="" width="705" class="one">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- rts call to action area end -->
@endsection
