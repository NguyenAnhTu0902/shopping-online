<form action="san-pham">
    <div class="filter-widget">
        <h4 class="fw-title">Brand</h4>
        <div class="fw-brand-check">
            @foreach($brands as $brand)
                <div class="bc-item">
                    <label for="bc-{{$brand->id}}">
                        {{$brand->name}}
                        <input type="checkbox"
                               {{(request("brand")[$brand->id] ?? '') == 'on' ? 'checked' : ''}}
                               id="bc-{{$brand->id}}"
                               name="brand[{{$brand->id}}]">
                        <span class="checkmark "></span>
                    </label>
                </div>
            @endforeach
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Price</h4>
        <div class="filter-range-wrap">
            <div class="range-slider">
                <div class="price-input">
                    <input type="text" id="minamount" name="price_min">
                    <input type="text" id="maxamount" name="price_max">
                </div>
            </div>
            <div class="price-range ui-slide ui-corner-all ui-slide-horizontal ui-widget ui-widget-content"
                 data-min ="0" data-max="1000"
                 data-min-value="{{str_replace('$', '', request('price_min'))}}"
                 data-max-value="{{str_replace('$', '', request('price_max'))}}">
                <div class="ui-slide-range ui-corner-all ui-widget-header"></div>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
            </div>
        </div>
        <input type="hidden" name="search" value="{{$search ?? ''}}">
        <button type="submit" class="filter-btn">Filter</button>
    </div>
</form>
