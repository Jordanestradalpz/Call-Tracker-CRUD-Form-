<?php include 'templates/header.php' ?>

<?php 

include_once 'model/connection.php';

$callId = $_GET['id'];

$consult = $bd->prepare("SELECT * from calltracker where id = ?");

$consult->execute([$callId]);

$llamada = $consult->fetch(PDO::FETCH_OBJ);

?>

<div class="container mt-5">
    <div class="row justify-content-center">
    <div class="col-md-4">
<div class="card">
    <div class="card-header">Modify call information</div>
    <form action="update.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Customer's Name</label>
            <input class="form-control" type="text" placeholder="Update name" aria-label="default input example" autofocus name="inputName" value=<?php echo $llamada->cxname ?>>
        </div>
        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input class="form-control" type="text" placeholder="Update phone" aria-label="default input example" name="inputPhone" value=<?php echo $llamada->phone ?>>
        </div>
        <div class="mb-3">
            <label class="form-label">Reason for the call</label>
            <input class="form-control" type="text" placeholder="Update reason for the call" aria-label="default input example" name="inputReason" value=<?php echo $llamada->reason4call ?>>
        </div>
        <input type="hidden" name="id" value="<?php echo $llamada->id; ?>">
        <input type="submit" class="btn btn-success" value="Update">
    </form>
</div>
</div>
</div>
</div>

<?php include 'templates/footer.php' ?>