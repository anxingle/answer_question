<?php

class IndexAction extends Action {
    public function index(){
       header("Content-Type:text/html;charset=utf-8");
       session_start();
       if(isset($_SESSION['userName'])==false){
       $ge_title = new userModel();
       $num = $ge_title->count();
       //This is get the total of problems
       $this->assign('num',$num);
       
       $da = $ge_title->select();
      
       $this->assign('num',$num)->assign('da',$da)->assign('k',0);
       $this->display();
        }else{
            
           echo '请登录' ; die; 
        }
    }
    // 处理表单数据
    public function process() {
        $ge_score = new userModel();
        $num = $ge_score->count();
        $score = $ge_score->select();
        $num_right = 0;
        for($i=0;$i < $num;$i++){
            if(array_key_exists("vote".$i,$_POST))
                $answers[$i]=$_POST["vote".$i];
            else{
                echo "您还没有答完";
                $this->display('Index.html');
            }
        }   
        for($i=0;$i <$num;$i++){
            if($answers[$i] == $score[$i]['right_ans'])
                $num_right++;
            echo $answers[$i]."---------";
            echo $score[$i]['right_ans']."*****";
            echo "<hr>";
        }
        echo "您答对的题目一共有：".$num_right;             
    }
    // 处理表单数据
    public function insert() {
         $question = new userModel();
         $answers['title']=$_POST["title"];
         $answers['id']=$_POST["title_id"];
         $answers['answer']=$_POST["answer_A"];
         $answers['answer2']=$_POST["answer_B"];
         $answers['answer3']=$_POST["answer_C"];
         $answers['answer4']=$_POST["answer_D"];
         $answers['right_ans']=$_POST["answer_r"];
         $answers['score']=7;
         $question->add($answers);
         $this->display('admin');
         //for   title title_id answer_A answer_B answer_C answer_D answer_r
     }
   
}
