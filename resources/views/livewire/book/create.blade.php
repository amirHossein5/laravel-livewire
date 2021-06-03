<section>
    <form action="" wire:submit.prevent="submit">
        <div x-data="toSlug()">
            <div class="py-3">
                <label for="title" class="select-none">title:</label>
                <input type="text" id="title" placeholder="title..." wire:model="title"
                    @input="$wire.set('slug',convert(event.target.value))" @error('title')
                    class="border-red-500 form-control bg-transparent" @enderror class="form-control bg-transparent">
                @error('title')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="py-3">
                <label for="slug" class="select-none">slug:</label>
                <input type="slug" id="slug" wire:model="slug" placeholder="slug..." @error('slug')
                    class="border-red-500 form-control bg-transparent" @enderror class="form-control bg-transparent">
                @error('slug')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="py-3">
            <label for="description" class="select-none">description:</label>
            <textarea id="description" cols="50" rows="10" @error('description')
                class="border-red-500 form-control bg-transparent" @enderror class="form-control bg-transparent"
                wire:model="description"></textarea>
            @error('description')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit"
            class="w-full py-3 bg-green-700 rounded-lg focus:outline-none focus:ring-4 ring-green-800">submit</button>
    </form>
</section>
