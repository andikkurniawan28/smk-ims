@extends('layouts.app')
@section('content')

<div class="content-wrapper">
@include('components.page_title', ['page_title' => 'User'])
@include('content.table.open', ['data' => 'User'])

    @if ($message = Session::get('success'))
      @include('components.alert', ['message'=>$message, 'color'=>'success'])
    @endif

    <thead>
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Whatsapp</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $user)
        <tr>
          <td>{{ $user->user_id }}</td>
          <td>{{ $user->username }}</td>
          <td><a href="{{ route('user.show', $user->user_id) }}">{{ $user->name }}</a></td>
          <td>{{ $user->address }}</td>
          <td>{{ $user->whatsapp }}</td>
          <td>{{ $user->email }}</td>
          <td>
              <form method="POST" action="{{ route('user.destroy', $user->user_id) }}">
              @csrf
              @method('DELETE')
                <a href="{{ route('user.edit', $user->user_id) }}" class="btn btn-warning text-dark">Edit @include('components.icon', ['icon'=>'edit'])</a>
                <button type="submit" class="btn btn-danger">Hapus @include('components.icon', ['icon'=>'trash'])</button>
              </form>
          </td>
        </tr>
        @endforeach
    </tbody>


    @include('content.table.close', ['route' => 'user.create'])
</div>

@include('components.footer')
@endsection