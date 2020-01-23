@extends('layouts.admin')

@section('title', trans_choice('general.revenues', 2))

@section('new_button')
    @permission('create-sales-revenues')
        <span><a href="{{ route('revenues.create') }}" class="btn btn-primary btn-sm btn-success header-button-top"><span class="fa fa-plus"></span> &nbsp;{{ trans('general.add_new') }}</a></span>
        <span><a href="{{ url('common/import/sales/revenues') }}" class="btn btn-white btn-sm header-button-top"><span class="fa fa-upload"></span> &nbsp;{{ trans('import.import') }}</a></span>
    @endpermission
    <span><a href="{{ route('revenues.export', request()->input()) }}" class="btn btn-white btn-sm header-button-top"><span class="fa fa-download"></span> &nbsp;{{ trans('general.export') }}</a></span>
@endsection

@section('content')
    @if ($revenues->count())
        <div class="card">
            <div class="card-header border-bottom-0" v-bind:class="[bulk_action.show ? 'bg-gradient-primary' : '']">
                {!! Form::open([
                    'url' => 'sales/revenues',
                    'role' => 'form',
                    'method' => 'GET',
                    'class' => 'mb-0'
                ]) !!}
                    <div class="row" v-if="!bulk_action.show">
                        <div class="col-12 d-flex align-items-center">
                            <span class="font-weight-400 d-none d-lg-block mr-2">{{ trans('general.search') }}:</span>
                            <akaunting-search></akaunting-search>
                        </div>
                    </div>

                    {{ Form::bulkActionRowGroup('general.revenues', $bulk_actions, 'sales/revenues') }}
                {!! Form::close() !!}
            </div>

            <div class="table-responsive">
                <table class="table table-flush table-hover">
                    <thead class="thead-light">
                        <tr class="row table-head-line">
                            <th class="col-sm-2 col-md-2 col-lg-1 col-xl-1 d-none d-sm-block">{{ Form::bulkActionAllGroup() }}</th>
                            <th class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xl-1">@sortablelink('paid_at', trans('general.date'), ['filter' => 'active, visible'], ['class' => 'col-aka', 'rel' => 'nofollow'])</th>
                            <th class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 text-right">@sortablelink('amount', trans('general.amount'))</th>
                            <th class="col-md-2 col-lg-2 col-xl-4 d-none d-md-block text-left">@sortablelink('contact.name', trans_choice('general.customers', 1))</th>
                            <th class="col-lg-2 col-xl-2 d-none d-lg-block text-left">@sortablelink('category.name', trans_choice('general.categories', 1))</th>
                            <th class="col-lg-2 col-xl-1 d-none d-lg-block text-left">@sortablelink('account.name', trans_choice('general.accounts', 1))</th>
                            <th class="col-xs-4 col-sm-2 col-md-2 col-lg-1 col-xl-1 text-center"><a>{{ trans('general.actions') }}</a></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($revenues as $item)
                            <tr class="row align-items-center border-top-1">
                                <td class="col-sm-2 col-md-2 col-lg-1 col-xl-1 d-none d-sm-block">{{ Form::bulkActionGroup($item->id, $item->contact->name) }}</td>
                                @if ($item->reconciled)
                                    <td class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xl-1">@date($item->paid_at)</td>
                                @else
                                    <td class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xl-1"><a class="col-aka" href="{{ route('revenues.edit', $item->id) }}">@date($item->paid_at)</a></td>
                                @endif
                                <td class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 text-right">@money($item->amount, $item->currency_code, true)</td>
                                <td class="col-md-2 col-lg-2 col-xl-4 d-none d-md-block text-left">{{ $item->contact->name }}</td>
                                <td class="col-lg-2 col-xl-2 d-none d-lg-block text-left">{{ $item->category->name }}</td>
                                <td class="col-lg-2 col-xl-1 d-none d-lg-block text-left">{{ $item->account->name }}</td>
                                <td class="col-xs-4 col-sm-2 col-md-2 col-lg-1 col-xl-1 text-center">
                                    <div class="dropdown">
                                        <a class="btn btn-neutral btn-sm text-light items-align-center py-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-h text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            @if (!$item->reconciled)
                                                <a class="dropdown-item" href="{{ route('revenues.edit', $item->id) }}">{{ trans('general.edit') }}</a>
                                                <div class="dropdown-divider"></div>
                                            @endif
                                            @permission('create-sales-revenues')
                                                <a class="dropdown-item" href="{{ route('revenues.duplicate', $item->id) }}">{{ trans('general.duplicate') }}</a>
                                            @endpermission

                                            @permission('delete-sales-revenues')
                                                @if (!$item->reconciled)
                                                    <div class="dropdown-divider"></div>
                                                    {!! Form::deleteLink($item, 'sales/revenues') !!}
                                                @endif
                                            @endpermission
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer table-action">
                <div class="row">
                    @include('partials.admin.pagination', ['items' => $revenues])
                </div>
            </div>
        </div>
    @else
        @include('partials.admin.empty_page', ['page' => 'revenues', 'docs_path' => 'sales/revenues'])
    @endif


@endsection

@push('scripts_start')
    <script src="{{ asset('public/js/sales/revenues.js?v=' . version('short')) }}"></script>
@endpush
