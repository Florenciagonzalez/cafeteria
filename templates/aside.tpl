<aside>
    <div class="container-sm">
        <ul class="list-group">
            <li class="list-group-item">Categorias</li>
            {foreach from=$categories item=$category}
                <li class="list-group-item">{$category->categoria}</li>   
            {/foreach}
        </ul>
    </div>
</aside>