@if(count($articles))

    @foreach($articles->chunk(3) as $items)

        <div class="row">

            @foreach($items as $article)
                <div class="col-md-4">
                    <div class="productbox">
                        <img src={{checkIfImageIsexist($article->image)}} alt="Image" height="100%" width="220">
                        {{--<img src="{{ checkIfImageExists($article->image) }}" class="img-responsive">--}}
                        <div class="producttitle">{{ $article->art_nom }}</div>

                        <p class="text-justify disc">{{ str_limit($article->art_description, 65) }}</p>
                        <div class="productprice">
                            @if ($article->espace!=0)
                                <span class="pull-left">
                                Superficie:
                                    {{ $article->espace }} m²
                            </span>
                            @endif
                            <div  class="pull-right">{{ $article->art_prix }} TND</div>
                            <div class="clearfix"></div>
                            <span class="pull-left">
                               Nombre de chambres:
                                {{ $article->chambres }}
                            </span>
                            <div class="clearfix"></div>
                            <span class="pull-left">
                                Région:
                                {{ art_ville()[$article->art_ville] }}
                            </span>
                            <div class="clearfix"></div>

                            <div class="pull-right">
                                <a href="{{ url('/articles/' . $article->id) }}"
                                   class="btn btn-primary btm-sm" role="button">
                                    Détails <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>
                            </div>

                            <div class="pull-right" style="margin-right: 2px;">
                                <a href="{{ url('/editAnnonce/' . $article->id) }}"
                                   class="btn btn-primary btm-sm" role="button">
                                    Modifier
                                </a>
                            </div>
                                <div class="pull-right" style="margin-right: 2px;">
                                    <a href="{{ url('/mesAnnonces/' . $article->id . '/delete') }}"
                                       class="btn btn-primary btm-sm" role="button">
                                        Supprimer
                                    </a>
                                </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    @endforeach
@else
    <p class="text-center lead">Aucun élément à afficher.</p>
@endif