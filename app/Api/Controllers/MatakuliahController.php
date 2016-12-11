<?php

namespace Api\Controllers;

use App\Matakuliah;
use App\Http\Requests;
use Illuminate\Http\Request;
use Api\Requests\MatakuliahRequest;
use Api\Transformers\MatakuliahTransformer;

/**
 * @Resource('Matakuliah', uri='/matakuliah')
 */
class MatakuliahController extends BaseController
{

    public function __construct() 
    {
        //$this->middleware('jwt.auth');
        $this->middleware('jwt.auth', ['except' => ['index', 'show']]);  // or use 'only' in place of except
    }

    /**
     * Show all matakuliah
     *
     * Get a JSON representation of all the matakuliah
     * 
     * @Get('/')
     */
    public function index()
    {
        return $this->collection(Matakuliah::all(), new MatakuliahTransformer);
    }

    /**
     * Store a new matakuliah in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MatakuliahRequest $request)
    {
        return Matakuliah::create($request->only(['name', 'jurusan_id', 'sks']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->item(Matakuliah::findOrFail($id), new MatakuliahTransformer);
    }

    /**
     * Update the matakuliah in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MatakuliahRequest $request, $id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        $matakuliah->update($request->only(['name', 'jurusan_id', 'sks']));
        return $matakuliah;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Matakuliah::destroy($id);
    }
}
