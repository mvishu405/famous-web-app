<div {{ $attributes->merge([ 'class' => 'alert alert-' . $level . ' alert-dismissible' ]) }}>
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    
    @if (is_array($message))
    <ul style="margin-bottom: 0;">
        @foreach($message as $item)
        <li>{{ $item }}</li>
        @endforeach
    </ul>
   @else
   {{ $message }}
   @endif

   {{ $slot }}
</div>