<?php 

class Modelo {
	
	function calcular($n1,$n2,$oper){
		switch($oper) {
			case "+": return $n1+$n2;
			case "-": return $n1-$n2;
			case "*": return $n1*$n2;
			case "/": 
				if ($n2==0) {
					return 0;
				}
				return $n1 / $n2;
			default: return 0;
		}		
	}
} 