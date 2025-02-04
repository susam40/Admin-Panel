<?php
require 'baglan.php';

if (isset($_POST['ayarkaydet'])) {
    $sorgu = $db->prepare("UPDATE ayarlar SET 
        site_baslik=:site_baslik,
        site_aciklama=:site_aciklama,
        site_link=:site_link,
        site_sahip_mail=:site_sahip_mail,
        site_mail_host=:site_mail_host,
        site_mail_mail=:site_mail_mail,
        site_mail_port=:site_mail_port,
        site_mail_sifre=:site_mail_sifre
    ");
    $sonuc = $sorgu->execute(array(
        'site_baslik' => $_POST['site_baslik'],
        'site_aciklama' => $_POST['site_aciklama'],
        'site_link' => $_POST['site_link'],
        'site_sahip_mail' => $_POST['site_sahip_mail'],
        'site_mail_host' => $_POST['site_mail_host'],
        'site_mail_mail' => $_POST['site_mail_mail'],
        'site_mail_port' => $_POST['site_mail_port'],
        'site_mail_sifre' => $_POST['site_mail_sifre']
    ));


    if ($sonuc) {
        header("location:../ayarlar.php?durum=success");
    } else {
        header("location:../ayarlar.php?durum=error");
    }

    if ($_FILES['site_logo']['error'] == "0") {
        // dosya yükleme olmaz ise herhangi bir değişiklik yapmma yükleme başarılı olursa db değiştir
        $gecici_isim = $_FILES['site_logo']['tmp_name'];
        $dosya_ismi = rand(1000000, 9999999999) . $_FILES['site_logo']['name'];
        move_uploaded_file($gecici_isim, "../dosyalar/$dosya_ismi");
        // tmp_name tarayıcıya yapılan dosyanın geçici ismidir
        $sorgu = $db->prepare("UPDATE ayarlar SET 
            site_logo=:site_logo WHERE id=1
        ");
        $sonuc = $sorgu->execute(array(
            'site_logo' => $dosya_ismi,
        ));
    }
}


?>