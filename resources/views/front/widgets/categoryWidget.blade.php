<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Kategoriler
        </div>
        <div class="list-group">
            @foreach($categories as $category) 
            
               <a href="#" class="list-group-item">{{$category->name}} <span class="badge bg-danger float-right text-white">{{$category->kategoriSayisi()}}</span></a>
            
            @endforeach
        </div>
    </div>
</div>