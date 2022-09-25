<?php include 'templates/header.php'; ?>

<?php 
include 'model/connection.php'; 

$sentencia = $bd->query("SELECT * from calltracker");

$llamada = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>
<div class="container">
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer's Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Reason for call</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($llamada as $data){ ?>
        <tr>
            <th scope="row"><?php echo $data->id ?></th>
            <td><?php echo $data->cxname ?></td>
            <td><?php echo $data->phone ?></td>
            <td><?php echo $data->reason4call ?></td>
            <td><a class="btn btn-primary" role="button" href="edit.php?id=<?php echo $data->id ?>">Edit</a> <a class="btn btn-danger" role="button" href="delete.php?id=<?php echo $data->id ?>">Delete</a></td>
        </tr>
    <?php } ?>   
  </tbody>
</table>
</div>

<div class="container">
<div class="card">
    <div class="card-header">Enter call information</div>
    <form action="register.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Customer's Name</label>
            <input class="form-control" type="text" placeholder="Enter customer's name" aria-label="default input example" autofocus name="inputName">
        </div>
        <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input class="form-control" type="text" placeholder="Enter phone number" aria-label="default input example" name="inputPhone">
        </div>
        <div class="mb-3">
            <label class="form-label">Reason for the call</label>
            <input class="form-control" type="text" placeholder="Enter reason for the call" aria-label="default input example" name="inputReason">
        </div>
        <input type="submit" class="btn btn-success" value="Save">
    </form>
</div>
</div>

<?php include 'templates/footer.php'; ?>