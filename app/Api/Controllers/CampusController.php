<?php

namespace Api\Controllers;

use App\Campus;
use App\Http\Requests;
use Illuminate\Http\Request;
use Api\Requests\CampusRequest;
use Api\Transformers\CampusTransformer;

/**
 * @Resource('Campus', uri='/campus')
 */
class CampusController extends BaseController
{

    public function __construct() 
    {
        //$this->middleware('jwt.auth');
        $this->middleware('jwt.auth', ['except' => ['index', 'show']]);  // or use 'only' in place of except
    }

    /**
     * Show all campus
     *
     * Get a JSON representation of all the campus
     * 
     * @Get('/')
     */
    public function index()
    {
        return $this->collection(Campus::all(), new CampusTransformer);
    }

    /**
     * Store a new campus in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CampusRequest $request)
    {
        return Campus::create($request->only(['name', 'address', 'phone', 'fax', 'zip', 'profile', 'image1', 'image2', 'image3']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = 1;
        //return $this->item(Campus::findOrFail($id), new CampusTransformer);
        return $this->item(Campus::where('id', $id)->first(), new CampusTransformer);
    }

    /**
     * Update the campus in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CampusRequest $request, $id)
    {
        $id = 1;
        $campus = Campus::findOrFail($id);
        $campus->update($request->only(['name', 'address', 'phone', 'fax', 'zip', 'profile', 'image1', 'image2', 'image3']));
        return $campus;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = 1;
        return Campus::destroy($id);
    }
}
