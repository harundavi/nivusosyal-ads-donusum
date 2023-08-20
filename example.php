<?php
$cookieName = 'sp_ads_cookie' . $siparis->sp_id;
if (!isset($_COOKIE[$cookieName])) {
    // Cookie yoksa, oluşturalım ve sayfa içeriğini gösterelim
    setcookie($cookieName, 'true', time() + 3600 * 24, '/'); // 1 gün süreyle
?>
<!-- ADS DÖNÜŞÜM KODUNUZU EKLEYİN -->
<?php } ?>
