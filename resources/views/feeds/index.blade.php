@extends('layouts.home')

@section('title', 'Desenvolvimento Back-end')

@section('content')

<div class="container-fluid">
    <!-- Small boxes (Stat box) -->

    <!-- /.row -->
    <div class="row">
        <div class="col-12">

            <div class="card-header">

            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">

                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title text-center">Cadastrar nome</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form action="{{ route('feeds.store') }}" method="POST"  enctype="multipart/form-data" role="form">
                        @csrf
                      <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="nome" class="control-label mb-1">Nome</label>
                                    <input type="text" class="form-control" name="nome" placeholder="Digite um nome" aria-label=""  aria-required="true" value="{{ old('nome') }}">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                        </div>
                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                      </div>
                    </form>
                  </div>
<br>
            </div>
            <!-- /.card-body -->

          <!-- /.card -->
        </div>
      </div>
    <!-- Main row -->

    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
    <section class="content-section bg-primary text-white text-center" id="services">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading">
                    <h1 class="text-secondary mb-0">Feed Back </h1>
                    <br>
                </div>
                <div class="row gx-4 gx-lg-5">
                    @foreach ($feeds as $feed)
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <h5>{{ $feed->nome }}</h5>
                    </div>
                    @endforeach

                </div>
            </div>
    </section>

@endsection
