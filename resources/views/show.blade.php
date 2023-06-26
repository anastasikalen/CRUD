@extends('layout')
@section('title','User '.$user->name)

@section('content')
    <a type="button" class="btn btn-secondary mb-3" href="{{route('users.index')}}">Back to users</a>
    <div class="card mb-3" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Id: {{$user->id}}</li>
            <li class="list-group-item">Name: {{$user->name}}</li>
            <li class="list-group-item">Email: {{$user->email}}</li>
            <li class="list-group-item">Created: {{$user->created_at->format('d-m-Y H:m:s')}}</li>
            <li class="list-group-item">Updated: {{$user->updated_at->format('d-m-Y H:m:s')}}</li>
        </ul>
    </div>

    <a type="button" class="btn btn-warning" href="{{route('users.edit', $user)}}">Edit</a>
@endsection

