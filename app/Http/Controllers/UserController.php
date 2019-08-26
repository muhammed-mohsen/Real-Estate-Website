<?php

namespace App\Http\Controllers;

use App\User;
use App\Bu;
use Illuminate\Http\Request;
use App\Http\Requests\users\AddUserRequest;
use Datatables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddUserRequest $request)
    {


        User::create([
            'admin' => $request->admin,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        session()->flash('success', 'تم اضافة عضو جديد بنجاح');
        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // dd($request->admin);
        $user->update([
            'name' => $request->name,
            'admin' => $request->admin,
            'email' => $request->email,


        ]);
        session()->flash('success', 'تم تعديل عضو  بنجاح');
        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('success', 'تم الحذف بنجاح');
        return redirect()->back();
    }
    public function delete($id, User $user)
    {
        // dd($user);
        // dd(Bu::where('user_id', $id)->get())
        $user->find($id)->delete();
        Bu::where('user_id', $id)->delete();

        session()->flash('success', 'تم الحذف بنجاح');
        return redirect()->back();
    }
    public function updatePassword(Request $request, User $user)
    {
        // echo $request->password . "</br>";
        // echo $user->name . "</br>";
        $password = bcrypt($request->password);
        // echo $password . "</br>";
        $user->update([
            'password' => $password
        ]);
        // dd($user->password);
        session()->flash('success', 'تم تغيير الباسورد بنجاح');
        return redirect()->back();
    }
    public function anyData(User $user)
    {

        $users = $user->all();

        return Datatables::of($users)
            ->editColumn('name', function ($model) {
                return '<a href="' . url('/adminpanel/users/' . $model->id . '/edit') . '">' . $model->name . '</a>';
            })
            ->editColumn('admin', function ($model) {
                return $model->admin == 0 ? '<span class="badge badge-info">' . 'عضو' . '</span>' : '<span class="badge badge-warning">' . 'مدير الموقع' . '</span>';
            })


            // ->editColumn('mybu', function ($model) {
            //     return '<a href="' . url('/adminpanel/bu/' . $model->id) . '"> <span class="btn btn-danger btn-circle"> <i class="fa fa-link"></i> </span> </a>';
            // })


            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/adminpanel/users/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                if ($model->id != 1) {
                    $all .= '<a href="' . route('delete', $model->id) . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
                }
                return $all;
            })->rawColumns(['control', 'admin', 'name'])
            ->make(true);
    }
}
