<nav class="navbar container <?php echo $pastaAtual; ?> rolagem">
    <ul class="navbar-nav row flex-row mx-auto flex-nowrap justify-content-between">
        <?php
            foreach ($nav as $area => $pagina) {
                if ($pastaAtualFim==strtolower(pato($area))) {
                    foreach ($nav[$area] as $pagina) {
                        echo "<li class='nav-item'>
                            <a class='nav-link h4 rolamento' href='"
                            .$corredor.$caminho."/".str_replace(' ','_',strtolower(pato($pagina)))."/index.php'>$pagina</a>
                        </li>
                        ";
                    }
                }
                elseif ($pastaAtualInicio==strtolower(pato($area))) {
                    foreach ($nav[$area] as $pagina) {
                        echo "<li class='nav-item'>
                            <a class='nav-link h4 rolamento' href='"
                            .$corredor.str_replace(substr($caminho,strpos($caminho,'/'),strlen($caminho)),'',$caminho)."/".str_replace(' ','_',strtolower(pato($pagina)))."/index.php'>$pagina</a>
                        </li>
                        ";
                    }
                }
                elseif ($pastaAtual=="") {
                    echo "<li class='nav-item'>
                        <a class='nav-link h4 rolamento' href='"
                        .$corredor.str_replace(' ','_',strtolower(pato($area)))."/index.php'>$area</a>
                    </li>
                    ";
                }
            }
            foreach ($navGeral as $area) {
                if ($pastaAtual==strtolower(pato($area))||$pastaAtual=="session") {
                    foreach ($nav as $area => $pagina) {
                        echo "<li class='nav-item'>
                            <a class='nav-link h4 rolamento' href='"
                            .$corredor.str_replace('','_',strtolower(pato($area)))."/index.php'>$area</a>
                        </li>
                        ";
                    }
                }
            }  
            
        ?>
    </ul>
</nav>