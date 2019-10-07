<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CreateController extends Controller
{
    public function index() {
        $articles = Article::all();
        return view('home', ['articles' => $articles]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $article = new Article;
        $article->title = $request->input('title');
        $article->description = $request->input('description');
        $article->save();
        return redirect('/')->with('info', 'Project inserted successfully!!');
    }

    public function viewProject($id) {
        $project = Article::find($id);
        return view('project')->with('projectDetails', $project);
    }

    public function updateViewProject($id) {
        $project = Article::find($id);
        return view('update-project')->with('projectDetails', $project);
    }

    public function updateProject(Request $request, $id) {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        $data = array(
            'title'=> $request->input('title'),
            'description' => $request->input('description')
        );

        Article::where('id', $id)
            ->update($data);
        return redirect('/')->with('info', 'Project Updated successfully!!');
    }

    public function deleteProject( Request $request, $id) {
        Article::where('id', $id)
            ->delete();
        return redirect('/')->with('info', 'Record Successfully Deleted');
    }
}
