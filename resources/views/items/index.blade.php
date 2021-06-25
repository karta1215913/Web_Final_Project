@extends('base')
@section('main')

<div>
    <a style="margin: 19px;" href="{{ route('items.create')}}" class="btn btn-primary">New item</a>
</div>

<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Items</h1>    
        <table class="table table-striped">
            <thead>
                <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Price</td>
                </tr>
            </thead>

            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{$item->item_id}}</td>
                    <td>{{$item->item_name}}</td>
                    <td>{{$item->item_price}}</td>
                    <td>
                        <a href="{{ route('items.edit',$item->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('items.destroy', $item->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

        {!! $items->links() !!}

    <div>
</div>
@endsection

<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
