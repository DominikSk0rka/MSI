<div class="fixed w-screen min-h-screen text-white font-mono flex flex-col items-center justify-center" style="background-image: url('tloJungle.jpg'); background-size: cover; background-position: center;">
    <div class="text-4xl mb-11">{{ $questionString }}</div>
    <div class="rounded-xl p-5 h-64 w-1/3 flex-col justify-center" style="background-color: rgba(0, 0, 0, 0.0);">

        @if ($finished)
            <p class="flex justify-center mb-10 capitalize">{{ $description }}</p>
            <img src="{{ $linkToImage }}" class="mb-5 border border-orange-100 rounded-3xl shadow-md shadow-orange-500" />
            <a href="/main" class="hover:text-orange-400 capitalize mt-5 self-center w-full duration-300">try again</a>
        @endif

        <div class="grid grid-cols-2 h-full w-full duration-300">
            @if (!$finished)
                <button wire:click="handleClick('{{ $answerA }}')"
                    class="text-3xl text-center text-white flex justify-center items-center hover:text-orange-400 duration-300 focus:outline-none mb-4 w-full">{{ $answerA }}</button>
                <button wire:click="handleClick('{{ $answerB }}')"
                    class="text-3xl text-center text-white flex justify-center items-center hover:text-orange-400 duration-300 focus:outline-none mb-4 w-full">{{ $answerB }}</button>
            @endif
        </div>
    </div>
</div>
