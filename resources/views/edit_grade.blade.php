@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit a Grade</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!! Form::model($grade, ['route' => ['update_grade', $grade->id]]) !!}
                        Note :{!! Form::integer('value') !!}<br>
                        Session : {!! Form::select('session_id', $sessions->pluck('name', 'id')) !!}<br>
                        Professeur : {!! Form::select('teacher_id', $users->pluck('name', 'id')) !!}<br>
                        {!! Form::submit('Update Grade') !!}
                    {!! Form::close() !!}
                    <a href="{{ route('delete_grade', $grade->id) }}">Supprimer la Note</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
