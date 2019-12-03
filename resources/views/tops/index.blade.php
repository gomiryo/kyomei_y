@extends('layouts.app')

@section('content')
<ul class="list-group">
@foreach($users as $user)
    <li class="list-group__item">
  {{ $user->id }}
    </li>
    <li class="list-group__item">
  		<a href="{{ route('users.index', ['id' => $user->id]) }}">
	  		{{ $user->name }}
	  	</a>
    </li>
@endforeach
</ul>
@endsection