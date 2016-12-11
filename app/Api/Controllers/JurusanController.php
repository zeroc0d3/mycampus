<?php

namespace Api\Controllers;

use App\Jurusan;
use App\Http\Requests;
use Illuminate\Http\Request;
use Api\Requests\JurusanRequest;
use Api\Transformers\JurusanTransformer;

/**
 * @Resource('Jurusan', uri='/jurusan')
 */
class JurusanController extends BaseController
{

    public function __construct() 
    {
        //$this->middleware('jwt.auth');
        $this->middleware('jwt.auth', ['except' => ['index', 'show']]);  // or use 'only' in place of except
    }

    /**
     * Show all jurusan
     *
     * Get a JSON representation of all the jurusan
     * 
     * @Get('/')
     */
    public function index()
    {
        return $this->collection(Jurusan::all(), new JurusanTransformer);
    }

    /**
     * Store a new jurusan in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JurusanRequest $request)
    {
        return Jurusan::create($request->only(['name', 'fakultas_id', 'image', 'profile']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->item(Jurusan::findOrFail($id), new JurusanTransformer);
    }

    /**
     * Update the jurusan in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JurusanRequest $request, $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->update($request->only(['name', 'fakultas_id', 'image', 'profile']));
        return $jurusan;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Jurusan::destroy($id);
    }
}
