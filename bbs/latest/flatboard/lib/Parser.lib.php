<?php defined('FLATBOARD') or die('Flatboard Community.');

/*
 * Project name: Flatboard
 * Project URL: https://flatboard.org
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/
class Parser
{
    /**
     * Protected constructor since this is a static class.
     *
     * @access  protected
     */
    protected function __construct()
    {
        // Nothing here
    }
    /**
     * Méthode de de translittération, formatant une chaine de caractères en supprimant des caractères non valides.
     *
     * echo Parser::translitIt('hello world');
     *
     * @param  string $str string
     * @return string $str
     */
    public static function translitIt($str)
    {
        $patern = [

            // Latin
            'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'AE', 'Ç'=>'C',
            'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I',
            'Ð'=>'D', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ő'=>'O',
            'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ű'=>'U', 'Ý'=>'Y', 'Þ'=>'TH',
            'ß'=>'ss',
            'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'ae', 'ç'=>'c',
            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i',
            'ð'=>'d', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ő'=>'o',
            'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ü'=>'u', 'ű'=>'u', 'ý'=>'y', 'þ'=>'th',
            'ÿ'=>'y',

            // Latin symbols
            '©'=>'(c)',

            // Greek
            'Α'=>'A', 'Β'=>'B', 'Γ'=>'G', 'Δ'=>'D', 'Ε'=>'E', 'Ζ'=>'Z', 'Η'=>'H', 'Θ'=>'8',
            'Ι'=>'I', 'Κ'=>'K', 'Λ'=>'L', 'Μ'=>'M', 'Ν'=>'N', 'Ξ'=>'3', 'Ο'=>'O', 'Π'=>'P',
            'Ρ'=>'R', 'Σ'=>'S', 'Τ'=>'T', 'Υ'=>'Y', 'Φ'=>'F', 'Χ'=>'X', 'Ψ'=>'PS', 'Ω'=>'W',
            'Ά'=>'A', 'Έ'=>'E', 'Ί'=>'I', 'Ό'=>'O', 'Ύ'=>'Y', 'Ή'=>'H', 'Ώ'=>'W', 'Ϊ'=>'I',
            'Ϋ'=>'Y',
            'α'=>'a', 'β'=>'b', 'γ'=>'g', 'δ'=>'d', 'ε'=>'e', 'ζ'=>'z', 'η'=>'h', 'θ'=>'8',
            'ι'=>'i', 'κ'=>'k', 'λ'=>'l', 'μ'=>'m', 'ν'=>'n', 'ξ'=>'3', 'ο'=>'o', 'π'=>'p',
            'ρ'=>'r', 'σ'=>'s', 'τ'=>'t', 'υ'=>'y', 'φ'=>'f', 'χ'=>'x', 'ψ'=>'ps', 'ω'=>'w',
            'ά'=>'a', 'έ'=>'e', 'ί'=>'i', 'ό'=>'o', 'ύ'=>'y', 'ή'=>'h', 'ώ'=>'w', 'ς'=>'s',
            'ϊ'=>'i', 'ΰ'=>'y', 'ϋ'=>'y', 'ΐ'=>'i',

            // Turkish
            'Ş'=>'S', 'İ'=>'I', 'Ç'=>'C', 'Ü'=>'U', 'Ö'=>'O', 'Ğ'=>'G',
            'ş'=>'s', 'ı'=>'i', 'ç'=>'c', 'ü'=>'u', 'ö'=>'o', 'ğ'=>'g',

            // Russian
            'А'=>'A', 'Б'=>'B', 'В'=>'V', 'Г'=>'G', 'Д'=>'D', 'Е'=>'E', 'Ё'=>'Yo', 'Ж'=>'Zh',
            'З'=>'Z', 'И'=>'I', 'Й'=>'J', 'К'=>'K', 'Л'=>'L', 'М'=>'M', 'Н'=>'N', 'О'=>'O',
            'П'=>'P', 'Р'=>'R', 'С'=>'S', 'Т'=>'T', 'У'=>'U', 'Ф'=>'F', 'Х'=>'H', 'Ц'=>'C',
            'Ч'=>'Ch', 'Ш'=>'Sh', 'Щ'=>'Sh', 'Ъ'=>'', 'Ы'=>'Y', 'Ь'=>'', 'Э'=>'E', 'Ю'=>'Yu',
            'Я'=>'Ya',
            'а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'e', 'ё'=>'yo', 'ж'=>'zh',
            'з'=>'z', 'и'=>'i', 'й'=>'j', 'к'=>'k', 'л'=>'l', 'м'=>'m', 'н'=>'n', 'о'=>'o',
            'п'=>'p', 'р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u', 'ф'=>'f', 'х'=>'h', 'ц'=>'c',
            'ч'=>'ch', 'ш'=>'sh', 'щ'=>'sh', 'ъ'=>'', 'ы'=>'y', 'ь'=>'', 'э'=>'e', 'ю'=>'yu',
            'я'=>'ya',

            // Bulgarian
            'А'=>'A', 'Б'=>'B', 'В'=>'V', 'Г'=>'G', 'Д'=>'D', 'Е'=>'E', 'Ж'=>'Zh', 'З'=>'Z',
            'И'=>'I', 'Й'=>'J', 'К'=>'K', 'Л'=>'L', 'М'=>'M', 'Н'=>'N', 'О'=>'O', 'П'=>'P',
            'Р'=>'R', 'С'=>'S', 'Т'=>'T', 'У'=>'U', 'Ф'=>'F', 'Х'=>'H', 'Ц'=>'C', 'Ч'=>'Ch',
            'Ш'=>'Sh', 'Щ'=>'Sh', 'Ъ'=>'',	'Ь'=>'J','Ю'=>'Yu','Я'=>'Ya',
            'а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'e', 'ж'=>'zh','з'=>'z',
            'и'=>'i', 'й'=>'j', 'к'=>'k', 'л'=>'l', 'м'=>'m', 'н'=>'n', 'о'=>'o','п'=>'p',
            'р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u', 'ф'=>'f', 'х'=>'h', 'ц'=>'c', 'ч'=>'ch',
            'ш'=>'sh', 'щ'=>'sh', 'ъ'=>'', 'ь'=>'j', 'ю'=>'yu', 'я'=>'ya',

            // Ukrainian
            'Є'=>'Ye', 'І'=>'I', 'Ї'=>'Yi', 'Ґ'=>'G',
            'є'=>'ye', 'і'=>'i', 'ї'=>'yi', 'ґ'=>'g',

            // Czech
            'Č'=>'C', 'Ď'=>'D', 'Ě'=>'E', 'Ň'=>'N', 'Ř'=>'R', 'Š'=>'S', 'Ť'=>'T', 'Ů'=>'U',
            'Ž'=>'Z',
            'č'=>'c', 'ď'=>'d', 'ě'=>'e', 'ň'=>'n', 'ř'=>'r', 'š'=>'s', 'ť'=>'t', 'ů'=>'u',
            'ž'=>'z',

            // Polish
            'Ą'=>'A', 'Ć'=>'C', 'Ę'=>'e', 'Ł'=>'L', 'Ń'=>'N', 'Ó'=>'o', 'Ś'=>'S', 'Ź'=>'Z',
            'Ż'=>'Z',
            'ą'=>'a', 'ć'=>'c', 'ę'=>'e', 'ł'=>'l', 'ń'=>'n', 'ó'=>'o', 'ś'=>'s', 'ź'=>'z',
            'ż'=>'z',

            // Latvian
            'Ā'=>'A', 'Č'=>'C', 'Ē'=>'E', 'Ģ'=>'G', 'Ī'=>'i', 'Ķ'=>'k', 'Ļ'=>'L', 'Ņ'=>'N',
            'Š'=>'S', 'Ū'=>'u', 'Ž'=>'Z',
            'ā'=>'a', 'č'=>'c', 'ē'=>'e', 'ģ'=>'g', 'ī'=>'i', 'ķ'=>'k', 'ļ'=>'l', 'ņ'=>'n',
            'š'=>'s', 'ū'=>'u', 'ž'=>'z'
        ];

        return strtr($str, $patern);
    }
    /**
     * Méthode qui formate une chaine de caractères en texte minuscule.
     *
     * echo Parser::lowercase('Some text here');
     *
     * @param  string $str String
     * @return string
     */
    public static function lowercase($str)
    {
        return function_exists('mb_strtolower') ? mb_strtolower($str, 'utf-8') : strtolower($str);
    }  
     /**
     * Replacer for FILTER_SANITIZE_STRING deprecated with PHP 8.1
     *
     * $str = Parser::filter_string_polyfill('url');
     *
     * https://stackoverflow.com/questions/69207368/constant-filter-sanitize-string-is-deprecated
     */   
	public static function filter_string_polyfill(string $string): string
	{
	    $str = preg_replace('/\x00|<[^>]*>?/', '', $string);
	    return str_replace(["'", '"'], ['&#39;', '&#34;'], $str);
	}      
    /**
     * Méthode qui convertit une chaine de caractères au format valide pour une url
     *
     * $safe_string = Parser::safeString('hello world');
     *
     * @param  string   $str       String
     * @param  string   $delimiter String delimiter
     * @param  boolean  $lowercase String Lowercase
     * @return string
     */
    public static function safeString($str, $delimiter = '-', $lowercase = true)
    {
        // Remove tags
        #$str = filter_var($str, FILTER_SANITIZE_STRING);
        $str = Parser::filter_string_polyfill($str);

        // Decode all entities to their simpler forms
        $str = html_entity_decode($str, ENT_QUOTES, 'UTF-8');

        // Reserved characters (RFC 3986)
        $reserved_characters = array(
            '/', '?', ':', '@', '#', '[', ']',
            '!', '$', '&', '\'', '(', ')', '*',
            '+', ',', ';', '='
        );

        // Remove reserved characters
        $str = str_replace($reserved_characters, ' ', $str);

        // Set locale to en_US.UTF8
        setlocale(LC_ALL, 'en_US.UTF8');

        // Translit ua,ru => latin
        $str = Parser::translitIt($str);

        // Convert string
        $str = iconv('UTF-8', 'ASCII//TRANSLIT', $str);

        // Remove characters
        $str = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $str);
        if ($delimiter != null) {
            $str = preg_replace("/[\/_|+ -]+/", $delimiter, $str);
            $str = trim($str, $delimiter);
        }

        // Lowercase
        if ($lowercase === true) {
            $str = Parser::lowercase($str);
        }

        // Return safe name
        return $str;
    }    
	/**
	 * 
	 * @param $string is the actual string
	 * @param $word_length to storten 
	 * @param $endstring will concat the string with some extra string if the word limit is less than word count 
	 */
	public static function summary($string, $word_length=100, $endstring='&hellip;') {
	    $retval = $string;
	    // if a string is given instead of integer return total string.
	    $word_length = (intval($word_length) == 0 ) ? strlen($retval) : intval($word_length);
	    $array = explode(" ", $string);
	    if (count($array) <= $word_length) {
	        $retval = $string;
	    } else {
	        array_splice($array, $word_length);
	        $retval = implode(" ", $array);
	        $retval .= $endstring;
	    }
	    return $retval;
	}
	//
	// Replace string matching regular expression
	//
	// This function takes care of possibly disabled unicode properties in PCRE builds
	//
	public static function ucp_preg_replace($pattern, $replace, $subject, $callback = false)
	{
		if($callback)
			$replaced = preg_replace_callback($pattern, create_function('$matches', 'return '.$replace.';'), $subject);
		else
			$replaced = preg_replace($pattern, $replace, $subject);
	
		// If preg_replace() returns false, this probably means unicode support is not built-in, so we need to modify the pattern a little
		if ($replaced === false)
		{
			if (is_array($pattern))
			{
				foreach ($pattern as $cur_key => $cur_pattern)
					$pattern[$cur_key] = str_replace('\p{L}\p{N}', '\w', $cur_pattern);
	
				$replaced = preg_replace($pattern, $replace, $subject);
			}
			else
				$replaced = preg_replace(str_replace('\p{L}\p{N}', '\w', $pattern), $replace, $subject);
		}
	
		return $replaced;
	}	
	//
	// A wrapper for ucp_preg_replace
	//
	function ucp_preg_replace_callback($pattern, $replace, $subject)
	{
		return Parser::ucp_preg_replace($pattern, $replace, $subject, true);
	}			
	//
	// Final content parser
	//	
	public static function content($text, $summary = false)
	{
		global $config;			
		if($config['editor'] === 'markdown'){	
			global $Parsedown, $BBlight;	
			# Parse markdown content.
			$text = $Parsedown->text($text);
			$text = $BBlight->toHTML($text, false, true);
		} else {
			global $BBcode;
			# Parse BBcode content.	
			$text = $BBcode->toHTML($text, false, true);	
		}			
		return $text;
	}
	/*
	 *---------------------------------------------------------------
	 * TAGS DE REMPLACEMENT
	 *---------------------------------------------------------------
	 */
	public static function title($string)
	{	
		$tags = flatDB::readEntry('config', 'tags');	
		foreach($tags as $tag) {
			$title = $tag['title'];
			$replace = $tag['replace'];	
			$string = str_replace($title, Parser::htmlDecode($replace), $string);		
		} 
		return $string;
	}
	
	public static function pre2htmlentities($string)
	{
		return preg_replace_callback('/<pre.*?><code(.*?)>(.*?)<\/code><\/pre>/imsu',
			create_function('$input', 'return "<pre><code $input[1]>".htmlentities($input[2])."</code></pre>";'),
			$string);
	}
		
	// Convert special HTML entities back to characters
	public static function htmlDecode($text)
	{
		$flags = ENT_COMPAT;
		if(defined('ENT_HTML5')) {
			$flags = ENT_COMPAT|ENT_HTML5;
		}
		return htmlspecialchars_decode($text, $flags);
	}
	// Highlighted search word
	function highlight_word( $content, $word, $color ) {
	    $replace = '<span style="background-color: ' . $color . ';">' . $word . '</span>';
	    $content = str_replace( $word, $replace, $content );
	
	    return $content;
	}
}