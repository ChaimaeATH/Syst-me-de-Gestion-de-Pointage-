<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Ajouter Shift</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('schedule.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Nom</label>

                        <div class="col-sm-9">
                            <div class="bootstrap-timepicker">
                                <input type="text" class="form-control timepicker" id="name" name="slug">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="time_in" class="col-sm-3 control-label">Temps D'Entrée</label>

                        <div class="col-sm-9">
                            <div class="bootstrap-timepicker">
                                <input type="time" class="form-control timepicker" id="time_in" name="time_in" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="time_out" class="col-sm-3 control-label">Temps De Sortie</label>

                        <div class="col-sm-9">
                            <div class="bootstrap-timepicker">
                                <input type="time" class="form-control timepicker" id="time_out" name="time_out" required>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Quitter</button>
                <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i> Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</div>

