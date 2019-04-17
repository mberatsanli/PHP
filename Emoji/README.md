# Emoji

### Import the library
	include "lib/emoji.php";

### Using the library
	mbsEmoji::using($TEXT);

### Definition Theme
	mbsEmoji::attr('theme', '< img src="%s" alt="%s" class="my_emoji">'); 
Please using two %s

### Defination Directory
	mbsEmoji::attr('directory', 'your/image/file/'); 

### Defination Your Smiles
	$yourSmiles = array( 'xD' => 'eksdi.png' );
	mbsEmoji::attr('smiles', $yourSmiles);

* Make definitions before mbsEmoji::using()
