<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function __construct(Author $author)
    {
        $this->repository = $author;


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $authors= $this->repository->paginate(10);
    return view ('admin.author.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.author.create');
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
      'city'=>$request->city]);
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
        $author=$this->repository->find($id);
      return view('admin.author.edit', compact('author'));
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
      $author=$this->repository->find($id);
    
        $author->update(['name'=>$request->name,
      'description'=>$request->description,
      'site'=>$request->site,
      'instagram'=>$request->instagram,
      'whatsapp'=>$request->whatsapp,
      'facebook'=>$request->facebook,
      'photo'=>$imageName,
      'state'=>$request->state,
      'city'=>$request->city]);
      }else{
        $author=$this->repository->find($id);
        $author->update(['name'=>$request->name,
      'description'=>$request->description,
      'site'=>$request->site,
      'instagram'=>$request->instagram,
      'whatsapp'=>$request->whatsapp,
      'facebook'=>$request->facebook,
      
      'state'=>$request->state,
      'city'=>$request->city]);
      }
        return redirect()->route('author.index');
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
