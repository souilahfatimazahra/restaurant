<?php

namespace App\Http\Controllers;

use App\Servants;
use Illuminate\Http\Request;

class ServantsController extends Controller
{
   public function __construct(){
    $this->middleware("auth");
   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("managment.serveurs.index")->with([
            "servants"=>Servants::paginate(5)
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("managment.serveurs.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validation
         $this->validate($request,[
            "name"=>"required|min:3"
        ]);
        //store data 
        Servants::create([
            "name"=>$request->name,
            "address"=> $request->address
        ]);
        //redirect user
        return redirect()->route("servants.index")->with([
            "success"=>"serveur ajoutée avec succés"
        ]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servants  $servants
     * @return \Illuminate\Http\Response
     */
    public function show(Servants $servants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servants  $servants
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("managment.serveurs.edit")->with([
            "servant"=> Servants::findOrFail($id)
         ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servants  $servants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validation
        $this->validate($request,[
            "name"=>"required|min:3"
        ]);
        //update data 
        $servant= Servants::findOrFail($id);
        $servant->update([
            "name"=>$request->name,
            "address"=> $request->address
        ]);
        //redirect user
        return redirect()->route("servants.index")->with([
            "success"=>"serveur modifier avec succés"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servants  $servants
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete data 
        $servant= Servants::findOrFail($id);
        $servant->delete();
        //redirect user
        return redirect()->route("servants.index")->with([
            "success"=>"serveur supprimé avec succés"
        ]);
    }
}
