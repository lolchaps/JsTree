<?php

namespace App\Http\Controllers;

use App\Support\JsTree;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;

class TreeController extends Controller
{
    public function index()
    {
        return view('tree');
    }

    public function data(Request $request)
    {
        $id = 'test';

        if ($request->has('id') and $request->id != '#') {
            $id = $request->id;
        }

        $nodes = array_merge(
            Storage::directories($id),
            Storage::files($id)
        );

        $tree = new JsTree($nodes, 'test');
        $tree->folderIconClass = 'fa fa-folder-o';
        $tree->fileIconClass = 'fa fa-file-image-o';

        return response()->json($tree->build());
    }
}
