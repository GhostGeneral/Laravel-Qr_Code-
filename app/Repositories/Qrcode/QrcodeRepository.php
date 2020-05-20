<?php

namespace App\Repositories\Qrcode;

use App\Qrcode;
use App\Repositories\Qrcode\QrcodeRepositoryInterface;


class QrcodeRepository implements QrcodeRepositoryInterface {

   /**
     * Check if qr exists
     * 
     * @return BOOLEAN
     */
    public function CheckIfQrcodeExist($text) 
    {
				$details_count = Qrcode::where([["text", $text]])->count();
				
				$details_count > 0 ? $exist = true : $exist = false;

				return $exist;
		}

		/**
		 * Generate a qrcode
		 * 
		 * @return JSON
		 */
		public function GenerateQrcode($code_details)
		{
			$fileName = rand(10000,99999);

			$file = \public_path("qrcodes/{$fileName}.png");

			\QRCode::text($code_details)->setOutfile($file)->png();

			Qrcode::create([
				"text" => $code_details,
				"qr_file" => "{$fileName}.png"
			]);

			return "{$fileName}.png";
		}

		/**
		 * Get all the qrcodes
		 * 
		 * @return JSON
		 */
		public function GetAllQrcodes() 
		{

		}

}