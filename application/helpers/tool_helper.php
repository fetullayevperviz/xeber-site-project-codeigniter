<?php 

    function permalink($str, $options = array())
   {
     $str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
     $defaults = array(
         'delimiter' => '-',
         'limit' => null,
         'lowercase' => true,
         'replacements' => array(),
         'transliterate' => true
     );
     $options = array_merge($defaults, $options);
     $char_map = array(
         // Latin
         'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'AE', 'Ç' => 'C',
         'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I',
         'Ð' => 'D', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ő' => 'O',
         'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ű' => 'U', 'Ý' => 'Y', 'Þ' => 'TH',
         'ß' => 'ss',
         'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'ae', 'ç' => 'c',
         'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
         'ð' => 'd', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ő' => 'o',
         'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ű' => 'u', 'ý' => 'y', 'þ' => 'th',
         'ÿ' => 'y',
         // Latin symbols
         '©' => '(c)',
         // Greek
         'Α' => 'A', 'Β' => 'B', 'Γ' => 'G', 'Δ' => 'D', 'Ε' => 'E', 'Ζ' => 'Z', 'Η' => 'H', 'Θ' => '8',
         'Ι' => 'I', 'Κ' => 'K', 'Λ' => 'L', 'Μ' => 'M', 'Ν' => 'N', 'Ξ' => '3', 'Ο' => 'O', 'Π' => 'P',
         'Ρ' => 'R', 'Σ' => 'S', 'Τ' => 'T', 'Υ' => 'Y', 'Φ' => 'F', 'Χ' => 'X', 'Ψ' => 'PS', 'Ω' => 'W',
         'Ά' => 'A', 'Έ' => 'E', 'Ί' => 'I', 'Ό' => 'O', 'Ύ' => 'Y', 'Ή' => 'H', 'Ώ' => 'W', 'Ϊ' => 'I',
         'Ϋ' => 'Y',
         'α' => 'a', 'β' => 'b', 'γ' => 'g', 'δ' => 'd', 'ε' => 'e', 'ζ' => 'z', 'η' => 'h', 'θ' => '8',
         'ι' => 'i', 'κ' => 'k', 'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => '3', 'ο' => 'o', 'π' => 'p',
         'ρ' => 'r', 'σ' => 's', 'τ' => 't', 'υ' => 'y', 'φ' => 'f', 'χ' => 'x', 'ψ' => 'ps', 'ω' => 'w',
         'ά' => 'a', 'έ' => 'e', 'ί' => 'i', 'ό' => 'o', 'ύ' => 'y', 'ή' => 'h', 'ώ' => 'w', 'ς' => 's',
         'ϊ' => 'i', 'ΰ' => 'y', 'ϋ' => 'y', 'ΐ' => 'i',
         // Turkish
         'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G',
         'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g',
         // Russian
         'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh',
         'З' => 'Z', 'И' => 'I', 'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
         'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
         'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sh', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'Yu',
         'Я' => 'Ya',
         'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
         'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
         'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
         'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu',
         'я' => 'ya',
         // Ukrainian
         'Є' => 'Ye', 'І' => 'I', 'Ї' => 'Yi', 'Ґ' => 'G',
         'є' => 'ye', 'і' => 'i', 'ї' => 'yi', 'ґ' => 'g',
         // Czech
         'Č' => 'C', 'Ď' => 'D', 'Ě' => 'E', 'Ň' => 'N', 'Ř' => 'R', 'Š' => 'S', 'Ť' => 'T', 'Ů' => 'U',
         'Ž' => 'Z',
         'č' => 'c', 'ď' => 'd', 'ě' => 'e', 'ň' => 'n', 'ř' => 'r', 'š' => 's', 'ť' => 't', 'ů' => 'u',
         'ž' => 'z',
         // Polish
         'Ą' => 'A', 'Ć' => 'C', 'Ę' => 'e', 'Ł' => 'L', 'Ń' => 'N', 'Ó' => 'o', 'Ś' => 'S', 'Ź' => 'Z',
         'Ż' => 'Z',
         'ą' => 'a', 'ć' => 'c', 'ę' => 'e', 'ł' => 'l', 'ń' => 'n', 'ó' => 'o', 'ś' => 's', 'ź' => 'z',
         'ż' => 'z',
         // Latvian
         'Ā' => 'A', 'Č' => 'C', 'Ē' => 'E', 'Ģ' => 'G', 'Ī' => 'i', 'Ķ' => 'k', 'Ļ' => 'L', 'Ņ' => 'N',
         'Š' => 'S', 'Ū' => 'u', 'Ž' => 'Z',
         'ā' => 'a', 'č' => 'c', 'ē' => 'e', 'ģ' => 'g', 'ī' => 'i', 'ķ' => 'k', 'ļ' => 'l', 'ņ' => 'n',
         'š' => 's', 'ū' => 'u', 'ž' => 'z'
     );
     $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
     if ($options['transliterate']) {
         $str = str_replace(array_keys($char_map), $char_map, $str);
     }
     $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
     $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
     $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
     $str = trim($str, $options['delimiter']);
     return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
 }

 function category_list()
 {
    $CI =& get_instance();
    $result = $CI->db->select('*')->from('category')->order_by('id','asc')->get()->result_array();
    return $result;
 }

 function news_image($id)
 {
    $CI =& get_instance();
    $result = $CI->db->from('news')->where('id',$id)->get()->row();
    return $result->image;
 }

 function news_tmb_image($id)
 {
    $CI =& get_instance();
    $result = $CI->db->select('tmb')->from('news')->where('id',$id)->get()->row();
    return $result->tmb;
 }

 function news_mini_image($id)
 {
    $CI =& get_instance();
    $result = $CI->db->select('mini')->from('news')->where('id',$id)->get()->row();
    return $result->mini;
 }

 function k_yazar_image($id)
 {
    $CI =& get_instance();
    $result = $CI->db->from('k_yazar')->where('id',$id)->get()->row();
    return $result->image;
 }

 function k_yazar_mini_image($id)
 {
    $CI =& get_instance();
    $result = $CI->db->select('mini')->from('k_yazar')->where('id',$id)->get()->row();
    return $result->mini;
 }

 function reklam_image($id)
 {
    $CI =& get_instance();
    $result = $CI->db->from('reklam')->where('id',$id)->get()->row();
    return $result->image;
 }

 function reklam_tmb_image($id)
 {
    $CI =& get_instance();
    $result = $CI->db->select('tmb')->from('reklam')->where('id',$id)->get()->row();
    return $result->tmb;
 }

 function getIP()
 {
    if(getenv("HTTP_CLIENT_IP"))
    {
        $ip = getenv("HTTP_CLIENT_IP");
    }
    elseif(getenv("HTTP_X_FORWARDED_FOR"))
    {
       $ip = getenv("HTTP_X_FORWARDED_FOR");
       if(strstr($ip,','))
       {
          $tmp = explode($ip, ',');
          $ip = trim($tmp[0]);
       }
    }
    else
    {
        $ip = getenv("REMOTE_ADDR");
    }
    return $ip;
 }

 function son_siyaset($s_cat)
 {
    $CI =& get_instance();
    $result = $CI
                ->db
                ->select('*')
                ->from('news')
                ->where('cat_id',$s_cat)
                ->order_by('id','desc')
                ->limit('1')
                ->where('status',1)
                ->get()
                ->result_array();
    return $result;
 }

 function mini_siyaset($s_cat)
 {
    $CI =& get_instance();
    $result = $CI
                ->db
                ->select('*')
                ->from('news')
                ->where('cat_id',$s_cat)
                ->order_by('id','desc')
                ->limit('4','1')
                ->where('status',1)
                ->get()
                ->result_array();
    return $result;
 }

 function son_sosial($s_cat)
 {
    $CI =& get_instance();
    $result = $CI
                ->db
                ->select('*')
                ->from('news')
                ->where('cat_id',$s_cat)
                ->order_by('id','desc')
                ->limit('1')
                ->where('status',1)
                ->get()
                ->result_array();
    return $result;
 }

 function mini_sosial($s_cat)
 {
    $CI =& get_instance();
    $result = $CI
                ->db
                ->select('*')
                ->from('news')
                ->where('cat_id',$s_cat)
                ->order_by('id','desc')
                ->limit('4','1')
                ->where('status',1)
                ->get()
                ->result_array();
    return $result;
 }

 function son_iqtisad($s_cat)
 {
    $CI =& get_instance();
    $result = $CI
                ->db
                ->select('*')
                ->from('news')
                ->where('cat_id',$s_cat)
                ->order_by('id','desc')
                ->limit('1')
                ->where('status',1)
                ->get()
                ->result_array();
    return $result;
 }

 function mini_iqtisad($s_cat)
 {
    $CI =& get_instance();
    $result = $CI
                ->db
                ->select('*')
                ->from('news')
                ->where('cat_id',$s_cat)
                ->order_by('id','desc')
                ->limit('4','1')
                ->where('status',1)
                ->get()
                ->result_array();
    return $result;
 }


 function son_cemiyyet($s_cat)
 {
    $CI =& get_instance();
    $result = $CI
                ->db
                ->select('*')
                ->from('news')
                ->where('cat_id',$s_cat)
                ->order_by('id','desc')
                ->limit('1')
                ->where('status',1)
                ->get()
                ->result_array();
    return $result;
 }

 function mini_cemiyyet($s_cat)
 {
    $CI =& get_instance();
    $result = $CI
                ->db
                ->select('*')
                ->from('news')
                ->where('cat_id',$s_cat)
                ->order_by('id','desc')
                ->limit('4','1')
                ->where('status',1)
                ->get()
                ->result_array();
    return $result;
 }

 function son_idman($s_cat)
 {
    $CI =& get_instance();
    $result = $CI
                ->db
                ->select('*')
                ->from('news')
                ->where('cat_id',$s_cat)
                ->order_by('id','desc')
                ->limit('1')
                ->where('status',1)
                ->get()
                ->result_array();
    return $result;
 }

 function mini_idman($s_cat)
 {
    $CI =& get_instance();
    $result = $CI
                ->db
                ->select('*')
                ->from('news')
                ->where('cat_id',$s_cat)
                ->order_by('id','desc')
                ->limit('4','1')
                ->where('status',1)
                ->get()
                ->result_array();
    return $result;
 }

 function son_dunya($s_cat)
 {
    $CI =& get_instance();
    $result = $CI
                ->db
                ->select('*')
                ->from('news')
                ->where('cat_id',$s_cat)
                ->order_by('id','desc')
                ->limit('1')
                ->where('status',1)
                ->get()
                ->result_array();
    return $result;
 }

 function mini_dunya($s_cat)
 {
    $CI =& get_instance();
    $result = $CI
                ->db
                ->select('*')
                ->from('news')
                ->where('cat_id',$s_cat)
                ->order_by('id','desc')
                ->limit('4','1')
                ->where('status',1)
                ->get()
                ->result_array();
    return $result;
 }

