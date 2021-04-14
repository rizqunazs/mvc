<div class="row mt-5">
    <div class="col"></div>
    <div class="col-6">
        <?php Flasher::flash() ?>
    </div>
    <div class="col"></div>
</div>
<div class="row">
    <div class="col"></div>
    <div class="col-6 py-3 shadow rounded bg-light">
        <h1 align="center">Tugas 05</h1>
        <div class="container">
            <form action="<?= BASEURL ?>/form/submit" method="post">
                <?php
                FormHandler::addInput('text', 'Nama :', 'nama');
                FormHandler::addInput('password', 'Password :', 'password'); ?>
                <label class="form-label">Jenis Kelamin</label> </br>
                <?php
                FormHandler::addRC('radio', 'Laki-laki', 'jenis_kelamin', 'laki-laki');
                FormHandler::addRC('radio', 'Perempuan', 'jenis_kelamin', 'perempuan');
                ?>
                </br>
                <label class="form-label">Program Studi</label> </br>
                <select class="form-select" name="program_studi">
                    <?php
                    FormHandler::addOptionSelect('D3 Teknik Informatika', 'D3 Teknik Informatika');
                    FormHandler::addOptionSelect('D3 Teknik Mesin', 'D3 Teknik Mesin');
                    ?>
                </select>
                <?php
                FormHandler::addTextarea('Keterangan :', 'keterangan');
                ?>
                <label class="form-label">Status</label> </br>
                <?php
                FormHandler::addRC('checkbox', 'Aktif', 'status', '1');
                ?>
                </br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="col"></div>
</div>