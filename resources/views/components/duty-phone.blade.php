@props(['class' => ''])
@php
$dutyData = cache()->remember('duty_phone', 300, function () {
    try {
        $duty = \App\Models\DutySchedule::getCurrentDuty();
        $phone = $duty?->manager?->phone;
        return [
            'phone' => $phone,
            'href' => $phone ? 'tel:'.preg_replace('/[^\d\+]/', '', $phone) : null
        ];
    } catch (\Exception $e) {
        return [
            'phone' => null,
            'href' => null
        ];
    }
});
@endphp

@if($dutyData['phone'] && $dutyData['href'])
<a href="{{ $dutyData['href'] }}" {{ $attributes->merge(['class' => $class]) }}>{{ $dutyData['phone'] }}</a>
@endif


