<!-- Bagaimana jika Contant dirubah menjadi private? -->

<?php
    class Produk {
        public $hargaUSD = 0;
        private const KURSUSD = 15000;
        
        public function hargaIDR(){
            return $this->hargaUSD*self::KURSUSD;
        }
    }
    
    $produk01 = new Produk();
    $produk01->hargaUSD = 15;

    echo $produk01->hargaIDR();