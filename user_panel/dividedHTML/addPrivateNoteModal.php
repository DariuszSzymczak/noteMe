<div class="modal" tabindex="-1" role="dialog" aria-labelledby="addPrivateNoteModal" aria-hidden="true" id="addPrivateNoteModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" novalidate="novalidate">
                    <div class="modal-header">
                        <h3 class="modal-title">Utwórz grupę</h3>
                    </div>
                    <div class="modal-body">
                        <div class="">
                            <div class="form-group">
                                <label for="groupName">
                                    Tytuł </label>
                                <input type="text" data-val="true" data-val-required="Wpisz nazwę grupy" class="form-control" name="title" id="groupName"
                                />
                                <label for="groupSize">
                                    Treść </label>
                                <input type="text" min="20" value="20" data-val="true" data-val-required="Wpisz nazwę grupy" class="form-control" name="content" id="groupSize"
                                />
                                <span class="field-validation-valid text-danger" data-valmsg-for="groupName" data-valmsg-replace="true"></span>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Dodaj"/>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                    </div>
                </form>
            </div>
        </div>
    </div>