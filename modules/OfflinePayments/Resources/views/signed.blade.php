<div>
    <div>
        @if (!empty($setting['name']))
            <h2>{{ $setting['name'] }}</h2>
        @endif

        @if (!empty($setting['description']))
            <div class="well well-sm">{{ $setting['description'] }}</div>
        @endif
    </div>
    <br>

    <div class="buttons">
        <div class="pull-right">
            {!! Form::open([
                'url' => urldecode($confirm_url),
                'id' => 'redirect-form',
                'role' => 'form',
                'autocomplete' => "off",
                'novalidate' => 'true'
            ]) !!}
                <button @click="onRedirectConfirm" type="button" id="button-confirm" class="btn btn-success">
                    {{ trans('general.confirm') }}
                </button>
                {!! Form::hidden('payment_method', $setting['code'], ['v-model' => 'form.payment_method']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