function sondeqiqe($sd)
{
    $CI =& get_instance();
    $result = $CI
                ->db
                ->select('*')
                ->from('news')
                ->where('last_minute',$sd)
                ->where('status',1)
                ->order_by('id','desc')
                ->get()
                ->result_array();
    return $result;
}

function sondeqiqexeber($sd)
{
    $CI =& get_instance();
    $result = $CI
                ->db
                ->select('*')
                ->from('news')
                ->where('last_minute',$sd)
                ->where('status','1')
                ->order_by('id','desc')
                ->limit('3')
                ->get()
                ->result_array();
    return $result;
}

function sondeqiqexeber1($sd1)
{
    $CI =& get_instance();
    $result = $CI
                ->db
                ->select('*')
                ->from('news')
                ->where('last_minute',$sd1)
                ->where('status',1)
                ->order_by('id','desc')
                ->limit('3','4')
                ->get()
                ->result_array();
    return $result;
}


function gallery()
{
    $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('news')
                 ->where('status',1)
                 ->order_by('rand()')
                 ->limit('10')
                 ->get()
                 ->result_array();
    return $result;
}

function sonxeber()
{
    $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('news')
                 ->where('status',1)
                 ->order_by('id','desc')
                 ->limit('5')
                 ->get()
                 ->result_array();
    return $result;
}

