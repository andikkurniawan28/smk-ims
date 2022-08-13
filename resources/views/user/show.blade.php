@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    @include('components.page_title', ['page_title'=>'User Profil'])

    @foreach ($user as $user)
    <div class="container-fluid">
    <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="/AdminLTE-master/dist/img/user2-160x160.jpg" alt="Admin" class="rounded-circle" width="150">
                <div class="mt-3">
                  <h4>{{ $user->name }}</h4>
                  <p class="text-secondary mb-1">{{ $user->role_id }}</p>
                  <p class="text-muted font-size-sm">{{ $user->user_id }}</p>

                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="https://wa.me/{{ $user->whatsapp }}" class="btn btn-outline-success">WA</a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
            <div class="card mb-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Alamat</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{ $user->address }}
                  </div>
                </div>
                <hr>
              </div>
            </div>
        </div>
    </div>
    </div>
    @endforeach

    
</div>

@include('components.footer')
@endsection