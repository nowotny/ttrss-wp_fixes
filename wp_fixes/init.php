<?php

class wp_fixes extends Plugin {
	private $host;

	function about(){
		return array(1.0,
			'Plugin for users of Tiny Tiny RSS WP8 Client that fixes some problems with content rendering',
			'nowotny');
	}

	function init($host){
		$this->host = $host;

		$host->add_hook($host::HOOK_ARTICLE_FILTER, $this);
	}
	
	function make_fixes($article){
	
		/* #1: Fix unclosed iframes
		*/
		
		$article['content'] = preg_replace('#(<iframe[^>]+/>)(</[^i][^>]*>)#', '$1</iframe>$2', $article['content']);
				
		/* #1 */
	
		
		/* #2: Fix no protocol src URLs
		*/
		
		$article['content'] = preg_replace('#src=("|\'|)//#', 'src=$1http://', $article['content']);
				
		/* #2 */
		
		return $article;
	}
	
	
	function hook_article_filter($article){

		$article = $this->make_fixes($article);
		
		return $article;
		
	}

	function api_version(){
		return 2;
	}

}
?>
