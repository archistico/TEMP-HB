<div class="container">
    <form class="form-signin" role="form" action="#" method="POST">
        <h2>Dati generali</h2>
        <div class="row">
            <div class="col-md-6">
                <h6 class="form-signin-heading">Tipologia</h6>
                <select name="idTipologia" class="form-control">
                    <option value="1">DDT</option>
                    <option value="1">Fattura immediata</option>
                    <option value="1">Fattura differita</option>
                    <option value="1">Fattura accompagnatoria</option>
                    <option value="1">Ricevuta</option>
                </select>
            </div>
            <div class="col-md-6">
                <h6 class="form-signin-heading">Data di emissione</h6>
                <input class="form-control" placeholder="Data emissione" name="fine" required="" type="date">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h6 class="form-signin-heading">Numero documento</h6>
                <input type="text" class="form-control" placeholder="Numero documento" name="" >
            </div>
            <div class="col-md-6">
                <h6 class="form-signin-heading">Riferimento</h6>
                <input type="text" class="form-control" placeholder="Riferimento" name="" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h6 class="form-signin-heading">Cliente</h6>
                <select name="idTipologia" class="form-control">
                    <option value="1">Emilie Rollandin - Aosta</option>
                    <option value="1">Elettra Groppo - Padova</option>
                    <option value="1">Alberto Bruzzone - Cantalupa</option>
                </select>
            </div>
            <div class="col-md-6">
                <h6 class="form-signin-heading">Causale</h6>
                <select name="idTipologia" class="form-control">
                    <option value="1">Vendita</option>
                    <option value="1">Tentata vendita</option>
                    <option value="1">Conto deposito</option>
                    <option value="1">Conto vendita</option>
                    <option value="1">Omaggio</option>
                    <option value="1">Reso</option>
                </select>
            </div>
        </div>
        
        <h2>Spedizione</h2>
        <div class="row">
            <div class="col-md-6">
                <h6 class="form-signin-heading">Aspetto</h6>
                <select name="idTipologia" class="form-control">
                    <option value="1">Nessun confezionamento</option>
                    <option value="1">Pacco</option>
                    <option value="1">Busta</option>
                </select>
            </div>
            <div class="col-md-6">
                <h6 class="form-signin-heading">Trasporto a cura di</h6>
                <select name="idTipologia" class="form-control">
                    <option value="1">Mittente</option>
                    <option value="1">Destinatario</option>
                    <option value="1">Vettore (Poste)</option>
                    <option value="1">Vettore (Corriere)</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h6 class="form-signin-heading">Spese spedizione</h6>
                <input type="text" class="form-control" placeholder="Spese spedizione" name="" >
            </div>
            <div class="col-md-6">
                <h6 class="form-signin-heading">Sconto spedizione</h6>
                <input type="text" class="form-control" placeholder="Sconto spedizione" name="" >
            </div>
        </div>
        
        <h2>Pagamento</h2>
        <div class="row">
            <div class="col-md-6">
                <h6 class="form-signin-heading">Modalit&agrave; di pagamento</h6>
                <select name="idTipologia" class="form-control">
                    <option value="1">Contanti</option>
                    <option value="1">Bonifico</option>
                    <option value="1">Paypal</option>
                </select>
            </div>
            <div class="col-md-6">
                <h6 class="form-signin-heading">Entro il</h6>
                <input class="form-control" placeholder="Entro il" name="fine" required="" type="date">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h6 class="form-signin-heading">Pagata</h6>
                <select name="idTipologia" class="form-control">
                    <option value="1">S&igrave;</option>
                    <option value="1">No</option>                    
                </select>
            </div>
            <div class="col-md-6">
                <h6 class="form-signin-heading">Data di pagamento</h6>
                <input class="form-control" placeholder="Data di pagamento" name="fine" required="" type="date">
            </div>
        </div>
        
        <h2>Altro</h2>
        <h6 class="form-signin-heading">Note</h6>
        <textarea class="form-control" rows="3"></textarea>

        <h2>Dettaglio opere movimentate</h2>
        <div class="row">
            <div class="col-md-6">
                <h6 class="form-signin-heading">Opera</h6>
                <select name="idTipologia" class="form-control">
                    <option value="1">Elmi's World - Corto circuito (carta)</option>
                    <option value="1">Elmi's World - Gostanza (carta)</option>
                    <option value="1">Elmi's World - Marne rosse (carta)</option>
                    <option value="1">Elmi's World - Storia di fate, di dee e di eroi (carta)</option>
                </select>
            </div>
            <div class="col-md-2">
                <h6 class="form-signin-heading">Quantit&agrave;</h6>
                <input type="text" class="form-control" placeholder="Quantit&agrave;" name="" >
            </div>
            <div class="col-md-2">
                <h6 class="form-signin-heading">Sconto % (es. 30,00)</h6>
                <input type="text" class="form-control" placeholder="Sconto %" name="" >
            </div>
            <div class="col-md-2">
                <h6 class="form-signin-heading">&nbsp;</h6>
                <button class="btn btn-primary btn-block">Aggiungi</button>
            </div>
        </div>
        <br />
        
        <table class="table table-hover">
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Autore/i</th>
                <th>ISBN</th>
                <th>Prezzo</th>
                <th>Quantit&agrave;</th>
                <th>Sconto</th>
                <th>Subtotale</th>
                <th style="width: 36px;"/>
        </thead>
        <tbody>
            <tr>
                <td>Elmi's World - Corto circuito (carta)</td>
                <td>Groppo Elettra</td>
                <td>978889719206</td>
                <td>€ 18,00</td>
                <td>2</td>
                <td>30,00 %</td>
                <td>€ 25,20</td>
                <td>
                        <a class = "btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </a>
                    </td>
            </tr>
            <tr>
                <td>Elmi's World - Due non &egrave; il doppio di uno (carta)</td>
                <td>Groppo Elettra</td>
                <td>978889719206</td>
                <td>€ 16,00</td>
                <td>1</td>
                <td>30,00 %</td>
                <td>€ 11,20</td>
                <td>
                        <a class = "btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </a>
                    </td>
            </tr>
        </tbody> 
        </table>
        
        <br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Inserisci</button>
    </form>
</div>