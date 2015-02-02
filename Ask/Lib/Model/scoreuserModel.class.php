<?php
class scoreuserModel extends Model{
    function check($name){
        //echo $this->fields['name'];
        $sql = "select * from sel_scoreuser where name = "."\'"." $name "."\'";
        $res=$this->query($sql);
        return $res;
    }
}