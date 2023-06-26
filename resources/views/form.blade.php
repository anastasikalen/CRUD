@extends('layout')


@section('title',isset($user) ?'Update '.$user->name : 'Create user')

@section('content')
    <a type="button" class="btn btn-secondary mb-3" href="{{route('users.index')}}">Back to users</a>
    <form method="POST"
          @if(isset($user))
              action="{{route('users.update',$user)}}"
          @else
            action="{{route('users.store')}}"
          @endif
        class="mt-1">
        @csrf
        @isset($user)
            @method('PUT')
        @endisset
        <div class="row">
            <div class="col">
                <input name="name" type="text" value="{{old('name',isset($user)? $user->name : null) }}" class="form-control" placeholder="name" aria-label="name">
                @error('name')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <input  value="{{old('email',isset($user)? $user->email : null) }}" name="email" type="text" class="form-control" placeholder="email" aria-label="email">
                @error('email')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-success">Create</button>
            </div>

        </div>

    </form>
@endsection

