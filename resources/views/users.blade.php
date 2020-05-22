@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Les utilisateurs:</div>
                <a href="{{ route('add_user') }}">Ajoutez un utilisateur</a>
                <div class="card-body">
                    Tous les utilisateurs:
                    <ul>
                    @foreach ($users as $user)
                        <li> {{$user->name}} ( {{$user->role}} ) - </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
