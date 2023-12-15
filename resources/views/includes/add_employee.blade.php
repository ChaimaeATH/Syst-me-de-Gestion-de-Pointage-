<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Ajouter Employé</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('employees.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Nom</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Mot De Passe</label>

                        <div class="col-sm-9">
                            <div class="date">
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pincode" class="col-sm-3 control-label">PinCode (4 Digits)</label>

                        <div class="col-sm-9">
                            <input type="password" maxlength="4" class="form-control" id="pincode" name="pin_code">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">E-Mail</label>

                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="schedule" class="col-sm-3 control-label">Shift</label>

                        <div class="col-sm-9">
                            <select class="form-control" id="schedule" name="schedule" required>
                                <option value="" selected>- Select -</option>
                                @foreach($schedules as $schedule)
                                <option value="{{$schedule->slug}}">{{$schedule->slug}} -> from {{$schedule->time_in}} to {{$schedule->time_out}} </option>
                                @endforeach

                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
                <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i> Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</div>
