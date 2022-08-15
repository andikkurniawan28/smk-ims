@extends('layouts.app')
@section('content')

<div class="content-wrapper">
@include('components.page_title', ['page_title' => 'Jurusan'])
@include('content.table.open', ['data' => 'Jurusan'])
    @if ($message = Session::get('success'))
      @include('components.alert', ['message'=>$message, 'color'=>'success'])
    @endif
    <thead>
        <tr>
          <th>ID</th>
          <th>Nama Jurusan</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($major as $major)
        <tr>
          <td>{{ $major->major_id }}</td>
          <td>{{ $major->major_name }}</td>
          <td>
              <form method="POST" action="{{ route('major.destroy', $major->major_id) }}">
              @csrf
              @method('DELETE')
                <a href="{{ route('major.edit', $major->major_id) }}" class="btn btn-warning text-dark">Edit @include('components.icon', ['icon'=>'edit'])</a>
                <button type="submit" class="btn btn-danger">Hapus @include('components.icon', ['icon'=>'trash'])</button>
              </form>
          </td>
        </tr>
        @endforeach
    </tbody>
    @include('content.table.close', ['route' => 'major.create'])
</div>
@include('components.footer')
@endsection