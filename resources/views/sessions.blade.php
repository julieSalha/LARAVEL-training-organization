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
                                <li><a href="">Editer cette session</a></li>
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
