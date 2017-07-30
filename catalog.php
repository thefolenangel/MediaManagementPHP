<?php
$pageTitle = "Full Catalog";
$section = null;
include("inc/data.php");
include("inc/functions.php");

if (isset($_GET["cat"])){
    if($_GET["cat"] == "books"){
        $pageTitle = "Books";
        $section = "books";
    } elseif ($_GET["cat"] == "movies"){
        $pageTitle = "Movies";
        $section = "movies";
    } elseif ($_GET["cat"] == "music"){
        $pageTitle = "Music";
        $section = "music";
    }
}
include("inc/header.php"); ?>

<div class="section catalog page">
    <div class="wrapper">
        <h1><?php if($section != null){
            echo "<a href ='catalog.php'>Full catalog</a> &gt; ";
            }
            echo $pageTitle;?></h1>
        <ul class="items">
            <?php
            $categores = array_category($catalog, $section);
                    foreach($categores as $id){
                        echo get_item_html($id, $catalog[$id]);
                    }
            ?>
     
        </ul>
    </div>
    
</div>

<?php include("inc/footer.php"); ?>