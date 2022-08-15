@extends('layouts.app')
@section('content')

<div class="content-wrapper">
@include('components.page_title', ['page_title' => 'Siswa'])
@include('content.table.open', ['data' => 'Siswa'])

    @if ($message = Session::get('success'))
      @include('components.alert', ['message'=>$message, 'color'=>'success'])
    @endif

    <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Jurusan</th>
          <th>Alamat</th>
          <th>Whatsapp</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($student as $student)
        <tr>
          <td>{{ $student->student_id }}</td>
          <td><a href="{{ route('student.show', $student->student_id) }}">{{ $student->student_name }}</a></td>
          <td>{{ $student->major_name }}</td>
          <td>{{ $student->address }}</td>
          <td>{{ $student->whatsapp }}</td>
          <td>
              <form method="POST" action="{{ route('student.destroy', $student->student_id) }}">
              @csrf
              @method('DELETE')
                <a href="{{ route('student.edit', $student->student_id) }}" class="btn btn-warning text-dark">Edit @include('components.icon', ['icon'=>'edit'])</a>
                <button type="submit" class="btn btn-danger">Hapus @include('components.icon', ['icon'=>'trash'])</button>
              </form>
          </td>
        </tr>
        @endforeach
    </tbody>


    @include('content.table.close', ['route' => 'student.create'])
</div>

@include('components.footer')
@endsection