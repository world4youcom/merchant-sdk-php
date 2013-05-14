<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\AbstractRequestType;
/**
 * 
 */
class SetMobileCheckoutRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\SetMobileCheckoutRequestDetailsType	 
	 */ 
	public $SetMobileCheckoutRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($SetMobileCheckoutRequestDetails = NULL) {
		$this->SetMobileCheckoutRequestDetails = $SetMobileCheckoutRequestDetails;
	}


   
}