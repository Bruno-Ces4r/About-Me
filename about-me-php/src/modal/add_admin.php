<!-- Modal -->
<div class="modal fade" id="addAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin in the system</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      
      <form action="./../action/add_admin.php" method="POST">
        
        <div class="modal-body">

          <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="nome" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email address:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
          </div>

          <div class="mb-3">
            <label for="matricula" class="form-label">Matricula:</label>
            <input type="text" class="form-control" name="matricula" id="matricula" placeholder="Matricula" required>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" required>
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