<div class="productbox" >
    <div class="clearfix"></div>
    <br>


<div class="text2{{ $errors->has('art_nom') ? ' has-error' : '' }}">
    <div class="col-md-12">
        <label class="col-md-4 control-label">Titre</label>
        {!! Form::text("art_nom" , null , ['class' => 'form-control']) !!}
        @if ($errors->has('art_nom'))
            <span class="help-block">
                            <strong>{{ $errors->first('art_nom') }}</strong>
          </span>
        @endif
    </div>
</div>

<div class="clearfix"></div>
<br>


<div class="text2{{ $errors->has('art_cathegorie') ? ' has-error' : '' }}">
    <div class="col-md-12">
        <label class="col-md-4 control-label">Catégorie</label>
        {!! Form::select("art_cathegorie" ,art_cathegorie() , null , ['class' => 'form-control']) !!}
        @if ($errors->has('art_cathegorie'))
            <span class="help-block">
                        <strong>{{ $errors->first('art_cathegorie') }}</strong>
                    </span>
        @endif
    </div>
</div>

<div class="clearfix"></div>
<br>


<div class="text2{{ $errors->has('art_prix') ? ' has-error' : '' }}">
    <div class="col-md-12">
        <label class="col-md-4 control-label">Prix</label>
        {!! Form::text("art_prix" , null , ['class' => 'form-control']) !!}
        @if ($errors->has('art_prix'))
            <span class="help-block">
                              <strong>{{ $errors->first('art_prix') }}</strong>
                        </span>
        @endif
    </div>
</div>

<div class="clearfix"></div>
<br>

<div class="text2{{ $errors->has('chambres') ? ' has-error' : '' }}">
    <div class="col-md-12">
        <label class="col-md-4 control-label">Chambres</label>
        {!! Form::select("chambres" ,chambres_number() ,  null , ['class' => 'form-control select2']) !!}
        @if ($errors->has('chambres'))
            <span class="help-block">
                          <strong>{{ $errors->first('chambres') }}</strong>
                    </span>
        @endif
    </div>
</div>

<div class="clearfix"></div>
<br>

<div class="text2{{ $errors->has('espace') ? ' has-error' : '' }}">
    <div class="col-md-12">
        <label class="col-md-4 control-label">Superficie</label>
        {!! Form::text("espace" ,  null , ['class' => 'form-control select2']) !!}
        @if ($errors->has('espace'))
            <span class="help-block">
                <strong>{{ $errors->first('espace') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="clearfix"></div>
<br>

<div class="text2{{ $errors->has('art_ville') ? ' has-error' : '' }}">
    <div class="col-md-12">
        <label class="col-md-4 control-label">Régions</label>
        {!! Form::select("art_ville" ,art_ville() ,  null , ['class' => 'form-control select2']) !!}
        @if ($errors->has('art_ville'))
            <span class="help-block">
                          <strong>{{ $errors->first('art_ville') }}</strong>
                    </span>
        @endif
    </div>
</div>



<div class="clearfix"></div>
<br>



@if(!isset($user))
    <div class="text2{{ $errors->has('art_validation') ? ' has-error' : '' }}">
        <div class="col-md-12">
            <label class="col-md-4 control-label">Status</label>
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

<div class="text2{{ $errors->has('image') ? ' has-error' : '' }}">
    <div class="col-md-12">
        <label class="col-md-4 control-label">Images</label>
        @if(isset($bu))
            @if( count($bu->images) != 0)
                @foreach($bu->images as $image)
                    <img src="{{  Request::root().'/website/images/'.$image->path}}" width="100" />
                @endforeach
                <div class="clearfix"></div>
                <br>
            @endif
        @endif
        {!! Form::file("images[]" , ['class' => 'form-control', 'multiple' => true]) !!}

        @if ($errors->has('image'))
            <span class="help-block">
                <strong>{{ $errors->first('image') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<br>

<div class="text2{{ $errors->has('image') ? ' has-error' : '' }}">
    <div class="col-md-12">
        <label class="col-md-4 control-label">Thumbnail</label>
        @if(isset($bu))
            @if( $bu->image != '')
                <img src="{{  Request::root().'/website/images/'.$bu->image}}" width="100" />
                <div class="clearfix"></div>
                <br>
            @endif
        @endif
        {!! Form::file("image" , ['class' => 'form-control']) !!}

        @if ($errors->has('image'))
            <span class="help-block">
                <strong>{{ $errors->first('image') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="clearfix"></div>
<br>

<div class="text2{{ $errors->has('art_description') ? ' has-error' : '' }}">
    <div class="col-md-12">
        <label class="col-md-4 control-label">Description</label>
        {!! Form::textarea("art_description" , null , ['class' => 'form-control']) !!}
        @if ($errors->has('art_description'))
            <span class="help-block">
                        <strong>{{ $errors->first('art_description') }}</strong>
                   </span>
        @endif
    </div>
</div>

<div class="clearfix"></div>
<br>



<div class="text2{{ $errors->has('art_address') ? ' has-error' : '' }}">
    <div class="col-md-12">
        <label class="col-md-4 control-label">Addresse</label>
        {!! Form::text("art_address" ,  null , ['class' => 'form-control select2', 'id' => 'art_address']) !!}
        @if ($errors->has('art_address'))
            <span class="help-block">
                <strong>{{ $errors->first('art_address') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<br>


    <div class="col-md-12">
        <label for=""> Trouvez votre addresse sur la map </label>
        <br>
        <input type="text" id="searchmap">
        <div class="clearfix"></div>
        <br>
        <div id="map-canvas" style="margin:0 auto"></div>
    </div>


    <div class="clearfix"></div>
    <br>

    <div class="text2{{ $errors->has('art_latitude') ? ' has-error' : '' }}"hidden>
        <div class="col-md-6">
            <label class="col-md-4 control-label">Latitude</label>
            {!! Form::text("art_latitude" ,  null , ['class' => 'form-control select2', 'id' => 'art_latitude']) !!}
            @if ($errors->has('art_latitude'))
                <span class="help-block">
                <strong>{{ $errors->first('art_latitude') }}</strong>
            </span>
            @endif
        </div>
    </div>


    <div class="text2{{ $errors->has('art_langtuide') ? ' has-error' : '' }}" hidden>
        <div class="col-md-6">
            <label class="col-md-4 control-label">Longitude</label>
            {!! Form::text("art_langtuide" ,  null , ['class' => 'form-control select2', 'id' => 'art_langtuide']) !!}
            @if ($errors->has('art_langtuide'))
                <span class="help-block">
                <strong>{{ $errors->first('art_langtuide') }}</strong>
            </span>
            @endif
        </div>
    </div>



<div class="clearfix"></div>
<br>


<div class="form-group">
    <div class="col-md-8">
        <button type="submit" class="btn btn-primary">
             Enregistrer les modifications
        </button>
    </div>
</div>
    <div class="clearfix"></div>
    <br>


</div>




