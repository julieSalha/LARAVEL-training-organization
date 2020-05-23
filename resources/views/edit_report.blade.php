@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit a Report</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                        
                    {!! Form::model($report, ['route' => ['update_report', $report->id]]) !!}
                            nom :{!! Form::text('name') !!}<br>
                            Contenu :{!! Form::text('content') !!}<br>
                            Session : {!! Form::select('session_id', $sessions->pluck('name', 'id')) !!}<br>
                            Professeur : {!! Form::select('teacher_id', $users->pluck('name', 'id')) !!}<br>
                            {!! Form::submit('Update Report') !!}
                    {!! Form::close() !!}
                    <li><a href="{{ route('delete_report', $report->id) }}">Supprimer le compte-rendu</li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
