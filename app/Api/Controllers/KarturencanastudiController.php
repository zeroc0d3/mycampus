<?php

namespace Api\Controllers;

use App\Karturencanastudi as Karturencanastudi;
use App\User as User;
use App\Mahasiswa as Mahasiswa;
use App\Http\Requests;
use Illuminate\Http\Request;
use Api\Requests\KarturencanastudiRequest;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Api\Transformers\KarturencanastudiTransformer;
use Api\Transformers\KarturencanastudiIndexTransformer;

/**
 * @Resource('Karturencanastudi', uri='/karturencanastudi')
 */
class KarturencanastudiController extends BaseController
{

    public function __construct() 
    {
        $this->middleware('jwt.auth');
    }

    /**
     * Show all karturencanastudi
     *
     * Get a JSON representation of all the karturencanastudi
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
            $karturencanastudi = Karturencanastudi::where('nim', $mahasiswa_nim)->first();
            //print_r($karturencanastudi);die();
            return $this->item($karturencanastudi, new KarturencanastudiTransformer);
        }
        $karturencanastudi = Karturencanastudi::all();
        return $this->collection($karturencanastudi, new KarturencanastudiIndexTransformer);
    }

    /**
     * Store a new karturencanastudi in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KarturencanastudiRequest $request)
    {
        return Karturencanastudi::create($request->only(['nim', 'matakuliahsemester_id']));
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
            $karturencanastudi = Karturencanastudi::where('nim', $mahasiswa_nim)->first();
            //print_r($karturencanastudi);die();
            return $this->item($karturencanastudi, new KarturencanastudiTransformer);
        }
        $karturencanastudi = Karturencanastudi::all();
        return $this->collection($karturencanastudi, new KarturencanastudiIndexTransformer);
    }

    /**
     * Update the karturencanastudi in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KarturencanastudiRequest $request, $id)
    {
        $karturencanastudi = Karturencanastudi::findOrFail($id);
        $karturencanastudi->update($request->only(['nim', 'matakuliahsemester_id']));
        return $karturencanastudi;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Karturencanastudi::destroy($id);
    }
}
