<!-- Bagaimana jika Contant dirubah menjadi private? -->

<?php
    class Produk {
        private const KURSUSD = 15000;
    }

    echo Produk::KURSUSD;
?>