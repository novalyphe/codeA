
<?php
$maistas = false;
if (isset($_POST['edit'])){
    $auto = new maistas();
    $maistas = $auto->get($_POST['edit']);
}
if ($maistas === false){
    $maistas = [
        'id' => '',
        'gamintojas' => '',
        'modelis' => '',
        'metai' => '',
        'kaina' => '',
        'pastabos' => '',
        'nuotrauka' => '',
        'mime' => ''
    ];
}
?>
<form method="post" action="auto_update.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="gamintojas">Gamintojas:</label>
        <input type="text" class="form-control" id="gamintojas" name="gamintojas" value="<?php echo $maistas['gamintojas'] ?>">
        <label for="modelis">Modelis:</label>
        <input type="text" class="form-control" id="modelis" name="modelis" value="<?php echo $maistas['modelis'] ?>">
        <label for="metai">Metai:</label>
        <input type="text" class="form-control" id="metai" name="metai" value="<?php echo $maistas['metai'] ?>">
        <label for="kaina">Kaina:</label>
        <input type="text" class="form-control" id="kaina" name="kaina" value="<?php echo $maistas['kaina'] ?>">
        <label for="pastabos">Pastabos:</label>
        <textarea class="form-control" id="pastabos" name="pastabos"><?php echo $maistas['pastabos'] ?></textarea>
        <label for="nuotrauka">Nuotrauka:</label>
        <input type="file" class="form-control" id="nuotrauka" name="nuotrauka">
        <button type="submit" class="btn btn-primary mt-1" name="submit">Vykdyti</button>
    </div>
    <input type="hidden" name="id" value="<?php echo $maistas['id'] ?>">
</form>
