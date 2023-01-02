<?php

namespace App\Http\Controllers;

use App\Models\Reactors;
use Illuminate\Http\Request;

class ReactorController extends Controller
{
    public function respond(Request $request, $blog)
    {
        $request->validate([
            'response'=>'required|in:0,1'
        ]);
        
        $entry=Reactors::where('user_id', auth()->id())
            ->where('blog_id',$blog)
            ->first();
        if(!$entry)
        {
        Reactors::create([
            'user_id'=>auth()->id(),
            'blog_id'=>$blog,
            'like'=>$request->response,

        ]);
        return redirect()->route('dashboard')->with(['message' => 'Responded To The Blog!']);

        }else{
            return redirect()->back()->with(['message' => 'You Have Already Responded!']);
        }
    }
}
