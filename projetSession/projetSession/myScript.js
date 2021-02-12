//Permet de rechercher des charactères dans un texte.
function search() {
    var regEx = document.getElementsByClassName("in")[0].value;
    var modifier = document.getElementsByClassName("in")[1].value;
    var str = document.getElementsByClassName("in")[2].value;
    var re = new RegExp(regEx, modifier);
    var reponse = str.search(re);
    document.getElementById("test").value = reponse;
}

// Fonction qui permet de remplacer des mots dans un texte.
function replace() {
    var mot = document.getElementsByClassName("replace")[0].value;
    var remplacement = document.getElementsByClassName("replace")[1].value;
    var str = document.getElementsByClassName("replace")[2].value;

    var res = str.replaceAll(mot, remplacement);
    document.getElementById("testReplace").value = res;
}

// Fonction qui permet de simplifier le texte avec une expression Reg Ex.
function Simplification() {
    var regEx = document.getElementsByClassName("simpli")[0].value;
    var text = document.getElementsByClassName("simpli")[1].value;

    var re = new RegExp(regEx);

    var reponse = re.exec(text);
    document.getElementById("testSimpli").value = reponse;

}

//Permet d'enlever la duplication de résultat et de la montrer en alerte.
function Enlever(){
    var rep = document.getElementsByClassName("simpli")[2].value;
    var arr = rep.match(/,(.*)/);
    if (arr != null) { // Did it match?
        alert(arr[1]);
    }
}

//Permet de montrer l'interface pour la recherche
function showSearch(){
    $(".bing").click(function(){
        $(".box").hide();
        $(".research").show();
    });
}

//Permet de montrer l'interface pour le remplacement de mot
function showR(){
    $(".bang").click(function(){
        $(".box").hide();
        $(".replacing").show();
    });
}

//Permet de montrer l'interface pour la simplification de texte
function showSimply(){
    $(".bong").click(function(){
        $(".box").hide();
        $(".simply").show();
    });
}
