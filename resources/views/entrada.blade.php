@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    <div class="panel-body">

                        {!! Form::label('nome', 'Nome:') !!}
                        {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder'=> 'Nome']) !!}
                        <br>
                        {!! Form::label('entrada', 'Entrada:') !!}
                        {!! Form::datetime('datetime', \Carbon\Carbon::now('America/Sao_Paulo')->format('Y-m-d H:i:s')) !!}
                        <br>
                        {!! Form::label('placa', 'Placa:') !!}
                        {!! Form::input('text', 'placa', null, ['class' => 'form-control', 'placeholder'=> 'Placa']) !!}


                        {!! Form::submit('Salvar', ['class'=> 'btn btn-primary navbar-btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
