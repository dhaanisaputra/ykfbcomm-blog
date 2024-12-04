@extends('front.layout.ykfb-page-layout')
@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'Welcome To Yogyakarta Fingerboard Community')
@section('content-ykfb')

    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 text-center mb-2">
                <h1 class="page-title">Kalender Acara Fingerboard</h1>
                {{-- <h3 class="mb-4 display-4">Mark your calendar</h3> --}}
            </div>
        </div>

        <div class="row mb-5">
            {{-- <iframe
                src="https://calendar.google.com/calendar/embed?src=fec409b9d6aceadcf27c741783a94b08741044a2ee6ec679cc2996ebedae1e1b%40group.calendar.google.com&ctz=UTC"
                style="border: 0" width="700" height="500" frameborder="0" scrolling="no"></iframe> --}}
            <iframe
                src="https://calendar.google.com/calendar/embed?height=500&wkst=1&ctz=UTC&showPrint=0&showTz=0&src=ZmVjNDA5YjlkNmFjZWFkY2YyN2M3NDE3ODNhOTRiMDg3NDEwNDRhMmVlNmVjNjc5Y2MyOTk2ZWJlZGFlMWUxYkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%233F51B5"
                style="border-width:0" width="700" height="500" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>

@endsection
