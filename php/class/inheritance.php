<?php
   class Books {
      /* Member variables */
      var $price;
      var $title;
      
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
      }
      
      function setTitle($par){
         $this->title = $par;
      }		
      
      function getTitle(){
         echo $this->title ." <br/>";
      }
   }
   class AddPub extends Books
   {
	var $publisher;
	function setPublisher($nm)
	{
		$this->publisher=$nm;
		
	}
	function getPublisher()
	{
		echo $this->publisher;
	}
	function __destruct()
	{
		echo "<br> Destroyed!!";
		
	}
	      function getPrice(){
			  parent::getPrice();
         echo "ff"."<br/>";
      }
	
	
   }
   $my_obj = new AddPub();
   $my_obj->setPrice(20);
   $my_obj->setTitle("xyx");
   $my_obj->setPublisher("ggg");
   $my_obj->getPrice();
   $my_obj->getTitle();
   $my_obj->getPublisher();
?>