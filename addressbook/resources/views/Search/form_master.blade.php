
<div class="container">
                        <div class="col-sm-2">
                                {!! form::label('search','Search') !!}
                        </div>
                        <div class="col-sm-10">
                                <div class="form-group {{ $errors->has('search') ? 'has-error' : "" }}">
                                {{ Form::text('search',NULL, ['class'=>'form-control', 'id'=>'search', 'placeholder'=>'search contacts...']) }}
                                {{ $errors->first('search', '<p class="help-block">:message</p>') }}
                                </div>
                        </div>
                <div class="form-group">
                {{ Form::button(isset($model)? 'Find' : 'search' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
                </div>
</div>
