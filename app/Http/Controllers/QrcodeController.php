<?php

namespace App\Http\Controllers;

use App\Qrcode;
use Illuminate\Http\Request;
use App\Repositories\Qrcode\QrcodeRepositoryInterface;

class QrcodeController extends Controller
{

	public function __construct (QrcodeRepositoryInterface $qrCodeRepo){
		$this->_qrCodeRepo = $qrCodeRepo;
    }
    
    public function index()
    {
        $all_qrcodes = Qrcode::orderBy('id', 'DESC')->get();

        //dd($all_qrcodes);

        return view('qrcode.index', ['qrcodes' => $all_qrcodes]);
    }

    public function generate()
    {
       return view('qrcode.generate');
    }

    public function generateQrcode (Request $request) 
    {
        if (!$request->qrText || $request->qrText == '') {
            return response()->json([
                "message" => "Text is required to generate a qrcode.",
                "error" => true
            ], 400);
        }

        if ($this->_qrCodeRepo->CheckIfQrcodeExist($request->qrText)) :
            return response()->json([
                "message" => "A qrcode has been generated for this text previously", 
                "error" => true
            ], 400);
        endif;

        return response()->json([
            "message" => "Request was successfull", 
            "data" => $this->_qrCodeRepo->generateQrcode($request->qrText), 
            "error" => true
        ], 200);
    }
}
