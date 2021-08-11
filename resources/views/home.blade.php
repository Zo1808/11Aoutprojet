@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="box-body">
                <div class="card-header"><h1>BIENVENUE SUR GESTNOTE</H1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                 
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="site-footer">
      <div class="text-center">
        <p>
          © Copyrights <strong>2021</strong>. Version 1.0.0 
        </p>
        
      </div>
    </footer>
@endsection
