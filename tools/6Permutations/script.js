function find_permutations() {
    let numbers = [];
    let permutations = [];

    for (let i = 0; i < 6; i++) {
        let v = document.getElementById(i.toString()).value;
        if (v == "") { alert("Missing a value!"); return; }

        numbers.push(v);
    }

    for (let i1 = 0; i1 < 6; i1++) {
        for (let i2 = 0; i2 < 6; i2++) {
            if (i2 == i1) continue;

            for (let i3 = 0; i3 < 6; i3++) {
                if ((i3 == i2) || (i3 == i1)) continue;

                for (let i4 = 0; i4 < 6; i4++) {
                    if ((i4 == i3) || (i4 == i2) || (i4 == i1)) continue;

                    for (let i5 = 0; i5 < 6; i5++) {
                        if ((i5 == i4) || (i5 == i3) || (i5 == i2) || (i5 == i1)) continue;

                        for (let i6 = 0; i6 < 6; i6++) {
                            if ((i6 == i5) || (i6 == i4) || (i6 == i3) || (i6 == i2) || (i6 == i1)) continue;

                            permutations.push(numbers[i1] + numbers[i2] + numbers[i3] + numbers[i4] + numbers[i5] + numbers[i6]);
                        }
                    }
                }
            }
        }
    }

    permutations.map((v, i) => {
        document.getElementById("results").innerHTML += "<div class='row'><p>" + v.charAt(0) + "</p>" + "<p>" + v.charAt(1) + "</p>" + "<p>" + v.charAt(2) + "</p>" + "<p>" + v.charAt(3) + "</p>" + "<p>" + v.charAt(4) + "</p>" + "<p>" + v.charAt(5) + "</p></div>"; 
    });
}