<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\District;
use App\Models\Tag;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class ArticleController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $articles = Article::latest()->paginate(3);
        // $data['categories'] = DB::table('categories')->get();


        // $districts = District::orderBy('name','asc')->get();
        $categories = Category::all();
        $districts = District::all();
        $tags = Tag::all();
        // $articlesUpdate = Article::all();
        // return view('admin.article.index', compact('articles'));
        return view('admin.article.index', compact(['articles','categories','districts','tags',]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $categories = Category::all();
        // return view('admin.article.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $file = $request->file('thumbnail');
        // $fileName = time().''.$file->getClientOriginalName();
        // $filePath = $file->storeAs('images',$fileName,'public');

        $request->validate(
            [
                'title'=>'required',
                'content'=>'required',
                'category_id'=>'required',
            ],
            [
                'title.required'=> 'title is requierd',
                'content.required'=> 'content is requierd',
                'category_id.required'=> 'Category Selection is requierd',
            ]
        );

        $article = new Article;
        $article->title = $request->title;
        $article->content = $request->content;
        // if ($request->has('thumbnail')) {
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $article->thumbnail = $request->thumbnail;
            $thumbnail_new_name = time() . '.' . $thumbnail->getClientOriginalName();//getClientOriginalExtension();            
            $thumbnail->move('storage/article/', $thumbnail_new_name);
            $article->thumbnail = '/storage/article/' . $thumbnail_new_name;
        }
        $article->category_id = $request->category_id;
        $article->district_id = $request->district_id;
        $article->save();

        // $article = Article::create([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'thumbnail' => 'thumbnail.jpg',
        //     // 'thumbnail' => $filePath,
        //     'category_id' => $request->category_id,
        //     'district_id' => $request->district_id,
        //     // 'tag_id' => $request->tag_id,
        // ]);
        // // if ($request->hasFile('thumbnail')) {
        // if ($request->has('thumbnail')) {
        //     $thumbnail = $request->thumbnail;
        //     $thumbnail_new_name = time() . '.' . $thumbnail->getClientOriginalName();
        //     // $thumbnail_new_name = time() . '.' . $thumbnail->getClientOriginalExtension();
        //     $thumbnail->move('storage/article/', $thumbnail_new_name);
        //     // $image = $thumbnail_new_name;
        //     // $article->thumbnail = $image;
        //     $article->thumbnail = '/storage/article/' . $thumbnail_new_name;
        //     $article->save();
        // }

        return response()->json([
            'status' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Article $article)
    public function edit($id)
    {
        $article = Article::where('id',$id)->get();
        return view('admin.article.update',['article'=>$article]);
    }

    // public function edit(Request $request, $id)
    // {
    //     $data['article'] = Article::find($id);
    //     return view('admin.article.update',$data);
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Article $article)
    public function update(Request $request, $id)
    {
        // $request->validate(
        //     [
        //         'title'=>'required',
        //         'content'=>'required',
        //         // 'category_id'=>'required',
        //     ],
        //     [
        //         'title.required'=> 'title is requierd',
        //         'content.required'=> 'content is requierd',
        //         // 'category_id.required'=> 'Category Selection is requierd',
        //     ]
        // );

        // $article = Article::find($id);
        // if ($article) {
        //     // $article->title = $request->input('title');
        //     $article->title = $request->title;
        //     // $article->content = $request->input('content');
        //     $article->content = $request->content;
        //     // if ($request->has('thumbnail')) {
        //     if ($request->hasFile('thumbnail')) {
        //         $path = 'storage/article/'.$article->thumbnail;
        //         if (File::exist($path)) {
        //             File::delete($path);
        //         }
        //         $file = $request->file('thumbnail');
        //         $extension = $file->getClientOriginalName();
        //         $filename = time() . '.' .$extension;
        //         $file->move('storage/article/', $filename);
        //         $article->thumbnail = $filename;                
        //     }
        //     // $article->category_id = $request->input('category_id');
        //     $article->category_id = $request->category_id;
        //     // $article->district_id = $request->input('district_id');
        //     $article->district_id = $request->district_id;
        //     return response()->json([
        //         'status' => 'success'
        //     ]);
        // }
        //     $article->save();
        


        // $request->validate(
        //     [
                
        //     ],
        //     [
                
        //     ]
        // );

        // // $article->title = $request->up_title;
        // // $article->save();

        // Article::where('id',$request->up_id)->update([
        //     'title' => $request->up_title
        // ]);

        // return response()->json([
        //     'status' => 'success'
        // ]);    
    }

    
    public function updateNew(Request $request, $id)
    {
        // $request->validate(
        //     [
        //         'title'=>'required',
        //         'content'=>'required',
        //         'category_id'=>'required',
        //     ],
        //     [
        //         'title.required'=> 'title is requierd',
        //         'content.required'=> 'content is requierd',
        //         'category_id.required'=> 'Category Selection is requierd',
        //     ]
        // );

        // $article = Article::find($id);
        // if ($article) {
        //     $article->title = $request->input('title');
        //     $article->content = $request->input('content');
        //     // if ($request->has('thumbnail')) {
        //     if ($request->hasFile('thumbnail')) {
        //         $path = 'storage/article/'.$article->thumbnail;
        //         if (File::exist($path)) {
        //             File::delete($path);
        //         }
        //         $file = $request->file('thumbnail');
        //         $extension = $file->getClientOriginalName();
        //         $filename = time() . '.' .$extension;
        //         $file->move('storage/article/', $filename);
        //         $article->thumbnail = $filename;                
        //     }
        //     $article->category_id = $request->input('category_id');
        //     $article->district_id = $request->input('district_id');
        //     $article->save();

        //     return response()->json([
        //         'status' => 'success'
        //     ]);
        // }
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Article $article)
    {
        // Article::find($article->id)->delete();

        Article::find($request->article_id)->delete();        

        return response()->json([
            'status' => 'success'
        ]);
    }

    // pagination
    public function pagination()
    {
        $articles = Article::latest()->paginate(3);
        return view('admin.article.pagination', compact('articles'))->render();
    }

    // search
    public function search(Request $request,)
    {
        $articles = Article::where('title', 'like', '%'.$request->search_string.'%')
        ->orWhere('id', 'like', '%'.$request->search_string.'%')
        ->orderBy('id', 'desc')->paginate(3);

        if ($articles->count() >= 1) {
            return view('admin.article.pagination', compact('articles'))->render();
        } else {
            return response()->json([
            'status' => 'nothing_found'
            ]);
        }                
    }

}
