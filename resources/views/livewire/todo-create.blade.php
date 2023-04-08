
<div class="w-full ">
   
<label for="task" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your task</label>
  @error('title') <span class="text-red-700">{{ $message }}</span> @enderror
<textarea wire:model.defer="title" wire:keydown.enter="save" id="task" rows="4" class="outline-none block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
{{$title}}
</div>

