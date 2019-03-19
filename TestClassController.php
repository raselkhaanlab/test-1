<?php


class TestClassController{
				private $string1;
				private $string2;
	public function __construct(string $string1,string $string2){

		          $this->string1=$string1;
		          $this->string2=$string2;
	}

	public function execution(){
                     $data=[];
					for($i=0;$i<=100;$i++){

							if($i==0){
							 $data[]=$i;
							}

							else if($i%3==0 && $i%5==0){
									$data[]=$this->string1.$this->string2;
							}
							else if ($i%3==0){
								$data[]=$this->string1;
							}
							else if($i%5==0){
								$data[]=$this->string2;
							}
							else {
								$data[]=$i;
							}
					}
                  return $data;

	}


}