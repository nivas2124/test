var materia = [];
var def = [];
var chec = [];
var def2 = "";

var text;
var array = ["", "All Splitter", "6 Fiber", "12 Fiber", "Stay Drum", "Binding", "Bobbin", "95x05 Splitter", "90x10 Splitter", "85x15 Splitter", "80x20 Splitter", "75x25 Splitter", "70x30 Splitter", "65x35 Splitter", "60x40 Splitter", "55x45 Splitter", "50x50 Splitter"];
var nos = ["", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "15", "20"];

function change() {

    // i = "";
    var inpu = document.getElementById('inpu').value;
    for (var i = 0; i < inpu; i++) {

        var get = ('nos_select') + i;
        console.log(get);
        var set = ('mySelect') + i;
        console.log(set);
        var val1 = document.getElementById(get).value;
        var material1 = document.getElementById(set).value;
        materia.push(material1);
        chec.push(val1);
        console.log(materia);
        var nos_list = document.getElementById(('nos_select') + i).value;
        nos.push(nos_list);
        console.log(nos);
    }
}

function checking() {

    for (let l = 0; l < materia.length; l++) {
        console.log(l);
        console.log(materia[l]);
        switch (materia[l]) {
            case "":
                text = "     ";
                break;
            case "95x05Splitter":
                text = "Set";
                break;
            case "90x10Splitter":
                text = "Set";
                break;
            case "85x15Splitter":
                text = "Set";
                break;
            case "80x20Splitter":
                text = "Set";
                break;
            case "75x25Splitter":
                text = "Set";
                break;
            case "70x30Splitter":
                text = "Set";
            case "65x35Splitter":
                text = "Set";
                break;
            case "60x40Splitter":
                text = "Set";
                break;
            case "55x45Splitter":
                text = "Set";
                break;
            case "50x50Splitter":
                text = "Set";
                break;
            case "All Splitter":
                text = "Set";
                break;
            case "6 Fiber":
                text = "KM";
                break;
            case "12 Fiber":
                text = "KM";
                break;
            case "Stay Drum":
                text = "Drum";
                break;
            case "Binding":
                text = "Coil";
                break;
            case "Bobbin":
                text = "Packet";
                break;
        }
        def.push(text);
    }
}

function prin() {

    for (var i = 0; i < materia.length; i++) {
        def2 += materia[i] + '  :  ' + chec[i] + '  ' + def[i] + "<br>";
    }
    
    document.getElementById("damal").innerHTML = def2;
    document.getElementById("dumeel").innerHTML = def2;


}

function get() {

    var input1 = document.getElementById('inpu').value;
   
   

    for (var count = 0; count < input1; count++) {



        var myParent = document.getElementById('p');
        var parent = document.getElementById('pp');
        var bre = document.getElementById('br');


        //Create array of options to be added

        var selectList = document.createElement("select");
        var nos_select = document.createElement("select");
        selectList.id = "mySelect" + [count];

        nos_select.id = "nos_select" + [count];
        myParent.appendChild(selectList);

        parent.appendChild(nos_select);

        console.log(myParent);
        var gap = document.createElement("br");
        bre.appendChild(gap);
        console.log(bre);

        //Create and append the options
        for (var i = 0; i < array.length; i++) {
            var option = document.createElement("option");

            option.value = array[i];
            // option2.value = nos[i];
            option.text = array[i];
            // option2.text = nos[i];
            selectList.appendChild(option);
            // nos_select.appendChild(option2);
            console.log(selectList);
            // console.log(nos_select);

        }

        for (var l = 0; l < nos.length; l++) {
            var option2 = document.createElement("option");
            option2.value = nos[l];
            option2.text = nos[l];
            nos_select.appendChild(option2);
            console.log(nos_select);
        }

    }
    hid();

}

function set() {
    // get();
    change();
    checking();
    prin();
    hid2();
}

function hid() {

    let butn = document.getElementById("btn")
    butn.style.display = 'none';

}

function hid2() {
    let no = document.getElementById("no")
    no.style.display = 'none';   
}

function pri()
{
var print_div = document.getElementById("pri");
var print_area = window.open();
print_area.document.write(print_div.innerHTML);
print_area.document.close();
print_area.focus();
print_area.print();
print_area.close();}