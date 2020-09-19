@extends('layouts.admin.app')

@section('title')
  <title>Plans</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="pull-right">
            <a href="" data-toggle="tooltip" title="Cancel" class="btn btn-default">
                <i class="fa fa-reply"></i>
            </a>
        </div>
        <h1>PLANS</h1>
    </div>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-pencil"></i> Add New Plan</h3>
            </div>
            <div class="panel-body">
            {!! Form::open(['id' => 'form-plan', 'route' => ['admin.plans.store'], 'method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="form-group required">
                    {!! Form::label('name', 'Name', ['class' => 'control-label col-sm-2']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name', 'requried']) !!}
                    </div>
                </div>
                <div class="form-group required">
                    {!! Form::label('price', 'Price', ['class' => 'control-label col-sm-2']) !!}
                    <div class="col-sm-10">
                        {!! Form::number('price_cents', '', ['class' => 'form-control', 'placeholder' => 'Price cents', 'requried']) !!}
                    </div>
                </div>
                <div class="form-group required">
                    {!! Form::label('period_days', 'Period Days', ['class' => 'control-label col-sm-2']) !!}
                    <div class="col-sm-10">
                        {!! Form::number('period_days', '', ['class' => 'form-control', 'placeholder' => 'Period Days', 'requried']) !!}
                    </div>
                </div>
                <div class="form-group required">
                    {!! Form::label('trial_days', 'Trial Days', ['class' => 'control-label col-sm-2']) !!}
                    <div class="col-sm-10">
                        {!! Form::number('trial_days', '', ['class' => 'form-control', 'placeholder' => 'Trial Days', 'requried']) !!}
                    </div>
                </div>

                 <div class="form-group required">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" data-toggle="tooltip" title="Save" class="btn btn-primary">
                            <i class="fa fa-save"></i> Save
                        </button>
                    </div>
                </div>
                
            {!! Form::close() !!} 
            </div>
        </div>
    </div>
@endsection
