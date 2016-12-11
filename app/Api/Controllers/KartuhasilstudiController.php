<?php

namespace Api\Controllers;

use App\Kartuhasilstudi as Kartuhasilstudi;
use App\User as User;
use App\Mahasiswa as Mahasiswa;
use App\Http\Requests;
use Illuminate\Http\Request;
use Api\Requests\KartuhasilstudiRequest;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Api\Transformers\KartuhasilstudiTransformer;
use Api\Transformers\KartuhasilstudiIndexTransformer;

/**
 * @Resource('Kartuhasilstudi', uri='/kartuhasilstudi')
 */
class KartuhasilstudiController extends BaseController
{

    public function __construct() 
    {
        $this->middleware('jwt.auth');
    }

    /**
     * Show all kartuhasilstudi
     *
     * Get a JSON representation of all the kartuhasilstudi
     * 
     * @Get('/')
     */
    public function index()
    {
        $users   = JWTAuth::parseToken()->authenticate();
        $user_id = $users->id;
        //var_dump($user_id);die();
        $mahasiswa = Mahasiswa::where('user_id', $user_id)->first();
        if (!empty($mahasiswa)) {
            $mahasiswa_nim = $mahasiswa->nim;
            //var_dump($mahasiswa_nim);die();
            $kartuhasilstudi = Kartuhasilstudi::where('nim', $mahasiswa_nim)->first();
            //print_r($kartuhasilstudi);die();
            return $this->item($kartuhasilstudi, new KartuhasilstudiTransformer);
        }
        $kartuhasilstudi = Kartuhasilstudi::all();
        return $this->collection($kartuhasilstudi, new KartuhasilstudiIndexTransformer);
    }

    /**
     * Store a new kartuhasilstudi in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KartuhasilstudiRequest $request)
    {
        return Kartuhasilstudi::create($request->only([ 'karturencanastudi_id', 'nim', 'nilai' ]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::where('nim', $id)->first();
        if (!empty($mahasiswa)) {
            $mahasiswa_nim = $mahasiswa->nim;
            //var_dump($mahasiswa_nim);die();
            $kartuhasilstudi = Kartuhasilstudi::where('nim', $mahasiswa_nim)->first();
            //print_r($kartuhasilstudi);die();
            return $this->item($kartuhasilstudi, new KartuhasilstudiTransformer);
        }
        $kartuhasilstudi = Kartuhasilstudi::all();
        return $this->collection($kartuhasilstudi, new KartuhasilstudiIndexTransformer);
    }

    /**
     * Update the kartuhasilstudi in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KartuhasilstudiRequest $request, $id)
    {
        $kartuhasilstudi = Kartuhasilstudi::findOrFail($id);
        $kartuhasilstudi->update($request->only([ 'karturencanastudi_id', 'nim', 'nilai' ]));
        return $kartuhasilstudi;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Kartuhasilstudi::destroy($id);
    }
}
