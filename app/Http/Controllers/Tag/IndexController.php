<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index() {
        $tags = Tag::all();
        return view('tag.index', compact('tags'));
    }
}
