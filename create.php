<?php
include __DIR__ .'/partials/templates/header.php';
?>

<div class="container p-3">
    <form action="partials/create/server.php" method="post">
        <div class="form-group">
            <label for="roomNumber">Numero della stanza</label>
            <input type="number" class="form-control" name="roomNumber" placeholder="Inserisci il numero della stanza" value="" id="roomNumber">
        </div>
        <div class="form-group">
            <label for="floor">Floor</label>
            <input type="number" class="form-control" name="floor" placeholder="Inserisci il piano" value="" id="floor">
        </div>
        <div class="form-group">
            <label for="beds">Beds</label>
            <input type="number" class="form-control" placeholder="Inserisci il numero dei letti" name="beds" value="" id="beds">
        </div>
        <div class="form-group">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control bg-warning" value="Insert">
        </div>
    </form>
</div> <!--containere close-->
<?php include __DIR__ .'/partials/templates/footer.php';?>
