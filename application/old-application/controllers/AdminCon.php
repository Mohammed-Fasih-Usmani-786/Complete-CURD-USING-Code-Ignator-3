<?php
defined('BASEPATH') or exit('No direct script access allowed');

error_reporting(-1);
ini_set('display_errors', 'On');
class AdminCon extends CI_Controller
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

        if (!$this->session->has_userdata("_admin")) {
            redirect(site_url("Admin/Login"));
        }else{
            $this->rowId=$this->session->userdata("_admin")['row_id'];
            $this->mobile=$this->session->userdata("_admin")['mobile'];
        }




        // print_r($_SESSION['_admin']);
        // exit;

    }


    public function logout()
    {
        session_destroy();
        redirect(site_url("Admin"));
    }

    public function index()
    {
        $res=[           
                
            "user"=>$this->medoo->count("user_enquery","*"),  
        ];
        $this->load->view('admin/index',$res);
    }

    public function customer()
    {
        $m=1;
        $res=[          
            "user"=>$this->medoo->select("user_enquery","*",["ORDER"=>["id"=>"DESC"]]),  
        ];
        $this->load->view('admin/customer',$res);
    }
    public function services()
    {
        $m=1;
        

        if(isset($_GET['del'])){
            $d=$this->medoo->select("services","*",["row_id"=>$_GET['del']]); 

            if(!empty($d)){
                @$this->medoo->delete("services",["row_id"=>$_GET['del']]); 
                unlink("./upload/".$d[0]['_img']);
                $m="Successfully Delete";
            }else{
                redirect(site_url("Admin/Blogs"));
            }
        }

        $res=[          
            "user"=>$this->medoo->select("services","*"),  
            "m"=>$m
        ];
        $this->load->view('admin/services',$res);
    }

    public function addservices()
    {
        $m=1;
        $this->load->helper(array('form', 'url'));

        
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;
        

        $this->load->library('upload', $config);

        if(isset($_POST['save'])){

                if ( ! $this->upload->do_upload('userfile'))
                {                    
                    $m = $this->upload->display_errors();                      
                }
                else
                {
                      $data = array('upload_data' => $this->upload->data('file_name'));

                         
                $arr=[
                    "row_id"=>$this->_crd(),                  
                    "_title"=>$_POST['_title'],
                    "_subtitle"=>$_POST['_subtitle'],
                    "_img"=>$data['upload_data'],
                    "_desr"=>$_POST['_desr'],
                   
                ];        
                $x=$this->medoo->insert("services",$arr);
             
                 if($x->rowCount()){       
                    $m="Successfully Added";
                }else{
                    $m="Error Again Try";
                }
            }

            
        }
            $res=[
                "user"=>"",
                "m"=>$m        
            ];
    
            $this->load->view('admin/addservices',$res);
        


       
    }
    public function updateservices($id)
    {
        $m=1;
        $this->load->helper(array('form', 'url'));

        
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;        

        $this->load->library('upload', $config);

        if(isset($_POST['save'])){

                if ( ! $this->upload->do_upload('userfile'))
                {                    
                    // $m = array('error' => $this->upload->display_errors()); 
                    $arr=[                                       
                        "_title"=>$_POST['_title'],
                        "_subtitle"=>$_POST['_subtitle'],                       
                        "_desr"=>$_POST['_desr'],                       
                    ];        
                    $x=$this->medoo->update("services",$arr,["row_id"=>$id]);
                 
                     if($x->rowCount()){       
                        $m="Successfully Update";
                    }else{
                        $m="Error Again Try";
                    }

                }
                else
                {
                    $data = array('upload_data' => $this->upload->data('file_name'));
                         
                $arr=[                           
                    "_title"=>$_POST['_title'],
                    "_subtitle"=>$_POST['_subtitle'],
                    "_img"=>$data['upload_data'],
                    "_desr"=>$_POST['_desr'],                   
                ];        
                $x=$this->medoo->update("services",$arr,["row_id"=>$id]);
             
                 if($x->rowCount()){       
                    $m="Successfully Update";
                }else{
                    $m="Error Again Try";
                }
            }

            
        }

        // $this->medoo->debug()->select("services","*",["row_id"=>$id]);
            $res=[
                "user"=>$this->medoo->select("services","*",["row_id"=>$id]),
                "m"=>$m  ,

            ];

            // print_r($res);
    
            $this->load->view('admin/addservices',$res);
        
       
    }
    public function blogs()
    {
        $m=1;

        if(isset($_GET['del'])){
            $d=$this->medoo->select("blogs","*",["row_id"=>$_GET['del']]); 

            if(!empty($d)){
                @$this->medoo->delete("blogs",["row_id"=>$_GET['del']]); 
                unlink("./upload/".$d[0]['_img']);
                $m="Successfully Delete";
            }else{
                redirect(site_url("Admin/Blogs"));
            }
        }


        $res=[          
            "user"=>$this->medoo->select("blogs","*"),  
            "m"=>$m
        ];
        $this->load->view('admin/blogs',$res);
    }

    public function addblogs()
    {
        $m=1;
        $this->load->helper(array('form', 'url'));

        
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;
        

        $this->load->library('upload', $config);

        if(isset($_POST['save'])){

                if ( ! $this->upload->do_upload('userfile'))
                {                    
                     $m = $this->upload->display_errors();                      
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data('file_name'));

                         
                $arr=[
                    "row_id"=>$this->_crd(),                  
                    "_title"=>$_POST['_title'],
                    "_subtitle"=>$_POST['_subtitle'],
                    "_img"=>$data['upload_data'],
                    "_desr"=>$_POST['_desr'],
                   
                ];        
                $x=$this->medoo->insert("blogs",$arr);
             
                 if($x->rowCount()){       
                    $m="Successfully Added";
                }else{
                    $m="Error Again Try";
                }
            }

            
        }
            $res=[
                "user"=>"",
                "m"=>$m        
            ];
    
            $this->load->view('admin/addblogs',$res);
        


       
    }
    public function updateblogs($id)
    {
        $m=1;
        $this->load->helper(array('form', 'url'));

        
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;        

        $this->load->library('upload', $config);

        if(isset($_POST['save'])){

                if ( ! $this->upload->do_upload('userfile'))
                {                    
                    // $m = array('error' => $this->upload->display_errors()); 
                    $arr=[                                       
                        "_title"=>$_POST['_title'],
                        "_subtitle"=>$_POST['_subtitle'],                       
                        "_desr"=>$_POST['_desr'],                       
                    ];        
                    $x=$this->medoo->update("blogs",$arr,["row_id"=>$id]);
                 
                     if($x->rowCount()){       
                        $m="Successfully Update";
                    }else{
                        $m="Error Again Try";
                    }

                }
                else
                {
                    $data = array('upload_data' => $this->upload->data('file_name'));
                         
                $arr=[                           
                    "_title"=>$_POST['_title'],
                    "_subtitle"=>$_POST['_subtitle'],
                    "_img"=>$data['upload_data'],
                    "_desr"=>$_POST['_desr'],                   
                ];        
                $x=$this->medoo->update("blogs",$arr,["row_id"=>$id]);
             
                 if($x->rowCount()){       
                    $m="Successfully Update";
                }else{
                    $m="Error Again Try";
                }
            }

            
        }

        // $this->medoo->debug()->select("services","*",["row_id"=>$id]);
            $res=[
                "user"=>$this->medoo->select("blogs","*",["row_id"=>$id]),
                "m"=>$m  ,

            ];

            // print_r($res);
    
            $this->load->view('admin/addblogs',$res);
        
       
    }





    public function slider()
    {
        $m=1;

        if(isset($_GET['del'])){
            $d=$this->medoo->select("slider","*",["row_id"=>$_GET['del']]); 

            if(!empty($d)){
                @$this->medoo->delete("slider",["row_id"=>$_GET['del']]); 
                unlink("./slider/".$d[0]['_img']);
                $m="Successfully Delete";
            }else{
                redirect(site_url("Admin/Slider"));
            }
        }

        $res=[          
            "user"=>$this->medoo->select("slider","*"),  
            "m"=>$m
        ];
        $this->load->view('admin/slider',$res);
    }

    public function addslider()
    {
        $m=1;
        $this->load->helper(array('form', 'url'));

        
        $config['upload_path'] = './slider/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;
        

        $this->load->library('upload', $config);

        if(isset($_POST['save'])){

                if ( ! $this->upload->do_upload('userfile'))
                {                    
                     $m = $this->upload->display_errors();                      
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data('file_name'));

                    $arr=[
                        "row_id"=>$this->_crd(),                  
                        "_title"=>$_POST['_title'],                   
                        "_img"=>$data['upload_data'],            
                    ];        
                    $x=$this->medoo->insert("slider",$arr);
             
                 if($x->rowCount()){       
                    $m="Successfully Added";
                }else{
                    $m="Error Again Try";
                }
            }

            
        }
            $res=[
                "user"=>"",
                "m"=>$m        
            ];
    
            $this->load->view('admin/addslider',$res);
        


       
    }
    public function updateslider($id)
    {
        $m=1;
        $this->load->helper(array('form', 'url'));
        
        $config['upload_path'] = './slider/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;        

        $this->load->library('upload', $config);

        if(isset($_POST['save'])){

                if ( ! $this->upload->do_upload('userfile'))
                {                    
                    // $m = array('error' => $this->upload->display_errors()); 
                    $arr=[                                       
                        "_title"=>$_POST['_title'],                                              
                    ];        
                    $x=$this->medoo->update("slider",$arr,["row_id"=>$id]);
                 
                     if($x->rowCount()){       
                        $m="Successfully Update";
                    }else{
                        $m="Error Again Try";
                    }

                }
                else
                {
                    $data = array('upload_data' => $this->upload->data('file_name'));
                         
                $arr=[                           
                    "_title"=>$_POST['_title'],                    
                    "_img"=>$data['upload_data'],                                 
                ];        
                $x=$this->medoo->update("slider",$arr,["row_id"=>$id]);
             
                 if($x->rowCount()){       
                    $m="Successfully Update";
                }else{
                    $m="Error Again Try";
                }
            }

            
        }

        // $this->medoo->debug()->select("services","*",["row_id"=>$id]);
            $res=[
                "user"=>$this->medoo->select("slider","*",["row_id"=>$id]),
                "m"=>$m  ,
            ];
            // print_r($res);    
            $this->load->view('admin/addslider',$res);       
       
    }



    
    public function brandcion()
    {
        $m=1;

        if(isset($_GET['del'])){
            $d=$this->medoo->select("brands","*",["row_id"=>$_GET['del']]); 

            if(!empty($d)){
                @$this->medoo->delete("brands",["row_id"=>$_GET['del']]); 
                unlink("./brands/".$d[0]['_img']);
                $m="Successfully Delete";
            }else{
                redirect(site_url("Admin/brandcion"));
            }
        }

        $res=[          
            "user"=>$this->medoo->select("brands","*"),  
            "m"=>$m
        ];
        $this->load->view('admin/brandcion',$res);
    }

    public function addbrandcion()
    {
        $m=1;
        $this->load->helper(array('form', 'url'));

        
        $config['upload_path'] = './brands/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;
        

        $this->load->library('upload', $config);

        if(isset($_POST['save'])){

                if ( ! $this->upload->do_upload('userfile'))
                {                    
                     $m = $this->upload->display_errors();                      
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data('file_name'));

                    $arr=[
                        "row_id"=>$this->_crd(),                  
                        "_title"=>$_POST['_title'],                   
                        "_img"=>$data['upload_data'],            
                    ];        
                    $x=$this->medoo->insert("brands",$arr);
             
                 if($x->rowCount()){       
                    $m="Successfully Added";
                }else{
                    $m="Error Again Try";
                }
            }

            
        }
            $res=[
                "user"=>"",
                "m"=>$m        
            ];
    
            $this->load->view('admin/addbrandcion',$res);
        


       
    }
    public function updatebrandcion($id)
    {
        $m=1;
        $this->load->helper(array('form', 'url'));
        
        $config['upload_path'] = './brands/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;        

        $this->load->library('upload', $config);

        if(isset($_POST['save'])){

                if ( ! $this->upload->do_upload('userfile'))
                {                    
                    // $m = array('error' => $this->upload->display_errors()); 
                    $arr=[                                       
                        "_title"=>$_POST['_title'],                                              
                    ];        
                    $x=$this->medoo->update("brands",$arr,["row_id"=>$id]);
                 
                    if($x->rowCount()){       
                        $m="Successfully Update";
                    }else{
                        $m="Error Again Try";
                    }

                }
                else
                {
                    $data = array('upload_data' => $this->upload->data('file_name'));
                         
                $arr=[                           
                    "_title"=>$_POST['_title'],                    
                    "_img"=>$data['upload_data'],                                 
                ];        
                $x=$this->medoo->update("brands",$arr,["row_id"=>$id]);
             
                 if($x->rowCount()){       
                    $m="Successfully Update";
                }else{
                    $m="Error Again Try";
                }
            }

            
        }

            //$this->medoo->debug()->select("services","*",["row_id"=>$id]);
                $res=[
                    "user"=>$this->medoo->select("brands","*",["row_id"=>$id]),
                    "m"=>$m  ,
                ];
            // print_r($res);    
            $this->load->view('admin/addbrandcion',$res);       
       
    }

    public function gallery()
    {
        $m=1;

        if(isset($_GET['del'])){
            $d=$this->medoo->select("gallery","*",["row_id"=>$_GET['del']]); 

            if(!empty($d)){
                @$this->medoo->delete("gallery",["row_id"=>$_GET['del']]); 
                unlink("./_gallery/".$d[0]['_img']);
                $m="Successfully Delete";
            }else{
                redirect(site_url("Admin/Gallery"));
            }
        }

        $res=[          
            "user"=>$this->medoo->select("gallery","*"),  
            "m"=>$m
        ];
        $this->load->view('admin/gallery',$res);
    }

    public function addgallery()
    {
        $m=1;
        $this->load->helper(array('form', 'url'));

        
        $config['upload_path'] = './_gallery/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;
        

        $this->load->library('upload', $config);

        if(isset($_POST['save'])){

                if ( ! $this->upload->do_upload('userfile'))
                {                    
                     $m = $this->upload->display_errors();                      
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data('file_name'));

                    $arr=[
                        "row_id"=>$this->_crd(),                  
                        "_title"=>$_POST['_title'],                   
                        "_img"=>$data['upload_data'],            
                    ];        
                    $x=$this->medoo->insert("gallery",$arr);
             
                 if($x->rowCount()){       
                    $m="Successfully Added";
                }else{
                    $m="Error Again Try";
                }
            }

            
        }
            $res=[
                "user"=>"",
                "m"=>$m        
            ];
    
            $this->load->view('admin/addgallery',$res);
        


       
    }
    public function updategallery($id)
    {
        $m=1;
        $this->load->helper(array('form', 'url'));
        
        $config['upload_path'] = './_gallery/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;        

        $this->load->library('upload', $config);

        if(isset($_POST['save'])){

                if ( ! $this->upload->do_upload('userfile'))
                {                    
                    // $m = array('error' => $this->upload->display_errors()); 
                    $arr=[                                       
                        "_title"=>$_POST['_title'],                                              
                    ];        
                    $x=$this->medoo->update("gallery",$arr,["row_id"=>$id]);
                 
                    if($x->rowCount()){       
                        $m="Successfully Update";
                    }else{
                        $m="Error Again Try";
                    }

                }
                else
                {
                    $data = array('upload_data' => $this->upload->data('file_name'));
                         
                $arr=[                           
                    "_title"=>$_POST['_title'],                    
                    "_img"=>$data['upload_data'],                                 
                ];        
                $x=$this->medoo->update("gallery",$arr,["row_id"=>$id]);
             
                 if($x->rowCount()){       
                    $m="Successfully Update";
                }else{
                    $m="Error Again Try";
                }
            }

            
        }

            //$this->medoo->debug()->select("services","*",["row_id"=>$id]);
                $res=[
                    "user"=>$this->medoo->select("gallery","*",["row_id"=>$id]),
                    "m"=>$m  ,
                ];
            // print_r($res);    
            $this->load->view('admin/addgallery',$res);       
       
    }



    public function cities()
    {
        $m=1;
        

        if(isset($_GET['del'])){
            $d=$this->medoo->select("cities","*",["row_id"=>$_GET['del']]); 

            if(!empty($d)){
                @$this->medoo->delete("cities",["row_id"=>$_GET['del']]); 
                unlink("./upload/".$d[0]['_img']);
                $m="Successfully Delete";
            }else{
                redirect(site_url("Admin/Cities"));
            }
        }

        $res=[          
            "user"=>$this->medoo->select("cities","*"),  
            "m"=>$m
        ];
        $this->load->view('admin/cities',$res);
    }

    public function addcities()
    {
        $m=1;
        $this->load->helper(array('form', 'url'));

        
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;
        

        $this->load->library('upload', $config);

        if(isset($_POST['save'])){

                if ( ! $this->upload->do_upload('userfile'))
                {                    
                    $m = $this->upload->display_errors();                      
                }
                else
                {
                      $data = array('upload_data' => $this->upload->data('file_name'));

                         
                $arr=[
                    "row_id"=>$this->_crd(),                  
                    "_title"=>$_POST['_title'],
                    "_subtitle"=>$_POST['_subtitle'],
                    "_img"=>$data['upload_data'],
                    "_desr"=>$_POST['_desr'],
                   
                ];        
                $x=$this->medoo->insert("cities",$arr);
             
                 if($x->rowCount()){       
                    $m="Successfully Added";
                }else{
                    $m="Error Again Try";
                }
            }

            
        }
            $res=[
                "user"=>"",
                "m"=>$m        
            ];
    
            $this->load->view('admin/addcities',$res);
        


       
    }
    public function updatecities($id)
    {
        $m=1;
        $this->load->helper(array('form', 'url'));

        
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;        

        $this->load->library('upload', $config);

        if(isset($_POST['save'])){

                if ( ! $this->upload->do_upload('userfile'))
                {                    
                    // $m = array('error' => $this->upload->display_errors()); 
                    $arr=[                                       
                        "_title"=>$_POST['_title'],
                        "_subtitle"=>$_POST['_subtitle'],                       
                        "_desr"=>$_POST['_desr'],                       
                    ];        
                    $x=$this->medoo->update("cities",$arr,["row_id"=>$id]);
                 
                     if($x->rowCount()){       
                        $m="Successfully Update";
                    }else{
                        $m="Error Again Try";
                    }

                }
                else
                {
                    $data = array('upload_data' => $this->upload->data('file_name'));
                         
                $arr=[                           
                    "_title"=>$_POST['_title'],
                    "_subtitle"=>$_POST['_subtitle'],
                    "_img"=>$data['upload_data'],
                    "_desr"=>$_POST['_desr'],                   
                ];        
                $x=$this->medoo->update("cities",$arr,["row_id"=>$id]);
             
                 if($x->rowCount()){       
                    $m="Successfully Update";
                }else{
                    $m="Error Again Try";
                }
            }

            
        }

        // $this->medoo->debug()->select("services","*",["row_id"=>$id]);
            $res=[
                "user"=>$this->medoo->select("cities","*",["row_id"=>$id]),
                "m"=>$m  ,

            ];

            // print_r($res);
    
            $this->load->view('admin/addcities',$res);
        
       
    }






    public function _crd()
    {
        $str = "";
        $length = 10;
        $characters = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        $date = date("Ym");
        $t = time();
        $r = $date . $str . $t;
        return $r;
    }





}