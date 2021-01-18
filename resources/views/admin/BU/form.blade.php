

<div class="clearfix"></div>
<br>

         <div class="text2{{ $errors->has('art_nom') ? ' has-error' : '' }}">
            <div class="col-md-10">
                <label class="col-md-4 control-label">Titre</label>
                {!! Form::text("art_nom" , null , ['class' => 'form-control','readonly' => 'true']) !!}
                @if ($errors->has('art_nom'))
                         <span class="help-block">
                            <strong>{{ $errors->first('art_nom') }}</strong>
                        </span>
                @endif
            </div>
         </div>

<div class="clearfix"></div>
<br>
        <div class="text2{{ $errors->has('art_desc') ? ' has-error' : '' }}">
            <div class="col-md-10">
                <label class="col-md-4 control-label">Description</label>
                {!! Form::text("art_desc" , null , ['class' => 'form-control','readonly' => 'true']) !!}
                @if ($errors->has('art_desc'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('art_desc') }}</strong>
                                   </span>
                @endif
            </div>
        </div>
<div class="clearfix"></div>
<br>

        <div class="text2{{ $errors->has('art_description') ? ' has-error' : '' }}">
            <div class="col-md-8">
                <label class="col-md-4 control-label">Description detaillée</label>
                {!! Form::textarea("art_description" , null , ['class' => 'form-control','readonly' => 'true']) !!}
                @if ($errors->has('art_description'))
                    <span class="help-block">
                                <strong>{{ $errors->first('art_description') }}</strong>
                           </span>
                @endif
            </div>
        </div>

        <div class="text2{{ $errors->has('art_cathegorie') ? ' has-error' : '' }}">
            <div class="col-md-2">
                <label class="col-md-4 control-label">Catégorie</label>
                {!! Form::select("art_cathegorie" ,art_cathegorie() , null , ['class' => 'form-control','readonly' => 'true']) !!}
                @if ($errors->has('art_cathegorie'))
                    <span class="help-block">
                        <strong>{{ $errors->first('art_cathegorie') }}</strong>
                    </span>
                @endif
            </div>
        </div>



          <div class="text2{{ $errors->has('art_prix') ? ' has-error' : '' }}">
                <div class="col-md-2">
                    <label class="col-md-4 control-label">Prix</label>
                    {!! Form::text("art_prix" , null , ['class' => 'form-control','readonly' => 'true']) !!}
                    @if ($errors->has('art_prix'))
                        <span class="help-block">
                              <strong>{{ $errors->first('art_prix') }}</strong>
                        </span>
                    @endif
                  </div>
          </div>




         <div class="text2{{ $errors->has('chambres') ? ' has-error' : '' }}">
             <div class="col-md-2">
                 <label class="col-md-4 control-label">Chambres</label>
                 {!! Form::select("chambres" ,chambres_number() ,  null , ['class' => 'form-control select2','readonly' => 'true']) !!}
                 @if ($errors->has('chambres'))
                     <span class="help-block">
                          <strong>{{ $errors->first('chambres') }}</strong>
                    </span>
                 @endif
             </div>
         </div>

         <div class="text2{{ $errors->has('espace') ? ' has-error' : '' }}">
             <div class="col-md-2" >
                 <label class="col-md-4 control-label">Superficie</label>
                 {!! Form::text("espace" ,  null , ['class' => 'form-control select2','readonly' => 'true']) !!}
                 @if ($errors->has('espace'))
                     <span class="help-block">
                          <strong>{{ $errors->first('espace') }}</strong>
                    </span>
                 @endif
             </div>
         </div>


        <div class="text2{{ $errors->has('art_ville') ? ' has-error' : '' }}">
            <div class="col-md-2">
                <label class="col-md-4 control-label">Région</label>
                {!! Form::select("art_ville" ,art_ville() ,  null , ['class' => 'form-control select2','readonly' => 'true']) !!}
                @if ($errors->has('art_ville'))
                    <span class="help-block">
                          <strong>{{ $errors->first('art_ville') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="clearfix"></div>
        <br>

        <div class="text2{{ $errors->has('art_address') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <label class="col-md-4 control-label">Addresse</label>
                {!! Form::text("art_address" ,  null , ['class' => 'form-control select2', 'id' => 'art_address','readonly' => 'true']) !!}
                @if ($errors->has('art_address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('art_address') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="clearfix"></div>
        <br>

            <div class="row" style="margin-left:15px">
                    @if(isset($bu))
                        @if( count($bu->images) != 0)
                            @foreach($bu->images as $image)
                                <img src="{{  Request::root().'/website/images/'.$image->path}}" width="200" style="margin-left:20px;"/>
                            @endforeach

                        @endif
                    @endif

                 @if(isset($bu))
                     @if( $bu->image != '')
                         <img src="{{  Request::root().'/website/images/'.$bu->image}}" width="200"style="margin-left:20px; margin-top:20px;" />

                     @endif
                 @endif

            </div>

            <div class="clearfix"></div>
            <br>

            @if(!isset($user))
                <div class="text2{{ $errors->has('art_validation') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                       <h3> <label class="col-md-4 control-label">Status</label></h3>
                        {!! Form::select("art_validation" , art_validation() , null , ['class' => 'form-control']) !!}
                        @if ($errors->has('art_validation'))
                            <span class="help-block">
                                 <strong>{{ $errors->first('art_validation') }}</strong>
                             </span>
                        @endif
                    </div>
                </div>
            @endif


            <div class="clearfix"></div>
            <br>


         <div class="form-group">
            <div class="col-md-12 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i> Enregistrer les modifications
                </button>
            </div>
        </div>
