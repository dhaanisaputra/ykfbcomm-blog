@extends('front.layout.ykfb-page-layout')
@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'Welcome To Yogyakarta Fingerboard Community')
@section('content-ykfb')

    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 text-center mb-2">
                <h1 class="page-title">Fingerboard Calendar Events</h1>
                <h3 class="mb-4 display-4">Mark your calendar</h3>
            </div>
        </div>

        <div class="row mb-5">
            <iframe
                src="https://calendar.google.com/calendar/embed?src=fec409b9d6aceadcf27c741783a94b08741044a2ee6ec679cc2996ebedae1e1b%40group.calendar.google.com&ctz=UTC"
                style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>

@endsection
