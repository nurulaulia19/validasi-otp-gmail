@extends('layouts.app')

@section('content')

<div class="container">
    <section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="card-body p-5">
  
              <h3 class="mb-5 text-center">Register</h3>
                
              <div class="form-outline mb-4">
                <label class="control-label mb-2" style="font-size: 15px" for="name">Name :</label>
                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
              </div>
              <div class="form-outline mb-4">
                <label class="control-label mb-2" style="font-size: 15px" for="email">Email :</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
              </div>
              <div class="form-outline mb-4">
                <label class="control-label mb-2" style="font-size: 15px" for="dateofbirth">Date Of Birth :</label>
                <input id="dateofbirth" type="date" class="form-control @error('dateofbirth') is-invalid @enderror" name="dateofbirth" value="{{ old('dateofbirth') }}" required autocomplete="dateofbirth" placeholder="Tanggal Lahir">
              </div>
              <div class="form-outline mb-4">
                <label class="control-label mb-2" style="font-size: 15px" for="gender">Gender :</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="laki-laki" selected disabled>Gender</option>
                    <option value="perempuan">Perempuan</option>
                    <option value="laki-laki">Laki-laki</option>
                </select>
              </div>
              <div class="form-outline mb-4">
                <label class="control-label mb-2" style="font-size: 15px" for="password">Password :</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                @error('password')
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                     </span>
                @enderror
              </div>
              <div class="form-outline mb-4">
                <label class="control-label mb-2" style="font-size: 15px" for="password_confirmation">Retype Password :</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Retype Password">
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-primary btn-lg btn-block d-flex justify-content-center d-flex w-100">
                    {{ __('Register') }}
                </button>
              </div>              
              <div class="mb-3">
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg btn-block d-flex justify-content-center">Login</a>
              </div>
              <hr class="my-4">
            </div>
        </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="dateofbirth" class="col-md-4 col-form-label text-md-end">{{ __('Date Of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dateofbirth" type="date" class="form-control @error('dateofbirth') is-invalid @enderror" name="dateofbirth" value="{{ old('dateofbirth') }}" required autocomplete="dateofbirth">

                                @error('dateofbirth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <select name="gender" id="gender">
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
