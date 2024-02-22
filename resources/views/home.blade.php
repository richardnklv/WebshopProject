
@extends('components.layout')

@section('content')
    <body>
    <h1>Product list</h1>
    <div id="app">
        <hello-world></hello-world>
    </div>
    @foreach ($products as $product)
        <div>

            <h2>{{ $product->name }}</h2>

            <p>{{ $product->description }}</p>

            <p>Base price: ${{ number_format($product->base_price, 2) }}</p>
            @foreach($product->variants as $variant)

                <h3>Variant SKU: <span id="sku_{{ $variant->id }}">{{ $variant->sku }}</span></h3>
                @foreach ($product->optionTypes as $optionType)
                    <div>
                        <label>{{ $optionType->type }}</label>

                        <select name="options[{{ $variant->id }}][{{ strtolower($optionType->type) }}]"
                                onchange="updateSKU({{ $variant->id }}, '{{ $product->base_sku }}')">

                            @foreach ($optionType->optionValues as $optionValue)
                                @if($variant->optionValues->contains($optionValue))
                                    <option value="{{ $optionValue->id }}"
                                            data-sku-part="{{ $optionValue->getIdentifier() }}">
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
    @vite('resources/js/app.js')
    <script src="{{ mix('js/app.js') }}"></script>
    </body>

@endsection


<script>
    function updateSKU(variantId, baseSku) {
        let newSku = baseSku;
        const selectedOptions = document.querySelectorAll(`select[name^="options[${variantId}]"]`);
        selectedOptions.forEach(select => {
            newSku += '-' + select.selectedOptions[0].dataset.skuPart;
        });
        document.getElementById(`sku_${variantId}`).textContent = newSku;
    }
</script>



