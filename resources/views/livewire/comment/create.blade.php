<div>
    <form action="" class="pb-16" wire:submit.prevent="submit">
        <div class="py-3">
            <textarea cols="30" rows="10" wire:model="body" @error('body')
                class="border-red-500 form-control bg-transparent" @enderror
                class="form-control bg-transparent"></textarea>
            @error('body')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="py-3">
            <span>rate:</span>
            <div class="flex">
                <div class="ml-5">
                    <label for="rate1" class="select-none">1</label>
                    <input type="radio" id="rate1" name="rate" value="1" wire:model="rate">
                </div>
                <div class="ml-5">
                    <label for="rate2" class="select-none">2</label>
                    <input type="radio" id="rate2" name="rate" value="2" wire:model="rate">
                </div>
                <div class="ml-5">
                    <label for="rate3" class="select-none">3</label>
                    <input type="radio" id="rate3" name="rate" value="3" wire:model="rate">
                </div>
                <div class="ml-5">
                    <label for="rate4" class="select-none">4</label>
                    <input type="radio" id="rate4" name="rate" value="4" wire:model="rate">
                </div>
                <div class="ml-5">
                    <label for="rate5" class="select-none">5</label>
                    <input type="radio" id="rate5" name="rate" value="5" wire:model="rate">
                </div>
            </div>
            @error('rate')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="relative mt-4">
            <span wire:loading class="absolute w-full h-full bg-gray-800 cursor-not-allowed opacity-50"></span>
            <button type="submit"
                class="w-full py-3 bg-green-700 rounded-lg focus:outline-none focus:ring-4 ring-green-800">submit</button>
        </div>
    </form>
</div>
