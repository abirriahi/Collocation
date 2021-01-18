

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="col-md-12"style="margin-top: 10px">
        {!!Form::text("name",null,['class'=>'form-control'])!!}
        @if ($errors->has('name'))
            <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                            </span>
        @endif
    </div>
</div>


<div class="col-md-12"style="margin-top: 10px">
    <button type="submit" class="btn btn-warning"style="margin-top: 10px">
        <i class="fa fa-btn fa-user" style="color:#ffffff"></i>
        Enregistrer les modifications
    </button>
</div>
