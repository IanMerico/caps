<?php
         require("simple_html_dom.php");
         $html = file_get_html('https://www.bing.com/search?q=software+engineer&qs=AS&pq=software+e&sc=10-10&cvid=787832BDEEE94F9FB294E8108C85A67F&FORM=QBLH&sp=1');
        
         
        for ($i = 0; $i < 5; $i++) { 
            echo "<h1>Number ".($i + 1)."</h1>";
            echo "<h3>Title ". $html->find('h2 a', $i)."</h3>";
            echo "<h4>Link ".$html->find('h2 a', $i) ->href."</h4>";
      } 
?>
<?php
    //connecting to a remote url using curl
    

    //see http://www.php.net/manual/en/function.curl-setopt.php for more info
    // $url = "https://www.bing.com/search?q=software+engineer&qs=AS&pq=software+e&sc=10-10&cvid=787832BDEEE94F9FB294E8108C85A67F&FORM=QBLH&sp=1";
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    // curl_setopt($ch, CURLOPT_URL, $url);
    // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
    // $data = curl_exec($ch);
    // $info = curl_getinfo($ch);  
    // curl_close($ch);
    // echo "<h1>Data</h1>";
    // echo "<pre>".htmlentities($data)."</pre>";

    // echo "<h1>Info</h1>";
    // echo "<pre>";
    // var_dump($info);
    // echo "</pre>";

?>