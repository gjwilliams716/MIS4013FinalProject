<!-- Add the necessary Bootstrap and jQuery dependencies -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newPlayer">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
    <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newPlayer" tabindex="-1" role="dialog" aria-labelledby="newPlayerLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newPlayerLabel">New Player</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action= "">
          <div class="mb-3">
            <label for="player" class="form-label">Player Name</label>
            <input type="text" class="form-control" id="player" name="player">
          </div>
          <div class="mb-3">
            <label for="g" class="form-label">Games Played</label>
            <input type="text" class="form-control" id="g" name="g">
          </div>
          <!-- Add the new fields below -->
          <div class="mb-3">
            <label for="solo" class="form-label">Solo Tackles</label>
            <input type="text" class="form-control" id="solo" name="solo">
          </div>
          <div class="mb-3">
            <label for="ast" class="form-label">Assisted Tackles</label>
            <input type="text" class="form-control" id="ast" name="ast">
          </div>
          <div class="mb-3">
            <label for="tot" class="form-label">Total Tackles</label>
            <input type="text" class="form-control" id="tot" name="tot">
          </div>
          <div class="mb-3">
            <label for="loss" class="form-label">Tackles for Loss</label>
            <input type="text" class="form-control" id="loss" name="loss">
          </div>
          <div class="mb-3">
            <label for="sk" class="form-label">Sacks</label>
            <input type="text" class="form-control" id="sk" name="sk">
          </div>
          <div class="mb-3">
            <label for="inte" class="form-label">Interceptions</label>
            <input type="text" class="form-control" id="inte" name="inte">
          </div>
          <div class="mb-3">
            <label for="fr" class="form-label">Fumble Recoveries</label>
            <input type="text" class="form-control" id="fr" name="fr">
          </div>
          <div class="mb-3">
            <label for="ff" class="form-label">Forced Fumbles</label>
            <input type="text" class="form-control" id="ff" name="ff">
          </div>
          <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
