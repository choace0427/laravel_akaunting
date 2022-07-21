<div class="print-template">
    <table class="border-bottom-1">
        <tbody>
            <tr>
                <td style="width: 60%; padding: 0 0 15px 0;">
                    <h2 class="mb-1" style="font-size: 14px; font-weight:600; margin-bottom: 15px;">
                        {{ trans('transfers.from_account') }}
                    </h2>

                    <table>
                        <tr>
                            <td valign="top" style="width: 30%; margin: 0px; padding: 8px 4px 0 0; font-size: 12px; font-weight:600;">
                                {{ trans('accounts.account_name') }}
                            </td>

                            <td valign="top" class="border-bottom-dashed-black" style="width:70%; margin: 0px; padding: 8px 0 0 0; font-size: 12px;">
                                {{ $transfer->expense_account->name }}
                            </td>
                        </tr>
                    </table>

                    <table>
                        <tr>
                            <td valign="top" style="width: 30%; margin: 0px; padding: 8px 4px 0 0; font-size: 12px; font-weight:600;">
                                {{ trans('accounts.number') }}
                            </td>

                            <td valign="top" class="border-bottom-dashed-black" style="width:70%; margin: 0px; padding: 8px 0 0 0; font-size: 12px;">
                                {{ $transfer->expense_account->number }}
                            </td>
                        </tr>
                    </table>

                    @if (! empty($transfer->expense_account->bank_name))
                    <table>
                        <tr>
                            <td valign="top" style="width: 30%; margin: 0px; padding: 8px 4px 0 0; font-size: 12px; font-weight:600;">
                                {{ trans('accounts.bank_name') }}
                            </td>

                            <td valign="top" class="border-bottom-dashed-black" style="width:70%; margin: 0px; padding: 8px 0 0 0; font-size: 12px;">
                                {{ $transfer->expense_account->bank_name }}
                            </td>
                        </tr>
                    </table>
                    @endif

                    @if (! empty($transfer->expense_account->bank_phone))
                    <table>
                        <tr>
                            <td valign="top" style="width: 30%; margin: 0px; padding: 8px 4px 0 0; font-size: 12px; font-weight:600;">
                                {{ trans('general.phone') }}
                            </td>

                            <td valign="top" class="border-bottom-dashed-black" style="width:70%; margin: 0px; padding: 8px 0 0 0; font-size: 12px;">
                                {{ $transfer->expense_account->bank_phone }}
                            </td>
                        </tr>
                    </table>
                    @endif

                    @if (! empty($transfer->expense_account->bank_address))
                    <table>
                        <tr>
                            <td valign="top" style="width: 30%; margin: 0px; padding: 8px 4px 0 0; font-size: 12px; font-weight:600;">
                                {{ trans('general.address') }}
                            </td>

                            <td valign="top" class="border-bottom-dashed-black" style="width:70%; margin: 0px; padding: 8px 0 0 0; font-size: 12px;">
                                {{ $transfer->expense_account->bank_address }}
                            </td>
                        </tr>
                    </table>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>

    <table class="border-bottom-1" style="margin-top:15px;">
        <tbody>
            <tr>
                <td style="width: 60%; padding: 0 0 15px 0;">
                    <h2 class="mb-1" style="font-size: 14px; font-weight:600; margin-bottom: 15px;">
                        {{ trans('transfers.to_account') }}
                    </h2>

                    <table>
                        <tr>
                            <td valign="top" style="width: 30%; margin: 0px; padding: 8px 4px 0 0; font-size: 12px; font-weight:600;">
                                {{ trans('accounts.account_name') }}
                            </td>

                            <td valign="top" class="border-bottom-dashed-black" style="width:70%; margin: 0px; padding: 8px 0 0 0; font-size: 12px;">
                                {{ $transfer->income_account->name }}
                            </td>
                        </tr>
                    </table>

                    <table>
                        <tr>
                            <td valign="top" style="width: 30%; margin: 0px; padding: 8px 4px 0 0; font-size: 12px; font-weight:600;">
                                {{ trans('accounts.number') }}
                            </td>

                            <td valign="top" class="border-bottom-dashed-black" style="width:70%; margin: 0px; padding: 8px 0 0 0; font-size: 12px;">
                                {{ $transfer->income_account->number }}
                            </td>
                        </tr>
                    </table>

                    @if (! empty($transfer->income_account->bank_name))
                    <table>
                        <tr>
                            <td valign="top" style="width: 30%; margin: 0px; padding: 8px 4px 0 0; font-size: 12px; font-weight:600;">
                                {{ trans('accounts.bank_name') }}
                            </td>

                            <td valign="top" class="border-bottom-dashed-black" style="width:70%; margin: 0px; padding: 8px 0 0 0; font-size: 12px;">
                                {{ $transfer->income_account->bank_name }}
                            </td>
                        </tr>
                    </table>
                    @endif

                    @if (! empty($transfer->income_account->bank_phone))
                    <table>
                        <tr>
                            <td valign="top" style="width: 30%; margin: 0px; padding: 8px 4px 0 0; font-size: 12px; font-weight:600;">
                                {{ trans('general.phone') }}
                            </td>

                            <td valign="top" class="border-bottom-dashed-black" style="width:70%; margin: 0px; padding: 8px 0 0 0; font-size: 12px;">
                                {{ $transfer->income_account->bank_phone }}
                            </td>
                        </tr>
                    </table>
                    @endif

                    @if (! empty($transfer->income_account->bank_address))
                    <table>
                        <tr>
                            <td valign="top" style="width: 30%; margin: 0px; padding: 8px 4px 0 0; font-size: 12px; font-weight:600;">
                                {{ trans('general.address') }}
                            </td>

                            <td valign="top" class="border-bottom-dashed-black" style="width:70%; margin: 0px; padding: 8px 0 0 0; font-size: 12px;">
                                {{ $transfer->income_account->bank_address }}
                            </td>
                        </tr>
                    </table>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>

    <table style="margin-top:15px;">
        <tr>
            <td style="padding:0 0 15px 0;">
                <h2 class="text-left text-uppercase" style="font-size: 14px; font-weight:600;">
                    {{ trans_choice('transfers.details', 2) }}
                </h2>
            </td>
        </tr>
    </table>

    <table class="border-bottom-1" style="padding-bottom:15px;">
        <tr>
            <td valign="top" style="width: 30%; margin: 0px; padding: 8px 4px 0 0; font-size: 12px; font-weight:600;">
                {{ trans('general.date') }}
            </td>

            <td valign="top" valign="top" class="border-bottom-dashed-black" style="width:70%; margin: 0px; padding: 8px 0 0 0; font-size: 12px;">
                <x-date date="{{ $transfer->expense_transaction->paid_at}}" />
            </td>
        </tr>

        <tr>
            <td valign="top" style="width: 30%; margin: 0px; padding: 8px 4px 0 0; font-size: 12px; font-weight:600;">
                {{ trans_choice('general.payment_methods', 1) }}
            </td>

            <td valign="top" valign="top" class="border-bottom-dashed-black" style="width:70%; margin: 0px; padding: 8px 0 0 0; font-size: 12px;">
                @if (! empty($payment_methods[$transfer->expense_transaction->payment_method]))
                    {!! $payment_methods[$transfer->expense_transaction->payment_method] !!}
                @else
                    <x-empty-data />
                @endif
            </td>
        </tr>

        <tr>
            <td valign="top" style="width: 30%; margin: 0px; padding: 8px 4px 0 0; font-size: 12px; font-weight:600;">
                {{ trans('general.reference') }}
            </td>

            <td valign="top" valign="top" class="border-bottom-dashed-black" style="width:70%; margin: 0px; padding: 8px 0 0 0; font-size: 12px;">
                {{ $transfer->expense_transaction->reference }}
            </td>
        </tr>

        <tr>
            <td valign="top" style="width: 30%; margin: 0px; padding: 8px 4px 0 0; font-size: 12px; font-weight:600;">
                {{ trans('general.description') }}
            </td>

            <td valign="top" valign="top" class="border-bottom-dashed-black" style="width:70%; margin: 0px; padding: 8px 0 0 0; font-size: 12px;">
                {{ $transfer->expense_transaction->description }}
            </td>
        </tr>

        <tr>
            <td></td>
        </tr>
    </table>

    <table style="text-align: right; margin-top:55px;">
        <tr>
            <td valign="center" style="width:80%; display:block; float:right; background-color: #55588B; -webkit-print-color-adjust: exact; color:#ffffff; border-radius: 5px;">
                <table>
                    <tr>
                        <td valign="center" style="width: 80%; padding:0; font-size: 14px; font-weight:600; color:#ffffff;">
                            {{ trans('general.amount') }}
                        </td>

                        <td valign="center" style="width: 20%; padding:0; font-size: 14px; color:#ffffff;">
                            <x-money :amount="$transfer->expense_transaction->amount" :currency="$transfer->expense_transaction->currency_code" convert />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
