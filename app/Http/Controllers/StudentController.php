<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;
use SebastianBergmann\Environment\Console;

class StudentController extends Controller
{
    //

    public function index(){
        $data =  DB::table('student')->get();
        return view("index",["data"=>$data]);
    }
    public function insert(Request $req){
         DB::table('student')->insert([
            "name" => $req->name,
            'contact' => $req->contact,
            "email" => $req->email,
            "address" => $req->address
        ]);

        return redirect()->back();

    }

    public function delete($id){
            DB::table('student')->where("id",$id)->delete();
            return redirect()->back();
    }
    public function update($id){

    }
}
