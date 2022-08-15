@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    @include('components.page_title', ['page_title'=>'Mata Pelajaran'])
    @include('content.form.open', [
        'page_title'=>'Tambah Mata Pelajaran',
        'form_handler'=>'subject.store',
    ])
    <div class="form-row">
        @include('content.form.input', ['value'=>'', 'size'=>4, 'type'=>'text', 'label'=>'Nama Mata Pelajaran', 'name'=>'subject_name'])
        @include('content.form.select_open', ['size' => '4', 'name' => 'major_id', 'label' => 'Jurusan',])
            @foreach ($major as $major)
                @include('content.form.select_option', ['requested' => '', 'value' => $major->major_id, 'label' => $major->major_name,])
            @endforeach
        @include('content.form.select_close')
    </div>
    <button type="submit" class="btn btn-primary">Simpan <i class="fas fa-save"></i></button>
    @include('content.form.close')
</div>

@include('components.footer')
@endsection