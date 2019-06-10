<?php
	if(isset($_GET["ipid"])&&isset($_GET["ipname"])&&isset($_GET["ipprice"])&&isset($_GET["ipimg"])&&isset($_GET["ipdescription"])){
		$pid = $_GET["ipid"];
	     $pprice = $_GET["ipprice"];
             $pname = $_GET["ipname"];
 		$pimg = $_GET["ipimg"];
		$pdescription = $_GET["ipdescription"];
		include("connection.php");
            $res = pg_query($conn,"insert into products values('$pid','$pname','$pdescription','$pimg',$pprice)");
            if(!$res){
		echo "Not inserted";
            }
		else
		echo "<h3>Product inserted</h3>";
	}
      if(isset($_GET["dpid"])){
            if(!empty($_GET["dpid"])){
                  $did = $_GET["dpid"];
                  include("connection.php");
                  $res = pg_query("Delete from products where pid='$did'");
                  if(!$res){
                        echo "Record not deleted";
                  }
                  else
                        echo "<h1>The product has been deleted</h1>";
            }else
                  echo "Form cannot be empty";
      }

	?>
      <!DOCTYPE html>
      <html>
      <head>
            <title></title>
      </head>
      <body>
            
            <button onclick=location.href='Admin2.php' type='button' style='font-size:20px'>Back</button>
      </body>
      </html>