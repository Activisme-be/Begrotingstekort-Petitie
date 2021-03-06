@layout('layouts/frontend')

@section('content')
    <div style="margin-bottom: -22px;" class="row">
        <div class="col-sm-12">
            <div style="border-radius:0px; border: 0px;" class="panel panel-default">
                <div class="panel-body">

                    <div class="col-md-8">
                        <h2>Beste vrienden sympathisanten,</h2>

                        <p>
                            Aangezien onze regering het geld blijft halen bij de kleine man en toch nog steeds te kort komt. <br>
                            Hebben wij besloten om de regering even te helpen. <br>
                            Met deze speciale petitie proberen wij duidelijk te maken dat er andere manieren zijn. <br>
                            Wij burgers doen het zelf, voel u vrij om de regering een handje toe te steken! <br>
                        </p>

                        <hr>

                        <form id="signature" method="POST" action="{{ base_url('signature/insert') }}" class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-2">
                                    Uw naam: <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-6">
                                    <input v-model="signature.name" type="text" name="name" placeholder="Uw naam" class="form-control" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    Email: <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-6">
                                    <input v-model="signature.email" type="text" class="form-control" name="email" placeholder="Uw email adres" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    Vonst: <span class="text-danger">*</span>
                                </label>

                                <div class="col-sm-3">
                                    <select v-model="signature.source" class="form-control" name="source">
                                        <option value="" selected>-- bron --</option>
                                        <option value="Lux Leaks">Lux Leaks</option>
                                        <option value="Swiss Leaks">Swiss Leaks</option>
                                        <option value="Bahama Leaks">Bahama Leaks</option>
                                        <option value="Panama Papers">Panama Papers</option>
                                        <option value="Vermogens Taks">Vermogens tax</option>
                                    </select>
                                </div>

                                <div class="col-sm-3">
                                    <select v-model="signature.finding" class="form-control" name="finding">
                                        <option value="" selected>-- bedrag --</option>
                                        <option value="1000">1.000€</option>
                                        <option value="10000">10.000€</option>
                                        <option value="100000">100.000€</option>
                                        <option value="1000000">1.000.000€</option>
                                        <option value="10000000">10.000.000€</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group" v-if="! submitted">
                                <div class="col-sm-offset-2 col-sm-4">
                                    <button type="submit" v-attr="disabled: errors" class="btn btn-sm btn-success">Insturen</button>
                                    <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-4">
                        <div style="margin-top: 20px;" class="panel panel-default">
                            <div class="panel-heading"> Gevonden: <span class="pull-right"><strong>{{ number_format($count_all) }}€</strong></span></div>
                            <ul class="list-group">
                                <li class="list-group-item">Lux Leaks <span class="pull-right"><strong>{{ number_format($count_lux_leaks) }}€</strong></span></li>
                                <li class="list-group-item">Swiss Leaks <span class="pull-right"><strong>{{ number_format($count_swiss_leaks) }}€</strong></span></li>
                                <li class="list-group-item">Bahama Leaks <span class="pull-right"><strong>{{ number_format($count_bahama_leaks) }}€</strong></span></li>
                                <li class="list-group-item">Panama Papers<span class="pull-right"><strong>{{ number_format($count_panama_papers) }}€</strong></span></li>
                                <li class="list-group-item">Vermogens taks<span class="pull-right"><strong>{{ number_format($count_vermogens_tax) }}€</strong></span></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
