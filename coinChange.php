    <?php 
    function coincChange($nums, $amount) {
      
      $length = sizeof($nums);
      $dp = array_fill(0,$amount+1,0); 
      $total = 0;
      
     
      while($amount>=++$total){
        $min = -1;

        for($i = 0; $i<$length; $i++){
            echo "\n". $nums[$i];
            if($total>=$nums[$i] and $dp[$total-$nums[$i]]!=-1){
               
                $temp = $dp[$total-$nums[$i]] + 1;
                if(($min<0) or ($temp<$min) ){
                    
                    $min = $temp;
                }
            }
            
            
            //echo "\n".  $min;
        }
        //echo "\n".  $min;
        //echo "\n".  $min;
        $dp[$total] = $min; 
    }
        return $dp[$amount];
    }

    


    //driver
$N=array_fill(0, 3, 0); 
//$input = "aaaabbbbcccdde"; 

$N[0] = 1;
$N[1] = 2;
$N[2] = 5;
$result = coincChange($N,11);
echo "the answer is ".$result;
    ?>