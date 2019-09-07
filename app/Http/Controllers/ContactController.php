<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Datatables;

class ContactController extends Controller
{
    public function contact()
    {
        return view('website.contact.contactus');
    }
    public function index()
    {
        return view('admin.contact.index');
    }
    public function show($id)
    {
        $con = Contact::find($id)->first();
        $con->view = 1;
        $con->save();
        return view('admin.contact.show', compact('con'));
    }
    public function store(ContactRequest $request)
    {
        Contact::create($request->all());
        session()->flash('success', 'تم الارسال بنجاح');
        return redirect()->back();
    }
    public function delete(Contact $contact)
    {
        // dd($user);
        $contact->delete();
        session()->flash('success', 'تم الحذف بنجاح');
        return redirect()->back();
    }
    public function anyData(Contact $contact)
    {

        $contacts = $contact->all();

        // dd($contacts);

        return Datatables::of($contacts)

            ->editColumn('view', function ($model) {
                // $type = contact_type();
                if ($model->view == 1) {
                    return '<span class="badge badge-info">رسالة قديمة</span>';
                } else {
                    return '<span class="badge badge-info"> رسالة جديدة</span>';
                }
            })
            ->editColumn('contact_name', function ($model) {
                return '<a href="' . url('/adminpanel/' . $model->id . '/showmessage') . '">' . $model->contact_name . '</a>';
            })
            ->editColumn('contact_subject', function ($model) {
                // $type = contact_type();
                if ($model->contact_subject == 0) {
                    return '<span class="badge badge-info">اعجاب</span>';
                } elseif ($model->contact_subject == 1) {
                    return '<span class="badge badge-info"> مشكلة</span>';
                } elseif ($model->contact_subject == 2) {
                    return '<span class="badge badge-info">اقتراح </span>';
                } else {
                    return '<span class="badge badge-info"> استفسار </span>';
                }
            })


            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/adminpanel/' . $model->id . '/showmessage') . '" class="btn btn-app btn-sm"> <i class="fa fa-play"></i></a> ';

                $all .= '<a href="' . route('contact.delete', $model->id) . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';

                return $all;
            })->rawColumns(['control', 'view', 'contact_subject', 'contact_name'])
            ->make(true);
    }
}
