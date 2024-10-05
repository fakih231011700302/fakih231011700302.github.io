<?php
class mobil {
    public $merk;
    public $warna;
    public function __construct($merk, $warna) {
        $this ->merk = $merk;
        $this ->warna = $warna;
    }

    public function nyalakanMesin() {
        return "Mesin dinyalakan.";
    }
}
$mobilToyota = new Mobil("Toyota", "Merah");
echo $mobilToyota->nyalakanMesin();
?>