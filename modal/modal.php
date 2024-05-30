<!-- Modal -->
<?php
include '../backend/database.php';

?>

<div class="modal fade" id="modal<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Change Items</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <FORM method="post" action="">
                <input type="hidden" name="id" value="<?= $id ?>">

                <input type="file" class="form-control my-2" name="Image">
                <input type="text" class="form-control my-2" value="<?= $part_Name ?>" name="Name" placeholder="Product Name">
                <input type="text" class="form-control my-2" value="<?= $Quantity ?>" name="Quantity" placeholder="Product Quantity">
                <input type="text" class="form-control my-2" value="<?= $Price ?>" name="Price" placeholder="Product Price">
                <input type="text" class="form-control my-2" value="<?= $Stack ?>" name="Stack" placeholder="Product Stack">
                <input type="submit" class="btn btn-primary form-control my-2" name="save">

            </form></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- Additional modal footer buttons if needed -->
      </div>
    </div>
  </div>
</div>
