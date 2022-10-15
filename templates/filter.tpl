{include file='head.tpl'}
{include file='header.tpl'}

<div class="container mb-5" >
    <div class="container mt-5" >
        <div class="container d-flex justify-content-center m-5">
            <h2>{$category}</h2>
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
        {include file='aside.tpl'} 
        </div>
    </div>
</div>
{include file='footer.tpl'}