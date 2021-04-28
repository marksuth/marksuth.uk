@extends('layouts.default')
@section('title','Contact')
@section('pagetitle', 'Get in Touch')
@section('page')
<div class="container pt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2>Send a Message</h2>
      <form class="form-horizontal" method="POST" action="/contact">
        @csrf
        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif
        <div class="form-group">
          <label for="name">Your Name</label>
          <input id="name" name="name" type="text" required="required" class="form-control">
          @error('name')
          <small class="text-danger text-bolder">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input id="email" name="email" type="text" class="form-control" required="required">
          @error('email')
          <small class="text-danger text-bolder">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group mb-4">
          <label for="enquiry">Your Message</label>
          <textarea id="enquiry" name="enquiry" cols="40" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <button name="submit" type="submit" class="btn btn-light">Send Message</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection