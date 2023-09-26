<?php

namespace App\Http\Controllers;

use App\Models\pemasok;
use App\Http\Requests\StorePemasokRequest;
use App\Http\Requests\UpdatePemasokRequest;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use PDOException;

class PemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data['pemasok'] = pemasok::orderBy('created_at', 'DESC')->get();
            return view('pemasok.index', compact('data'));
        } catch (QueryException | Exception | PDOException $error) {
            return redirect()->back()->withErrors(['message' => $error->getMessage()]);
        }
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
     * @param  \App\Http\Requests\StorepemasokRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePemasokRequest $request)
    {
        try {
            DB::beginTransaction();
            pemasok::create($request->all());

            DB::commit();
            return redirect('pemasok')->with('success', "Input data berhasil");
        } catch (QueryException | Exception | PDOException $error) {
            DB::rollBack();
            $this->failResponse($error->getMessage(), $error->getCode());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pemasok  $pemasok
     * @return \Illuminate\Http\Response
     */
    public function show(pemasok $pemasok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pemasok  $pemasok
     * @return \Illuminate\Http\Response
     */
    public function edit(pemasok $pemasok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepemasokRequest  $request
     * @param  \App\Models\pemasok  $pemasok
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePemasokRequest $request, $pemasok)
    {
        try {
            DB::beginTransaction();
            $pemasok = Pemasok::findOrFail($pemasok);
            $validate = $request->validated();
            $pemasok->update($validate);
            DB::commit();
            return redirect()->back()->with('success', 'data berhasil di ubah');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => 'terjadi kesalahan']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pemasok  $pemasok
     * @return \Illuminate\Http\Response
     */
    public function destroy(pemasok $pemasok)
    {
        try {
            $pemasok->delete();
            return redirect('pemasok')->with('success', 'Data berhasil dihapus!');
        } catch (QueryException | Exception | PDOException $error) {
            $this->failResponse($error->getMessage(), $error->getCode());
        }
    }
}
