<?php include 'header.php';?>
        <section id="content">
            <div class="container">
                 <h2 id="content-title"><?php echo $translation["menu_contact"];?></h2>
            </div> 
         </section>
         <div id="map"></div>
        
         <div class="container" style="margin-top:30px; overflow:hidden;">
            <div style="width:480px; float:left;">
                <form action="">
                    <div>
                    <input style="border:1px solid #ddd;margin-bottom:10px;" type="text" placeholder="<?php echo $translation["placeholderone"];?>">
                </div>
                <div>
                    <input style="border:1px solid #ddd;margin-bottom:10px;" type="text" placeholder="Email">
                </div>
                <div>
                    <textarea class="textarea-contact" cols="30" rows="10" placeholder="<?php echo $translation["placeholderthree"];?>"></textarea>
                </div>
                <button type="submit" class="btn"><?php echo $translation["buttoncontact"];?></button>
                </form>
            </div>
            <div style="width:480px; float:left;">
            <?php echo $translation["contact_info"];?>
                </div>
         </div>
<?php include 'footer.php';?>