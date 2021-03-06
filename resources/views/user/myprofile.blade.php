
@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-header">
                <h5><p class="text-primary">Personal Profile Account</p></h5>
            </div>
           
            <div class="card-body ">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
            </div>
            <form method="post" action = "/user/{{ $user->id }}">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                
                
                
                <div class="form-group row">
                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('username') }}</label>
                    <span class="text-danger">*</span>
                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-danger' : '' }}" name="username" value="{{ $user-> username}}" required autofocus>
                        
                        @if ($errors->has('username'))
                        <span class="alert alert text-danger" role="alert">
                            <small>{{ $errors->first('username') }}</small>
                        </span>
                        @endif 
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>
                    <span class="text-danger">*</span>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-danger' : '' }}" name="email"  value="{{ $user-> email}}" required autofocus>
                        
                        @if ($errors->has('email'))
                        <span class="alert alert text-danger" role="alert">
                            <small>{{ $errors->first('email') }}</small>
                        </span>
                        @endif 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('password') }}</label>
                    <span class="text-danger">*</span>
                    <div class="col-md-6">
                        <input id="password" type="text" class="form-control{{ $errors->has('password') ? ' is-danger' : '' }}" name="password" value="{{ old('password') }}" required autofocus>
                        
                        @if ($errors->has('password'))
                        <span class="alert alert text-danger" role="alert">
                            <small>{{ $errors->first('password') }}</small>
                        </span>
                        @endif 
                    </div>
                    
                </div>
                <div class="form-group row">
                    <label for="confmpassword" class="col-md-4 col-form-label text-md-right">{{ __('confmpassword') }}</label>
                    <span class="text-danger">*</span>
                    <div class="col-md-6">
                        <input id="confmpassword" type="text" class="form-control{{ $errors->has('confmpassword') ? ' is-danger' : '' }}" name="confmpassword"  required autofocus>
                        
                        @if ($errors->has('confmpassword'))
                        <span class="alert alert text-danger" role="alert">
                            <small>{{ $errors->first('confmpassword') }}</small>
                        </span>
                        @endif 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('firstname') }}</label>
                    <span class="text-danger">*</span>
                    <div class="col-md-6">
                        <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-danger' : '' }}" name="firstname"  value="{{ $user-> firstname}}" required autofocus>
                        
                        @if ($errors->has('firstname'))
                        <span class="alert alert text-danger" role="alert">
                            <small>{{ $errors->first('firstname') }}</small>
                        </span>
                        @endif 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('lastname') }}</label>
                    <span class="text-danger">*</span>
                    <div class="col-md-6">
                        <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-danger' : '' }}" name="lastname" value="{{ $user-> lastname}}" required autofocus>
                        
                        @if ($errors->has('lastname'))
                        <span class="alert alert text-danger" role="alert">
                            <small>{{ $errors->first('lastname') }}</small>
                        </span>
                        @endif 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('address') }}</label>
                    <span class="text-danger">*</span>
                    <div class="col-md-6">
                        <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-danger' : '' }}" name="address" value="{{ $user-> address}}" required autofocus>
                        
                        @if ($errors->has('address'))
                        <span class="alert alert text-danger" role="alert">
                            <small>{{ $errors->first('address') }}</small>
                        </span>
                        @endif 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="house_number" class="col-md-4 col-form-label text-md-right">{{ __('house_number') }}</label>
                    <span class="text-danger">*</span>
                    <div class="col-md-6">
                        <input id="house_number" type="text" class="form-control{{ $errors->has('house_number') ? ' is-danger' : '' }}" name="house_number" value = "{{ $user-> house_number}}" required autofocus>
                        
                        @if ($errors->has('house_number'))
                        <span class="alert alert text-danger" role="alert">
                            <small>{{ $errors->first('house_number') }}</small>
                        </span>
                        @endif 
                    </div>
                </div>

                <div class="form-group row">
                    <label for="contact_number" class="col-md-4 col-form-label text-md-right">{{ __('contact_number') }}</label>
                    <span class="text-danger">*</span>
                    <div class="col-md-6">
                        <input id="contact_number" type="text" class="form-control{{ $errors->has('contact_number') ? ' is-danger' : '' }}" name="contact_number" value = "{{ $user-> contact_number}}" required autofocus>
                        
                        @if ($errors->has('contact_number'))
                        <span class="alert alert text-danger" role="alert">
                            <small>{{ $errors->first('contact_number') }}</small>
                        </span>
                        @endif 
                    </div>
                </div>

                <div class="form-group row">
                    <label for="postal_code" class="col-md-4 col-form-label text-md-right">{{ __('postal_code') }}</label>
                    <span class="text-danger">*</span>
                    <div class="col-md-6">
                        <input id="postal_code" type="text" class="form-control{{ $errors->has('postal_code') ? ' is-danger' : '' }}" name="postal_code" value="{{ $user-> postal_code}}" required autofocus>
                        
                        @if ($errors->has('postal_code'))
                        <span class="alert alert text-danger" role="alert">
                            <small>{{ $errors->first('postal_code') }}</small>
                        </span>
                        @endif 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('city') }}</label>
                    <span class="text-danger">*</span>
                    <div class="col-md-6">
                        <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-danger' : '' }}" name="city" value = "{{ $user-> city}}" required autofocus>
                        
                        @if ($errors->has('city'))
                        <span class="alert alert text-danger" role="alert">
                            <small>{{ $errors->first('city') }}</small>
                        </span>
                        @endif 
                    </div>
                </div>
                
                <div class="form-group row mb-0">
                    <div class="col-md-10 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                    </div>
                </div>
                
                
            </form>
            
            
            <div class="container">
                <div class = "row">
                    
                    @yield('content')
                    
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
    
</div>
</div>
</div>
@endsection
