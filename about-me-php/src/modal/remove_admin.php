<!-- Modal -->
<div class="modal fade" id="removeAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Remove Admin in the system</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      
      <form action="./../action/remove_admin.php" method="POST">
        
        <div class="modal-body">

          <div class="mb-3">
            <label for="matricula" class="form-label">Matricula:</label>
            <input type="text" class="form-control" name="matricula" id="matricula" placeholder="matricula" required>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>

      </form>

    </div>
  </div>
</div>