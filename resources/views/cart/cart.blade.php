<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Cart') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <section class="h-100 gradient-custom">
                <div class="container py-5">
                    <div class="my-4 row d-flex justify-content-center">
                        <div class="col-md-8">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $message }}</strong>
                                </div>
                            @endif

                            <div class="mb-4 card">
                                <div class="py-3 card-header">
                                    <h5 class="mb-0">Cart - 2 items</h5>
                                </div>
                                <div class="card-body">
                                    @foreach (Cart::content() as $product)
                                    <!-- Single item -->
                                    <div class="row">
                                        <div class="mb-4 col-lg-3 col-md-12 mb-lg-0">
                                            <!-- Image -->
                                            <div class="rounded bg-image hover-overlay hover-zoom ripple"
                                                data-mdb-ripple-color="light">
                                                <img src="{{asset($product->options->image)}}"
                                                    class="w-100" />
                                                <a href="#!">
                                                    <div class="mask"
                                                        style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                                </a>
                                            </div>
                                            <!-- Image -->
                                        </div>

                                        <div class="mb-4 col-lg-5 col-md-6 mb-lg-0">
                                            <!-- Data -->
                                            <p><strong>{{$product->name}}</strong></p>
                                            <p>Color: red</p>
                                            <p>Size: M</p>

                                            <a href="{{route('remove-product', $product->rowId)}}" class="mt-3 mb-2 btn btn-danger btn-sm">
                                                remove
                                            </a>
                                            <!-- Data -->
                                        </div>

                                        <div class="mb-4 col-lg-4 col-md-6 mb-lg-0">
                                            <!-- Quantity -->
                                            <div class="mb-4 d-flex" style="max-width: 300px">
                                                <a href="{{route('qty-decrement', $product->rowId)}}" class="btn btn-primary me-2">
                                                    &#8722;
                                                </a>

                                                <div class="form-outline">
                                                    <input id="form1" min="0" name="quantity" value="{{$product->qty}}"
                                                        type="number" class="form-control" />
                                                </div>

                                                <a href="{{route('qty-increment', $product->rowId)}}" class="btn btn-primary ms-2">
                                                    &#43;
                                                </a>
                                            </div>
                                            <!-- Quantity -->

                                            <!-- Price -->
                                            <p class="text-start text-md-center">
                                                <strong>${{$product->price}}</strong>
                                            </p>
                                            <!-- Price -->
                                        </div>

                                    </div>
                                    <!-- Single item -->
                                    <hr class="my-4" />
                                    @endforeach


                                </div>
                            </div>


                        </div>
                        <div class="col-md-4">
                            <div class="mb-4 card">
                                <div class="py-3 card-header">
                                    <h5 class="mb-0">Summary</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li
                                            class="px-0 pb-0 border-0 list-group-item d-flex justify-content-between align-items-center">
                                            Products
                                            <span>$53.98</span>
                                        </li>
                                        <li
                                            class="px-0 list-group-item d-flex justify-content-between align-items-center">
                                            Shipping
                                            <span>Gratis</span>
                                        </li>
                                        <li
                                            class="px-0 mb-3 border-0 list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <strong>Total amount</strong>
                                                <strong>
                                                    <p class="mb-0">(including VAT)</p>
                                                </strong>
                                            </div>
                                            <span><strong>$53.98</strong></span>
                                        </li>
                                    </ul>

                                    <button class="btn btn-success">
                                        Go to checkout
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</x-app-layout>
