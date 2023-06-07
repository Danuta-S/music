<?php

namespace App\Http\Controllers;

use App\Models\Lyric;
use App\Http\Requests\StoreLyricRequest;
use App\Http\Requests\UpdateLyricRequest;

class LyricController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('lyrics.index', [
            'lyrics' => Lyric::all()
        ]);
    }

    public function create()
    {
        return view('lyrics.create', [
            'action' => route('lyrics.store')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLyricRequest  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreLyricRequest $request)
    {
        Lyric::create($request->validated());

        return redirect(route('lyrics.index'))->with([
            'success' => 'Dziesmas "'.request('title').'" teksts veiksmīgi pievienots!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lyric  $lyric
     * @return \Illuminate\Http\Response
     */
    public function show(Lyric $lyric)
    {
        return view('lyrics.show', [
            'lyric' => $lyric
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lyric  $lyric
     * @return \Illuminate\Http\Response
     */
    public function edit(Lyric $lyric)
    {
        return view('lyrics.create', [
            'lyric' => $lyric,
            'action' => route('lyrics.update', $lyric->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLyricRequest  $request
     * @param  \App\Models\Lyric  $lyric
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLyricRequest $request, Lyric $lyric)
    {
        $lyric->update($request->validated());

        return redirect(route('lyrics.index'))->with([
            'success' => 'Dziesmas "'.request('title').'" teksts veiksmīgi labots!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lyric  $lyric
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lyric $lyric)
    {
        $lyric->delete();

        return redirect(route('lyrics.index'))->with([
            'success' => 'Dziesmas "'.$lyric->title.'" teksts veiksmīgi dzēsts'
        ]);
    }
}
