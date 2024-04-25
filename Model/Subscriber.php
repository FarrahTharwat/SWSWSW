<?php

require_once 'Observer.php';
require_once '../Controller/Database.php';

class Subscriber implements Observer
{
    public $subscriberName;
    public $userID;


    // public function __construct($subscriberName)
    // {
    //     $this->subscriberName = $subscriberName;
    // }


    public function getsubscriberName()
    {
        return $this->subscriberName;
    }


    public function setsubscriberName($subscriberName)
    {
        $this->subscriberName = $subscriberName;
        return $this;
    }

    public function getuserID()
    {
        return $this->userID;
    }


    public function setuserID($userID)
    {
        $this->userID = $userID;
        return $this;
    }
    
    public function update($msg){
        echo $msg ;
    }

    // public function subs($to_channel_name,$from_channel_id,$from_channel_name){
     
    //     $db = new DBController ;

    //     // $sel = $db->select("Select * from user where Name = $to_channel_name ");
    //     $sel = $db->select_data('user','Name',$to_channel_name);
    //     foreach($sel as $see_noti22)
    //         $to_channel_id = $see_noti22['ID'];
     

    //     $tb_field["to_channel_id"] = $to_channel_id;
    //     $tb_field["to_channel_name"] = $to_channel_name;
    //     $tb_field["from_channel_id"] = $from_channel_id;
    //     $tb_field["from_channel_name"] = $from_channel_name;
    //     $tb_field["n_type"] = 1;
    
    //     $db->insert("notification",$tb_field);
    // }

    // public function subs2($to_channel_id,$from_channel_id,$from_channel_name){
     
    //     $db = new DBController ;

    //     // $sel = $db->select("Select * from user where Name = $to_channel_name ");
    //     $sel = $db->select_data('user','ID',$to_channel_id);
    //     foreach($sel as $see_noti22)
    //         $to_channel_name = $see_noti22['Name'];
     

    //     $tb_field["to_channel_id"] = $to_channel_id;
    //     $tb_field["to_channel_name"] = $to_channel_name;
    //     $tb_field["from_channel_id"] = $from_channel_id;
    //     $tb_field["from_channel_name"] = $from_channel_name;
    //     $tb_field["n_type"] = 1;
    
    //     $db->insert("notification",$tb_field);
    // }

    public function subs3($to_channel_id,$from_channel_id){
     
        $db = new Database ;

        // $sel = $db->select("Select * from user where Name = $to_channel_name ");
        $sel = $db->select_data('user','ID',$to_channel_id);
        foreach($sel as $see_noti22)
            $to_channel_name = $see_noti22['Name'];
     
        $sel2 = $db->select_data('user','ID',$from_channel_id);
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        foreach($sel2 as $see_noti22)
            $from_channel_name = $see_noti22['Name'];
=======
        foreach($sel2 as $see_noti23)
            $from_channel_name = $see_noti23['Name'];
>>>>>>> Stashed changes
=======
        foreach($sel2 as $see_noti23)
            $from_channel_name = $see_noti23['Name'];
>>>>>>> Stashed changes
    
        $tb_field["UserID"] = $to_channel_id;
        $tb_field["to_channel_name"] = $to_channel_name;
        $tb_field["from_channel_id"] = $from_channel_id;
        $tb_field["from_channel_name"] = $from_channel_name;
        $tb_field["n_type"] = 1;
    
        $db->insert_2("notification",$tb_field);
    }

}

?>