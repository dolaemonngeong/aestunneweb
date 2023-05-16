<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('forum.forumList',[
            'search' => '',
            'categories' => Category::all(),
            'questions' => Question::paginate(10)
        ]);
    }

    public function filterkategori(Request $request){

        // Get filter criteria from the form submission
        $search = $request->input('search');
        $category = $request->input('category');

        return view('forum.forumList', [
            'search' => $search,
            'category' => $category,
            'questions' => Question::where(function($query) use ($search) {
                $query->where('sentence', 'like', '%'.$search.'%');
            })
            ->when($category != '#', function($query) use ($category) {
                $query->where('category', $category);
            })
            ->paginate(10)
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forum.addForum', [
            'title' =>'Tambah Forum',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
