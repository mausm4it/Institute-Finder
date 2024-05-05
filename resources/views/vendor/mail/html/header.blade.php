@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img width="250px" src="{{ asset('storage/app/' . $settings->logo) }}" class="logo"
                    alt="{{ $settings->name }}">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
