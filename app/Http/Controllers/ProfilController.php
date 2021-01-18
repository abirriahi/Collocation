<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;
use App\Article;
use Illuminate\Http\Request;
use Datatables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
class ProfilController extends Controller
{


    public function index(Request $request)
    { 
        return view ('website.profil.userinfo',compact('user'));
    }
    
    
    
    public function userSettings(User $users){
        $user = Auth::user();
       // $admin=User::find($id);
        return view('website.profil.profileSettings' , compact('user','admin'));
    }
    public function userUpdateSettings(Request $request , User $users){
        $user = Auth::user();
        $user->fill($request->all())->save();
        return Redirect::back()->with('message', ' Updated with success ! ');
    }

    
    public function usereditName(User $users){
        $user = Auth::user();
        return view('website.profil.editName' , compact('user'));
    }

    public function userUpdateName(Requests\UserUpdateName $request , User $users){
        $user = Auth::user();
            $user->fill($request->all())->save();
        return Redirect::back()->with('message', ' Updated with success !  ');
    }





    public function userEmail(User $users){
        $user = Auth::user();
        return view('website.profil.editEmail' , compact('user'));
    }

    public function userUpdateEmail(Requests\UserUpdateEmail $request , User $users){
        $user = Auth::user();
        $user->fill($request->all())->save();
        return Redirect::back()->with('message', ' Updated with success ! ');
    }
 /*   public function changeEmail(Requests\UserUpdateEmail $request , User $users)
    {
        $user = Auth::user();
        if (Hash::check($request->email, $user->email)) {
            $hash = Hash::make($request->newemail);
            $user->fill(['email' => $hash])->save();
            return Redirect::back()->with('message', ' Email updated with success. ');

        } else {
            return Redirect::back()->with('message', 'Your old email was incorrect.');
        }
    }*/
    
    
    

    public function passwordInfo(User $users){
        $user = Auth::user();
        return view('website.profil.editPassword' , compact('user'));
    }

    public function changePassword(Requests\UserUpdatePassword $request , User $users)
    {
        $user = Auth::user();
        if (Hash::check($request->password, $user->password)) {
            $hash = Hash::make($request->newpassword);
            $user->fill(['password' => $hash])->save();
            return Redirect::back()->with('message', ' Password updated with success. ');

        } else {
            return Redirect::back()->with('message', 'Your password was incorrect.');
        }
    }
   

    
    
    
    public function destroy($id, User $user)
    {       if (Auth::user()->admin==1)
                {
                 $user->find($id)->delete();
                 return Redirect('adminpanel/users')->with('message', "User deleted with success ! ");
                 }
            else
                {
                 return Redirect('adminpanel/users')->with('message', ' You are not permitted  to delete a user !');
                }
    }


    
    /*fonction  all user*/
    public function anyData(User $user)
    {

        $users = $user->all();

        return Datatables::of($users)

            ->editColumn('name', function ($model) {
                return '<a href="'.url('/adminpanel/users/' . $model->id . '/edit').'">'.$model->name.'</a>';
            })
            ->editColumn('admin', function ($model) {
                $type = users();

                return '<span class="badge badge-info">' . $type[$model->admin] . '</span>';
            })


            ->editColumn('control', function ($model) {

                $all = '<a href="' . url('/adminpanel/users/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-file-text-o"></i></a> ';

                if ($model->admin==0 ) {

                    $all = '<a href="' . url('/adminpanel/users/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
                    $all .= '<a href="' . url('/adminpanel/users/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                }
                elseif ($model->admin==2 ) {


                    $all = '<a href="' . url('/adminpanel/users/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
                    $all .= '<a href="' . url('/adminpanel/users/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                }
                return $all;
            })
            ->make(true);


    }

}