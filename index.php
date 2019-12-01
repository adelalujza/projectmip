<?php include 'header.php';?>
        <!-- Banner -->
        <div id="banner">
            <h1>Iphone 8 Plus</h1>
            <h4><?php echo $translation["revolution"];?></h4>
        </div>
        <!-- Social -->
        <div id="social">
            <div class="container">
                <form id="signup" action="#">
                    <input id="mailInput" type="email" placeholder="<?php echo $translation["placeholder"];?>">
                    <button type="submit" class="btn"><?php echo $translation["subscribe"];?></button>
                </form>
                <ul id="networks">
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- Quick presentation -->
        <section id="presentation">
            <div class="container">
                <div class="column">
                    <h2><?php echo $translation["menu_about"];?></h2>
                    <?php echo $translation["about_description"];?>
                    <a href="about.php" class="btn"><?php echo $translation["more"];?></a>
                </div>
                <div class="column">
                    <h2><?php echo $translation["comparison"];?></h2>
                    <div class="comparison">
                        <div class="gauge">
                            <h4>256GB</h4>
                        </div>
                        <p><?php echo $translation["gauge_one"];?></p>
                    </div>
                    <div class="comparison">
                        <div class="gauge">
                            <h4>12Mpx</h4>
                        </div>
                        <p><?php echo $translation["gauge_two"];?></p>
                    </div>
                    <div class="comparison">
                        <div class="gauge">
                            <h4>W</h4>
                        </div>
                        <p><?php echo $translation["gauge_three"];?></p>
                    </div>
                </div>
            </div>
        </section>
<?php include 'footer.php';?>