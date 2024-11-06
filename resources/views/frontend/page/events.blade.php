@extends('frontend.layout.master')

@section('title', 'Etkinlikler')


@section('content')
    <section class="page-header">
        <div class="page-header__bg"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">Etkinlikler</h2>
            <ul class="careox-breadcrumb list-unstyled">
                <li><a href="{{ route('homepage') }}">Anasayfa</a></li>
                <li><span>Etkinlikler</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <!-- /.page-header__bg -->

    </div><!-- /.container -->
    </section><!-- /.page-header -->


    <section class="event-one event-one--page">
        <div class="container">
            <div class="sec-title text-center">

                <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>Etkinliklerimiz</h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title bw-split-in-left">Yaklaşan Etkinliklerimiz</h3><!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="row gutter-y-30 masonry-layout">
                @forelse($event as $events)
                    <div class="col-xl-4 col-md-6">
                        <div class="event-one__item">
                            <img src="{{ asset('assets/images/events/event-1-1.jpg') }}" alt="careox">
                            <a href="{{ route('events.detail', ['id' => $events->id]) }}" class="event-one__item__rm"><i class="icon-right-arrow"></i></a>
                            <div class="event-one__item__content">
                                <h3 class="event-one__item__title"><a href="{{ route('events.detail', ['id' => $events->id]) }}">{{ $events->name }}</a></h3>
                                <ul class="event-one__item__meta">
                                    <li><i class="icofont-ui-calendar"></i>{{ $events->event_date?->format('d M Y') }}</li>
                                    <li><i class="icofont-location-pin"></i>{{ $events->location }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Henüz bir etkinlik yok.</p>
                @endforelse
            </div>
        </div>
    </section>


@endsection
