<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'HashZo')
<span style="font-size: 16px;">HashZo</span>
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
