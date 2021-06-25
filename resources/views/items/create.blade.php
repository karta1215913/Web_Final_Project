@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Add an item</h1>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif

            <form method="post" action="{{ route('items.store') }}">
                @csrf
                <div class="form-group">    
                    <label for="item_id">Item ID :</label>
                    <input type="text" class="form-control" name="item_id"/>
                </div>

                <div class="form-group">
                    <label for="item_name">Item Name :</label>
                    <input type="text" class="form-control" name="item_name"/>
                </div>

                <div class="form-group">
                    <label for="item_price">Item Price :</label>
                    <input type="text" class="form-control" name="item_price"/>
                </div>
                            
                <button type="submit" class="btn btn-primary-outline">Add item</button>
            </form>
            
        </div>
    </div>
</div>
@endsection
