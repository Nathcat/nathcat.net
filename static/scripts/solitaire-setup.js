const suits = {
    clubs: "clubs",
    diamonds: "diamonds",
    hearts: "hearts",
    spades: "spades"
};

const values = [
    "ace",
    "2",
    "3",
    "4",
    "5",
    "6",
    "7",
    "8",
    "9",
    "10",
    "jack",
    "queen",
    "king",
];

var deck = [];

class Card {
    constructor(suit, value, id) {
        this.id = id;
        this.suit = suit;
        this.value = value;
    }

    getElemStr(indexInColumn, isHidden) {
        var elem = "<div style=\"top: " + (indexInColumn * 2) + "vw\" id=\"" + this.id + "\" onclick=\"grab_card('#" + this.id + "');\" class=\"card";

        if (isHidden) {
            elem += " hidden";
        }

        elem += "\"><img draggable='false' src=\"\"></div>";
        return elem;
    }

    colour() {
        if (this.suit == suits.diamonds || this.suit == suits.hearts) {
            return 1;  // Red
        }

        return 0;  // Black
    }

    static fromElem(elem) {
        var id = elem.attr("id").split("_");
        return new Card(id[0], id[1], elem.attr("id"));
    }
}

function randomInt(max) {
    return Math.floor(Math.random() * max);
}

function set_card_imgs() {
    [...document.getElementsByClassName("card")].forEach((elem) => {
        if (elem.classList.contains("hidden")) {
            elem.childNodes[0].src = "../static/images/svg_playing_cards/backs/astronaut.svg";
        }
        else {
            elem.childNodes[0].src = "../static/images/svg_playing_cards/fronts/" + elem.id + ".svg";
        }
    });
}

function update_cards() {
    for (var x = 0; x < 7; x++) {
        $($("#column-" + x).children().last()).removeClass("hidden");
    }
}

function drop_space_elem_str(y, index) {
    return "<div id=\"drop-space-" + index + "\" onclick=\"drop_card('#drop-space-" + index + "', true, " + y + ")\" class='solitaire-drop-space' style='top: " + y + "vw'></div>";
}

function drop_space_elem_str_novw(y, index) {
    console.log("novw");
    return "<div id=\"drop-space-" + index + "\" onclick=\"drop_card('#drop-space-" + index + "', true, " + y + ")\" class='solitaire-drop-space' style='top: " + y + "px'></div>";
}

function check_win() {
    if ($(".hidden").length == 0) {
        alert("You have solved this deck! Conrgats!");
    }
}

function set_drop_spaces() {
    if (grabbed_card != null) {
        var card = Card.fromElem($(grabbed_card));
        
        for (var x = 0; x < 7; x++) {
            var elem = $($("#column-" + x).children().last());
            if (elem.attr("id") == undefined && card.value == "king") {
                $(drop_space_elem_str(0, x)).appendTo("#column-" + x);
            } else if (elem.attr("id") == undefined) continue;

            var end_card = Card.fromElem(elem);
            if (values.indexOf(end_card.value) == (values.indexOf(card.value) + 1) && end_card.colour() != card.colour()) {
                $(drop_space_elem_str($("#column-" + x).children().length * 2, x)).appendTo("#column-" + x);
            }
        }

        $(".solitaire-ace-pile").each((_, elem) => {
            if ($(elem).children().length == values.indexOf(card.value)) {
                $(drop_space_elem_str(0, 100 + _ + 1)).appendTo(elem);
            }
        });
    }

    check_win();
}

function reset_deck() {
    $(".draw-pile").attr("onclick", "draw_card();");

    $(".card").each((_, elem) => {
        if ($(elem).parent().hasClass("solitaire-column") || $(elem).parent().hasClass("solitaire-ace-pile")) return;

        var card = Card.fromElem($(elem));
        $(elem).remove();
        deck.push(card);
    });

    console.log(deck);
}

function draw_card() {
    var card = deck.shift();
    $(card.getElemStr(7, false)).css("left", "80vw").appendTo("#solitaire-game-container");
    set_card_imgs();

    if (deck.length == 0) {
        $(".draw-pile").attr("onclick", "reset_deck();");
    }
}



// Add the cards to the deck
for (const suit of Object.keys(suits)) {
    for (var i = 0; i < 13; i++) {
        deck.push(new Card(suit, values[i], suit + "_" + values[i]));
    }
}

// Shuffle the deck
for (var i = 0; i < 200; i++) {
    var card = deck.splice(randomInt(51), 1)[0];
    deck.push(card);
}

for (var x = 0; x < 7; x++) {
    for (var y = 0; y <= x; y++) {
        var card = deck.shift();
        $(card.getElemStr(y, y != x)).appendTo("#column-" + x);
    }    
}

set_card_imgs();
