<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Nom: </label>
    <div class="col-md-6" >
        {!! Form::text('name',null , ['class' => 'form-control', 'placeholder' => 'Entrer le nom', 'required' => 'required', 'autofocus' => 'true']) !!}

        @if ($errors->has('name'))
            <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

    <label class="col-md-4 control-label" style="margin-top: 20px">Adresse E-mail: </label>
    <div class="col-md-6" style="margin-top: 20px">
        {!! Form::email('email', null , ['class' => 'form-control', 'placeholder' => "Entrer l'adresse E-mail", 'required' => 'required']) !!}

        @if ($errors->has('email'))
            <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

    <label class="col-md-4 control-label" style="margin-top: 20px">Mot de passe: </label>
    <div class="col-md-6" style="margin-top: 20px">
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Saisir le mot de passe']) !!}

        @if ($errors->has('password'))
            <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

@if(Auth::user()->admin==1))

    <div class="form-group{{ $errors->has('admin') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label" style="margin-top: 20px">Rôle: </label>
        <div class="col-md-6" style="margin-top: 20px">
            {!! Form::select('admin' , ['0' => 'user' , '2' => 'assistant'] , null , ['class' => 'form-control']) !!}
            @if ($errors->has('admin'))
                <span class="help-block">
                    <strong>{{ $errors->first('admin') }}</strong>
                </span>
            @endif
        </div>
    </div>
@endif
<div class="clearfix" ></div>
<div class="form-group">
    <div class="col-md-6" style="margin-left: 415px ; margin-top: 20px">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-user"> Enregistrer</i>
        </button>
    </div>
</div>


