@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<div class="h-100 d-flex align-items-center justify-content-center">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Tugas PBO</h5>
        <p class="card-text">Membuat auth dan dashboard dengan koneksi git</p>
        <a href="#" class="btn btn-primary">lihat Sesuatu</a>
      </div>
    </div>
  </div>
@endsection
