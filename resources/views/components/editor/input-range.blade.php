<div x-data="InputRange()" class="max-w-screen-xl mx-auto">

    Text Input:<br />
    <input class="w-full border" type="input" x-model="value" />

    Range Input:<br />
    <input class="w-full" type="range" x-model="value" min="{{ $min }}" max="{{ $max }}" step="{{ $step }}" />

</div>

<script>
    function InputRange() {
        return {
            value: {{ $defaultValue }},
            init() {
                this.$watch('value', value => {
                    this.$dispatch('{{ $changeEvent }}', this.value);
                });
            }
        }
    }
</script>
