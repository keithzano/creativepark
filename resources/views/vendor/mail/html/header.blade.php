<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://creativepark.co.za/images/logo.png" class="logo" alt="creative park Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
