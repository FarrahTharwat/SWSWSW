<?php
interface Observer{

    public function update($msg);
    // public function subs($to_channel_name,$from_channel_id,$from_channel_name);
    public function subs3($to_channel_id,$from_channel_id);
}

?>