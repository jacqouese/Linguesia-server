@extends('layouts/app')

@section('content')
<section style="background-color: #508bfc; height: 90vh">
    <div class="login-container container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <h3 class="mb-5">Sign in</h3>
                <form action="/login" method="post">
                    @csrf
                    <div class="form-outline mb-4">
                      <input type="text" id="login-login" class="form-control form-control-lg" name="name"/>
                      <label class="form-label" for="typeEmailX-2">Email</label>
                    </div>
      
                    <div class="form-outline mb-4">
                        <input type="password" id="login-password" class="form-control form-control-lg" name="password"/>
                        <label class="form-label" for="typePasswordX-2">Password</label>
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>  
                </form>
                @if ($errors->any())
                    @php
                        var_dump($errors->all());
                    @endphp
                @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection