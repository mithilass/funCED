<?php

namespace App\Http\Controllers;

use App\Models\UserComments;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
      for( $i = 1; $i < 10; $i++ ){
        $id_data[$i]= UserComments::find($i);
        $url=url('store',['id'=>1]);
        $button='save';
        $data_compact2 = compact('id_data','url','button');
      }
         return view('index')->with($data_compact2);
    }
    public function submitted(){
        return view("submitted");
    }
    public function store($id,Request $request){
      $data= new UserComments([
       //UserComments is model name
        // 'name' => $request->get('name'),
        'comments' =>  $request->get('comments'),
        'unqId' =>  $id,
        // 'like' => $request->get('like'),
      ]);
        $data->save();
      // Redirect or return a response
    return redirect()->route('submitted')->with('success', 'Data inserted successfully');
    
    }
    public function update($id,Request $request){
      $data= UserComments::find($id);
      $data->update([
       //UserComments is model name
        // 'name' => $request->get('name'),
        'comments' =>  $request->get('comments'),
        'unqId' =>  $id,
        // 'like' => $request->get('like'),
      ]);
        $data->save();
      // Redirect or return a response
    return redirect()->route('submitted')->with('success', 'Data inserted successfully');
    
    }
    public function edit($id){
        $edit_data = UserComments::find($id);
        $url=url('update',['id'=>1]);
        $data_compact1 = compact('edit_data','url');
        return view('index')->with($data_compact1);
     }
     public function delete($id){
        UserComments::find($id)->delete();
        return redirect()->route('index');
     }
}
