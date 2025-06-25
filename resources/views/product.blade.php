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
  <h2>products</h2>
         
  <table class="table table-striped">
    <thead>
      <tr>
       
           <th>Name</th>
        <th>type</th>
        <th>price</th>
        <th>size</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
     <?php
        foreach($products as $product){
            echo "<tr>
        
        <td>{$product->name}</td>
        <td>{$product->type}</td>
        <td>{$product->price}</td>
        <td>{$product->size}</td>
        <td>{$product->image}</td>
      </tr>";
        }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
