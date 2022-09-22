<?php

namespace App\Http\Controllers;
use App\Models\ToDo;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class ListController extends Controller
{
    public function index()
    {
        $todos = ToDo::all();
        return view('todolist', ['todos' => $todos]);
    }

    public function create(ClientRequest $request)
    {
        $form = $request->all();
        ToDo::create($form);
        return redirect('/');
    }

        public function update(ClientRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        ToDo::find($request->id)->update($form);
        return redirect('/');
    }

        public function remove(ClientRequest $request)
    {
        ToDo::find($request->id)->delete();
        return redirect('/');
    }


}
