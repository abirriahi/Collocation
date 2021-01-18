<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;
use App\Messages;
use App\Article;
use Illuminate\Http\Request;
use Datatables;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{


    public function index()
    {

        return view('admin.user.index');
    }

    public function create(){
        return view('admin.user.add');
    }

   public function store(Requests\AddUserRequestAdmin $request, User $user)
    {    if (Auth::user()->admin==1)
        {
            $user::create([
                'name' => $request->name,
                'email' =>  $request->email,
                'password' => bcrypt( $request->password),
                'admin' =>  $request->admin,
            ]);
            return redirect('adminpanel/users')->with('message', ' User added with success !  ');
        }
        else{
            $user::create([
                'name' => $request->name,
                'email' =>  $request->email,
                'password' => bcrypt( $request->password),
            ]);
            return redirect('adminpanel/users')->with('message', ' User added with success !  ');
        }

    }

    public function edit($id, User $user){
        $user = $user->find($id);
        return view('admin.user.edit', compact('user'));
    }


    public function update($id, User $user, Requests\UpdateUserAdminRequest $request)
    {
        $userUpdated = $user->find($id);
        $userUpdated->fill($request->all())->save();
        return Redirect('adminpanel/users')->with('message', "User updated with success ! ");
    }
    public function UpdatePassword(Requests\UserUpdatePassword $request , User $users)
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
    {       if (Auth::user()->admin==1 )
                {
                 $user->find($id)->delete();
                    Article::where('user_id', $id)->delete();
                    Messages::where('emetteur', $id)->delete();
                    Messages::where('recepteur', $id)->delete();

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
                $moi = Auth::user()->id;
                $all = '';
                if ($model->admin==0) {
                    if(Auth::user()->admin==2)
                    {
                        $all .= '';
                    }
                    elseif(Auth::user()->admin==1)
                    {
                        $all = '<a href="' . url('/adminpanel/users/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
                        $all .= '<a href="' . url('/adminpanel/users/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                    }

                }
                elseif($model->admin==2)  {
                    if ((Auth::user()->admin==2) && ($model->id==$moi))
                    {
                        $all .= '<a href="' . url('/adminpanel/users/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"> Modifier mon compte</i></a> ';
                    }
                    elseif( Auth::user()->admin==1)
                    {
                        $all = '<a href="' . url('/adminpanel/users/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
                        $all .= '<a href="' . url('/adminpanel/users/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                    }
                }
                elseif($model->admin==1)  {
                    if ((Auth::user()->admin==1) && ($model->id==$moi))
                    {
                        $all .= '<a href="' . url('/adminpanel/users/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"> Modifier mon compte</i></a> ';
                    }

                }
                return $all;
            })
            ->make(true);


    }

}