@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    @include('components.page_title', ['page_title'=>'Jurusan'])
    @foreach ($major as $major)
    @include('content.form.open2', [
        'page_title'=>'Edit Jurusan',
        'form_handler'=>'major.update',
        'param'=>$major->major_id,
    ])
    @method('PUT')
    <div class="form-row">
        @include('content.form.input', ['value'=>$major->major_name, 'size'=>4, 'type'=>'text', 'label'=>'Nama Jurusan', 'name'=>'major_name'])
    </div>
    <button type="submit" class="btn btn-primary">Simpan <i class="fas fa-save"></i></button>
    @include('content.form.close')
    @endforeach
</div>

@include('components.footer')
@endsection