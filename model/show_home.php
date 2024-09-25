<?php
     require_once('ketnoi.php');

     /**
      * 
      */
     class home
     {
     	public $conn;
     	
     	function __construct()
     	{
     		$connect_obj = new ketnoi();
     		$this->conn = $connect_obj->connect;
     	}

     	function banner()  //ok
          {
               $query = "SELECT * from banner";
               $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;
          }

          function loaisanpham()  //đang
          {
               $query = "SELECT * from loaisanpham limit 0,4";
               $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;
          }

          function loaisanphamHome()  //đang
          {
               $query = "SELECT * from loaisanpham limit 3";
               $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;
          }

          function allsanpham_trangchu()  //đang
          {
               $query = "SELECT * from sanpham";
               $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;
          }


          function sanpham_trangchu()  //đang
          {
               $query = "SELECT * from sanpham ORDER BY soluong ASC limit 0,6";
               $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;
          }


          function layout()
          {
            $query = "SELECT * FROM layout";
            $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;
          }



     }
?>