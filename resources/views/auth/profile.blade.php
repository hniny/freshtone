@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="container col-md-6 offset-3">
    <h1>User Profile</h1>    
   </div>   
@stop

@section('content')
<div class="container col-md-6 offset-3">
<form action="update_profile" method="post">
  {{ csrf_field() }}

  {{-- Name field --}}
  <div class="input-group mb-3">
      <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
             value="{{ old('name') }}" placeholder="{{ __('adminlte::adminlte.full_name') }}" autofocus>
      <div class="input-group-append">
          <div class="input-group-text">
              <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
          </div>
      </div>
      @if($errors->has('name'))
          <div class="invalid-feedback">
              <strong>{{ $errors->first('name') }}</strong>
          </div>
      @endif
  </div>

  {{-- Email field --}}
  <div class="input-group mb-3">
      <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
             value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}">
      <div class="input-group-append">
          <div class="input-group-text">
              <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
          </div>
      </div>
      @if($errors->has('email'))
          <div class="invalid-feedback">
              <strong>{{ $errors->first('email') }}</strong>
          </div>
      @endif
  </div>

  {{-- Password field --}}
  <div class="input-group mb-3">
      <input type="password" name="password"
             class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
             placeholder="New Password">
      <div class="input-group-append">
          <div class="input-group-text">
              <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
          </div>
      </div>
      @if($errors->has('password'))
          <div class="invalid-feedback">
              <strong>{{ $errors->first('password') }}</strong>
          </div>
      @endif
  </div>

  {{-- Confirm password field --}}
  <div class="input-group mb-3">
      <input type="password" name="password_confirmation"
             class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
             placeholder="Retype New Password">
      <div class="input-group-append">
          <div class="input-group-text">
              <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
          </div>
      </div>
      @if($errors->has('password_confirmation'))
          <div class="invalid-feedback">
              <strong>{{ $errors->first('password_confirmation') }}</strong>
          </div>
      @endif
  </div>

  {{-- Register button --}}
  <button type="submit" class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
      <span class="fas fa-user-plus"></span>
     Update Profile
  </button>

</form>
</div>
@stop

@section('css')
  
@stop

@section('js')
    
<script src="{{ asset('vendors/js/validation.js') }}"></script>

@stop