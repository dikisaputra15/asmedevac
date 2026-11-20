@foreach (['National Police (HQ)', 'Police Sub Station', 'Police Post', 'Specialized Unit'] as $category)
    <label class="d-block mb-0" style="font-size:13px;">
        <input type="checkbox" name="policeCategory" value="{{ $category }}">
        {{ $category }} (<span data-police-category-count="{{ $category }}">0</span>)
    </label>
@endforeach
