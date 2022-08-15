@extends('layouts.app')
@section('content')

<div class="content-wrapper">
@include('components.page_title', ['page_title' => 'Mata Pelajaran'])
@include('content.table.open', ['data' => 'Mata Pelajaran'])
    @if ($message = Session::get('success'))
      @include('components.alert', ['message'=>$message, 'color'=>'success'])
    @endif
    <thead>
        <tr>
          <th>ID</th>
          <th>Mapel</th>
          <th>Jurusan</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subject as $subject)
        <tr>
          <td>{{ $subject->subject_id }}</td>
          <td>{{ $subject->subject_name }}</td>
          <td>{{ $subject->major_name }}</td>
          <td>
              <form method="POST" action="{{ route('subject.destroy', $subject->subject_id) }}">
              @csrf
              @method('DELETE')
                <a href="{{ route('subject.edit', $subject->subject_id) }}" class="btn btn-warning text-dark">Edit @include('components.icon', ['icon'=>'edit'])</a>
                <button type="submit" class="btn btn-danger">Hapus @include('components.icon', ['icon'=>'trash'])</button>
              </form>
          </td>
        </tr>
        @endforeach
    </tbody>
    @include('content.table.close', ['route' => 'subject.create'])
</div>
@include('components.footer')
@endsection