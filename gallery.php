<?php
$title = "Галерея";
require_once "blocks/header.php";
function getGallery() {
        $files = scandir("gallery/");
        $gallery_files = array();
        foreach ($files as $value) { //Проходим по массиму
                array_push($gallery_files, $value);

        }
        unset($gallery_files[0]);
        unset($gallery_files[1]);
        $gallery_files = array_values($gallery_files);
        return $gallery_files;
}
$gallery_files = getGallery();
?>
<div class="gallery">
        <?php foreach ($gallery_files as $i => $value){
        echo '<img src="gallery/'.$gallery_files[$i].'">';
        }?>
</div>
<br>
<hr style="color: white">
<?php
require_once "blocks/footer.php";
?>
