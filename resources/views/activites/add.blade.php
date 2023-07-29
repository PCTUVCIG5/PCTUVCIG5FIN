
<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
<form action="" method="post" id="addActiviteForm">
  @csrf
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="errMsgContainer">          
        </div>
          <div class="form-group col-sm-12">
            <label for="nomActi">NOM</label>
            <input type="text" name="nomActi" id="nomActi" class="form-control">
            </div>

            <!-- Typeacti Field -->
            <div class="form-group col-sm-12">
            <label for="typeActi">TYPE</label>
            <input type="text" name="typeActi" id="typeActi" class="form-control">
            </div>
          </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary add_activite">Save changes</button>
      </div>
    </div>
  </div>
  </form>
</div>