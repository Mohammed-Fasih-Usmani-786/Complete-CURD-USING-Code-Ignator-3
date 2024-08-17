<?php
defined('BASEPATH') or exit('No direct script access allowed');

error_reporting(-1);
ini_set('display_errors', 'On');

class AdminDash extends CI_Controller
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
        $this->load->library('mylib');

        date_default_timezone_set("Asia/Kolkata");

        if (!$this->session->has_userdata("_admin")) {
            redirect(site_url("Admin/Login"));
        } else {
                $this->rowId = $this->session->userdata("_admin")['name'];
                // $this->mobile = $this->session->userdata("_admin")['Email'];
                // $this->mobile = $this->session->userdata("_admin")['Id'];
            
        }

        // print_r($_SESSION['_admin']['name']);
        // print_r($_SESSION['_admin']);
        // exit;

    }


    public function logout()
    {
        session_destroy();
        redirect(site_url("Adminpanal"));
    }

    // admin index function -----------------------------------------------------------------------------
    public function index()
    {
        $res = [
            "user" => $this->medoo->count("user_enquery", "*"),
        ];
        
        $this->load->view('admin/index', $res);
    }

    
    public function customer()
    {
        $m = 1;
        if (isset($_GET['del'])) {
            $r = $this->medoo->delete("user_enquery", ["row_id" => $_GET['del']]);
            if ($r->rowCount()) {
                $m = "Row has been deleted";
            } else {
                $m = "Already deleted";
            }
        }

        $res = [
            "m" => $m,
            "user" => $this->medoo->select("user_enquery", "*", ["ORDER" => ["id" => "DESC"]]),
        ];
        $this->load->view('admin/customer', $res);
    }
    public function viewenquiery($id)
    {
        $r = $this->medoo->select("user_enquery", "*", ["row_id" => $id]);
        if (!empty($r)) {

            // print_r();
            $m = 1;
            $res = [
                "user" => $r[0],
            ];
            $this->load->view('admin/viewenquiery', $res);
        } else {
            redirect(site_url("Admin"));
        }
    }


    public function getcate($id)
    {

        $d = $this->medoo->select("servicecate", "*", ["p_type" => $id]);

        $str = "<option value='' selected disabled>";
        if (!empty($d)) {

            foreach ($d as $v) {
                $str = $str . "<option value='" . $v['row_id'] . "'>" . $v['name'] . "</option>";
            }
        }
        echo $str;
    }

    public function getcate1($str, $id)
    {
        echo $str;
        echo $id;
        // $arr = [];
        // switch ($str) {
        //     case "tariff":
        //         $court = $this->medoo->select("c_type", "*", ["id" => $id]);

        //         $str1 = "";
        //         foreach ($court as $v) {
        //             $str1 = $str1 . "<option value='" . $v['name'] . "'>" . $v['name'] . "</option>";
        //         }

        //         $res = '<div class="col-sm-4">
        //             <div class="form-group">
        //                 <label for="tariff">Tariff</label>
        //                 <select class="form-control" name="tariff" id="tariff">
        //                     <option selected disabled>Select Tariff</option>' . $str1 . '
        //                 </select>
        //             </div>
        //         </div>';
        //         break;
        // }

        // $d=$this->medoo->select("c_type","*",["id"=>$id]);
        // $d=$this->medoo->select("c_type","*",["name"=>$id); 

        //     $str="<option value='' selected disabled>";
        //     if(!empty($d)){

        //         foreach($d as $v){
        //             $str=$str."<option value='".$v['row_id']."'>".$v['name']."</option>";
        //         }

        //     }
        //   echo $str;
    }

    public function uploadimage()
    {
        $m = 1;

        $res = [
            // "user"=>$this->medoo->select("services","*"),  
            "m" => $m
        ];


        if (isset($_POST['save'])) {

            echo "<pre>";
            print_r($_FILES);


            // foreach($_FILES['dd'] as $k=>$v){
            //     echo "_".$k;

            // }

            $d = $this->mylib->multiplefiles($_FILES['dd'], "myfile/");
            //  $d=$this->mylib->uploadImage($this->mylib->createRandemId(),$datafiles,"myfile/");

            print_r($d);
            // $d=$this->medoo->select("services","*",["row_id"=>$_GET['del']]); 

            // if(!empty($d)){
            //     @$this->medoo->delete("services",["row_id"=>$_GET['del']]); 
            //     unlink("./upload/".$d[0]['_img'])
            //     $m="Successfully Delete";
            // }else{
            //     redirect(site_url("Admin/Blogs"));
            // }
        } else {
            $this->load->view('admin/uploadimage', $res);
        }
    }

    public function services()
    {
        $m = 1;


        if (isset($_GET['del'])) {
            $d = $this->medoo->select("services", "*", ["row_id" => $_GET['del']]);

            if (!empty($d)) {
                @$this->medoo->delete("services", ["row_id" => $_GET['del']]);
                unlink("./upload/" . $d[0]['_img']);
                $m = "Successfully Delete";
            } else {
                redirect(site_url("Admin/Blogs"));
            }
        }

        $res = [
            "user" => $this->medoo->select("services", "*"),
            "m" => $m
        ];
        $this->load->view('admin/services', $res);
    }

    public function addservices()
    {

        // $d=$this->mylib->multiplefiles($_FILES['dd'],"myfile/");
        $m = 1;
        $this->load->helper(array('form', 'url'));


        $config['upload_path'] = './_services/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '4000';
        $config['max_width'] = '4000';
        $config['max_height'] = '4000';
        $config['max_height'] = '4000';
        $config['encrypt_name'] = TRUE;


        $this->load->library('upload', $config);

        if (isset($_POST['save'])) {
            // echo "<pre>";
            // print_r($_POST);
            // print_r(count($_POST));
            // print_r($_FILES);

            $img1 = "";
            $img2 = "";
            $img3 = "";
            $img4 = "";
            $img5 = "";
            $img6 = "";



            if ($this->upload->do_upload('img1')) {
                $data = array('upload_data' => $this->upload->data('file_name'));
                $img1 = $data['upload_data'];
            }
            if ($this->upload->do_upload('img2')) {
                $data = array('upload_data' => $this->upload->data('file_name'));
                $img2 = $data['upload_data'];
            }
            if ($this->upload->do_upload('img3')) {
                $data = array('upload_data' => $this->upload->data('file_name'));
                $img3 = $data['upload_data'];
            }
            if ($this->upload->do_upload('img4')) {
                $data = array('upload_data' => $this->upload->data('file_name'));
                $img4 = $data['upload_data'];
            }
            if ($this->upload->do_upload('img5')) {
                $data = array('upload_data' => $this->upload->data('file_name'));
                $img5 = $data['upload_data'];
            }
            if ($this->upload->do_upload('img6')) {
                $data = array('upload_data' => $this->upload->data('file_name'));
                $img6 = $data['upload_data'];
            }

            // $img1;
            // $img2;
            // $img3;
            // $img4;
            // $img5;


            $arr = [
                "row_id" => $this->mylib->createRandemId(),
                "_img1" => $img1,
                "_img2" => $img2,
                "_img3" => $img3,
                "_img4" => $img4,
                "_img5" => $img5,
                "_img6" => $img6,
                "_title" => $_POST['stitle'],
                "_subtitle" => $_POST['subtitle'],
                "title1" => $_POST['title1'],
                "title2" => $_POST['title2'],
                "title11" => $_POST['title11'],
                "title12" => $_POST['title12'],
                "title13" => $_POST['title13'],
                "des1" => $_POST['des1'],
                "des2" => $_POST['des2'],
                "des3" => $_POST['des3'],
                "des11" => $_POST['des11'],
                "des12" => $_POST['des12'],
                "des13" => $_POST['des13'],
                "_type" => $_POST['_type'],
                "title3" => $_POST['title3'],
                "des4" => $_POST['des4'],
                "servicecate" => $_POST['servicecate'],
            ];

            $x = $this->medoo->insert("services", $arr);

            if ($x->rowCount()) {
                $m = "Successfully Added";
            } else {
                $m = "Error Again Try";
            }


            // $arr=[
            //     "row_id"=>$this->_crd(),                  
            //     "_title"=>$_POST['_title'],
            //     "_subtitle"=>$_POST['_subtitle'],
            //     "_img"=>$data['upload_data'],
            //     "_desr"=>$_POST['_desr'],
            //     "_type"=>$_POST['_type'],
            // ];        
            // $x=$this->medoo->insert("services",$arr);

            //  if($x->rowCount()){       
            //     $m="Successfully Added";
            // }else{
            //     $m="Error Again Try";
            // }



        }
        $res = [
            "user" => "",
            "m" => $m

        ];

        $this->load->view('admin/addservices', $res);
    }
    public function updateservices($id)
    {
        $m = 1;
        $this->load->helper(array('form', 'url'));


        $config['upload_path'] = './_services/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if (isset($_POST['save'])) {
            $r = $this->medoo->select("services", "*", ["row_id" => $id]);

            $img1 = $r[0]['_img1'];
            $img2 = $r[0]['_img2'];
            $img3 = $r[0]['_img3'];
            $img4 = $r[0]['_img4'];
            $img5 = $r[0]['_img5'];
            $img6 = $r[0]['_img6'];



            if ($this->upload->do_upload('img1')) {
                $data = array('upload_data' => $this->upload->data('file_name'));
                $img1 = $data['upload_data'];
            }
            if ($this->upload->do_upload('img2')) {
                $data = array('upload_data' => $this->upload->data('file_name'));
                $img2 = $data['upload_data'];
            }
            if ($this->upload->do_upload('img3')) {
                $data = array('upload_data' => $this->upload->data('file_name'));
                $img3 = $data['upload_data'];
            }
            if ($this->upload->do_upload('img4')) {
                $data = array('upload_data' => $this->upload->data('file_name'));
                $img4 = $data['upload_data'];
            }
            if ($this->upload->do_upload('img5')) {
                $data = array('upload_data' => $this->upload->data('file_name'));
                $img5 = $data['upload_data'];
            }
            if ($this->upload->do_upload('img6')) {
                $data = array('upload_data' => $this->upload->data('file_name'));
                $img6 = $data['upload_data'];
            }


            $arr = [

                "_img1" => $img1,
                "_img2" => $img2,
                "_img3" => $img3,
                "_img4" => $img4,
                "_img6" => $img6,
                "_img5" => $img5,
                "_title" => $_POST['stitle'],
                "_subtitle" => $_POST['subtitle'],
                "title1" => $_POST['title1'],
                "title3" => $_POST['title3'],
                "des4" => $_POST['des4'],
                "title2" => $_POST['title2'],
                "title11" => $_POST['title11'],
                "title12" => $_POST['title12'],
                "title13" => $_POST['title13'],
                "des1" => $_POST['des1'],
                "des2" => $_POST['des2'],
                "des3" => $_POST['des3'],
                "des11" => $_POST['des11'],
                "des12" => $_POST['des12'],
                "des13" => $_POST['des13'],
                "_type" => $_POST['_type'],
                "servicecate" => $_POST['servicecate'],
            ];

            $x = $this->medoo->update("services", $arr, ["row_id" => $id]);

            if ($x->rowCount()) {
                $m = "Successfully Added";
            } else {
                $m = "Error Again Try";
            }
        }

        // $this->medoo->debug()->select("services","*",["row_id"=>$id]);
        $r = $this->medoo->select("services", "*", ["row_id" => $id]);
        $res = [
            "service" => $r[0],
            "m" => $m,
            "ss" => $this->medoo->select("servicecate", "*", ["p_type" => $r[0]['_type']])

        ];

        // print_r($res);

        $this->load->view('admin/updateservices', $res);
    }

    public function blogs()
    {
        $m = 1;

        if (isset($_GET['del'])) {
            $d = $this->medoo->select("blogs", "*", ["row_id" => $_GET['del']]);

            if (!empty($d)) {
                @$this->medoo->delete("blogs", ["row_id" => $_GET['del']]);
                unlink("./upload/" . $d[0]['_img']);
                $m = "Successfully Delete";
            } else {
                redirect(site_url("Admin/Blogs"));
            }
        }


        $res = [
            "user" => $this->medoo->select("blogs", "*"),
            "m" => $m
        ];
        $this->load->view('admin/blogs', $res);
    }

    public function addblogs()
    {
        $m = 1;
        $this->load->helper(array('form', 'url'));


        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;


        $this->load->library('upload', $config);

        if (isset($_POST['save'])) {

            if (!$this->upload->do_upload('userfile')) {
                $m = $this->upload->display_errors();
            } else {
                $data = array('upload_data' => $this->upload->data('file_name'));


                $arr = [
                    "row_id" => $this->_crd(),
                    "_title" => $_POST['_title'],
                    "_subtitle" => $_POST['_subtitle'],
                    "_img" => $data['upload_data'],
                    "_desr" => $_POST['_desr'],

                ];
                $x = $this->medoo->insert("blogs", $arr);

                if ($x->rowCount()) {
                    $m = "Successfully Added";
                } else {
                    $m = "Error Again Try";
                }
            }
        }
        $res = [
            "user" => "",
            "m" => $m
        ];

        $this->load->view('admin/addblogs', $res);
    }
    public function updateblogs($id)
    {
        $m = 1;
        $this->load->helper(array('form', 'url'));


        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if (isset($_POST['save'])) {

            if (!$this->upload->do_upload('userfile')) {
                // $m = array('error' => $this->upload->display_errors()); 
                $arr = [
                    "_title" => $_POST['_title'],
                    "_subtitle" => $_POST['_subtitle'],
                    "_desr" => $_POST['_desr'],
                ];
                $x = $this->medoo->update("blogs", $arr, ["row_id" => $id]);

                if ($x->rowCount()) {
                    $m = "Successfully Update";
                } else {
                    $m = "Error Again Try";
                }
            } else {
                $data = array('upload_data' => $this->upload->data('file_name'));

                $arr = [
                    "_title" => $_POST['_title'],
                    "_subtitle" => $_POST['_subtitle'],
                    "_img" => $data['upload_data'],
                    "_desr" => $_POST['_desr'],
                ];
                $x = $this->medoo->update("blogs", $arr, ["row_id" => $id]);

                if ($x->rowCount()) {
                    $m = "Successfully Update";
                } else {
                    $m = "Error Again Try";
                }
            }
        }

        // $this->medoo->debug()->select("services","*",["row_id"=>$id]);
        $res = [
            "user" => $this->medoo->select("blogs", "*", ["row_id" => $id]),
            "m" => $m,

        ];

        // print_r($res);

        $this->load->view('admin/addblogs', $res);
    }





    public function slider()
    {
        $m = 1;

        if (isset($_GET['del'])) {
            $d = $this->medoo->select("slider", "*", ["row_id" => $_GET['del']]);

            if (!empty($d)) {
                @$this->medoo->delete("slider", ["row_id" => $_GET['del']]);
                unlink("./slider/" . $d[0]['_img']);
                $m = "Successfully Delete";
            } else {
                redirect(site_url("Admin/Slider"));
            }
        }

        $res = [
            "user" => $this->medoo->select("slider", "*"),
            "m" => $m
        ];
        $this->load->view('admin/slider', $res);
    }

    public function addslider()
    {
        $m = 1;
        $this->load->helper(array('form', 'url'));


        $config['upload_path'] = './slider/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;


        $this->load->library('upload', $config);

        if (isset($_POST['save'])) {

            if (!$this->upload->do_upload('userfile')) {
                $m = $this->upload->display_errors();
            } else {
                $data = array('upload_data' => $this->upload->data('file_name'));

                $arr = [
                    "row_id" => $this->_crd(),
                    "_title" => $_POST['_title'],
                    "_img" => $data['upload_data'],
                ];
                $x = $this->medoo->insert("slider", $arr);

                if ($x->rowCount()) {
                    $m = "Successfully Added";
                } else {
                    $m = "Error Again Try";
                }
            }
        }
        $res = [
            "user" => "",
            "m" => $m
        ];

        $this->load->view('admin/addslider', $res);
    }
    public function updateslider($id)
    {
        $m = 1;
        $this->load->helper(array('form', 'url'));

        $config['upload_path'] = './slider/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if (isset($_POST['save'])) {

            if (!$this->upload->do_upload('userfile')) {
                // $m = array('error' => $this->upload->display_errors()); 
                $arr = [
                    "_title" => $_POST['_title'],
                ];
                $x = $this->medoo->update("slider", $arr, ["row_id" => $id]);

                if ($x->rowCount()) {
                    $m = "Successfully Update";
                } else {
                    $m = "Error Again Try";
                }
            } else {
                $data = array('upload_data' => $this->upload->data('file_name'));

                $arr = [
                    "_title" => $_POST['_title'],
                    "_img" => $data['upload_data'],
                ];
                $x = $this->medoo->update("slider", $arr, ["row_id" => $id]);

                if ($x->rowCount()) {
                    $m = "Successfully Update";
                } else {
                    $m = "Error Again Try";
                }
            }
        }

        // $this->medoo->debug()->select("services","*",["row_id"=>$id]);
        $res = [
            "user" => $this->medoo->select("slider", "*", ["row_id" => $id]),
            "m" => $m,
        ];
        // print_r($res);    
        $this->load->view('admin/addslider', $res);
    }




    public function brandcion()
    {
        $m = 1;

        if (isset($_GET['del'])) {
            $d = $this->medoo->select("brands", "*", ["row_id" => $_GET['del']]);

            if (!empty($d)) {
                @$this->medoo->delete("brands", ["row_id" => $_GET['del']]);
                unlink("./brands/" . $d[0]['_img']);
                $m = "Successfully Delete";
            } else {
                redirect(site_url("Admin/brandcion"));
            }
        }

        $res = [
            "user" => $this->medoo->select("brands", "*"),
            "m" => $m
        ];
        $this->load->view('admin/brandcion', $res);
    }

    public function addbrandcion()
    {
        $m = 1;
        $this->load->helper(array('form', 'url'));


        $config['upload_path'] = './brands/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;


        $this->load->library('upload', $config);

        if (isset($_POST['save'])) {

            if (!$this->upload->do_upload('userfile')) {
                $m = $this->upload->display_errors();
            } else {
                $data = array('upload_data' => $this->upload->data('file_name'));

                $arr = [
                    "row_id" => $this->_crd(),
                    "_title" => $_POST['_title'],
                    "_img" => $data['upload_data'],
                ];
                $x = $this->medoo->insert("brands", $arr);

                if ($x->rowCount()) {
                    $m = "Successfully Added";
                } else {
                    $m = "Error Again Try";
                }
            }
        }
        $res = [
            "user" => "",
            "m" => $m
        ];

        $this->load->view('admin/addbrandcion', $res);
    }
    public function updatebrandcion($id)
    {
        $m = 1;
        $this->load->helper(array('form', 'url'));

        $config['upload_path'] = './brands/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if (isset($_POST['save'])) {

            if (!$this->upload->do_upload('userfile')) {
                // $m = array('error' => $this->upload->display_errors()); 
                $arr = [
                    "_title" => $_POST['_title'],
                ];
                $x = $this->medoo->update("brands", $arr, ["row_id" => $id]);

                if ($x->rowCount()) {
                    $m = "Successfully Update";
                } else {
                    $m = "Error Again Try";
                }
            } else {
                $data = array('upload_data' => $this->upload->data('file_name'));

                $arr = [
                    "_title" => $_POST['_title'],
                    "_img" => $data['upload_data'],
                ];
                $x = $this->medoo->update("brands", $arr, ["row_id" => $id]);

                if ($x->rowCount()) {
                    $m = "Successfully Update";
                } else {
                    $m = "Error Again Try";
                }
            }
        }

        //$this->medoo->debug()->select("services","*",["row_id"=>$id]);
        $res = [
            "user" => $this->medoo->select("brands", "*", ["row_id" => $id]),
            "m" => $m,
        ];
        // print_r($res);    
        $this->load->view('admin/addbrandcion', $res);
    }

    public function gallery()
    {
        $m = 1;

        if (isset($_GET['del'])) {
            $d = $this->medoo->select("gallery", "*", ["row_id" => $_GET['del']]);

            if (!empty($d)) {
                @$this->medoo->delete("gallery", ["row_id" => $_GET['del']]);
                unlink("./_gallery/" . $d[0]['_img']);
                $m = "Successfully Delete";
            } else {
                redirect(site_url("Admin/Gallery"));
            }
        }

        $res = [
            "user" => $this->medoo->select("gallery", "*"),
            "m" => $m
        ];
        $this->load->view('admin/gallery', $res);
    }

    public function addgallery()
    {
        $m = 1;
        $this->load->helper(array('form', 'url'));


        $config['upload_path'] = './_gallery/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;


        $this->load->library('upload', $config);

        if (isset($_POST['save'])) {

            if (!$this->upload->do_upload('userfile')) {
                $m = $this->upload->display_errors();
            } else {
                $data = array('upload_data' => $this->upload->data('file_name'));

                $arr = [
                    "row_id" => $this->_crd(),
                    "_title" => $_POST['_title'],
                    "_img" => $data['upload_data'],
                ];
                $x = $this->medoo->insert("gallery", $arr);

                if ($x->rowCount()) {
                    $m = "Successfully Added";
                } else {
                    $m = "Error Again Try";
                }
            }
        }
        $res = [
            "user" => "",
            "m" => $m
        ];

        $this->load->view('admin/addgallery', $res);
    }
    public function updategallery($id)
    {
        $m = 1;
        $this->load->helper(array('form', 'url'));

        $config['upload_path'] = './_gallery/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if (isset($_POST['save'])) {

            if (!$this->upload->do_upload('userfile')) {
                // $m = array('error' => $this->upload->display_errors()); 
                $arr = [
                    "_title" => $_POST['_title'],
                ];
                $x = $this->medoo->update("gallery", $arr, ["row_id" => $id]);

                if ($x->rowCount()) {
                    $m = "Successfully Update";
                } else {
                    $m = "Error Again Try";
                }
            } else {
                $data = array('upload_data' => $this->upload->data('file_name'));

                $arr = [
                    "_title" => $_POST['_title'],
                    "_img" => $data['upload_data'],
                ];
                $x = $this->medoo->update("gallery", $arr, ["row_id" => $id]);

                if ($x->rowCount()) {
                    $m = "Successfully Update";
                } else {
                    $m = "Error Again Try";
                }
            }
        }

        //$this->medoo->debug()->select("services","*",["row_id"=>$id]);
        $res = [
            "user" => $this->medoo->select("gallery", "*", ["row_id" => $id]),
            "m" => $m,
        ];
        // print_r($res);    
        $this->load->view('admin/addgallery', $res);
    }



    public function category()
    {
        $m = 1;


        if (isset($_GET['del'])) {
            $d = $this->medoo->select("c_type", "*", ["row_id" => $_GET['del']]);

            if (!empty($d)) {
                @$this->medoo->delete("c_type", ["row_id" => $_GET['del']]);

                $m = "Successfully Delete";
            } else {
                redirect(site_url("Admin/Category"));
            }
        }

        $res = [
            "user" => $this->medoo->select("c_type", "*"),
            "m" => $m
        ];
        $this->load->view('admin/category', $res);
    }



    public function cities()
    {
        $m = 1;


        if (isset($_GET['del'])) {
            $d = $this->medoo->select("cities", "*", ["row_id" => $_GET['del']]);

            if (!empty($d)) {
                @$this->medoo->delete("cities", ["row_id" => $_GET['del']]);
                unlink("./upload/" . $d[0]['_img']);
                $m = "Successfully Delete";
            } else {
                redirect(site_url("Admin/Cities"));
            }
        }

        $res = [
            "user" => $this->medoo->select("cities", "*"),
            "m" => $m
        ];
        $this->load->view('admin/cities', $res);
    }


    public function updatecategory($id)
    {

        $m = 1;
        $this->load->helper(array('form', 'url'));
        $config['upload_path'] = './_services/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);


        if (isset($_POST['save'])) {
            if (!$this->upload->do_upload('userfile')) {
                // $m = array('error' => $this->upload->display_errors()); 
                $arr = [
                    "name" => $_POST['name'],
                    "des" => $_POST['des'],
                ];
                $x = $this->medoo->update("c_type", $arr, ["row_id" => $id]);

                if ($x->rowCount()) {
                    $m = "Successfully Update no image include";
                } else {
                    $m = "Error Again Try";
                }
            } else {
                $data = array('upload_data' => $this->upload->data('file_name'));
                // print_r($data);
                $arr = [
                    "name" => $_POST['name'],
                    "img" => $data['upload_data'],
                    "des" => $_POST['des'],
                ];
                $x = $this->medoo->update("c_type", $arr, ["row_id" => $id]);

                if ($x->rowCount()) {
                    $m = "Successfully Update image include";
                } else {
                    $m = "Error Again Try";
                }
            }

            
        }
        $res = [
            "user" => $this->medoo->select("c_type", "*", ["row_id" => $id]),
            "m" => $m,
        ];

        // print_r($res);

        $this->load->view('admin/addcategory', $res);
    }



    public function addcities()
    {
        $m = 1;
        $this->load->helper(array('form', 'url'));


        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;


        $this->load->library('upload', $config);

        if (isset($_POST['save'])) {

            if (!$this->upload->do_upload('userfile')) {
                $m = $this->upload->display_errors();
            } else {
                $data = array('upload_data' => $this->upload->data('file_name'));


                $arr = [
                    "row_id" => $this->_crd(),
                    "_title" => $_POST['_title'],
                    "_subtitle" => $_POST['_subtitle'],
                    "_img" => $data['upload_data'],
                    "_desr" => $_POST['_desr'],

                ];
                $x = $this->medoo->insert("cities", $arr);

                if ($x->rowCount()) {
                    $m = "Successfully Added";
                } else {
                    $m = "Error Again Try";
                }
            }
        }
        $res = [
            "user" => "",
            "m" => $m
        ];

        $this->load->view('admin/addcities', $res);
    }
    public function updatecities($id)
    {
        $m = 1;
        $this->load->helper(array('form', 'url'));


        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if (isset($_POST['save'])) {

            if (!$this->upload->do_upload('userfile')) {
                // $m = array('error' => $this->upload->display_errors()); 
                $arr = [
                    "_title" => $_POST['_title'],
                    "_subtitle" => $_POST['_subtitle'],
                    "_desr" => $_POST['_desr'],
                ];
                $x = $this->medoo->update("cities", $arr, ["row_id" => $id]);

                if ($x->rowCount()) {
                    $m = "Successfully Update";
                } else {
                    $m = "Error Again Try";
                }
            } else {
                $data = array('upload_data' => $this->upload->data('file_name'));

                $arr = [
                    "_title" => $_POST['_title'],
                    "_subtitle" => $_POST['_subtitle'],
                    "_img" => $data['upload_data'],
                    "_desr" => $_POST['_desr'],
                ];
                $x = $this->medoo->update("cities", $arr, ["row_id" => $id]);

                if ($x->rowCount()) {
                    $m = "Successfully Update";
                } else {
                    $m = "Error Again Try";
                }
            }
        }

        // $this->medoo->debug()->select("services","*",["row_id"=>$id]);
        $res = [
            "user" => $this->medoo->select("cities", "*", ["row_id" => $id]),
            "m" => $m,
        ];

        // print_r($res);

        $this->load->view('admin/addcities', $res);
    }


    public function customerorder()
    {
        $m = 1;
        $res = [
            "user" => $this->medoo->select("t_checkout", "*"),
            "m" => $m
        ];
        $this->load->view('admin/customerorder', $res);
    }
    public function viewcustomerorder($id)
    {
        $m = 1;
        if (isset($_POST['update'])) {

            $arr = [
                "_status" => $_POST['status'],
                "bill_no" => $_POST['bill_no']
            ];
            $r = $this->medoo->update("t_checkout", $arr, ["row_id" => $id]);
            if ($r->rowCount()) {
                $m = "Successfully Update";
            } else {
                $m = "No Change";
            }
        }
        $res = [
            "order" => $this->medoo->select("t_checkout", "*", ["row_id" => $id]),
            "m" => $m
        ];
        $this->load->view('admin/viewcustomerorder', $res);
    }

    public function product()
    {
        $m = 1;

        if (isset($_GET['del'])) {
            $d = $this->medoo->select("products2", "*", ["row_id" => $_GET['del']]);

            if (!empty($d)) {
                @$this->medoo->delete("products2", ["row_id" => $_GET['del']]);
                delete_files("./product/" . $d[0]['row_id']);
                $m = "Successfully Delete";
            } else {
                redirect(site_url("Admin/Product"));
            }
        }

        $res = [
            "user" => $this->medoo->select("products2", "*"),
            "m" => $m
        ];
        $this->load->view('admin/product', $res);
    }

    public function addcategory()
    {
        $m = 1;
        $this->load->helper(array('form', 'url'));
        $config['upload_path'] = './_services/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (isset($_POST['save'])) {

            if (!$this->upload->do_upload('img')) {
                $m = array('error' => $this->upload->display_errors());
            } else {
                $data = array('upload_data' => $this->upload->data('file_name'));

                $arr = [
                    "row_id" => $this->_crd(),
                    "name" => $_POST['name'],
                    "img" => $data['upload_data'],
                    "des" => $_POST['des'],
                ];

                $x = $this->medoo->insert("c_type", $arr);

                if ($x->rowCount()) {
                    $m = "Successfully Add";
                } else {
                    $m = "Error Again Try";
                }
            }
        }

        $res = [
            "user" => "",
            "m" => $m
        ];

        $this->load->view('admin/addcategory', $res);
    }


    public function addproduct()
    {


        $m = 1;
        $this->load->helper(array('form', 'url'));
        $config['upload_path'] = './_mypro/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['max_height'] = '1000';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (isset($_POST['add'])) {

            if (!$this->upload->do_upload('_banner')) {
                $m = array('error' => $this->upload->display_errors());
            } else {
                $data1 = array('upload_data' => $this->upload->data('file_name'));
            }

            if (!$this->upload->do_upload('img1')) {
                $m = array('error' => $this->upload->display_errors());
            } else {
                $data2 = array('upload_data' => $this->upload->data('file_name'));
            }
            if (!$this->upload->do_upload('img2')) {
                $m = array('error' => $this->upload->display_errors());
            } else {
                $data3 = array('upload_data' => $this->upload->data('file_name'));
            }
            if (!$this->upload->do_upload('img3')) {
                $m = array('error' => $this->upload->display_errors());
            } else {


                $data4 = array('upload_data' => $this->upload->data('file_name'));

                $client_id = $this->input->post('client_id');
                $arr = [
                    "row_id" => $this->_crd(),
                    "_banner" => $data1['upload_data'],
                    "img1" => $data2['upload_data'],
                    "img2" => $data3['upload_data'],
                    "img3" => $data4['upload_data'],
                    "name" => $_POST['name'],
                    "client_id" => $client_id,
                    "_gst" => $_POST['_gst'],
                    "cat_opt" => $_POST['cat_opt'],
                    "c_type" => $_POST['c_type'],
                    "wet_type" => $_POST['wet_type'],
                    "_desr" => $_POST['_desr'],
                    "price" => $_POST['price'],
                    "city" => $_POST['city'],
                    "cr_on" => date("Y-m-d H:i:s")
                ];


                $x = $this->medoo->insert("products2", $arr);

                if ($x->rowCount()) {
                    $m = "Successfully Add";
                } else {
                    $m = "Error Again Try";
                }
            }
        }

        $res = [
            "user" => "",
            "m" => $m,
            "c_type" => $this->medoo->select("c_type", "*"),
            "cat_opt" => $this->medoo->select("cat_opt", "*")
        ];

        $this->load->view('admin/addproduct', $res);
    }



    public function updateproduct($id)
    {
        $config['upload_path'] = './_mypro/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '300';
        $config['max_width'] = '3000';
        $config['max_height'] = '300';
        $config['max_height'] = '3000';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        $m = 1;

        $this->load->helper(array('form', 'url'));
        if (isset($_POST['save'])) {
            $dd = $this->medoo->select("products2", "*", ["row_id" => $id]);

            $bannerimg = $dd[0]['_banner'];
            $img1 = $dd[0]['img1'];
            $img2 = $dd[0]['img2'];
            $img3 = $dd[0]['img3'];

            if ($this->upload->do_upload('_banner')) {

                $data1 = array('upload_data' => $this->upload->data('file_name'));
                $bannerimg = $data1['upload_data'];
            }

            if ($this->upload->do_upload('img1')) {

                $data2 = array('upload_data' => $this->upload->data('file_name'));
                $img1 = $data2['upload_data'];
            }
            if ($this->upload->do_upload('img2')) {

                $data3 = array('upload_data' => $this->upload->data('file_name'));
                $img2 = $data3['upload_data'];
            }
            if ($this->upload->do_upload('img3')) {

                $data4 = array('upload_data' => $this->upload->data('file_name'));
                $img3 = $data4['upload_data'];
            }


            $arr = [
                // "row_id" => $this->_crd(),
                "_banner" => $bannerimg,
                "img1" => $img1,
                "img2" => $img2,
                "img3" => $img3,
                "name" => $_POST['name'],
                // "client_id" => $client_id,
                // "_gst" => $_POST['_gst'],
                // "cat_opt" => $_POST['cat_opt'],
                // "c_type" => $_POST['c_type'],
                // "wet_type" => $_POST['wet_type'],
                "_desr" => $_POST['_desr'],
                // "price" => $_POST['price'],
                // "city" => $_POST['city'],
                "cr_on" => date("Y-m-d H:i:s")
            ];

            $x = $this->medoo->update("products2", $arr, ["row_id" => $id]);

            if ($x->rowCount()) {
                $m = "Successfully Added";
            } else {
                $m = "Error Again Try";
            }
        }
        $res = [
            "user" => $this->medoo->select("products2", "*", ["row_id" => $id]),
            "m" => $m,
            "ss" => $this->medoo->select("servicecate", "*")
        ];
        $this->load->view('admin/updateproduct', $res);
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

    public function Del()
    {
        $m = 1;

        if (isset($_GET['del'])) {

            $d = $this->medoo->select("products", "*", ["_img" => $_GET['del']]);

            if (!empty($d)) {
                echo "yes \n";
                // echo $d;
                echo $_GET['del'];
                // @$this->medoo->delete("products",["row_id"=>$_GET['del']]); 
                // delete_files("./product/".$d[0]['row_id']);
                // $m="Successfully Delete";
            }

            // else{
            //     echo "no";
            //     redirect(site_url("Admin/Product"));
            // }
        }
        $res = [
            "user" => $this->medoo->select("products", "*")

        ];
        // $this->load->view('admin/update-product',$res);
    }
    
}
