<div class="container">
    <h2>Statistiche di vendita</h2>
    <div class="row">
        <div class="col-md-6">
            <h6 class="form-signin-heading">Libri venduti</h6>
            <div class="my-chart">
                <linechart data="dataVendite" options="optionsVendite"></linechart>
            </div>
        </div>
        <div class="col-md-6">
            <h6 class="form-signin-heading">Entrate</h6>
            <div class="my-chart">
                <linechart data="dataEntrate" options="optionsEntrate"></linechart>
            </div>
        </div>
    </div>
    <br />
    <h2>Lista fatture non pagate</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Numero</th>
                <th>Cliente</th>
                <th>Data</th>
                <th>Importo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2016-FE-001</td>
                <td>Emilie Rollandin - Aosta</td>
                <td>01/01/2016</td>
                <td>€ 100,00</td>
            </tr>
            
            <tr>
                <td>2016-FE-002</td>
                <td>Libreria delle Donne - Roma</td>
                <td>02/01/2016</td>
                <td>€ 200,00</td>
            </tr>
        </tbody> 
    </table>
        
    <h2 ng-init="caricaCollane()">Collane</h2>
    <select class="form-control">
        <option ng-repeat="col in list" value="{{col.idcollana}}" ng-bind-html="col.collana"></option>
    </select>

</div>

