<?php

namespace App\Http\Controllers\map;

use App\User;
use App\map;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Filesystem\Filesystem;

class MapController extends Controller
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
     * ファイルアップロード処理
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'file' => [
                // 必須
                'required',
                // アップロードされたファイルであること
                'file',
                // 画像ファイルであること
                'image',
                // MIMEタイプを指定
                'mimes:jpeg,jpg,png',
                // 最小縦横120px 最大縦横400px
                'dimensions:min_width=120,min_height=120,max_width=2400,max_height=2400',
            ]
        ]);

        if ($request->file('file')->isValid([])) {

            $ext = $request->file->getClientOriginalExtension();
            $filename = $request->infraCode . $request->floor;
            $filename .= '.';
            $filename .= $ext;

            $uploadname = $request->file->storeAs('map',$filename);

            $map = new \App\map();
            $user = Auth::user();
            $map->memberId = $user->name;
            $map->infraCode = $request->infraCode;
            $map->floor = $request->floor;
            $map->xCoordinate = 0;
            $map->yCoordinate = 0;
            $map->zCoordinate = 0;
            $map->fileName = $filename;
            $map->save();

            return redirect('/map/upload')->with('success', '保存しました。');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
        }
    }
}