function hit_xeber()
{
    $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('news')
                 ->where('status','1')
                 ->order_by('hit','desc')
                 ->limit('5')
                 ->get()
                 ->result_array();
    return $result;
}

function hit_xeber1()
{
    $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('news')
                 ->where('status',1)
                 ->order_by('hit','desc')
                 ->limit('3')
                 ->get()
                 ->result_array();
    return $result;
}



function sonxeber1()
{
    $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('news')
                 ->where('status',1)
                 ->order_by('id','desc')
                 ->limit('3')
                 ->get()
                 ->result_array();
    return $result;
}

function kose_yazar()
{
    $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('k_yazar')
                 ->where('status',1)
                 ->order_by('id','desc')
                 ->limit('5')
                 ->get()
                 ->result_array();
    return $result;
}


function site_settings()
{
    $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('site_settings')
                 ->get()
                 ->result_array();
    return $result;
}

function social_media()
{
   $CI =& get_instance();
   $result = $CI
                ->db
                ->select('*')
                ->from('social')
                ->where('status',1)
                ->get()
                ->result_array();
    return $result;
}

function comment()
{
    $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('comment')
                 ->where('status',1)
                 ->order_by('id','desc')
                 ->limit('5')
                 ->get()
                 ->result_array();
    return $result;
}

