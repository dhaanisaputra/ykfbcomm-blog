@extends('front.layout.ykfb-page-layout')
@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'Welcome To Yogyakarta Fingerboard Community')
@section('content-ykfb')

    <section>
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h2 class="display-4">Fingerboarder of The Year Indonesia</h2>
                            <p>Fingerboarder of The Year (FoTY) Indonesia adalah penghargaan tahunan dari Papanjari
                                Indonesia yang diberikan untuk fingerboarder Indonesia terpilih. Fingerboarder yang terus
                                konsisten secara online ataupun offline menunjukkan hobinya yang menginspirasi banyak orang.
                                Pemilihan dilakukan dengan cara voting pada akhir tahun melalui akun instagram Papanjari
                                Official.
                            </p>
                        </div>
                    </div>
                </div>
                @forelse ($data as $foty)
                    <div class="col-lg-4 text-center mb-5 mt-4">
                        <img src="{{ asset('back/dist/img/foty-upload/' . $foty->featured_image) }}" alt=""
                            class="img-fluid rounded-circle w-50 mb-4">
                        <h4>{{ $foty->name_foty }}</h4>
                        <span class="d-block mb-3 text-uppercase">Fingerboarder of The Year {{ $foty->year_foty }}</span>
                        <p>{!! $foty->post_content !!}</p>
                    </div>
                @empty
                    <span class="text-danger">No FoTY found in this category.</span>
                @endforelse
            </div>
            @if ($dataRoty->count() > 0)
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <h2 class="display-4">Rookie of The Year Indonesia</h2>
                                <p>Rookie of The Year (RoTY) Indonesia adalah penghargaan dari Papanjari
                                    Indonesia untuk fingerboarder yang baru memulai hobi fingerboard namun secara pesat
                                    menunjukkan progressnya dalam kurun waktu 1 tahun kebelakang. Kategori ini merupakan
                                    format terbaru dari Papanjari Indonesia di tahun 2024 yang diberikan kepada
                                    fingerboarder baru
                                    Indonesia.
                                    Pemilihan dilakukan dengan cara voting pada akhir tahun melalui akun instagram Papanjari
                                    Official.
                                </p>
                            </div>
                        </div>
                    </div>
                    @forelse ($dataRoty as $roty)
                        <div class="col-lg-4 text-center mb-5 mt-4">
                            <img src="{{ asset('back/dist/img/foty-upload/' . $roty->featured_image) }}" alt=""
                                class="img-fluid rounded-circle w-50 mb-4">
                            <h4>{{ $roty->name_foty }}</h4>
                            <span class="d-block mb-3 text-uppercase">Rookie of The Year
                                {{ $roty->year_foty }}</span>
                            <p>{!! $roty->post_content !!}</p>
                        </div>
                    @empty
                        <span class="text-danger">No RoTY found in this category.</span>
                    @endforelse
                </div>
            @endif
            @if ($dataToty->count() > 0)
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <h2 class="display-4">Trick of The Year Indonesia</h2>
                                <p>Trick of The Year (ToTY) Indonesia adalah penghargaan dari Papanjari
                                    Indonesia untuk fingerboarder Indonesia dengan menilai trick fingerboarder yang paling
                                    menarik, epic dan kreatif. Nominasi terpilih merupakan fingerboarder yang telah
                                    mengikuti syarat dan ketentuan dalam mengunggah video mereka berdasarkan ketentuan dari
                                    Papanjari Indonesia. Kategori ini merupakan
                                    format terbaru dari Papanjari Indonesia di tahun 2024 yang diberikan kepada
                                    fingerboarder
                                    Indonesia.
                                    Pemilihan dilakukan dengan cara voting pada akhir tahun melalui akun instagram Papanjari
                                    Official.
                                </p>
                            </div>
                        </div>
                    </div>
                    @forelse ($dataToty as $toty)
                        <div class="col-lg-4 text-center mb-5 mt-4">
                            <img src="{{ asset('back/dist/img/foty-upload/' . $toty->featured_image) }}" alt=""
                                class="img-fluid rounded-circle w-50 mb-4">
                            <h4>{{ $toty->name_foty }}</h4>
                            <span class="d-block mb-3 text-uppercase">Trick of The Year
                                {{ $toty->year_foty }}</span>
                            <p>{!! $toty->post_content !!}</p>
                        </div>
                    @empty
                        <span class="text-danger">No ToTY found in this category.</span>
                    @endforelse
                </div>
            @endif
        </div>
    </section>
@endsection
