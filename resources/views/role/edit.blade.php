@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    @include('components.page_title', ['page_title'=>'Jabatan'])
    @foreach ($role as $role)
    @include('content.form.open2', [
        'page_title'=>'Edit Jabatan',
        'form_handler'=>'role.update',
        'param'=>$role->role_id,
    ])
    @method('PUT')
    <div class="form-row">
        @include('content.form.input', ['value'=>$role->role_name, 'size'=>4, 'type'=>'text', 'label'=>'Nama Jabatan', 'name'=>'role_name'])
    </div>
    <button type="submit" class="btn btn-primary">Simpan <i class="fas fa-save"></i></button>
    @include('content.form.close')
    @endforeach
</div>

@include('components.footer')
@endsection