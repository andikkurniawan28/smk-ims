@extends('layouts.app')
@section('content')

<div class="content-wrapper">
@include('components.page_title', ['page_title' => 'Kelas'])
@include('content.table.open', ['data' => 'Kelas'])
    @if ($message = Session::get('success'))
      @include('components.alert', ['message'=>$message, 'color'=>'success'])
    @endif
    <thead>
        <tr>
          <th>ID</th>
          <th>Kelas</th>
          <th>Jurusan</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($classroom as $classroom)
        <tr>
          <td>{{ $classroom->classroom_id }}</td>
          <td>{{ $classroom->classroom_name }}</td>
          <td>{{ $classroom->major_name }}</td>
          <td>
              <form method="POST" action="{{ route('classroom.destroy', $classroom->classroom_id) }}">
              @csrf
              @method('DELETE')
                <a href="{{ route('classroom.edit', $classroom->classroom_id) }}" class="btn btn-warning text-dark">Edit @include('components.icon', ['icon'=>'edit'])</a>
                <button type="submit" class="btn btn-danger">Hapus @include('components.icon', ['icon'=>'trash'])</button>
              </form>
          </td>
        </tr>
        @endforeach
    </tbody>
    @include('content.table.close', ['route' => 'classroom.create'])
</div>
@include('components.footer')
@endsection