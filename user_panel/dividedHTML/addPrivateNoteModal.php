<div class="modal" tabindex="-1" role="dialog" aria-labelledby="addPrivateNoteModal" aria-hidden="true" id="addPrivateNoteModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                
                    <div class="modal-header">
                        <h3 class="modal-title">Dodaj notatkę</h3>
                    </div>
                    <div class="modal-body">
                        <div class="">
                        <form method="POST">
                            <div class="form-group">
                                <label for="title">  Tytuł </label>
                                <input type="text" data-val="true" class="form-control" name="title" id="title"/>
                                <label for="title">Treść:</label>
                                <textarea name="note" style="height: 10em" rows="100" class="form-control" id="note-content"></textarea>
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