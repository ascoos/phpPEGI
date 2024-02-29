<?php 
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 *************************************************************************************
 * @ASCOOS-NAME        : ASCOOS CMS 24'                                              *
 * @ASCOOS-VERSION     : 24.0.0                                                      *
 * @ASCOOS-CATEGORY    : Kernel (Frontend and Administration Side)                   *
 * @ASCOOS-CREATOR     : Drogidis Christos                                           *
 * @ASCOOS-SITE        : www.ascoos.com                                              *
 * @ASCOOS-LICENSE     : [Commercial] http://docs.ascoos.com/lics/ascoos/AGL-F.html  *
 * @ASCOOS-COPYRIGHT   : Copyright (c) 2007 - 2023, AlexSoft Software.               *
 *************************************************************************************
 *
 * @package            : ASCOOS CMS - phpBCL
 * @subpackage         : phpPEGI Example Index File
 * @source             : /phpPEGI/index.php
 * @version            : 1.0.0
 * @created            : 2024-02-29 09:00:00 UTC+3
 * @updated            : 
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */


define('ALEXSOFT_RUN_CMS', true);

$cms_path = str_replace('\\', '/', __DIR__);
//$cms_site = '[YOUR REAL SITE PATH -- https://www.example.com/phpPEGI]';
$cms_site = 'https://www.test.loc/ASCOOS-CMS/UNIVERSAL-PACKAGES/phpPEGI';

require_once($cms_path.'/libs/phpPEGI.php');
require_once($cms_path."/data/data.php");



/** 
 * Ages = '3', '7', '12', '16', '18'
 * Content = 'Bad', 'Discrimination', 'Drugs', 'Fear', 'Gambling', 'Parental', 'Purchases', 'Sex', 'Violence'
 */ 
$pegis = [ 
    'age' => '3', // ONLY 1 Value
    'content' => ['Bad', 'Violence', 'Purchases'] // 0-4 Contents
];


$options = [
    'img_width' => '50%',   // 
    'img_height' => '50%',  //
    'lang' => null          // Read autoread Browser Language
];



$var_nums_games = 2;
$var_sort_pegi = ['3','7','12','16','18'];



$objPEGI = new TPEGIHandler($options);

$txt = '';
$gtxt = '';
$page = $pegis['age'];
?>
<!DOCTYPE html>
<html lang="<?php echo $objPEGI->getLang(); ?>">
<head>
    <meta charset="UTF-8">
    <title>Page Title</title>
    <link rel="stylesheet" href="<?php echo $cms_site; ?>/themes/default/theme.css"/>
</head>
<body>

<div class="center">
<div class="container"> 
    
<?php 
foreach ($games['pegi'] as $pegi_key => $pegi_values) 
{
    foreach ($pegi_values as $game) 
    {
        $gtxt .= '<div class="card age'.$pegi_key.'">';
        $gtxt .= '<div class="additional">';
        $gtxt .= '<div class="user-card">';
        $gtxt .= '<div class="level center">PEGI '.$pegi_key.'</div>';
        $gtxt .= '<div class="points center">'.$objPEGI->getAge($pegi_key).'</div>';
        $gtxt .= '<i><img src="themes/default/images/'.$objPEGI->getImage($pegi_key).'" height="128" alt="title" /></i>';
        $gtxt .= '</div>';
        $gtxt .= '<div class="more-info">';
        $gtxt .= '<h1>'.$game['title'].'</h1>';
        $gtxt .= '<div class="stats">';
               
        foreach ($game['content'] as $key => $value)         
        {
            $txt .= '<div>';
            $txt .= '<i><img src="themes/default/images/'.$objPEGI->getImage($value).'" height="68" alt="'.$objPEGI->getTitle($value).'" /></i>';
            $txt .= '</div>';
        }
     
        $gtxt .= $txt;
        $gtxt .= '</div>';
        $gtxt .= '</div>';
        $gtxt .= '</div>';
        $gtxt .= '<div class="general">';
        $gtxt .= '<div class="more-info">';
        $gtxt .= '<h1>'.$game['title'].'</h1>';
        $gtxt .= '<div class="coords">';
        $gtxt .= mb_strcut($game['description'], 0, 150).'...';
        $gtxt .= '</div>';
        $gtxt .= '</div>';
        $gtxt .= '<p> </p>';
        $gtxt .= '<span class="more">'.$game['publiser'].'</span>';
        $gtxt .= '</div>';
        $gtxt .= '</div>';
    }
}
echo $gtxt;
?>
</div>
</body>
</html>
<?php
unset($objPEGI);
?>