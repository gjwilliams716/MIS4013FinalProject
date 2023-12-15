<!-- Button trigger modal for Delete Player -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletePlayerModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
    <path d="M1.5 2.5a.5.5 0 0 1 1 0V13a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5a.5.5 0 0 1 1 0V13a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V2.5z"/>
    <path d="M10 6L9 6V4a1 1 0 0 0-2 0v2H6a1 1 0 0 0 0 2h1v2a1 1 0 0 0 2 0V8h1a1 1 0 0 0 0-2z"/>
  </svg>
</button>

<!-- Modal for Delete Player -->
<div class="modal fade" id="deletePlayerModal" tabindex="-1" role="dialog" aria-labelledby="deletePlayerModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deletePlayerModalLabel">Delete Player</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="playerToDelete" class="form-label">Player Name to Delete</label>
            <input type="text" class="form-control" id="playerToDelete" name="playerToDelete">
          </div>
          <input type="hidden" name="actionType" value="Delete">
          <button type="submit" class="btn btn-danger">Delete Player</button>
        </form>
      </div>
    </div>
  </div>
</div>
