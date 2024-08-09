var current_slide = 0
const slide_count = 2;

function buttons() {
    if (current_slide == 0) {
        document.getElementById("slide-button-prev").innerHTML = '<svg fill="var(--quad-color)" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m13.789 7.155c.141-.108.3-.157.456-.157.389 0 .755.306.755.749v8.501c0 .445-.367.75-.755.75-.157 0-.316-.05-.457-.159-1.554-1.203-4.199-3.252-5.498-4.258-.184-.142-.29-.36-.29-.592 0-.23.107-.449.291-.591zm-.289 7.563v-5.446l-3.522 2.719z" fill-rule="nonzero"/></svg>';
    }
    else {
        document.getElementById("slide-button-prev").innerHTML = '<svg fill="var(--quad-color)" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m13.789 7.155c.141-.108.3-.157.456-.157.389 0 .755.306.755.749v8.501c0 .445-.367.75-.755.75-.157 0-.316-.05-.457-.159-1.554-1.203-4.199-3.252-5.498-4.258-.184-.142-.29-.36-.29-.592 0-.23.107-.449.291-.591 1.299-1.002 3.945-3.044 5.498-4.243z"/></svg>';
    }

    if (current_slide == (slide_count - 1)) {
        document.getElementById("slide-button-next").innerHTML = '<svg fill="var(--quad-color)" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m10.211 7.155c-.141-.108-.3-.157-.456-.157-.389 0-.755.306-.755.749v8.501c0 .445.367.75.755.75.157 0 .316-.05.457-.159 1.554-1.203 4.199-3.252 5.498-4.258.184-.142.29-.36.29-.592 0-.23-.107-.449-.291-.591zm.289 7.563v-5.446l3.522 2.719z" fill-rule="nonzero"/></svg>';
    }
    else {
        document.getElementById("slide-button-next").innerHTML = '<svg fill="var(--quad-color)" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m10.211 7.155c-.141-.108-.3-.157-.456-.157-.389 0-.755.306-.755.749v8.501c0 .445.367.75.755.75.157 0 .316-.05.457-.159 1.554-1.203 4.199-3.252 5.498-4.258.184-.142.29-.36.29-.592 0-.23-.107-.449-.291-.591-1.299-1.002-3.945-3.044-5.498-4.243z"/></svg>';
    }
}

function next() {
    if (current_slide == (slide_count - 1)) return;

    for (let i = 0; i < slide_count; i++) {
        let current_pos = parseInt(document.getElementById("p_" + i).style.left.trimEnd());
        let new_pos = current_pos - 100;

        $("#p_" + i).animate(
            {
                left: new_pos + "%"
            }, {}
        );
    }

    current_slide++;

    buttons();
    resize_slideshow_box()
}

function prev() {
    if (current_slide == 0) return;

    for (let i = 0; i < slide_count; i++) {
        let current_pos = parseInt(document.getElementById("p_" + i).style.left.trimEnd());
        let new_pos = current_pos + 100;

        $("#p_" + i).animate(
            {
                left: new_pos + "%"
            }, {}
        );
    }

    current_slide--;

    buttons();
    resize_slideshow_box()
}

function resize_slideshow_box() {
    // Get the size of the box currently in the slideshow
    let target_height = $("#p_" + current_slide).height() + parseInt($("#p_" + current_slide).css("padding-bottom").slice(0, -2)) + parseInt($("#p_" + current_slide).css("padding-top").slice(0, -2));
    $(".project-slideshow").animate(
        {
            height: target_height
        }, {}
    );
}