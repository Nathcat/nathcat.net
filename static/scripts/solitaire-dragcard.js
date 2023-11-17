var grabbed_card = null;
var from_draw_pile = false;

function grab_card(card_id) {
    if (!($(card_id).hasClass("hidden")) && grabbed_card == null) {
        grabbed_card = card_id;
        $(card_id).css("pointer-events", "none");
        $(card_id).parent().children().each((_, elem) => {
            if ($(elem).position().top > $(card_id).position().top && $(elem).hasClass("card")) {
                $(elem).appendTo(card_id).css("top", "2vw");
            }
        });

        var drop_space = $(drop_space_elem_str(parseFloat(document.getElementById(card_id.replace("#", "")).style.top.replace("vw", "")), 100)).appendTo($(card_id).parent());
        if ($(card_id).parent().attr("id") == "solitaire-game-container") {
            drop_space.css("left", "80vw");
            from_draw_pile = true;
        }
        else {
            from_draw_pile = false;
        }

        $(card_id).appendTo("#solitaire-game-container");
        set_drop_spaces();
    }
}

function drop_card(drop_space, remove, y) {
    const pos = $(drop_space).position();
    $(grabbed_card).appendTo($(drop_space).parent());

    $(grabbed_card).css("pointer-events", "auto").css("top", y + "vw").css("left", 0);
    if (from_draw_pile) {
        $(grabbed_card).css("left", pos.left);
    }

    $(grabbed_card).children().each((_, elem) => {
        if ($(elem).attr("id") == undefined) return;
        var top = parseFloat(document.getElementById(grabbed_card.replace("#", "")).style.top.replace("vw", "")) + (_ * 2)
        $(elem).appendTo($(grabbed_card).parent()).css("top", top + "vw");
    });

    grabbed_card = null;
    
    if (remove) $(drop_space).remove();

    $(".solitaire-drop-space").map((_, elem) => {
        $(elem).remove();
    });
    
    update_cards();
    set_card_imgs();
}

document.getElementById("solitaire-game-container").addEventListener("mousemove", (event) => {
    if (grabbed_card == null) return;

    var containerY = $("#solitaire-game-container").position().top;
    var containerX = $("#solitaire-game-container").position().left;

    $(grabbed_card).css("top", event.clientY - ($(grabbed_card).height() / 2) - containerY);
    $(grabbed_card).css("left", event.clientX - ($(grabbed_card).width() / 2) - containerX);
});