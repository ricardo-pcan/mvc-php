<?php

	class Utils
	{
		public static function decode_yaml($yaml_file)
	  {
	    return Spyc::YAMLLoad($yaml_file);
	  }	
	}
	

?>