<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subtrib;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['welcome']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subtribs = subtrib::orderBy('updated_at', 'DESC')->paginate(5);

        
  
        return view('home',['subtribs'=>$subtribs]);
        //->with('subtribs', subtrib::orderBy('updated_at', 'DESC')
        //->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'subtribe'=>'required',
            'description'=>'required'
        ]);

        subtrib:: create([
            'subtribe'=>$request->input('subtribe'),
            'description'=>$request->input('description'),
            'user_id'=>auth()->user()->id
        ]);

       
        

        return redirect(url()->previous().'#mik');
    }

    public function destroy(subtrib $subtrib){

        $subtrib->delete();
        

        return redirect(url()->previous().'#mik');
        
    }

    
}
