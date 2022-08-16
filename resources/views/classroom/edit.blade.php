@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    @include('components.page_title', ['page_title'=>'Kelas'])
    @foreach ($classroom as $classroom)
    @include('content.form.open2', [
        'page_title'=>'Edit Kelas',
        'form_handler'=>'classroom.update',
        'param'=>$classroom->classroom_id,
    ])
    @method('PUT')
    <div class="form-row">
        @include('content.form.input', ['value'=>$classroom->classroom_name, 'size'=>4, 'type'=>'text', 'label'=>'Kelas', 'name'=>'classroom_name'])
        @include('content.form.select_open', ['size'=>4, 'label'=>'Jurusan', 'name'=>'major_id'])
            @foreach($major as $major)
                @include('content.form.select_option', ['requested'=> $classroom->major_id, 'value'=> $major->major_id, 'label'=> $major->major_name])
            @endforeach
        @include('content.form.select_close')
    </div>
    <button type="submit" class="btn btn-primary">Simpan <i class="fas fa-save"></i></button>
    @include('content.form.close')
    @endforeach
</div>

@include('components.footer')
@endsection