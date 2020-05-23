@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Compte Rendu de la formation: {{ $training->name }}</div>
                <div class="card-body">
                    <ul>
                    @foreach ($sessions as $session)
                        {!! Form::open(['url' => "create_report"]) !!}
                            nom :{!! Form::text('name') !!}<br>
                            Contenu :{!! Form::text('content') !!}<br>
                            Session : {!! Form::select('session_id', $sessions->pluck('name', 'id')) !!}<br>
                            Professeur : {!! Form::select('teacher_id', $users->pluck('name', 'id')) !!}<br>
                            {!! Form::submit('Add Report') !!}
                        {!! Form::close() !!}
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
