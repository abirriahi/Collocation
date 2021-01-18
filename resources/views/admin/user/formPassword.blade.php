<div class="clearfix"></div>
<div>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            Modifier le mot de passe de {{$user->name}}
                        </h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">



                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" style="margin-top: 10px"> Mot de passe actuel: </label>
                            <div class="col-md-6">
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
                            <label class="col-md-4 control-label" style="margin-top: 10px"> Nouveau mot de passe: </label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="newpassword" placeholder="Nouveau mot de passe"style="margin-top: 10px" >
                                @if ($errors->has('newpassword'))
                                    <span class="help-block">
                 <strong>{{ $errors->first('newpassword') }}</strong>
            </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" style="margin-top: 10px"> Confirmer mot de passe: </label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmer Mot de passe"style="margin-top: 10px" >
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
                                @endif
                            </div>
                        </div>


                        <div class="clearfix"></div>

                        <div class="form-group" style="margin-top: 10px">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"> Enregistrer</i>
                                </button>
                            </div>
                        </div>




                    </div>
            </div>
        </div>

    </section>
</div>