<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Datatables;

class ContactController extends Controller
{

    public function index(){
        return view('admin.contact.index');
    }

    public function contact(){
        return view('website.contact.contact');
    }
    public function store( Request $request , ContactUs $contactUs){
        $contactUs->create($request->all());
        return Redirect::back()->with('message', ' Thank you ! ');
    }


    public function edit($id , ContactUs $contactUs){
        $contact = $contactUs->find($id);
        $contact->fill(['view' => 1])->save();
        return view('admin.contact.edit' , compact('contact'));

    }

    public function update($id , ContactUs $contactUs  , Request $request){
        $contactupdate = $contactUs->find($id);
        $contactupdate->fill($request->all())->save();
        return Redirect::back()->with('message', ' Updated with success ! ');

    }


    public function destroy($id , ContactUs $contactUs ){
        $contactUs->find($id)->delete();
        return Redirect::back()->with('message', ' Deleted with success ! ');

    }

    public function anyData(ContactUs $contactUs)
    {

        $contact = $contactUs->all();
        return Datatables::of($contact)

            ->editColumn('contact_name', function ($model) {
                return '<a href="'.url('/adminpanel/contact/' . $model->id . '/edit').'">'.$model->contact_name.'</a>';
            })
            ->editColumn('contact_type', function ($model) {
                return '<span class="badge badge-warning">' . contact()[$model->contact_type] . '</span>';
            })


            ->editColumn('view', function ($model) {
                return $model->view == 0 ? '<span class="badge badge-info" st>' . 'Non lu' . '</span>' : '<span class="badge badge-warning">' . ' Lu' . '</span>';
            })


            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/adminpanel/contact/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                $all .= '<a href="' . url('/adminpanel/contact/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
                return $all;
            })
            ->make(true);

    }

}
