@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add a Training</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['url' => "create_training"]) !!}
                        nom :{!! Form::text('name') !!}<br>
                        Durée :{!! Form::time('duration') !!}<br>
                        Professeur : 
                        <select name="teacher_id">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name}}</option>
                            @endforeach
                        </select><br>
                        {!! Form::submit('Add Training') !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
