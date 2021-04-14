<div class="row">
    <div class="col"></div>
    <div class="col-6 mt-5">
        <div class="container">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['mhs']['nama'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['program_studi'] ?></h6>
                    <p class="card-text"><?= $data['mhs']['keterangan'] ?></p>
                    <a href="<?= BASEURL ?>/lihatdata" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col"></div>
</div>