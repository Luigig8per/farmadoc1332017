    <?php 
$categories = CategoryData::getAll();
    ?>
<div class="row">
	<div class="col-md-12">
	Calculo de costos
	<br>
		<form class="form-horizontal" method="post" enctype="multipart/form-data" id="addproduct" action="index.php?view=addproduct" role="form">

  
  
 
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Precio de Costo*</label>
    <div class="col-md-6">
      <input type="number" name="price_in" required class="form-control" id="price_in" placeholder="Precio de entrada">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Cantidad de productos</label>
    <div class="col-md-6">
      <input type="number" name="qProducts" required class="form-control" id="qProducts" placeholder="Cantidad de productos">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Cantidad de productos de regalia</label>
    <div class="col-md-6">
      <input type="number" name="qProductsFree" required class="form-control" id="qProductsFree" placeholder="Cantidad de productos de regalia">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Porcentaje de descuento</label>
    <div class="col-md-6">
      <input type="number" name="discount" required class="form-control" id="discount" placeholder="Porcentaje de descuento">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Precio de Salida</label>
    <div class="col-md-6">
      <input type="number" name="price_out" required class="form-control" id="price_out" placeholder="Precio de salida">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Costo real</label>
    <div class="col-md-6">
      <input type="number" name="price_cost" required class="form-control" id="price_cost" placeholder="Precio de costo">
    </div>
  </div>

  <!-- <div class="form-group">
    <label for="inputEmail2" class="col-lg-2 control-label">Costo real</label>
    <div class="col-md-6">
    <button type="submit" value="Submit">Submit</button>
    </div>
  </div> -->
  
  <div data-role="content">
        <div id="button" data-role="button">Click on button</div>
      </div>


</form>

	</div>
</div>

<script>

        $("#button").click( function()
           {
             alert(costPerItem());
           }
        );


        function add() {
    a = $('#qProducts').val();
    b = $('#qProductsFree').val();
    var sum = parseInt(a) + parseInt(b);
    alert(sum);
  };


  function add() {
    a = $('#qProducts').val();
    b = $('#qProductsFree').val();
    var sum = parseInt(a) + parseInt(b);
    alert(sum);
  };


  function costPerItem() {
    a = $('#qProducts').val();
    b = $('#qProductsFree').val();
    priceCost = (parseInt(a) + parseInt(b)) ;
    //Want to know price per item. So if you have 10 and have 5 free, just divide cost price*qproducts and divide ito total products 15
    alert(priceCost);
  };


    </script>