<x-mail::message>
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Oops! Terjadi Kesalahan')
@else
# @lang('Halo!')
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
<p style="color: #555;">{{ $line }}</p>
@endforeach

{{-- Action Button --}}
@isset($actionText)
<x-mail::button :url="$actionUrl" :color="'primary'" style="background-color: #3498db; padding: 12px;">
    {{ $actionText }}
</x-mail::button>
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
<p style="color: #777;">{{ $line }}</p>
@endforeach

{{-- Custom Footer --}}
<p style="font-size: 12px; color: #888; text-align: center;">
    Terima kasih telah menggunakan layanan kami. Hubungi kami jika ada pertanyaan lebih lanjut.
</p>

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Salam,')<br>
{{ config('app.name') }}
@endif

</x-mail::message>
