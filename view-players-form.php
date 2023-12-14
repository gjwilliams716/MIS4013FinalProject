<!-- Add the necessary Bootstrap and jQuery dependencies -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newPlayer">
  <!-- SVG Icon Code -->
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
        <form method="post" action="">
          <div class="mb-3">
            <label for="playerName" class="form-label">Player Name</label>
            <input type="text" class="form-control" id="playerName" name="player">
          </div>
          <div class="mb-3">
            <label for="gamesPlayed" class="form-label">Games Played</label>
            <input type="text" class="form-control" id="gamesPlayed" name="g">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
