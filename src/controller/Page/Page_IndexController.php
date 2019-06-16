<?php
/**
 * Created by PhpStorm.
 * User: childeYin<尹少爷>
 * Date: 19/07/2018
 * Time: 2:07 PM
 */

class Page_IndexController extends HttpBaseController
{

    public $headers;

    public function index()
    {
        if($this->is_mobile()){
            echo $this->display("msg_wapGroupMsg");
        }else{
            echo $this->display("msg_groupMsg");
        }
        return;
    }


    private function is_mobile()
    {
        $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
        $is_pc = (strpos($agent, 'windows nt')) ? true : false;
//        $is_mac = (strpos($agent, 'mac os')) ? false : true;
        $is_iphone = (strpos($agent, 'iphone')) ? true : false;
        $is_android = (strpos($agent, 'android')) ? true : false;
        $is_ipad = (strpos($agent, 'ipad')) ? true : false;


        if($is_pc){
            return  false;
        }

//        if($is_mac){
//            return  true;
//        }

        if($is_iphone){
            return  true;
        }

        if($is_android){
            return  true;
        }

        if($is_ipad){
            return  true;
        }
    }
}