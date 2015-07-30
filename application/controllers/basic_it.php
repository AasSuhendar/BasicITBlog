<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Basic_it extends CI_Controller {

	var $v1=1;
		var $v2=2;
		var $v3=3;
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo "basic_it";
	}

	public function soalSectionPHP()
	{
		echo "soal1<br>";
		$a=1;
		++$a;
		$a*=$a;
		echo $a--;

		echo "<br>soal2<br>";

		function fibonaci($a, $b)
		{
			return $a+$b;
		}

		$a=0;
		$b=1;
		for ($i=0; $i <10 ; $i++) { 
			echo fibonaci($a,$b).',';
		}

		echo "<br>soal3<br>";

		echo strcmp(12345,'12345');

		echo "<br>soal4<br>";

		$var=2;
		$str='aaaabbbbccccdddd';
		echo str_replace('a','z',$str,$var);
		

		echo "<br>soal5<br>";
		$aa = array(1,2,3);
		foreach ($aa as $bb) {
			$bb*=2;
		}
		echo $aa[0]*$aa[1]*$aa[2];

		echo "<br>soal6<br>";
		$aaa = array(1,2,4,8);
		$bbb = array(0,2,4,6,8,10);
		echo count(
				array_merge(
						array_diff($aaa,$bbb),array_diff($bbb,$aaa)
					)
			);

		echo "<br>soal7<br>";
		$aaaa = array(
			'1' => "A", 
			1 => "B", 
			2 => "D"
			);
		print_r($aaaa);
		echo "<br>".count($aaaa);

		echo "<br>soal8<br>";

		function addValues()
		{
			$sum=0;
			for ($i=1; $i <func_num_args() ; $i++) { 
				$sum+=func_num_args($i);
			}
			return $sum;
		}
		echo addValues(1,2,3);

		echo "<br>soal9<br>";
		$v1=1;
		$v2=2;
		$v3=3;

		function myFunction()
		{
			// $GLOBALS['v1']*=2;
			// $v2*=2;
			global $v3;
			$v3*=2;
		}
		myFunction();
		echo "$v1$v2$v3";

		echo "<br>soal10<br>";
		function increment($value)
		{
			return ++$value;
		}
		echo increment(1);

		echo "<br>soal11<br>";
		echo "apa hubungan class dengan object";
		echo "<br>soal12<br>";
		x
	}

}

/* End of file basic_it.php */
/* Location: ./application/controllers/basic_it.php */