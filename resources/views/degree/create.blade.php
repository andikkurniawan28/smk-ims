@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    @include('components.page_title', ['page_title'=>'Strata'])
    @include('content.form.open', [
        'page_title'=>'Tambah Strata',
        'form_handler'=>'degree.store',
    ])
    <div class="form-row">
        @include('content.form.input', ['value'=>'', 'size'=>4, 'type'=>'text', 'label'=>'Strata', 'name'=>'degree_name'])
    </div>
    <button type="submit" class="btn btn-primary">Simpan <i class="fas fa-save"></i></button>
    @include('content.form.close')
</div>

@include('components.footer')
@endsection