{include file='header.tpl'}

<div class="container d-flex p-2 justify-content-center mb-5">
    <div class="card m-5 " style="max-width: 740px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="./images/logo.png" class="img-fluid rounded-start shadow-lg" alt="Cafetería Gulp!">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{$item->producto}</h5>
                    <p class="card-text">{$item->descripcion}</p>
                    
                        {foreach from=$categories item=$category}
                            {if $item->id_categoria == $category->id_categoria}
                                <p class="card-text"><small class="text-muted">{$category->categoria}</small></p>
                            {/if}
                        {/foreach}
                </div>
            </div>
        </div>
    </div>
</div>
{include file='footer.tpl'}
