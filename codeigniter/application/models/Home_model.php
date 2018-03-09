<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_images()
    {
        $query = $this->db->get('images');
        if($query->num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }else{
            return false;
        }
    }

     public function get_img_flick()
   {
        header('Content-Type: text/html; charset=utf-8');
        $url = "https://api.flickr.com/services/feeds/photos_public.gne?tags=ri$

        $texto = file_get_contents($url);
        $tree = new SimpleXMLElement($texto);
        $tree->registerXPathNamespace("feed","http://www.w3.org/2005/Atom");
        $links = $tree->xpath("//feed:entry/feed:link[@rel='enclosure']/@href");
        echo "<h1 align='center'>Últimas fotos con la etiqueta Rick and Morty <$
        $tabla = "";

}


}
