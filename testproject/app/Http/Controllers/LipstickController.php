<?php

namespace App\Http\Controllers;

use App\Models\Lipstick;
use Illuminate\Http\Request;


class LipstickController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // this 'Lipstick is calling hte model'
        $lipstick = Lipstick::latest()->paginate(5);
        // when the page is loded it shoes the page lipstick.index
        return view('lipstick.index',compact('lipstick'))
            ->with('i',(request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lipstick.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'BrandName' => 'required',
            'Colour' => 'required',
            'Shade' => 'required',
            'Price' => 'required',
            'MadeIn' => 'nullable',
            'Image' => 'nullable',
        ]);
        $lipstick = new Lipstick;
        $lipstick->BrandName = $request->input('BrandName');
        $lipstick->Colour = $request->input('Colour');
        $lipstick->Shade = $request->input('Shade');
        $lipstick->Price = $request->input('Price');
        $lipstick->MadeIn = $request->input('MadeIn');
        //$lipstick->Image = $request->input('Image');
        if($request->hasfile('Image'))
        {
            $file = $request->input('Image');
            $ex = $file->getClientOriginalExtension();
           $filename = time().'.'.$ex;
           $file-> move(public_path('images', $filename));
           $lipstick->file= $filename;
           $lipstick->save();
        }
        $lipstick->save();
        return redirect('/lipstick')
        //->route('/lipstick/index')
            ->with('success', 'Lipstick Added successfully!');
    }
    // this is server side validaton of the form
        //Lipstick::create($request->all());

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lipstick  $lipstick
     * @return \Illuminate\Http\Response
     */
    public function show(Lipstick $lipstick)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lipstick  $lipstick
     * @return \Illuminate\Http\Response
     */
    public function edit(Lipstick $lipstick)
    {
        return view('lipstick.edit', compact('lipstick'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lipstick  $lipstick
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lipstick $lipstick)
    {
        $request->validate([

        ]);
        $lipstick->update($request->all());
        return redirect('/lipstick')
        ->with('success', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lipstick  $lipstick
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lipstick $lipstick)
    {
        //
    }
}
