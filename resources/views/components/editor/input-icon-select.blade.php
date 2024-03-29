<div
    {{ $attributes->merge(['class' => 'w-full']) }}
    x-data="InputIconSelect()">
        <label for="" class="block font-bold mb-1">Select Icon</label>
        <select class="w-full" x-ref="select"></select>
</div>

<script>
    function InputIconSelect() {
        return {
            multiple: false,
            value: '{{ $default }}',
            options: {!! json_encode($icons) !!},
            init() {
                let bootSelect2 = () => {
                    let selections = this.multiple ? this.value : [this.value]

                    $(this.$refs.select).select2({
                        selectionCssClass: 'py-5 :all:',
                        multiple: this.multiple,
                        data: this.options.map(i => ({
                            id: i.value,
                            text:  i.label,
                            title: i.value,
                            selected: selections.map(i => String(i)).includes(String(i.value)),
                        })),
                        escapeMarkup: function(markup) {
                            return markup;
                        },
                    })
                }

                let refreshSelect2 = () => {
                    $(this.$refs.select).select2('destroy')
                    this.$refs.select.innerHTML = ''
                    bootSelect2()
                }

                bootSelect2()

                $(this.$refs.select).on('change', () => {
                    let currentSelection = $(this.$refs.select).select2('data')

                    this.value = this.multiple
                        ? currentSelection.map(i => i.id)
                        : currentSelection[0].id

                        this.$dispatch('{{ $changeEvent }}', this.value)
                })

                this.$watch('value', () => refreshSelect2())
                this.$watch('options', () => refreshSelect2())
            },
        }
    }
</script>

<style>
    .select2-selection__arrow {
        margin-top: 7px;
    }
    .select2-selection__rendered {
        margin-top: -14px;
    }
</style>
