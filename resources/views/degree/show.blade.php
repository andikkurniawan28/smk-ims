@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    @include('components.page_title', ['page_title'=>'Jurusan Profil'])

    @foreach ($role as $role)
    <div class="container-fluid">
      <div class="row gutters-sm">

          @include('content.profile.profile_card',[
            'name' => $role->name,
            'email' => $role->email,
            'address' => $role->address,
            'whatsapp' => $role->whatsapp,
          ])

          @include('content.profile.profile_detail',[
            'jabatan' => $role->role_name,
            'spesialisasi' => $role->teacher_name,
            'jurusan' => $role->major_name,
            'mata_pelajaran' => $role->subject_name,
            'created_at' => date('d F Y', strtotime($role->created_at)),
            'updated_at' => date('d F Y', strtotime($role->updated_at)),
          ])

      </div>
    </div>
    @endforeach

    
</div>
@include('components.footer')
@endsection