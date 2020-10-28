<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function dashboard(){
        if (Auth::check()) {
            return view('pages/dashboard');
        }else{
            return redirect('/admin/login');
        }
    }

     public function index(Request $request)
    {
        $query = $request->table_search;
        
        if (Auth::check()) {
           if($query == null){
                $users = new User;
                $datas = $users->getAll();
                return view('pages/biodata', compact('datas'));
            }else if($query != null){
               $datas =  User::where('user_type', 'normal')
               ->where('username', 'like', '%'.$query.'%')
               ->paginate(10);

               return view('pages/biodata', compact('datas'));
            }
        }else{
            return redirect('/admin/login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate data
        $this->validate($request, array(
            'employee_id' => 'required',
            'user_type' => 'required',
            'username' => 'required',
            'password' => 'required'
        ));

        //store in datatabase
        $user = new User();
        $data = [
            $user->employee_id = $request->employee_id,
            $user->user_type = $request->user_type,
            $user->username = $request->username,
            $user->password = Hash::make($request->password)
        ];
        $user->save($data);

        return redirect('users/create')->with('status', 'User Created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $user = new User();
       $result = $user->findById($id);

       return view('pages/detail', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = new User();
        $result = $user->findById($id);
        return view('pages/edit', compact('result'));
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
        $data = User::find($id); 

        $this->validate($request, array(
            'employee_id' => 'required',
            'username' => 'required'
        ));
        
        $newData = [
            $data->employee_id = $request->employee_id,
            $data->user_type = $request->user_type,
            $data->username = $request->username,
        ];    
        $data->save($newData);

        return redirect()->back()->with('status', 'success to update data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data = User::find($id);
       $data->delete();

       return redirect('/users');
    }
}
