{include file='head.tpl'}

{include file='header.tpl'}
<div class="container m-5">
  <h2>Agregar un nuevo producto</h2>
  <div class="card m-5" style="width: 18rem;">
    <div class="card-body">
      <form action="add/product" method="POST">
        <input class="form-control card-title mb-3" name="product" placeholder="nuevo nombre">
        <select class="form-select card-subtitle mb-3" aria-label="Default select example" name="category">
          <option value=""><-Seleccionar categoria-></option>
          {foreach from=$categories item=$category}
            <option value="{$category->id_categoria}">{$category->categoria}</option>
          {/foreach}
        </select>
        <textarea class="form-control card-text mb-2" placeholder="nueva descripción" name="description"></textarea>
       <button class="btn btn-success" type="submit">Agregar</button>
    </form>  
    </div>
  </div>  
  
  <h2>Editar productos existentes</h2>
  {foreach from=$products item=$product}
     <div class="container d-flex">
        <div class="card m-5" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{$product->producto}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{$product->categoria}</h6>
            <p class="card-text">{$product->descripcion}</p>
            <form action="delete/product" method="POST">
              <input type="hidden" name="id" value="{$product->id_producto}">
              <button class="btn btn-danger" type="submit">Borrar</button>
            </form>
            
          </div>
        </div>

        <div class="card m-5" style="width: 18rem;">
          <div class="card-body">
            <form action="update/product" method="POST">
              <input type="text" class="form-control card-title mb-3" name="product" value="{$product->producto}">
              <select class="form-select card-subtitle mb-3"  name="category">
                <option value="{$product->id_categoria}">{$product->categoria}</option>
                {foreach from=$categories item=$category}
                  <option value="{$category->id_categoria}">{$category->categoria}</option>
                {/foreach}
              </select>
              <textarea class="form-control card-text mb-2" name="description" value="{$product->descripcion}">{$product->descripcion}</textarea>
              <input type="hidden" name="id" value="{$product->id_producto}">
              <button class="btn btn-success " type="submit" id="{$product->id_producto}">Editar</button>
           </form>  
          </div>
        </div>
      </div>  
  {/foreach}

</div>
 

{include file='footer.tpl'}
