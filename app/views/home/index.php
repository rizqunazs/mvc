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
        <h1 align="center">BOOK ROOM</h1>
        <div class="container">
            <form action="<?= BASEURL ?>/home/submit" method="post">
                <?php
                FormHandler::addInput('text', 'Nama :', 'nama');
                FormHandler::addInput('text', 'Email :', 'email');
                FormHandler::addInput('text', 'No Telepon :', 'telepon');
                ?>
               
                </br>
                <label class="form-label">Room Type</label> </br>
                <select class="form-select" name="room_type">
                    <?php
                    FormHandler::addOptionSelect('Single Room', 'Single Room');
                    FormHandler::addOptionSelect('Double Room', 'Double Room');
                    FormHandler::addOptionSelect('Suit Room', 'Suit Room');
                    ?>
                </select>


                <?php
                FormHandler::addInput('date', 'Check In :', 'Checkin');
                FormHandler::addInput('date', 'Check Out:', 'CheckOut');
                ?>
                
                </br>
                <?php
                FormHandler::addTextarea('Keterangan (permintaan khusus):', 'keterangan');
                ?>

                </br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="col"></div>
</div>