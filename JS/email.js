function scrambleEmail() {

    var nohaEmail = "&#110&#111&#104&#97&#64&#103&#109&#97&#105&#108&#46&#99&#111&#109&#10";
    var nohaString = "";
    var nohaarr = nohaEmail.split('&#');
    for (var i = 1; i < nohaarr.length; i++) {
        nohaString = nohaString + String.fromCharCode(nohaarr[i]);
    }

    var jumanaEmail = "&#106&#117&#109&#97&#110&#97&#64&#103&#109&#97&#105&#108&#46&#99&#111&#109&#10";
    var jumanaString = "";
    var jumanaarr = jumanaEmail.split('&#');
    for (var i = 1; i < jumanaarr.length; i++) {
        jumanaString = jumanaString + String.fromCharCode(jumanaarr[i]);
    }

    return {
        noha: nohaString,
        jumana: jumanaString,
    };
}