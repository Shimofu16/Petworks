<div class="modal" id="show{{ $daily->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-center">
                <h5 class="modal-title text-white font-weight-bold " id="exampleModalLongtitle">Products and Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                @php
                    $product_sub = 0;
                    $service_sub = 0;
                    $total = 0;
                @endphp
                <table class="table ">
                    <thead class="table-info">
                        <h5 class="text-secondary">Products Billing Statement</h5>
                        <tr>
                            <th scope="col" class="text-black">Product Name</th>
                            <th scope="col" class="text-black">Price</th>
                            <th scope="col" class="text-black">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($daily->appointment->products as $product)
                            @php
                                $product_sub = ($product_sub + $product->product->price) * $product->quantity;
                            @endphp
                            <tr>
                                <td>{{ $product->product->product_name }}</td>
                                <td>₱{{ number_format($product->product->price, 2, '.', ',') }}</td>
                                <td>{{ $product->quantity }}</td>
                            </tr>
                        @endforeach
                       {{--  @php
                            $product_sub = $product_sub + $daily->appointment->service->price;
                        @endphp --}}
                        <tr>
                            {{-- ganito sia --}}
                            <td colspan="2" class="text-right text-danger text-bold">Product Total:</td>
                            <td class="text-right text-danger text-bold">₱{{ number_format($product_sub, 2, '.', ',') }}
                            </td>
                        </tr>
                    </tbody>



                </table>
            </div>

            <div class="modal-body">
                <table class="table">
                    <thead class="table-info">
                        <h5 class="text-secondary">Service Billing Statement</h5>
                        <tr>
                            <th scope="col">Service</th>
                            <th scope="col">Price</th>
                         <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php

                        @endphp
                        <tr>
                            <td>{{ $daily->appointment->service->service }}</td>
                            <td>₱{{ number_format($daily->appointment->service->price, 2, '.', ',') }}</td>
                        </tr>

                        @php
                            $service_sub = $service_sub + $daily->appointment->service->price;
                            $total = $product_sub + $service_sub;
                        @endphp
                       <tr>
                            <td colspan="2" class="text-right text-danger text-bold">Service Total:</td>
                            <td>₱{{ number_format( $service_sub  , 2, '.', ',') }}</td>
                        </tr>


                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" class="text-right text-danger text-bold">Overall Total:</td>
                            <td class="text-right text-danger text-bold">₱{{ number_format( $total , 2, '.', ',') }}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
