@extends('layout.app')
@section('title', 'Liste des articles sur l\'IA')
@section('main')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Liste des articles sur l'IA</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Cards</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row align-items-top">
        @foreach ($articles as $article)
            <div class="col-lg-4">
                <!-- Card with titles, buttons, and links -->
                <div class="card">
                <img src="data:image/jpeg;base64,{{ $article->picture }}" class="card-img-top" alt="{{$article->synopsis}}">
                <div class="card-body">
                    <h3 class="card-title">{{$article->titre}}</h3>
                    <p class="card-text">{{$article->synopsis}}</p>
                    <div class="row">
                        <p class="card-text"><a href="/articles/{{$article->id}}" class="btn btn-primary form-control">Voir detail</a></p>
                    </div>
                    <br/>
                    <!--session('admin') -->
                        <!--div class="row">
                            <div class="col-lg-6">
                                <p class="card-text"-->
                            <!--/div>
                            <div class="col-lg-6">
                            <p class="card-text"><a href="/articles/{{/*$article->id*/}}" class="btn btn-danger form-control">Supprimer</a></p>
                            </div>
                    </div-->


                </div>
                </div><!-- End Card with titles, buttons, and links -->
            </div>

        @endforeach


      </div>
      <div class="datatable-bottom">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
    </section>

</main><!-- End #main -->
@endsection


