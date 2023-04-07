<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class LaptopController extends Controller
{
    public function index()
    {
        $data['laptop'] = Laptop::all();
        return view('laptop', $data);
        
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahLaptop');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'merkInput' => 'required',
            'tipe' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required', 
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        if($request->file('image')){
            $validatedData['image']=$request->file('image')->store('post-images');
        }
        Laptop::create($validatedData);
        return redirect()-route('laptop');
       
        // $merkInput = $request->input('merkInput');
        // $tipeInput = $request->input('tipeInput');
        // $deskripsiInput = $request->input('deskripsiInput');
        // $hargaInput = $request->input('hargaInput');
        // $image = $request->file('image')->store('post-images');

        // $query = DB::table('laptop')->insert([
        //     'merk' => $merkInput,
        //     'tipe' => $tipeInput,
        //     'deskripsi' => $deskripsiInput,
        //     'harga' => $hargaInput, 
        //     'image' => $image
        // ]);

        // if ($query) {
        //     return redirect()->route('laptop');
        // } else {
        //     return redirect()->route('laptop');
        // }

    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['laptop'] = DB::table('laptop')->where('id', $id)->first();
        return view('editLaptop', $data);

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
        $merkInput = $request->input('merkInput');
        $tipeInput = $request->input('tipeInput');
        $deskripsiInput = $request->input('deskripsiInput');
        $hargaInput = $request->input('hargaInput');

        $query = DB::table('laptop')->where('id', $id)->update([
            'merk' => $merkInput,
            'tipe' => $tipeInput,
            'deskripsi' => $deskripsiInput,
            'harga' => $hargaInput
        ]);

        if ($query) {
            return redirect()->route('laptop.index');
        } else {
            return redirect()->route('laptop.index');
        }

    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = DB::table('laptop')->where('id', $id)->delete();

        if ($query) {
            return redirect()->route('laptop');
        } else {
            return redirect()->route('laptop');
        }

    }


}
