@layout('layouts/frontend')

@section('content')
    <div style="margin-bottom: -22px;" class="row">
        <div class="col-sm-12">
            <div style="border-radius:0px; border: 0px;" class="panel panel-default">
                <div class="panel-body">

                    <div class="col-md-9">
                        <h2>Beste vrienden sympathisanten,</h2>

                        <p>
                            Aangezien onze regering het geld blijft halen bij de kleine man en toch nog steeds te kort komt. <br>
                            Hebben wij besloten om de regering even te helpen. <br>
                            Met deze speciale petitie proberen wij duidelijk te maken dat er andere manieren zijn. <br>
                            Wij burgers doen het zelf, voel u vrij om de regering een handje toe te steken! <br>
                        </p>

                        <hr>

                        <form method="POST" action="" class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-2">
                                    Uw naam: <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-5">
                                    <input type="text" name="name" placeholder="Uw naam" class="form-control" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    Email: <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="email" placeholder="Uw email adres" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    Vonst: <span class="text-danger">*</span>
                                </label>

                                <div class="col-sm-5">
                                    <select class="form-control" name="finding">
                                        <option value="" selected>-- Selecteer uw vonst --</option>
                                        <option value="1000">(1.000€) Lux leaks</option>
                                        <option value="10000">(10.000€) Swiss Leaks</option>
                                        <option value="100000">(100.000€) Panama Papers</option>
                                        <option value="1000000">(1.000.000€) Bahama leaks</option>
                                        <option value="10000000">(10.000.000€) Vermogens taks</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-4">
                                    <button type="submit" class="btn btn-sm btn-success">Insturen</button>
                                    <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-3">
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
