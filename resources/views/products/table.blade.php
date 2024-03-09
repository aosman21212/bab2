<div class="table4 table5 p-25 bg-white">
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>
                            <div class="userDatatable-content">
                                <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
                                    <li>
                                        <a href="{{ route('products.show', [$product->id]) }}" class="view">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('products.edit', [$product->id]) }}" class="edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </li>
                                    @if(!$product->productServices()->exists())
                                        <li>
                                            <a href="#" class="remove" onclick="event.preventDefault(); 
                                                if(confirm('Are you sure you want to delete this product/service?')) {
                                                    document.getElementById('delete-form-{{ $product->id }}').submit();
                                                }">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                            <form action="{{ route('products.destroy', [$product->id]) }}" method="POST" id="delete-form-{{ $product->id }}" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
