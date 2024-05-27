<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public $articles;
    public function __construct(){
        $this->articles = new Articles();

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Articles::all();
        return view('index', compact('articles'));
    }
    
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->articles->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['articles'] = $this->articles->find($id);
        return view('sopi')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $articles = $this->articles->find($id);
        $articles->update(array_merge($articles->toArray(), $request->toArray()));
        return redirect('articles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $articles = $this->articles->find($id);
        $articles->delete();
        return redirect('articles');
    }
}
