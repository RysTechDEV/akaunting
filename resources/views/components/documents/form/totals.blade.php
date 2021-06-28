<template>
    <div class="d-flex align-items-center justify-content-end mt-3">
        <span>{{ texts[0] }}</span>
        <money v-bind="{
            decimal: this.currencySymbol.decimal_mark,
            thousands: this.currencySymbol.thousands_separator,
            prefix: (this.currencySymbol.symbol_first) ? this.currencySymbol.symbol : '',
            suffix: (!this.currencySymbol.symbol_first) ? this.currencySymbol.symbol : '',
            precision: parseInt(this.currencySymbol.precision),
            masked: true
        }" :value="price" name="rate" disabled size="5" masked class="disabled-money text-right mr-2 js-conversion-input"></money>
        <span class="mr-2">{{ currecyCode }}</span>
        <input v-model="currencyRate" @input="onChange" class="disabled-money text-right js-conversion-input" size="4" />
    </div>
</template>

<script>
import {Money} from 'v-money';

export default {
    name: 'akaunting-currency-conversion',
    components: {
        Money
    },

    props: {
        currencyConversionText: {
            type: String,
            default: 'Currency conversion'
        },
        price: {
            type: String,
            default: 'sale'
        },
        currecyCode: {
            type: String,
            default: 'USD'
        },
        currencyRate: {
            default: 1.000,
        },
        currencySymbol: {
           default: {}
        }
    },

    data() {
        return {
            conversion: '',
            rate: this.currencyRate,
            texts: []
        };
    },

    created() {
        let conver = this.currencyConversionText.split(':price');

        this.texts.push(conver[0]);
        this.texts.push(conver[1].replace(':currency_code', this.currecyCode).replace(':currency_rate', this.currencyRate));
    },

    methods: {
        onChange() {
            this.$emit('change', this.rate);
        }
    },

    watch: {
        currencyConversionText: function (text) {
            this.conversion = text.replace(':price', this.price).replace(':currency_code', this.currecyCode).replace('', this.currencyRate);
        },

        price: function (price) {
            this.conversion = this.currencyConversionText.replace(':price', price).replace(':currency_code', this.currecyCode).replace(':currency_rate', '');
        },

        currecyCode: function (currecyCode) {
            this.conversion = this.currencyConversionText.replace(':price', this.price).replace(':currency_code', this.currecyCode).replace(':currency_rate', '');
        },

        currencyRate: function (currencyRate) {
            this.conversion = this.currencyConversionText.replace(':price', this.price).replace(':currency_code', this.currecyCode).replace(':currency_rate', '');
        },
         currencySymbol: function (currencySymbol) {
            this.conversion = this.currencyConversionText.replace(':price', this.price).replace(':currency_code', this.currecyCode).replace(':currency_rate', '');
        },
    },
};
</script>
