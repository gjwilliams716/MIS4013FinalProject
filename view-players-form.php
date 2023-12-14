<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newPlayer">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
    <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4"/>
  </svg>
</button>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
          <label for="player" class="form-label">Player Name</label>
          <input type="text" class="form-control" id="player" name="player">
        </div>
        <div class="mb-3">
          <label for="g" class="form-label">Games Played</label>
          <input type="text" class="form-control" id="player" name="g">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
        
      </div>
    </div>
  </div>
</div>
