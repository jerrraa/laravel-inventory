@extends('layouts.public')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit a item</div>
                    <div class="card-body">
                        {!! Form::model($edit, ['route' => ['item.update', $edit->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
                            {{ Form::label('category_id', 'Category ID') }}
                            {{ Form::text('category_id', null, ['class'=>'form-control', 'style'=>'', 'id'=>'items' ]) }}
                            
                            {{ Form::label('title', 'Title:')}}
                            {{ Form::text('title', null, ['class'=>'form-control', 'style'=>'', 'id'=>'items'])}}

                            {{ Form::label('description', 'Description:')}}
                            {{ Form::text('description', null, ['class'=>'form-control', 'style'=>'', 'id'=>'items'])}}

                            {{ Form::label('price', 'Price:')}}
                            {{ Form::text('price', null, ['class'=>'form-control', 'style'=>'', 'id'=>'items'])}}
                            
                            {{ Form::label('quantity', 'Quantity:') }}
                            {{ Form::text('quantity', null, ['class'=>'form-control', 'style'=>'', 'id'=>'product' ]) }}

                            {{ Form::label('sku', 'Sku:') }}
                            {{ Form::text('sku', null, ['class'=>'form-control', 'style'=>'', 'id'=>'product' ]) }}
                        
                            {{ Form::label('image', 'Image:')}}
                            {{ Form::file('image', null, ['class'=>'form-control', 'style'=>'', 'id'=>'items'])}}


                            {{ Form::label('')}}
                            {{ Form::submit('Update contents', ['class'=> 'btn btn-primary btn-lg btn-block', 'style'=>'margin-top:20px'])}}
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