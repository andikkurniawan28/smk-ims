@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    @include('components.page_title', ['page_title'=>'Siswa'])
    @include('content.form.open', [
        'page_title'=>'Tambah Siswa',
        'form_handler'=>'student.store',
    ])
    <div class="form-row">
        @include('content.form.input', ['value'=>'', 'size'=>4, 'type'=>'text', 'label'=>'Nama Lengkap', 'name'=>'student_name'])

        @include('content.form.select_open', ['size'=>4, 'name'=>'major_id', 'label'=>'Jurusan'])
            @foreach ($major as $major)
                @include('content.form.select_option', ['requested'=>'', 'value'=>$major->major_id, 'label'=>$major->major_name])
            @endforeach
        @include('content.form.select_close')

        @include('content.form.select_open', ['size'=>4, 'name'=>'classroom_id', 'label'=>'Kelas'])
            @foreach ($classroom as $classroom)
                @include('content.form.select_option', ['requested'=>'', 'value'=>$classroom->classroom_id, 'label'=>$classroom->classroom_name])
            @endforeach
        @include('content.form.select_close')
        
        @include('content.form.input', ['value'=>'', 'size'=>12, 'type'=>'text', 'label'=>'Alamat', 'name'=>'address'])
        @include('content.form.input', ['value'=>'', 'size'=>4, 'type'=>'text', 'label'=>'Tempat Lahir', 'name'=>'birthplace'])
        @include('content.form.input', ['value'=>'', 'size'=>4, 'type'=>'date', 'label'=>'Tanggal Lahir', 'name'=>'birthday'])

        @include('content.form.select_open', ['size'=>4, 'name'=>'sex', 'label'=>'Jenis Kelamin'])
            @include('content.form.select_option', ['requested'=>'', 'value'=>'Laki-laki', 'label'=>'Laki-laki'])
            @include('content.form.select_option', ['requested'=>'', 'value'=>'Perempuan', 'label'=>'Perempuan'])
        @include('content.form.select_close')

        @include('content.form.select_open', ['size'=>4, 'name'=>'religion', 'label'=>'Agama'])
            @include('content.form.select_option', ['requested'=>'', 'value'=>'Islam', 'label'=>'Islam'])
            @include('content.form.select_option', ['requested'=>'', 'value'=>'Kristen', 'label'=>'Kristen'])
            @include('content.form.select_option', ['requested'=>'', 'value'=>'Katholik', 'label'=>'Katholik'])
            @include('content.form.select_option', ['requested'=>'', 'value'=>'Hindu', 'label'=>'Hindu'])
            @include('content.form.select_option', ['requested'=>'', 'value'=>'Buddha', 'label'=>'Buddha'])
            @include('content.form.select_option', ['requested'=>'', 'value'=>'Konghucu', 'label'=>'Konghucu'])
        @include('content.form.select_close')
        
        @include('content.form.input', ['value'=>'', 'size'=>4, 'type'=>'text', 'label'=>'Whatsapp', 'name'=>'whatsapp'])
        @include('content.form.input', ['value'=>'', 'size'=>4, 'type'=>'email', 'label'=>'Email', 'name'=>'email'])
        @include('content.form.input', ['value'=>'', 'size'=>4, 'type'=>'text', 'label'=>'Nama Ayah', 'name'=>'father'])
        @include('content.form.input', ['value'=>'', 'size'=>4, 'type'=>'text', 'label'=>'Nama Ibu', 'name'=>'mother'])
    </div>
    <button type="submit" class="btn btn-primary">Simpan <i class="fas fa-save"></i></button>
    @include('content.form.close')
</div>

@include('components.footer')
@endsection