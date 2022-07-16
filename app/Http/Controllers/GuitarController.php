<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuitarController extends Controller
{

    public static function getData(){
        return[
        ['id' => 1, 'name' => 'Ameticano Post Malone', 'brand' => 'Tokoyaki'],
        ['id' => 2, 'name' => 'tatey', 'brand' => 'kawasaki'],
        ['id' => 3, 'name' => 'musicaloka', 'brand' => 'motosali'],
        ['id' => 4, 'name' => 'traveloka', 'brand' => 'tutumipan'],
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // GET
        return view('guitars.index', [
            'guitars' => self::getData(),
            'userInput' => '<script>alert("hello motherfuker")</script>'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET
        return view('guitars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // POST
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // GET
        $guitars = self::getData();
        $index = array_search($id, array_column($guitars, 'id'));

        if($index === false){
            abort(404);
        }

        return view ('guitars.show', [
            'guitar' => $guitars[$index]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //GET
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
        // POST
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
