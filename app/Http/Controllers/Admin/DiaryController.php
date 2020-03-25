<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Diary;
use Carbon\Carbon;
use Storage;

class DiaryController extends Controller
{
    public function add()
    {
        return view('admin.diary.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Diary::$rules);
        $diary = new Diary;
        $form = $request->all();
        if (isset($form['image'])) {
            $path = Storage::disk('s3')->putFile('/', $form['image'], 'public');
            $diary->image_path = Storage::disk('s3')->url($path);
        } else {
            $diary->image_path = null;
        }
        unset($form['_token']);
        unset($form['image']);
            
        $diary->fill($form)->save();
        return redirect('admin/diary/create');
    }
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            $posts = Diary::where('title', $cond_title)->get();
        } else {
            $posts = Diary::all();
        }
        return view('admin.diary.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
    
    public function edit(Request $request)
    {
        $diary = Diary::find($request->id);
        if (empty($diary)) {
            abort(404);
        }
        return view('admin.diary.edit', ['diary_form' => $diary]);
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Diary::$rules);
        $diary = Diary::find($request->id);
        $diary_form = $request->all();
        if (isset($diary_form['image'])) {
            $path = Storage::disk('s3')->putFile('/', $form['image'], 'public');
            $diary->image_path = Storage::disk('s3')->url($path);
            unset($diary_form['image']);
        } elseif (isset($request->remove)) {
            $diary->image_path = null;
            unset($diary_form['remove']);
        }
        unset($diary_form['_token']);
        $diary->fill($diary_form)->save();
        return redirect('admin/diary/index');
    }
    
    public function delete(Request $request)
    {
        $diary = Diary::find($request->id);
        $diary->delete();
        return redirect('admin/diary/index/');
    }
}
