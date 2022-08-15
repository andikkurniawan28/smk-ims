@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    @include('components.page_title', ['page_title'=>'Mata Pelajaran'])
    @foreach ($subject as $subject)
    @include('content.form.open2', [
        'page_title'=>'Edit Mata Pelajaran',
        'form_handler'=>'subject.update',
        'param'=>$subject->subject_id,
    ])
    @method('PUT')
    <div class="form-row">
        @include('content.form.input', ['value'=>$subject->subject_name, 'size'=>4, 'type'=>'text', 'label'=>'Nama Mata Pelajaran', 'name'=>'subject_name'])
        @include('content.form.select_open', ['size' => '4', 'name' => 'major_id', 'label' => 'Jurusan',])
            @foreach ($major as $major)
                @include('content.form.select_option', ['requested' => $subject->major_id, 'value' => $major->major_id, 'label' => $major->major_name,])
            @endforeach
        @include('content.form.select_close')
    </div>
    <button type="submit" class="btn btn-primary">Simpan <i class="fas fa-save"></i></button>
    @include('content.form.close')
    @endforeach
</div>

@include('components.footer')
@endsection