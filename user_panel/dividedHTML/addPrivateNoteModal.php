<div class="modal" tabindex="-1" role="dialog" aria-labelledby="addPrivateNoteModal" aria-hidden="true" id="addPrivateNoteModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="panelClass/panel.php" method="POST" novalidate="novalidate">
                    <div class="modal-header">
                        <h3 class="modal-title">Dodaj notatkę</h3>
                    </div>
                    <div class="modal-body">
                        <div class="">
                            <div class="form-group">
                                <label for="title">  Tytuł </label>
                                <input type="text" data-val="true" data-val-required="Wpisz tytuł notatki" class="form-control" name="title" id="title"/>
                                <label for="title">Treść:</label>
                                <textarea name="note-content" style="height: 10em" rows="100" class="form-control" id="note-content"></textarea>
                                <span class="field-validation-valid text-danger" data-valmsg-for="userName" data-valmsg-replace="true"></span>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Dodaj" />
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                    </div>
                </form>
            </div>
        </div>
    </div>