function tag()
{
    $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('news_tag','DISTINCT')
                 ->from('news')
                 ->where('status',1)
                 ->get()
                 ->result_array();
    return $result;
}

function reklam()
{
    $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('reklam')
                 ->where('status = 1 and end_date > sysdate()')
                 ->get()
                 ->row_array();
    return $result;
}

function comment_count($c_say)
{
    $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('comment')
                 ->where('status','1')
                 ->where('subject_id',$c_say)
                 ->order_by('id','desc')
                 ->get()
                 ->result_array();
    return $result;
}


function comment_getir($s_id)
{
    $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('comment')
                 ->join('news','news.id = comment.subject_id','inner')
                 ->where('comment.status','1')
                 ->where('comment.subject_id',$s_id)
                 ->count_all_results();
    return $result;
}


function kunye()
{
    $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('kunye')
                 ->where('status','1')
                 ->get()
                 ->result_array();
    return $result;
}

function news()
{
    $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('news')
                 ->get()
                 ->result_array();
    return $result;
}

function news1()
{
    $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('news')
                 ->get()
                 ->result_array();
    return $result;
}


function news_count()
{
    $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('news')
                 //->where('status',1)
                 ->count_all_results();
    return $result;
}

function k_yazar_count()
{
   $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('k_yazar')
                 //->where('status',1)
                 ->count_all_results();
    return $result;
}

function reklam_count()
{
   $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('reklam')
                 //->where('status',1)
                 ->count_all_results();
    return $result;
}

function social_media_count()
{
   $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('social')
                 //->where('status',1)
                 ->count_all_results();
    return $result;
}

function tesdiqlenmis_rey_count()
{
   $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('comment')
                 ->where('status',1)
                 ->count_all_results();
    return $result;
}

function tesdiqlenmemis_rey_count()
{
   $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('comment')
                 ->where('status',0)
                 ->count_all_results();
    return $result;
}

function oxunmus_mesaj_count()
{
   $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('message')
                 ->where('status',1)
                 ->count_all_results();
    return $result;
}

function oxunmamis_mesaj_count()
{
   $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('message')
                 ->where('status',0)
                 ->count_all_results();
    return $result;
}

function news_category($cat_id)
{
    $CI =& get_instance();
    $result = $CI
                 ->db
                 ->select('*')
                 ->from('category')
                 ->join('news','news.category=category.title','inner')
                 ->where('news.cat_id',$cat_id)
                 ->where('news.status','1')
                 ->order_by('news.hit','desc')
                 ->limit('5')
                 ->get()
                 ->result_array();
    return $result;
}



 ?>