@extends('layouts.app')
@section('content')

<div class="content-wrapper">
@include('components.page_title', ['page_title' => 'Strata'])
@include('content.table.open', ['data' => 'Strata'])
    @if ($message = Session::get('success'))
      @include('components.alert', ['message'=>$message, 'color'=>'success'])
    @endif
    <thead>
        <tr>
          <th>ID</th>
          <th>Strata</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($degree as $degree)
        <tr>
          <td>{{ $degree->degree_id }}</td>
          <td>{{ $degree->degree_name }}</td>
          <td>
              <form method="POST" action="{{ route('degree.destroy', $degree->degree_id) }}">
              @csrf
              @method('DELETE')
                <a href="{{ route('degree.edit', $degree->degree_id) }}" class="btn btn-warning text-dark">Edit @include('components.icon', ['icon'=>'edit'])</a>
                <button type="submit" class="btn btn-danger">Hapus @include('components.icon', ['icon'=>'trash'])</button>
              </form>
          </td>
        </tr>
        @endforeach
    </tbody>
    @include('content.table.close', ['route' => 'degree.create'])
</div>
@include('components.footer')
@endsection