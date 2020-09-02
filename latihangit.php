<?php 
class komputer {
	//property
	public $prosesor;
	public $memory;
	//method 
	public function cetak(){
		return "$this ->prosesor | $this ->memory" ;
	}
	//construct
	public function __construct($prosesor,$memory = "12 Gb") {
	$this -> prosesor = $prosesor;
	$this -> memory = $memory;
	}
	public __destruct(){
		echo "ini berasal dari destruct komputer";
	}
}
//object
$laptopsaya = new komputer ("core i5","16 gb");
echo $laptopsaya -> cetak();
//hapus 
unset ($laptopsaya);
echo "<br/>";
echo "objek telah dihapus";
?>  