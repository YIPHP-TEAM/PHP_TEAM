@if ($errors->has($input))
    <div class="text-left">
        <small style="color:palevioletred;">{{ $errors->first($input) }}</small>
    </div>
@endif
