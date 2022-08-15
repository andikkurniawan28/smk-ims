@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    @include('components.page_title', ['page_title'=>'Strata'])
    @foreach ($degree as $degree)
    @include('content.form.open2', [
        'page_title'=>'Edit Strata',
        'form_handler'=>'degree.update',
        'param'=>$degree->degree_id,
    ])
    @method('PUT')
    <div class="form-row">
        @include('content.form.input', ['value'=>$degree->degree_name, 'size'=>4, 'type'=>'text', 'label'=>'Strata', 'name'=>'degree_name'])
    </div>
    <button type="submit" class="btn btn-primary">Simpan <i class="fas fa-save"></i></button>
    @include('content.form.close')
    @endforeach
</div>

@include('components.footer')
@endsection