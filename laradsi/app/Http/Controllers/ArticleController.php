<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;


class ArticleController extends Controller
{

    public function __construct() 
    {
        $this->middleware('auth', ['except' => ['listArticles']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session(['section' => 'article']);
        $articles = Article::all();
        return view('articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('articles.create')->with( 'categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $file);
        }
        $art = new Article();
        $art->name = $request->get('name');
        $art->image = 'images/'.$file;
        $art->content = $request->get('content');
        $art->category_id = $request->get('category_id');

        if($art->save()) {
            return redirect('article')->with('status', 'La categoría '.$art->name.' fue adicionada con éxtio!');            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $categoryName  =$art->category->name;
        return view('articles.show', ['article' => Article::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $art = Article::find($id);
        $categories = Category::all();
        return view('articles.edit', compact('art', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        $art = Article::find($id);
        $art->name = $request->get('name');

        if ($request->hasFile('image')) {
            File::delete(public_path($art->image));
            $file = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $file);
            $art->image = 'images/'.$file;
        }
        
        $art->content = $request->get('content');
        $art->category_id = $request->get('category_id');
        if ($art->save()) {
            return redirect('article')->with('status', 'La categoría '.$art->name.' fue modificada con éxtio!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);
        return redirect('article')->with('status', 'El artículo fue eliminado con éxtio!');
    }

    public function listArticles()
    {
        $arts = Article::orderBy('id', 'desc')->get();
        return view('welcome')->with('arts', $arts);
    }
}