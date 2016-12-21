<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            # code...
            $gurus = Guru::select(['id','nama', 'jabatan', 'email', 'alamat']);
            return Datatables::of($gurus)
            ->addColumn('action', function ($guru){
                return view('datatable._action', [
                        'edit_url' => route('gurus.edit', $guru->id),
                    ]);
            })->make(true);
        }
        //

        $html = $htmlBuilder
        ->addColumn(['data'=>'nama', 'name'=>'nama', 'title'=>'Nama'])
        ->addColumn(['data'=>'jabatan', 'name'=>'jabatan', 'title'=>'Jabatan'])
        ->addColumn(['data'=>'email', 'name'=>'email', 'title'=>'E-mail'])
        ->addColumn(['data'=>'alamat', 'name'=>'alamat', 'title'=>'Alamat'])
        ->addColumn(['data'=>'action', 'name'=>'action', 'title'=>'Pilihan', 'orderable'=>false, 'searchable'=>false]);

        return view('gurus.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gurus.create');
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
        $this->validate($request, [
                'nama' => 'required|max:255',
                'jabatan' => 'required|max:255',
                'email' => 'required|email|max:255|unique:gurus',
                'alamat' => 'required']);
        $guru = Guru::create($request->only('nama','jabatan','email','alamat'));
       Session::flash("flash_notification", [
                    "level"=>"success",
                    "message"=>"$guru->nama telah ditambahkan sebagai guru"
                ]);
        return redirect()->route('gurus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $guru = Guru::find($id);
        return view('gurus.edit')->with(compact('guru'));
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
        $this->validate($request, ['nama' => 'required|max:255'. $id,
            'jabatan'=>'required|max:255',
            'email'=>'required|email|max:255|unique:gurus',
            'alamat'=>'required'
            ]);
        $guru = Guru::find($id);
        $guru->update($request->only('nama','jabatan','email','alamat'));
        Session::flash("flash_notification", [
                'level'=>'success',
                'message'=>"Berhasil Menyimpan $guru->nama"
            ]);

        return redirect()->route('gurus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
