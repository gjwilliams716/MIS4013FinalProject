<!-- Add the necessary Bootstrap and jQuery dependencies -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<button type="button" class="btn btn-primary" data-toggle="modal" data-bs-target="#editOutblModal<?php echo $oudtbls['player']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editOutblModal<?php echo $oudtbls['player']; ?>" tabindex="-1" aria-labelledby="editOutblModalLabel<?php echo $oudtbls['player']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editOutblModalLabel<?php echo $oudtbls['player']; ?>">Edit Outbl</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="player" class="form-label">Player Name</label>
                        <input type="text" class="form-control" id="player" name="player" value="<?php echo $oudtbls['player']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="g" class="form-label">Games Played</label>
                        <input type="text" class="form-control" id="g" name="g" value="<?php echo $oudtbls['g']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="solo" class="form-label">Solo Tackles</label>
                        <input type="text" class="form-control" id="solo" name="solo" value="<?php echo $oudtbls['solo']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="ast" class="form-label">Assisted Tackles</label>
                        <input type="text" class="form-control" id="ast" name="ast" value="<?php echo $oudtbls['ast']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tot" class="form-label">Total Tackles</label>
                        <input type="text" class="form-control" id="tot" name="tot" value="<?php echo $oudtbls['tot']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="loss" class="form-label">Tackles for Loss</label>
                        <input type="text" class="form-control" id="loss" name="loss" value="<?php echo $oudtbls['loss']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="sk" class="form-label">Sacks</label>
                        <input type="text" class="form-control" id="sk" name="sk" value="<?php echo $oudtbls['sk']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inte" class="form-label">Interceptions</label>
                        <input type="text" class="form-control" id="inte" name="inte" value="<?php echo $oudtbls['inte']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="fr" class="form-label">Fumble Recoveries</label>
                        <input type="text" class="form-control" id="fr" name="fr" value="<?php echo $oudtbls['fr']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="ff" class="form-label">Forced Fumbles</label>
                        <input type="text" class="form-control" id="ff" name="ff" value="<?php echo $oudtbls['ff']; ?>">
                    </div>
                    <input type="hidden" name="actionType" value="Edit">
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
