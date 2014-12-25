<?php

Class DevTest{
	
	private $_str;
	
	public function __construct($text) {
		$this->_str = $text;
	}
	
	public function reverse($text = "") {		
		if ($text == "") {
			if ($this->_str != "") {
				return strrev($this->_str);
			}
		}
		else {
			return strrev($text);
		}
		return "";
	}
}

