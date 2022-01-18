<?php
        $filePath1 = "control.json"; // path filename json control file from HTML
        $filePath2 = "data.json"; // path filename json data file from ESP
        $filePath = ""; // empty
        if (!empty($_GET['src'])){
            $source= $_GET['src'];
            if($source == "html"){$filePath = $filePath1;}
            if($source == "esp"){$filePath = $filePath2;}
            echo $source;
        }
		if (!empty($_GET['data'])){
                $control= $_GET['data'];
              
                jsonWrite($control, $filePath);
			}
        
        function jsonWrite($control, $filePath){
            echo $control;
            $file = fopen($filePath, "w") or die("can't open file");
            fwrite($file, $control); // overwrite existing file
            fclose($file);
        }




?>
