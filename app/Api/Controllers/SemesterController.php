<?php

namespace Api\Controllers;

use App\Semester;
use App\Http\Requests;
use Illuminate\Http\Request;
use Api\Requests\SemesterRequest;
use Api\Transformers\SemesterTransformer;

/**
 * @Resource('Semester', uri='/semester')
 */
class SemesterController extends BaseController
{

    public function __construct() 
    {
        //$this->middleware('jwt.auth');
        $this->middleware('jwt.auth', ['except' => ['index', 'show']]);  // or use 'only' in place of except
    }

    /**
     * Show all semester
     *
     * Get a JSON representation of all the semester
     * 
     * @Get('/')
     */
    public function index()
    {
        return $this->collection(Semester::all(), new SemesterTransformer);
    }

    /**
     * Store a new semester in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SemesterRequest $request)
    {
        return Semester::create($request->only(['name']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->item(Semester::findOrFail($id), new SemesterTransformer);
    }

    /**
     * Update the semester in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SemesterRequest $request, $id)
    {
        $semester = Semester::findOrFail($id);
        $semester->update($request->only(['name']));
        return $semester;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Semester::destroy($id);
    }
}
