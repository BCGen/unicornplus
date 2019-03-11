<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Bcgen\LaravelHelper\Medias\Models\Media;
use Illuminate\Http\Request;

class MediaLibraryController extends Controller
{
    public function index()
    {
        $list = Media::all();
        return view('admin.mediaLibrary.index', compact('list'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Media $media)
    {
        //
    }

    public function edit(Media $media)
    {
        //
    }

    public function update(Request $request, Media $media)
    {
        //
    }

    public function destroy(Media $media, $id)
    {
        $media->destroy($id);
        return ['message' => 'success'];
    }

    public function download($id)
    {
        return Media::findOrFail($id);
    }
}
