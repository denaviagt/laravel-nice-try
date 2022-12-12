<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    
    public function login_process(Request $request){
        $amikom_service = env('AMIKOM_SERVICE');
        $client = new Client(); //GuzzleHttp\Client
        $result = $client->post($amikom_service, [
        'form_params' => [
            'u' => $request->npm,
            'p' => $request->password
            ]
        ]);

        $response = $result->getBody()->getContents();
        $data = json_decode($response);
        // dd($data);
        //    print_r($data);
        if ($data->status == 1) {
            Session::put('mhs_nama',$data->name);
            Session::put('mhs_npm', $request->npm);
            Session::put('mhs_foto', $data->foto_mhs);

            // if(!Datas::where('key',$request->npm)->exists()){
            //     $data = new Datas();
            //     $data->  key = $request->npm;
            //     $data->value = encrypt($request->password);
            //     $data->save();
            // }

            // return Session::all();
            
            return redirect('/');


        } else {
            Alert::error('Error !', 'NPM ATAU PASSWORD SALAH !')->autoClose(1500);
            return view('auth.login');
        }
    }
    // public function login_process(Request $request){
    //     $amikom_service = env('AMIKOM_SERVICE');
    //     $client = new Client(); //GuzzleHttp\Client
    //     $result = $client->post($amikom_service, [
    //     'form_params' => [
    //         'u' => $request->npm,
    //         'p' => $request->password
    //         ]
    //     ]);
    //     $response = $result->getBody()->getContents();
    //     $data = json_decode($response);
    //     // dd($data);
    //     //    print_r($data);
    //     if ($data->status == 1) {
    //         Session::put('mhs_nama',$data->name);
    //         Session::put('mhs_npm', $request->npm);

    //         // if(!Datas::where('key',$request->npm)->exists()){
    //         //     $data = new Datas();
    //         //     $data->  key = $request->npm;
    //         //     $data->value = encrypt($request->password);
    //         //     $data->save();
    //         // }
    //         return redirect('/');


    //     }else{
    //     Alert::error('Error !', 'NPM ATAU PASSWORD SALAH !')->autoClose(1500);
    //         return view('home.index');
    //     }
    // }

        public function logout(){
            // return 'berhasil woi';
            Session::flush();
            return redirect('/login');
        }
}