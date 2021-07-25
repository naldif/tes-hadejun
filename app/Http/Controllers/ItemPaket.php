<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ItemPaketModel;

class ItemPaket extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('item_paket.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function data()
    {
        $itempaket = ItemPaketModel::orderBy('id_item_paket','desc')->get();

        return datatables()
            ->of($itempaket)
            ->addIndexColumn()
            ->addColumn('aksi', function ($itempaket){
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('item.update', $itempaket->id_item_paket) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button onclick="deleteData(`'. route('item.destroy', $itempaket->id_item_paket) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

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
        $itempaket = new ItemPaketModel();
        $itempaket->nama_item = $request->nama_item;
        $itempaket->paket = $request->paket;
        $itempaket->unit = $request->unit;
        $itempaket->hasil = $request->hasil;
        $itempaket->nilai_normal = $request->nilai_normal;
        $itempaket->keterangan = $request->keterangan;

        $itempaket->save();
        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $itempaket = ItemPaketModel::find($id);

        return response()->json($itempaket);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $itempaket = ItemPaketModel::find($id);
        $itempaket->nama_item = $request->nama_item;
        $itempaket->paket = $request->paket;
        $itempaket->unit = $request->unit;
        $itempaket->hasil = $request->hasil;
        $itempaket->nilai_normal = $request->nilai_normal;
        $itempaket->keterangan = $request->keterangan;

        $itempaket->update();
        return response()->json('Data berhasil diupdate', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itempaket = ItemPaketModel::find($id);
        $itempaket->delete();

        return response(null,204);
    }
}
