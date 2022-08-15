@extends('layouts.app')
@section('content')

<div class="content-wrapper">
@include('components.page_title', ['page_title' => 'Jabatan'])
@include('content.table.open', ['data' => 'Jabatan'])
    @if ($message = Session::get('success'))
      @include('components.alert', ['message'=>$message, 'color'=>'success'])
    @endif
    <thead>
        <tr>
          <th>ID</th>
          <th>Nama Jabatan</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($role as $role)
        <tr>
          <td>{{ $role->role_id }}</td>
          <td>{{ $role->role_name }}</td>
          <td>
              <form method="POST" action="{{ route('role.destroy', $role->role_id) }}">
              @csrf
              @method('DELETE')
                <a href="{{ route('role.edit', $role->role_id) }}" class="btn btn-warning text-dark">Edit @include('components.icon', ['icon'=>'edit'])</a>
                <button type="submit" class="btn btn-danger">Hapus @include('components.icon', ['icon'=>'trash'])</button>
              </form>
          </td>
        </tr>
        @endforeach
    </tbody>
    @include('content.table.close', ['route' => 'role.create'])
</div>
@include('components.footer')
@endsection