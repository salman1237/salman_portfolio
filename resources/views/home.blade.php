@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Hero Section -->
    <div class="text-center py-12 animate-fade-in">
        @if($personalInfo && $personalInfo->photo)
            <div class="relative inline-block">
                <div class="absolute inset-0 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-full blur-lg opacity-50"></div>
                <img class="relative mx-auto h-36 w-36 rounded-full border-4 border-white/20 shadow-2xl object-cover" src="{{ asset('storage/' . $personalInfo->photo) }}" alt="{{ $personalInfo->name }}">
            </div>
        @endif
        <h1 class="mt-8 text-5xl md:text-6xl font-extrabold gradient-text text-glow">{{ $personalInfo->name ?? 'Welcome' }}</h1>
        <h2 class="mt-2 text-2xl font-semibold gradient-text">{{ $personalInfo->title ?? 'Entrepreneur' }}</h2>
        <p class="mt-4 text-xl text-gray-300 max-w-5xl mx-auto text-justify leading-relaxed">{{ $personalInfo->bio ?? 'Passionate Developer & Problem Solver' }}</p>
        <div class="mt-10 flex justify-center gap-6 flex-wrap">
            @if($personalInfo->codeforces ?? false)
                <a href="{{ $personalInfo->codeforces }}" target="_blank" class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full blur-md opacity-0 group-hover:opacity-70 transition-all duration-300"></div>
                    <div class="relative w-14 h-14 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-white/10 hover:border-white/30 transition-all duration-300 hover:scale-110">
                        <svg class="w-7 h-7 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.5 7.5C5.328 7.5 6 8.172 6 9v10.5c0 .828-.672 1.5-1.5 1.5h-3C.672 21 0 20.328 0 19.5V9c0-.828.672-1.5 1.5-1.5h3zm9-4.5c.828 0 1.5.672 1.5 1.5v15c0 .828-.672 1.5-1.5 1.5h-3c-.828 0-1.5-.672-1.5-1.5v-15c0-.828.672-1.5 1.5-1.5h3zm9 7.5c.828 0 1.5.672 1.5 1.5v7.5c0 .828-.672 1.5-1.5 1.5h-3c-.828 0-1.5-.672-1.5-1.5V12c0-.828.672-1.5 1.5-1.5h3z"/>
                        </svg>
                    </div>
                    <span class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 text-xs text-gray-400 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity">Codeforces</span>
                </a>
            @endif

            @if($personalInfo->website ?? false)
                <a href="{{ $personalInfo->website }}" target="_blank" class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full blur-md opacity-0 group-hover:opacity-70 transition-all duration-300"></div>
                    <div class="relative w-14 h-14 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-white/10 hover:border-white/30 transition-all duration-300 hover:scale-110">
                        <img src="{{ asset('images/lc_icon.png') }}" alt="LeetCode" class="w-7 h-7 object-contain">
                    </div>
                    <span class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 text-xs text-gray-400 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity">LeetCode</span>
                </a>
            @endif

            @if($personalInfo->github ?? false)
                <a href="{{ $personalInfo->github }}" target="_blank" class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full blur-md opacity-0 group-hover:opacity-70 transition-all duration-300"></div>
                    <div class="relative w-14 h-14 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-white/10 hover:border-white/30 transition-all duration-300 hover:scale-110">
                        <svg class="w-7 h-7 text-purple-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </div>
                    <span class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 text-xs text-gray-400 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity">GitHub</span>
                </a>
            @endif

            <!-- @if($personalInfo->linkedin ?? false)
                <a href="{{ $personalInfo->linkedin }}" target="_blank" class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-400 rounded-full blur-md opacity-0 group-hover:opacity-70 transition-all duration-300"></div>
                    <div class="relative w-14 h-14 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-white/10 hover:border-white/30 transition-all duration-300 hover:scale-110">
                        <svg class="w-7 h-7 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </div>
                    <span class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 text-xs text-gray-400 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity">LinkedIn</span>
                </a>
            @endif -->
        </div>
    </div>

    <!-- Quick Summary -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
        <!-- Skills Preview by Category -->
        <div class="glass-card rounded-2xl hover-lift animate-fade-in-delay-1">
            <div class="px-6 py-6">
                <h3 class="section-title">Skills</h3>
                <div class="space-y-5">
                    @forelse($skills as $category => $categorySkills)
                        <div>
                            <h4 class="text-sm font-semibold gradient-text-cool mb-3">{{ $category }}</h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach($categorySkills->take(4) as $skill)
                                    <span class="skill-badge">
                                        {{ $skill->name }}
                                    </span>
                                @endforeach
                                @if($categorySkills->count() > 4)
                                    <span class="text-xs text-gray-500">+{{ $categorySkills->count() - 4 }} more</span>
                                @endif
                            </div>
                        </div>
                    @empty
                        <p class="text-sm text-gray-400">No skills added yet.</p>
                    @endforelse
                </div>
                <a href="{{ route('skills') }}" class="mt-6 inline-flex items-center text-sm font-medium text-indigo-400 hover:text-indigo-300 transition-colors">
                    View all skills 
                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>

        <!-- Achievements Preview -->
        <div class="glass-card rounded-2xl hover-lift animate-fade-in-delay-1">
            <div class="px-6 py-6">
                <h3 class="section-title">Achievements</h3>
                <div class="space-y-4">
                    @forelse($achievements as $achievement)
                        <div class="border-l-2 border-indigo-500/30 pl-4">
                            <div class="flex items-start justify-between gap-2">
                                <h4 class="text-base font-semibold text-white">{{ $achievement->title }}</h4>
                                <span class="px-2 py-0.5 text-xs font-medium rounded-full flex-shrink-0
                                    @if($achievement->category === 'programming') bg-blue-500/20 text-blue-300 border border-blue-500/30
                                    @elseif($achievement->category === 'hackathon') bg-purple-500/20 text-purple-300 border border-purple-500/30
                                    @else bg-green-500/20 text-green-300 border border-green-500/30
                                    @endif">
                                    {{ ucfirst($achievement->category) }}
                                </span>
                            </div>
                            <p class="text-sm gradient-text-cool font-medium mt-1">{{ $achievement->position }}</p>
                            @if($achievement->organization)
                            <p class="text-xs text-gray-400 mt-1">
                                {{ $achievement->organization }} • {{ $achievement->year }}
                            </p>
                            @endif
                        </div>
                    @empty
                        <p class="text-sm text-gray-400">No achievements added yet.</p>
                    @endforelse
                </div>
                <a href="{{ route('achievements') }}" class="mt-6 inline-flex items-center text-sm font-medium text-indigo-400 hover:text-indigo-300 transition-colors">
                    View all achievements 
                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Partnership & Collaboration Section -->
    @if($partnerships->count() > 0)
    <div class="mt-12 relative py-16 bg-gradient-to-b from-slate-900/50 to-slate-800/30 rounded-2xl overflow-hidden">
        <div class="relative z-10 text-center mb-12">
            <h3 class="text-4xl font-bold text-white mb-3 text-glow">
                Partnership & Collaboration
            </h3>
            <p class="text-lg text-gray-300">Organizations I've worked with</p>
        </div>
        
        <div class="relative z-10 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 px-4">
            @foreach($partnerships as $partnership)
                <div class="bg-white rounded-xl shadow-md hover:shadow-xl hover:scale-105 transition-all duration-300 group cursor-pointer">
                    @if($partnership->url)
                        <a href="{{ $partnership->url }}" target="_blank" class="block p-6">
                            <div class="flex items-center justify-center h-24">
                                <img src="{{ asset('storage/' . $partnership->logo) }}" 
                                     alt="{{ $partnership->name }}" 
                                     class="max-w-full max-h-full object-contain grayscale group-hover:grayscale-0 transition-all duration-300"
                                     title="{{ $partnership->name }}">
                            </div>
                        </a>
                    @else
                        <div class="p-6">
                            <div class="flex items-center justify-center h-24">
                                <img src="{{ asset('storage/' . $partnership->logo) }}" 
                                     alt="{{ $partnership->name }}" 
                                     class="max-w-full max-h-full object-contain grayscale group-hover:grayscale-0 transition-all duration-300"
                                     title="{{ $partnership->name }}">
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
    @endif

    <!-- Contact Section -->
    <div class="mt-12 glass-card rounded-2xl hover-lift">
        <div class="px-6 py-6">
            <h3 class="section-title">Get in Touch</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @if($personalInfo->email ?? false)
                    <div class="flex items-center space-x-3">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500/20 flex items-center justify-center">
                            <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <span class="text-xs font-medium text-gray-500 uppercase tracking-wide">Email</span>
                            <a href="mailto:{{ $personalInfo->email }}" class="block text-sm text-indigo-400 hover:text-indigo-300 transition-colors">{{ $personalInfo->email }}</a>
                        </div>
                    </div>
                @endif
                @if($personalInfo->phone ?? false)
                    <div class="flex items-center space-x-3">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-green-500/20 flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <div>
                            <span class="text-xs font-medium text-gray-500 uppercase tracking-wide">Phone</span>
                            <span class="block text-sm text-gray-300">{{ $personalInfo->phone }}</span>
                        </div>
                    </div>
                @endif
                
                @foreach($socialLinks as $link)
                    <div class="flex items-center space-x-3">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500/20 flex items-center justify-center">
                            <img src="{{ asset('storage/' . $link->icon) }}" alt="{{ $link->name }}" class="w-5 h-5 object-contain">
                        </div>
                        <div>
                            <span class="text-xs font-medium text-gray-500 uppercase tracking-wide">{{ $link->name }}</span>
                            <a href="{{ $link->url }}" target="_blank" class="block text-sm text-indigo-400 hover:text-indigo-300 transition-colors">Visit Profile</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
