{include file='header.tpl'}

<img src="./images/banner.png" class="banner shadow-lg" alt="banner">
<div class="container mb-5" >
    <h1 class="mt-5">BIENVENIDOS</h1>
    <div class="container mt-5" >
        <h2 class="mb-5">Nuestro menú</h2>
        <div class="container d-flex justify-content-start">
            <div class="container-sm">
                <ul class="list-group list-group-flush">
                    {foreach from=$products item=$product}
                        <div class="card mb-2">
                        {foreach from=$categories item=$category}
                            {if $product->id_categoria == $category->id_categoria}
                                <div class="card-header">
                                    {$category->categoria}
                                </div>
                            {/if}
                           
                        {/foreach}
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                <p><a href="detail/{$product->id_producto}">{$product->producto}</a></p>
                                </blockquote>
                            </div>
                        </div>
                    {/foreach} 
                </ul>
            </div>
            <div class="container-sm d-flex justify-content-end">    
            {include file='aside.tpl'}
            </div>
        </div>
    </div>
</div>
{include file='footer.tpl'}
