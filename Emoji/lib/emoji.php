<?php
class mbsEmoji{
	private static $htmlThemes = '<img src="%s" alt="%s">';

	private static $directory = "/images/emojis/";

	private static $smiles = array(
		'xD'	=> 'devil.png',
		'>:)'	=> 'devil.png',
		'x('	=> 'angry.png',
		':(('	=> 'cry.png',
		':*'	=> 'kiss.png',
		':))'	=> 'laugh.png',
		':D'	=> 'laugh.png',
		':-D'	=> 'laugh.png',
		':x'	=> 'love.png',
		'(:|'	=> 'sleepy.png',
		':)'	=> 'smile.png',
		':-)'	=> 'smile.png',
		':('	=> 'sad.png',
		':-('	=> 'sad.png',
		';)'	=> 'wink.png',
		';-)'	=> 'wink.png',
	);

	public static function attr($type, $attr){
		switch ($type) {
			case "smiles":
				if(is_array($attr)){
					mbsEmoji::$smiles = $attr;
				}else{
					echo "Your choice smiles but you haven't array for smiles => ". __CLASS__ . "::" . __FUNCTION__ . "(smiles, ***)";
					die();
				}
				break;
			case "directory":
				if(!is_array($attr)){
					mbsEmoji::$directory = $attr;
				}else{
					echo "Please don't using array() => ". __CLASS__ . "::" . __FUNCTION__ . "(directory, ***)";
					die();
				}
				break;
			case "themes":
				if(!is_array($attr)){
					mbsEmoji::$htmlThemes = $attr;
				}else{
					echo "Please don't using array() => ". __CLASS__ . "::" . __FUNCTION__ . "(themes, ***)";
					die();
				}
				break;
			default:
				echo "Please choice a type (smiles, directory, themes)";
				die();
				break;
		}
	}

	public static function using($text){
		foreach(mbsEmoji::$smiles as $smile => $img)
			$text = str_replace($smile, sprintf(mbsEmoji::$htmlThemes, mbsEmoji::$directory.$img, htmlspecialchars(str_replace(array('%','(',')'), array("&#37;","&#40;","&#41;"),$smile))), $text);
		return $text;
	}
}
?>
