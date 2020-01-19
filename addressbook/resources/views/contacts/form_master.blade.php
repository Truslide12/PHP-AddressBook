<div style="margin-top:20px;"></div>
<table class="table table-hover table-sm">
  <tr class="row">
    <td class="col-sm-2">
      {!! form::label('firstName','FirstName') !!}
    </td>
    <td class="col-sm-10">
      <div class="form-group {{ $errors->has('firstName') ? 'has-error' : "" }}">
        {{ Form::text('firstName',NULL, ['class'=>'form-control', 'id'=>'firstName', 'placeholder'=>'FirstName Contact...']) }}
        {{ $errors->first('firstName', '<p class="help-block">:message</p>') }}
      </div>
    </td>
  </tr>
        
  <tr class="row">
    <td class="col-sm-2">
      {!! form::label('lastName','LastName') !!}
    </td>
    <td class="col-sm-10">
      <div class="form-group {{ $errors->has('lastName') ? 'has-error' : "" }}">
        {{ Form::text('lastName',NULL, ['class'=>'form-control', 'id'=>'lastName', 'placeholder'=>'LastName Contact...']) }}
        {{ $errors->first('lastName', '<p class="help-block">:message</p>') }}
      </div>
    </td>
  </tr>
        
  
  <tr class="row">
    <td class="col-sm-2">
      {!! form::label('email','Email') !!}
    </div>
    <td class="col-sm-10">
      <div class="form-group {{ $errors->has('email') ? 'has-error' : "" }}">
          {{ Form::text('email',NULL, ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'Email Contact...']) }}
          {{ $errors->first('email', '<p class="help-block">:message</p>') }}
        </div>
      </td>
    </tr>
    
<tr class="row">
  <td class="col-sm-2">
    {!! form::label('phone','Phone') !!}
  </td>
  <td class="col-sm-10">
    <div class="form-group {{ $errors->has('phone') ? 'has-error' : "" }}">
        {{ Form::text('phone',NULL, ['class'=>'form-control', 'id'=>'phone', 'placeholder'=>'Phone Contact...']) }}
        {{ $errors->first('phone', '<p class="help-block">:message</p>') }}
      </div>
    </td>
  </tr>
  
  <tr class="row">
    <td class="col-sm-2">
      {!! form::label('birthday','Birthday') !!}
    </td>
    <td class="col-sm-10">
      <div class="form-group {{ $errors->has('birthday') ? 'has-error' : "" }}">
          {{ Form::text('birthday',NULL, ['class'=>'form-control', 'id'=>'birthday', 'placeholder'=>'Birthday Contact...']) }}
          {{ $errors->first('birthday', '<p class="help-block">:message</p>') }}
        </div>
      </td>
    </tr>
    
  <tr class="form-group">
    <td>{{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
    </td>
  </tr>
</table>