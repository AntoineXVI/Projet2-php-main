<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h2 class="white-text">Bas de Page</h2>
                <p class="grey-text text-lighten-4">Merci d'avoir été sur cette Page.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h2 class="white-text">Liens</h2>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="index.php">Acceuil</a></li>
                    <?php 
                    $sql = "SELECT * FROM projects"; 
                    $pre = $pdo->prepare($sql); 
                    $pre->execute();
                    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
                    
                    foreach($data as $projects){ ?>
                    <li><a href= "<?php echo $projects['name'].'.php' ?>" ><?php echo $projects['name'] ?></a></li>
                    <?php } ?>
                    
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2022 Copyright Text
            <a class="grey-text text-lighten-4 right" href="https://en.wikipedia.org/wiki/Privacy_policy" target="_blank" >Privacy policy</a>
        </div>
    </div>
 </footer>
    
    