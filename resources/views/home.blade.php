@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tableau de bord</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   Vous êtes bien connecté !
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vous êtes :</div>

                <div class="card-body">
                    @if (Auth::user()->role == "adm")
                    <h3>Administrateur</h3>
                        <div class="alert" role="alert">
                            <a href="{{ url('/users') }}">Les utilisateurs</a>
                            <a href="{{ url('/trainings') }}">Les Formations</a>
                        </div>
                    @elseif (Auth::user()->role == "prof")
                    <h3>Professeur</h3>
                        <div class="alert" role="alert">
                            <a href="{{ url('/trainings') }}">Les Formations</a>
                        </div>
                    @elseif (Auth::user()->role == "user")
                    <h3>Employé</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
