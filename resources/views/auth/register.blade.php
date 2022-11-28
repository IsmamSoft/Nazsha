@extends('layouts.app')
@section('style_css')
<style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>
@endsection
@section('content')

<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
            The best offer <br />
            <span style="color: hsl(218, 81%, 75%)">for your business</span>
          </h1>
          <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">

          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example1">First name</label>
                      <input type="text" name="f_name" id="form3Example1" class="form-control @error('fname') is-invalid @enderror" required>

                      @error('fname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example2">Last name</label>
                      <input type="text" name="l_name" class="form-control @error('lname') is-invalid @enderror">

                      @error('lname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                    </div>
                  </div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Email address</label>
                  <input type="email" name="email" id="form3Example3" class="form-control @error('email') is-invalid @enderror">

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                 @enderror
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                   <label class="form-label" for="form3Example4">Password</label>
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">

                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                 @enderror
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                  </div>


                <!-- Submit button -->
                <button type="submit" class="btn btn-outline-primary btn-block mb-4">
                  Sign up
                </button>

                <!-- Register buttons -->
                <div class="text-center">
                  <p>or sign up with:</p>
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i style="color: #000000;" class="fa-brands fa-facebook fa-2x"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i style="color: #000000;" class="fa-brands fa-google fa-2x"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i style="color: #000000;" class="fa-brands fa-twitter fa-2x"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i style="color: #000000;" class="fa-brands fa-github fa-2x"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

@endsection