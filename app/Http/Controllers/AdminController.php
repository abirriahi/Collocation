<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Article;
use App\ContactUs;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     *
     */

    public function indexxxx()
    {

        return view('admin.home.index2');
    }

    public function index(User $user , Article $bu , ContactUs $contactUs)
    {
        $buCountactive = countAllBuAppendTostatus(1);
        $buWating = countAllBuAppendTostatus(0);
        $usersCount = $user->count();
        $contactUsCount = $contactUs->count();

         //$mapping = $bu->select('art_latitude' , 'art_langtuide' , 'art_nom')->get();
        $chart = $bu->select(DB::raw('COUNT(*) as counting , month '))->where('year' , date('Y'))->groupBy('month')->orderBy('month' , 'asc')->get()->toArray();

        $array = [];
        if(isset($chart[0]['month'])) {
            for ($i = 1; $i < $chart[0]['month']; $i++) {
                $array[] = 0;
            }
        }
        $new = array_merge($array , $chart);

        $lastesUsers  = $user->take('8')->orderBy('id' , 'desc')->get();
        $lastesBu = $bu->take('10')->orderBy('id' , 'desc')->get();
        $lastesdemande = $bu->where('art_type',1)->take('10')->orderBy('id' , 'desc')->get();
        $lastesContactus = $contactUs->take('7')->orderBy('id' , 'desc')->get();

        $articles = DB::table('articles')->get();

        return view('admin.home.index' ,
            compact(
                'buCountactive','buWating','usersCount','contactUsCount'  ,'new' ,'lastesdemande', 'lastesUsers' , 'lastesBu' ,'lastesContactus' , 'articles'
            )
        );
    }


    public function showYearStatics(Article $bu ){
        $year = date('Y');
        $chart = $bu->select(DB::raw('COUNT(*) as counting , month '))->where('year' , date('Y'))->groupBy('month')->orderBy('month' , 'asc')->get()->toArray();
        $array = [];
        if(isset($chart[0]['month'])){
            for($i = 1;$i < $chart[0]['month'];$i++){
                $array[] = 0;
            }
        }

        $new = array_merge($array , $chart);
        return view('admin.home.statics' , compact('year' , 'new'));
    }

    public function showThisYear(Request $request , Article $bu){
        $year = $request->year;
        $chart = $bu->select(DB::raw('COUNT(*) as counting , month '))->where('year' , $year)->groupBy('month')->orderBy('month' , 'asc')->get()->toArray();
        $array = [];
        if(isset($chart[0]['month'])) {
            for ($i = 1; $i < $chart[0]['month']; $i++) {
                $array[] = 0;
            }
        }
        $new = array_merge($array , $chart);
        return view('admin.home.statics' , compact('year' , 'new'));
    }


    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    public function gmaps()
    {
        $articles = DB::table('articles')->get();
        return view('admin.home.index',compact('articles'));
    }
}