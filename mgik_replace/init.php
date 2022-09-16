<?php
class Mgik_Replace extends Plugin {

    private $host;

    function about() {
        return array(1.2,
            "Fix broken URLs at mosgorizbirkom.ru",
            "Dmitry A. Zvorykin");
    }

    function api_version() {
        return 2;
    }

    function init($host) {
        $this->host = $host;
        $host->add_hook($host::HOOK_ARTICLE_FILTER, $this);
    }

    function hook_article_filter($article) {
        if (strpos($article["link"], "mosgorizbirkom.ru") !== FALSE) {
			//http://mosgorizbirkom.ru/web/guest/http://mosgorizbirkom.ru/web/guest/
			//_debug('fgdfgtrg ' . $article["link"]);

			$article["link"] = str_replace("&#x3d;", "=", $article["link"]);
			$article["link"] = str_replace("&#x3a;", ":", $article["link"]);
			$article["link"] = str_replace("&#x3f;", "?", $article["link"]);
			$article["link"] = str_replace("&#x26;", "&", $article["link"]);
			$article["link"] = str_replace("&#x25;", "%", $article["link"]);
			$article["link"] = str_replace("&#x2f;", "/", $article["link"]);
			$article["link"] = str_replace("&#x2e;", ".", $article["link"]);
			
			
			$article["link"] = str_replace("http://mosgorizbirkom.ru/web/guest/http://mosgorizbirkom.ru/", "http://mosgorizbirkom.ru/", $article["link"]);

        }
        return $article;
    }
}
?>
