<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin()
    {

        $galleries = Album::with('photos')->get();
        return view('Petworks.admin.gallery.index', compact('galleries'));
    }

    public function indexHome()
    {

        $galleries = Album::with('photos')->get();
        return view("Petworks.homecontents.home.gallery", compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function showAdmin($id)
    {
        try {
            $gallery = Album::findOrFail($id);
            return view('Petworks.admin.gallery.show', compact('gallery'));
        } catch (\Throwable $th) {
            alert()->info('SYSTEM MESSAGE', $th->getMessage())->autoClose(9000)->animation('animate__zoomIn', 'animate__zoomOutDown')->timerProgressBar();
            return redirect()->back();
        }
    }
    public function showHome( $id)
    {
        $gallery = Album::find($id);
        return view('Petworks.homecontents.home.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        try {
            $gallery = Album::findOrFail($id);
            if (Storage::exists($gallery->path)) {
                // Check if directory is empty.
                Storage::deleteDirectory($gallery->base_path);
            }
            $title = $gallery->title;
            $gallery->photos->delete();
            $gallery->delete();
            toast()->success('SYSTEM MESSAGE', $title . ' Deleted Successfully.')->autoClose(5000)->animation('animate__fadeInRight', 'animate__fadeOutDown')->timerProgressBar();
            return redirect()->back();
        } catch (\Throwable $th) {
            alert()->info('SYSTEM MESSAGE', $th->getMessage())->autoClose(9000)->animation('animate__zoomIn', 'animate__zoomOutDown')->timerProgressBar();
            return redirect()->back();
        }

    }
}
