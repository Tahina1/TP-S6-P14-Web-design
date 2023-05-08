@extends('layout.app')

@section('title', 'Form no ato')

@section('main')
@if (session('admin'))
    {{"admin connected";}}

@endif
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Nouvel article</h5>

              <!--FORM -->
              <form class="row g-3" method="post" action="/update" enctype="multipart/form-data">
                @csrf
                <input type="hidden" class="form-control" id="inputTitre" name="id" value="{{$article->id}}">
                <!-- TITRE -->
                <div class="col-12">
                  <label for="inputTitre" class="form-label">Titre</label>
                  <input type="text" class="form-control" id="inputTitre" name="titre" value="{{$article->titre}}">
                </div>

                <!-- RESUME -->
                <div class="col-12">
                    <label for="inputResume" class="col-sm-2 col-form-label">Resume</label>
                    <textarea class="form-control" style="height: 100px" name="resume">{{$article->synopsis}}</textarea>
                </div>

                <!-- CKEDITOR -->
                <div class="col-12">
                    <script src="{{asset('assets/ckeditor5-build-classic/ckeditor.js')}}"></script>
                    <label for="inputContenu" class="form-label">Contenu</label>
                    <textarea name="contenu" id="editor">{{$article->contenu}}</textarea>
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>
                </div>


                <div class="col-12">
                    <div class="card" style="width: 100px; height: 100px;">
                        <label for="inputFile" class="form-label">Image</label>
                        <img src="data:image/jpeg;base64,{{ $article->picture }}" class="card-img-top" alt="...">
                    </div>
                    <input class="form-control" type="file" name="image" id="formFile">
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary w-100">Submit</button>
                  <!--button type="reset" class="btn btn-secondary">Reset</button-->
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection

