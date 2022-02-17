<?php
    class a {
        private $url;
        private $texto;

        public function __construct($url, $texto, $target, $css= null)
        {
            $this->url = $url;
            $this->texto = $texto;
            $this->target = $target;
            $this->css = $css;
        }

        function getUrl() {
            return $this->url;
        }

        function getTexto() {
            return $this->texto;
        }

        function getLink() {
            return "<a href=\"{$this->url}\" style=\"{$this->css}\" target=\"{$this->target}\">{$this->texto}</a>"; 
        }
    }

    $link1 = new a('https://www.google.com/', 'Google', '_blank', 'font-weight: bold');
    $link2 = new a('https://unidavi.edu.br/', 'Unidavi', '_blank');

    echo $link1->getLink();
    echo "<br><br>";
    echo $link2->getLink();
?>