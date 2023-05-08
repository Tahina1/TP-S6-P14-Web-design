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
              <form class="row g-3" method="post" action="/save-article" enctype="multipart/form-data">
                @csrf
                <!-- TITRE -->
                <div class="col-12">
                  <label for="inputTitre" class="form-label">Titre</label>
                  <input type="text" class="form-control" id="inputTitre" name="titre">
                </div>

                <!-- RESUME -->
                <div class="col-12">
                    <label for="inputResume" class="col-sm-2 col-form-label">Resume</label>
                    <textarea class="form-control" style="height: 100px" name="resume"></textarea>
                </div>

                <!-- CKEDITOR -->
                <div class="col-12">
                    <script src="{{secure_url('assets/ckeditor5-build-classic/ckeditor.js')}}"></script>
                    <label for="inputContenu" class="form-label">Contenu</label>
                    <textarea name="contenu" id="editor"></textarea>
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>
                </div>


                <div class="col-12">
                    <label for="inputFile" class="form-label">Image</label>
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

