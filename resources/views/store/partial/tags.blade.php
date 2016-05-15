<h2>Tags</h2>
<ul class="panel-group tag-products" id="accordian"><!--category-products-->
    @foreach ($tags as $tag)
        <li>
            <h4><a href="{{ url('tag/'.$tag->name) }}"> {{ $tag->name }} </a></h4>
        </li>
    @endforeach
</ul><!--/category-products-->