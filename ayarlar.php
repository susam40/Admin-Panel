<?php include 'header.php' ?>
<!-- içeriye dosya aktarir.(require)
include ile require farki, include de dosya varsa içeri aktarir yoksa calismaya devam eder.
@konulursa hatayi göstermez. -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="font-weight-bold text-primary">Ayarlar</h5>
                </div>
                <div class="card-body">
                    <form action="" method="POST" accept-charset="utf-8">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label>Site Logo</label>
                                <input type="file" class="form-control" name="site_logo">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label>Site Başlık</label>
                                <input type="text" class="form-control" name="site_baslik">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label>Site Açıklama</label>
                                <input type="text" class="form-control" name="site_aciklama">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label>Site Link</label>
                                <input type="text" class="form-control" name="site_link">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label>Site Sahibinin Mail Adresi</label>
                                <input type="text" class="form-control" name="site_sahip_mail">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label>Mail Host Adresi</label>
                                <input type="text" class="form-control" name="site_mail_host">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mail Adresi</label>
                                <input type="text" class="form-control" name="site_mail_mail">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label>Mail Port Numarası</label>
                                <input type="text" class="form-control" name="site_mail_port">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mail Şifresi</label>
                                <input type="text" class="form-control" name="site_mail_sifre">
                            </div>
                        </div>
                        <div class=" form-row">
                            <button type="button" class="btn btn-primary">Kaydet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>