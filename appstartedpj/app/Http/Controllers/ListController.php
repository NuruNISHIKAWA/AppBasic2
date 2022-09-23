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
        Todo::find($request->id)->delete();
        return redirect('/');
    }


}
