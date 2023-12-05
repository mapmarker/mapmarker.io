<div>
     {{-- EXPERIENCE SELECTOR MOBILE --}}
     <div class="sm:hidden">
        <label for="tabs" class="sr-only">Select a tab</label>
        <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
        <select x-model="experience" id="tabs" name="tabs" class="block w-full text-gray-200 bg-gray-700 hover:bg-gray-800 rounded-md border-gray-900 focus:border-indigo-500 focus:ring-indigo-500">
            <option value="icon">Icon</option>
            <option value="pin-with-text">Pin with Text</option>
            <option value="pin-with-icon">Pin with Icon</option>
            <option value="icon-stack">Icon Stack</option>
        </select>
    </div>

    {{-- EXPERIENCE SELECTOR DESKTOP --}}
    <div class="hidden sm:block">
        <nav class="isolate flex divide-x divide-gray-900 rounded-lg overflow-hidden shadow" aria-label="Tabs">
            <x-editor.experience-selector-item experience="icon" />
            <x-editor.experience-selector-item experience="pin-with-text" />
            <x-editor.experience-selector-item experience="pin-with-icon" />
            <x-editor.experience-selector-item experience="icon-stack" />
        </nav>
    </div>
</div>
