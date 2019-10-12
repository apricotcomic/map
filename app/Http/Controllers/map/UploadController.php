<?php

namespace App\Http\Controllers\map;

use App\User;
use App\Services\MapService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the upload.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(auth()->id());

        return view('/map/mapUpload');
    }

    /**
     * Menu Display
     */
    public function menu()
    {
        return view('/map/menu');
    }

    /**
     * ファイルアップロード処理
     */
    public function upload(Request $request)
    {

        if($request->action === 'back') {
            return view('/map/menu');
        } else {
            $mapservice = New Mapservice();
            $mapservice->upload($request);
            return view('/map/mapupload');
        }
    }
}
