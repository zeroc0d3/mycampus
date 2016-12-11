<?php

namespace Api\Controllers;

use App\Mahasiswa;
use App\Http\Requests;
use Illuminate\Http\Request;
use Api\Requests\MahasiswaRequest;
use Api\Transformers\MahasiswaTransformer;

/**
 * @Resource('Mahasiswa', uri='/mahasiswa')
 */
class MahasiswaController extends BaseController
{

    public function __construct() 
    {
        $this->middleware('jwt.auth');
    }

    /**
     * Show all mahasiswa
     *
     * Get a JSON representation of all the mahasiswa
     * 
     * @Get('/')
     */
    public function index()
    {
        return $this->collection(Mahasiswa::all(), new MahasiswaTransformer);
    }

    /**
     * Store a new mahasiswa in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MahasiswaRequest $request)
    {
        return Mahasiswa::create($request->only(['nim', 'name', 'user_id', 'jurusan_id']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->item(Mahasiswa::where('nim', $id)->first(), new MahasiswaTransformer);
    }

    /**
     * Update the mahasiswa in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MahasiswaRequest $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->only(['nim', 'name', 'user_id', 'jurusan_id']));
        return $mahasiswa;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Mahasiswa::destroy($id);
    }
}
