<?php

namespace App\Repositories\Qrcode;

interface QrcodeRepositoryInterface
{
  /**
   * Check if qrcode has been generated 
   *
   * @return BOOLEAN
   */
  public function CheckIfQrcodeExist($user_id);

	/**
	 * Generate a qrcode
	 * 
	 * @return JSON
	 */
  public function GenerateQrcode($code_details);
    
  /**
	 * Get all the qrcodes
	 * 
	 * @return JSON
	 */
	public function GetAllQrcodes();
}
