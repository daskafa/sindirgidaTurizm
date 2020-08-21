<?php include 'partials/site-header.php' ?>
<?php include 'partials/site-nav.php' ?>

<?php
    
    require 'ayarlar.php';
    require 'baglan.php';

    if (isset($_SESSION['zaman']) && time() > $_SESSION['zaman']) {
        session_destroy();
        header('Location: /');
    }else{
        $_SESSION['zaman'] = time() + 1000000;
    }

?>

<?php
    
    if (isset($_SESSION['kullanici_adi'])) {
        include 'admin.php';
    } else {
        include 'giris.php';
    }

?>





<?php include 'partials/site-footer.php'; ?>