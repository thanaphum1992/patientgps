<?php
include("./conopd.php");
$sql = 'SELECT * FROM countries';
$result = $conn->prepare($sql);
$result->execute();
$sss = $result->fetchAll(PDO::FETCH_OBJ);

///  row count 
//$count = $result->rowCount();
//print "พบข้อมูล " .  $count . " แถว";
?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h1>My is country</h1>

        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>country_En</th>
                    <th>country_Th</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($sss as $getdata) : ?>
                    <tr>
                        <td><?= $getdata->id; ?></td>
                        <td><?= $getdata->name; ?></td>
                        <td><?= $getdata->thainame; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $hash = base64_encode($getdata->id) ?>" class="btn btn-info">Edit</a>
                            <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $hash = base64_encode($getdata->id) ?>" class='btn btn-danger'>Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>