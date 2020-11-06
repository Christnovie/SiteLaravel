<h1> Indexx</h1>
<?php foreach ($client as $item) :?>
<li><?=$item?></li>
<?php endforeach; ?>
@foreach($client as $item)
    <li>{{$item}}</li>
@endforeach

