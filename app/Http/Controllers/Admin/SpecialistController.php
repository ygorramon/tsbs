<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Specialist;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{
    public function __construct(Specialist $specialist)
    {
        $this->repository = $specialist;


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialists= $this->repository->paginate(10);
        return view ('admin.specialist.index', compact('specialists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.specialist.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = time().'.'.$request->photo->extension();  
   
      $request->photo->move(public_path('images'), $imageName);
       
     $this->repository->create(['name'=>$request->name,
      'description'=>$request->description,
      'site'=>$request->site,
      'instagram'=>$request->instagram,
      'whatsapp'=>$request->whatsapp,
      'facebook'=>$request->facebook,
      'photo'=>$imageName,
      'state'=>$request->state,
      'city'=>$request->city,
    'category_id'=>$request->category_id]);
        return redirect()->route('specialist.index');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $specialist=$this->repository->find($id);
        $categories = Category::all();
        return view('admin.specialist.edit', compact('categories','specialist'));
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
        if(isset($request->photo)){
        $imageName = time().'.'.$request->photo->extension();  
   
        $request->photo->move(public_path('images'), $imageName);
         
       $this->repository->find($id)->update(['name'=>$request->name,
        'description'=>$request->description,
        'site'=>$request->site,
        'instagram'=>$request->instagram,
        'whatsapp'=>$request->whatsapp,
        'facebook'=>$request->facebook,
        'photo'=>$imageName,
        'state'=>$request->state,
        'city'=>$request->city,
    'category_id'=>$request->category_id]);
        }
        else{
            $this->repository->find($id)->update(['name'=>$request->name,
            'description'=>$request->description,
            'site'=>$request->site,
            'instagram'=>$request->instagram,
            'whatsapp'=>$request->whatsapp,
            'facebook'=>$request->facebook,
            
            'state'=>$request->state,
            'city'=>$request->city,
        'category_id'=>$request->category_id]);

        }
          return redirect()->route('specialist.index');
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
}
