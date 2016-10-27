<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Karton;

class KartoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      {
          $kartoni = Karton::all();
          return view('kartoni.index')->withKartoni($kartoni);
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         return view('kartoni.create');
         return redirect()->back();
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {

       $this->validate($request, [
           'OIB' => 'required',
           'Datumrodjenja' => 'required',
           'Imeiprezime' => 'required',
           'MBO' => 'required'
       ]);

       $input = $request->all();

       Karton::create($input);

       return redirect()->route('kartoni.index');


     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
         $karton = Karton::findOrFail($id);

         return view('kartoni.show')->withKarton($karton);
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $karton = Karton::findOrFail($id);

      return view('kartoni.edit')->withKarton($karton);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $karton = Karton::findOrFail($id);

      $this->validate($request, [
        'OIB' => 'required',
        'Datumrodjenja' => 'required',
        'Imeiprezime' => 'required',
        'MBO' => 'required'
      ]);

      $input = $request->all();

      $karton->fill($input)->save();

      return redirect()->route('kartoni.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $karton = Karton::findOrFail($id);

      $karton->delete();

      return redirect()->route('kartoni.index');
    }
}
