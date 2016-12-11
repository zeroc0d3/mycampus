<?php

namespace Api\Controllers;

use App\Fakultas;
use App\Http\Requests;
use Illuminate\Http\Request;
use Api\Requests\FakultasRequest;
use Api\Transformers\FakultasTransformer;

/**
 * @Resource('Fakultas', uri='/fakultas')
 */
class FakultasController extends BaseController
{

    public function __construct() 
    {
        //$this->middleware('jwt.auth');
        $this->middleware('jwt.auth', ['except' => ['index', 'show']]);  // or use 'only' in place of except
    }

    /**
     * Show all fakultas
     *
     * Get a JSON representation of all the fakultas
     * 
     * @Get('/')
     */
    public function index()
    {
        return $this->collection(Fakultas::all(), new FakultasTransformer);
    }

    /**
     * Store a new fakultas in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FakultasRequest $request)
    {
        return Fakultas::create($request->only(['name']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // return $this->item(Fakultas::findOrFail($id), new FakultasTransformer);
        return $this->item(Fakultas::where('id', $id)->first(), new FakultasTransformer);
    }

    /**
     * Update the fakultas in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FakultasRequest $request, $id)
    {
        $fakultas = Fakultas::findOrFail($id);
        $fakultas->update($request->only(['name']));
        return $fakultas;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Fakultas::destroy($id);
    }
}
