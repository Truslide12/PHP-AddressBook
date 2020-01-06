<div class="row">
    <div class="col-sm-2">
        {!! form::label('number','Number') !!}
      </div>
      <div class="col-sm-10">
        <div class="form-group {{ $errors->has('number') ? 'has-error' : "" }}">
          {{ Form::text('number',NULL, ['class'=>'form-control', 'id'=>'number', 'placeholder'=>'Number Contact...']) }}
          {{ $errors->first('number', '<p class="help-block">:message</p>') }}
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-2">
        {!! form::label('street','street') !!}
      </div>
      <div class="col-sm-10">
        <div class="form-group {{ $errors->has('street') ? 'has-error' : "" }}">
          {{ Form::text('street',NULL, ['class'=>'form-control', 'id'=>'street', 'placeholder'=>'street Contact...']) }}
          {{ $errors->first('street', '<p class="help-block">:message</p>') }}
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      {!! form::label('city','City') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('city') ? 'has-error' : "" }}">
        {{ Form::text('city',NULL, ['class'=>'form-control', 'id'=>'city', 'placeholder'=>'City Contact...']) }}
        {{ $errors->first('city', '<p class="help-block">:message</p>') }}
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-2">
      {!! form::label('state','State') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('state') ? 'has-error' : "" }}">
        {{ Form::text('state',NULL, ['class'=>'form-control', 'id'=>'state', 'placeholder'=>'State Contact...']) }}
        {{ $errors->first('state', '<p class="help-block">:message</p>') }}
      </div>
    </div>
  </div>
    
  <div class="row">
    <div class="col-sm-2">
      {!! form::label('zip','Zip') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('zip') ? 'has-error' : "" }}">
        {{ Form::text('zip',NULL, ['class'=>'form-control', 'id'=>'zip', 'placeholder'=>'Zip Contact...']) }}
        {{ $errors->first('zip', '<p class="help-block">:message</p>') }}
      </div>
    </div>
  </div>
      
  <div class="row">
      <div class="col-sm-2">
        {!! form::label('type','Type') !!}
      </div>
      <div class="col-sm-10">
        <div class="form-group {{ $errors->has('type') ? 'has-error' : "" }}">
          {{ Form::select('type', array('Home' => 'home', 'Work'=>'work', 'Secondary'=>'secondry', 'Other' => 'other'), ['class'=>'form-control', 'id'=>'type', 'placeholder'=>'Type Contact...']) }}
          {{ $errors->first('type', '<p class="help-block">:message</p>') }}
        </div>
      </div>
    </div>

      <div class="form-group">
        {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
      </div>