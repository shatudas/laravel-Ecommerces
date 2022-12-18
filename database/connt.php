<?php




class  datebase

{

	public $Hostaddress="localhost";
	public $UserName="root";
	public $password="";
	public $coont="www.ecommerce.com";
	public $link;
	public $message;



	public function __construct()
	{
		$this->database_connt();
	}

	private function database_connt ()
	{
		$this->link=new mysqli($this->Hostaddress,$this->UserName,$this->password, $this->coont);


		if ($this->link)
		{
			$this->message="<i style='color:green'>Database Connection Successfull</i>";
		}

		else
		{
			$this->message="<i style='color:red'>Database Connection Unsuccessfull</i>";
		}
	}





   function INSERT ($ADDdata)
  {
	$AddBtn=$this->link->query($ADDdata);
	if ($AddBtn)
	{
		$this->message="<i style='color:green'>Information Insert Successfull..</i>";
	}
	else
	{
		$this->message="<i style='color:red'>Information Insert Unsuccessfull..</i>";
	}
  }


  function selectquery($DataView)
  {
   $DATAVIEW=$this->link->query($DataView);
   if ($DATAVIEW->num_rows>0)
   {
   	return $DATAVIEW;
   }
   else
   {
   	$this->message="<i style='color:red'>Can't available this page</i>";
   }
  }



  function DELETE ($delbtn)
  {
	$DELETEBTN=$this->link->query($delbtn);
    if ($DELETEBTN)
    {
    $this->message="<i style='color:green'>Data Delete Successfull..</i>";
    }
  else
  {
  	$this->message="<i style='color:red'>Data Delete Unsuccessfull..</i>";
  }
}


  function  EDITVTEW($editbtn)
  {
  	$EDIT=$this->link->query($editbtn);
  	if ($EDIT)
  	{
  		return $EDIT;
  	}
  	else
  		{
  		return falus;
 
  		}
  }




  function DATAEDIT ($EditData)
  {
	$EditBtn=$this->link->query($EditData);
	if ($EditBtn)
	{
		$this->message="<i style='color:green'>Information Update Successfull..</i>";
	}
	else
	{
		$this->message="<i style='color:red'>Information Update Unsuccessfull..</i>";
	}
  }




	public function __destruct()
	{
		$this->link->close();
	}



}



?>