<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2>Nuovo movimento</h2>
            <p>Per inserire un nuovo DDT</p>
            <p>
                <a class="btn btn-primary" href="#movimentinuovo" role="button">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  &nbsp;Nuovo movimento
                </a>
            </p>
        </div>
        <div class="col-md-4">
            <h2>Magazzini</h2>
            <p>Visualizza la lista magazzini</p>
            <p>
                <a class="btn btn-primary" href="#movimenti" role="button">
                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>  &nbsp;Magazzini
                </a>
            </p>
        </div>
        <div class="col-md-4">
            <h2>Stampa PDF</h2>
            <p>Esporta la lista dei movimenti</p>
            <p>
                <a class="btn btn-info" href="#" role="button">
                    <span class="glyphicon glyphicon-save" aria-hidden="true"></span>  &nbsp;Stampa
                </a>
            </p>
        </div>
    </div>
    <h2>Lista fatture</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Numero</th>
                <th>Cliente</th>
                <th>Data</th>
                <th>Pagata</th>
                <th style="width: 30px;"/>
                <th style="width: 30px;"/>
                <th style="width: 30px;"/>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2016-FE-001</td>
                <td>Emilie Rollandin - Aosta</td>
                <td>01/01/2016</td>
                <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> S&igrave;</td>
                <td>
                    <a class = "btn btn-primary btn-xs" href="#movimentivisualizza">
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                    </a>
                </td>
                <td>
                    <a class = "btn btn-warning btn-xs">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                </td>
                <td>
                    <a class = "btn btn-danger btn-xs">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>
            
            <tr>
                <td>2016-FE-002</td>
                <td>Libreria delle Donne - Roma</td>
                <td>02/01/2016</td>
                <td class="red"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> No</td>
                <td>
                    <a class = "btn btn-primary btn-xs" href="#movimentivisualizza">
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                    </a>
                </td>
                <td>
                    <a class = "btn btn-warning btn-xs">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                </td>
                <td>
                    <a class = "btn btn-danger btn-xs">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>
        </tbody> 
    </table>
    
    <h2>Lista DDT</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Numero</th>
                <th>Cliente</th>
                <th>Data</th>
                <th>Causale</th>
                <th style="width: 30px;"/>
                <th style="width: 30px;"/>
                <th style="width: 30px;"/>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2016-DT-001</td>
                <td>Emilie Rollandin - Aosta</td>
                <td>01/01/2016</td>
                <td>Conto deposito</td>
                <td>
                    <a class = "btn btn-primary btn-xs" href="#movimentivisualizza">
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                    </a>
                </td>
                <td>
                    <a class = "btn btn-warning btn-xs">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                </td>
                <td>
                    <a class = "btn btn-danger btn-xs">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>
            
            <tr>
                <td>2016-DT-002</td>
                <td>Libreria delle Donne - Roma</td>
                <td>02/01/2016</td>
                <td>Omaggio</td>
                <td>
                    <a class = "btn btn-primary btn-xs" href="#movimentivisualizza">
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                    </a>
                </td>
                <td>
                    <a class = "btn btn-warning btn-xs">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                </td>
                <td>
                    <a class = "btn btn-danger btn-xs">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>
        </tbody> 
    </table>
</div>