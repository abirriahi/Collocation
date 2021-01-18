
@if(Auth::user()->admin==2)



        <!-- assistant norml-->



<!-- assistant connecter modif son propre compt-->
@if(Auth::user()->admin==2)
    @if($user->admin!=1)

        @if($user->id==Auth::user()->id)

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label">Nom_famille</label>

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
                <label class="col-md-4 control-label">Adresse Email</label>

                <div class="col-md-6">
                    {!!Form::text("email",null,['class'=>'form-control'])!!}
                            <!--   <input type="email" class="form-control" name="email" value="{{ old('email') }}">-->

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>  </div>

            <!-- button-->
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-user"></i>Enregistrer
                    </button>
                </div>
            </div>
            <!--   modif mot de passe et button2 -->
            <br><br><br>
            <div >
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">
                                        Modifier  mot de passe
                                        {{$user->name}}
                                    </h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <!-- appel du formulaire de modification du mot de passe  -->
                                    {!!Form::open(['url'=>'adminpanel/users/changePassword/','method'=>'post'] ) !!}
                                    <input type="hidden" value= "{{ $user->id }}"name="user_id">
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                        <label class="col-md-4 control-label">mot de passe</label>

                                        <div class="col-md-10">
                                            <input type="password" class="form-control" name="password">

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>


                                        <div class="col-md-2 col-md-offset-6">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-btn fa-user"></i>changer mot de passe
                                            </button>
                                        </div>


                                    </div>

                                    {!! Form::close()!!}



                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>










            @endif
            @endif






















                    <!--  assistant modif un client-->
            @if($user->admin==0)


                @if(isset($user))
                    <div class="text2{{ $errors->has('admin') ? ' has-error' : '' }}">


                        <div class="col-md-12">

                            {!! Form::select("admin" , ['0' => 'client' , '2' => 'assistant'] , null , ['class' => 'form-control']) !!}

                            @if ($errors->has('admin'))
                                <span class="help-block">
                    <strong>{{ $errors->first('admin') }}</strong>
                </span>
                            @endif
                        </div>
                    </div>
                    <!-- button-->
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-user"></i>Enregistrer
                            </button>
                        </div>
                    </div>
                    <!--   modif mot de passe e
            <div class="clearfix"></div>
            <br>
            @endif


                    @endif

                            <!--  assistant modif admin-->

                    @if($user->admin==1)
                        impossible de modifier le compte d'administrateur
                    @endif



                @endif

            @endif










