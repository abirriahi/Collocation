<?php

namespace App\Http\Controllers;




    use Illuminate\Http\Request;
use App\User;
use App\Article;
use App\Http\Requests\BuildingRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddUserRequestAdmin;
// use Yajra\Datatables\Facades\Datatables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\support\Facades\Redirect;
use Datatables;


class BuController extends Controller
{
    public function index()
    {
        return view('admin.BU.index');
    }


    public function create()
    {
        return view('admin.BU.add');
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
            'art_validation' => $buRequest->art_validation,
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

        return Redirect('/adminpanel/articles')->with('message', "Added with success ! ");
    }



    public function edit($id  )
    {

        $bu = Article ::find($id);
        /* if($bu->user_id == 0){
             $user = '';
         }else{
             $user = $user->where('id' , $bu->user_id)->get()[0];
         }*/

        return view('admin.BU.edit', compact('bu'));
    }

    public function update($id,Requests\ArticleRequest $buRequest)
    {
//        dd($buRequest->file('images'));
        $buUpdate = Article::find($id);
        $buUpdate->fill(array_except($buRequest->all() , ['image']));
        // $buUpdate->fill($buRequest->all() )->save();

        if ($buRequest->hasFile('images')) {
            $images = $buRequest->file('images');
            $buUpdate->images()->delete();

            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $picture = date('His').$filename;
                $destinationPath = base_path() . '\public\website\images/';
                $image->move($destinationPath, $picture);

                $buUpdate->images()->create(['path' => $picture]);
            }
        }

        if ($buRequest->file('image'))
        {
            $filename = $buRequest->file('image')->getClientOriginalName();
            $buRequest->file('image')->move(
                base_path().'/public/website/images/' ,$filename
            );
            $buUpdate->fill( ['image' => $filename]);
            //  $buUpdate->save();
        }
        $buUpdate->save();

        /* if($request->file('image')){
             $fileName =  uploadImage($request->file('image') , '/public/website/bu_images/' , '500' , '362' , $buUpdate->image);
             if(!$fileName){
                 return Redirect::back()->withFlashMessage(' من فضلك اختار صورة بمقايس اقل من ٣٦٢ * ٥٠٠ ');
             }
             $buUpdate->fill(['image' => $fileName])->save();
         }*/
        return Redirect('/adminpanel/articles')->with('message', "Settings updated with success !");
        ;
    }




    public function destroy($id)
    {
        Article::find($id)->delete();
        return Redirect('/adminpanel/articles')->with('message', "Deleted with success !  ");
    }






    /*fonction  all articles*/
    public function anyData(Request $request , Article $bu)
    {


        $articles = $bu->all();


        return Datatables::of($articles)
            ->editColumn('art_nom', function ($model) {
                return '<a href="' . url('/adminpanel/articles/' . $model->id . '/edit') . '">' . $model->art_nom . '</a>';
            })
            ->editColumn('art_cathegorie', function ($model) {
                $type =art_cathegorie();
                return '<span class="badge badge-info">' . $type[$model->art_cathegorie] . '</span>';
            })
            ->editColumn('art_validation', function ($model) {
                $type =art_validation();
               // return $model->art_validation == 0 ? '<span class="badge badge-info">' . 'invalide' . '</span>' : '<span class="badge badge-warning">' . ' valide' . '</span>';

                return '<span class="badge badge-info">' . $type[$model->art_validation] . '</span>';
            })
            ->editColumn('art_type', function ($model) {
                $type =art_type();
               // return $model->art_validation == 0 ? '<span class="badge badge-info">' . 'invalide' . '</span>' : '<span class="badge badge-warning">' . ' valide' . '</span>';

                return '<span class="badge badge-info">' . $type[$model->art_type] . '</span>';
            })
            ->editColumn('control', function ($model) {

                $all = '<a href="' . url('/adminpanel/articles/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                $all .= '<a href="' . url('/adminpanel/articles/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';


                return $all;
            })
            ->make(true);

    }


    public function multiple_upload() {
        // getting all of the post data
        $files = Input::file('images');
        // Making counting of uploaded images
        $file_count = count($files);
        // start count how many uploaded
        $uploadcount = 0;
        foreach($files as $file) {
            $rules = array('file' => 'required|mimes:png,jpeg'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
            $validator = Validator::make(array('file'=> $file), $rules);
            if($validator->passes()){
                $destinationPath = 'uploads';
                $filename = $file->getClientOriginalName();
                $upload_success = $file->move($destinationPath, $filename);
                $uploadcount ++;
            }
        }
        if($uploadcount == $file_count){
            Session::flash('success', 'Upload successfully');
            return Redirect::to('upload');
        }
        else {
            return Redirect::to('upload')->withInput()->withErrors($validator);
        }
    }
    public function changeStatus ($id , $art_validation  ,Article $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['art_validation' =>  $art_validation ])->save();
        return Redirect::back()->withFlashMessage(' article modifer avec success');
    }

}
