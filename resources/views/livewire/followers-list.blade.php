<div class="space-y-4 ">
    @foreach($followers as $follower)
    <div class="ps-4 lg:ps-2 xl:ps-0 pe-4 py-1">
        <div class="flex items-center gap-x-3">
          <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
          <div class="grow">
            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-400">Christina Bersh</span>
            <span class="block text-sm text-gray-500 dark:text-neutral-500">Followed by charles</span>
          </div>
          <div>
            <button  class="text-blue-500 font-medium text-sm">Follow</button>
          </div>
        </div>
      </div>
    @endforeach
</div>
