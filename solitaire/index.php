<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-32">
        <title>Solitaire</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../static/styles/common.css">
        <link rel="stylesheet" href="../static/styles/solitaire.css">
    </head>

    <body>
        <?php include("../header.php"); ?>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Solitaire</h2>

                    <p>
                        This is a game of Solitaire I created using JavaScript and JQuery, there may be bugs I haven't noticed yet so apologies if your game
                        is disrupted because of this, I hope you enjoy nonetheless!
                    </p>
                </div>
            </div>
        </div>

        <div id="solitaire-game-container" class="solitaire-container">
            <!--<div id="drop-space-1" onclick="drop_card('#drop-space-1', false);" class="solitaire-drop-space"></div>

            <div id="clubs_ace" onclick="grab_card('#clubs_ace');" class="card"><img src="../static/images/svg_playing_cards/fronts/clubs_ace.svg"></div>-->

            <div id="column-0" class="solitaire-column"></div>
            <div id="column-1" class="solitaire-column" style="left: 10vw;"></div>
            <div id="column-2" class="solitaire-column" style="left: 20vw;"></div>
            <div id="column-3" class="solitaire-column" style="left: 30vw;"></div>
            <div id="column-4" class="solitaire-column" style="left: 40vw;"></div>
            <div id="column-5" class="solitaire-column" style="left: 50vw;"></div>
            <div id="column-6" class="solitaire-column" style="left: 60vw;"></div>

            <div class="draw-pile" onclick="draw_card()">
                <div class="deck-card"><img draggable='false' src="../static/images/svg_playing_cards/backs/astronaut.svg"></img></div>
            </div>

            <div class="solitaire-ace-pile" style="left: 75vw; top: 33vw;"></div>
            <div class="solitaire-ace-pile" style="left: 75vw; top: 47vw;"></div>
            <div class="solitaire-ace-pile" style="left: 85vw; top: 33vw;"></div>
            <div class="solitaire-ace-pile" style="left: 85vw; top: 47vw;"></div>
        </div>

        <script src="../static/scripts/solitaire-setup.js"></script>
        <script src="../static/scripts/solitaire-dragcard.js"></script>

        <?php include("../footer.php"); ?>
    </body>
</html>