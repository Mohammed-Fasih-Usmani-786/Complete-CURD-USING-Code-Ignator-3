<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginCon extends CI_Controller {

        
    public function __construct()
    {
    parent::__construct();			
                

    $this->load->database();

    $dbase=[
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
    $this->load->library('medoo',$dbase);
    //   $this->load->library('mylib');
    
    date_default_timezone_set("Asia/Kolkata");
        if($this->session->has_userdata("customer")){
            redirect(site_url("Home"));
        }	
    }	
    

	public function index()
	{
        $m=1;
        if(isset($_POST['sub'])){
            $arr=[
                "mobile"=>$_POST['mo'],
                "pass"=>$_POST['pa'],
            ];

            $c=$this->medoo->select("t_client","*",$arr);
            if(!empty($c)){
                $this->session->set_userdata(["customer"=>$c[0]]);				
                redirect(site_url("Home"));
            }else{
                $m="Enter Valid Information";
            }

        } 

		$this->load->view('website/login',["m"=>$m]);
	}

	public function success($id)
	{
        $c=$this->medoo->select("t_client","*",["row_id"=>$id]);
       
        if(!empty($c)){
            $this->load->view('website/success',["data"=>$c[0]]);
        }else{
            redirect(site_url("Home"));
        }

	   
	}
	public function register()
	{
        $m=1;
        if(isset($_POST['sub'])){

            $id=$this->_crd();
            $arr=[
                "row_id"=>$id,
                "refer"=>$_POST['refer'],
                "name"=>$_POST['name'],
                "mobile"=>$_POST['mobile'],
                "email"=>$_POST['email'],
                "pass"=>$_POST['pass'],
                "wallet"=>"0",
                "reg_date"=>date("Y-m-d"),
                "cr_on"=>date("Y-m-d H:i:s"),
            ];
            
            $c=$this->medoo->count("t_client",["mobile"=>$_POST['refer']]);
            $c2=$this->medoo->count("t_client",["mobile"=>$_POST['mobile']]);

            if($c==1){

                if($c2==0){
                    $c=$this->medoo->insert("t_client",$arr);
                    if($c->rowCount()){
                        redirect(site_url("Success/".$id));
                      //  $m="Successfully Register";
                    }else{
                        $m="Enter Valid information ";
                    }
                }else{
                    $m="Mobile No. already Register";
                }
               
            }else{
                $m="Enter Valid Refer No.";
            }

        }
		$this->load->view('website/register',["m"=>$m]);
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
