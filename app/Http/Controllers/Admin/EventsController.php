<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\AnimeRequest;
use App\Models\Anime;
use App\Models\Animev;




class EventsController extends Controller
{

   
        

    public function about()
    {  
        return view('/admin.about');
    }

    public function new()
    {
        return view('/admin.news');
    }

    public function home()
    {
        return view('/admin.home');
    }
       

    public function cat()
    {
        return view('/admin.cate');
    }

    public function det()
    {
        return view('/admin.detail');
    }

    public function blog()
    {
        return view('/admin.blog');
    }

    
    public function watch()
    {
        $animes = Anime::orderBy('created_at', 'desc')->paginate(10);
        return view('/admin.watch')->with('animes', $animes);
    }


     public function add()
    {
        return view('/admin.add');
    }   



    public function adds(AnimeRequest $request){
        
        $input = $request->validated();
        $animes = Anime::create($input);

        if ($request->hasFile('document')) {
            foreach ($request->document as $value) {
                if ($value) { // Check if a file was uploaded
                    $animevs = [
                        'document' => $value->getClientOriginalName(),
                        'hashname' => 'documentv/' . $value->hashName(),
                        'a_id' => $animes->id
                    ];
                    
                    $value->storePublicly('documentv', 'public');
                    
                    Animev::create($animevs);
                }
            }
        }

        return redirect('watch')->with('status', 'Episode Added!');

    }




    // public function show(string $id)
    // {
    //     $animes = Anime::find($id);
    //     return view('admin.event.showevent')->with('animes', $animes);
    // }

    public function edit($id)
    {
        $anime = Anime::findOrFail($id);
        return view('/admin.edit', compact('anime'));
    }

    public function update(AnimeRequest $request, $id)
    {
        $anime = Anime::findOrFail($id);
        $input = $request->validated();
        $anime->update($input);

        if ($request->hasFile('document')) {
            foreach ($request->document as $value) {
                if ($value) {
                    $animevs = [
                        'document' => $value->getClientOriginalName(),
                        'hashname' => 'documentv/' . $value->hashName(),
                        'a_id' => $anime->id
                    ];
                    $value->storePublicly('documentv', 'public');
                    Animev::create($animevs);
                }
            }
        }

        return redirect('watch')->with('status', 'Episode Updated!');
    }

    public function destroy($id)
    {
        $anime = Anime::findOrFail($id);

        // Delete associated documents
        $animevs = Animev::where('a_id', $anime->id)->get();
        foreach ($animevs as $animev) {
            Storage::disk('public')->delete($animev->hashname);
            $animev->delete();
        }

        $anime->delete();
        return redirect('watch')->with('status', 'Episode Deleted!');
    }





}
