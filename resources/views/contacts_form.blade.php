@extends('layouts.app')

@section('content')

<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Contact Us</h1>
        <p class="lead">Customer service</p>
        <hr class="my-2">
        <p>More info</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
        </p>
    </div>
</div>

@include('partials.errors')
@if(session('message'))
<div class="alert alert-success" role="alert">
    <strong>Email successfully sended</strong>
</div>
@endif

<div class="container">
    <form action="{{route('contacts.sender')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" aria-describedby="nameId" required value={{old('name')}}>
          <small id="nameId" class="text-muted">Insert your name</small>
        </div>
          <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" aria-describedby="emailId" required value={{old('email')}}>
          <small id="emailId" class="text-muted">Insert your email</small>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" name="message" id="message" rows="10">value={{old('message')}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection