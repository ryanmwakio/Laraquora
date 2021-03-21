<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get a group of records
        $questions=Question::orderBy('id','desc')->paginate(4);

        //return the view and pass the group of record
        return view('questions.index')->with('questions',$questions);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validate form data
        $this->validate($request,[
            'title'=>'required| max:255',
        ]);

        //process the data and submit it
        $question=new Question();
        $question->title=$request->title;
        $question->description=$request->description;
        $question->user()->associate(Auth::user()->id);

        //if successful we want to redirect
        if($question->save()){
            return redirect()->route('questions.show',$question->id);
        }else{
            return redirect()->route('questions.create');
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
        //use the model to get one record
        $question=Question::findOrFail($id);

        //show the view and pass the record to the view
        return view('questions.show')->with('question',$question);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $question=Question::findOrFail($id);
        if ($question->user->id != Auth::id()) {
            # code...
            return abort(403);
        }
        return view('questions.edit');
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
        //confirm the user
        $question=Question::findOrFail($id);
        if ($question->user->id != Auth::id()) {
            # code...
            return abort(403);
        }
        //go ahead and update
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
