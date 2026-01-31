@extends('admin.layouts.app')

@section('page-title', 'Edit Personal Information')

@section('content')
<div class="max-w-2xl">
    <form method="POST" action="{{ route('admin.personal-info.update') }}" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="glass-card rounded-2xl p-6">
            <div class="grid grid-cols-1 gap-6">
                <!-- Photo -->
                <div>
                    <label for="photo" class="block text-sm font-medium text-gray-300">Profile Photo</label>
                    @if($personalInfo->photo ?? false)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $personalInfo->photo) }}" alt="{{ $personalInfo->name }}" class="h-24 w-24 rounded-full object-cover border-2 border-indigo-500/30">
                        </div>
                    @endif
                    <input type="file" name="photo" id="photo" accept="image/*"
                        class="mt-3 block w-full text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-indigo-500/20 file:text-indigo-400 hover:file:bg-indigo-500/30 transition-all cursor-pointer">
                    <p class="mt-1 text-sm text-gray-500">PNG, JPG, GIF up to 2MB</p>
                </div>

                <!-- Resume PDF -->
                <div>
                    <label for="resume_pdf" class="block text-sm font-medium text-gray-300">Resume PDF</label>
                    @if($personalInfo->resume_pdf ?? false)
                        <div class="mt-2 flex items-center gap-3">
                            <a href="{{ asset('storage/' . $personalInfo->resume_pdf) }}" target="_blank" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-indigo-500/20 text-indigo-400 hover:bg-indigo-500/30 transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                </svg>
                                View Current Resume
                            </a>
                        </div>
                    @endif
                    <input type="file" name="resume_pdf" id="resume_pdf" accept=".pdf"
                        class="mt-3 block w-full text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-indigo-500/20 file:text-indigo-400 hover:file:bg-indigo-500/30 transition-all cursor-pointer">
                    <p class="mt-1 text-sm text-gray-500">Upload your custom resume PDF (will be used instead of auto-generated CV)</p>
                </div>

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-300">Full Name *</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $personalInfo->name ?? '') }}" required
                        class="mt-1 block w-full rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 px-4 py-3">
                </div>

                <!-- Tagline -->
                <div>
                    <label for="tagline" class="block text-sm font-medium text-gray-300">Tagline</label>
                    <input type="text" name="tagline" id="tagline" value="{{ old('tagline', $personalInfo->tagline ?? '') }}"
                        class="mt-1 block w-full rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 px-4 py-3">
                </div>

                <!-- Title -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-300">Professional Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $personalInfo->title ?? '') }}"
                        class="mt-1 block w-full rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 px-4 py-3">
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300">Email *</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $personalInfo->email ?? '') }}" required
                        class="mt-1 block w-full rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 px-4 py-3">
                </div>

                <!-- Phone -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-300">Phone</label>
                    <input type="text" name="phone" id="phone" value="{{ old('phone', $personalInfo->phone ?? '') }}"
                        class="mt-1 block w-full rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 px-4 py-3">
                </div>

                <!-- Address -->
                <div>
                    <label for="address" class="block text-sm font-medium text-gray-300">Address</label>
                    <textarea name="address" id="address" rows="2"
                        class="mt-1 block w-full rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 px-4 py-3">{{ old('address', $personalInfo->address ?? '') }}</textarea>
                </div>

                <!-- LinkedIn -->
                <div>
                    <label for="linkedin" class="block text-sm font-medium text-gray-300">LinkedIn URL</label>
                    <input type="url" name="linkedin" id="linkedin" value="{{ old('linkedin', $personalInfo->linkedin ?? '') }}"
                        class="mt-1 block w-full rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 px-4 py-3">
                </div>

                <!-- GitHub -->
                <div>
                    <label for="github" class="block text-sm font-medium text-gray-300">GitHub URL</label>
                    <input type="url" name="github" id="github" value="{{ old('github', $personalInfo->github ?? '') }}"
                        class="mt-1 block w-full rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 px-4 py-3">
                </div>

                <!-- Codeforces -->
                <div>
                    <label for="codeforces" class="block text-sm font-medium text-gray-300">Codeforces URL</label>
                    <input type="url" name="codeforces" id="codeforces" value="{{ old('codeforces', $personalInfo->codeforces ?? '') }}"
                        class="mt-1 block w-full rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 px-4 py-3">
                </div>

                <!-- LeetCode -->
                <div>
                    <label for="website" class="block text-sm font-medium text-gray-300">LeetCode URL</label>
                    <input type="url" name="website" id="website" value="{{ old('website', $personalInfo->website ?? '') }}"
                        class="mt-1 block w-full rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 px-4 py-3">
                </div>

                <!-- Date of Birth -->
                <div>
                    <label for="date_of_birth" class="block text-sm font-medium text-gray-300">Date of Birth</label>
                    <input type="date" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth', $personalInfo->date_of_birth ? $personalInfo->date_of_birth->format('Y-m-d') : '') }}"
                        class="mt-1 block w-full rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 px-4 py-3">
                </div>

                <!-- Bio -->
                <div>
                    <label for="bio" class="block text-sm font-medium text-gray-300">Bio</label>
                    <textarea name="bio" id="bio" rows="4"
                        class="mt-1 block w-full rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 px-4 py-3">{{ old('bio', $personalInfo->bio ?? '') }}</textarea>
                </div>
            </div>

            <div class="mt-6">
                <button type="submit" class="btn-gradient">
                    Update Personal Info
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
