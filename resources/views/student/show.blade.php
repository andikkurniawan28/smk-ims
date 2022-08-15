@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    @include('components.page_title', ['page_title'=>'User Profil'])

    @foreach ($user as $user)
    <div class="container-fluid">
      <div class="row gutters-sm">

          @include('content.profile.profile_card',[
            'name' => $user->name,
            'email' => $user->email,
            'address' => $user->address,
            'whatsapp' => $user->whatsapp,
          ])

          @include('content.profile.profile_detail',[
            'jabatan' => $user->role_name,
            'spesialisasi' => $user->teacher_name,
            'jurusan' => $user->major_name,
            'mata_pelajaran' => $user->subject_name,
            'created_at' => date('d F Y', strtotime($user->created_at)),
            'updated_at' => date('d F Y', strtotime($user->updated_at)),
          ])

      </div>
    </div>
    @endforeach

    
</div>
@include('components.footer')
@endsection