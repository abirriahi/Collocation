@if(Auth::user()->admin==1)
    @if($user->admin==1)
        @if($user->id==Auth::user()->id)
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Nom: </label>
                    <div class="col-md-6">
                        {!!Form::text("name",null,['class'=>'form-control'])!!}
                        @if ($errors->has('name'))
                            <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label" style="margin-top: 10px">Adresse E-mail: </label>
                    <div class="col-md-6" style="margin-top: 10px">
                        {!!Form::text("email",null,['class'=>'form-control'])!!}
                                <!--   <input type="email" class="form-control" name="email" value="{{ old('email') }}">-->
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- button-->
                <div class="form-group" style="margin-top: 10px">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-user"> Enregistrer</i>
                        </button>
                    </div>
                </div>
                <!--   modif mot de passe et button2 -->

         @endif
    @endif
    @if($user->admin==2)
        @if(isset($user))
            <div class="text2{{ $errors->has('admin') ? ' has-error' : '' }}">
                <div class="col-md-4">
                    {!! Form::select("admin" , ['0' => 'user' , '2' => 'assistant'] , null , ['class' => 'form-control']) !!}
                    @if ($errors->has('admin'))
                        <span class="help-block">
                             <strong>{{ $errors->first('admin') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="clearfix"></div>


            <div class="form-group">
                <div class="col-md-6" style="margin-top: 10px">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-user"> Enregistrer</i>
                    </button>
                </div>
            </div>
        @endif

    @elseif($user->admin==0)
        @if(isset($user))
            <div class="text2{{ $errors->has('admin') ? ' has-error' : '' }}">
                <div class="col-md-4">
                    {!! Form::select("admin" , ['0' => 'user' , '2' => 'assistant'] , null , ['class' => 'form-control']) !!}
                    @if ($errors->has('admin'))
                        <span class="help-block">
                              <strong>{{ $errors->first('admin') }}</strong>
                       </span>
                    @endif
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <div class="col-md-6" style="margin-top: 10px">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-user"> Enregistrer</i>
                    </button>
                </div>
            </div>

        @endif
    @endif
    @if($user->admin==1 && $user->id!=Auth::user()->id)
        <div class="clearfix"></div>
        <div class="col-md-6">
            <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"> </span>
                <span class="sr-only">Error: </span>
                Vous ne pouvez pas modifier les paramètres de contrôle du compte {{$user->name}} .
            </div>
        </div>
    @endif
@endif