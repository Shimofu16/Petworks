<div class="modal" id="show{{ $daily->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-center">
                <h5 class="modal-title text-white font-weight-bold " id="exampleModalLongtitle">Products</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                @php
                    $product_sub = 0;
                    $service_sub = 0;
                    $total = 0;
                @endphp
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($daily->appointment->products as $product)
                            @php
                                $product_sub = ($product_sub + $product->product->price) * $product->quantity;
                            @endphp
                            <tr>
                                <td>{{ $product->product->product_name }}</td>
                                <td>{{ $product->product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                            </tr>
                        @endforeach
                        @php
                            $product_sub = $product_sub + $daily->appointment->service->price;
                        @endphp
                        <tr>
                            {{-- ganito sia --}}
                            <td colspan="2" class="text-right">Product {{ $product_sub }}</td>
                        </tr>
                    </tbody>



                </table>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">S</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            
                        @endphp
                        <tr>
                            <td>{{ $daily->appointment->service->service }}</td>
                            <td>{{ $daily->appointment->service->price }}</td>
                        </tr>

                        @php
                            $service_sub = $service_sub + $daily->appointment->service->price;
                            $total = $product_sub + $service_sub;
                        @endphp
                        <tr>
                            <td colspan="2" class="text-right">Service</td>
                            <td>{{ $service_sub }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-right">Total</td>
                            <td>{{ $total }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
