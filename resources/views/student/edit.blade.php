@extends('layouts.app')
@section('content')

@foreach ($student as $student)
<div class="content-wrapper">
    @include('components.page_title', ['page_title'=>'Siswa'])
    @include('content.form.open2', [
        'page_title'=>'Edit Siswa',
        'form_handler'=>'student.update',
        'param'=>$student->student_id,
    ])
    @method('PUT')
    <div class="form-row">
        @include('content.form.input', ['value'=>$student->student_name, 'size'=>4, 'type'=>'text', 'label'=>'Nama Lengkap', 'name'=>'student_name'])
        
        @include('content.form.select_open', ['size'=>4, 'name'=>'major_id', 'label'=>'Jurusan'])
            @foreach ($major as $major)
                @include('content.form.select_option', ['requested'=>$student->major_id, 'value'=>$major->major_id, 'label'=>$major->major_name])
            @endforeach
        @include('content.form.select_close')
        
        @include('content.form.select_open', ['size'=>4, 'name'=>'classroom_id', 'label'=>'Kelas'])
            @foreach ($classroom as $classroom)
                @include('content.form.select_option', ['requested'=>$student->classroom_id, 'value'=>$classroom->classroom_id, 'label'=>$classroom->classroom_name])
            @endforeach
        @include('content.form.select_close')
        
        @include('content.form.input', ['value'=>$student->address, 'size'=>12, 'type'=>'text', 'label'=>'Alamat', 'name'=>'address'])
        @include('content.form.input', ['value'=>$student->birthplace, 'size'=>4, 'type'=>'text', 'label'=>'Tempat Lahir', 'name'=>'birthplace'])
        @include('content.form.input', ['value'=>$student->birthday, 'size'=>4, 'type'=>'date', 'label'=>'Tanggal Lahir', 'name'=>'birthday'])
        
        @include('content.form.select_open', ['size'=>4, 'name'=>'sex', 'label'=>'Jenis Kelamin'])
            @include('content.form.select_option', ['requested'=>$student->sex, 'value'=>'Laki-laki', 'label'=>'Laki-laki'])
            @include('content.form.select_option', ['requested'=>$student->sex, 'value'=>'Perempuan', 'label'=>'Perempuan'])
        @include('content.form.select_close')

        @include('content.form.select_open', ['size'=>4, 'name'=>'religion', 'label'=>'Agama'])
            @include('content.form.select_option', ['requested'=>$student->religion, 'value'=>'Islam', 'label'=>'Islam'])
            @include('content.form.select_option', ['requested'=>$student->religion, 'value'=>'Kristen', 'label'=>'Kristen'])
            @include('content.form.select_option', ['requested'=>$student->religion, 'value'=>'Katholik', 'label'=>'Katholik'])
            @include('content.form.select_option', ['requested'=>$student->religion, 'value'=>'Hindu', 'label'=>'Hindu'])
            @include('content.form.select_option', ['requested'=>$student->religion, 'value'=>'Buddha', 'label'=>'Buddha'])
            @include('content.form.select_option', ['requested'=>$student->religion, 'value'=>'Konghucu', 'label'=>'Konghucu'])
        @include('content.form.select_close')

        @include('content.form.input', ['value'=>$student->whatsapp, 'size'=>4, 'type'=>'text', 'label'=>'Whatsapp', 'name'=>'whatsapp'])
        @include('content.form.input', ['value'=>$student->email, 'size'=>4, 'type'=>'email', 'label'=>'Email', 'name'=>'email'])
        @include('content.form.input', ['value'=>$student->father, 'size'=>4, 'type'=>'text', 'label'=>'Nama Ayah', 'name'=>'father'])
        @include('content.form.input', ['value'=>$student->mother, 'size'=>4, 'type'=>'text', 'label'=>'Nama Ibu', 'name'=>'mother'])
    </div>
    <button type="submit" class="btn btn-primary">Simpan <i class="fas fa-save"></i></button>
    @include('content.form.close')
</div>
@endforeach

@include('components.footer')
@endsection