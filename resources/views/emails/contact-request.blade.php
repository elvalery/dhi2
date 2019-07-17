<div>New contact request:</div>
@if ($contact->phone)<div>Phone: {{ $contact->phone }}</div>@endif
@if ($contact->email)<div>Email: {{ $contact->email }}</div>@endif
@if ($contact->description)<div>Description: {{ $contact->description }}</div>@endif
@if ($contact->actions->count())<div>Services: @foreach ($contact->actions as $action) {{ $action->name }}, @endforeach </div>@endif
@if ($contact->file)<div>File: {{ $contact->file }}</div>@endif

<div>Timestamp: {{ $contact->created_at }}</div>
