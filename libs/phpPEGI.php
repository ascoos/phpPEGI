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
 * @package            : ASCOOS CMS - phpPEGI
 * @subpackage         : phpPEGI Class file
 * @source             : /phpPEGI/libs/phpPEGI.php
 * @version            : 1.0.0
 * @created            : 2024-02-29 09:00:00 UTC+3
 * @updated            : 
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */

/*******************************
 * ONLY FOR ASCOOS CMS - START
 ******************************/
//namespace ASCOOS\CMS\Libraries\PEGI;

//use ASCOOS\Framework\Core\Kernel\TObject;
/*******************************
 * ONLY FOR ASCOOS CMS - END
 ******************************/

 // Run on ASCOOS CMS only. Marked as comment if you want run this script with other cms.
defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");

/**
 * 
 */
class TPEGIHandler /* extends TObject */ 
{
    /** 
     * PEGI Ages = '3', '7', '12', '16', '18'
     * PEGI Content = 'Bad', 'Discrimination', 'Drugs', 'Fear', 'Gambling', 'Parental', 'Purchases', 'Sex', 'Violence'
     */ 
    private $pegi = [ 'age' => '3', 'content' => [] ];
    private $lang = 'en';                // Περιέχει την γλώσσα του Client

    // Περιέχει τα κείμενα της γλώσσας.
    private $descriptions = [];
//    private array $acceptLang = [  'nn', ]; 

    private $acceptedLang = ['bg', 'cs', 'da', 'de', 'el', 'en', 'es', 'et', 'fi', 'fr', 'he', 'hr', 'hu', 'it', 'is', 'lt', 'lv', 'nl', 'pl', 'pt-pt', 'ro', 'sk', 'sr', 'sv', 'uk'];


    /**
     * 
     */

    public function __construct($options=null) {
        $lang = (!is_null($options) && !empty($options['lang'])) ? $options['lang'] : null;
        $this->setLang($options['lang']);
        $this->setDescriptions($this->lang);
    }

 
    /**
     * Εισάγουμε την τρέχουσα γλώσσα.
     */
    public function setLang($lang=null)
    {
        $strlang = (is_null($lang)) ? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2): $lang;        
        $this->lang = in_array($strlang, $this->acceptedLang) ? $strlang : 'en';
        //$this->options['lang'] = $this->lang;
    }


    public function getLang()
    {
        return $this->lang;
    }


    public function setDescriptions($lang=null)
    {
        global $cms_path;
        $str = ( is_null($lang) ) ? $this->lang : $lang;
        require_once ($cms_path."/languages/{$str}.php"); 
        $this->descriptions = $PEGI_Details;
    }


    /**
     * 
     */
    public function getTitle($key) {
        return $this->descriptions[$key]['title'];
    }


    /**
     * 
     */
    public function getDescription($key) 
    {
        return $this->descriptions[$key]['descript'];
    }


    /**
     * 
     */
    public function getImage($key) 
    {
        return $this->descriptions[$key]['img'];
    }



    /**
     * 
     * 
     */
    public function getAge($age)
    {
        return sprintf($this->descriptions['over_years'], $age);
    }


}
?>