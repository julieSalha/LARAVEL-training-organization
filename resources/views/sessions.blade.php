@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Les Sessions de la formation: {{ $training->name }}</div>
                <div class="card-body">
                    Toutes les sessions:
                    <ul>
                    @foreach ($sessions as $session)
                        <li> {{$session->name}} ( {{$session->date}} ) 
                            <ul>
                                <li>Places : {{$session->availables_seats}} </li>
                                <li>Prof : {{$session->user->name}} </li>
                                <li>Salle : {{$session->room->name}} </li>
                                @if ($user->role == 'adm')
                                <li><a href="">Editer cette session</a></li>
                                <li><a href="{{ url('/reports') }}">Ajouter un compte-rendu à cette session</a></li>
                                @elseif ($user->role == 'employee')
                                <li><a href="">S'inscrire à cette session</a></li>
                                @endif
                            </ul>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
