<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart['products'] as $item)
                                <tr>
                                    <td>{{$item->title}}</td>
                                    <td>Rp{{ number_format($item->price,2,",",".") }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-danger" wire:click="removeFromCart({{$item->id}})">
                                            Remove
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3">
                                    <a href="{{ route('shop.checkout') }}" class="btn btn-primary float-right">
                                        Checkout
                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
