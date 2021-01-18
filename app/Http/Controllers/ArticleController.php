<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleImages;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where('art_validation', 1)
            ->orderBy('id', 'desc')
            ->paginate(15);

        return view('website.article.index', compact('articles'));
    }


    public function byType($id)
    {

        if (in_array($id, ['0', '1', '2'])) {
            $articles = Article::where('art_validation', 1)
                ->where('type', $id)
                ->orderBy('id', 'desc')
                ->paginate(15);

            return view('website.article.index', compact('articles'));
        } else {
            abort(404);
        }
    }

    public function showApparts()
    {
        $buildings = Article::where('status', 1)
            ->where('art_cathegorie', 1)
            ->orderBy('id', 'desc')
            ->paginate(15);

        return view('website.article.index', compact('articles'));
    }


    public function byCategory($id)
    {

        if (in_array($id, ['0', '1', '2'])) {
            $articles = Article::where('art_validation', 1)
                ->where('art_cathegorie', $id)
                ->orderBy('id', 'desc')
                ->paginate(15);

            return view('website.article.index', compact('articles'));
        } else {
            abort(404);
        }
    }

    public function showMaisons()
    {
        $buildings = Building::where('status', 1)
            ->where('art_cathegorie', 0)
            ->orderBy('id', 'desc')
            ->paginate(15);

        return view('website.article.index', compact('articles'));
    }

    public function search(Request $request)
    {
        $query = Article::where('art_validation', 1);
       // $queryy = Article::where('art_type', 1);
        $search = [];
        foreach ($request->except(['_token', 'page']) as $key => $val) {
            if ($val != null) {
                if ($key == 'prix_de') {
                    $query->where('art_prix', '>=', $val);
                } elseif ($key == 'prix_a') {
                    $query->where('art_prix', '<=', $val);
                } else {
                    $query->where($key, $val);
                }
                $search[$key] = $val;
            }
        }

        $articles = $query->orderBy('id', 'desc')->paginate(15);
        return view('website.article.index', compact('articles', 'search'));
    }

    public function show(Article $article)
    {
$similar_type = Article::where('art_cathegorie', $article->art_cathegorie)->inRandomOrder()->take(3)->get();
        return view('website.article.show', compact('article', 'similar_type'));
    }



    public function clientaddarticle()
    {
        return view('website.article.add');
    }
    public function store(Requests\ArticleRequest $buRequest, Article $bu)
    {

        $realname = null;
        if ($buRequest->file('image'))
        {
            $filename = date('His') . $buRequest->file('image')->getClientOriginalName();
            $buRequest->file('image')->move(
                base_path().'/public/website/images/' ,$filename
            );
            $image=$filename;
        }
        else{
            $image='';
        }

        $user = Auth::user();
        $data = [
            'art_nom' => $buRequest->art_nom,
            'art_cathegorie' => $buRequest->art_cathegorie,
            'art_prix' => $buRequest->art_prix,
            'art_ville' => $buRequest->art_ville,
            'art_description' => $buRequest->art_description,
            'user_id' => $user->id,
            'image' =>$image,
            'chambres' => $buRequest->chambres,
            'art_langtuide' => $buRequest->art_langtuide,
            'art_latitude' => $buRequest->art_latitude,
            'art_address' => $buRequest->art_address,
            'espace' => $buRequest->espace,
            'art_type' => $buRequest->art_type,
        ];
//        there are some missing fields
        $building = $bu->create($data);

        if ($buRequest->hasFile('images')) {
            $images = $buRequest->file('images');

            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $picture = date('His').$filename;
                $destinationPath = base_path() . '\public\website\images/';
                $image->move($destinationPath, $picture);

                $building->images()->create(['path' => $picture]);

            }
        }

        return Redirect('/articles')->with('message', " Demande soumise. ");
    }

    public function mesannonces(Article $articles){
        $user = Auth::user();
        $articles= $articles->where('user_id' , $user->id)->where('art_validation' , 1)->paginate(10);
        return view('website.profil.mesannonces' , compact('articles' , 'user'));
    }
    public function mesAnnoncesenattente(Article $articles){
        $user = Auth::user();
        $articles= $articles->where('user_id' , $user->id)->where('art_validation' , 0)->paginate(10);
        return view('website.profil.mesannoncesenattente' , compact('articles' , 'user'));
    }
    public function mesAnnoncesrefuse(Article $articles){
        $user = Auth::user();
        $articles= $articles->where('user_id' , $user->id)->where('art_validation' , 2)->paginate(10);
        return view('website.profil.mesannoncesrefuse' , compact('articles' , 'user'));
    }
    public function destroy($id, Article $articles)
    {
        $articles->find($id)->delete();
        return Redirect('/mesAnnonces')->with('message', "Deleted with success !  ");

    }

    public function editAnnonce1($id){

        $bu = Article ::find($id);
        return view('website.profil.editAnnonce' , compact('bu'));
    }

    public function updateAnnonce1(Requests\ArticleRequest $request , User $users){
        $user = Auth::user();
        $user->fill($request->all())->save();
        return Redirect::back()->with('message', ' Updated with success ! ');
    }



    public function editAnnonce($id ,Article $bu){
        $user = Auth::user();
        $buInfo = $bu->find($id);
        if($buInfo->art_validation == 1){
            $messageTitle = " article valider ";
            $messageBody = "article $buInfo->name cet article est valider vous ne pouvez pas le modifier ,pour le modifer  allez au";
            return view('website.profil.editAnnonce' , compact('buInfo' , 'messageTitle' , 'messageBody'));
        }
        $bu = $buInfo;
        return view('website.profil.editAnnonce' , compact('bu' , 'user'));
    }
    public function updateAnnonce(Request $request , Article $bu){
        $buUpdate = $bu->find($request->bu_id);
        $buUpdate->fill(array_except($request->all() , ['image']))->save();
        if($request->file('image')){
            $fileName =  uploadImage($request->file('image') , '/public/website/images/', $buUpdate->image);

            $buUpdate->fill(['image' => $fileName])->save();
        }
        return Redirect::back()->withFlashMessage('image modifier');
    }
    public function wsview(Request $request)
    {
        $query = Article::where('art_validation', 1);

        $search = [];
        foreach ($request->except(['_token', 'page']) as $key => $val) {
            if ($val != null) {
                if ($key == 'prix_de') {
                    $query->where('art_prix', '>=', $val);
                } elseif ($key == 'prix_a') {
                    $query->where('art_prix', '<=', $val);
                } else {
                    $query->where($key, $val);
                }
                $search[$key] = $val;
            }
        }

        $articles = $query->orderBy('id', 'desc')->paginate(15);

        $resfinal = [];
        foreach ($articles as $art) {
            $imageQuery = ArticleImages::where('article_id', $art->id)->paginate(15);
            $res['info']=$art;
            $res['images'] = $imageQuery;
            array_push($resfinal, $res);
        }
        
        
        return Response::json($resfinal);
    }
    public function wsshow(Article $article)
    {
        $similar_type = Article::where('art_cathegorie', $article->art_cathegorie)->inRandomOrder()->take(3)->get();
        return Response::json($article);
    }

}
