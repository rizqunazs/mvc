<?php
class FormHandler{

static function addInput($tipe,$label,$nama) {
    echo '
    <label class="form-label">'.$label.'</label>
    <input type="'.$tipe.'" class="form-control" name="'.$nama.'">
    ';
}

static function addRC($tipe,$label,$name,$value) {
    echo '<div class="form-check form-check-inline">
    <input class="form-check-input" type="'.$tipe.'" name="'.$name.'" value="'.$value.'">
    <label class="form-check-label">'.$label.'</label>
    </div>';    
}

static function addOptionSelect($label,$value) {
    echo '<option value="'.$value.'">'.$label.'</option>';
}

static function addTextarea($label,$nama) {
    echo '
    <label class="form-label">'.$label.'</label>
    <textarea class="form-control" style="height: 100px" name="'.$nama.'"></textarea>
    ';
}

}
