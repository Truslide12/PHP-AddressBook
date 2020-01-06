@extends('layouts.app')
<div class="container">
                        <div class="col-sm-2">
                                {!! form::label('getSearch','Search') !!}
                        </div>
                        <div class="col-sm-10">
                                <div class="form-group {{ $errors->has('getSearch') ? 'has-error' : "" }}">
                                {{ Form::text('getSearch',NULL, ['class'=>'form-control', 'id'=>'getSearch', 'placeholder'=>'search contacts...']) }}
                                {{ $errors->first('getSearch', '<p class="help-block">:message</p>') }}
                                </div>
                        </div>
                <div class="form-group">
                {{ Form::button(isset($model)? 'Find' : 'search' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
                </div>
</div>
