@extends('layouts.public')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Insert a item</div>
                    <div class="card-body">
                            {!! Form::open(['route' => 'item.store', 'method' => 'post']) !!}
                            {{ Form::label('items', 'Add Items') }}
                            {{ Form::text('items', null, ['class'=>'form-control', 'style'=>'', 'id'=>'items' ]) }}
                            {{ Form::submit('Add contents to database.', ['class'=> 'btn btn-primary btn-lg btn-block', 'style'=>'margin-top:20px'])}}
                            {!! Form::close() !!}
                    </div>
                 </div>
            </div>
        </div>
</div>
@endsection
 
@section('scripts')
@endsection
 
@section('css')
@endsection