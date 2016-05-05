<div class="container">
    <form class="form-signin" role="form" action="#" method="POST">
        <h2>Dati generali</h2>
        <h6 class="form-signin-heading">Casa editrice</h6>
        <select name="idCasaEditrice" class="form-control">
            <option value="1">Elmi's World</option>
            <option value="1">Le Brumaie</option>
            <option value="1">Dielle</option>
        </select>
        <h6 class="form-signin-heading">Titolo</h6>
        <input type="text" class="form-control" placeholder="Titolo" name="titolo" >
        <h6 class="form-signin-heading">Sottotitolo</h6>
        <input type="text" class="form-control" placeholder="Sottotitolo" name="sottotitolo" >

        <h6 class="form-signin-heading">Pagine</h6>
        <input type="text" class="form-control" placeholder="Numero Pagine" name="pagine" >

        <h6 class="form-signin-heading">ISBN</h6>
        <input type="text" class="form-control" placeholder="Codice ISBN" name="ISBN" >

        <h6 class="form-signin-heading">Prezzo</h6>
        <input type="text" class="form-control" placeholder="Prezzo" name="prezzo" >

        <h6 class="form-signin-heading">Collana</h6>
        <select name="idCollana" class="form-control">
            <option value="1">Saggio romanzato</option>
            <option value="1">Narrativa</option>
            <option value="1">Parole in libert&agrave;</option>
        </select>

        <h6 class="form-signin-heading">Tipologia</h6>
        <select name="idTipologia" class="form-control">
            <option value="1">Cartacea</option>
            <option value="1">Ebook</option>
            <option value="1">Audiolibro</option>
        </select>

        <h6 class="form-signin-heading">Trama</h6>
        <textarea class="form-control" rows="3"></textarea>

        <h2>Autori</h2>
        <div class="row">
            <div class="col-md-8">
                <select name="idTipologia" class="form-control">
                    <option value="1">Elettra Groppo</option>
                    <option value="1">Susanna Berti Franceschi</option>
                    <option value="1">Paolo Groppo</option>
                </select>
            </div>
            <div class="col-md-4">
                <button class="btn btn-primary btn-block">Aggiungi</button>
            </div>
        </div>
        <br />
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Denominazione</th>
                    <th>Tipologia</th>
                    <th>Indirizzo</th>
                    <th>Recapiti</th>
                    <th>Email</th>
                    <th style="width: 36px;"/>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Rollandin Emilie</td>
                    <td>Privato</td>
                    <td>Via Guillet 6 Saint-Vincent</td>
                    <td>tel. 0166-511415 cel. 345.7054951</td>
                    <td>info@archistico.com</td>
                    <td>
                        <a class = "btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Groppo Elettra</td>
                    <td>Autore</td>
                    <td>Via Compagno 7 Padova</td>
                    <td>cel. 388.9207016</td>
                    <td>info@elmisworld.it</td>
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


