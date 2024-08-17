<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WebsiteCon extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();


        $this->load->database();

        $dbase = [
            'database_type' => 'mysql',
            'database_name' => $this->db->database,
            'server' => $this->db->hostname,
            'username' => $this->db->username,
            'password' => $this->db->password,
            'charset' => 'utf8'
        ];



        $this->load->helper('file');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('medoo', $dbase);
        //   $this->load->library('mylib');

        date_default_timezone_set("Asia/Kolkata");

        

    }



    public function index()
    {     
        $res=[          
            "snav"=>$this->medoo->select("services",["row_id","_title"]),  
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
        ];   
        $this->load->view('website/index',$res);
    }

    public function about()
    {      
        $res=[          
            "snav"=>$this->medoo->select("services",["row_id","_title"]),  
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
        ]; 

        $this->load->view('website/about',$res);
    }

    public function contact()
    {       

        $m=1;
        if(isset($_POST['save'])){

            $arr=[
                "row_id"=>$this->_crd(),
                "name"=>$_POST['name'],
                "mobile"=>$_POST['mobile'],
                "city"=>$_POST['city'],
                "email"=>$_POST['email'],
                "_desr"=>$_POST['_desr'],
                "_sub"=>$_POST['_sub'],
                "date"=>date("Y-m-d"),
            ];
            $c=$this->medoo->insert("user_enquery",$arr);
            if($c->rowCount()){
                $m="Successfully Submit";
            }else{
                $m="Enter Valid information ";
            }

        }

        $res=[          
            "snav"=>$this->medoo->select("services",["row_id","_title"]),  
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]), 
            "m"=>$m 
        ]; 
        $this->load->view('website/contact',$res);
    }

    public function ourteam()
    {   
        $res=[          
            "snav"=>$this->medoo->select("services",["row_id","_title"]),  
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
        ];      
        $this->load->view('website/ourteam',$res);
    }

    public function services()
    {    
        $res=[          
            "snav"=>$this->medoo->select("services",["row_id","_title"]),  
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
        ];    
        $this->load->view('website/services',$res);
    }

    public function gallery()
    {        
        $res=[          
            "snav"=>$this->medoo->select("services",["row_id","_title"]),  
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
            "gallery"=>$this->medoo->select("gallery","*"),  
        ]; 
        $this->load->view('website/gallery',$res);
    }
    public function cities()
    {     
        $res=[          
            "snav"=>$this->medoo->select("services",["row_id","_title"]),  
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
        ];     
        $this->load->view('website/cities',$res);
    }
    public function blogs()
    {    
        $res=[          
            "snav"=>$this->medoo->select("services",["row_id","_title"]),  
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
        ];      
        $this->load->view('website/blogs',$res);
    }
 
    public function enquery()
    {     
        $m=1;
        if(isset($_POST['save'])){

            $arr=[
                "row_id"=>$this->_crd(),
                "name"=>$_POST['name'],
                "mobile"=>$_POST['mobile'],
                "city"=>$_POST['city'],
                "email"=>$_POST['email'],
                "_desr"=>$_POST['_desr'],
                "_sub"=>$_POST['_sub'],
                "date"=>date("Y-m-d"),
            ];
            $c=$this->medoo->insert("user_enquery",$arr);
            if($c->rowCount()){
                $m="Successfully Submit";
            }else{
                $m="Enter Valid information ";
            }

        }
        $res=[          
            "snav"=>$this->medoo->select("services",["row_id","_title"]),  
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),
            "m"=>$m  
        ];     
        $this->load->view('website/enquery',$res);
    }
   
    public function termiconservices()
    {       
        $res=[          
            "snav"=>$this->medoo->select("services",["row_id","_title"]),  
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
        ];   
        $this->load->view('website/termiconservices',$res);
    }
   
    public function viewservies($id)
    {       
        $x=$this->medoo->select("services","*",["row_id"=>$id]);
        if(!empty($x)){
            $res=[          
                "snav"=>$this->medoo->select("services",["row_id","_title"]),  
                "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
                "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
                "viewserives"=>$x[0]
            ];   
            $this->load->view('website/serviesview',$res);
        }else{
            $res=[          
                "snav"=>$this->medoo->select("services",["row_id","_title"]),  
                "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
                "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
               
            ];    
            $this->load->view('website/errorpage',$res);
        }
       
    }

    public function viewcites($id)
    {       
        $x=$this->medoo->select("cities","*",["row_id"=>$id]);
        if(!empty($x)){
            $res=[          
                "snav"=>$this->medoo->select("services",["row_id","_title"]),  
                "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
                "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
                "viewserives"=>$x[0]
            ];   
            $this->load->view('website/citiesview',$res);
        }else{
            $res=[          
                "snav"=>$this->medoo->select("services",["row_id","_title"]),  
                "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
                "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
               
            ];    
            $this->load->view('website/errorpage',$res);
        }
    }


    public function viewblogs($id)
    {       
        $x=$this->medoo->select("blogs","*",["row_id"=>$id]);
        if(!empty($x)){
            $res=[          
                "snav"=>$this->medoo->select("services",["row_id","_title"]),  
                "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
                "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
                "viewserives"=>$x[0]
            ];   
            $this->load->view('website/viewblogs',$res);
        }else{
            $res=[          
                "snav"=>$this->medoo->select("services",["row_id","_title"]),  
                "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
                "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
               
            ];    
            $this->load->view('website/errorpage',$res);
        }
    }

    public function _crd(){
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
    
   


}