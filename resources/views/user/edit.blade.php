@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    @include('components.page_title', ['page_title'=>'User'])
    @foreach ($user as $user)
    @include('content.form.open2', [
        'page_title'=>'Edit User',
        'form_handler'=>'user.update',
        'param'=>$user->user_id,
    ])
    @method('PUT')
    <div class="form-row">
        @include('content.form.input', ['value'=>$user->name, 'size'=>4, 'type'=>'text', 'label'=>'Nama Lengkap', 'name'=>'name'])
        @include('content.form.input', ['value'=>$user->username, 'size'=>3, 'type'=>'text', 'label'=>'Username', 'name'=>'username'])
        @include('content.form.input', ['value'=>$user->birthplace, 'size'=>3, 'type'=>'text', 'label'=>'Tempat Lahir', 'name'=>'birthplace'])
        @include('content.form.input', ['value'=>$user->birthday, 'size'=>2, 'type'=>'date', 'label'=>'Tanggal Lahir', 'name'=>'birthday'])
        @include('content.form.input', ['value'=>$user->address, 'size'=>12, 'type'=>'text', 'label'=>'Alamat Sesuai KTP', 'name'=>'address'])
        @include('content.form.input', ['value'=>$user->university, 'size'=>3, 'type'=>'text', 'label'=>'Almamater', 'name'=>'university'])
        @include('content.form.select_open', ['size'=>3, 'label'=>'Strata', 'name'=>'degree'])
            @include('content.form.select_option', ['requested'=>$user->degree, 'value'=>1, 'label'=>'S1'])
            @include('content.form.select_option', ['requested'=>$user->degree, 'value'=>2, 'label'=>'S2'])
            @include('content.form.select_option', ['requested'=>$user->degree, 'value'=>3, 'label'=>'S3'])
        @include('content.form.select_close')
        @include('content.form.select_open', ['size'=>3, 'label'=>'Jabatan', 'name'=>'role_id'])
            @foreach ($role as $role)
                @include('content.form.select_option', ['requested'=>$user->role_id, 'value'=>$role->role_id, 'label'=>$role->role_name])
            @endforeach
        @include('content.form.select_close')
                @include('content.form.select_open', ['size'=>3, 'label'=>'Spesialisasi', 'name'=>'teacher_id'])
            @foreach ($teacher as $teacher)
                @include('content.form.select_option', ['requested'=>$user->teacher_id, 'value'=>$teacher->teacher_id, 'label'=>$teacher->teacher_name])
            @endforeach
        @include('content.form.select_close')
        @include('content.form.select_open', ['size'=>3, 'label'=>'Jurusan', 'name'=>'major_id'])
            @foreach ($major as $major)
                @include('content.form.select_option', ['requested'=>$user->major_id, 'value'=>$major->major_id, 'label'=>$major->major_name])
            @endforeach
        @include('content.form.select_close')
        @include('content.form.select_open', ['size'=>3, 'label'=>'Mata Pelajaran', 'name'=>'subject_id'])
            @foreach ($subject as $subject)
                @include('content.form.select_option', ['requested'=>$user->subject_id, 'value'=>$subject->subject_id, 'label'=>$subject->subject_name])
            @endforeach
        @include('content.form.select_close')
        @include('content.form.input', ['value'=>$user->whatsapp, 'size'=>3, 'type'=>'text', 'label'=>'Whatsapp', 'name'=>'whatsapp'])
        @include('content.form.input', ['value'=>$user->email, 'size'=>3, 'type'=>'email', 'label'=>'Email Aktif', 'name'=>'email'])
    </div>
    <button type="submit" class="btn btn-primary">Simpan <i class="fas fa-save"></i></button>
    @include('content.form.close')
    @endforeach
</div>

@include('components.footer')
@endsection