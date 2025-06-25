<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Dogs</h2>
            
  <table class="table table-striped">
    <thead>
      <tr>
        <!-- // id	name	gender	age	size	color	sku	vaccinated	dewormed	'cert'	microchip	location	published_date	add_info	image	
 -->
        <th>Name</th>
        <th>gender</th>
        <th>age</th>
        <th>size</th>
        <th>color</th>
        <th>sku</th>
        <th>vaccinated</th>
        <th>dewormed</th>
        <th>cert</th>
        <th>microchip</th>
        <th>location</th>
        <th>published_date</th>
        <th>add_info</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
     <?php
        foreach($dogs as $dog){
            echo "<tr>
        
        <td>{$user->name}</td>
        <td>{$user->gender}</td>
        <td>{$user->age}</td>
        <td>{$user->size}</td>
        <td>{$user->color}</td>
        <td>{$user->sku}</td>
        <td>{$user->vaccinated}</td>
        <td>{$user->dewormed}</td>
        <td>{$user->cert}</td>
        <td>{$user->microchip}</td>
        <td>{$user->location}</td>
        <td>{$user->published_date}</td>
        <td>{$user->add_info}</td>
        <td>{$user->image}</td>
      </tr>";
        }
      ?>

    </tbody>
  </table>
</div>

</body>
</html>
