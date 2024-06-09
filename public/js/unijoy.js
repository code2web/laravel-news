var activeta;
var unijoy = new Array();
unijoy["0"] = "\u09e6";
unijoy["1"] = "\u09e7";
unijoy["2"] = "\u09e8";
unijoy["3"] = "\u09e9";
unijoy["4"] = "\u09ea";
unijoy["5"] = "\u09eb";
unijoy["6"] = "\u09ec";
unijoy["7"] = "\u09ed";
unijoy["8"] = "\u09ee";
unijoy["9"] = "\u09ef";
unijoy["j"] = "\u0995";
unijoy["d"] = "\u09BF";
unijoy["gd"] = "\u0987";
unijoy["D"] = "\u09C0";
unijoy["gD"] = "\u0988";
unijoy["c"] = "\u09C7";
unijoy["gc"] = "\u098F";
unijoy["gs"] = "\u0989";
unijoy["s"] = "\u09C1";
unijoy["S"] = "\u09C2";
unijoy["gS"] = "\u098A";
unijoy["v"] = "\u09B0";
unijoy["a"] = "\u098B";
unijoy["f"] = "\u09BE";
unijoy["gf"] = "\u0986";
unijoy["F"] = "\u0985";
unijoy["n"] = "\u09B8";
unijoy["t"] = "\u099f";
unijoy["J"] = "\u0996";
unijoy["b"] = "\u09A8";
unijoy["B"] = "\u09A3";
unijoy["k"] = "\u09A4";
unijoy["K"] = "\u09A5";
unijoy["e"] = "\u09A1";
unijoy["E"] = "\u09A2";
unijoy["h"] = "\u09AC";
unijoy["H"] = "\u09AD";
unijoy["p"] = "\u09DC";
unijoy["P"] = "\u09DD";
unijoy["o"] = "\u0997";
unijoy["O"] = "\u0998";
unijoy["i"] = "\u09B9";
unijoy["I"] = "\u099E";
unijoy["u"] = "\u099C";
unijoy["U"] = "\u099D";
unijoy["y"] = "\u099A";
unijoy["Y"] = "\u099B";
unijoy["T"] = "\u09A0";
unijoy["r"] = "\u09AA";
unijoy["R"] = "\u09AB";
unijoy["l"] = "\u09A6";
unijoy["L"] = "\u09A7";
unijoy["w"] = "\u09AF";
unijoy["W"] = "\u09DF";
unijoy["q"] = "\u0999";
unijoy["Q"] = "\u0982";
unijoy["V"] = "\u09B2";
unijoy["m"] = "\u09AE";
unijoy["M"] = "\u09B6";
unijoy["N"] = "\u09B7";
unijoy["gx"] = "\u0993";
unijoy["X"] = "\u09CC";
unijoy["gX"] = "\u0994";
unijoy["gC"] = "\u0990";
unijoy["\\"] = "\u0983";
unijoy["|"] = "\u09CE";
unijoy["G"] = "\u0964";
unijoy["g"] = " ";
unijoy["&"] = "\u0981";
unijoy["Z"] = "\u09CD" + "\u09AF";
unijoy["gh"] = "\u09CD" + "\u09AC";
unijoy["ga"] = "\u098B";
unijoy["a"] = "\u09C3";
unijoy["vZ"] = unijoy["v"] + "\u200C" + "\u09CD" + "\u09AF";
unijoy["z"] = "\u09CD" + unijoy["v"];
unijoy["x"] = "\u09CB";
unijoy["C"] = "\u09C8";
var carry = "";
var old_len = 0;
var ctrlPressed = false;
var first_letter = false;
var lastInserted;
isIE = document.all ? 1 : 0;
var switched = false;
function checkKeyDown(ev) {
    var e = window.event ? event.keyCode : ev.which;
    if (e == "17") {
        ctrlPressed = true;
    }
}
function checkKeyUp(ev) {
    var e = window.event ? event.keyCode : ev.which;
    if (e == "17") {
        ctrlPressed = false;
    }
}
function parseunijoy(evnt) {
    var t = document.getElementById(activeta);
    var e = window.event ? event.keyCode : evnt.which;
    if (e == "113") {
        if (ctrlPressed) {
            switched = !switched;
            return true;
        }
    }
    if (switched) return true;
    if (ctrlPressed) {
        e = 0;
    }
    var char_e = String.fromCharCode(e);
    if (e == 8 || e == 32) {
        carry = " ";
        old_len = 1;
        return;
    }
    lastcarry = carry;
    carry += "" + char_e;
    bangla = parseunijoyCarry(carry);
    tempBangla = parseunijoyCarry(char_e);
    if (tempBangla == ".." || bangla == "..") {
        return false;
    }
    if (char_e == "g") {
        if (carry == "gg") {
            insertConjunction("\u09CD" + "\u200c", old_len);
            old_len = 1;
            return false;
        }
        insertAtCursor("\u09CD");
        old_len = 1;
        carry = "g";
        return false;
    } else if (old_len == 0) {
        insertConjunction(bangla, 1);
        old_len = 1;
        return false;
    } else if (char_e == "A") {
        newChar = unijoy["v"] + "\u09CD";
        insertAtCursor(newChar);
        old_len = 1;
        return false;
    } else if (bangla == "" && tempBangla != "") {
        bangla = tempBangla;
        if (bangla == "") {
            carry = "";
            return;
        } else {
            carry = char_e;
            insertAtCursor(bangla);
            old_len = bangla.length;
            return false;
        }
    } else if (bangla != "") {
        insertConjunction(bangla, old_len);
        old_len = bangla.length;
        return false;
    }
}
function parseunijoyCarry(code) {
    if (!unijoy[code]) {
        return "";
    } else {
        return unijoy[code];
    }
}
function insertAtCursor(myValue) {
    lastInserted = myValue;
    var myField = document.getElementById(activeta);
    if (document.selection) {
        myField.focus();
        sel = document.selection.createRange();
        sel.text = myValue;
        sel.collapse(true);
        sel.select();
    } else if (myField.selectionStart || myField.selectionStart == 0) {
        var startPos = myField.selectionStart;
        var endPos = myField.selectionEnd;
        var scrollTop = myField.scrollTop;
        startPos = startPos == -1 ? myField.value.length : startPos;
        myField.value = myField.value.substring(0, startPos) + myValue + myField.value.substring(endPos, myField.value.length);
        myField.focus();
        myField.selectionStart = startPos + myValue.length;
        myField.selectionEnd = startPos + myValue.length;
        myField.scrollTop = scrollTop;
    } else {
        var scrollTop = myField.scrollTop;
        myField.value += myValue;
        myField.focus();
        myField.scrollTop = scrollTop;
    }
}
function insertConjunction(myValue, len) {
    lastInserted = myValue;
    var myField = document.getElementById(activeta);
    if (document.selection) {
        myField.focus();
        sel = document.selection.createRange();
        if (myField.value.length >= len) {
            sel.moveStart("character", -1 * len);
        }
        sel.text = myValue;
        sel.collapse(true);
        sel.select();
    } else if (myField.selectionStart || myField.selectionStart == 0) {
        myField.focus();
        var startPos = myField.selectionStart - len;
        var endPos = myField.selectionEnd;
        var scrollTop = myField.scrollTop;
        startPos = startPos == -1 ? myField.value.length : startPos;
        myField.value = myField.value.substring(0, startPos) + myValue + myField.value.substring(endPos, myField.value.length);
        myField.focus();
        myField.selectionStart = startPos + myValue.length;
        myField.selectionEnd = startPos + myValue.length;
        myField.scrollTop = scrollTop;
    } else {
        var scrollTop = myField.scrollTop;
        myField.value += myValue;
        myField.focus();
        myField.scrollTop = scrollTop;
    }
}
function makeUnijoyEditor(textAreaId) {
    activeTextAreaInstance = document.getElementById(textAreaId);
    activeTextAreaInstance.onkeypress = parseunijoy;
    activeTextAreaInstance.onkeydown = checkKeyDown;
    activeTextAreaInstance.onkeyup = checkKeyUp;
    activeTextAreaInstance.onfocus = function () {
        activeta = textAreaId;
    };
}
