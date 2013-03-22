<ul>
<?php
                    $quant_pg = ceil($quantreg/$numreg);
                    $quant_pg++;
	
                    // Verifica se esta na primeira página, se nao estiver ele libera o link para anterior
                    if ( @$_GET['pg'] > 0) { 
                            echo "<li><a href=".$_SERVER['PHP_SELF']."?pg=".(@$_GET['pg']-1).">«</a></li>";
                    } else { 
                            echo "<li class='disabled'><a href='#' >«</a></li>";
                    }

                    // Faz aparecer os numeros das página entre o ANTERIOR e PROXIMO
                    for($i_pg=1;$i_pg<$quant_pg;$i_pg++) { 
                            // Verifica se a página que o navegante esta e retira o link do número para identificar visualmente
                            if (@$_GET['pg'] == ($i_pg-1)) { 
                                    echo "<li class='active'><a href='#' >$i_pg</a></li>";
                            } else {
                                    $i_pg2 = $i_pg-1;
                                    echo "<li><a href=".$_SERVER['PHP_SELF']."?pg=$i_pg2 >$i_pg</a></li>";
                            }
                    }

                    // Verifica se esta na ultima página, se nao estiver ele libera o link para próxima
                    if ((@$_GET['pg']+2) < $quant_pg) { 
                            echo "<li><a href=".$_SERVER['PHP_SELF']."?pg=".(@$_GET['pg']+1)." >»</a></li>";
                    } else { 
                            echo "<li class='disabled'><a href='#' >»</a></li>";
                    }   
?>
</ul>