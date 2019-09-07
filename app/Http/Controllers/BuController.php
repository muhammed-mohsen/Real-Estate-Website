<?php

namespace App\Http\Controllers;

use App\Bu;
use App\User;
use Datatables;
use Illuminate\Http\Request;
use App\Http\Requests\BuRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class BuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $id =  $request->id != '' ? '?user_id=' . $request->id : '';
        return view('admin.bu.index', compact('id'));
    }
    public function addbu()
    {
        return view('website.user.addbu');
    }
    public function done()
    {
        return view('website.user.done');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bu.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BuRequest $request)
    {
        // dd($request->all());'
        // dd($request->image);
        $image = $request->image->store('bu');
        $filedname = $request->image->getClientOriginalName();

        $path = base_path() . '/public/storage/bu/' . $filedname;
        Image::make(asset('storage/' . $image))->resize('500', '362')->save($path);
        Storage::delete($image);
        $image = 'bu/' . $filedname;

        $data = [
            'bu_name' => $request->bu_name,
            'bu_price' =>  $request->bu_price,
            'bu_square' =>  $request->bu_square,
            'bu_small_dis' => $request->bu_small_dis,
            'bu_meta' => $request->bu_meta,
            'bu_longtitude' => $request->bu_longtitude,
            'bu_latitude' => $request->bu_latitude,
            'bu_rent' => $request->bu_rent,
            'bu_type' => $request->bu_type,
            'bu_status' => $request->bu_status,
            'bu_large_dis' => $request->bu_large_dis,
            'rooms' => $request->rooms,
            'user_id' => Auth::id(),
            'bu_place' => $request->bu_place,
            'month' => date('m'),
            'year' => date('Y'),
            'image' => $image,

        ];

        Bu::create($data);
        session()->flash('success', 'تم اضافة العقار بنجاح');
        return redirect(route('buindex'));
    }
    public function add(BuRequest $request)
    {
        // dd($request->all());'
        // dd($request);
        // dd($request);
        dd($request->image);
        $image = $request->image->store('bu');
        $filedname = $request->image->getClientOriginalName();

        $path = base_path() . '/public/storage/bu/' . $filedname;
        Image::make(asset('storage/' . $image))->resize('500', '362')->save($path);
        Storage::delete($image);
        $image = 'bu/' . $filedname;
        $user = Auth::user() ? Auth::id() : 0;
        $data = [
            'bu_name' => $request->bu_name,
            'bu_price' =>  $request->bu_price,
            'bu_square' =>  $request->bu_square,
            'bu_small_dis' => str_limit($request->bu_large_dis, 160),
            'bu_meta' => $request->bu_meta,
            'bu_longtitude' => $request->bu_longtitude,
            'bu_latitude' => $request->bu_latitude,
            'bu_rent' => $request->bu_rent,
            'bu_type' => $request->bu_type,
            'bu_large_dis' => $request->bu_large_dis,
            'rooms' => $request->rooms,
            'user_id' => $user,
            'bu_place' => $request->bu_place,
            'image' => $image,
            'month' => date('m'),
            'year' => date('Y'),

        ];

        Bu::create($data);
        session()->flash('success', 'تم اضافة العقار بنجاح');
        return redirect(route('done'));
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

    public function search(Request $request)
    {
        // dd($request->all());

        $requestall = array_except($request->all(), ['_token', 'submit', 'page']);

        // $min = $request->bu_price_from == '' ? 1000 : $request->bu_price_from;
        // $max = $request->bu_price_to == '' ? 1000000 : $request->bu_price_to;

        // $i = 0;
        // $out = '';

        // foreach ($requestall as $key => $req) {



        //     if ($req != '') {
        //         $where = $i == 0 ? 'where ' : 'and ';
        //         $out .= $where . $key . '=' . $req . ' ';
        //         $i = 2;
        //     }

        //     # code...
        // }
        // $query = 'select * from bus ' . $out;
        // $bus = DB::select($query);
        $query = DB::table('bus')->select('*');
        $array = [];

        // dd($requestall);
        $count = count($requestall);
        // dd($count);
        // dd($requestall);
        $i = 0;
        foreach ($requestall as $key => $req) {
            $i++;
            if ($req != '') {

                if ($key == 'bu_price_from' && $request->bu_price_to == '') {
                    $query->where('bu_price', '>=', $req);
                } elseif ($key == 'bu_price_to' && $request->bu_price_from == '') {
                    $query->where('bu_price', '<=', $req);
                } else {
                    if ($key != 'bu_price_to' && $key != 'bu_price_from')
                        $query->where($key, $req);
                }
                $array[$key] = $req;
            } elseif ($i == $count && $request->bu_price_from && $request->bu_price_to) {

                $query->whereBetween('bu_price', [$request->bu_price_from, $request->bu_price_to]);
            }
        }

        $bus = $query->paginate(15);

        return view('website.bu.all', compact('bus', 'array'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bu $bu)
    {
        if ($bu->user_id != 0) {
            $user = User::where('id', $bu->user_id)->first();
        } else {
            $user = '';
        }

        return view('admin.bu.edit', compact(['bu', 'user']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BuRequest $request, Bu $bu)
    {

        // $dim = getimagesize($request->image);
        // if ($dim[0] > 500 || $dim[1] > 300) {
        //     session()->flash('success', 'يجب ان يكون بعد الصورة اقل من 500 * 300');
        //     return redirect(route('bu.index'));
        // }
        // dd($dim);


        $data = [
            'bu_name' => $request->bu_name,
            'bu_price' =>  $request->bu_price,
            'bu_square' =>  $request->bu_square,
            'bu_small_dis' => $request->bu_small_dis,
            'bu_meta' => $request->bu_meta,
            'bu_longtitude' => $request->bu_longtitude,
            'bu_latitude' => $request->bu_latitude,
            'bu_rent' => $request->bu_rent,
            'bu_type' => $request->bu_type,
            'bu_status' => $request->bu_status,
            'bu_large_dis' => $request->bu_large_dis,
            'rooms' => $request->rooms,
            'user_id' => Auth::id(),
        ];
        if ($request->hasFile('image')) {
            $filedname = $request->image->getClientOriginalName();

            $path = base_path() . '/public/storage/bu/' . $filedname;
            // dd($path);
            $image = $request->image->store('bu');
            Image::make(asset('storage/' . $image))->resize('500', '362')->save($path);
            Storage::delete($image);
            $image = 'bu/' . $filedname;
            Storage::delete($bu->image);
            $data['image'] = $image;
        }
        $bu->update($data);
        session()->flash('success', 'تم تعديل العقار بنجاح');
        return redirect(route('bu.index'));
    }
    public function forRent()
    {
        $bus = Bu::where('bu_rent', 1)->where('bu_status', 1)->orderBy('id', 'desc')->paginate(15);


        return view('website.bu.all', compact('bus'));
    }
    public function ownership()
    {
        $bus = Bu::where('bu_rent', 0)->where('bu_status', 1)->orderBy('id', 'desc')->paginate(15);

        return view('website.bu.all', compact('bus'));
    }
    public function showByType($type)
    {
        if (in_array($type, [0, 1, 2])) {
            $bus = Bu::where('bu_type', $type)->where('bu_status', 1)->orderBy('id', 'desc')->paginate(15);
            return view('website.bu.all', compact('bus'));
        } else {
            return redirect()->back();
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete(Bu $bu)
    {
        // dd($user);
        $bu->delete();
        session()->flash('success', 'تم الحذف بنجاح');
        return redirect()->back();
    }
    public function updatePassword(Request $request, User $user)
    {


        // dd($request->password);
        if (!Hash::check($request->password, $user->password)) {
            // dd('muhammed');
            session()->flash('error', 'هذا الباسورد غير متطابق مع القديم');
            return redirect()->back();
        } else {


            $password = bcrypt($request->newpassword);
            // echo $password . "</br>";
            $user->update([
                'password' => $password
            ]);
            // dd($user->password);
            session()->flash('success', 'تم تغيير الباسورد بنجاح');
            return redirect()->back();
        }
    }
    public function anyData(Request $request, Bu $bu)
    {

        if ($request->user_id) {
            $bus = $bu->where('user_id', $request->user_id)->get();
        } else {
            $bus = $bu->all();
        }


        // dd($bus);

        return Datatables::of($bus)
            ->editColumn('bu_name', function ($model) {
                return '<a href="' . url('/adminpanel/bu/' . $model->id . '/edit') . '">' . $model->bu_name . '</a>';
            })
            ->editColumn('bu_type', function ($model) {
                // $type = bu_type();
                if ($model->bu_type == 0) {
                    return '<span class="badge badge-info"> شقة</span>';
                } elseif ($model->bu_type == 1) {
                    return '<span class="badge badge-info"> فيلا</span>';
                } else {
                    return '<span class="badge badge-info"> شاليه</span>';
                }
            })
            ->editColumn('bu_status', function ($model) {
                return $model->bu_status == 1 ? '<span class="badge badge-info">' . 'مفعل' . '</span>' : '<span class="badge badge-warning">' . 'غير مفعل' . '</span>';
            })



            // ->editColumn('mybu', function ($model) {
            //     return '<a href="' . url('/adminpanel/bu/' . $model->id) . '"> <span class="btn btn-danger btn-circle"> <i class="fa fa-link"></i> </span> </a>';
            // })
            // ->editColumn('bu_type', function ($model) {
            //     $type = bu_type();
            //     return  '<span class="badge badge-info">' . $type[$model->bu_type] . '</span>';
            // })

            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/adminpanel/bu/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';

                $all .= '<a href="' . route('delete.bu', $model->id) . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';

                return $all;
            })->rawColumns(['control', 'bu_type', 'bu_name', 'bu_status'])
            ->make(true);
    }
    public function showEnable()
    {
        $bus = Bu::where('bu_status', 1)->orderBy('id', 'desc')->paginate(15);

        return view('website.bu.all', compact('bus'));
    }

    public function singleshow($id)
    {
        $bu = Bu::find($id)->first();

        if ($bu->bu_status == 0) {
            return view('website.bu.noper', compact(['bu']));
        }

        $same_rent = Bu::where('bu_rent', $bu->bu_rent)->orderBy(DB::raw('RAND()'))->take(3)->get();
        $same_type = Bu::where('bu_type', $bu->bu_type)->orderBy(DB::raw('RAND()'))->take(3)->get();

        return view('website.bu.singleshow', compact(['bu', 'same_rent', 'same_type']));
    }
    public function ajexInfo(Request $request, Bu $bu)
    {
        return $bu->find($request->id)->toJson();
    }

    public function userBuildings()
    {
        $id = Auth::user()->id;
        $bus =  Bu::where('user_id', $id)->paginate(5);
        return view('website.user.userBuildings', ['bus' => $bus]);
    }
    public function editUser()
    {
        $user = User::find(Auth::user()->id);
        $noruser = 0;
        return view('website.user.edit', ['noruser' => $noruser])->with('user', $user);
    }
    public function updateUser(Request $request, User $user)
    {
        // dd($request->admin);

        if ($request->email != $user->email)
            $user->update([
                'name' => $request->name,
                'email' => $request->email,


            ]);
        else {

            $user->update([
                'name' => $request->name,
            ]);
        }
        session()->flash('success', 'تم تعديل عضو  بنجاح');
        return redirect()->back();
    }
    public function activeBu(Bu $bu, $status)
    {
        $bu->bu_status = $status;
        $bu->save();
        session()->flash('success', 'تم تعديل العقار بنجاح');
        return redirect()->back();
    }
}
