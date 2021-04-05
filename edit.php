<?php
include("./conopd.php");
$id =base64_decode($_GET['id']);
//echo($id);
$sql = 'SELECT * FROM countries WHERE id=:id';
$statement = $conn->prepare($sql);
$statement->execute([':id' => $id ]);
$sss = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['name'])  && isset($_POST['thainame']) ) {
  $name = $_POST['name'];
  $thainame = $_POST['thainame'];
  $sql = 'UPDATE countries SET name=:name, thainame=:thainame WHERE id=:id';
  $statement = $conn->prepare($sql);
  if ($statement->execute([':name' => $name, ':thainame' => $thainame, ':id' => $id])) {
    header("Location: ./testpdo.php");
  }
}
 ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update person</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input value="<?= $sss->name; ?>" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" value="<?= $sss->thainame; ?>" name="thainame" id="thainame" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update data</button>
        </div>
      </form>
    </div>
  </div>
</div>
