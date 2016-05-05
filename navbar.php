<?php
require('verifica.php');
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand"><img src="img/logoHelpbook.png"></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Navigazione</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#/"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#rubrica"><i class="fa fa-bookmark"></i> Rubrica</a></li>
                <li><a href="#opere"><i class="fa fa-book"></i> Opere</a></li>
                <li><a href="#movimenti"><i class="fa fa-truck"></i> Movimenti</a></li>
                <li><a href="#scadenze"><i class="fa fa-calendar-check-o"></i> Scadenze</a></li>
                <li><a href="#report"><i class="fa fa-line-chart"></i> Report</a></li>

                <?php
                if ($_SESSION['mansione'] == 'Amministratore') {
                ?>
                    <li><a href="#opzioni"><i class="fa fa-cogs"></i> Opzioni</a></li>
                    <?php
                    }
                    ?>
                <li><a href="esci.php">Esci</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
