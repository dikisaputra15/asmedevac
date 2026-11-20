@foreach (['Hospitals', 'Clinic / Health Centre'] as $level)
    <label class="d-block mb-0" style="font-size:13px;">
        <input type="checkbox" name="hospitalLevel" value="{{ $level }}">
        {{ $level }} (<span data-hospital-level-count="{{ $level }}">0</span>)
    </label>
@endforeach
