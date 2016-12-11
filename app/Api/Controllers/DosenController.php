<?php

namespace Api\Controllers;

use App\Dosen;
use App\Http\Requests;
use Illuminate\Http\Request;
use Api\Requests\DosenRequest;
use Api\Transformers\DosenTransformer;

/**
 * @Resource('Dosen', uri='/dosen')
 */
class DosenController extends BaseController
{

    public function __construct() 
    {
        $this->middleware('jwt.auth');
    }

    /**
     * Show all dosen
     *
     * Get a JSON representation of all the dosen
     * 
     * @Get('/')
     */
    public function index()
    {
        return $this->collection(Dosen::all(), new DosenTransformer);
    }

    /**
     * Store a new dosen in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DosenRequest $request)
    {
        return Dosen::create($request->only(['nip', 'name']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return $this->item(Dosen::findOrFail($id), new DosenTransformer);
        return $this->item(Dosen::where('nip', $id)->first(), new DosenTransformer);
    }

    /**
     * Update the dosen in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DosenRequest $request, $id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->update($request->only(['nip', 'name']));
        return $dosen;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Dosen::destroy($id);
    }
}
