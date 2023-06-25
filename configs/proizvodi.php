<?php
require_once("DatabaseAccess.php");


function getProductsFromDb()
{
    $db = getDbAccess(); 
    return $db->executeQuery("SELECT * FROM sminke");
}

function generateProductsAdmin(){ // izlista proizvod u admin.php
    $html = "";

    $articals = getProductsFromDb(); /* articals[m][n] onda artical[n]*/

    foreach($articals as $artical){ /* foreach( array as element ) */
        $id = $artical[0];
        $title = $artical[1];
        $brend = $artical[2];
        $cijena = $artical[3];
        $opis = $artical[4];
        $img = $artical[5];
        

        $html .= "<div class='col-md-3 col-sm-3 col-xs-12 image-main-section align-items-stretch'><div class='kucica'>
                  <a href='admin.php?action=delete_artikal&id=$id' class='fa fa-close obrisi-proizvod' style='color:red;'></a>
                        <div class='row img-part h-100'>
                            <div class='col-md-12 col-sm-12 colxs-12 img-section'>
                            <img src='$img'>
                            </div>
                            <div class='col-md-12 col-sm-12 col-xs-12 image-title'>
                                <div class='row d-flex'><div class='col-8'><h3>$title </h3></div> <div class='col-4'><h5>$brend</h5></div></div>
                            </div>
                            <div class='col-md-12 col-sm-12 col-xs-12 image-description'>
                            <p>$opis</p>
                            </div>
                            <div class='col-md-12 col-sm-12 col-xs-12 text-right'>
                                <a class='btn btn-success price-btn' href=''>$cijena HRK</a>
                            </div>
                        </div></div></div>";
    }

    return $html;
}

function generateProductsPage(){ // izlista proizvod u index.php
    $html = "";

    $articals = getProductsFromDb();

    foreach($articals as $artical){
        $id = $artical[0];
        $title = $artical[1];
        $brend = $artical[2];
        $cijena = $artical[3];
        $opis = $artical[4];
        $img = $artical[5];
        

        $html .= "<div class='col-md-4 col-sm-4 col-xs-12 image-main-section align-items-stretch'><div class='kucica'>
                        <div class='row img-part h-100'>
                            <div class='col-md-12 col-sm-12 colxs-12 img-section'>
                            <img src='$img'>
                            </div>
                            <div class='col-md-12 col-sm-12 col-xs-12 image-title'>
                            <div class='row d-flex'><div class='col-8'><h3>$title </h3></div> <div class='col-4'><h5>$brend</h5></div></div>
                            </div>
                            <div class='col-md-12 col-sm-12 col-xs-12 image-description'>
                            <p>$opis</p>
                            </div>
                            <div class='col-md-12 col-sm-12 col-xs-12 text-right'>
                                <a class='btn btn-success price-btn' href=''>$cijena HRK</a>
                            </div>
                        </div></div></div>";
    }

    return $html;
}

function AddProduct($ime, $cijena, $marka, $opis, $imgURL) {
    return getDbAccess()->executeInsertQuery("INSERT INTO sminke (Naziv, Brend, Cijena, Opis, image) VALUES ('$ime', '$marka','$cijena', '$opis', '$imgURL');");
}
function checkUserExists($username, $password) {
    $password = hash('whirlpool', $password);
    return getDbAccess()->executeQuery("SELECT * FROM `korisnici` WHERE `username` = '$username' AND `password` = '$password'");
}
function deleteProduct($id) {
    getDbAccess()->executeSetQuery("DELETE FROM sminke WHERE ID='$id';");
}
?>