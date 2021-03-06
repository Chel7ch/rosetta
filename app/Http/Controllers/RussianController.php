<?php

namespace App\Http\Controllers;

use App\Russian;
use App\Services\FirstSymbolService;
use App\Services\PrepearingOutputService;
use Illuminate\Http\Request;

class RussianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lim = 15;
        $char = FirstSymbolService::rus();

        $rus = Russian::ruWord(Russian::ruWordsList($char, $lim));

        $words = PrepearingOutputService::rus($rus);

        $char = mb_substr($char, 0, 1);

        return view('content.words.indexRuWord', compact('words', 'char'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Russian $russian
     * @return \Illuminate\Http\Response
     */
    public function show(Russian $russian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Russian $russian
     * @return \Illuminate\Http\Response
     */
    public function edit(Russian $russian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Russian $russian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Russian $russian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Russian $russian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Russian $russian)
    {
        //
    }
}
