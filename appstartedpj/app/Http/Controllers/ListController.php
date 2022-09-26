<?php

namespace App\Http\Controllers;
use App\Models\Todo;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class ListController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todolist', ['todos' => $todos]);
    }

    public function create(ClientRequest $request)
    {
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }

        public function update(ClientRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Todo::find($request->id)->update($form);
        return redirect('/');
    }

        public function remove(ClientRequest $request)
    {
        //dd($request->task);
        Todo::find($request->id)->delete();
        return redirect('/');
    }

/*
            public function change(ClientRequest $request)
    {
        //dd($request);
        if ($request->has('update')){
        $form = $request->all();
        unset($form['_token']);
        Todo::find($request->id)->update($form);
        return redirect('/');

        }elseif ($request->has('remove')){
            dd($request->id);
        Todo::find($request->id)->delete();
        dd($request->id);
        return redirect('/');
        }
    }
    */


}
