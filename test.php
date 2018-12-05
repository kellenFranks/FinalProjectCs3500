<?php 
$favorites = array("images/RockyMountains/download1.jpg","images/RockyMountains/download2.jpg","images/RockyMountains/download3.jpg","images/RockyMountains/download4.jpg","","","","");
$count = 4;
function addFavorite($urlFav){
	$favorites[$count] = $urlFav;
}
if (isset($_POST['action'])) {
	addFavorite();
    switch ($_POST['action']) {
        case 'insert':
            insert();
            break;
        case 'select':
            select();
            break;
    }
}

function select() {
    echo "The select function is called.";
    exit;
}

function insert() {
    echo "The insert function is called.";
    exit;
}
?>