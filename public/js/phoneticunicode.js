var activeta;
var phonetic = new Array();
phonetic["k"] = "\u0995";
phonetic["0"] = "\u09e6";
phonetic["1"] = "\u09e7";
phonetic["2"] = "\u09e8";
phonetic["3"] = "\u09e9";
phonetic["4"] = "\u09ea";
phonetic["5"] = "\u09eb";
phonetic["6"] = "\u09ec";
phonetic["7"] = "\u09ed";
phonetic["8"] = "\u09ee";
phonetic["9"] = "\u09ef";
phonetic["i"] = "\u09BF";
phonetic["I"] = "\u0987";
phonetic["ii"] = "\u09C0";
phonetic["II"] = "\u0988";
phonetic["e"] = "\u09C7";
phonetic["E"] = "\u098F";
phonetic["U"] = "\u0989";
phonetic["u"] = "\u09C1";
phonetic["uu"] = "\u09C2";
phonetic["UU"] = "\u098A";
phonetic["r"] = "\u09B0";
phonetic["WR"] = "\u098B";
phonetic["a"] = "\u09BE";
phonetic["A"] = "\u0986";
phonetic["ao"] = "\u0985";
phonetic["s"] = "\u09B8";
phonetic["t"] = "\u099f";
phonetic["K"] = "\u0996";
phonetic["kh"] = "\u0996";
phonetic["n"] = "\u09A8";
phonetic["N"] = "\u09A3";
phonetic["T"] = "\u09A4";
phonetic["Th"] = "\u09A5";
phonetic["d"] = "\u09A1";
phonetic["dh"] = "\u09A2";
phonetic["b"] = "\u09AC";
phonetic["bh"] = "\u09AD";
phonetic["v"] = "\u09AD";
phonetic["R"] = "\u09DC";
phonetic["Rh"] = "\u09DD";
phonetic["g"] = "\u0997";
phonetic["G"] = "\u0998";
phonetic["gh"] = "\u0998";
phonetic["h"] = "\u09B9";
phonetic["NG"] = "\u099E";
phonetic["j"] = "\u099C";
phonetic["J"] = "\u099D";
phonetic["jh"] = "\u099D";
phonetic["c"] = "\u099A";
phonetic["ch"] = "\u099A";
phonetic["C"] = "\u099B";
phonetic["th"] = "\u09A0";
phonetic["p"] = "\u09AA";
phonetic["f"] = "\u09AB";
phonetic["ph"] = "\u09AB";
phonetic["D"] = "\u09A6";
phonetic["Dh"] = "\u09A7";
phonetic["z"] = "\u09AF";
phonetic["y"] = "\u09DF";
phonetic["Ng"] = "\u0999";
phonetic["ng"] = "\u0982";
phonetic["l"] = "\u09B2";
phonetic["m"] = "\u09AE";
phonetic["sh"] = "\u09B6";
phonetic["S"] = "\u09B7";
phonetic["O"] = "\u0993";
phonetic["ou"] = "\u099C";
phonetic["OU"] = "\u0994";
phonetic["Ou"] = "\u0994";
phonetic["Oi"] = "\u0990";
phonetic["OI"] = "\u0990";
phonetic["tt"] = "\u09CE";
phonetic["H"] = "\u0983";
phonetic["."] = "\u0964";
phonetic[".."] = ".";
phonetic["HH"] = "\u09CD" + "\u200c";
phonetic["NN"] = "\u0981";
phonetic["Y"] = "\u09CD" + "\u09AF";
phonetic["w"] = "\u09CD" + "\u09AC";
phonetic["W"] = "\u09C3";
phonetic["wr"] = "\u09C3";
phonetic["x"] = "\u0995" + "\u09CD" + "\u09B8";
phonetic["rY"] = phonetic["r"] + "\u200D" + "\u09CD" + "\u09AF";
phonetic["L"] = phonetic["l"];
phonetic["Z"] = phonetic["z"];
phonetic["P"] = phonetic["p"];
phonetic["V"] = phonetic["v"];
phonetic["B"] = phonetic["b"];
phonetic["M"] = phonetic["m"];
phonetic["V"] = phonetic["v"];
phonetic["X"] = phonetic["x"];
phonetic["V"] = phonetic["v"];
phonetic["F"] = phonetic["f"];
var carry = "";
var old_len = 0;
var ctrlPressed = false;
var len_to_process_oi_kar = 0;
var first_letter = false;
var carry2 = "";
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
function parsePhonetic(evnt) {
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
    bangla = parsePhoneticCarry(carry);
    tempBangla = parsePhoneticCarry(char_e);
    if (tempBangla == ".." || bangla == "..") {
        return false;
    }
    if (char_e == "+") {
        if (carry == "++") {
            insertJointAtCursor("+", old_len);
            old_len = 1;
            return false;
        }
        insertAtCursor("\u09CD");
        old_len = 1;
        carry2 = carry;
        carry = "+";
        return false;
    } else if (old_len == 0) {
        insertJointAtCursor(bangla, 1);
        old_len = 1;
        return false;
    } else if (carry == "ao") {
        insertJointAtCursor(parsePhoneticCarry("ao"), old_len);
        old_len = 1;
        return false;
    } else if (carry == "ii") {
        insertJointAtCursor(phonetic["ii"], 1);
        old_len = 1;
        return false;
    } else if (carry == "oi") {
        insertJointAtCursor("\u09C8", 1);
        return false;
    } else if (char_e == "o") {
        old_len = 1;
        insertAtCursor("\u09CB");
        carry = "o";
        return false;
    } else if (carry == "ou") {
        insertJointAtCursor("\u09CC", old_len);
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
        insertJointAtCursor(bangla, old_len);
        old_len = bangla.length;
        return false;
    }
}
function parsePhoneticCarry(code) {
    if (!phonetic[code]) {
        return "";
    } else {
        return phonetic[code];
    }
}
function insertAtCursor(myValue) {
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
function insertJointAtCursor(myValue, len) {
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
function makePhoneticEditor(textAreaId) {
    activeTextAreaInstance = document.getElementById(textAreaId);
    activeTextAreaInstance.onkeypress = parsePhonetic;
    activeTextAreaInstance.onkeydown = checkKeyDown;
    activeTextAreaInstance.onkeyup = checkKeyUp;
    activeTextAreaInstance.onfocus = function () {
        activeta = textAreaId;
    };
}
function makeVirtualEditor(textAreaId) {
    activeTextAreaInstance = document.getElementById(textAreaId);
    activeTextAreaInstance.onfocus = function () {
        activeta = textAreaId;
    };
}
