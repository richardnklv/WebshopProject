
@extends('components.layout')

@section('content')
    <body>
    <h1>Product list</h1>
    @foreach ($products as $product)
        <div>
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <p>Base price: ${{ number_format($product->base_price, 2) }}</p>
            @foreach($product->variants as $variant)
                <h3>Variant SKU: {{ $variant->sku }}</h3>
                @foreach ($product->optionTypes as $optionType)
                    <div>
                        <label>{{ $optionType->type }}</label>
                        <select name="options[{{ $variant->name }}][{{ strtolower($optionType->type) }}]">
                            @foreach ($optionType->optionValues as $optionValue)
                                @if($variant->optionValues->contains($optionValue))
                                    <option value="{{ $optionValue->id }}">
                                        {{ $optionValue->value }} (+${{ number_format($optionValue->additional_cost, 2) }})
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                @endforeach
            @endforeach
        </div>
    @endforeach
    </body>
@endsection



