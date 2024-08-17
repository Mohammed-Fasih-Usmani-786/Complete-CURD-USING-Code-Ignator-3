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

        if(isset($_POST['save2'])){

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
        $this->_sessionid="";

        if (!$this->session->has_userdata("_webid")) {
            $this->_sessionid= $this->_crd();
            $this->session->set_userdata(["_webid"=>$this->_sessionid]);         
            
           
        }else{
            $this->_sessionid=$this->session->userdata("_webid"); 
        }


        if(isset($_GET['pid'])){

            $arr=[
                "row_id"=>$this->_crd(),
                "p_id"=>$_GET['pid'],
                "s_id"=>$this->_sessionid,
                "qty"=>1
            ];

            $r=$this->medoo->select("t_cart","*",["p_id"=>$_GET['pid'],"s_id"=>$this->_sessionid]);
           // $r=$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid]);
            if(!empty($r)){
                $c=$this->medoo->update("t_cart",["qty[+]"=>1],["p_id"=>$_GET['pid'],"s_id"=>$this->_sessionid]);
                echo "<script>alert('Successfully Add');</script>";
            }else{
                $c=$this->medoo->insert("t_cart",$arr);
                echo "<script>alert('Successfully Add');</script>";
            }

           

        }

    }



    public function captcha()
    {     
        echo "sf";
        $this->load->helper('captcha');
        $r=rand(1111,9999);
            $vals = array(
                'word'          => $r,
                'img_path'      => './captcha/',
                'img_url'       => base_url("captcha/"),
                'font_path'     => '',
                'img_width'     => '100',
                'img_height'    => 30,
                'expiration'    => 600,
                'word_length'   => 4,
                'font_size'     => 25,
                'img_id'        => 'Imageid',
                'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
        
                // White background and border, black text and red grid
                'colors'        => array(
                        'background' => array(255, 255, 255),
                        'border' => array(255, 255, 255),
                        'text' => array(0, 0, 0),
                        'grid' => array(255, 40, 40)
                )
        );
      
        
        $cap =create_captcha($vals);
        print_r($cap);
		//$this->session->set_userdata(["usercaprcha"=>$cap]);

        //print_r( $this->session->userdata("usercaprcha")['image']);
        
    }
    public function index()
    { 
        $data1="";
        $m=1;
        if(isset($_POST['data'])){
         
            $this->load->database();
           
            $city=$_POST['city'];
            $c_type=$_POST['c_type'];
            $cat_opt=$_POST['cat_opt'];
    
            $this->db->select("row_id");
            $this->db->select("_banner");
            $this->db->select("city");
            $this->db->select("c_type");
            $this->db->select("cat_opt");
            $this->db->from('products2');
            $this->db->where('city', $city);
            $this->db->where('c_type', $c_type);
            $this->db->where('cat_opt', $cat_opt);
    
            $query = $this->db->get();
            $data1 = $query->result_array();
            
            // print_r($data1);
            }


        $r= $this->medoo->select("servicecate","*");
       
        $snav=[];
        $i=0;
        
        foreach($r as $v){
             $snav[$i++]=[
                 "name"=>$v['name'],
                 "_type"=>$v['p_type'],
                 "data"=> $this->medoo->select("products",["row_id","name"],["servicecate"=>$v['row_id']])
                 ];
        }
        
        
       // print_r($snav);
        $res=[          
            "snav"=>$snav, 
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
            "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid]),
            "cat_opt"=>$this->medoo->select("cat_opt","*"),
            "products2"=>$this->medoo->select("products2","*"),
            "r"=>$data1
        ];   
        $this->load->view('website/index',$res);
    }
    public function products()
    {     
        
        

        $r= $this->medoo->select("servicecate","*");
       
        $snav=[];
        $i=0;
        
        foreach($r as $v){
             $snav[$i++]=[
                 "name"=>$v['name'],
                 "_type"=>$v['p_type'],
                 "data"=> $this->medoo->select("products",["row_id","name"],["servicecate"=>$v['row_id']])
                 ];
        }
        
        
        $res=[          
            "snav"=>$snav, 
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
            "product"=>$this->medoo->select("products","*"),  
            "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid])
        ];   
        $this->load->view('website/products',$res);
    }
    public function viewproducts($id)
    {    
        
         $r= $this->medoo->select("servicecate","*");
       
        $snav=[];
        $i=0;
        
        foreach($r as $v){
             $snav[$i++]=[
                 "name"=>$v['name'],
                 "_type"=>$v['p_type'],
                 "data"=> $this->medoo->select("products",["row_id","name"],["servicecate"=>$v['row_id']])
                 ];
        }
        
        
        
        $res=[          
            "snav"=>$snav, 
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
            "product"=>$this->medoo->select("products","*",["row_id"=>$id]),  
            "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid])
        ];   
        $this->load->view('website/viewproducts',$res);
    }
    public function productcart()
    {   
        
        $r= $this->medoo->select("servicecate","*");
       
        $snav=[];
        $i=0;
        
        foreach($r as $v){
             $snav[$i++]=[
                 "name"=>$v['name'],
                 "_type"=>$v['p_type'],
                 "data"=> $this->medoo->select("products",["row_id","name"],["servicecate"=>$v['row_id']])
                 ];
        }
        
        
      

        $data=$this->medoo->select("t_cart", ["[>]products" => ["p_id"=>"row_id"],], [
			"products.id",	
			"products.row_id",	
			"products.wet_type",
			"products.name",			
			"products._weight",			
			"products._price",	
			"products._img",			
			"products._gst",			
			"t_cart.qty",],["s_id"=>$this->_sessionid]);

    if(!empty($data)){
        $res=[          
             "snav"=>$snav,   
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
            "product"=>$this->medoo->select("products","*"),  
            "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid]),
            "cartdata"=> $data,
        ];   
        $this->load->view('website/cart',$res);
    }else{
        redirect(site_url("Home"));
    }       
    }
    public function checkout()
    {   
        
        $r= $this->medoo->select("servicecate","*");
       
        $snav=[];
        $i=0;
        
        foreach($r as $v){
             $snav[$i++]=[
                 "name"=>$v['name'],
                 "_type"=>$v['p_type'],
                 "data"=> $this->medoo->select("products",["row_id","name"],["servicecate"=>$v['row_id']])
                 ];
        }
        
      
        $m=1;

        $qty=0;
        $t_amount=0;
        $data=$this->medoo->select("t_cart", ["[>]products" => ["p_id"=>"row_id"],], [
			"products.id",	
			"products.row_id",	
			"products.wet_type",
			"products.name",			
			"products._weight",			
			"products._price",	
			"products._img",			
			"products._gst",			
			"t_cart.qty",],["s_id"=>$this->_sessionid]);
          
        if(isset($_POST['save'])){
            foreach($data as  $v){ 

                $t_amount=$t_amount+$v['qty']*$v['_price'];
                $qty=$qty+$v['qty'];
            }

            $id=$this->_crd();
            $arr=[
                "row_id"=>$id,
                "name"=>$_POST['name'],
                "mobile"=>$_POST['mobile'],              
                "email"=>$_POST['email'],
                "_address"=>$_POST['_des'],
                "_city"=>$_POST['city'],
                "_state"=>$_POST['_state'],
                "_pincode"=>$_POST['_pincode'],
                "qty"=>$qty,
                "amount"=>$t_amount,
                "_gst"=>$t_amount*18/100,
                "item"=>json_encode($data,true),
                "o_date"=>date("Y-m-d"),
            ];
           $r= $this->medoo->insert("t_checkout",$arr); 
           if($r->rowCount()){
            @$this->medoo->delete("t_cart",["s_id"=>$this->_sessionid]);
            redirect(site_url("Order-success/".$id));
           }else{
            $m="Order Not place Try again";
           }
        }

      

    if(!empty($data)){
        $res=[          
             "snav"=>$snav,    
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
            "product"=>$this->medoo->select("products","*"),  
            "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid]),
            "cartdata"=> $data,
            "m"=>$m
        ];   
        $this->load->view('website/checkout',$res);
    }else{
        redirect(site_url("Home"));
    }

     
    }

    public function ordersuccess($id)
    {    
        
        $r= $this->medoo->select("servicecate","*");
       
        $snav=[];
        $i=0;
        
        foreach($r as $v){
             $snav[$i++]=[
                 "name"=>$v['name'],
                 "_type"=>$v['p_type'],
                 "data"=> $this->medoo->select("products",["row_id","name"],["servicecate"=>$v['row_id']])
                 ];
        }
        
        
        $res=[          
            "order"=>$this->medoo->select("t_checkout","*",["row_id"=>$id]), 
             "snav"=>$snav,   
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
            "brands"=>$this->medoo->select("brands","*"),  
            "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid])
        ]; 

        $this->load->view('website/ordersuccess',$res);
    }
    public function about()
    {    
        
        $r= $this->medoo->select("servicecate","*");
       
        $snav=[];
        $i=0;
        
        foreach($r as $v){
             $snav[$i++]=[
                 "name"=>$v['name'],
                 "_type"=>$v['p_type'],
                 "data"=> $this->medoo->select("products",["row_id","name"],["servicecate"=>$v['row_id']])
                 ];
        }
        
        
        $res=[          
              "snav"=>$snav,   
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
            "brands"=>$this->medoo->select("brands","*"),  
            "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid])
        ]; 

        $this->load->view('website/about',$res);
    }

    public function contact()
    {    
        
        $r= $this->medoo->select("servicecate","*");
       
        $snav=[];
        $i=0;
        
        foreach($r as $v){
             $snav[$i++]=[
                 "name"=>$v['name'],
                 "_type"=>$v['p_type'],
                 "data"=> $this->medoo->select("products",["row_id","name"],["servicecate"=>$v['row_id']])
                 ];
        }
        
        

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
             "snav"=>$snav,   
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]), 
            "m"=>$m ,
            "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid])
        ]; 
        $this->load->view('website/contact',$res);
    }

    public function ourteam()
    {   
        
        $r= $this->medoo->select("servicecate","*");
       
        $snav=[];
        $i=0;
        
        foreach($r as $v){
             $snav[$i++]=[
                 "name"=>$v['name'],
                 "_type"=>$v['p_type'],
                 "data"=> $this->medoo->select("products",["row_id","name"],["servicecate"=>$v['row_id']])
                 ];
        }
        
        
        $res=[          
            "snav"=>$snav,   
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
            "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid])
        ];      
        $this->load->view('website/ourteam',$res);
    }

    public function services()
    {    
        
        $r= $this->medoo->select("servicecate","*");
       
        $snav=[];
        $i=0;
        
        foreach($r as $v){
             $snav[$i++]=[
                 "name"=>$v['name'],
                 "_type"=>$v['p_type'],
                 "data"=> $this->medoo->select("products",["row_id","name"],["servicecate"=>$v['row_id']])
                 ];
        }
        
        
        $res=[          
             "snav"=>$snav,     
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]), 
            "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid]) 
        ];    
        $this->load->view('website/services',$res);
    }

    // public function blogs()
    // {

    // }

    public function gallery()
    {   
        
        $r= $this->medoo->select("servicecate","*");
       
        $snav=[];
        $i=0;
        
        foreach($r as $v){
             $snav[$i++]=[
                 "name"=>$v['name'],
                 "_type"=>$v['p_type'],
                 "data"=> $this->medoo->select("products",["row_id","name"],["servicecate"=>$v['row_id']])
                 ];
        }
        
        
        $res=[          
              "snav"=>$snav,   
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
            "gallery"=>$this->medoo->select("gallery","*"),  
            "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid])
        ]; 
        $this->load->view('website/gallery',$res);
    }

    public function blogs()
    {   
        
        
        $r= $this->medoo->select("servicecate","*");
       
        $snav=[];
        $i=0;
        
        foreach($r as $v){
             $snav[$i++]=[
                 "name"=>$v['name'],
                 "_type"=>$v['p_type'],
                 "data"=> $this->medoo->select("products",["row_id","name"],["servicecate"=>$v['row_id']])
                 ];
        }
        
        
        $res=[          
              "snav"=>$snav,   
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
            "gallery"=>$this->medoo->select("gallery","*"),  
            "products"=>$this->medoo->select("products","*"), 
            "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid])
        ]; 
		
        $this->load->view('website/blogs',$res);

    }

    public function cities()
    {    
        
        $r= $this->medoo->select("servicecate","*");
       
        $snav=[];
        $i=0;
        
        foreach($r as $v){
             $snav[$i++]=[
                 "name"=>$v['name'],
                 "_type"=>$v['p_type'],
                 "data"=> $this->medoo->select("products",["row_id","name"],["servicecate"=>$v['row_id']])
                 ];
        }
        
        
        $res=[          
             "snav"=>$snav,     
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
            "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid])
        ];     
        $this->load->view('website/cities',$res);
    }
    
 
    public function enquery()
    {   
        
        $r= $this->medoo->select("servicecate","*");
       
        $snav=[];
        $i=0;
        
        foreach($r as $v){
             $snav[$i++]=[
                 "name"=>$v['name'],
                 "_type"=>$v['p_type'],
                 "data"=> $this->medoo->select("products",["row_id","name"],["servicecate"=>$v['row_id']])
                 ];
        }
        
        
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
             "snav"=>$snav,     
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),
            "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid]),
            "m"=>$m  
        ];     
        $this->load->view('website/enquery',$res);
    }
   
    public function termiconservices()
    {   
        
        $r= $this->medoo->select("servicecate","*");
       
        $snav=[];
        $i=0;
        
        foreach($r as $v){
             $snav[$i++]=[
                 "name"=>$v['name'],
                 "_type"=>$v['p_type'],
                 "data"=> $this->medoo->select("products",["row_id","name"],["servicecate"=>$v['row_id']])
                 ];
        }
        
        $res=[          
             "snav"=>$snav,    
            "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
            "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
            "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid])
        ];   
        $this->load->view('website/termiconservices',$res);
    }
   
    public function viewservies($id)
    {    
        
        
        $r= $this->medoo->select("servicecate","*");
       
        $snav=[];
        $i=0;
        
        foreach($r as $v){
             $snav[$i++]=[
                 "name"=>$v['name'],
                 "_type"=>$v['p_type'],
                 "data"=> $this->medoo->select("products",["row_id","name"],["servicecate"=>$v['row_id']])
                 ];
        }
        
        
        
        $x=$this->medoo->select("services","*",["row_id"=>$id]);
        if(!empty($x)){
            $res=[          
                 "snav"=>$snav,   
                "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
                "bnav"=>$this->medoo->select("blogs",["row_id","_title"]), 
                "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid]), 
                "viewserives"=>$x[0]
            ];   
            $this->load->view('website/serviesview',$res);
        }else{
            $res=[          
                  "snav"=>$snav,    
                "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
                "bnav"=>$this->medoo->select("blogs",["row_id","_title"]), 
                "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid])              
            ];    
            $this->load->view('website/errorpage',$res);
        }
       
    }

    public function viewcites($id)
    {     
        
        $r= $this->medoo->select("servicecate","*");
       
        $snav=[];
        $i=0;
        
        foreach($r as $v){
             $snav[$i++]=[
                 "name"=>$v['name'],
                 "_type"=>$v['p_type'],
                 "data"=> $this->medoo->select("products",["row_id","name"],["servicecate"=>$v['row_id']])
                 ];
        }
        
        
        $x=$this->medoo->select("cities","*",["row_id"=>$id]);
        if(!empty($x)){
            $res=[          
                  "snav"=>$snav,     
                "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
                "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
                "viewserives"=>$x[0],
                "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid])
            ];   
            $this->load->view('website/citiesview',$res);
        }else{
            $res=[          
                 "snav"=>$snav,      
                "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
                "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
                "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid])
               
            ];    
            $this->load->view('website/errorpage',$res);
        }
    }


    public function viewblogs($id)
    {   
        
        $r= $this->medoo->select("servicecate","*");
       
        $snav=[];
        $i=0;
        
        foreach($r as $v){
             $snav[$i++]=[
                 "name"=>$v['name'],
                 "_type"=>$v['p_type'],
                 "data"=> $this->medoo->select("products",["row_id","name"],["servicecate"=>$v['row_id']])
                 ];
        }
        
        $x=$this->medoo->select("blogs","*",["row_id"=>$id]);
        if(!empty($x)){
            $res=[          
                  "snav"=>$snav,    
                "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
                "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
                "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid]),
                "viewserives"=>$x[0]
            ];   
            $this->load->view('website/viewblogs',$res);
        }else{
            $res=[          
                "snav"=>$snav,   
                "cnav"=>$this->medoo->select("cities",["row_id","_title"]),  
                "bnav"=>$this->medoo->select("blogs",["row_id","_title"]),  
                "cart"=>$this->medoo->select("t_cart","*",["s_id"=>$this->_sessionid])
               
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
    
    public function sign()
	{
		$this->load->view('Website/signin');
	}

    public function signin()
	{
        $this->load->database();
		$this->db->select("Email");
		$this->db->from('client_sign_in');
		$query = $this->db->get();
		$data = $query->result();
		if (isset($_POST['register'])) 
		{
			$Email = $_POST["Email"];
			$count = 0;
			for ($i = 0; $i < count($data); $i++) {
				if ($data[$i]->Email == $Email) {
					$count++;
				}
			}
			
			if($count>0)
			{
				echo "Duplicate Email";
			}
			// $this->load->library('session');
			else{
				$Row_Id = $this->_crd();
				$Name = $_POST["Name"];
				$Password = $_POST["Password"];
			// $Category = $_POST["Category"];
			
			
				$this->db->insert("client_sign_in", array("Row_Id" => $Row_Id, "Name" => $Name, "Email" => $Email, "Password" => $Password));
				redirect("WebsiteCon/Log");
                // redirect(site_url("Home"));
			}
			
		}
        else
        {
            echo "error";
        }
		// $this->load->view('Website/login');
	}

    public function log()
	{
		$this->load->view('website/login');
	}

    public function login()
	{
        $this->load->database();
        $this->load->library('session');
        $Email = $_POST["Email"];
        $Password = $_POST["Password"];

        $this->db->select("Row_Id");
        $this->db->select("Email");
        $this->db->select("Password");
        $this->db->select("Name");
        $this->db->from('client_sign_in');
        $this->db->where('Email', $Email);
        $this->db->where('Password', $Password);

        $query = $this->db->get();
        $data = $query->result();
        // echo $data[0]->email;
        // echo $data[0]->password;

        // $sessionData = array(
        // 	'totaltime' => $this->db->select("Row_Id"),
        // 	'title' => $this->db->select("Email")
        // 	'goals' => $meeting_goals
        // );


        if ($query->num_rows() > 0) {
            $this->session->set_userdata(array('Row_Id' => $data[0]->Row_Id));
            $this->session->set_userdata(array('Name' => $data[0]->Name));
            // $this->session->set_userdata(array('Row_Id' => $data[0]->Row_Id));
            // echo "asdasd";

            $this->load->view('admin/index');
        } else {
            $this->load->view('website/Log');
        }
		// $this->load->view('website/login');
	}
    public function Logout()
	{
		//removing session
		$this->load->library('session');
		$this->session->unset_userdata('client_sign_in');
		redirect("WebsiteCon/Log");
	}

    public function search()
    {

        $this->load->database();
        $val= $_POST["val"];
		$this->db->select("*");
		$this->db->from('products2');
        $this->db->where('cat_opt',$val);
		$query = $this->db->get();
		$data = array("data"=>$query->result());
        

        // echo $data [0]->name ;
        // echo $data [0]->row_id;
        // echo $data [0]->cat_opt;
        // echo $data [0]->client_id;
		$this->load->view('website/sale',$data);    

        // $this->load->helper(array('form', 'url'));
        // echo "yes";
        // $m="1";
        // $this->load->database();
        // $r= $this->medoo->select("products","*","where");
        // $m="yes successfully";
        // if (isset($_POST['sale']))
        // {
        //     $val => $_POST['val'];
        //     $val = $this->input->post('val');

        //     $this->load->view('website/sale',$val);
        //     echo $val;
        // }
    }


}


