<div id="field_{{ $id }}"{!! Html::classes(['form-group', 'has-error' => $hasErrors]) !!}>
    @if ($required)
        <span class="fa fa-asterisk pull-left" style="color: #dd4b39;"></span>
    @endif

    @if($label)
    <label for="{{ $id }}" class="control-label">
        {{ $label }} :
    </label>
    @endif

    <div class="controls">
        {!! $input !!}
        @foreach ($errors as $error)
            <p class="help-block">{{ $error }}</p>
        @endforeach
    </div>
</div>
