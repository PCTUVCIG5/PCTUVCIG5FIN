<div class="modal fade" id="modal-mere">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">VEILLEZ ENREGISTRER LE PRER SVP</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
    <div class="form-group">
              {!! Form::open(['route' => 'femmes.store']) !!}

                <div class="card-body">

                  <div class="row">
                      @include('femmes.fields')
                  </div>

                </div>
    </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>
    </div>
    {!! Form::close() !!}
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>