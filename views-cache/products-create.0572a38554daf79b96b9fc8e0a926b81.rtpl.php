<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Produtos
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/products/">Medicamento</a></li>
    <li class="active"><a href="/admin/products/create">Cadastrar</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Novo Medicamento</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/products/create" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="drugname">Nome do Medicamento</label>
              <input type="text" class="form-control" id="drugname" name="drugname" placeholder="Digite o nome do medicamento">
            </div>
            <div class="form-group">
              <label for="barcode">Codigo de Barra</label>
              <input type="text" class="form-control" id="barcode" name="barcode" placeholder="Codigo de barra">
            </div>
            <div class="form-group">
              <label for="msregistry">Registro MS</label>
              <input type="number" class="form-control" id="msregistry" name="msregistry" placeholder="Registro MS">
            </div>
            <div class="form-group">
              <label for="price">Preço</label>
              <input type="number" class="form-control" id="price" name="price" step="0.01" placeholder="0.00">
            </div>
            <div class="checkbox">
                <label>
                  <input type="checkbox" name="recipe" value="1"> Receita
                </label>
            </div>           
            <div class="form-group">
              <label for="discount">Desconto</label>
              <input type="number" class="form-control" id="discount" name="discount" step="0.01" placeholder="0.00">
            </div>
             <div class="form-group">
              <label for="laboratory">Laboratóio</label>
              <input type="text" class="form-control" id="laboratory" name="laboratory">
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->