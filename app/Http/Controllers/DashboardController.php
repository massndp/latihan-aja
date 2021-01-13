<?php

namespace App\Http\Controllers;

use App\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Dashboard::all();
        return view('pages.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
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
            'pembayaran' => 'required|integer',
            'buruh_a' => 'required|integer',
            'buruh_b' => 'required|integer',
            'buruh_c' => 'required|integer'
        ]);

        $data = $request->all();
        $data['buruh_a'] = $request->buruh_a / 100 * $request->pembayaran;
        $data['buruh_b'] = $request->buruh_b / 100 * $request->pembayaran;
        $data['buruh_c'] = $request->buruh_c / 100 * $request->pembayaran;

        
        if($request->buruh_a + $request->buruh_b + $request->buruh_c > 100){
            return redirect()->route('dashboard.create')->with('sukses', 'Maaf bagi hasil melebihi 100%');
        }elseif($request->buruh_a + $request->buruh_b + $request->buruh_c < 100){
            return redirect()->route('dashboard.create')->with('sukses', 'Maaf bagi hasil kurang dari 100%');
        }else{
            Dashboard::create($data);
            return redirect()->route('dashboard.index')->with('sukses', 'Data berhasil ditambah');
        }

        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Dashboard::findOrFail($id);
        return view('pages.show',[
            'item'=>$item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Dashboard::findOrFail($id);

        return view('pages.edit',[
            'item'=>$item
        ]);
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
        
        $request->validate([
            'pembayaran' => 'required|integer',
            'buruh_a' => 'required|integer',
            'buruh_b' => 'required|integer',
            'buruh_c' => 'required|integer'
        ]);

        $data = $request->all();
        $data['buruh_a'] = $request->buruh_a / 100 * $request->pembayaran;
        $data['buruh_b'] = $request->buruh_b / 100 * $request->pembayaran;
        $data['buruh_c'] = $request->buruh_c / 100 * $request->pembayaran;

        $item = Dashboard::findOrFail($id);
        $item->update($data);

        return redirect()->route('dashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Dashboard::findOrFail($id);
        $item->delete();

        return redirect()->route('dashboard.index');
    }
}
