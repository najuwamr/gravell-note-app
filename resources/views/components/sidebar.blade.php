<div x-data="{ collapsed: false }"
     x-init="feather.replace()"
     x-effect="feather.replace()"
     class="flex">

    <div :class="collapsed ? 'w-16' : 'w-52'"
         class="h-screen bg-viridian-300 text-virian-950 transition-all duration-300 ease-in-out flex flex-col justify-between">

        <div class="px-3 py-4 space-y-4">
            <div class="flex items-center justify-between">
                <h2 x-show="!collapsed" class="text-xl font-bold font-poppins">Gravell</h2>
                <button @click="collapsed = !collapsed; $nextTick(() => feather.replace())"
                        class="text-viridian-950 hover:bg-viridian-600 p-2 rounded transition">
                    <i data-feather="chevron-left" x-show="!collapsed" class="w-5 h-5"></i>
                    <i data-feather="chevron-right" x-show="collapsed" class="w-5 h-5"></i>
                </button>
            </div>

            <button class="flex items-center w-full px-3 py-2 hover:bg-viridian-600 rounded transition">
                <i data-feather="plus" class="w-5 h-5"></i>
                <span x-show="!collapsed" class="ml-3 font-poppins text-sm">New Project</span>
            </button>
            <button class="flex items-center w-full px-3 py-2 hover:bg-viridian-600 rounded transition">
                <i data-feather="file-plus" class="w-5 h-5"></i>
                <span x-show="!collapsed" class="ml-3 font-poppins text-sm">New Note</span>
            </button>

            <nav class="pt-2 space-y-1">
                <a href="/home" class="flex items-center w-full px-3 py-2 hover:bg-viridian-600 rounded transition">
                    <i data-feather="home" class="w-5 h-5"></i>
                    <span x-show="!collapsed" class="ml-3 font-poppins text-sm">Home</span>
                </a>
                <a href="/notes" class="flex items-center w-full px-3 py-2 hover:bg-viridian-600 rounded transition">
                    <i data-feather="file-text" class="w-5 h-5"></i>
                    <span x-show="!collapsed" class="ml-3 font-poppins text-sm">All Notes</span>
                </a>
                <a href="/projects" class="flex items-center w-full px-3 py-2 hover:bg-viridian-600 rounded transition">
                    <i data-feather="folder" class="w-5 h-5"></i>
                    <span x-show="!collapsed" class="ml-3 font-poppins text-sm">My Projects</span>
                </a>
            </nav>
        </div>

        <div class="px-3 py-4 space-y-2">
            <a href="/settings" class="flex items-center w-full px-3 py-2 hover:bg-viridian-600 rounded transition">
                <i data-feather="settings" class="w-5 h-5"></i>
                <span x-show="!collapsed" class="ml-3 font-poppins text-sm">Settings</span>
            </a>
            <p x-show="!collapsed" class="text-xs text-viridian-950 text-right font-poppins">©2025 Najuwamr</p>
        </div>
    </div>
</div>
