<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeedBack;

class FeedBackController extends Controller
{
    public function index()
    {
        $feeds = FeedBack::all();

        $search = request('search');
        if($search){
            $feeds = FeedBack::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();
        }else{
            $feeds = FeedBack::orderBy("nome", "asc")->get();
        }

         return view('feeds.index',compact('feeds'));
    }

    public function store(Request $request)
    {
            $data = $request->all();

            $feed= FeedBack::create($data);

            return redirect()->route('feeds.index');
    }
}
