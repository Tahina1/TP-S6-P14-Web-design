@extends('layout.app')
@section('title', $article->titre)
@section('meta', $article->synopsis)
@section('main')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{$article->titre}}</h1>

        </div><!-- End Page Title -->

        <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <img src="data:image/jpeg;base64,{{ $article->picture }}" class="card-img-top" alt="{{$article->synopsis}}">
                    <!--img src="/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"-->
                </div>

            </div>

            <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">{{$article->synopsis}}</h5>
                            <div class="row card-body">
                                {!!$article->contenu!!}


                            </div>

                        </div>
                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

            </div>
        </div>
        </section>

    </main><!-- End #main -->
@endsection


