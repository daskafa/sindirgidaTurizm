<?php

    if(isset($_POST['submit'])){
        $kullanici_adi = $_POST['kullanici_adi'];
        $sifre = $_POST['sifre'];

        if(!$kullanici_adi || !$sifre){
            $hata = 'lütfen kullanıcı adı veya şifrenizi giriniz';
        }elseif($kullanici_adi != $uye['kullanici_adi']){
            $hata = 'kullanıcı adınız hatalı';
        }elseif($sifre != $uye['sifre']){
            $hata = 'şifreniz hatalı';
        } else{
            $_SESSION['zaman'] = time() + 100000000;
            $_SESSION['kullanici_adi'] = $uye['kullanici_adi'];

            header('Location: /');
        }
    }

?>

<?php if(isset($hata)): ?>
    <div style="border: 1px solid red">
    <?php echo $hata; ?>
    </div>
<?php endif; ?>


<div class="row">
    <div class="col-md-12">
        <div class="login-screen">
        <form action="" method="post">
            Kullanıcı adı: <br>
            <input type="text" name="kullanici_adi"><br><br>
            
            Şifre: <br>
            <input type="password" name="sifre"><br>
            <input type="hidden" name="submit" value="1">
            <button type="submit"> Giriş Yap </button>
        </form>
        </div>
    </div>
</div>


