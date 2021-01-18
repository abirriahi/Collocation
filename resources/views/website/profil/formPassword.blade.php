
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <div class="col-md-12">
        <input type="password" class="form-control" name="password" placeholder="Mot de passe actuel" style="margin-top: 10px">
        @if ($errors->has('password'))
            <span class="help-block">
                 <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
    </div>
    <div class="clearfix"></div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <div class="col-md-12">
        <input type="password" class="form-control" name="newpassword" placeholder="Nouveau mot de passe"style="margin-top: 10px" >
        @if ($errors->has('newpassword'))
            <span class="help-block">
                 <strong>{{ $errors->first('newpassword') }}</strong>
            </span>
        @endif
    </div>
    </div>

    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <div class="col-md-12">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmer Mot de passe"style="margin-top: 10px" >
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <div class="clearfix"></div>


    <div class="col-md-12">
        <button type="submit" class="btn btn-warning"style="margin-top: 10px">
            <i class="fa fa-btn fa-user" style="color:#ffffff"></i>
            Enregistrer les modifications
        </button>
    </div>


