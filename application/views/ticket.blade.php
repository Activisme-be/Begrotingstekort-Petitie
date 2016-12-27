<div id="newTicket" class="modal fade" role="dialog">
    <div class="modal-dialog">

        {{-- Modal content--}}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Ticket creatie</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="http://www.resources.activisme.be/tickets/insert" class="form-horizontal">
                    {{-- Category form-group --}}
                    <div class="form-group">
                        <label class="control-label col-sm-3">
                            Label: <span class="text-danger">*</span>
                        </label>

                        <div class="col-sm-9">
                            <select name="category" class="form-control">
                                <option value="">-- Selecteer label --</option>

                                @foreach (Categories::all() as $category)
                                    <option value="{{ $category->id}}">{{ $category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- Heading form-group --}}
                    <div class="form-group">
                        <label class="control-label col-sm-3">
                            Titel: <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="heading" placeholder="Titel" class="form-control">
                        </div>
                    </div>

                    {{-- Description form-group --}}
                    <div class="form-group">
                        <label class="control-label col-sm-3">
                            Beschrijving: <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-9">
                            <textarea name="description" rows="7" class="form-control" placeholder="beschrijving"></textarea>
                        </div>
                    </div>

                {{-- Submit button and reset button not needed --}}
                {{-- They are located in the modal bottom --}}
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Aanmaken</button>
                </form>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>