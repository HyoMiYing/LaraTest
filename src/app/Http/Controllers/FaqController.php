<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Queswer;

class FaqController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queswers = Queswer::orderBy('created_at', 'desc')->get();

        return view('index')->with('queswers', $queswers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required'
        ]);

        $queswer = new Queswer();
        $queswer->question = $request->input('question');
        $queswer->answer = $request->input('answer');
        $queswer->save();

        return redirect()->to('/home')->with('success', 'Queswer created successfully.');
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
        $queswer = Queswer::find($id);

        return view('edit')->with('queswer', $queswer);
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
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required'
        ]);

        $queswer = Queswer::find($id);
        $queswer->question = $request->input('question');
        $queswer->answer = $request->input('answer');
        $queswer->save();

        return redirect()->to('/home')->with('success', 'Queswer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $queswer = Queswer::find($id);
        $queswer->delete();

        return redirect()->to('/home')->with('success', 'Queswer deleted successfully.');
    }
}
