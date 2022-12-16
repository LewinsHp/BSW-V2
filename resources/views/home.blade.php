    @extends('layouts.index')
    @section('content')
        <!-- hero slider -->
        <section class="hero-section bg-cover" data-background="{{ asset('assets/images/slide-1.jpg') }}">
            <h1 class="bold text-white"><br><br>Dengan Aplikasi BSW<br> Kini Pengajuan Perijinan <br> Bisa Dilakukan Secara Online<br><br></h1>
        </section>
        <!-- /hero slider -->

        <!-- About-->
        <section class="section-sm">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center section-title justify-content-center">
                            <h2 class="mb-0 text-nowrap me-3">Tentang BSW</h2>
                        </div>
                        <div class="col-15">
                            <div class="d-flex align-items-center section-title justify-content-center">
                                <p>
                                    Portal Batam Single Window (http://www.bsw.bpbatam.go.id) merupakan portal perijinan resmi yang dikembangkan oleh Badan Pengusahaan Kawasan Batam (BP Batam).
                                    Dengan mengakses portal ini, pengunjung akan mendapatkan informasi tentang prosedur resmi dan tata cara yang diperlukan dalam mengajukan perijinan yang dikelola oleh BP Batam.</p>
                            </div>
                        </div>
                        <div style="padding-top: 30px; text-align: center;">
                            <a href="{{ route('home') }}" class="btn-selengkapnya my-auto"><span
                                    class="fas fa-angle-right mx-1"></span> SELENGKAPNYA</a>
                        </div>
                        <!-- Video Tutorial -->
                        <section class="section-sm">
                            <div class="container" data-aos="fade-right">
                                <div class="row justify-content-center text-start">
                                    <div class="col-lg-12">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <h2 class="mb-3 text-nowrap me-3">Video Tutorial</h2>
                                        </div>
                                        <div class="row mb-6">
                                            <div class="col-lg-16 col-md-15 mb-6 position-relative">
                                                <div class="success-video set-bg" data-background="assets/images/poster/poster.png">
                                                    <a class="play-btn venobox" href="https://youtu.be/jzeW03VXHgw" data-vbtype="video">
                                                        <i class="fas fa-play"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Video Tutorial -->

                        <!-- Ijin dan Persyaratan -->
                        <section class="section-sm">
                            <div class="container" data-aos="fade-right">
                                <div class="col-12">
                                    <div class="d-flex align-items-center section-title justify-content-center">
                                        <h2 class="mb-0 text-nowrap me-3">Ijin dan Persyaratan</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="media-box">
                                    <div class="media-icon">
                                        <i class="ti-ebook"></i>
                                    </div>
                                    <div class="media-content">
                                        <a href="">
                                            <h4>PERUBAHAN RENCANA PERUNTUKAN LOKASI</h4>
                                        </a>
                                        <p>2 Layanan</p>
                                    </div>
                                    <div class="media-content">
                                        <a href="">
                                            <h4>TEST</h4>
                                        </a>
                                        <p>2 Layanan</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Ijin dan Persyaratan -->

                        <!-- Berita -->
                        <section class="section-sm">
                            <div class="container" data-aos="fade-right">
                                <div class="col-12">
                                    <div class="d-flex align-items-center section-title justify-content-center">
                                        <h2 class="mb-0 text-nowrap me-3">Berita</h2>
                                    </div>
                                </div>
                            </div>
                            <div style="padding-top: 111px; text-align: center;">
                                <a href="{{ route('home') }}" class="btn-selengkapnya my-auto">
                                    <span class="fas fa-angle-right mx-1"></span> SELENGKAPNYA</a>
                            </div>
                        </section>
                        <!-- Berita -->
                    </div>
                    </div>
                </div>
            </div>
            <!-- course list -->
                <div class="row justify-content-between">
                    <!-- course item -->
                    <div class="col-lg-6 col-md-6 mb-3 position-relative">
                        <iframe width="100%" height="310" src=""
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-3 position-relative">
                        <iframe width="100%" height="310" src=""
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

    @endsection

    @push('script')
        <script>
            AOS.init();
        </script>
    @endpush
