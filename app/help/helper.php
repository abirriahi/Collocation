<?php

function getSetting($settingname = 'sitename')
{
    $test = \App\SiteSetting::where('namesetting', $settingname)->get()[0]->value;
    return $test;
}

function checkIfImageIsexist($imageName, $pathImage = '/public/website/images/', $url = '/website/images/')
{
    if ($imageName != '') {
        $path = base_path().$pathImage.$imageName;
        if (file_exists($path)) {
            return Request::root().$url.$imageName;
        }
    } else {
        return getSetting('no_image');
    }

}
function uploadImage($request , $path = '/public/website/images/' , $width ='500' , $height= '400' ){
    $dim = getimagesize($request);
    if($dim[0] > $width || $dim[1] > $height) {
        return false;
    }
    $fileName = $request->getClientOriginalName();
    $request->move(
        base_path().$path , $fileName
    );
    return $fileName;

}
function deletimage($deleteFileWithName){
    if(file_exists($deleteFileWithName)){
        \Illuminate\Support\Facades\File::delete($deleteFileWithName);
    }
}
function msgforuserCount($recepteur){
    return \App\Messages::where('recepteur' , $recepteur)->count();
}

function users()
{
    $array = [
        ' user ',
        ' admin ',
        ' assistant ',
    ];
    return $array;
}


function art_cathegorie()
{
    $array = [
        ' appartements ',
        ' maisons et villas ',


    ];
    return $array;
}

function art_type()
{
    $array =[
        'offre',
        'demande',
    ];
    return $array;
}
function art_validation()
{
    $array = [
        'invalide',
        'valide',
        'refuser',

    ];
    return $array;
}

function chambres_number()
{
    $arr = [];

//    change 2 and 60 to the min and max number of rooms you want
    for ($i = 0; $i <= 10; $i++){
        $arr[$i] = $i;
    }

    return $arr;
}

function art_ville()
{
    $array = [

        "n-1" => "Ariana",
        "n-2" => "Béja",
        "n-3" => "Ben Arous",
        "n-4" => "Tunis",
        "n-5" => "Bizerte",
        "n-6" => "Gabès",
        "n-7" => "Gafsa",
        "n-8" => "Jendouba",
        "n-9" => "Kairouan",
        "n-10" => "Kasserine",
        "n-11" => "Kébili",
        "n-12" => "Le Kef",
        "n-13" => "Mahdia",
        "n-14" => "La Manouba",
        "n-15" => "Médenine",
        "n-16" => "Monastir",
        "n-17" => "Nabeul",
        "n-18" => "Sfax",
        "n-19" => "Sidi Bouzid",
        "n-20" => "Siliana",
        "n-21" => "Sousse",
        "n-22" => "Tataouine",
        "n-23" => "Tozeur",
        "n-24" => "Tunis",


    ];
    return $array;
}

function contact(){
    return  [
        '1' => ' Avis ',
        '2' => ' Problème(s) ' ,
        '3' => ' Proposition(s) ' ,
        '4' => ' Information(s)' ,
        '5' => ' Je sais pas ' ,
    ];
}


/* nombre d'articles de chaque utilisateur*/

function buforuserCount($user_id , $status){
    return \App\Article::where('art_validation' , $status)->where('user_id' , $user_id)->count();
}
/* nombre  de tous les articles valider */
function countAllBuAppendTostatus($status){
    return \App\Article::where('art_validation' , $status)->count();
}
/* nombre  de tous les articles invalider */
function getNotActiveBu(){
    return \App\Article::where('art_validation' , 0)->get();
}
function unreadMessage(){
    return \App\ContactUs::where('view'  , 0)->get();
}

function countunreadMessage(){
    return \App\ContactUs::where('view'  , 0)->count();
}
function roomnumber(){
    $array = [];
    for($i = 2;$i <= 40;$i++){
        $array[$i] = $i;
    }
    return $array;
}

function searchFields()
{
    return [
        'prix' => 'Prix',
        'prix_de' => 'Prix min',
        'prix_a' => 'Prix max',
        'art_ville' => 'Régions',
        'chambres' => 'Nombre de chambres',
        'art_cathegorie' => 'Type de logement',
        'espace' => 'Superficie ',
        'art_prix' => 'Prix',
        'art_type' => 'type'
    ];
}


