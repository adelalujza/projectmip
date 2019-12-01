<?php include 'header.php';?>
        <section id="content">
            <div class="container">
                 <h2 id="content-title"><?php echo $translation["menu_gallery"];?></h2>
            </div> 
            <div class="container" style="overflow:hidden;">
                <div style="overflow:hidden;">
<?php
$obrazky="../images/images2/";
$galeria=glob($obrazky."*.jpeg");

$koment=[
    "gallery1.jpeg" => "Príslušenstvo",
    "gallery2.jpeg" => "",
    "gallery3.jpeg" => "",
    "gallery4.jpeg" => "Príslušenstvo",
    "gallery5.jpeg" => "Spigen Ultra Hybrid ochranný kryt",
    "gallery6.jpeg" => "",
    "gallery7.jpeg" => "",
    "gallery8.jpeg" => "",
];

foreach ($galeria as $obrazok) { ?>
    <div class="gallery-box">
        <div style="padding:10px;">
            <img src="<?php echo $obrazok; ?>" alt="<?php echo basename($obrazok); ?>" height="230" width="230">
            <p><?php echo $koment[basename($obrazok)];  ?></p>
        </div>
    </div>
    <?php
}
?>
                </div>
            </div>
         </section>
<?php include 'footer.php';?>