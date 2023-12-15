<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editOutblModal<?php echo $outbl['player']; ?>">
 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
</svg>

</button>

<!-- Modal -->
<div class="modal fade" id="editOutblModal<?php echo $outbl['player']; ?>" tabindex="-1" aria-labelledby="editOutblModalLabel<?php echo $outbl['player']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editOutblModalLabel<?php echo $outbl['player']; ?>">Edit Outbl</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="pFirst<?php echo $outbl['player']; ?>" class="form-label">Player first name</label>
                        <input type="text" class="form-control" id="pFirst<?php echo $outbl['player']; ?>" name="pFirst" value="<?php echo $outbl['first_name']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="pLast<?php echo $outbl['player']; ?>" class="form-label">Player last name</label>
                        <input type="text" class="form-control" id="pLast<?php echo $outbl['player']; ?>" name="pLast" value="<?php echo $outbl['last_name']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="pContact<?php echo $outbl['player']; ?>" class="form-label">Contact</label>
                        <input type="text" class="form-control" id="pContact<?php echo $outbl['player']; ?>" name="pContact" value="<?php echo $outbl['contact']; ?>">
                    </div>

                    <input type="hidden" name="pid" value="<?php echo $outbl['player']; ?>">
                    <input type="hidden" name="actionType" value="Edit">
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
