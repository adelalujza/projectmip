<?php include 'header.php';?>
        <section id="content">
            <div class="container">
                 <h2 id="content-title"><?php echo $translation["comparison"];?></h2>
            </div>
            <div class="container">
                <table class="tabulka">
                    <thead>
                        <tr>
                            <th><?php echo $translation["menu_specifications"];?></th>
                            <th>iPhone 8 Plus</th>
                            <th>OnePlus6</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $translation["storage"];?></td>
                            <td>64GB</td>
                            <td>128GB</td>
                        </tr>
                        <tr>
                            <td>RAM</td>
                            <td>3GB</td>
                            <td>8GB</td>
                        </tr>
                        <tr>
                            <td>SIM</td>
                            <td><?php echo $translation["simc"];?></td>
                            <td>Dual SIM (Nano-SIM, dual)</td>
                        </tr>
                        <tr>
                            <td><?php echo $translation["battery"];?></td>
                            <td>Li-Ion 2691 mAh</td>
                            <td>Li-Po 3300 mAh</td>
                        </tr>
                        <tr>
                            <td><?php echo $translation["camera"];?></td>
                            <td>12Mpx (f/1.8, 28mm)</td>
                            <td>16Mpx (f/1.7, 25mm)</td>
                        </tr>
                        <tr>
                            <td>OS</td>
                            <td><?php echo $translation["ios"];?></td>
                            <td>Android 8.1 (Oreo)</td>
                        </tr>
                        <tr>
                            <td><?php echo $translation["price"];?></td>
                            <td><?php echo $translation["pricetwo"];?> 800&euro;</td>
                            <td><?php echo $translation["pricetwo"];?> 500&euro;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
<?php include 'footer.php';?>