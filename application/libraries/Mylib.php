<?php 

date_default_timezone_set('Asia/Kolkata');

class mylib
{
      
 /*
			 **************************************************
						My All Required Function
			 **************************************************
 */
 
	public function createRandemId(){
		$str = "";
		$length=10;
		$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
		$max = count($characters) - 1;
		for ($i = 0; $i < $length; $i++) {
			$rand = mt_rand(0, $max);
			$str .= $characters[$rand];
		}		
		$date=date("Ym");
		$t=time();
		$r=$date.$str.$t;		
		return $r;
	}

	public function createinvoicenumber(){
		$str = "";
			
		$date=date("Ym");
		$t=time();
		$r=$date.$t;		
		return $r;
	}
    
	
	public function getClientIp()
	{
		  $ipaddress = '';
		  if (getenv('HTTP_CLIENT_IP'))
			  $ipaddress = getenv('HTTP_CLIENT_IP');
		  else if(getenv('HTTP_X_FORWARDED_FOR'))
			  $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		  else if(getenv('HTTP_X_FORWARDED'))
			  $ipaddress = getenv('HTTP_X_FORWARDED');
		  else if(getenv('HTTP_FORWARDED_FOR'))
			  $ipaddress = getenv('HTTP_FORWARDED_FOR');
		  else if(getenv('HTTP_FORWARDED'))
			  $ipaddress = getenv('HTTP_FORWARDED');
		  else if(getenv('REMOTE_ADDR'))
			  $ipaddress = getenv('REMOTE_ADDR');
		  else
			  $ipaddress = 'UNKNOWN';
		  return $ipaddress;
	}
	
	public function uniquUserId($str1){
		
		$str = "";
		$length=10;
		$characters = array_merge(range('A','Z'), range('0','9'));
		$max = count($characters) - 1;
		for ($i = 0; $i < $length; $i++) {
			$rand = mt_rand(0, $max);
			$str .= $characters[$rand];
		}
		return $str1.$str;
		
	}
	
	
	public function DateTimeToMinuts($time){
		$time = explode(':', $time);
		return ($time[0]*60) + ($time[1]);
	}
	
	
	public function sumDateTime($minuts){
		$current = date("Y/m/d H:i:s", strtotime("now")) . "\n";			
	    	return date("h:i:s", strtotime("+".$minuts." minutes"));
	}
	
	public function timeDifMinutes($endTime) {		
        	$to_time = strtotime($endTime);
		$startTime = date("Y/m/d H:i:s", strtotime("now"));		
      	$from_time = strtotime($startTime);
        	$minutes = ($to_time - $from_time) / 60; 
        	return ($minutes < 0 ? 0 : abs($minutes));  
	} 

	public function promocode() {
		
		$s =  microtime(true);
		return substr(time(true).substr($s, strpos($s, '.') + 1), 5);
        
	} 
	
	
	
    public function upload($id, $temp, $filename) // for upload file code any file
    {
        $path = "upload/";
        if (!file_exists($path)) {
            mkdir($path);
            chmod($path, 0777);
        }

        if (!$this->type($filename))
            return false;
        else {
            $nn = $this->changename($id, $filename);
            $newpath = $path . "/" . $nn;
            move_uploaded_file($temp, $newpath);
        }
        return $newpath;
    }


    private   function getExtension($str) {
        $i = strrpos($str,".");
        if (!$i) { return ""; }
        $l = strlen($str) - $i;
        $ext = substr($str,$i+1,$l);
        return $ext;
    }


    private function type($filename)  // type check image file
    {
        $f = explode(".", $filename);
        $valitype = array("png", "jpg", "gif", "jpeg", "PNG", "JPG", "GIF", "JPEG", "PDF", "pdf", "doc");
        if (in_array($f[1], $valitype))
            return true;
        else
            return false;
    }

   
    private function changename($id, $filename)  // new name of file
    {
        $f = explode(".", $filename);
        $newname = $id . "." . $f[1];
        return $newname;
    }
	
	
	  public function multiplefiles ($files,$path){
			   
           $rt = 0;
           $file_Ar=[];
		   $i=0;
            foreach ($files['tmp_name'] as $key => $tmp_name) {
					$file_name = $key . $files['name'][$key];
					$file_size = $files['size'][$key];
					$file_tmp = $files['tmp_name'][$key];
					$file_type = $files['type'][$key];

					$imgid=$this->uniquUserId("product");
										
					$newnamefile = $this->changename($imgid, $file_name);
					$up=$path.$newnamefile;
                    move_uploaded_file($file_tmp,$up);	
					
					$file_Ar[$i++]=$newnamefile;
								
					
		}
			
		return $file_Ar;
		
	}
	
	public function uploadImage($id,$files,$path) // for upload file code any file
    {
            $file_name = $files['name'];
			$file_size = $files['size'];
			$file_tmp = $files['tmp_name'];
			$file_type = $files['type'];
            $nn = $this->changename($id, $file_name);
			$up=$path.$nn;         
            move_uploaded_file($file_tmp , $up);	
       	
		$d=$nn;
		
		return $d;
       
    }


	
	public function createAppId(){
		$str = "";
		$str2 = "";
		$length=20;
		$characters = array_merge(range('A','Z'),range('0','9'));
		$max = count($characters) - 1;
		for ($i = 0; $i < $length; $i++) {
			$rand = mt_rand(0, $max);
			$str .= $characters[$rand];
		}	
		
		for ($i = 0; $i < $length; $i++) {
			$rand = mt_rand(0, $max);
			$str2 .= $characters[$rand];
		}
		
		$date=date("Ym");
		$t=time();
		$r=$date.$str.$t.$str2;
		
		 return $r;
	}



	

}

?>