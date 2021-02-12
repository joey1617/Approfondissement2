<?php
require_once 'HF/header.php';
?>

<HTML lang="fr">

<link rel="stylesheet" href="style.css">
<script src="myScript.js"></script>

<body>

<h1>RegEx with JavaScript</h1>
<div class="center marg">
<button class="btn btn-arya btn-success bing" type="submit" name="ara" value="standart"
        onclick="showSearch()"><i class="glyphicon glyphicon-search" aria-hidden="true">Recercher</button>
<button class="btn btn-arya btn-success bang" type="submit" name="ara" value="standart"
        onclick="showR()"><i class="glyphicon glyphicon-search" aria-hidden="true">Remplacer</button>
<button class="btn btn-arya btn-success bong" type="submit" name="ara" value="standart"
        onclick="showSimply()"><i class="glyphicon glyphicon-search" aria-hidden="true">Simplifier</button>
</div>

<div class="box research">
<h1>Rechercher des mots</h1>
<br>
<form>
    <label class="col-lg-4">Expression</label>
        <input class="in col-lg-3" type="text" id="expression">
    <select name="pets" id="pet-select" class="in col-lg-1">
        <option value="i">i</option>
        <option value="g">g</option>
        <option value="m">m</option>
    </select>
    <br>
    <br>
    <label class="col-lg-4">Texte</label>
    <textarea class="in col-lg-4" id="text">Please visit okok Microsoft</textarea>
    <br>
    <br>
    <label class="col-lg-4" id="test1">Résultat</label>
        <input class="in col-lg-4" type="text" id="test" disabled>
    <br>
    <br>
</form>

<div class="center">
    <button class="btn btn-arya btn-success" type="submit" name="ara" value="standart"
            onclick="search()"><i class="glyphicon glyphicon-search" aria-hidden="true"></i>Rechercher</button>
</div>
</div>

<div class="box replacing">
    <h1>Replacer des mots</h1>
    <br>
    <form>
        <label class="col-lg-4">Mot</label>
        <input class="replace col-lg-3" type="text" id="expression">
        <br>
        <br>
        <label class="col-lg-4">Remplacement</label>
        <input class="replace col-lg-3" type="text" id="expression">
        <br>
        <br>
        <label class="col-lg-4">Texte</label>
        <textarea class="replace col-lg-4" id="text">Please visit okok Microsoft</textarea>
        <br>
        <br>
        <label class="col-lg-4" id="test1">Résultat</label>
        <textarea class="in col-lg-4" type="text" id="testReplace" disabled></textarea>
        <br>
        <br>
    </form>

    <div class="center">
        <button class="btn btn-arya btn-success" type="submit" name="ara" value="standart"
                onclick="replace()"><i class="glyphicon glyphicon-search" aria-hidden="true"></i>Remplacer</button>
    </div>
</div>

<div class="box simply">
    <h1>Raccourcir du texte</h1>
    <br>
    <form>
        <label class="col-lg-4">Expression</label>
        <input class="simpli col-lg-3" type="text" id="expression">
        <br>
        <br>
        <label class="col-lg-4">Texte</label>
        <textarea class="simpli col-lg-4" id="text">Please visit okok Microsoft</textarea>
        <br>
        <br>
        <label class="col-lg-4" id="test1">Résultat</label>
        <textarea class="simpli col-lg-4" type="text" id="testSimpli" disabled></textarea>
        <br>
        <br>
    </form>

    <div class="center">
        <button class="btn btn-arya btn-success" type="submit" name="ara" value="standart"
                onclick="Simplification()"><i class="glyphicon glyphicon-search" aria-hidden="true"></i>Simplification</button>
    </div>
    <div class="center">
        <button class="btn btn-arya btn-success" type="submit" name="aa" value="standart"
                onclick="Enlever()"><i class="glyphicon glyphicon-search" aria-hidden="true"></i>Enlever Duplication</button>
    </div>
</div>

</body>
</HTML>
