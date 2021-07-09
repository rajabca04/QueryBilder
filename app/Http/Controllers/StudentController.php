<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;
use SebastianBergmann\Environment\Console;

class StudentController extends Controller
{
    //Geting data form Student table..

    public function index(){
        $data =  DB::table('student')->get();
        return view("index",["data"=>$data]);
    }


    // Inserting data into Student table..

    public function insert(Request $req){
         DB::table('student')->insert([
            "name" => $req->name,
            'contact' => $req->contact,
            "email" => $req->email,
            "address" => $req->address
        ]);

        return redirect()->back();

    }

    // Deleteing all data of selected id..

    public function delete($id){
            DB::table('student')->where("id",$id)->delete();
            return redirect()->back();  // return on privious page..
    }

    // Finding the data of selected id.. and Show on update page

    public function update($id){
        $data = DB::table('student')->find($id);
        return view("update",["item"=>$data]);
    }

    // Modefying data of selected id.. and update into student table..
    public function modify(Request $req,$id){
        DB::table('student')->where("id",$id)->update([
            "name" => $req->name,
            'contact' => $req->contact,
            "email" => $req->email,
            "address" => $req->address
        ]);

        return redirect()->route("homepage");   // Return on homepgae(index)
    }
}
