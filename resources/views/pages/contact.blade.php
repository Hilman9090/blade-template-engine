@extends('layouts.app')
@section('title', 'Halaman Contact')
@section('content')

<section class="contact" id="contact">
    <div class="container">
      <div class="row pt-4 mb-4">
        <div class="col text-center">
          <h2>Contact Me</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-8">
          <form>
            <div class="form-group">
              <label for="nama">Name</label>
              <input type="text" class="form-control" id="nama">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" rows="3"></textarea>
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Submit</button>
            </div>
          </form>
        </div>
      </div>
    
    </div>
  </section>
@endsection
