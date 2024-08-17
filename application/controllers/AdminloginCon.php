<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminloginCon extends CI_Controller
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
        if ($this->session->has_userdata("_admin")) {
            redirect(site_url("Admin"));
        }
    }


    // public function index()
    // {
    //     $m = 1;
    //     if (isset($_POST['sub'])) {
    //         $arr = [
    //             "mobile" => $_POST['mo'],
    //             "pass" => $_POST['pa'],
    //         ];

    //         $c = $this->medoo->select("admin", "*", $arr);
    //         if (!empty($c)) {
    //             $this->session->set_userdata(["_admin" => $c[0]]);
    //             redirect(site_url("Admin"));
    //         } else {
    //             $m = "Enter Valid Password Or User ID";
    //         }

    //     }

    //     $this->load->view('admin/login', ["m" => $m]);
    // }

    public function index()
    {
        $m = 1;
        if (isset($_POST['log'])) {


            $this->load->database();

            $em = $_POST['em'];
            

            $this->db->select("u_type");
            $this->db->from('client_sign_in');
            $this->db->where('Email', $em);
            // $this->db->where('c_type', $c_type);
            // $this->db->where('cat_opt', $cat_opt);

            $query = $this->db->get();
            $data1 = $query->result_array();

            if ($data1[0]['u_type'] == "partner") {
                $arr = [
                    "Email" => $_POST['em'],
                    "Password" => $_POST['pa'],
                ];
                $c = $this->medoo->select("client_sign_in", "*", $arr);
                if (!empty($c)) {
                    $this->session->set_userdata(["_admin" => $c[0]]);
                    redirect(site_url("Partner"));
                } else {
                    $m = "Enter Valid Password Or User ID";
                }
            }
            if ($data1[0]['u_type'] == "visitor") {
                $arr = [
                    "Email" => $_POST['em'],
                    "Password" => $_POST['pa'],
                ];
                $c = $this->medoo->select("client_sign_in", "*", $arr);
                if (!empty($c)) {
                    $this->session->set_userdata(["_admin" => $c[0]]);
                    redirect(site_url("Home"));
                } else {
                    $m = "Enter Valid Password Or User ID";
                }
            }
            if($_POST['em']=="admin" && $_POST['pa']=="1234")
            {
                $arr = [
                    "name" => $_POST['em'],
                    "pass" => $_POST['pa'],
                ];
                $c = $this->medoo->select("admin", "*", $arr);
                if (!empty($c)) {
                    $this->session->set_userdata(["_admin" => $c[0]]);
                    redirect(site_url("Adminpanal"));
                } else {
                    $m = "Enter Valid Password Or User ID";
                }
            }
            // else
            // {
            //     $arr = [
            //         "Email" => $_POST['em'],
            //         "Password" => $_POST['pa'],
            //     ];
            //     $c = $this->medoo->select("client_sign_in", "*", $arr);
            //     if (!empty($c)) {
            //         $this->session->set_userdata(["_admin" => $c[0]]);
            //         redirect(site_url("Admin"));
            //     } else {
            //         $m = "Enter Valid Password Or User ID";
            //     }
            // }
            }
    
            $this->load->view('admin/login', ["m" => $m]);
        }


}
