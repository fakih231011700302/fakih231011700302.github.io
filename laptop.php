<?php
class laptop {
    public $merk;
    public $tipe;
    public function __construct($merk, $tipe) {
        $this ->merk = $merk;
        $this ->tipe = $tipe;
    }

    public function hidupkanlaptop() {
        return "Hidupkan.";
    }
}
$mobilToyota = new Mobil("Toyota", "Merah");
echo $mobilToyota->nyalakanMesin();
?>