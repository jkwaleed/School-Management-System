
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">  
      <tbody>  
         <tr>  
            <td>Teacher Id</td>  
            <td>Teacher Name</td>
            <td>Join Date</td>
            <td>Address</td>
            <td>phone</td>
            <td>email</td>
            <td>department</td>  
         </tr>  
         <?php  
         foreach ($teacher as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->t_id;?></td>  
            <td><?php echo $row->t_full_name;?></td>
            <td><?php echo $row->join_date;?></td>
            <td><?php echo $row->t_address;?></td>
            <td><?php echo $row->phone;?></td>
            <td><?php echo $row->t_eamil;?></td>
            <td><?php echo $row->department_id;?></td>

            </tr>  
         <?php }  
         ?>  
      </tbody>  
   </table>   
</body>
</html>