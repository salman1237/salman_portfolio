@extends('admin.layouts.app')

@section('page-title', 'Add New Skill')

@section('content')
<div class="max-w-2xl">
    <form method="POST" action="{{ route('admin.skills.store') }}" enctype="multipart/form-data" class="space-y-6">
        @csrf
        <div class="glass-card rounded-2xl p-6">
            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-300">Category *</label>
                    <input type="text" name="category" id="category" value="{{ old('category') }}" required
                        class="mt-1 block w-full rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 px-4 py-3"
                        placeholder="e.g., Algorithms & Data Structures">
                </div>

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-300">Skill Name *</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required
                        class="mt-1 block w-full rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 px-4 py-3"
                        placeholder="e.g., Algorithms">
                </div>

                <div>
                    <label for="icon" class="block text-sm font-medium text-gray-300">Icon (Optional)</label>
                    <input type="file" name="icon" id="icon" accept="image/*"
                        class="mt-1 block w-full rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 px-4 py-3 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-500 file:text-white hover:file:bg-indigo-600">
                    <p class="mt-1 text-xs text-gray-400">PNG, JPG, GIF, SVG up to 2MB</p>
                </div>

                <div>
                    <label for="proficiency_level" class="block text-sm font-medium text-gray-300">Proficiency Level</label>
                    <input type="text" name="proficiency_level" id="proficiency_level" value="{{ old('proficiency_level') }}"
                        class="mt-1 block w-full rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 px-4 py-3"
                        placeholder="e.g., Advanced, Intermediate, Beginner">
                </div>

                <div>
                    <label for="order" class="block text-sm font-medium text-gray-300">Display Order</label>
                    <input type="number" name="order" id="order" value="{{ old('order', 0) }}"
                        class="mt-1 block w-full rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 px-4 py-3">
                </div>
            </div>

            <div class="mt-6 flex gap-3">
                <button type="submit" class="btn-gradient">
                    Create Skill
                </button>
                <a href="{{ route('admin.skills.index') }}" class="px-6 py-3 rounded-xl font-semibold text-gray-300 border border-white/20 hover:border-white/40 transition-all">
                    Cancel
                </a>
            </div>
        </div>
    </form>
</div>
@endsection
