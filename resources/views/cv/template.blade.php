<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>CV - {{ $personalInfo->name ?? 'Resume' }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'DejaVu Serif', 'Times New Roman', serif;
            font-size: 10.5pt;
            line-height: 1.2;
            color: #000;
            padding: 36pt 50pt 36pt 50pt;
        }
        .header {
            text-align: center;
            margin-bottom: 10pt;
        }
        .header h1 {
            font-size: 20pt;
            font-weight: bold;
            margin-bottom: 6pt;
        }
        .contact-info {
            font-size: 9.5pt;
            line-height: 1.4;
        }
        .contact-info a {
            color: #0066cc;
            text-decoration: none;
        }
        .section-title {
            font-size: 11pt;
            font-weight: bold;
            text-transform: uppercase;
            margin-top: 12pt;
            margin-bottom: 4pt;
            border-bottom: 0.5pt solid #000;
            padding-bottom: 1pt;
        }
        .entry {
            margin-bottom: 8pt;
        }
        .entry-header {
            display: table;
            width: 100%;
            margin-bottom: 2pt;
        }
        .entry-left {
            display: table-cell;
            font-weight: bold;
            width: 70%;
        }
        .entry-right {
            display: table-cell;
            text-align: right;
            width: 30%;
            font-size: 9.5pt;
            font-style: italic;
        }
        .entry-subtitle {
            font-style: italic;
            font-size: 10pt;
            margin-bottom: 3pt;
        }
        ul {
            margin-top: 2pt;
            margin-left: 20pt;
            margin-bottom: 0;
        }
        ul li {
            margin-bottom: 2pt;
            line-height: 1.25;
            font-size: 10pt;
        }
        .skill-category {
            margin-bottom: 3pt;
            font-size: 10pt;
            line-height: 1.3;
        }
        .skill-category strong {
            font-weight: bold;
        }
        .achievement-item {
            margin-bottom: 2pt;
            font-size: 10pt;
            line-height: 1.25;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <h1>{{ $personalInfo->name ?? 'YOUR NAME' }}</h1>
        <div class="contact-info">
            @if($personalInfo->address ?? false){{ $personalInfo->address }}<br>@endif
            @if($personalInfo->email ?? false)<a href="mailto:{{ $personalInfo->email }}">{{ $personalInfo->email }}</a>@endif
            @if($personalInfo->phone ?? false) • {{ $personalInfo->phone }}@endif<br>
            @if($personalInfo->codeforces ?? false)<a href="{{ $personalInfo->codeforces }}">Codeforces</a> • @endif
            @if($personalInfo->website ?? false)<a href="{{ $personalInfo->website }}">LeetCode</a> • @endif
            @if($personalInfo->github ?? false)<a href="{{ $personalInfo->github }}">GitHub</a> • @endif
            @if($personalInfo->linkedin ?? false)<a href="{{ $personalInfo->linkedin }}">LinkedIn</a>@endif
        </div>
    </div>

    <!-- Skills -->
    @if($skills->count() > 0)
    <div class="section-title">Skills</div>
    @foreach($skills as $category => $categorySkills)
    <div class="skill-category">
        <strong>{{ $category }}:</strong> {{ $categorySkills->pluck('name')->join(', ') }}
    </div>
    @endforeach
    @endif

    <!-- Competitive Programming -->
    @if($achievements->count() > 0)
    <div class="section-title">Competitive Programming</div>
    <div class="entry">
        <ul style="margin-left: 20pt;">
            @foreach($achievements as $achievement)
            <li class="achievement-item">
                {{ $achievement->title }}
                @if($achievement->position) — {{ $achievement->position }}@endif
                @if($achievement->description), {{ $achievement->description }}@endif
            </li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Experience -->
    @if($experiences->count() > 0)
    <div class="section-title">Experience</div>
    @foreach($experiences as $exp)
    <div class="entry">
        <div class="entry-header">
            <div class="entry-left">{{ $exp->title }}</div>
            <div class="entry-right">
                @if($exp->start_date){{ $exp->start_date->format('M Y') }} – {{ $exp->end_date ? $exp->end_date->format('M Y') : 'Present' }}@endif
            </div>
        </div>
        <div class="entry-subtitle">{{ $exp->organization }}</div>
        @if($exp->description)
        <ul>
            @php
                $descriptions = is_array($exp->description) ? $exp->description : explode('.', $exp->description);
            @endphp
            @foreach($descriptions as $point)
                @php
                    $point = trim($point);
                @endphp
                @if($point && strlen($point) > 3)
                <li>{{ $point }}@if(!str_ends_with($point, '.')).@endif</li>
                @endif
            @endforeach
        </ul>
        @endif
    </div>
    @endforeach
    @endif

    <!-- Projects -->
    @if($projects->count() > 0)
    <div class="section-title">Projects</div>
    @foreach($projects as $project)
    <div class="entry">
        <div class="entry-header">
            <div class="entry-left">
                {{ $project->title }}
                @if($project->technologies) • {{ is_array($project->technologies) ? implode(', ', $project->technologies) : $project->technologies }}@endif
            </div>
            <div class="entry-right">
                @if($project->github_url)<a href="{{ $project->github_url }}" style="font-weight: normal;">GitHub</a>@endif
                @if($project->github_url && $project->demo_url) • @endif
                @if($project->demo_url)<a href="{{ $project->demo_url }}" style="font-weight: normal;">Live Demo</a>@endif
            </div>
        </div>
        @if($project->description)
        <ul>
            @php
                $descriptions = is_array($project->description) ? $project->description : explode('.', $project->description);
            @endphp
            @foreach($descriptions as $point)
                @php
                    $point = trim($point);
                @endphp
                @if($point && strlen($point) > 3)
                <li>{{ $point }}@if(!str_ends_with($point, '.')).@endif</li>
                @endif
            @endforeach
        </ul>
        @endif
    </div>
    @endforeach
    @endif

    <!-- Education -->
    @if($education->count() > 0)
    <div class="section-title">Education</div>
    @foreach($education as $edu)
    <div class="entry">
        <div class="entry-header">
            <div class="entry-left">{{ $edu->institution }}</div>
            <div class="entry-right">
                @if($edu->start_date){{ $edu->start_date->format('M Y') }} – {{ $edu->end_date ? $edu->end_date->format('M Y') : 'Present' }}@endif
            </div>
        </div>
        <div class="entry-subtitle">{{ $edu->degree }}@if($edu->field_of_study) in {{ $edu->field_of_study }}@endif</div>
    </div>
    @endforeach
    @endif
</body>
</html>
