<div class="clearfix"></div>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Lo sentimos!,</strong> por favor corrija los siguientes errores.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="clearfix"></div>