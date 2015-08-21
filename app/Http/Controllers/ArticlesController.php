<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Carbon\Carbon;
use Auth;
use App\Tag;

class ArticlesController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }


	public function index()
	{
        //return \Auth::user()->name;

		$articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
	}


	public function create()
	{
        /*s
        if(Auth::guest())
        {
            return redirect('articles');
        }
        */

        $tags = Tag::lists('name', 'id');

		return view('articles.create', compact('tags'));
	}


	public function store(Requests\ArticleRequest $request)
	{
        $this->createArticle($request);

        return redirect('articles')->with([
            'flash_message' => 'Your article has been created!',
            'flash_message_important' => true
        ]);
	}


	public function show($id)
	{

		$article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
	}


	public function edit($id)
	{
        $article = Article::findOrFail($id);

        $tags = Tag::lists('name', 'id');

		return view('articles.edit', compact('article', 'tags'));
	}


	public function update(Requests\ArticleRequest $request, $id)
	{
		$article = Article::findOrFail($id);

        $article->update($request->all());

        $article->tags()->sync($request->input('tag_list')); // sync - delete old & add new tags

        return redirect('articles');
	}


	public function destroy($id)
	{
		//
	}

    public function createArticle($request)
    {
        $article = Auth::user()->articles()->create($request->all());

        $article->tags()->sync($request->input('tag_list'));

        return $article;
    }

}
