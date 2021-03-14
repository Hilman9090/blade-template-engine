@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
    <br>
<div class="jumbotron bg-danger">
    <div style="font-family: arial;" class="text-center">
      <h1 class="display-4 text-dark" style=" font-family: arial; font-weight: bold;">Anime List</h1>
    </div>
  </div>
<div style="font-family: arial;" class="container mt-3 pt-2">
    
<br><br>
    <div class="row">
        <div class="col-md-12">
            <main role="main">
                <div style="font-family: arial;" class="container">
                  <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-danger" style="width: 18rem;">
                            <div class="card-body">
                              <h5 style="font-family: arial; font-weight: bold;" class="card-title">Shingeki No Kyojin</h5>
                              <p class="card-text">character:Eren, Mikasa, Armin</p>
                              <a href="#" class="btn btn-primary text-dark">Click Link here</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-danger" style="width: 18rem;">
                            <div class="card-body">
                              <h5 style="font-family: arial; font-weight: bold;" class="card-title">Naruto Shippuden</h5>
                              <p class="card-text">character:Naruto, Sasuke, Sakura</p>
                              <a href="#" class="btn btn-primary text-dark">Click Link here</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-danger" style="width: 18rem;">
                            <div class="card-body">
                              <h5 style="font-family: arial; font-weight: bold;" class="card-title">Dragon Ball</h5>
                              <p class="card-text">character:Goku, Vegeta, Gohan</p>
                              <a href="#" class="btn btn-primary text-dark">Click Link here</a>
                            </div>
                          </div>
                    </div>
                  </div>
                  <br>
                  <hr>
                </div>
              </main>

@endsection

@section('js')
    <script>
        console.log('Helo')
    </script>
@endsection
