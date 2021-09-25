<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\crud;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use DB;
use Image;

class Crudscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=crud::paginate(5);
        return view('tables')->with('users', $users);
    }
    public function fetch_data(Request $request)
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save()
    {
        return view('user');
    }
    public function store(Request $request)
    {
        $employee = new crud();
        $employee->first_name = $request->input('n1');
        $employee->last_name = $request->input('n2');
        $employee->email = $request->input('n3');
        $employee->DOB = $request->input('n4');
        $employee->password = $request->input('n5');
        $employee->gender = $request->input('n6');
        $employee->qualifications = $request->input('n7');
        $employee->Course = $request->merge([ 
        'n8' => implode(',', (array) $request->get('n8'))
    ]);
        Crudscontroller::create($request->all());
        if($request->hasfile('n9')){
            $file=$request->file('n9');
            $extension=$file->getClientoriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('Upload/picture/images',$filename);
            $employee->image=$filename;
        }else{
            return $request;
            $employee->image='';
        }
        $employee->save();
        return view('user')->with('employee',$employee);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=crud::find($id);
        /*$user = DB::select('select * from user where id = ?',[$id]);*/
        return view('edit')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
         $employees=crud::find($id);
         $employees->first_name = $request->input('n1');
         $employees->last_name = $request->input('n2');
         $employees->email = $request->input('n3');
         $employees->DOB = $request->input('n4');
         $employees->password = $request->input('n5');
         $employees->gender = $request->input('n6');
         $employees->qualifications = $request->input('n7');
         $employees->Course = $request->input('n8');
         if($request->hasfile('n9')){
            $file=$request->file('n9');
            $extension=$file->getClientoriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('Upload/picture/images',$filename);
            $employees->image=$filename;
        }
        $employees->save();
        return redirect('index')->with('employees',$employees);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $user = DB::table('user')->where('id',$id)->delete();

    return redirect('index');
    }


    public function Dyanmic()
    {
       $sql=\DB::table('menu')->rightjoin('sub_menu','menu.id','=','sub_menu.menu_id')
   ->select('submenu_name','link','url','menu_id','menu_name','menu.id')->get();
    return view('file',compact('sql'));

    }
}
