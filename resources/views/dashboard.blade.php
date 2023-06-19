<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    <x-splade-toggle>
                        <button @click.prevent="toggle">Show text</button>

                        <div v-show="toggled">
                            <p>...</p>
                            <button @click.prevent="setToggle(false)">Hide text</button>
                        </div>
                    </x-splade-toggle>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>