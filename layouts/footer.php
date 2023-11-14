
<style>
    .footer-copyright {
        background-color: #000;
    }
</style>
<?php
    $copyright = '© 2023 BSTORE, Inc.';
    $footerMainTitle = [
        ['title' => 'Company', 'content' => ['About us', 'Career', 'Contact', 'Blog']],
        ['title' => 'Support', 'content' => ['FAQs', 'Reports', 'Training', 'Seller']],
        ['title' => 'Categories', 'content' => ['Business', 'Lifestyle', 'Biographies', 'Sciences']],
    ]
?>

<!-- The footer part -->
<div id="footer">
    <div class="container">
       <div class="row">
            <div class="footer-main col-lg-6">
                <div class="footer-main-content d-flex justify-content-between">
                    <?php
                        foreach($footerMainTitle as $items) { ?>
                        <div>
                            <?php
                                echo '<h3>'.$items['title'].'</h3>';
                                echo '<p>'.$items['content'][0].'</p>';
                                echo '<p>'.$items['content'][1].'</p>';
                                echo '<p>'.$items['content'][2].'</p>';
                                echo '<p>'.$items['content'][3].'</p>';
                            ?>
                        </div>
                    <?php } 
                    ?>
                </div>
            </div>
            <div class="footer-contact"></div>
       </div>
    </div>
    <div class="footer-copyright text-center text-white">
        <?php echo '<h4>'.$copyright.'</h4>' ?>
    </div>
</div>