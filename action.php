<?php
	require_once('dbconnection.php');

	if(isset($_POST['action'])){
		$sql="SELECT * FROM vendor WHERE catergory!=''";

		if(isset($_POST['catergory'])){
			$catergory=implode("','",$_POST['catergory']);
			$sql .="AND catergory IN('".$catergory."')";
		}
		if(isset($_POST['city'])){
			$city=implode("','",$_POST['city']);
			$sql .="AND city IN('".$city."')";
		}

		$result=$connection->query($sql);
		$output='';

		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$output .='<div class="col-md-3 mb-2">
					    <div class="card">
					      <div class="card-body">
					        <h5 class="card-title">'.$row['name'].'
					        </h5>
					        <p>
					        	catergory: '. $row['catergory'].'<br>
					        	city: '. $row['city'].'<br>
					        	price: '. $row['budget'].'<br>
								image: '.$row['image'].'<br>
					        </p>
					        <a href="#" class="btn btn-success btn-block">Book </a>
					      </div>
					    </div>
				</div>';
			}
		}
		else{
			$output="<h3>No Vendors!</h3>";
		}
		echo $output;
	}

	mysqli_close($connection);
?>