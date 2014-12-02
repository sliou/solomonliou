<?php # config.inc
	// Sets the error reporting and logging for the site
	// Comment out production or development level error reporting
	
	//	error_reporting (0); 	// Production level
	error_reporting (E_ALL);	// Development level
	
	// Use my own error-handling function.
	function my_error_handler ($e_number, $e_message){
		$message = 'An error occurred in script ' . __FILE__ . ' on line ' . __LINE__ . ": $e_message";
		//error_log ($message, 1, 'solomonliou@gmail.com'); // Production (send mail)
		echo '<div class="error">', $message, '</div>';	// Development (print the error in red)
	}
	set_error_handler('my_error_handler');
?>