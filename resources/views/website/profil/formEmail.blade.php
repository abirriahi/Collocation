

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-md-12" style="margin-top: 10px">
                        {!! Form::email('email', null , ['class' => 'form-control', 'placeholder' => "Entrer l'adresse E-mail"]) !!}
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
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
                <!--

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input type="email" class="form-control" name="email" placeholder="email actuel" style="margin-top: 10px">
                @if ($errors->has('email'))
                        <span class="help-block">
                             <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input type="email" class="form-control" name="newemail" placeholder="Nouveau email"style="margin-top: 10px" >
                @if ($errors->has('newemail'))
                        <span class="help-block">
                             <strong>{{ $errors->first('newemail') }}</strong>
                    </span>
                @endif
                        </div>
                    </div>
            -->